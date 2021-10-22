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
        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb","come_back",Array(
                "START_FROM" => "0",
                "PATH" => "",
                "SITE_ID" => "s1",
            )
        );?>
    </section>
    <section class="page page_specialist">
        <section class="banerSection">
            <div class="banerSection__sheet banerSection__sheet_left"></div>
            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array(
                            "START_FROM" => "0",
                            "PATH" => "",
                            "SITE_ID" => "s1"
                        )
                    );?>
            <div class="banerSection__content">
                <div class="banerSection__title"><?= $arResult["NAME"]?></div>
                <div class="banerSection__description">
                    <?= $arResult["PREVIEW_TEXT"]?>
                </div>
            </div>
            <div class="banerSection__img">
                <img src="<?= $arResult["DETAIL_PICTURE"]["SRC"]?>">
            </div>
            <div class="banerSection__sheet banerSection__sheet_right"></div>
        </section>
        <section class="specialist" data-midnight="gray">
            <div class="specialist__content">
                <div class="specialist__about">
                    <div class="containerMin">
                        <div class="aboutSpecialist aboutSpecialist_js">
                            <div class="aboutSpecialist__container">
                                <div class="aboutSpecialist__content">
                                    <div class="aboutSpecialist__choices">
                                        <? if ($arResult["PROPERTIES"]["EDUCATION"]["VALUE"]) { ?>
                                            <div class="aboutSpecialist__tab aboutSpecialistTab_js active" data-tab="education">
                                                Образование
                                            </div>
                                        <? } ?>
                                        <? if ($arResult["PROPERTIES"]["QUALIFICATION"]["VALUE"]) { ?>
                                            <div class="aboutSpecialist__tab aboutSpecialistTab_js" data-tab="qualification">
                                                Повышение квалификации
                                            </div>
                                        <? } ?>
                                    </div>
                                    <div class="aboutSpecialist__wrapper aboutSpecialistWrapper_js" data-list="education">
                                        <div class="aboutSpecialist__list">
                                            <? foreach ($arResult["PROPERTIES"]["EDUCATION"]["VALUE"] as $key => $value) { ?>
                                                <div class="aboutSpecialist__item">
                                                    <div class="aboutSpecialist__year"><?= $arResult["PROPERTIES"]["EDUCATION"]["DESCRIPTION"][$key]?></div>
                                                    <div class="aboutSpecialist__description">
                                                        <span>
                                                            <?= $value["VALUE_LINE"]?>
                                                        </span>
                                                        <? if ($value["IMG_LINE"]) { ?>
                                                            <a href="<?= CFile::GetPath($value['IMG_LINE'])?>" class="aboutSpecialist__diploma popupImage_js">
                                                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialistDiploma.svg';?>
                                                                <span>Посмотреть диплом</span>
                                                            </a>
                                                        <? } ?>
                                                    </div>
                                                </div>
                                            <? } ?>
                                        </div>
                                        <? if ($key > 2) { ?>
                                            <div class="aboutSpecialist__show aboutSpecialistShow_js">
                                                <span>Развернуть</span>
                                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/aboutSpecialistShow.svg';?>
                                            </div>
                                            <div class="aboutSpecialist__hide aboutSpecialistHide_js hide">
                                                <span>Свернуть</span>
                                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/aboutSpecialistShow.svg';?>
                                            </div>
                                        <? } ?>
                                    </div>
                                    <div class="aboutSpecialist__wrapper aboutSpecialistWrapper_js hidden" data-list="qualification">
                                        <div class="aboutSpecialist__list">
                                            <? foreach ($arResult["PROPERTIES"]["QUALIFICATION"]["VALUE"] as $keys => $item) { ?>
                                                <div class="aboutSpecialist__item">
                                                    <div class="aboutSpecialist__year"><?= $arResult["PROPERTIES"]["QUALIFICATION"]["DESCRIPTION"][$keys]?></div>
                                                    <div class="aboutSpecialist__description">
                                                        <span>
                                                            <?= $item["VALUE_LINE"]?>
                                                        </span>
                                                        <? if ($item["IMG_LINE"]) { ?>
                                                            <a href="<?= CFile::GetPath($item['IMG_LINE'])?>" class="aboutSpecialist__diploma popupImage_js">
                                                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialistDiploma.svg';?>
                                                                <span>Посмотреть диплом</span>
                                                            </a>
                                                        <? } ?>
                                                    </div>
                                                </div>
                                            <? } ?>
                                        </div>
                                        <? if ($keys > 2) { ?>
                                            <div class="aboutSpecialist__show aboutSpecialistShow_js">
                                                <span>Развернуть</span>
                                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/aboutSpecialistShow.svg';?>
                                            </div>
                                            <div class="aboutSpecialist__hide aboutSpecialistHide_js hide">
                                                <span>Свернуть</span>
                                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/aboutSpecialistShow.svg';?>
                                            </div>
                                        <? } ?>
                                    </div>
                                </div>
                                <div class="aboutSpecialist__aside">
                                    <ul class="aboutSpecialist__ul">
                                        <li class="aboutSpecialist__li">
                                            <div class="aboutSpecialist__top">Стаж работы</div>
                                            <div class="aboutSpecialist__bottom"><?= $arResult["PROPERTIES"]["EXPERIENCE"]["VALUE"]?></div>
                                        </li>
                                        <li class="aboutSpecialist__li">
                                            <div class="aboutSpecialist__top">Должность</div>
                                            <div class="aboutSpecialist__bottom"><?= implode(', ', $arResult["PROPERTIES"]["SPECIALIZATION"]["VALUE"])?></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <? if ($arResult["PROPERTIES"]["BEFORE_AND_AFTER"]["VALUE"]) { ?>
                    <div class="specialist__portfolio">
                        <div class="containerMin">
                            <div class="portfolioSpecialist">
                                <div class="portfolioSpecialist__title">Портфолио специалиста</div>
                                <div class="portfolioSpecialist__content">
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
                            </div>
                        </div>
                    </div>
                <? } ?>
                <? if ($arResult["SPECIALISTS"]) { ?>
                    <section class="services">
                        <div class="container">
                            <div class="services__title">Сферы деятельности</div>
                                <div class="services__content">
                                    <? foreach ($arResult["SPECIALISTS"] as $key => $element_id) {
                                        $APPLICATION->IncludeComponent(
                                            "ferma:news.detail",
                                            ".default",
                                            Array("DISPLAY_DATE" => "Y",
                                                "DISPLAY_NAME" => "Y",
                                                "DISPLAY_PICTURE" => "Y",
                                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                                "USE_SHARE" => "Y",
                                                "SHARE_HIDE" => "N",
                                                "SHARE_TEMPLATE" => "",
                                                "SHARE_HANDLERS" => array("delicious"),
                                                "SHARE_SHORTEN_URL_LOGIN" => "",
                                                "SHARE_SHORTEN_URL_KEY" => "",
                                                "AJAX_MODE" => "N",
                                                "IBLOCK_TYPE" => "services",
                                                "IBLOCK_ID" => "",
                                                "ELEMENT_ID" => $element_id["ID"],
                                                "ELEMENT_CODE" => "",
                                                "SECTIONS_CODE" => $element_id["IBLOCK_SECTION_ID"],
                                                "CHECK_DATES" => "Y",
                                                "FIELD_CODE" => Array("ID"),
                                                "PROPERTY_CODE" => Array("DESCRIPTION"),
                                                "IBLOCK_URL" => "news.php?ID=#IBLOCK_ID#\"",
                                                "DETAIL_URL" => "",
                                                "SET_TITLE" => "Y",
                                                "SET_CANONICAL_URL" => "Y",
                                                "SET_BROWSER_TITLE" => "Y",
                                                "BROWSER_TITLE" => "-",
                                                "SET_META_KEYWORDS" => "Y",
                                                "META_KEYWORDS" => "-",
                                                "SET_META_DESCRIPTION" => "Y",
                                                "META_DESCRIPTION" => "-",
                                                "SET_STATUS_404" => "Y",
                                                "SET_LAST_MODIFIED" => "Y",
                                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                                "ADD_SECTIONS_CHAIN" => "N",
                                                "ADD_ELEMENT_CHAIN" => "N",
                                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                                "USE_PERMISSIONS" => "N",
                                                "GROUP_PERMISSIONS" => Array("1"),
                                                "CACHE_TYPE" => "A",
                                                "CACHE_TIME" => "3600",
                                                "CACHE_GROUPS" => "Y",
                                                "DISPLAY_TOP_PAGER" => "Y",
                                                "DISPLAY_BOTTOM_PAGER" => "Y",
                                                "PAGER_TITLE" => "Страница",
                                                "PAGER_TEMPLATE" => "",
                                                "PAGER_SHOW_ALL" => "Y",
                                                "PAGER_BASE_LINK_ENABLE" => "Y",
                                                "SHOW_404" => "Y",
                                                "MESSAGE_404" => "",
                                                "STRICT_SECTION_CHECK" => "Y",
                                                "PAGER_BASE_LINK" => "",
                                                "PAGER_PARAMS_NAME" => "arrPager",
                                                "AJAX_OPTION_JUMP" => "N",
                                                "AJAX_OPTION_STYLE" => "Y",
                                                "AJAX_OPTION_HISTORY" => "N"
                                            )
                                        );
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </section>
                <? } ?>
            </div>
        </section>
    </section>
</main>