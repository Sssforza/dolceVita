<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
// echo '<pre>';
// //print_r($arParams);
// echo '</pre>';
foreach ($arResult["ITEMS"] as $key => $value) {
	$rsResult = CIBlockSection::GetByID($value['IBLOCK_SECTION_ID']); 
	if($arSection = $rsResult -> GetNext())
	    { 
		    $arResult["ITEMS"][$key]["IBLOCK_SECTION_CODE"] = $arSection;
		}
}