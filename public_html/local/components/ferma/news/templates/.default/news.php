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
                    <div class="banerServices__tabs servicesTabs">
                        <div class="servicesTabs__list">
                            <div class="servicesTabs__item active">
                                <span>Лица</span>
                            </div>
                            <div class="servicesTabs__item">
                                <span>Тела</span>
                            </div>
                            <div class="servicesTabs__item">
                                <span>Рук</span></div>
                            <div class="servicesTabs__item">
                                <span>Ног</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banerServices__question">Какой результат я хочу получить от приема</div>
                <div class="banerServices__selected">
                    <div class="servicesSelected">
                        <div class="servicesSelected__input">
                            <input type="text" placeholder="Выберите желаемый результат">
                        </div>
                        <div class="servicesSelected__list">
                            <div class="servicesSelected__item"></div>
                        </div>
                    </div>
                    <div class="btnBlue banerServices__btn">Посмотреть услуги</div>
                </div>
            </div>
        </section>
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			".default",
			Array(
				"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
				"IBLOCK_ID" => $arParams["IBLOCK_ID"],
				"NEWS_COUNT" => $arParams["NEWS_COUNT"],
				"SORT_BY1" => $arParams["SORT_BY1"],
				"SORT_ORDER1" => $arParams["SORT_ORDER1"],
				"SORT_BY2" => $arParams["SORT_BY2"],
				"SORT_ORDER2" => $arParams["SORT_ORDER2"],
				"FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
				"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
				"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
				"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
				"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
				"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
				"SET_TITLE" => $arParams["SET_TITLE"],
				"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
				"MESSAGE_404" => $arParams["MESSAGE_404"],
				"SET_STATUS_404" => $arParams["SET_STATUS_404"],
				"SHOW_404" => $arParams["SHOW_404"],
				"FILE_404" => $arParams["FILE_404"],
				"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
				"CACHE_TYPE" => $arParams["CACHE_TYPE"],
				"CACHE_TIME" => $arParams["CACHE_TIME"],
				"CACHE_FILTER" => $arParams["CACHE_FILTER"],
				"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
				"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
				"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
				"PAGER_TITLE" => $arParams["PAGER_TITLE"],
				"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
				"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
				"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
				"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
				"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
				"PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
				"PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
				"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
				"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
				"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
				"PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
				"ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
				"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
				"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
				"FILTER_NAME" => $arParams["FILTER_NAME"],
				"HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
				"CHECK_DATES" => $arParams["CHECK_DATES"],
			),
			$component
		);?>
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
