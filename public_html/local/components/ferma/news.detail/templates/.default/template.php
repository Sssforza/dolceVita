<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$programmy = false;
$class_prog = '';
if (
    !empty($arResult["SECTION"]["PATH"][0]["CODE"]) == "programmy" ||
    !empty($arParams["SECTIONS_CODE"]) == "programmy") 
{
	$programmy = true;
	$class_prog = " servicesCard_programm servicesCard_js";
}
$prewPicture = CFile::ResizeImageGet($arResult['DETAIL_PICTURE'], array('width'=>124), BX_RESIZE_IMAGE_EXACT, true);
$detailPicture = CFile::ResizeImageGet($arResult['DETAIL_PICTURE'], array('width'=>478), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true);
?>
<!-- <pre>
    <? //print_r($arResult)?>
</pre> -->
<? if (!empty($arResult)) { ?>
    <div class="services__item servicesCard<?= $class_prog?>">
        <div class="servicesCard__header">
            <div class="servicesCard__img" style="background-image:url(<?= $prewPicture['src']?>)"></div>
            <div class="servicesCard__wrapper">
                <div class="servicesCard__title"><?= $arResult["NAME"]?></div>
                <div class="servicesCard__description">
                    <? $obParser = new CTextParser;
                    $anonce = $obParser->html_cut($arResult['PREVIEW_TEXT'], 120);?>
                    <?= $anonce;?>
                </div>
            </div>
            <? if ($programmy) { ?>
            	<div class="servicesCard__programm">программа</div>
            <? } ?>
        </div>
        <div class="servicesCard__bottom">
            <? if ($programmy) {?>
                <div class="servicesCard__list">
                    <? $key = 1?>
                    <? foreach ($arResult["ELEMENTS"] as $value) { ?>
                        <div class="servicesCard__box" data-description="<?= $value['PREVIEW_TEXT'];?>">
                            <div class="servicesCard__what"><?= $key++;?> этап</div>
                            <a href="#" class="servicesCard__how"><?= $value['NAME'];?></a>
                        </div>
                    <? } ?>
                </div>
                <div class="servicesCard__more">
                    <a class="servicesCard__details popupMoreStage_js"
                        href="#popupMoreStage"
                        data-linkMore="<?= $arResult['DETAIL_PAGE_URL']?>"
                        data-linkImg="url(<?= $detailPicture['src']?>)"
                    >Подробнее об этапах</a>
                </div>
            <? } else { ?>
                <div class="servicesCard__list">
                    <? if ($arResult['PROPERTIES']['DURATION_PROCEDURE']['VALUE']) { ?>
                        <div class="servicesCard__box">
                            <div class="servicesCard__what">Длительность</div>
                            <div class="servicesCard__how"><?= $arResult['PROPERTIES']['DURATION_PROCEDURE']['VALUE']?></div>
                        </div>
                    <? } ?>
                    <? if ($arResult['PROPERTIES']['NUMBER_PROCEDURES']['VALUE']) { ?>
                        <div class="servicesCard__box">
                            <div class="servicesCard__what">Процедуры</div>
                            <div class="servicesCard__how"><?= $arResult['PROPERTIES']['NUMBER_PROCEDURES']['VALUE']?></div>
                        </div>
                    <? } ?>
                    <? if ($arResult['PROPERTIES']['TOTAL_COST']['VALUE']) { ?>
                        <div class="servicesCard__box">
                            <div class="servicesCard__what">Стоимость</div>
                            <div class="servicesCard__how">от <?= $arResult['PROPERTIES']['TOTAL_COST']['VALUE']?> ₽</div>
                        </div>
                    <? } ?>
                </div>
                <? if($arResult['PROPERTIES']['EQUIPMENT']['VALUE']) { ?>
                    <div class="servicesCard__equipment">
                        <div class="servicesCard__facilities">Оборудование</div>
                        <div class="servicesCard__name"><?= $arResult["ELEMENTS"][$arResult['PROPERTIES']['EQUIPMENT']['VALUE']]["NAME"];?></div>
                    </div>
                <? } ?>
            <? } ?>
        </div>
    </div>
<? } ?>