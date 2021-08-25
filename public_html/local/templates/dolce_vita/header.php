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
                                    <a class="headerNavTop__link headerNavTop__hover" href="#">Контакты</a>
                                </li>
                                <li class="headerNavTop__li">
                                    <a class="headerNavTop__link headerNavTop__hover" href="#">Блог</a>
                                </li>
                                <li class="headerNavTop__li headerNavList">
                                    <a class="headerNavTop__link about" href="#">
                                        О нас
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/headerNavT-active.svg';?>
                                    </a>
                                    <ul class="headerNavList__content">
                                        <li class="headerNavList__li">
                                            <a href="#" class="headerNavList__a">О Dolce Vita</a>
                                        </li>
                                        <li class="headerNavList__li">
                                            <a href="#" class="headerNavList__a">Специалисты</a>
                                        </li>
                                        <li class="headerNavList__li">
                                            <a href="#" class="headerNavList__a">Отзывы клиентов</a>
                                        </li>
                                        <li class="headerNavList__li">
                                            <a href="#" class="headerNavList__a">Работа в Dolce Vita</a>
                                        </li>
                                        <li class="headerNavList__li">
                                            <a href="#" class="headerNavList__a">Блог</a>
                                        </li>
                                        <li class="headerNavList__li">
                                            <a href="#" class="headerNavList__a">Вопросы и ответы</a>
                                        </li>
                                    </ul>
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
                        <a class="btnPurple header__signUp" href="">Записаться</a>
                    </div>
                </div>
            </div>
        </header>

        <div class="headerServices headerServicesMenu_js">
            <div class="headerServices__content container">
                <div class="headerServices__close">
                    <div class="headerServices__cross headerServicesClose_js">
                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/headerServicesCross-i.svg';?>
                    </div>
                    <div class="headerServices__cover headerServicesClose_js">Закрыть меню</div>
                </div>
                <div class="headerServices__box">
                    <div class="servicesMain">
                        <ul class="servicesMain__list">
                            <li class="servicesMain__item">
                                <span class="servicesMain__link servicesMain_js active" data-services="cosmetology">Косметология</span>
                            </li>
                            <li class="servicesMain__item">
                                <span class="servicesMain__link servicesMain_js" data-services="bodyShaping">Коррекция фигуры</span>
                            </li>
                            <li class="servicesMain__item">
                                <span class="servicesMain__link servicesMain_js" data-services="qualityLife">Качество жизни</span>
                            </li>
                            <li class="servicesMain__item">
                                <span class="servicesMain__link servicesMain_js" data-services="beautySaloon">Салон красоты</span>
                            </li>
                            <li class="servicesMain__item">
                                <span class="servicesMain__link servicesMain_js" data-services="allServices">Все услуги</span>
                            </li>
                        </ul>
                    </div>
                    <div class="servicesMiddle">
                        <div class="servicesMiddle__content servicesMiddle_js" data-servicesMiddle="cosmetology">
                            <div class="servicesMiddle__item">
                                <div class="servicesMiddle__info">Решить проблему</div>
                                <ul class="servicesMiddle__list">
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link servicesMiddleLink_js active" data-servicesMiddleDetail="face">Лица</span>
                                    </li>
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link servicesMiddleLink_js" data-servicesMiddleDetail="body">Тела</span>
                                    </li>
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link servicesMiddleLink_js" data-servicesMiddleDetail="hands">Рук</span>
                                    </li>
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link servicesMiddleLink_js" data-servicesMiddleDetail="legs">Ног</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="servicesMiddle__item">
                                <div class="servicesMiddle__info">Процедуры для</div>
                                <ul class="servicesMiddle__list">
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link servicesMiddleLink_js" data-servicesMiddleDetail="face">Лица</span>
                                    </li>
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link servicesMiddleLink_js" data-servicesMiddleDetail="body">Тела</span>
                                    </li>
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link servicesMiddleLink_js" data-servicesMiddleDetail="hands">Рук</span>
                                    </li>
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link servicesMiddleLink_js" data-servicesMiddleDetail="hair">Волос</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="servicesMiddle__item">
                                <div class="servicesMiddle__info"></div>
                                <ul class="servicesMiddle__list">
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link">Программы</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="servicesMiddle__item">
                                <div class="servicesMiddle__info"></div>
                                <ul class="servicesMiddle__list">
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link">Бренды</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="servicesMiddle__content servicesMiddle_js hidden" data-servicesMiddle="bodyShaping">
                            <div class="servicesMiddle__item">
                                <div class="servicesMiddle__info">Решить проблему</div>
                                <ul class="servicesMiddle__list">
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link active">Тела</span>
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
                                        <span class="servicesMiddle__link">Тела</span>
                                    </li>
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link">Рук</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="servicesMiddle__item">
                                <div class="servicesMiddle__info"></div>
                                <ul class="servicesMiddle__list">
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link">Программы</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="servicesMiddle__item">
                                <div class="servicesMiddle__info"></div>
                                <ul class="servicesMiddle__list">
                                    <li class="servicesMiddle__li">
                                        <span class="servicesMiddle__link">Бренды</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="servicesDetail">
                        <div class="servicesDetail__content servicesDetail_js hidden" data-servicesDetail="face">
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
                        </div>
                        <div class="servicesDetail__content servicesDetail_js" data-servicesDetail="body">
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
                            </ul>
                        </div>
                        <div class="servicesDetail__content servicesDetail_js hidden" data-servicesDetail="hands">
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
                            </ul>
                        </div>
                        <div class="servicesDetail__content servicesDetail_js hidden" data-servicesDetail="legs">
                            <ul class="servicesDetail__list">
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
                            </ul>
                        </div>
                        <div class="servicesDetail__content servicesDetail_js hidden" data-servicesDetail="hair">
                            <ul class="servicesDetail__list">
                                <li class="servicesDetail__li">
                                    <a href="#" class="servicesDetail__link">Освежить кожу</a>
                                </li>
                                <li class="servicesDetail__li">
                                    <a href="#" class="servicesDetail__link">Легкий пилинг</a>
                                </li>
                                <li class="servicesDetail__li">
                                    <a href="#" class="servicesDetail__link">Пигментация</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>