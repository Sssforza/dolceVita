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
<!-- <pre>
    <? //print_r($arResult)?>
</pre> -->
<section class="services services_attendance">
    <div class="services__content container">
        <? foreach ($arResult["ITEMS"] as $key => $value) { ?>
            <? if (trim($value["IBLOCK_SECTION_CODE"]["CODE"]) == 'programmy' ) {
                $programmy = 'servicesCard_programm';
            } ?>
            <div class="services__item servicesCard <?= $programmy?? ''?>">
                <div class="servicesCard__header">
                    <div class="servicesCard__img" style="background-image:url(/dist/img/servicesCardImg-1.png)"></div>
                    <div class="servicesCard__wrapper">
                        <div class="servicesCard__title"><?= $value["NAME"]?></div>
                        <div class="servicesCard__description">
                            4-этапная программа восстановления упругости кожи и коррекции фигуры 
                        </div>
                    </div>
                    <? if (!empty($programmy)) { ?>
                        <div class="servicesCard__programm">программа</div>
                    <? } ?>
                </div>
                <div class="servicesCard__bottom">
                    <div class="servicesCard__list">
                        <div class="servicesCard__box">
                            <div class="servicesCard__what">1 этап</div>
                            <div class="servicesCard__how">Криолиполиз</div>
                        </div>
                        <div class="servicesCard__box">
                            <div class="servicesCard__what">2 этап</div>
                            <div class="servicesCard__how">LPG-массаж</div>
                        </div>
                        <div class="servicesCard__box">
                            <div class="servicesCard__what">3 этап</div>
                            <div class="servicesCard__how">Лазерный аппарат fotona 4d</div>
                        </div>
                    </div>
                    <div class="servicesCard__more">
                        <a class="servicesCard__details popupMoreStage_js" href="#popupMoreStage">Подробнее об этапах</a>
                    </div>
                </div>
            </div>
        <? } ?>
        <? if ($key > 4) { ?>
            <div class="services__item servicesCard servicesCardBig">
                <div class="servicesCardBig__content">
                    <div class="servicesCardBig__title">больше услуг</div>
                    <div class="servicesCardBig__more">
                        <div class="servicesCardBig__link">посмотреть</div>
                    </div>
                </div>
            </div>
        <? } ?>
    </div>
</section>