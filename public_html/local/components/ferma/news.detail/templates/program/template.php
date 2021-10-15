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
<main class="main">
    <section class="comeBack comeBack_banerSection">
        <div class="comeBack__content container">
            <a href="/team/" class="comeBack__link">
                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/comeBackArrow.svg';?>
                <div class="comeBack__page">Косметология</div>
            </a>
        </div>
    </section>
    <section class="page page_service">
        <section class="banerService" style="background-image:url(<?= $arResult['DETAIL_PICTURE']['SRC']?>)">
            <div class="containerMin">
                <div class="banerService__content">
                    <div class="banerService__title gradientHeader_js"><?= $arResult["NAME"]?></div>
                    <?$APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array(
                            "START_FROM" => "0",
                            "PATH" => "",
                            "SITE_ID" => "s1"
                        )
                    );?>
                </div>
            </div>
        </section>
        <section class="contentService" data-midnight="gray">
            <div class="containerMin">
                <div class="contentService__content">
                    <section class="contentService__main">
                        <div class="contentService__description">
                            <?= $arResult["PREVIEW_TEXT"]?>
                        </div>
                        <div class="contentService__anchors">
                            <div class="teamList teamList_service">
                                <div class="teamList__content">
                                    <? if ($arResult["PROPERTIES"]["BEFORE_AND_AFTER"]["VALUE"]) { ?>
                                        <div class="teamList__item anchorScroll_js active" data-anchor="result">Результат</div>
                                    <? } ?>
                                    <? if ($arResult["PROPERTIES"]["STAGE"]["VALUE"]) { ?>
                                        <div class="teamList__item anchorScroll_js" data-anchor="program">Программа</div>
                                    <? } ?>
                                    <? if ($arResult["REVIEWS"]) { ?>
                                        <div class="teamList__item anchorScroll_js" data-anchor="reviews">Отзывы</div>
                                    <? } ?>
                                    <? if ($arResult["PROPERTIES"]["PRICE"]["VALUE"]) {?>
                                        <div class="teamList__item anchorScroll_js" data-anchor="price">Стоимость</div>
                                    <? } ?>
                                    <? if ($arResult["PROPERTIES"]["EQUIPMENT"]["VALUE"]) { ?>
                                        <div class="teamList__item anchorScroll_js" data-anchor="equipment">Оборудование</div>
                                    <? } ?>
                                    <? if ($arResult["PROPERTIES"]["SPECIALISTS"]["VALUE"]) { ?>
                                        <div class="teamList__item anchorScroll_js" data-anchor="specialists">Специалисты</div>
                                    <? } ?>
                                    <? if ($arResult["PROPERTIES"]["INDICATIONS"]["VALUE"] || $arResult["PROPERTIES"]["CONTRAINDICATIONS"]["VALUE"]) { ?>
                                        <div class="teamList__item anchorScroll_js" data-anchor="indications">Показания</div>
                                    <? } ?>
                                </div>
                            </div>
                        </div>
                        <? if ($arResult["PROPERTIES"]["BEFORE_AND_AFTER"]["VALUE"]) { ?>
                            <div class="contentService__result" id="result">
                                <div class="portfolioSliderFor portfolioSliderFor_js">
                                    <? foreach ($arResult["PROPERTIES"]["BEFORE_AND_AFTER"]["VALUE"] as $value) { ?>
                                        <div class="portfolioSliderFor__item">
                                            <div class="portfolioSliderFor__wrapper">
                                                <div class="portfolioSliderFor__img twentytwenty_js">
                                                    <? $renderBefore = CFile::ResizeImageGet($arResult['BEFORE_AND_AFTER'][$value]['BEFORE']['FILE'], array('width'=>363), BX_RESIZE_IMAGE_EXACT, true);?>
                                                    <? $renderAfter = CFile::ResizeImageGet($arResult['BEFORE_AND_AFTER'][$value]['AFTER']['FILE'], array('width'=>363), BX_RESIZE_IMAGE_EXACT, true);?>
                                                    <img src="<?= $renderBefore['src']?> ">
                                                    <img src="<?= $renderAfter['src']?> ">
                                                </div>
                                                <div class="portfolioSliderFor__pseudoElements">
                                                    <span>До</span>
                                                    <span>После</span>
                                                </div>
                                            </div>
                                            <div class="portfolioSliderFor__description">
                                                <div class="portfolioSliderFor__procedure">Была выполнена процедура</div>
                                                <div class="portfolioSliderFor__name">
                                                    <?= $arResult["BEFORE_AND_AFTER"][$value]["NAME"]?>
                                                </div>
                                            </div>
                                        </div>
                                    <? } ?>
                                </div>
                                <div class="portfolioSliderNav portfolioSliderNav_js">
                                    <div class="portfolioSliderNav__list">
                                        <? foreach ($arResult["PROPERTIES"]["BEFORE_AND_AFTER"]["VALUE"] as $nav => $foto) { ?>
                                            <? $renderPrewAfter = CFile::ResizeImageGet($arResult['BEFORE_AND_AFTER'][$foto]['AFTER']['FILE'], array('width'=>142), BX_RESIZE_IMAGE_EXACT, true);?>
                                            <div class="portfolioSliderNav__item <?= $nav == 0 ? 'active' : ''?>" data-slide="<?= $nav?>">
                                                <div class="portfolioSliderNav__bg" style="background-image:url(<?= $renderPrewAfter['src']?>)"></div>
                                            </div>
                                        <? } ?>
                                    </div>
                                </div>
                            </div>
                        <? } ?>
                        <? if ($arResult["PROPERTIES"]["STAGE"]["VALUE"]) { ?>
                            <div class="contentService__stage serviceStage" id="program">
                                <div class="serviceStage__title">
                                    Программа состоит из <?= count($arResult["ELEMENTS"])?> этапов
                                </div>
                                <div class="serviceStage__items">
                                    <? $stage = 1;?>
                                    <? foreach ($arResult["PROPERTIES"]["STAGE"]["VALUE"] as $key => $value) { ?>
                                        <div class="serviceStage__phase serviceStageItem_js <?= $stage == 1 ? 'show' : ''?>">
                                            <div class="serviceStage__contain">
                                                <div class="serviceStage__header">
                                                    <div class="serviceStage__content">
                                                        <div class="serviceStage__polygon">
                                                            <span><?= $stage?></span>
                                                        </div>
                                                        <div class="serviceStage__wrapper">
                                                            <div class="serviceStage__name"><?= $arResult["PROPERTIES"]["STAGE"]["DESCRIPTION"][$key]?></div>
                                                            <div class="serviceStage__list">
                                                                <? if ($arResult["ELEMENTS"][$value]["DURATION_PROCEDURE"]["VALUE"]) { ?>
                                                                    <div class="serviceStage__item">
                                                                        <div class="serviceStage__top">Длительность</div>
                                                                        <div class="serviceStage__bottom"><?= $arResult["ELEMENTS"][$value]["DURATION_PROCEDURE"]["VALUE"]?></div>
                                                                    </div>
                                                                <? } ?>
                                                                <? if ($arResult["ELEMENTS"][$value]["NUMBER_PROCEDURES"]["VALUE"]) { ?>
                                                                    <div class="serviceStage__item">
                                                                        <div class="serviceStage__top">Кол-во процедур</div>
                                                                        <div class="serviceStage__bottom"><?= $arResult["ELEMENTS"][$value]["NUMBER_PROCEDURES"]["VALUE"]?></div>
                                                                    </div>
                                                                <? } ?>
                                                                <? if ($arResult["ELEMENTS"][$value]["EQUIPMENT"]["VALUE"]) { ?>
                                                                    <div class="serviceStage__item">
                                                                        <div class="serviceStage__top">Оборудование</div>
                                                                        <div class="serviceStage__bottom">
                                                                            <a href="#" class="serviceStage__link"><?= $arResult["ELEMENTS"][$value]["EQUIPMENT"]["INFO"]["NAME"]?></a>
                                                                        </div>
                                                                    </div>
                                                                <? } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="serviceStage__seo">
                                                    <div class="serviceStage__box">
                                                        <div class="serviceStage__after">Результат после процедуры</div>
                                                        <div class="serviceStage__text">
                                                            Криолиполиз длится всего 1,5 часа&nbsp;&mdash; за&nbsp;это время можно устранить до&nbsp;35% жира 
                                                            в&nbsp;обрабатываемой зоне. Пока идет процедура, можно расслабиться, полистать журнал 
                                                            и&nbsp;даже уснуть. За&nbsp;день можно провести до&nbsp;6&nbsp;процедур на&nbsp;разных участках 
                                                            тела, причем для достижения эффекта достаточно одного сеанса.
                                                        </div>
                                                    </div>
                                                    <? if ($arResult["ELEMENTS"][$value]["DETAIL_TEXT"]) { ?>
                                                        <div class="serviceStage__box">
                                                            <div class="serviceStage__after">Принцип действия</div>
                                                            <div class="serviceStage__text">
                                                                <?= $arResult["ELEMENTS"][$value]["DETAIL_TEXT"]?>
                                                            </div>
                                                        </div>
                                                    <? } ?>
                                                </div>
                                                <div class="serviceStage__view stageView">
                                                    <div class="stageView__list stageViewSlider_js">
                                                        <? if ($arResult["ELEMENTS"][$value]["STEP_ONE_HEADING"]["VALUE"]) { ?>
                                                            <? $oneFoto = CFile::ResizeImageGet($arResult["ELEMENTS"][$value]['STEP_ONE_PHOTO']['VALUE'], array('width'=>271), BX_RESIZE_IMAGE_EXACT, true);?>
                                                            <div class="stageView__item">
                                                                <div class="stageView__number">1</div>
                                                                <div class="stageView__img">
                                                                    <div class="stageView__image" style="background-image:url(<?= $oneFoto['src']?>)"></div>
                                                                </div>
                                                                <div class="stageView__wrapper">
                                                                    <div class="stageView__name"><?= $arResult["ELEMENTS"][$value]["STEP_ONE_HEADING"]["VALUE"]?></div>
                                                                    <div class="stageView__description">
                                                                        <?= $arResult["ELEMENTS"][$value]["STEP_ONE_DESCRIPTION"]["VALUE"]["TEXT"]?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <? } ?>
                                                        <? if ($arResult["ELEMENTS"][$value]["STEP_TWO_HEADING"]["VALUE"]) { ?>
                                                            <? $twoFoto = CFile::ResizeImageGet($arResult["ELEMENTS"][$value]['STEP_TWO_PHOTO']['VALUE'], array('width'=>271), BX_RESIZE_IMAGE_EXACT, true);?>
                                                            <div class="stageView__item">
                                                                <div class="stageView__number">2</div>
                                                                <div class="stageView__img">
                                                                    <div class="stageView__image" style="background-image:url(<?= $twoFoto['src']?>)"></div>
                                                                </div>
                                                                <div class="stageView__wrapper">
                                                                    <div class="stageView__name"><?= $arResult["ELEMENTS"][$value]["STEP_TWO_HEADING"]["VALUE"]?></div>
                                                                    <div class="stageView__description">
                                                                        <?= $arResult["ELEMENTS"][$value]["STEP_TWO_DESCRIPTION"]["VALUE"]["TEXT"]?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <? } ?>
                                                        <? if ($arResult["ELEMENTS"][$value]["STEP_THREE_HEADING"]["VALUE"]) { ?>
                                                            <? $threeFoto = CFile::ResizeImageGet($arResult["ELEMENTS"][$value]['STEP_THREE_PHOTO']['VALUE'], array('width'=>271), BX_RESIZE_IMAGE_EXACT, true);?>
                                                            <div class="stageView__item">
                                                                <div class="stageView__number">3</div>
                                                                <div class="stageView__img">
                                                                    <div class="stageView__image" style="background-image:url(<?= $threeFoto['src']?>)"></div>
                                                                </div>
                                                                <div class="stageView__wrapper">
                                                                    <div class="stageView__name"><?= $arResult["ELEMENTS"][$value]["STEP_THREE_HEADING"]["VALUE"]?></div>
                                                                    <div class="stageView__description">
                                                                        <?= $arResult["ELEMENTS"][$value]["STEP_THREE_DESCRIPTION"]["VALUE"]["TEXT"]?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <? } ?>
                                                        <? if ($arResult["ELEMENTS"][$value]["STEP_FOUR_HEADING"]["VALUE"]) { ?>
                                                            <? $fourFoto = CFile::ResizeImageGet($arResult["ELEMENTS"][$value]['STEP_FOUR_PHOTO']['VALUE'], array('width'=>271), BX_RESIZE_IMAGE_EXACT, true);?>
                                                            <div class="stageView__item">
                                                                <div class="stageView__number">4</div>
                                                                <div class="stageView__img">
                                                                    <div class="stageView__image" style="background-image:url(<?= $fourFoto['src']?>)"></div>
                                                                </div>
                                                                <div class="stageView__wrapper">
                                                                    <div class="stageView__name"><?= $arResult["ELEMENTS"][$value]["STEP_FOUR_HEADING"]["VALUE"]?></div>
                                                                    <div class="stageView__description">
                                                                        <?= $arResult["ELEMENTS"][$value]["STEP_FOUR_DESCRIPTION"]["VALUE"]["TEXT"]?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <? } ?>
                                                        <? if ($arResult["ELEMENTS"][$value]["STEP_FIVE_HEADING"]["VALUE"]) { ?>
                                                            <? $fiveFoto = CFile::ResizeImageGet($arResult["ELEMENTS"][$value]['STEP_FIVE_PHOTO']['VALUE'], array('width'=>271), BX_RESIZE_IMAGE_EXACT, true);?>
                                                            <div class="stageView__item">
                                                                <div class="stageView__number">5</div>
                                                                <div class="stageView__img">
                                                                    <div class="stageView__image" style="background-image:url(<?= $fiveFoto['src']?>)"></div>
                                                                </div>
                                                                <div class="stageView__wrapper">
                                                                    <div class="stageView__name"><?= $arResult["ELEMENTS"][$value]["STEP_FIVE_HEADING"]["VALUE"]?></div>
                                                                    <div class="stageView__description">
                                                                        <?= $arResult["ELEMENTS"][$value]["STEP_FIVE_DESCRIPTION"]["VALUE"]["TEXT"]?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                         <? } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="serviceStage__all serviceStageBtn_js">
                                                <span class="serviceStage__all_expand">Развернуть</span>
                                                <span class="serviceStage__all_collapse">Свернуть</span>
                                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/serviceStageAll.svg';?>
                                            </div>
                                        </div>
                                        <? $stage++?>
                                    <? } ?>
                                </div>
                            </div>
                        <? } ?>
                        <? if ($arResult["REVIEWS"]) { ?>
                            <div class="contentService__reviews serviceStage serviceReviews serviceReviews_js" id="reviews">
                                <div class="serviceStage__title">
                                    Отзывы о процедуре
                                </div>
                                <div class="serviceReviews__content">
                                    <div class="serviceReviews__list serviceReviewsSlider_js">
                                        <? foreach ($arResult["REVIEWS"] as $key => $value) { ?>
                                            <div class="serviceReviews__item serviceReviewsItem_js <?= $key == 0 ? 'active': '';?>" data-people="<?= $key?>">
                                                 <? $reviews_pic = CFile::ResizeImageGet($value['PREVIEW_PICTURE'], array('width'=>80), BX_RESIZE_IMAGE_EXACT, true);?>
                                                <div class="serviceReviews__img" style="background-image:url(<?= $reviews_pic['src'];?>)"></div>
                                                <div class="serviceReviews__name"><?= $value["NAME"]?></div>
                                                <div class="serviceReviews__date"><?= FormatDateFromDB($value["DATE_CREATE"], 'DD.MM.YYYY')?></div>
                                            </div>
                                        <? } ?>
                                    </div>
                                    <div class="serviceReviews__info serviceReviewsInfo_js">
                                        <? foreach ($arResult["REVIEWS"] as $key => $value) { ?>
                                            <div class="serviceReviews__text serviceReviewsText_js <?= $key == 0 ? 'show' : 'hide'?>" data-review="<?= $key?>">
                                                <div class="serviceReviews__wrapper">
                                                    <?= $value["PREVIEW_TEXT"]?>
                                                </div>
                                                <div class="serviceReviews__all serviceReviewsAll_js">
                                                    <span class="serviceReviews__all_show">Читать полностью</span>
                                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/asideService.svg';?>
                                                </div>
                                            </div>
                                        <? } ?>
                                    </div>
                                </div>
                            </div>
                        <? } ?>
                        <? if ($arResult["PROPERTIES"]["PRICE"]["VALUE"]) {?>
                            <div class="contentService__price serviceStage servicePrice" id="price">
                                <div class="serviceStage__title">
                                    Стоимость
                                </div>
                                <div class="servicePrice__content">
                                    <div class="servicePrice__list">
                                        <? foreach ($arResult["PROPERTIES"]["PRICE"]["VALUE"] as $price) { ?>
                                            <a href="#" class="servicePrice__item">
                                                <div class="servicePrice__equipmenent"><?= $price["TITLE_LINE"]?></div>
                                                <div class="servicePrice__cost"><?= $price["VALUE_LINE"]?></div>
                                            </a>
                                        <? } ?>
                                    </div>
                                    <div class="btnBlueBorder servicePrice__btn servicePriceBtn_js">Показать больше</div>
                                </div>
                            </div>
                        <? } ?>
                        <? if ($arResult["PROPERTIES"]["EQUIPMENT"]["VALUE"]) { ?>
                            <div class="contentService__equipmenent serviceStage serviceEquipmenent" id="equipment">
                                <div class="serviceEquipmenent__content">
                                    <div class="serviceEquipmenent__description">
                                        <div class="serviceStage__title">
                                            Оригинальное оборудование
                                        </div>
                                        <div class="serviceEquipmenent__text">
                                            Fotona 4D&nbsp;&mdash; новейшая технология омоложения кожи лица, которая прекрасно заменяет
                                            хирургическое вмешательство. Лазерное 4D&nbsp;омоложение&nbsp;&mdash; самый эффектный метод
                                            лечения и&nbsp;обновления кожи, содержащий в&nbsp;себе 4&nbsp;этапа очистки и&nbsp;подтяжки кожи.
                                        </div>
                                    </div>
                                    <div class="serviceEquipmenent__video">
                                        <a href="#" class="serviceEquipmenent__img" style="background-image:url(/dist/img/trash/serviceEquipmenentImg.png)"></a>
                                        <span class="serviceEquipmenent__play">
                                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/playIcon.svg';?>
                                        </span>
                                    </div>
                                    <a href="/dist/img/trash/certificate.png" class="serviceEquipmenent__warranty sliderEquipWarranty popupImage_js">
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/sliderEquipmentWarranty-i.svg';?>
                                        <div class="sliderEquipWarranty__title">Гарантия <br>подлинности</div>
                                        <div class="sliderEquipWarranty__link">Посмотреть <br>сертификат</div>
                                        <div class="sliderEquipWarranty__svg">
                                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/sliderEquipWarrantyLink.svg';?>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <? } ?>
                        <? if ($arResult["PROPERTIES"]["SPECIALISTS"]["VALUE"]) { ?>
                            <div class="contentService__specialists serviceStage serviceSpecialists specialists specialists_js" id="specialists">
                                <div class="serviceStage__title">
                                    Специалисты
                                </div>
                                <div class="serviceSpecialists__content">
                                    <div class="specialists__for specialistsFor">
                                        <div class="specialistsFor__content specialistsFor_js">
                                            <div class="specialistsFor__item">
                                                <div class="specialistsFor__description">
                                                    <div class="specialistsFor__wrapper">
                                                        <div class="specialistsFor__name">Галина Лагутова</div>
                                                        <div class="specialistsFor__block">
                                                            <ul class="specialistsFor__ul">
                                                                <li class="specialistsFor__specialization">Специализация</li>
                                                                <li class="specialistsFor__medic">Врач-косметолог, дерматолог</li>
                                                            </ul>
                                                            <ul class="specialistsFor__ul">
                                                                <li class="specialistsFor__specialization">Профессиональный опыт</li>
                                                                <li class="specialistsFor__medic">7 лет</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="specialistsFor__link">
                                                        <a href="#" class="specialistsFor__a">
                                                            <span>Подробнее</span>
                                                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialistsForLink-array.svg';?>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="specialistsFor__img">
                                                    <img src="/dist/img/specialistsForImg1.png">
                                                </div>
                                            </div>
                                            <div class="specialistsFor__item">
                                                <div class="specialistsFor__description">
                                                    <div class="specialistsFor__wrapper">
                                                        <div class="specialistsFor__name">Светлана Зуева</div>
                                                        <div class="specialistsFor__block">
                                                            <ul class="specialistsFor__ul">
                                                                <li class="specialistsFor__specialization">Специализация</li>
                                                                <li class="specialistsFor__medic">Косметолог-эстетист</li>
                                                            </ul>
                                                            <ul class="specialistsFor__ul">
                                                                <li class="specialistsFor__specialization">Профессиональный опыт</li>
                                                                <li class="specialistsFor__medic">5 лет</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="specialistsFor__link">
                                                        <a href="#" class="specialistsFor__a">
                                                            <span>Подробнее</span>
                                                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialistsForLink-array.svg';?>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="specialistsFor__img">
                                                    <img src="/dist/img/specialistsForImg1.png">
                                                </div>
                                            </div>
                                            <div class="specialistsFor__item">
                                                <div class="specialistsFor__description">
                                                    <div class="specialistsFor__wrapper">
                                                        <div class="specialistsFor__name">Татьяна Малицкая</div>
                                                        <div class="specialistsFor__block">
                                                            <ul class="specialistsFor__ul">
                                                                <li class="specialistsFor__specialization">Специализация</li>
                                                                <li class="specialistsFor__medic">Косметолог-эстетист</li>
                                                            </ul>
                                                            <ul class="specialistsFor__ul">
                                                                <li class="specialistsFor__specialization">Профессиональный опыт</li>
                                                                <li class="specialistsFor__medic">7 лет</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="specialistsFor__link">
                                                        <a href="#" class="specialistsFor__a">
                                                            <span>Подробнее</span>
                                                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialistsForLink-array.svg';?>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="specialistsFor__img">
                                                    <img src="/dist/img/specialistsForImg1.png">
                                                </div>
                                            </div>
                                            <div class="specialistsFor__item">
                                                <div class="specialistsFor__description">
                                                    <div class="specialistsFor__wrapper">
                                                        <div class="specialistsFor__name">Елена Пономарева</div>
                                                        <div class="specialistsFor__block">
                                                            <ul class="specialistsFor__ul">
                                                                <li class="specialistsFor__specialization">Специализация</li>
                                                                <li class="specialistsFor__medic">Специалист по коррекции фигуры и массажу</li>
                                                            </ul>
                                                            <ul class="specialistsFor__ul">
                                                                <li class="specialistsFor__specialization">Профессиональный опыт</li>
                                                                <li class="specialistsFor__medic">10 лет</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="specialistsFor__link">
                                                        <a href="#" class="specialistsFor__a">
                                                            <span>Подробнее</span>
                                                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialistsForLink-array.svg';?>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="specialistsFor__img">
                                                    <img src="/dist/img/specialistsForImg1.png">
                                                </div>
                                            </div>
                                            <div class="specialistsFor__item">
                                                <div class="specialistsFor__description">
                                                    <div class="specialistsFor__wrapper">
                                                        <div class="specialistsFor__name">Кристина Барабина</div>
                                                        <div class="specialistsFor__block">
                                                            <ul class="specialistsFor__ul">
                                                                <li class="specialistsFor__specialization">Специализация</li>
                                                                <li class="specialistsFor__medic">Врач-косметолог, дерматолог</li>
                                                            </ul>
                                                            <ul class="specialistsFor__ul">
                                                                <li class="specialistsFor__specialization">Профессиональный опыт</li>
                                                                <li class="specialistsFor__medic">7 лет</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="specialistsFor__link">
                                                        <a href="#" class="specialistsFor__a">
                                                            <span>Подробнее</span>
                                                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialistsForLink-array.svg';?>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="specialistsFor__img">
                                                    <img src="/dist/img/specialistsForImg1.png">
                                                </div>
                                            </div>
                                            <div class="specialistsFor__item">
                                                <div class="specialistsFor__description">
                                                    <div class="specialistsFor__wrapper">
                                                        <div class="specialistsFor__name">Ангелина Линова</div>
                                                        <div class="specialistsFor__block">
                                                            <ul class="specialistsFor__ul">
                                                                <li class="specialistsFor__specialization">Специализация</li>
                                                                <li class="specialistsFor__medic">Врач-косметолог, дерматолог</li>
                                                            </ul>
                                                            <ul class="specialistsFor__ul">
                                                                <li class="specialistsFor__specialization">Профессиональный опыт</li>
                                                                <li class="specialistsFor__medic">7 лет</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="specialistsFor__link">
                                                        <a href="#" class="specialistsFor__a">
                                                            <span>Подробнее</span>
                                                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialistsForLink-array.svg';?>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="specialistsFor__img">
                                                    <img src="/dist/img/specialistsForImg1.png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <? } ?>
                        <? if ($arResult["PROPERTIES"]["INDICATIONS"]["VALUE"] || $arResult["PROPERTIES"]["CONTRAINDICATIONS"]["VALUE"]) { ?>
                            <div class="contentService__testimony serviceTestimony serviceTestimony_js" id="indications">
                                <div class="serviceTestimony__content">
                                    <? if ($arResult["PROPERTIES"]["INDICATIONS"]["VALUE"]) { ?>
                                        <div class="serviceTestimony__box">
                                            <div class="serviceTestimony__title">
                                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/serviceTestimonyPossible.svg';?>
                                                <span>Показания к процедуре</span>
                                            </div>
                                            <div class="serviceTestimony__list">
                                                <? foreach ($arResult["PROPERTIES"]["INDICATIONS"]["VALUE"] as $ind => $indicat) { ?>
                                                    <div class="serviceTestimony__item">
                                                        <div class="serviceTestimony__about <?= empty($indicat["VALUE_LINE"]) ? '' : 'hover serviceTestimonyAbout_js'?>">
                                                            <span>
                                                                <?= $indicat["TITLE_LINE"]?>
                                                            </span>
                                                            <? if (!empty($indicat["VALUE_LINE"])) { ?>
                                                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/servicesSelected-i.svg';?>
                                                            <? } ?>
                                                        </div>
                                                        <? if (!empty($indicat["VALUE_LINE"])) { ?>
                                                            <div class="serviceTestimony__text">
                                                                <?= $indicat["VALUE_LINE"]?>
                                                            </div>
                                                        <? } ?>
                                                    </div>
                                                <? } ?>
                                            </div>
                                        </div>
                                    <? } ?>
                                    <? if ($arResult["PROPERTIES"]["CONTRAINDICATIONS"]["VALUE"]) { ?>
                                        <div class="serviceTestimony__box">
                                            <div class="serviceTestimony__title">
                                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/serviceTestimonyForbidden.svg';?>
                                                <span>Противопоказания</span>
                                            </div>
                                            <div class="serviceTestimony__list">
                                                <? foreach ($arResult["PROPERTIES"]["CONTRAINDICATIONS"]["VALUE"] as $cont => $contrain) { ?>
                                                    <div class="serviceTestimony__item">
                                                        <div class="serviceTestimony__about <?= empty($contrain["VALUE_LINE"]) ? '' : 'hover serviceTestimonyAbout_js'?>">
                                                            <span>
                                                                <?= $contrain["TITLE_LINE"]?>
                                                            </span>
                                                            <? if (!empty($contrain["VALUE_LINE"])) { ?>
                                                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/servicesSelected-i.svg';?>
                                                            <? } ?>
                                                        </div>
                                                        <? if (!empty($contrain["VALUE_LINE"])) { ?>
                                                            <div class="serviceTestimony__text">
                                                                <?= $contrain["VALUE_LINE"]?>
                                                            </div>
                                                        <? } ?>
                                                    </div>
                                                <? } ?>
                                            </div>
                                        </div>
                                    <? } ?>
                                </div>
                            </div>
                        <? } ?>
                    </section>
                    <aside class="contentService__aside asideService asideService_js">
                        <div class="asideService__header">
                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/asideService.svg';?>
                            <span>Кратко о процедуре</span>
                        </div>
                        <div class="asideService__wrapper">
                            <? if ($arResult["PROPERTIES"]["RESULTAT"]["VALUE"]) { ?>
                                <div class="asideService__title">
                                    <?= $arResult["PROPERTIES"]["RESULTAT"]["VALUE"];?>
                                </div>
                            <? } ?>
                            <div class="asideService__list">
                                <? if ($arResult["PROPERTIES"]["DURATION_PROCEDURE"]["VALUE"]) {?>
                                    <div class="asideService__item">
                                        <div class="asideService__what">Длительность</div>
                                        <div class="asideService__answer"><?= $arResult["PROPERTIES"]["DURATION_PROCEDURE"]["VALUE"]?></div>
                                    </div>
                                <? } ?>
                                <? if ($arResult["PROPERTIES"]["NUMBER_PROCEDURES"]["VALUE"]) {?>
                                    <div class="asideService__item">
                                        <div class="asideService__what">Процедуры</div>
                                        <div class="asideService__answer"><?= $arResult["PROPERTIES"]["NUMBER_PROCEDURES"]["VALUE"]?></div>
                                    </div>
                                <? } ?>
                                <div class="asideService__item">
                                    <div class="asideService__what">Оборудование</div>
                                    <div class="asideService__answer">
                                        <? $i =1;?>
                                        <? foreach($arResult["ELEMENTS"] as $equipment) { ?>
                                            <?= $equipment["EQUIPMENT"]["INFO"]["NAME"];?>
                                            <?= count($arResult["EQUIPMENT"]) > $i ? ', ' : '';?>
                                            <? $i++;?>
                                        <? } ?>
                                    </div>
                                </div>
                                <? if ($arResult["PROPERTIES"]["TOTAL_COST"]["VALUE"]) {?>
                                    <div class="asideService__item">
                                        <div class="asideService__what">Стоимость</div>
                                        <div class="asideService__answer"><?= $arResult["PROPERTIES"]["TOTAL_COST"]["VALUE"]?> ₽</div>
                                    </div>
                                <? } ?>
                            </div>
                        </div>
                        <? if ($arResult["PROPERTIES"]["ADVANTAGE_ONE"]["VALUE"]) { ?>
                            <div class="asideService__above">
                                <div class="asideService__more"><?= $arResult["PROPERTIES"]["ADVANTAGE_ONE"]["VALUE"]?></div>
                                <span class="asideService__plus"><?= $arResult["PROPERTIES"]["ADVANTAGE_THREE"]["DESCRIPTION"]?></span>
                            </div>
                        <? } ?>
                        <? if ($arResult["PROPERTIES"]["ADVANTAGE_TWO"]["VALUE"]) { ?>
                            <div class="asideService__above">
                                <div class="asideService__more"><?= $arResult["PROPERTIES"]["ADVANTAGE_TWO"]["VALUE"]?></div>
                                <span class="asideService__plus"><?= $arResult["PROPERTIES"]["ADVANTAGE_THREE"]["DESCRIPTION"]?></span>
                            </div>
                        <? } ?>
                        <? if ($arResult["PROPERTIES"]["ADVANTAGE_THREE"]["VALUE"]) { ?>
                            <div class="asideService__above">
                                <div class="asideService__more"><?= $arResult["PROPERTIES"]["ADVANTAGE_THREE"]["VALUE"]?></div>
                                <span class="asideService__plus"><?= $arResult["PROPERTIES"]["ADVANTAGE_THREE"]["DESCRIPTION"]?></span>
                            </div>
                        <? } ?>
                    </aside>
                </div>
            </div>
        </section>
        <section class="mainLines mainLines_service mainLines_js" data-midnight="gray">
            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/linesMain.svg';?>
        </section>
        <section class="sectionConsult sectionConsult_service sectionConsult_js" data-midnight="gray">
            <div class="sectionConsult__content container">
                <div class="bonusSystem__ground bonusSystem__ground_left">
                    <img src="/dist/img/formTrees01.png" alt="">
                </div>
                <form class="sectionConsult__form">
                    <div class="sectionConsult__title">Нужна консультация?</div>
                    <div class="sectionConsult__description">
                        Не&nbsp;знаете что выбрать, оставьте свой номер телефона: мы&nbsp;позвоним 
                        и&nbsp;ответим на&nbsp;все интересующие вас вопросы
                    </div>
                    <div class="sectionConsult__input">
                        <div class="envelopeInput">
                            <input class="envelopeInput__field" placeholder="Имя" type="text">
                            <span class="envelopeInput__error">
                                Введите Ваше имя
                            </span>
                        </div>
                        <div class="envelopeInput">
                            <input class="envelopeInput__field" placeholder="Телефон" type="text">
                            <span class="envelopeInput__error">
                                Неверный формат телефона
                            </span>
                        </div>
                    </div>
                    <div class="sectionConsult__send">
                        <button class="sectionConsult__button btnPurple">Записаться</button>
                        <div class="sectionConsult__privacy">
                            Нажимая кнопку &laquo;Записаться&raquo;, вы&nbsp;соглашаетесь 
                            с&nbsp;<a class="sectionConsult__policy" href="#">политикой&nbsp;конфиденциальности</a>
                        </div>
                    </div>
                </form>
                <div class="sectionConsult__practice hide">
                    <div class="sectionConsult__year">15</div>
                    <span>лет <br>профессионального <br>опыта</span>
                </div>
                <div class="bonusSystem__ground bonusSystem__ground_right">
                    <img src="/dist/img/formTrees02.png" alt="">
                </div>
            </div>
            <div class="sectionConsult__doctor">
                    <img src="/dist/img/doctor15.png">
                </div>
        </section>
        <section class="services serviceStage serviceStage_effect" data-midnight="gray">
            <div class="containerMin">
                <div class="serviceStage__title">Процедуры с похожим эффектом</div>
                    <div class="services__content">
                        <div class="servicesCard">
                            <div class="servicesCard__header">
                                <div class="servicesCard__img" style="background-image:url(/dist/img/servicesCardImg-1.png)"></div>
                                <div class="servicesCard__wrapper">
                                    <div class="servicesCard__title">Криолиполиз</div>
                                    <div class="servicesCard__description">
                                        Выборочное воздействие позволяет избавиться от&nbsp;жира в&nbsp;конкретных местах
                                    </div>
                                </div>
                            </div>
                            <div class="servicesCard__bottom">
                                <div class="servicesCard__list">
                                    <div class="servicesCard__box">
                                        <div class="servicesCard__what">Длительность</div>
                                        <div class="servicesCard__how">90 мин</div>
                                    </div>
                                    <div class="servicesCard__box">
                                        <div class="servicesCard__what">Процедуры</div>
                                        <div class="servicesCard__how">4 сеанса</div>
                                    </div>
                                    <div class="servicesCard__box">
                                        <div class="servicesCard__what">Стоимость</div>
                                        <div class="servicesCard__how">от 40 000 ₽</div>
                                    </div>
                                </div>
                                <div class="servicesCard__equipment">
                                    <div class="servicesCard__facilities">Оборудование</div>
                                    <div class="servicesCard__name">Лазерный аппарат fotona 4d</div>
                                </div>
                            </div>
                        </div>
                        <div class="servicesCard">
                            <div class="servicesCard__header">
                                <div class="servicesCard__img" style="background-image:url(/dist/img/servicesCardImg-1.png)"></div>
                                <div class="servicesCard__wrapper">
                                    <div class="servicesCard__title">Морское утончение</div>
                                    <div class="servicesCard__description">
                                        Процедура обеспечивает двойной эффект утончения: препятствует образованию новых лишних 
                                        объемов и&nbsp;устраняет уже существующие. Массаж-уход.
                                    </div>
                                </div>
                            </div>
                            <div class="servicesCard__bottom">
                                <div class="servicesCard__list">
                                    <div class="servicesCard__box">
                                        <div class="servicesCard__what">Длительность</div>
                                        <div class="servicesCard__how">60 мин</div>
                                    </div>
                                    <div class="servicesCard__box">
                                        <div class="servicesCard__what">Процедуры</div>
                                        <div class="servicesCard__how">3 сеанса</div>
                                    </div>
                                    <div class="servicesCard__box">
                                        <div class="servicesCard__what">Стоимость</div>
                                        <div class="servicesCard__how">от 15 000 ₽</div>
                                    </div>
                                </div>
                                <div class="servicesCard__equipment">
                                    <div class="servicesCard__facilities">Оборудование</div>
                                    <div class="servicesCard__name">Лазерный аппарат fotona 4d</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="services services_cosmetic serviceStage" data-midnight="gray">
            <div class="containerMin">
                <div class="serviceStage__title">Для лучшего результата после процедуры <br>рекомендуем косметику</div>
                <div class="services__container">
                    <div class="cosmeticCard">
                        <div class="cosmeticCard__top">
                            <a href="" class="cosmeticCard__img" style="background-image:url(/dist/img/cosmeticCardImg-1.png)"></a>
                            <div class="cosmeticCard__title">
                                <a href="" class="cosmeticCard__name">Babor Spa</a>
                            </div>
                        </div>
                        <div class="cosmeticCard__bottom">
                            <ul class="cosmeticCard__result">
                                <li class="cosmeticCard__effect">Лифтинг</li>
                                <li class="cosmeticCard__effect">Гладкая кожа</li>
                                <li class="cosmeticCard__effect">Совершенный силуэт</li>
                            </ul>
                            <div class="cosmeticCard__wrapper">
                                <div class="cosmeticCard__price">11 500 ₽</div>
                                <div class="cosmeticCard__basket">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/cosmeticCardBasket-i.svg';?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cosmeticCard">
                        <div class="cosmeticCard__top">
                            <a href="" class="cosmeticCard__img" style="background-image:url(/dist/img/cosmeticCardImg-1.png)"></a>
                            <div class="cosmeticCard__title">
                                <a href="" class="cosmeticCard__name">Babor Spa</a>
                            </div>
                        </div>
                        <div class="cosmeticCard__bottom">
                            <ul class="cosmeticCard__result">
                                <li class="cosmeticCard__effect">Лифтинг</li>
                                <li class="cosmeticCard__effect">Гладкая кожа</li>
                                <li class="cosmeticCard__effect">Совершенный силуэт</li>
                            </ul>
                            <div class="cosmeticCard__wrapper">
                                <div class="cosmeticCard__price">11 500 ₽</div>
                                <div class="cosmeticCard__basket">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/cosmeticCardBasket-i.svg';?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cosmeticCard">
                        <div class="cosmeticCard__top">
                            <a href="" class="cosmeticCard__img" style="background-image:url(/dist/img/cosmeticCardImg-1.png)"></a>
                            <div class="cosmeticCard__title">
                                <a href="" class="cosmeticCard__name">Babor Spa</a>
                            </div>
                        </div>
                        <div class="cosmeticCard__bottom">
                            <ul class="cosmeticCard__result">
                                <li class="cosmeticCard__effect">Лифтинг</li>
                                <li class="cosmeticCard__effect">Гладкая кожа</li>
                                <li class="cosmeticCard__effect">Совершенный силуэт</li>
                            </ul>
                            <div class="cosmeticCard__wrapper">
                                <div class="cosmeticCard__price">11 500 ₽</div>
                                <div class="cosmeticCard__basket">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/cosmeticCardBasket-i.svg';?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cosmeticCard">
                        <div class="cosmeticCard__top">
                            <a href="" class="cosmeticCard__img" style="background-image:url(/dist/img/cosmeticCardImg-1.png)"></a>
                            <div class="cosmeticCard__title">
                                <a href="" class="cosmeticCard__name">Babor Spa</a>
                            </div>
                        </div>
                        <div class="cosmeticCard__bottom">
                            <ul class="cosmeticCard__result">
                                <li class="cosmeticCard__effect">Лифтинг</li>
                                <li class="cosmeticCard__effect">Гладкая кожа</li>
                                <li class="cosmeticCard__effect">Совершенный силуэт</li>
                            </ul>
                            <div class="cosmeticCard__wrapper">
                                <div class="cosmeticCard__price">11 500 ₽</div>
                                <div class="cosmeticCard__basket">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/cosmeticCardBasket-i.svg';?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <svg class="clipPath" width="224" height="248" viewBox="0 0 224 248" fill="none" xmlns="http://www.w3.org/2000/svg">
        <clipPath id="stageImg">
            <path d="M76.5 231.349L36.7827 208.419C27.9813 203.337 21.443 199.561 16.497 196.016C11.5689 192.484 8.28742 189.226 5.97184 185.215C3.65624 181.205 2.47556 176.734 1.88079 170.7C1.28384 164.644 1.28272 157.094 1.28272 146.931L1.28273 101.069C1.28273 90.9062 1.28384 83.3558 1.8808 77.3C2.47557 71.2662 3.65625 66.7953 5.97185 62.7846C8.28743 58.7739 11.5689 55.516 16.497 51.984C21.443 48.4391 27.9813 44.663 36.7827 39.5814L76.5 16.6507C85.3015 11.5692 91.8409 7.79491 97.3838 5.28401C102.907 2.78218 107.369 1.56926 112 1.56926C116.631 1.56926 121.093 2.78219 126.616 5.28402C132.159 7.79491 138.699 11.5692 147.5 16.6507L187.217 39.5815C196.019 44.663 202.557 48.4392 207.503 51.984C212.431 55.516 215.713 58.7739 218.028 62.7847C220.344 66.7954 221.524 71.2662 222.119 77.3C222.716 83.3558 222.717 90.9062 222.717 101.069L222.717 146.931C222.717 157.094 222.716 164.644 222.119 170.7C221.524 176.734 220.344 181.205 218.028 185.215C215.713 189.226 212.431 192.484 207.503 196.016C202.557 199.561 196.019 203.337 187.217 208.419L147.5 231.349C138.699 236.431 132.159 240.205 126.616 242.716C121.093 245.218 116.631 246.431 112 246.431C107.369 246.431 102.907 245.218 97.3838 242.716C91.8409 240.205 85.3015 236.431 76.5 231.349Z" fill="white" stroke="#DBE9EF" stroke-width="2"/>
        </clipPath>
    </svg>
    <svg class="clipPath serviceEquipmenent__video_svg" width="364" height="332" viewBox="0 0 364 332" fill="none" xmlns="http://www.w3.org/2000/svg">
        <clipPath id="serviceEquipmenent">
            <path opacity="0.5" d="M26.074 106.25L52.292 60.8392C60.7498 46.1897 67.0758 35.234 73.025 26.9333C78.9678 18.6416 84.5126 13.0319 91.391 9.06066C98.2694 5.08938 105.9 3.09231 116.052 2.09158C126.215 1.08972 138.866 1.08917 155.782 1.08917L208.218 1.08916C225.134 1.08916 237.785 1.08971 247.948 2.09157C258.1 3.0923 265.731 5.08937 272.609 9.06066C279.487 13.0319 285.032 18.6416 290.975 26.9333C296.924 35.234 303.25 46.1897 311.708 60.8392L337.926 106.25C346.384 120.899 352.709 131.856 356.923 141.158C361.132 150.451 363.218 158.057 363.218 166C363.218 173.943 361.132 181.549 356.923 190.842C352.709 200.144 346.384 211.101 337.926 225.75L311.708 271.161C303.25 285.81 296.924 296.766 290.975 305.067C285.032 313.358 279.487 318.968 272.609 322.939C265.731 326.911 258.1 328.908 247.948 329.908C237.785 330.91 225.134 330.911 208.218 330.911L155.782 330.911C138.866 330.911 126.215 330.91 116.052 329.908C105.9 328.908 98.2694 326.911 91.391 322.939C84.5126 318.968 78.9678 313.358 73.025 305.067C67.0758 296.766 60.7499 285.81 52.292 271.161L26.074 225.75C17.6162 211.101 11.2912 200.144 7.07722 190.842C2.86776 181.549 0.782027 173.943 0.782027 166C0.782026 158.057 2.86776 150.451 7.07722 141.158C11.2912 131.856 17.6162 120.899 26.074 106.25Z" stroke="#8D9BB2"/>
        </clipPath>
    </svg>
</main>