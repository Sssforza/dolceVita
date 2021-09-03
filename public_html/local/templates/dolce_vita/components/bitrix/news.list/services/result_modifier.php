<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();


$rsResult = CIBlockSection::GetList(array("SORT" => "ASC"), array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ID" =>$arParams['PARENT_SECTION']), false, $arSelect = array("UF_*")); 
if($arSection = $rsResult -> GetNext())
    { 
	    $arResult["SECTION_USER_FIELDS"]["UF_RAZDEL_DESC"] = $arSection["UF_ELEMENT"];
	}