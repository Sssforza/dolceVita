<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetAdditionalCSS("/dist/css/blocks/specialist.css");
?>
<main class="main">
	<section class="page page_specialist">
        <section class="banerSection">
            <div class="banerSection__sheet banerSection__sheet_left"></div>
            <div class="breadCrumbs">
                <ul class="breadCrumbs__list">
                    <li class="breadCrumbs__item">
                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/breadCrumbsChit-first.svg';?>
                        <a href="" class="breadCrumbs__chit">На главную</a>
                    </li>
                    <li class="breadCrumbs__item">
                        <a href="" class="breadCrumbs__chit">О нас</a>
                    </li>
                    <li class="breadCrumbs__item">
                        <a href="" class="breadCrumbs__chit">Специалисты</a>
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
        <section class="specialist">
            <div class="specialist__content">
                <div class="containerMin">
                    <div class="specialist__about">
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
                                    <div class="aboutSpecialist__list">
                                        <div class="aboutSpecialist__wrapper aboutSpecialistWrapper_js" data-list="education">
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
                                                    <a href="#" class="aboutSpecialist__diploma">
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
                                        <div class="aboutSpecialist__wrapper aboutSpecialistWrapper_js hide" data-list="qualification">
                                            <div class="aboutSpecialist__item">
                                                <div class="aboutSpecialist__year">2020</div>
                                                <div class="aboutSpecialist__description">
                                                    <span>
                                                        Уральский научно-исследовательский институт дерматовенерологии и&nbsp;иммунопатологии, 
                                                        специальность &laquo;Косметология&raquo;
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="aboutSpecialist__item">
                                                <div class="aboutSpecialist__year">2016</div>
                                                <div class="aboutSpecialist__description">
                                                    <span>
                                                        Омская государственная медицинская академия, специальность &laquo;Дерматовенерология&raquo;
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="aboutSpecialist__item">
                                                <div class="aboutSpecialist__year">2015</div>
                                                <div class="aboutSpecialist__description">
                                                    <span>
                                                        Омская государственная медицинская академия, специальность &laquo;Лечебное дело&raquo;
                                                    </span>
                                                </div>
                                            </div>
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
                            <div class="aboutSpecialist__show aboutSpecialistShow_js">
                                <span>Развернуть</span>
                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/aboutSpecialistShow.svg';?>
                            </div>
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