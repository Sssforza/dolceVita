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
                            <ul class="headerNavTop__ul">
                                <li class="headerNavTop__li">
                                    <a class="headerNavTop__link active" href="#">О нас</a>
                                </li>
                                <li class="headerNavTop__li">
                                    <a class="headerNavTop__link" href="#">Блог</a>
                                </li>
                                <li class="headerNavTop__li">
                                    <a class="headerNavTop__link" href="#">Контакты</a>
                                </li>
                            </ul>
                        </div>
                        <div class="headerNavBottom">
                            <ul class="headerNavBottom__ul">
                                <li class="headerNavBottom__li">
                                    <span class="headerNavBottom__link headerServices_js headerServicesClose_js">Услуги</span>
                                </li>
                                <li class="headerNavBottom__li">
                                    <span class="headerNavBottom__link">Магазин</span>
                                </li>
                                <li class="headerNavBottom__li">
                                    <a class="headerNavBottom__link" href="#">Акции</a>
                                </li>
                                <li class="headerNavBottom__li">
                                    <a class="headerNavBottom__link" href="#">Стоимость</a>
                                </li>
                            </ul>
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
                        <div class="header__search">
                            <div class="header__quest">
                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/headerSearch-i.svg';?>
                            </div>
                        </div>
                        <a class="btnPurple header__signUp" href="">Записаться</a>
                    </div>
                </div>
            </div>
        </header>

        <div class="headerServices">
            <div class="headerServices__content container">
                <div class="headerServices__close">
                    <div class="headerServices__cross headerServicesClose_js">
                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/headerServicesCross-i.svg';?>
                    </div>
                    <div class="headerServices__cover headerServicesClose_js">Закрыть меню</div>
                </div>
                <div class="headerServices__box">
                    <? $APPLICATION->IncludeComponent("ferma:menu.sections.elements",
                        ".default",
                        Array(
                        "IS_SEF" => "N",
                        "IBLOCK_TYPE" => "services", 
                        "IBLOCK_ID" => "13", 
                        "DEPTH_LEVEL" => "4", 
                        "CACHE_TYPE" => "N", 
                        "CACHE_TIME" => "3600" 
                    )
                );?>
                    <div class="servicesMain">
                        <ul class="servicesMain__list">
                            <li class="servicesMain__item">
                                <span class="servicesMain__link active">Косметология</span>
                            </li>
                            <li class="servicesMain__item">
                                <span class="servicesMain__link">Коррекция фигуры</span>
                            </li>
                            <li class="servicesMain__item">
                                <span class="servicesMain__link">Качество жизни</span>
                            </li>
                            <li class="servicesMain__item">
                                <span class="servicesMain__link">Салон красоты</span>
                            </li>
                            <li class="servicesMain__item">
                                <a class="servicesMain__link" href="#">Все услуги</a>
                            </li>
                        </ul>
                    </div>
                    <div class="servicesMiddle">
                        <div class="servicesMiddle__content">
                            <div class="servicesMiddle__item">
                                <div class="servicesMiddle__info">Решить проблему</div>
                                <ul class="servicesMiddle__list">
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link active">Лица</span>
                                    </li>
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link">Тела</span>
                                    </li>
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link">Рук</span>
                                    </li>
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link">Ног</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="servicesMiddle__item">
                                <div class="servicesMiddle__info">Процедуры для</div>
                                <ul class="servicesMiddle__list">
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link">Лица</span>
                                    </li>
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link">Тела</span>
                                    </li>
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link">Рук</span>
                                    </li>
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link">Волос</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="servicesMiddle__item">
                                <div class="servicesMiddle__info"></div>
                                <ul class="servicesMiddle__list">
                                    <li class="servicesMiddle__li">
                                        <a class="servicesMiddle__link" href="#">Программы</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="servicesMiddle__item">
                                <div class="servicesMiddle__info"></div>
                                <ul class="servicesMiddle__list">
                                    <li class="servicesMiddle__li">
                                        <a class="servicesMiddle__link" href="#">Бренды</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="servicesDetail">
                        <ul class="servicesDetail__list">
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Улучшить цвет лица</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Освежить кожу</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Легкий пилинг</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Пигментация</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Омоложение кожи</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Выровнять рельеф кожи</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Уменьшить морщины</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Лифтинг</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Улучшить плотность и тургор кожи</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Убрать рубцы</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Убрать растяжки</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Убрать постакне</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Лечение акне</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Уменьшить воспаление кожи</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Розацея</a>
                            </li>
                        </ul>
                        <ul class="servicesDetail__list">
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Винные пятна</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Сосуды на лице</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Уменшить морщины вокруг глаз</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Восстановить контур губ</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Уменшить кисетные морщины</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Убрать молярные мешки</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Поднять веко</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Убрать избыток кожи век</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Уменьшить птоз</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Улучшить овал лица</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Уменьшить носогубную складку</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Убрать второй подбородок</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Сухость кожи</a>
                            </li>
                            <li class="servicesDetail__li">
                                <a href="#" class="servicesDetail__link">Жирность кожи</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>