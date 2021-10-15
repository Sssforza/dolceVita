<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <? $APPLICATION->ShowHead(); ?>
    <title><?$APPLICATION->ShowTitle();?></title>

    <? $APPLICATION->SetAdditionalCSS("/dist/css/main.css"); ?>
    <? $APPLICATION->AddHeadScript("/dist/js/main.js"); ?>

    <link rel="shortcut icon" href="/dist/img/favicons/favicon.ico" type="image/x-icon">
    <link rel="icon" sizes="16x16" href="/dist/img/favicons/favicon-16x16.png" type="image/png">
    <link rel="icon" sizes="32x32" href="/dist/img/favicons/favicon-32x32.png" type="image/png">
    <link rel="apple-touch-icon-precomposed" href="/dist/img/favicons/apple-icon-precomposed.png">
    <link rel="apple-touch-icon" href="/dist/img/favicons/apple-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="/dist/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/dist/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/dist/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/dist/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/dist/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/dist/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/dist/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/dist/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/dist/img/favicons/apple-icon-180x180.png">

    <link rel="icon" sizes="36x36" href="/dist/img/favicons/android-icon-36x36.png" type="image/png">
    <link rel="icon" sizes="48x48" href="/dist/img/favicons/android-icon-48x48.png" type="image/png">
    <link rel="icon" sizes="72x72" href="/dist/img/favicons/android-icon-72x72.png" type="image/png">
    <link rel="icon" sizes="96x96" href="/dist/img/favicons/android-icon-96x96.png" type="image/png">
    <link rel="icon" sizes="144x144" href="/dist/img/favicons/android-icon-144x144.png" type="image/png">
    <link rel="icon" sizes="192x192" href="/dist/img/favicons/android-icon-192x192.png" type="image/png">

</head>

<body>
    <?$APPLICATION->ShowPanel();?>
    <div class="wrapper">
        <header class="header header_js hide">
            <div class="header__content container">
                <div class="header__left">
                    <div class="header__dolce">
                        <a class="header__logo" href="/">
                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/dolceLogo.svg';?>
                        </a>
                    </div>
                    <nav class="header__nav">
                        <div class="headerNavTop">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu", 
                                "top", 
                                array(
                                    "ROOT_MENU_TYPE" => "top",
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "left",
                                    "USE_EXT" => "Y",
                                    "DELAY" => "N",
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "COMPONENT_TEMPLATE" => "top"
                                ),
                                false
                            );?>
                        </div>
                        <div class="headerNavBottom">
                            <?$APPLICATION->IncludeComponent(
                            	"bitrix:menu", 
                            	"header", 
                            	array(
                            		"ROOT_MENU_TYPE" => "header",
                            		"MAX_LEVEL" => "1",
                            		"CHILD_MENU_TYPE" => "left",
                            		"USE_EXT" => "Y",
                            		"DELAY" => "N",
                            		"ALLOW_MULTI_SELECT" => "N",
                            		"MENU_CACHE_TYPE" => "N",
                            		"MENU_CACHE_TIME" => "3600",
                            		"MENU_CACHE_USE_GROUPS" => "Y",
                            		"MENU_CACHE_GET_VARS" => array(
                            		),
                            		"COMPONENT_TEMPLATE" => "header"
                            	),
                            	false
                            );?>
                        </div>
                    </nav>
                </div>
                <div class="header__right">
                    <div class="header__phone">
                        <a class="header__tel" href="tel:+73812790058">
                            <span>+7 3812</span> 79-00-58
                        </a>
                    </div>
                    <div class="header__btns">
                        <div class="header__search headerSearch_js">
                            <div class="envelopeInput whiteInput header__envelopeInput">
                                <input type="text" placeholder="Введите услугу">
                                <button class="header__button">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/headerSearch-i.svg';?>
                                </button>
                            </div>
                            <div class="header__quest headerQuest_js">
                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/headerSearch-i.svg';?>
                            </div>
                        </div>
                        <a class="btnPurple header__signUp popupForm_js" href="#popupFormRecording">Записаться</a>
                    </div>
                </div>
            </div>
        </header>

        <div class="headerAbout headerAboutList_js headerAbout_js headerAboutHover_js">
            <ul class="headerAbout__content">
                <li class="headerAbout__li">
                    <a href="#" class="headerAbout__a">О Dolce Vita</a>
                </li>
                <li class="headerAbout__li">
                    <a href="#" class="headerAbout__a">Специалисты</a>
                </li>
                <li class="headerAbout__li">
                    <a href="#" class="headerAbout__a">Отзывы клиентов</a>
                </li>
                <li class="headerAbout__li">
                    <a href="#" class="headerAbout__a">Работа в Dolce Vita</a>
                </li>
                <li class="headerAbout__li">
                    <a href="#" class="headerAbout__a">Блог</a>
                </li>
                <li class="headerAbout__li">
                    <a href="#" class="headerAbout__a">Вопросы и ответы</a>
                </li>
            </ul>
        </div>
        <? $APPLICATION->IncludeComponent("ferma:menu.sections.elements",
                ".default",
                Array(
                "IS_SEF" => "N",
                "IBLOCK_TYPE" => "services", 
                "IBLOCK_ID" => array('10', '11', '9', '12', '8'), 
                "DEPTH_LEVEL" => "4", 
                "CACHE_TYPE" => "N", 
                "CACHE_TIME" => "3600" 
            )
        );?>