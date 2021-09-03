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

<section class="services services_attendance">
    <div class="services__content container">
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
        <div class="services__item servicesCard servicesCard_programm">
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
        <div class="services__item servicesCard servicesCardBig">
            <div class="servicesCardBig__content">
                <div class="servicesCardBig__title">больше услуг</div>
                <div class="servicesCardBig__more">
                    <div class="servicesCardBig__link">посмотреть</div>
                </div>
            </div>
        </div>
    </div>
</section>