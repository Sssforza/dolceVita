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
<? if (!empty($arResult)) { ?>
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
<? } ?>