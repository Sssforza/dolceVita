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
$iblock_section_id = $arResult["VARIABLES"]["IBLOCK_SECTION_ID"][0];
$section_code = $arResult["VARIABLES"]["SECTION_CODE"];
$section_id = $arResult["VARIABLES"]["SECTION_ID"];
$parent_id = $arResult["VARIABLES"]["PARENT_SECTION_ID"];
$GLOBALS['arrFilter'] = array('ID' => $arResult["VARIABLES"]["UF_ELEMENT"]);
?>
<main class="main">
    <pre>
        <? //print_r($arResult)?>
    </pre>
    <section class="page page_services">
        <section class="banerSection banerServices">
        	<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array(
			        "START_FROM" => "0",
			        "PATH" => "",
			        "SITE_ID" => "s1"
			    )
			);?>
            <div class="banerServices__content">
                <div class="banerServices__header">
                    <div class="banerServices__title"><?= $arResult['IBLOCK_AR']['NAME']?></div>
                    <? if ($arResult['MENU_ITEMS'][$section_id] || $arResult['MENU_ITEMS'][$iblock_section_id]) {?>
                    	<div class="banerServices__tabs servicesTabs servicesTabsList_js">
	                        <div class="servicesTabs__list">
	                        	<? foreach ($arResult['MENU_ITEMS'][$parent_id] as $key => $value) { ?>
	                        		<? $active = '';
	                        		if ($section_id == $value["ID"] || ($section_id == $parent_id && $key == 0)) {
	                        			$active = 'active';
                                        $data_select = $value["ID"];
	                        		}?>
	                        		<div class='servicesTabs__item servicesTabs_js <?= $active?>' data-tab="<?= $value['ID']?>">
		                                <span><?= $value['NAME']?></span>
		                            </div>
                                    <?$ar_section[] = $value['ID'] ?>
	                        	<? } ?>
	                        </div>
	                    </div>
                    <? } ?>
                </div>
                <? if (($arResult['ELEMENT_AR'][$section_id] || $arResult['ELEMENT_AR'][$iblock_section_id]) && empty($arResult["VARIABLES"]["AR_ID_ELEMENTS"])) { ?>
	                <? if ($arResult['MENU_ITEMS']['ROOT'][$parent_id]['DESCRIPTION']) { ?>
	                	<div class="banerServices__question"><?= $arResult['MENU_ITEMS']['ROOT'][$parent_id]['DESCRIPTION']?></div>
	                <? } ?>
                	<div class="banerServices__selected">
	                    <div class="servicesSelected servicesSelected_js">
                            <div class="servicesSelected__input servicesSelectedInput_js" data-select="<?= $data_select?>">
                                <input class="servicesSelectedSelected_js" id="" type="text" placeholder="Выберите желаемый результат" readonly>
                            </div>
                            <div class="servicesSelected__wrapper">
                                <? foreach ($ar_section as $arElement) { ?>
                                    <? if (array_key_exists($arElement, $arResult['ELEMENT_AR'])) { ?>
                                        <ul class="servicesSelected__list scrollbarCustom servicesSelectedList_js" data-list="<?= $arElement?>">
                                            <? foreach ($arResult['ELEMENT_AR'][$arElement] as $el => $element) { ?>
                                                <li class="servicesSelected__item">
                                                    <span class="servicesSelected__choice" id="<?= $element['ID']?>"><?= $element['NAME']?></span>
                                                </li>
                                            <? } ?>
                                        </ul>
                                    <? } ?>
                                <? } ?>
                                <? $arResult["VARIABLES"]["AR_ID_ELEMENTS"][] = $element['ID'];?>
                            </div>
                        </div>
	                    <div class="btnBlue banerServices__btn banerServicesBtn_js disabled">Посмотреть услуги</div>
	                </div>
                <? } ?>
            </div>
        </section>
        <section class="services services_attendance container servicesAttendance_js" data-midnight="gray">
            <div class="services__content">
                <? foreach ($arResult["VARIABLES"]["AR_ID_ELEMENTS"] as $keys => $element_id) { ?>
                    <? $APPLICATION->IncludeComponent(
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
                            "ELEMENT_ID" => $element_id,
                            "ELEMENT_CODE" => "",
                            "CHECK_DATES" => "Y",
                            "FIELD_CODE" => Array("ID"),
                            "PROPERTY_CODE" => Array("DESCRIPTION"),
                            "IBLOCK_URL" => "news.php?ID=#IBLOCK_ID#\"",
                            "DETAIL_URL" => "",
                            "SET_TITLE" => "N",
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
                            "USE_PERMISSIONS" => "Y",
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
                    ?>
                <? } 
                if (($keys-4) > 0) {?>
                    <div class="services__item servicesCard servicesCardBig">
                        <div class="servicesCardBig__content">
                            <div class="servicesCardBig__title">больше услуг</div>
                            <div class="servicesCardBig__more">
                                <div class="servicesCardBig__link servicesCardBtn_js">посмотреть</div>
                            </div>
                            <div class="servicesCardBig__number servicesCardNumber_js"><?= $keys-4 ?></div>
                        </div>
                    </div>
                <? } ?>
            </div>
        </section>
		<section class="services services_cosmetic">
            <div class="container">
                <div class="services__title">Для лучшего результата после процедуры <br>рекомендуем косметику</div>
                <div class="services__container">
                    <div class="cosmeticCard">
                        <div class="cosmeticCard__top">
                            <div class="cosmeticCard__img" style="background-image:url(/dist/img/cosmeticCardImg-1.png)"></div>
                            <div class="cosmeticCard__title">
                                <a class="cosmeticCard__name" href="">Babor Spa</a>
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
                            <div class="cosmeticCard__img" style="background-image:url(/dist/img/cosmeticCardImg-1.png)"></div>
                            <div class="cosmeticCard__title">
                                <a class="cosmeticCard__name" href="">Babor Spa</a>
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
                            <div class="cosmeticCard__img" style="background-image:url(/dist/img/cosmeticCardImg-1.png)"></div>
                            <div class="cosmeticCard__title">
                                <a class="cosmeticCard__name" href="">Babor Spa</a>
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
                            <div class="cosmeticCard__img" style="background-image:url(/dist/img/cosmeticCardImg-1.png)"></div>
                            <div class="cosmeticCard__title">
                                <a class="cosmeticCard__name" href="">Babor Spa</a>
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
                            <div class="cosmeticCard__img" style="background-image:url(/dist/img/cosmeticCardImg-1.png)"></div>
                            <div class="cosmeticCard__title">
                                <a class="cosmeticCard__name" href="">Babor Spa</a>
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
                            <div class="cosmeticCard__img" style="background-image:url(/dist/img/cosmeticCardImg-1.png)"></div>
                            <div class="cosmeticCard__title">
                                <a class="cosmeticCard__name" href="">Babor Spa</a>
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
        <section class="services servicesAction">
            <div class="container">
                <div class="services__title">Акция</div>
                <div class="services__container">
                    <div class="servicesAction__bg" style="background-image:url(/dist/img/servicesActionBg.png)">
                        <div class="servicesAction__box">
                            <div class="servicesAction__title">Скидки до 50% <br>в январе!</div>
                            <div class="servicesAction__description">
                                У&nbsp;Вас есть отличный повод записаться <br>на&nbsp;процедуру LPG‐массажа, 
                                которую вы&nbsp;уже давно <br>откладывали!
                            </div>
                            <a class="servicesAction__btn btrWhiteBorder" href="#">ЗАПИСАТЬСЯ НА ПРИЁМ</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</main>
