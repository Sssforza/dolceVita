<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetAdditionalCSS("/dist/css/blocks/specialist.css");
$APPLICATION->AddHeadScript("/dist/js/modules/jquery.event.move.js");
$APPLICATION->AddHeadScript("/dist/js/modules/jquery.twentytwenty.js");
?>
<main class="main">
	<section class="page page_specialist">
        <section class="banerSection">
            <div class="banerSection__sheet banerSection__sheet_left"></div>
            <div class="breadCrumbs gradientHeader_js">
                <ul class="breadCrumbs__list">
                    <li class="breadCrumbs__item">
                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/breadCrumbsChit-first.svg';?>
                        <a href="/" class="breadCrumbs__chit">На главную</a>
                    </li>
                    <li class="breadCrumbs__item">
                        <a href="#" class="breadCrumbs__chit">О нас</a>
                    </li>
                    <li class="breadCrumbs__item">
                        <a href="/team/" class="breadCrumbs__chit">Специалисты</a>
                    </li>
                    <li class="breadCrumbs__item">
                        <span class="breadCrumbs__chit">Денисенко Дарья</span>
                    </li>
                </ul>
            </div>
            <div class="banerSection__content">
                <div class="banerSection__title">Денисенко Дарья</div>
                <div class="banerSection__description">
                    Имеет большой практический опыт в&nbsp;области лазерной косметологии и&nbsp;антивозрастной медицине,
                    что могут подтвердить сотни благодарных пациентов.
                </div>
            </div>
            <div class="banerSection__img">
                <img src="/dist/img/specialist.png">
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
                                        <div class="aboutSpecialist__tab aboutSpecialistTab_js active" data-tab="education">
                                            Образование
                                        </div>
                                        <div class="aboutSpecialist__tab aboutSpecialistTab_js" data-tab="qualification">
                                            Повышение квалификации
                                        </div>
                                    </div>
                                    <div class="aboutSpecialist__wrapper aboutSpecialistWrapper_js" data-list="education">
                                        <div class="aboutSpecialist__list">
                                            <div class="aboutSpecialist__item">
                                                <div class="aboutSpecialist__year">2014</div>
                                                <div class="aboutSpecialist__description">
                                                    <span>
                                                        Уральский научно-исследовательский институт дерматовенерологии и&nbsp;иммунопатологии, 
                                                        специальность &laquo;Косметология&raquo;
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="aboutSpecialist__item">
                                                <div class="aboutSpecialist__year">2013</div>
                                                <div class="aboutSpecialist__description">
                                                    <span>
                                                        Омская государственная медицинская академия, специальность &laquo;Дерматовенерология&raquo;
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="aboutSpecialist__item">
                                                <div class="aboutSpecialist__year">2012</div>
                                                <div class="aboutSpecialist__description">
                                                    <span>
                                                        Омская государственная медицинская академия, специальность &laquo;Лечебное дело&raquo;
                                                    </span>
                                                    <a href="/dist/img/trash/diploma.png" class="aboutSpecialist__diploma popupImage_js">
                                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialistDiploma.svg';?>
                                                        <span>Посмотреть диплом</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="aboutSpecialist__item">
                                                <div class="aboutSpecialist__year">2011</div>
                                                <div class="aboutSpecialist__description">
                                                    <span>
                                                        Омская государственная медицинская академия
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="aboutSpecialist__item">
                                                <div class="aboutSpecialist__year">2010</div>
                                                <div class="aboutSpecialist__description">
                                                    <span>
                                                        Омская медицинская академия
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aboutSpecialist__show aboutSpecialistShow_js">
                                            <span>Развернуть</span>
                                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/aboutSpecialistShow.svg';?>
                                        </div>
                                        <div class="aboutSpecialist__hide aboutSpecialistHide_js hide">
                                            <span>Свернуть</span>
                                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/aboutSpecialistShow.svg';?>
                                        </div>
                                    </div>
                                    <div class="aboutSpecialist__wrapper aboutSpecialistWrapper_js hidden" data-list="qualification">
                                        <div class="aboutSpecialist__list">
                                            <div class="aboutSpecialist__item">
                                                <div class="aboutSpecialist__year">2021</div>
                                                <div class="aboutSpecialist__description">
                                                    <span>
                                                        Уральский научно-исследовательский институт дерматовенерологии и&nbsp;иммунопатологии, 
                                                        специальность &laquo;Косметология&raquo;
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="aboutSpecialist__item">
                                                <div class="aboutSpecialist__year">2020</div>
                                                <div class="aboutSpecialist__description">
                                                    <span>
                                                        Омская государственная медицинская академия, специальность &laquo;Дерматовенерология&raquo;
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="aboutSpecialist__item">
                                                <div class="aboutSpecialist__year">2019</div>
                                                <div class="aboutSpecialist__description">
                                                    <span>
                                                        Омская государственная медицинская академия, специальность &laquo;Лечебное дело&raquo;
                                                    </span>
                                                    <a href="/dist/img/trash/diploma.png" class="aboutSpecialist__diploma popupImage_js">
                                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialistDiploma.svg';?>
                                                        <span>Посмотреть диплом</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="aboutSpecialist__item">
                                                <div class="aboutSpecialist__year">2018</div>
                                                <div class="aboutSpecialist__description">
                                                    <span>
                                                        Омская государственная медицинская академия
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="aboutSpecialist__item">
                                                <div class="aboutSpecialist__year">2017</div>
                                                <div class="aboutSpecialist__description">
                                                    <span>
                                                        Омская медицинская академия
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="aboutSpecialist__item">
                                                <div class="aboutSpecialist__year">2016</div>
                                                <div class="aboutSpecialist__description">
                                                    <span>
                                                        Омская государственная медицинская академия, специальность &laquo;Лечебное дело&raquo;
                                                    </span>
                                                    <a href="/dist/img/trash/diploma.png" class="aboutSpecialist__diploma popupImage_js">
                                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialistDiploma.svg';?>
                                                        <span>Посмотреть диплом</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="aboutSpecialist__item">
                                                <div class="aboutSpecialist__year">2015</div>
                                                <div class="aboutSpecialist__description">
                                                    <span>
                                                        Омская государственная медицинская академия
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="aboutSpecialist__item">
                                                <div class="aboutSpecialist__year">2014</div>
                                                <div class="aboutSpecialist__description">
                                                    <span>
                                                        Омская медицинская академия
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aboutSpecialist__show aboutSpecialistShow_js">
                                            <span>Развернуть</span>
                                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/aboutSpecialistShow.svg';?>
                                        </div>
                                        <div class="aboutSpecialist__hide aboutSpecialistHide_js hide">
                                            <span>Свернуть</span>
                                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/aboutSpecialistShow.svg';?>
                                        </div>
                                    </div>
                                </div>
                                <div class="aboutSpecialist__aside">
                                    <ul class="aboutSpecialist__ul">
                                        <li class="aboutSpecialist__li">
                                            <div class="aboutSpecialist__top">Стаж работы</div>
                                            <div class="aboutSpecialist__bottom">7 лет</div>
                                        </li>
                                        <li class="aboutSpecialist__li">
                                            <div class="aboutSpecialist__top">Должность</div>
                                            <div class="aboutSpecialist__bottom">Косметолог-эстетист</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="specialist__portfolio">
                    <div class="containerMin">
                        <div class="portfolioSpecialist">
                            <div class="portfolioSpecialist__title">Портфолио специалиста</div>
                            <div class="portfolioSpecialist__content">
                                <div class="portfolioSliderFor portfolioSliderFor_js">
                                    <div class="portfolioSliderFor__item">
                                        <div class="portfolioSliderFor__wrapper">
                                            <div class="portfolioSliderFor__img twentytwenty_js">
                                                <img src="/dist/img/portfolioSliderImg1-1.jpg">
                                                <img src="/dist/img/portfolioSliderImg1-2.jpg">
                                            </div>
                                            <div class="portfolioSliderFor__pseudoElements">
                                                <span>До</span>
                                                <span>После</span>
                                            </div>
                                        </div>
                                        <div class="portfolioSliderFor__description">
                                            <div class="portfolioSliderFor__procedure">Была выполнена процедура</div>
                                            <div class="portfolioSliderFor__name">
                                                Разглаживание мимических и&nbsp;носогубных морщин с&nbsp;помощью лазерного
                                                аппарата Fotona&nbsp;4D
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolioSliderFor__item">
                                        <div class="portfolioSliderFor__wrapper">
                                            <div class="portfolioSliderFor__img twentytwenty_js">
                                                <img src="/dist/img/portfolioSliderImg2-1.jpg">
                                                <img src="/dist/img/portfolioSliderImg2-2.jpg">
                                            </div>
                                            <div class="portfolioSliderFor__pseudoElements">
                                                <span>До</span>
                                                <span>После</span>
                                            </div>
                                        </div>
                                        <div class="portfolioSliderFor__description">
                                            <div class="portfolioSliderFor__procedure">Была выполнена процедура</div>
                                            <div class="portfolioSliderFor__name">
                                                Программа &quot;Сладкая жизнь&quot;
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolioSliderNav portfolioSliderNav_js">
                                    <div class="portfolioSliderNav__item active" data-slide="1">
                                        <div class="portfolioSliderNav__bg" style="background-image:url(/dist/img/portfolioSliderImg1-1.jpg)"></div>
                                    </div>
                                    <div class="portfolioSliderNav__item" data-slide="2">
                                        <div class="portfolioSliderNav__bg" style="background-image:url(/dist/img/portfolioSliderImg2-2.jpg)"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="services">
                    <div class="container">
                        <div class="services__title">Сферы деятельности</div>
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
                                                <a href="#" class="servicesCard__how">Криолиполиз</a>
                                            </div>
                                            <div class="servicesCard__box"
                                                data-description="Возвращаем коже упругость. Лифтинг и укрепление кожи, устранение">
                                                <div class="servicesCard__what">2 этап</div>
                                                <a href="#" class="servicesCard__how">LPG-массаж</a>
                                            </div>
                                            <div class="servicesCard__box"
                                                data-description="Уход эффективно воздействует на лишние объемы, активизируют процессы липолиза и выведения воды.">
                                                <div class="servicesCard__what">3 этап</div>
                                                <a href="#" class="servicesCard__how">Морское утончение</a>
                                            </div>
                                            <div class="servicesCard__box"
                                                data-description="Позволяет уменьшить растяжки, подтянуть и разгладить кожу">
                                                <div class="servicesCard__what">4 этап</div>
                                                <a href="#" class="servicesCard__how">Vela Shape II</a>
                                            </div>
                                            <div class="servicesCard__box"
                                                data-description="Лифтинг">
                                                <div class="servicesCard__what">5 этап</div>
                                                <a href="#" class="servicesCard__how">Лифтинг</a>
                                            </div>
                                            <div class="servicesCard__box"
                                                data-description="Моделирование">
                                                <div class="servicesCard__what">6 этап</div>
                                                <a href="#" class="servicesCard__how">Моделирование фигуры</a>
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
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
	</section>
</main>
<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>