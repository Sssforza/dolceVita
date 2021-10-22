<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();

if ((array)$arResult["PROPERTIES"]["BEFORE_AND_AFTER"]["VALUE"]) {
	foreach ($arResult["PROPERTIES"]["BEFORE_AND_AFTER"]["VALUE"] as $key => $value) {
		$res = CIBlockElement::GetByID($value);
		if($ar_res = $res->GetNext())
		  $arFilter["IBLOCK_ID"] = $ar_res["IBLOCK_ID"];
		$arFilter["ID"] = $value;
		unset($arFilter["SECTION_CODE"]);
		$arsSelect = array_merge($arSelect, array(
						"PROPERTIES_*",
					));
		$arElement = CIBlockElement::GetList(array(), $arFilter, false, false, $arsSelect);
		while($obyElement = $arElement->GetNextElement())
		{
			$arFields = $obyElement->GetFields();
			$arProps = $obyElement->GetProperties();
			$arProps["AFTER"]["FILE"] = CFile::GetFileArray($arProps["AFTER"]["VALUE"]);
			$arProps["BEFORE"]["FILE"] = CFile::GetFileArray($arProps["BEFORE"]["VALUE"]);
			$arResult["BEFORE_AND_AFTER"][$arFields["ID"]] = array_merge($arFields, $arProps);
		}
	}
}

$arSelect = array(
  "ID",
  "NAME",
  "IBLOCK_ID",
  "*"
);

$arFilter = array(
  "PROPERTY_SPECIALISTS" => $arResult["ID"],
  "IBLOCK_TYPE" => "services",
);

$rsElement = CIBlockElement::GetList(array("NAME" => "ASC"), $arFilter, false, array(), $arSelect);
while($arElement = $rsElement->Fetch())
{
  $arResult["SPECIALISTS"][] = $arElement;
}