<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */

CModule::IncludeModule('iblock');
$arSectionId = array();
$arFilter = array(
        'IBLOCK_ID'=>$arParams['IBLOCK_ID'],
        'GLOBAL_ACTIVE'=>'Y',
        'ACTIVE'=>'Y',
        '<=DEPTH_LEVEL' => $arParams['DEPTH_LEVEL'],
);
$arOrder = array(
        'SORT'=>'ASC',
);
$rsSections = CIBlockSection::GetList($arOrder, $arFilter, false, array(
        'ID',
        'DEPTH_LEVEL',
        'NAME',
        'SECTION_PAGE_URL',
        'IBLOCK_SECTION_ID',
        'DESCRIPTION',
        'DETAIL_PICTURE'
));
$rsElements = CIBlockElement::GetList(array('SORT' => 'ASC'), array('IBLOCK_ID' => $arParams['IBLOCK_ID']), false, false, array('ID', 'IBLOCK_ID', '*', 'PROPERTY_*'));
$menuElements = array();
while($arElement = $rsElements->Fetch()){
	$menuElements[$arElement['IBLOCK_SECTION_ID']][] = $arElement;
}
$menuItems = array();
while($arSection = $rsSections->GetNext()){
    $arSection['IS_SECTION'] = 1;
    $arSection['LINK'] = $arSection['SECTION_PAGE_URL'];
    if ($arSection['IBLOCK_SECTION_ID']){
        $menuItems[$arSection['IBLOCK_SECTION_ID']][$arSection['ID']] = $arSection;
    } else {
        $menuItems['ROOT'][$arSection['ID']] = $arSection;
    }
    $arSectionId[] = $arSection['ID'];
}
$res = CIBlock::GetByID($arParams['IBLOCK_ID']);
if($ar_res = $res->GetNext()) {
	$block_type = $ar_res;
}
if($arParams["USE_FILTER"]=="Y")
{
	if($arParams["FILTER_NAME"] == '' || !preg_match("/^[A-Za-z_][A-Za-z01-9_]*$/", $arParams["FILTER_NAME"]))
		$arParams["FILTER_NAME"] = "arrFilter";
}
else
	$arParams["FILTER_NAME"] = "";

$arParams["USE_CATEGORIES"]=$arParams["USE_CATEGORIES"]=="Y";
if($arParams["USE_CATEGORIES"])
{
	if(!is_array($arParams["CATEGORY_IBLOCK"]))
		$arParams["CATEGORY_IBLOCK"] = array();
	$ar = array();
	foreach($arParams["CATEGORY_IBLOCK"] as $key=>$value)
	{
		$value=intval($value);
		if($value>0)
			$ar[$value]=true;
	}
	$arParams["CATEGORY_IBLOCK"] = array_keys($ar);
}
$arParams["CATEGORY_CODE"]=trim($arParams["CATEGORY_CODE"]);
if($arParams["CATEGORY_CODE"] == '')
	$arParams["CATEGORY_CODE"]="CATEGORY";
$arParams["CATEGORY_ITEMS_COUNT"]=intval($arParams["CATEGORY_ITEMS_COUNT"]);
if($arParams["CATEGORY_ITEMS_COUNT"]<=0)
	$arParams["CATEGORY_ITEMS_COUNT"]=5;

if(!is_array($arParams["CATEGORY_IBLOCK"]))
	$arParams["CATEGORY_IBLOCK"] = array();
foreach($arParams["CATEGORY_IBLOCK"] as $iblock_id)
	if($arParams["CATEGORY_THEME_".$iblock_id]!="photo")
		$arParams["CATEGORY_THEME_".$iblock_id]="list";

$arDefaultUrlTemplates404 = array(
	"news" => "",
	"search" => "search/",
	"rss" => "rss/",
	"rss_section" => "#SECTION_ID#/rss/",
	"detail" => "#ELEMENT_ID#/",
	"section" => "",
);

$arDefaultVariableAliases404 = array();

$arDefaultVariableAliases = array();

$arComponentVariables = array(
	"SECTION_ID",
	"SECTION_CODE",
	"ELEMENT_ID",
	"ELEMENT_CODE",
	"DEPTH_LEVEL"
);

if($arParams["USE_SEARCH"] != "Y")
{
	unset($arDefaultUrlTemplates404["search"]);
	unset($arParams["SEF_URL_TEMPLATES"]["search"]);
}
else
{
	$arComponentVariables[] = "q";
	$arComponentVariables[] = "tags";
}

if($arParams["USE_RSS"] != "Y")
{
	unset($arDefaultUrlTemplates404["rss"]);
	unset($arDefaultUrlTemplates404["rss_section"]);
	unset($arParams["SEF_URL_TEMPLATES"]["rss"]);
	unset($arParams["SEF_URL_TEMPLATES"]["rss_section"]);
}
else
{
	$arComponentVariables[] = "rss";
}

$program = false;

/* Compatibility with deleted DETAIL_STRICT_SECTION_CHECK */
if (isset($arParams["STRICT_SECTION_CHECK"]))
	$arParams["DETAIL_STRICT_SECTION_CHECK"] = $arParams["STRICT_SECTION_CHECK"];
else
	$arParams["STRICT_SECTION_CHECK"] = $arParams["DETAIL_STRICT_SECTION_CHECK"];

if($arParams["SEF_MODE"] == "Y")
{
	$arVariables = array();

	$arUrlTemplates = CComponentEngine::makeComponentUrlTemplates($arDefaultUrlTemplates404, $arParams["SEF_URL_TEMPLATES"]);
	$arVariableAliases = CComponentEngine::makeComponentVariableAliases($arDefaultVariableAliases404, $arParams["VARIABLE_ALIASES"]);

	$engine = new CComponentEngine($this);
	if (CModule::IncludeModule('iblock'))
	{
		$engine->addGreedyPart("#SECTION_CODE_PATH#");
		$engine->setResolveCallback(array("CIBlockFindTools", "resolveComponentEngine"));
	}
	$componentPage = $engine->guessComponentPath(
		$arParams["SEF_FOLDER"],
		$arUrlTemplates,
		$arVariables
	);

	$b404 = false;
	if(!$componentPage)
	{
		$componentPage = "news";
		$b404 = true;
	}

	if ($arVariables["SECTION_CODE"] != "programmy" && $componentPage == "detail" && $block_type["CODE"] != 'services') {
		$componentPage = "section";
		$sectionID = CIBlockFindTools::GetSectionID($arVariables["SECTION_ID"], $arVariables["SECTION_CODE"], array());
		$arResult["VARIABLES"] = $arVariables["SECTION_ID"] = $sectionID;
	}

	if($componentPage == "section")
	{
		//if (isset($arVariables["SECTION_ID"]))
			//$b404 |= (intval($arVariables["SECTION_ID"])."" !== $arVariables["SECTION_ID"]);
		//else
			//$b404 |= !isset($arVariables["SECTION_CODE"]);
	}

	if($b404 && CModule::IncludeModule('iblock'))
	{
		$folder404 = str_replace("\\", "/", $arParams["SEF_FOLDER"]);
		if ($folder404 != "/")
			$folder404 = "/".trim($folder404, "/ \t\n\r\0\x0B")."/";
		if (mb_substr($folder404, -1) == "/")
			$folder404 .= "index.php";

		if ($folder404 != $APPLICATION->GetCurPage(true))
		{
			\Bitrix\Iblock\Component\Tools::process404(
				""
				,($arParams["SET_STATUS_404"] === "Y")
				,($arParams["SET_STATUS_404"] === "Y")
				,($arParams["SHOW_404"] === "Y")
				,$arParams["FILE_404"]
			);
		}
	}

	CComponentEngine::initComponentVariables($componentPage, $arComponentVariables, $arVariableAliases, $arVariables);

	if ($arVariables['SECTION_CODE'] != $arVariables['SECTION_CODE_PATH']) {
		$ar_sections= explode('/', $arVariables['SECTION_CODE_PATH']);
		$arVariables['PARENT_SECTION_ID'] = '';
		foreach ($ar_sections as $section) {
			$res = CIBlockSection::GetList(array(), array('IBLOCK_ID' => $arParams["IBLOCK_ID"], 'CODE' => $section, 'SITE_ID' => SITE_ID),false, array("ID", "IBLOCK_ID", "*", "UF_*"));
			$sec = $res->Fetch();
			$arVariables['IBLOCK_SECTION_ID'][] = $sec['ID'];
			if (empty($arVariables['PARENT_SECTION_ID'])) {
				$arVariables['PARENT_SECTION_ID'] = $sec['ID'];
			}
			$arVariables['UF_ELEMENT'] = $sec['UF_ELEMENT'];
			$arVariables['SECTION_ID'] = $sec['ID'];
		}
		foreach ($menuElements[$arVariables['SECTION_ID']] as $value) {
			$arVariables['AR_ID_ELEMENTS'][] = $value['ID'];
		}
	} else {
		if ($arVariables['SECTION_ID'] && $arVariables['SECTION_CODE']) {
			$res = CIBlockSection::GetList(array(), array('IBLOCK_ID' => $arParams["IBLOCK_ID"],'CODE' => $arVariables['SECTION_CODE'], 'ID' => $arVariables['SECTION_ID'], 'SITE_ID' => SITE_ID),false, array("ID", "IBLOCK_ID", "*", "UF_*", 'LEFT_MARGIN', 'RIGHT_MARGIN'));
			$sec = $res->Fetch();
			$arVariables['UF_ELEMENT'] = $sec['UF_ELEMENT'];
			$arVariables['CHECK_SECTION'] = false;
			if(($sec['RIGHT_MARGIN'] - $sec['LEFT_MARGIN']) > 1) {
				$arVariables['CHECK_SECTION'] = true;
			}
		}
		if ($arVariables["SECTION_ID"]) {
			$arVariables['SECTION_ID'] = $sec['ID'];
		}
		$arVariables['IBLOCK_SECTION_ID'][] = $menuItems[$arVariables['SECTION_ID']][0]["ID"];
		$arVariables['PARENT_SECTION_ID'] = $arVariables['SECTION_ID'];
		foreach ($menuElements[$arVariables['SECTION_ID']] as $value) {
			$arVariables['AR_ID_ELEMENTS'][] = $value['ID'];
		}
	}
	if ($arVariables["ELEMENT_CODE"]) {
		$elementID = CIBlockFindTools::GetElementID(false, $arVariables["ELEMENT_CODE"], false, $arVariables["SECTION_CODE"], array("IBLOCK_ID" => $block_type["ID"]));
		$arElementName = CIBlockElement::GetByID($elementID);
		if($ar_element = $arElementName->GetNext()) {
  			$elementName =  $ar_element['NAME'];
		}
		$arFilter["ID"] = $elementID;
		$arFilter["IBLOCK_TYPE"] = "services";
		$arsSelect = array("ID", "IBLOCK_ID", "PROPERTIES_*");
		CModule::IncludeModule('iblock');
		$arElement = CIBlockElement::GetList(array(), $arFilter, false, false, $arsSelect);
		while($obyElement = $arElement->GetNextElement())
		{
		    $arProps = $obyElement->GetProperties();
		    $arElementId = array_diff(array_merge((array)$arProps["SERVICES"]["VALUE"], (array)$arProps["PROGRAMS"]["VALUE"], (array)$arProps["EQUIPMENT"]["VALUE"]), array(''));
		}
		$arVariables["ELEMENT_ID"] = $elementID;
		$arVariables["AR_ELEMENT"] = $arElementId;
	}
	$arResult = array(
		"FOLDER" => $arParams["SEF_FOLDER"],
		"URL_TEMPLATES" => $arUrlTemplates,
		"VARIABLES" => $arVariables,
		"ALIASES" => $arVariableAliases,
		"MENU_ITEMS" => $menuItems,
		"IBLOCK_AR" => $block_type,
		"ELEMENT_AR" => $menuElements,
		"ELEMENT_NAME" => $elementName
	);
	// if ($arParams["ELEMENT_CODE"] || $arParams["ELEMENT_ID"]) {
	// 	$arResult["ELEMENT_1"] = 1;
	// 	$arElements = CIBlockElement::GetList(array('SORT' => 'ASC'), array('IBLOCK_ID' => $arParams['IBLOCK_ID'], 'CODE' => $arVariables['ELEMENT_CODE']), false, false, array('ID', 'IBLOCK_ID', '*', 'PROPERTY_*'));
	// 	while($element = $arElements->Fetch()){
	// 		$arResult["ELEMENT"] = $element;
	// 	}
	// }
	if($arParams["INCLUDE_IBLOCK_INTO_CHAIN"] && isset($arResult["IBLOCK_AR"]["NAME"]))
	{
		$APPLICATION->AddChainItem($arResult["IBLOCK_AR"]["NAME"], $arParams["SEF_FOLDER"]);
	}
	if($arParams["ADD_SECTIONS_CHAIN"] && isset($arResult["VARIABLES"]["SECTION_ID"]))
	{
		$APPLICATION->AddChainItem($arResult["MENU_ITEMS"]["ROOT"][$arResult["VARIABLES"]["PARENT_SECTION_ID"]]["NAME"], $arResult["MENU_ITEMS"]["ROOT"][$arResult["VARIABLES"]["PARENT_SECTION_ID"]]["~SECTION_PAGE_URL"]);
	}
	if($arParams["SET_TITLE"])
		$APPLICATION->SetTitle($arResult["MENU_ITEMS"]["ROOT"][$arResult["VARIABLES"]["PARENT_SECTION_ID"]]["NAME"]);

}
else
{
	$arVariableAliases = CComponentEngine::makeComponentVariableAliases($arDefaultVariableAliases, $arParams["VARIABLE_ALIASES"]);
	CComponentEngine::initComponentVariables(false, $arComponentVariables, $arVariableAliases, $arVariables);

	$componentPage = "";

	if ($arVariables["SECTION_CODE"] == "programmy") {
		$componentPage = "section";
	}

	if(isset($arVariables["ELEMENT_ID"]) && intval($arVariables["ELEMENT_ID"]) > 0 && $program)
		$componentPage = "detail";
	elseif(isset($arVariables["ELEMENT_CODE"]) && $arVariables["ELEMENT_CODE"] <> '' && $program)
		$componentPage = "detail";
	elseif(isset($arVariables["SECTION_ID"]) && intval($arVariables["SECTION_ID"]) > 0)
	{
		if(isset($arVariables["rss"]) && $arVariables["rss"]=="y")
			$componentPage = "rss_section";
		else
			$componentPage = "section";
	}
	elseif(isset($arVariables["SECTION_CODE"]) && $arVariables["SECTION_CODE"] <> '')
	{
		if(isset($arVariables["rss"]) && $arVariables["rss"]=="y")
			$componentPage = "rss_section";
		else
			$componentPage = "section";
	}
	elseif(isset($arVariables["q"]) && trim($arVariables["q"]) <> '')
		$componentPage = "search";
	elseif(isset($arVariables["tags"]) && trim($arVariables["tags"]) <> '')
		$componentPage = "search";
	elseif(isset($arVariables["rss"]) && $arVariables["rss"]=="y")
		$componentPage = "rss";
	else
		$componentPage = "news";

	$arResult = array(
		"FOLDER" => "",
		"URL_TEMPLATES" => array(
			"news" => htmlspecialcharsbx($APPLICATION->GetCurPage()),
			"section" => htmlspecialcharsbx($APPLICATION->GetCurPage()."?".$arVariableAliases["SECTION_ID"]."=#SECTION_ID#"),
			"detail" => htmlspecialcharsbx($APPLICATION->GetCurPage()."?".$arVariableAliases["ELEMENT_ID"]."=#ELEMENT_ID#"),
			"search" => htmlspecialcharsbx($APPLICATION->GetCurPage()),
			"rss" => htmlspecialcharsbx($APPLICATION->GetCurPage()."?rss=y"),
			"rss_section" => htmlspecialcharsbx($APPLICATION->GetCurPage()."?".$arVariableAliases["SECTION_ID"]."=#SECTION_ID#&rss=y"),
		),
		"VARIABLES" => $arVariables,
		"ALIASES" => $arVariableAliases,
		"MENU_ITEMS" => $menuItems,
	);
}
$this->includeComponentTemplate($componentPage);