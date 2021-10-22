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
?>
<section class="sliderMain">
    <div class="sliderMain__content sliderMain_js">
        <? foreach ($arResult["ITEMS"] as $key => $value) { ?>
            <div class="sliderMain__item <?= ($key == 0) ? 'first' : ''?>">
                <div class="sliderMain__bg" style="background-image:url(<?= $value['DETAIL_PICTURE']['SRC']?>)"></div>
                <div class="sliderMain__wrapper">
                    <div class="sliderMain__inner gradientHeader_js">
                        <div class="sliderMain__title"><?= $value["NAME"]?></div>
                        <div class="sliderMain__description">
                            <?= $value["DETAIL_TEXT"]?>
                        </div>
                        <a href="<?= $value['PROPERTIES']['LINK']['VALUE']?>" class="btnWhiteBorder sliderMain__btn">УЗНАТЬ БОЛЬШЕ</a>
                    </div>
                </div>
            </div>
        <? } ?>
    </div>
    <div class="sliderMain__nav">
        <div class="sliderMain__dots stop"></div>
        <div class="sliderMain__arrows"></div>
    </div>
    <div class="sliderMain__waves">
        <div class="sliderMain__waves_1"></div>
        <div class="sliderMain__waves_2"></div>
        <div class="sliderMain__waves_3"></div>
        <div class="sliderMain__waves_4"></div>
        <div class="sliderMain__waves_5"></div>
    </div>
</section>