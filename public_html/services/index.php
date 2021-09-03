<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->SetAdditionalCSS("/dist/css/blocks/services.css", true);
?>
<main class="main">
    <section class="page page_services">
        <section class="banerSection banerServices">
            <div class="breadCrumbs gradientHeader_js">
                <ul class="breadCrumbs__list">
                    <li class="breadCrumbs__item">
                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/breadCrumbsChit-first.svg';?>
                        <a href="" class="breadCrumbs__chit">На главную</a>
                    </li>
                    <li class="breadCrumbs__item">
                        <a href="" class="breadCrumbs__chit">Услуги</a>
                    </li>
                    <li class="breadCrumbs__item">
                        <span class="breadCrumbs__chit">Косметология</span>
                    </li>
                </ul>
            </div>
            <div class="banerServices__content">
                <div class="banerServices__header">
                    <div class="banerServices__title">Косметология</div>
                    <div class="banerServices__tabs servicesTabs servicesTabsList_js">
                        <div class="servicesTabs__list">
                            <div class="servicesTabs__item servicesTabs_js active" data-tab="face">
                                <span>Лица</span>
                            </div>
                            <div class="servicesTabs__item servicesTabs_js" data-tab="body">
                                <span>Тела</span>
                            </div>
                            <div class="servicesTabs__item servicesTabs_js" data-tab="hands">
                                <span>Рук</span></div>
                            <div class="servicesTabs__item servicesTabs_js" data-tab="legs">
                                <span>Ног</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banerServices__question">Какой результат я хочу получить от приема</div>
                <div class="banerServices__selected">
                    <div class="servicesSelected servicesSelected_js">
                        <div class="servicesSelected__input servicesSelectedInput_js" data-select="face">
                            <input class="servicesSelectedSelected_js" type="text" placeholder="Выберите желаемый результат" readonly>
                        </div>
                        <div class="servicesSelected__wrapper">
                            <ul class="servicesSelected__list scrollbarCustom servicesSelectedList_js" data-list="face">
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Улучшить цвет лица</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Освежить кожу</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Легкий пилинг</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Пигментация</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Омоложение кожи</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Омоложение кожи и блеск в глазах для длинного названия</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Освежить кожу</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Улучшить цвет лица</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Освежить кожу</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Легкий пилинг</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Пигментация</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Омоложение кожи</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Омоложение кожи и блеск в глазах для длинного названия</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Освежить кожу</span>
                                </li>
                            </ul>
                            <ul class="servicesSelected__list scrollbarCustom servicesSelectedList_js" data-list="body">
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Улучшить цвет тела</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Освежить кожу</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Легкий пилинг</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Пигментация</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Омоложение кожи</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Омоложение кожи и блеск в глазах для длинного названия</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Омоложение кожи</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Омоложение кожи и блеск в глазах для длинного названия</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Освежить кожу</span>
                                </li>
                            </ul>
                            <ul class="servicesSelected__list scrollbarCustom servicesSelectedList_js" data-list="hands">
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Улучшить цвет рук</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Освежить кожу</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Легкий пилинг</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Пигментация</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Омоложение кожи</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Омоложение кожи и блеск в глазах для длинного названия</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Освежить кожу</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Улучшить цвет лица</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Освежить кожу</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Легкий пилинг</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Пигментация</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Омоложение кожи</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Омоложение кожи и блеск в глазах для длинного названия</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Освежить кожу</span>
                                </li>
                            </ul>
                            <ul class="servicesSelected__list scrollbarCustom servicesSelectedList_js" data-list="legs">
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Улучшить цвет ног</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Освежить кожу</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Легкий пилинг</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Пигментация</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Омоложение кожи</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Омоложение кожи и блеск в глазах для длинного названия</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Освежить кожу</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Улучшить цвет лица</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Освежить кожу</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Легкий пилинг</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Пигментация</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Омоложение кожи</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Омоложение кожи и блеск в глазах для длинного названия</span>
                                </li>
                                <li class="servicesSelected__item">
                                    <span class="servicesSelected__choice">Освежить кожу</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="btnBlue banerServices__btn disabled">Посмотреть услуги</div>
                </div>
            </div>
        </section>
        <section class="services services_attendance container servicesAttendance_js" data-midnight="gray">
            <div class="services__content">
                <div class="services__item servicesCard">
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
                <div class="services__item servicesCard servicesCard_programm servicesCard_js">
                    <div class="servicesCard__header">
                        <div class="servicesCard__img" style="background-image:url(/dist/img/servicesCardImg-1.png)"></div>
                        <div class="servicesCard__wrapper">
                            <div class="servicesCard__title">Комплексный подход коррекции фигуры</div>
                            <div class="servicesCard__description">
                                4-этапная программа восстановления упругости кожи и коррекции фигуры 
                            </div>
                        </div>
                        <div class="servicesCard__programm">программа</div>
                    </div>
                    <div class="servicesCard__bottom">
                        <div class="servicesCard__list">
                            <div class="servicesCard__box"
                                data-description="Эффективно моделируем фигуру. Выборочное воздействие позволяет избавиться от жира в конкретных местах">
                                <div class="servicesCard__what">1 этап</div>
                                <div class="servicesCard__how">Криолиполиз</div>
                            </div>
                            <div class="servicesCard__box"
                                data-description="Возвращаем коже упругость. Лифтинг и укрепление кожи, устранение">
                                <div class="servicesCard__what">2 этап</div>
                                <div class="servicesCard__how">LPG-массаж</div>
                            </div>
                            <div class="servicesCard__box"
                                data-description="Уход эффективно воздействует на лишние объемы, активизируют процессы липолиза и выведения воды.">
                                <div class="servicesCard__what">3 этап</div>
                                <div class="servicesCard__how">Морское утончение</div>
                            </div>
                            <div class="servicesCard__box"
                                data-description="Позволяет уменьшить растяжки, подтянуть и разгладить кожу">
                                <div class="servicesCard__what">4 этап</div>
                                <div class="servicesCard__how">Vela Shape II</div>
                            </div>
                            <div class="servicesCard__box"
                                data-description="Лифтинг">
                                <div class="servicesCard__what">5 этап</div>
                                <div class="servicesCard__how">Лифтинг</div>
                            </div>
                            <div class="servicesCard__box"
                                data-description="Моделирование">
                                <div class="servicesCard__what">6 этап</div>
                                <div class="servicesCard__how">Моделирование фигуры</div>
                            </div>
                        </div>
                        <div class="servicesCard__more">
                            <a class="servicesCard__details popupMoreStage_js"
                                href="#popupMoreStage"
                                data-linkMore="linkMore"
                                data-linkImg="url(/dist/img/servicesCardImg-1.png)"
                            >Подробнее об этапах</a>
                        </div>
                    </div>
                </div>
                <div class="services__item servicesCard servicesCard_programm servicesCard_js">
                    <div class="servicesCard__header">
                        <div class="servicesCard__img" style="background-image:url(/dist/img/servicesCardImg-1.png)"></div>
                        <div class="servicesCard__wrapper">
                            <div class="servicesCard__title">1Комплексный подход коррекции фигуры</div>
                            <div class="servicesCard__description">
                                14-этапная программа восстановления упругости кожи и коррекции фигуры 
                            </div>
                        </div>
                        <div class="servicesCard__programm">программа</div>
                    </div>
                    <div class="servicesCard__bottom">
                        <div class="servicesCard__list">
                            <div class="servicesCard__box"
                                data-description="1Эффективно моделируем фигуру. Выборочное воздействие позволяет избавиться от жира в конкретных местах">
                                <div class="servicesCard__what">11 этап</div>
                                <div class="servicesCard__how">1Криолиполиз</div>
                            </div>
                            <div class="servicesCard__box"
                                data-description="2Возвращаем коже упругость. Лифтинг и укрепление кожи, устранение">
                                <div class="servicesCard__what">22 этап</div>
                                <div class="servicesCard__how">2LPG-массаж</div>
                            </div>
                            <div class="servicesCard__box"
                                data-description="3Уход эффективно воздействует на лишние объемы, активизируют процессы липолиза и выведения воды.">
                                <div class="servicesCard__what">33 этап</div>
                                <div class="servicesCard__how">3Морское утончение</div>
                            </div>
                            <div class="servicesCard__box"
                                data-description="4Позволяет уменьшить растяжки, подтянуть и разгладить кожу">
                                <div class="servicesCard__what">44 этап</div>
                                <div class="servicesCard__how">4Vela Shape II</div>
                            </div>
                            <div class="servicesCard__box"
                                data-description="5Лифтинг Позволяет уменьшить растяжки, подтянуть и разгладить кожу">
                                <div class="servicesCard__what">55 этап</div>
                                <div class="servicesCard__how">5Лифтинг</div>
                            </div>
                        </div>
                        <div class="servicesCard__more">
                            <a class="servicesCard__details popupMoreStage_js"
                                href="#popupMoreStage"
                                data-linkMore="linkMore1"
                                data-linkImg="url(/dist/img/usefulBlogImg3.png)"
                            >Подробнее об этапах</a>
                        </div>
                    </div>
                </div>
                <div class="services__item servicesCard">
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
                <div class="services__item servicesCard">
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
                <div class="services__item servicesCard">
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
                <div class="services__item servicesCard">
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
                <div class="services__item servicesCard">
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
                <div class="services__item servicesCard">
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
                <div class="services__item servicesCard">
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
                <div class="services__item servicesCard">
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
                <div class="services__item servicesCard">
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
                <div class="services__item servicesCard">
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
                <div class="services__item servicesCard">
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
                <div class="services__item servicesCard">
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
                <div class="services__item servicesCard">
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
                <div class="services__item servicesCard">
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
                <div class="services__item servicesCard">
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
                <div class="services__item servicesCard servicesCardBig">
                    <div class="servicesCardBig__content">
                        <div class="servicesCardBig__title">больше услуг</div>
                        <div class="servicesCardBig__more">
                            <div class="servicesCardBig__link servicesCardBtn_js">посмотреть</div>
                        </div>
                        <div class="servicesCardBig__number servicesCardNumber_js">13</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services services_cosmetic" data-midnight="gray">
            <div class="container">
                <div class="services__title">Для лучшего результата после процедуры <br>рекомендуем косметику</div>
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
        <section class="services servicesAction" data-midnight="gray">
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
                            <a class="servicesAction__btn btnWhiteBorder" href="#">ЗАПИСАТЬСЯ НА ПРИЁМ</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</main>
<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>