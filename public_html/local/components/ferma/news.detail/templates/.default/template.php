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
if (!empty($arResult["SECTION"]["PATH"][0]["CODE"]) == "programmy") {
	$programmy = true;
	$class_prog = " servicesCard_programm servicesCard_js";
}
?>
<? if (!empty($arResult)) { ?>
    <div class="services__item servicesCard<?= $class_prog?>">
        <div class="servicesCard__header">
            <div class="servicesCard__img" style="background-image:url(/dist/img/servicesCardImg-1.png)"></div>
            <div class="servicesCard__wrapper">
                <div class="servicesCard__title"><?= $arResult["NAME"]?></div>
                <div class="servicesCard__description">
                    Выборочное воздействие позволяет избавиться от&nbsp;жира в&nbsp;конкретных местах
                </div>
            </div>
            <? if ($programmy) { ?>
            	<div class="servicesCard__programm">программа</div>
            <? } ?>
        </div>
        <div class="servicesCard__bottom">
            <div class="servicesCard__list">
                <div class="servicesCard__box <?= $programmy ? 'data-description=' : ''?>">
                    <div class="servicesCard__what">Длительность</div>
                    <div class="servicesCard__how">90 мин</div>
                </div>
                <div class="servicesCard__box <?= $programmy ? 'data-description=' : ''?>">
                    <div class="servicesCard__what">Процедуры</div>
                    <div class="servicesCard__how">4 сеанса</div>
                </div>
                <div class="servicesCard__box <?= $programmy ? 'data-description=' : ''?>">
                    <div class="servicesCard__what">Стоимость</div>
                    <div class="servicesCard__how">от 40 000 ₽</div>
                </div>
            </div>
            <div class="servicesCard__equipment">
                <div class="servicesCard__facilities">Оборудование</div>
                <div class="servicesCard__name">Лазерный аппарат fotona 4d</div>
            </div>
            <? if ($programmy) { ?>
            	<div class="servicesCard__more">
	                <a class="servicesCard__details popupMoreStage_js"
	                    href="#popupMoreStage"
	                    data-linkMore="<?= $arResult['DETAIL_PAGE_URL']?>"
	                    data-linkImg="url(/dist/img/servicesCardImg-1.png)"
	                >Подробнее об этапах</a>
	            </div>
            <? } ?>
        </div>
    </div>
<? } ?>