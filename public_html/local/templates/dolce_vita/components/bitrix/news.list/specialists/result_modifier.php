<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();

$tabs = array();
if ($arResult["ITEMS"]) {
	foreach ($arResult["ITEMS"] as $key => $value) {
		if (!array_search($value["PROPERTIES"]["SPECIALIZATION"]["VALUE"], $tabs)) {
			for ($i=0; $i < count($value["PROPERTIES"]["SPECIALIZATION"]["VALUE"]); $i++) { 
				$tabs[$value["PROPERTIES"]["SPECIALIZATION"]["VALUE_ENUM_ID"][$i]] = $value["PROPERTIES"]["SPECIALIZATION"]["VALUE"][$i];
			}
		}
		if ($value["DETAIL_PICTURE"]) {
			$detail = CFile::ResizeImageGet($value["DETAIL_PICTURE"], array('width'=>267), BX_RESIZE_IMAGE_EXACT, true);
			$arResult["ITEMS"][$key]["PREVIEW_RESIZE"] = $detail;
		}
	}
	$arResult["TABS"] = $tabs;
}