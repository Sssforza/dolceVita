<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetAdditionalCSS("/dist/css/blocks/service.css");
$APPLICATION->AddHeadScript("/dist/js/modules/jquery.event.move.js");
$APPLICATION->AddHeadScript("/dist/js/modules/jquery.twentytwenty.js");
?>
<main class="main">
	<section class="page page_service">
        <section class="banerSection">
            <div class="banerSection__sheet banerSection__sheet_left"></div>
            <div class="breadCrumbs gradientHeader_js">
                <ul class="breadCrumbs__list">
                    <li class="breadCrumbs__item">
                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/breadCrumbsChit-first.svg';?>
                        <a href="/" class="breadCrumbs__chit">На главную</a>
                    </li>
                    <li class="breadCrumbs__item">
                        <a href="/services/" class="breadCrumbs__chit">Услуги</a>
                    </li>
                    <li class="breadCrumbs__item">
                        <a href="#" class="breadCrumbs__chit">Косметология</a>
                    </li>
                    <li class="breadCrumbs__item">
                        <span class="breadCrumbs__chit">Омоложение 4D на аппарате Fotona</span>
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
	</section>
</main>
<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>