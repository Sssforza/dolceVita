<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetAdditionalCSS("/dist/css/blocks/team.css");
?>
<main class="main">
	<section class="page page_team">
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
                        <span class="breadCrumbs__chit">Специалисты</span>
                    </li>
                </ul>
            </div>
            <div class="banerSection__content">
                <div class="banerSection__title">Команда Dolce Vita</div>
                <div class="banerSection__description">
                    Главная ценность нашей компании&nbsp;&mdash; слаженный коллектив высококвалифицированных 
                    специалистов, которым удаётся совершать настоящие чудеса в&nbsp;области косметологии
                </div>
            </div>
            <div class="banerSection__sheet banerSection__sheet_right"></div>
        </section>
        <section class="team team_js">
            <div class="team__content containerMin">
                <div class="teamList">
                    <div class="teamList__content">
                        <div class="teamList__item teamItem_js active" data-choice="all">Все специалисты</div>
                        <div class="teamList__item teamItem_js" data-choice="cosmetologists">Косметологи</div>
                        <div class="teamList__item teamItem_js" data-choice="dermatologist">Дерматологи</div>
                        <div class="teamList__item teamItem_js" data-choice="masseur">Массажисты</div>
                        <div class="teamList__item teamItem_js" data-choice="hairdresser">Парикмахеры</div>
                        <div class="teamList__item teamItem_js" data-choice="manicurists">Специалисты по маникюру и педикюру</div>
                    </div>
                </div>
                <div class="teamPeople">
                    <div class="teamPeople__list teamPeopleList_js show" data-specificity="all">
                        <div class="teamPeople__item">
                            <div class="teamPeople__person">
                                <div class="teamPeople__bg">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
                                </div>
                                <div class="teamPeople__human">
                                    <img src="/dist/img/teamPeople1.png">
                                </div>
                            </div>
                            <div class="teamPeople__name">
                                <a href="#" class="teamPeople__link teamPeopleLink_js">Дарья <br>Денисенко</a>
                            </div>
                            <div class="teamPeople__doctor">Врач-косметолог, дерматолог</div>
                        </div>
                        <div class="teamPeople__item">
                            <div class="teamPeople__person">
                                <div class="teamPeople__bg">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
                                </div>
                                <div class="teamPeople__human">
                                    <img src="/dist/img/teamPeople2.png">
                                </div>
                            </div>
                            <div class="teamPeople__name">
                                <a href="#" class="teamPeople__link teamPeopleLink_js">Людмила <br>Буркина</a>
                            </div>
                            <div class="teamPeople__doctor">Врач-косметолог, дерматолог</div>
                        </div>
                        <div class="teamPeople__item">
                            <div class="teamPeople__person">
                                <div class="teamPeople__bg">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
                                </div>
                                <div class="teamPeople__human">
                                    <img src="/dist/img/teamPeople3.png">
                                </div>
                            </div>
                            <div class="teamPeople__name">
                                <a href="#" class="teamPeople__link teamPeopleLink_js">Галина <br>Лагутова</a>
                            </div>
                            <div class="teamPeople__doctor">Врач-косметолог, дерматолог</div>
                        </div>
                        <div class="teamPeople__item">
                            <div class="teamPeople__person">
                                <div class="teamPeople__bg">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
                                </div>
                                <div class="teamPeople__human">
                                    <img src="/dist/img/teamPeople2.png">
                                </div>
                            </div>
                            <div class="teamPeople__name">
                                <a href="#" class="teamPeople__link teamPeopleLink_js">Людмила <br>Буркина</a>
                            </div>
                            <div class="teamPeople__doctor">Врач-косметолог, дерматолог</div>
                        </div>
                        <div class="teamPeople__item">
                            <div class="teamPeople__person">
                                <div class="teamPeople__bg">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
                                </div>
                                <div class="teamPeople__human">
                                    <img src="/dist/img/teamPeople3.png">
                                </div>
                            </div>
                            <div class="teamPeople__name">
                                <a href="#" class="teamPeople__link teamPeopleLink_js">Галина <br>Лагутова</a>
                            </div>
                            <div class="teamPeople__doctor">Врач-косметолог, дерматолог</div>
                        </div>
                        <div class="teamPeople__item">
                            <div class="teamPeople__person">
                                <div class="teamPeople__bg">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
                                </div>
                                <div class="teamPeople__human">
                                    <img src="/dist/img/teamPeople1.png">
                                </div>
                            </div>
                            <div class="teamPeople__name">
                                <a href="#" class="teamPeople__link teamPeopleLink_js">Дарья <br>Денисенко</a>
                            </div>
                            <div class="teamPeople__doctor">Врач-косметолог, дерматолог</div>
                        </div>
                        <div class="teamPeople__item">
                            <div class="teamPeople__person">
                                <div class="teamPeople__bg">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
                                </div>
                                <div class="teamPeople__human">
                                    <img src="/dist/img/teamPeople2.png">
                                </div>
                            </div>
                            <div class="teamPeople__name">
                                <a href="#" class="teamPeople__link teamPeopleLink_js">Людмила <br>Буркина</a>
                            </div>
                            <div class="teamPeople__doctor">Врач-косметолог, дерматолог</div>
                        </div>
                        <div class="teamPeople__item">
                            <div class="teamPeople__person">
                                <div class="teamPeople__bg">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
                                </div>
                                <div class="teamPeople__human">
                                    <img src="/dist/img/teamPeople3.png">
                                </div>
                            </div>
                            <div class="teamPeople__name">
                                <a href="#" class="teamPeople__link teamPeopleLink_js">Галина <br>Лагутова</a>
                            </div>
                            <div class="teamPeople__doctor">Врач-косметолог, дерматолог</div>
                        </div>
                        <div class="teamPeople__item">
                            <div class="teamPeople__person">
                                <div class="teamPeople__bg">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
                                </div>
                                <div class="teamPeople__human">
                                    <img src="/dist/img/teamPeople2.png">
                                </div>
                            </div>
                            <div class="teamPeople__name">
                                <a href="#" class="teamPeople__link teamPeopleLink_js">Людмила <br>Буркина</a>
                            </div>
                            <div class="teamPeople__doctor">Врач-косметолог, дерматолог</div>
                        </div>
                        <div class="teamPeople__item">
                            <div class="teamPeople__person">
                                <div class="teamPeople__bg">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
                                </div>
                                <div class="teamPeople__human">
                                    <img src="/dist/img/teamPeople3.png">
                                </div>
                            </div>
                            <div class="teamPeople__name">
                                <a href="#" class="teamPeople__link teamPeopleLink_js">Галина <br>Лагутова</a>
                            </div>
                            <div class="teamPeople__doctor">Врач-косметолог, дерматолог</div>
                        </div>
                    </div>
                    <div class="teamPeople__list teamPeopleList_js hide" data-specificity="cosmetologists">
                        <div class="teamPeople__item">
                            <div class="teamPeople__person">
                                <div class="teamPeople__bg">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
                                </div>
                                <div class="teamPeople__human">
                                    <img src="/dist/img/teamPeople2.png">
                                </div>
                            </div>
                            <div class="teamPeople__name">
                                <a href="#" class="teamPeople__link teamPeopleLink_js">Людмила <br>Буркина</a>
                            </div>
                            <div class="teamPeople__doctor">Врач-косметолог, дерматолог</div>
                        </div>
                        <div class="teamPeople__item">
                            <div class="teamPeople__person">
                                <div class="teamPeople__bg">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
                                </div>
                                <div class="teamPeople__human">
                                    <img src="/dist/img/teamPeople3.png">
                                </div>
                            </div>
                            <div class="teamPeople__name">
                                <a href="#" class="teamPeople__link teamPeopleLink_js">Галина <br>Лагутова</a>
                            </div>
                            <div class="teamPeople__doctor">Врач-косметолог, дерматолог</div>
                        </div>
                    </div>
                    <div class="teamPeople__list teamPeopleList_js hide" data-specificity="dermatologist">
                        <div class="teamPeople__item">
                            <div class="teamPeople__person">
                                <div class="teamPeople__bg">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
                                </div>
                                <div class="teamPeople__human">
                                    <img src="/dist/img/teamPeople1.png">
                                </div>
                            </div>
                            <div class="teamPeople__name">
                                <a href="#" class="teamPeople__link teamPeopleLink_js">Людмила <br>Буркина</a>
                            </div>
                            <div class="teamPeople__doctor">Врач-косметолог, дерматолог</div>
                        </div>
                        <div class="teamPeople__item">
                            <div class="teamPeople__person">
                                <div class="teamPeople__bg">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
                                </div>
                                <div class="teamPeople__human">
                                    <img src="/dist/img/teamPeople2.png">
                                </div>
                            </div>
                            <div class="teamPeople__name">
                                <a href="#" class="teamPeople__link teamPeopleLink_js">Галина <br>Лагутова</a>
                            </div>
                            <div class="teamPeople__doctor">Врач-косметолог, дерматолог</div>
                        </div>
                    </div>
                    <div class="teamPeople__list teamPeopleList_js hide" data-specificity="masseur">
                        <div class="teamPeople__item">
                            <div class="teamPeople__person">
                                <div class="teamPeople__bg">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
                                </div>
                                <div class="teamPeople__human">
                                    <img src="/dist/img/teamPeople3.png">
                                </div>
                            </div>
                            <div class="teamPeople__name">
                                <a href="#" class="teamPeople__link teamPeopleLink_js">Людмила <br>Буркина</a>
                            </div>
                            <div class="teamPeople__doctor">Врач-косметолог, дерматолог</div>
                        </div>
                        <div class="teamPeople__item">
                            <div class="teamPeople__person">
                                <div class="teamPeople__bg">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
                                </div>
                                <div class="teamPeople__human">
                                    <img src="/dist/img/teamPeople1.png">
                                </div>
                            </div>
                            <div class="teamPeople__name">
                                <a href="#" class="teamPeople__link teamPeopleLink_js">Галина <br>Лагутова</a>
                            </div>
                            <div class="teamPeople__doctor">Врач-косметолог, дерматолог</div>
                        </div>
                    </div>
                    <div class="teamPeople__list teamPeopleList_js hide" data-specificity="hairdresser">
                        <div class="teamPeople__item">
                            <div class="teamPeople__person">
                                <div class="teamPeople__bg">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
                                </div>
                                <div class="teamPeople__human">
                                    <img src="/dist/img/teamPeople2.png">
                                </div>
                            </div>
                            <div class="teamPeople__name">
                                <a href="#" class="teamPeople__link teamPeopleLink_js">Людмила <br>Буркина</a>
                            </div>
                            <div class="teamPeople__doctor">Врач-косметолог, дерматолог</div>
                        </div>
                        <div class="teamPeople__item">
                            <div class="teamPeople__person">
                                <div class="teamPeople__bg">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
                                </div>
                                <div class="teamPeople__human">
                                    <img src="/dist/img/teamPeople3.png">
                                </div>
                            </div>
                            <div class="teamPeople__name">
                                <a href="#" class="teamPeople__link teamPeopleLink_js">Галина <br>Лагутова</a>
                            </div>
                            <div class="teamPeople__doctor">Врач-косметолог, дерматолог</div>
                        </div>
                    </div>
                    <div class="teamPeople__list teamPeopleList_js hide" data-specificity="manicurists">
                        <div class="teamPeople__item">
                            <div class="teamPeople__person">
                                <div class="teamPeople__bg">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
                                </div>
                                <div class="teamPeople__human">
                                    <img src="/dist/img/teamPeople1.png">
                                </div>
                            </div>
                            <div class="teamPeople__name">
                                <a href="#" class="teamPeople__link teamPeopleLink_js">Людмила <br>Буркина</a>
                            </div>
                            <div class="teamPeople__doctor">Врач-косметолог, дерматолог</div>
                        </div>
                        <div class="teamPeople__item">
                            <div class="teamPeople__person">
                                <div class="teamPeople__bg">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
                                </div>
                                <div class="teamPeople__human">
                                    <img src="/dist/img/teamPeople3.png">
                                </div>
                            </div>
                            <div class="teamPeople__name">
                                <a href="#" class="teamPeople__link teamPeopleLink_js">Галина <br>Лагутова</a>
                            </div>
                            <div class="teamPeople__doctor">Врач-косметолог, дерматолог</div>
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