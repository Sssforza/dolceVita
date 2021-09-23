<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetAdditionalCSS("/dist/css/blocks/service.css");
$APPLICATION->AddHeadScript("/dist/js/modules/jquery.event.move.js");
$APPLICATION->AddHeadScript("/dist/js/modules/jquery.twentytwenty.js");
?>
<main class="main">
	<section class="page page_service">
        <section class="banerService" style="background-image:url(/dist/img/trash/banerService-2.jpg)">
            <div class="containerMin">
                <div class="banerService__content">
                    <div class="banerService__title gradientHeader_js">Криолиполиз</div>
                    <div class="breadCrumbs">
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
                                <span class="breadCrumbs__chit">Криолиполиз</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="contentService" data-midnight="gray">
            <div class="containerMin">
                <div class="contentService__content">
                    <section class="contentService__main">
                        <div class="contentService__description">
                            Удаление локальных жировых отложений безоперационным путём при помощи воздействия холода.
                        </div>
                        <div class="contentService__anchors">
                            <div class="teamList">
                                <div class="teamList__content">
                                    <div class="teamList__item anchorScroll_js active" data-anchor="result">Результат</div>
                                    <div class="teamList__item anchorScroll_js" data-anchor="procedure">Процедура</div>
                                    <div class="teamList__item anchorScroll_js" data-anchor="reviews">Отзывы</div>
                                    <div class="teamList__item anchorScroll_js" data-anchor="price">Стоимость</div>
                                    <div class="teamList__item anchorScroll_js" data-anchor="equipment">Оборудование</div>
                                    <div class="teamList__item anchorScroll_js" data-anchor="specialists">Специалисты</div>
                                    <div class="teamList__item anchorScroll_js" data-anchor="indications">Показания</div>
                                </div>
                            </div>
                        </div>
                        <div class="contentService__result" id="result">
                            <div class="portfolioSliderFor portfolioSliderFor_js">
                                <div class="portfolioSliderFor__item">
                                    <div class="portfolioSliderFor__wrapper">
                                        <div class="portfolioSliderFor__img twentytwenty_js">
                                            <img src="/dist/img/trash/portfolioSliderImgProcedure1-1.jpg">
                                            <img src="/dist/img/trash/portfolioSliderImgProcedure1-2.jpg">
                                        </div>
                                        <div class="portfolioSliderFor__pseudoElements">
                                            <span>До</span>
                                            <span>После</span>
                                        </div>
                                    </div>
                                    <div class="portfolioSliderFor__description">
                                        <div class="portfolioSliderFor__procedure">Была выполнена процедура</div>
                                        <div class="portfolioSliderFor__name">
                                            Криолиполиз
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolioSliderNav portfolioSliderNav_js">
                                <div class="portfolioSliderNav__item active" data-slide="1">
                                    <div class="portfolioSliderNav__bg" style="background-image:url(/dist/img/trash/portfolioSliderImgProcedure1-2.jpg)"></div>
                                </div>
                            </div>
                        </div>
                        <div class="contentService__stage serviceStage" id="procedure">
                            <div class="serviceStage__title">
                                Как проходит процедура
                            </div>
                            <div class="serviceStage__procedure">
                                Криолиполиз&nbsp;&mdash; методика коррекции локальных жировых отложений без травм
                                и&nbsp;хирургического вмешательства.
                                Благодаря использованию низких температур происходит запуск естественных процессов сжигания
                                подкожно-жировой клетчатки, что дает возможность сделать фигуру более гармоничной. За&nbsp;один сеанс
                                можно уменьшить складку на&nbsp;30%.
                            </div>
                            <div class="serviceStage__items">
                                <div class="serviceStage__phase serviceStageItem_js show">
                                    <div class="serviceStage__contain">
                                        <div class="serviceStage__view stageView">
                                            <div class="stageView__list stageViewSlider_js">
                                                <div class="stageView__item">
                                                    <div class="stageView__number">1</div>
                                                    <div class="stageView__img">
                                                        <div class="stageView__image" style="background-image:url(/dist/img/trash/stageViewImgProcedure-2.jpg)"></div>
                                                    </div>
                                                    <div class="stageView__wrapper">
                                                        <div class="stageView__name">Измеряем исходные параметры</div>
                                                        <div class="stageView__description">
                                                            Измеряем толщину жировой складки. Фиксируем показатель &laquo;до&raquo; в&nbsp;карту клиента.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="stageView__item">
                                                    <div class="stageView__number">2</div>
                                                    <div class="stageView__img">
                                                        <div class="stageView__image" style="background-image:url(/dist/img/trash/stageViewImgProcedure-3.jpg)"></div>
                                                    </div>
                                                    <div class="stageView__wrapper">
                                                        <div class="stageView__name">Подготовливаем зону</div>
                                                        <div class="stageView__description">
                                                            Маркером обозначаем зону воздействия. Обрабатываем выбранный участок специальным составом
                                                            и&nbsp;накрываем гелевой салфеткой для равномерного охлаждения тканей
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="stageView__item">
                                                    <div class="stageView__number">3</div>
                                                    <div class="stageView__img">
                                                        <div class="stageView__image" style="background-image:url(/dist/img/trash/stageViewImgProcedure-4.jpg)"></div>
                                                    </div>
                                                    <div class="stageView__wrapper">
                                                        <div class="stageView__name">Воздействие на&nbsp;жировые отложения холодом</div>
                                                        <div class="stageView__description">
                                                            Устанавливаем вакуумную насадку с&nbsp;охлаждающими панелями. Запускается процесс разрушения жировых клеток.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="stageView__item">
                                                    <div class="stageView__number">4</div>
                                                    <div class="stageView__img">
                                                        <div class="stageView__image" style="background-image:url(/dist/img/trash/stageViewImgProcedure-5.jpg)"></div>
                                                    </div>
                                                    <div class="stageView__wrapper">
                                                        <div class="stageView__name">Усиление эффекта</div>
                                                        <div class="stageView__description">
                                                            После процедуры врач делает легкий массаж зоны, на&nbsp;которой была выполнена процедура.
                                                            Это усилит эффект от&nbsp;процедуры.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="stageView__item">
                                                    <div class="stageView__number">5</div>
                                                    <div class="stageView__img">
                                                        <div class="stageView__image" style="background-image:url(/dist/img/trash/stageViewImgProcedure-6.jpg)"></div>
                                                    </div>
                                                    <div class="stageView__wrapper">
                                                        <div class="stageView__name">Наступление окончательного результата</div>
                                                        <div class="stageView__description">
                                                            Спустя три месяца измеряем толщину жировой складки
                                                            и&nbsp;фиксируем показатель &laquo;после&raquo;. Сравниваем результаты.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contentService__reviews serviceStage serviceReviews serviceReviews_js" id="reviews">
                            <div class="serviceReviews__svg serviceReviewsSvg_js">
                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/linesHeart.svg';?>
                            </div>
                            <div class="serviceStage__title">
                                Отзывы о процедуре
                            </div>
                            <div class="serviceReviews__content">
                                <div class="serviceReviews__list serviceReviewsSlider_js">
                                    <div class="serviceReviews__item serviceReviewsItem_js active" data-people="1">
                                        <div class="serviceReviews__img" style="background-image:url(/dist/img/reviewsItem10.png)"></div>
                                        <div class="serviceReviews__name">Константина</div>
                                        <div class="serviceReviews__date">15.12.2020</div>
                                    </div>
                                    <div class="serviceReviews__item serviceReviewsItem_js" data-people="2">
                                        <div class="serviceReviews__img" style="background-image:url(/dist/img/reviewsItem12.png)"></div>
                                        <div class="serviceReviews__name">Ксения</div>
                                        <div class="serviceReviews__date">22.09.2020</div>
                                    </div>
                                    <div class="serviceReviews__item serviceReviewsItem_js" data-people="3">
                                        <div class="serviceReviews__img" style="background-image:url(/dist/img/reviewsItem2.png)"></div>
                                        <div class="serviceReviews__name">Яна</div>
                                        <div class="serviceReviews__date">14.05.2020</div>
                                    </div>
                                </div>
                                <div class="serviceReviews__info">
                                    <div class="serviceReviews__text serviceReviewsText_js show" data-review="1">
                                        <p>
                                            На&nbsp;лазерную эпиляцию я&nbsp;решалась долго, но&nbsp;для меня она оказалась во&nbsp;много раз
                                            эффективнее, чем все остальные способы, вместе взятые. Бритья хватало часов на&nbsp;10, крема
                                            не&nbsp;брали жесткие волосы, от&nbsp;воска волосы врастали и&nbsp;появлялось раздражение.
                                        </p>
                                        <p>
                                            Для начала я&nbsp;выбрала две зоны, подмышки и&nbsp;бикини. Перед первой процедурой со&nbsp;страху
                                            выпила таблетку обезболивающего. И&nbsp;зря! Не&nbsp;сказать, что вспышки лазера доставляли
                                            удовольствие, но&nbsp;тепло и&nbsp;легкое покалывание&nbsp;&mdash; это не&nbsp;то, от&nbsp;чего
                                            хочется вскочить и&nbsp;убежать.
                                        </p>
                                        <p>
                                            С&nbsp;каждой процедурой волосков становилось все меньше, а&nbsp;те, что оставались,
                                            были светлыми и&nbsp;тонкими. Теперь думаю сделать ноги полностью.
                                            Как&nbsp;же приятно ехать на&nbsp;отдых и&nbsp;не&nbsp;думать про бритвы и&nbsp;кремы!
                                        </p>
                                    </div>
                                    <div class="serviceReviews__text serviceReviewsText_js hide" data-review="2">
                                        <p>
                                            Для начала я&nbsp;выбрала две зоны, подмышки и&nbsp;бикини. Перед первой процедурой со&nbsp;страху
                                            выпила таблетку обезболивающего. И&nbsp;зря! Не&nbsp;сказать, что вспышки лазера доставляли
                                            удовольствие, но&nbsp;тепло и&nbsp;легкое покалывание&nbsp;&mdash; это не&nbsp;то, от&nbsp;чего
                                            хочется вскочить и&nbsp;убежать.
                                        </p>
                                        <p>
                                            С&nbsp;каждой процедурой волосков становилось все меньше, а&nbsp;те, что оставались,
                                            были светлыми и&nbsp;тонкими. Теперь думаю сделать ноги полностью.
                                            Как&nbsp;же приятно ехать на&nbsp;отдых и&nbsp;не&nbsp;думать про бритвы и&nbsp;кремы!
                                        </p>
                                    </div>
                                    <div class="serviceReviews__text serviceReviewsText_js hide" data-review="3">
                                        <p>
                                            На&nbsp;лазерную эпиляцию я&nbsp;решалась долго, но&nbsp;для меня она оказалась во&nbsp;много раз
                                            эффективнее, чем все остальные способы, вместе взятые. Бритья хватало часов на&nbsp;10, крема
                                            не&nbsp;брали жесткие волосы, от&nbsp;воска волосы врастали и&nbsp;появлялось раздражение.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contentService__price serviceStage servicePrice" id="price">
                            <div class="serviceStage__title">
                                Стоимость
                            </div>
                            <div class="servicePrice__content">
                                <div class="servicePrice__list">
                                    <a href="#" class="servicePrice__item">
                                        <div class="servicePrice__equipmenent">1 насадка</div>
                                        <div class="servicePrice__cost">12 000 ₽</div>
                                    </a>
                                    <a href="#" class="servicePrice__item">
                                        <div class="servicePrice__equipmenent">2 насадки</div>
                                        <div class="servicePrice__cost">18 000 ₽</div>
                                    </a>
                                    <a href="#" class="servicePrice__item">
                                        <div class="servicePrice__equipmenent">4 насадки</div>
                                        <div class="servicePrice__cost">36 000 ₽</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contentService__equipmenent serviceStage serviceEquipmenent" id="equipment">
                            <div class="serviceEquipmenent__content">
                                <div class="serviceEquipmenent__description">
                                    <div class="serviceStage__title">
                                        Оригинальное оборудование
                                    </div>
                                    <div class="serviceEquipmenent__text">
                                        COCOON&nbsp;&mdash; аппарат для криолиполиза на&nbsp;базе использования контролируемого
                                        холода для избавления от&nbsp;нежелательных отложений жировой ткани, коррекции
                                        контуров тела и&nbsp;фигуры в&nbsp;целом.
                                    </div>
                                </div>
                                <div class="serviceEquipmenent__video">
                                    <a href="#" class="serviceEquipmenent__img" style="background-image:url(/dist/img/trash/serviceEquipmenentImg.png)"></a>
                                    <span class="serviceEquipmenent__play">
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/playIcon.svg';?>
                                    </span>
                                </div>
                                <a href="/dist/img/trash/certificate.png" class="serviceEquipmenent__warranty sliderEquipWarranty popupImage_js">
									<?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/sliderEquipmentWarranty-i.svg';?>
									<div class="sliderEquipWarranty__title">Гарантия <br>подлинности</div>
									<div class="sliderEquipWarranty__link">Посмотреть <br>сертификат</div>
									<div class="sliderEquipWarranty__svg">
										<?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/sliderEquipWarrantyLink.svg';?>
									</div>
								</a>
                            </div>
                        </div>
                        <div class="contentService__specialists serviceStage serviceSpecialists specialists specialists_js" id="specialists">
                            <div class="serviceStage__title">
                                Специалисты
                            </div>
                            <div class="serviceSpecialists__content">
                                <div class="specialists__for specialistsFor">
                                    <div class="specialistsFor__content specialistsFor_js">
                                        <div class="specialistsFor__item">
                                            <div class="specialistsFor__description">
                                                <div class="specialistsFor__wrapper">
                                                    <div class="specialistsFor__name">Галина Лагутова</div>
                                                    <div class="specialistsFor__block">
                                                        <ul class="specialistsFor__ul">
                                                            <li class="specialistsFor__specialization">Специализация</li>
                                                            <li class="specialistsFor__medic">Врач-косметолог, дерматолог</li>
                                                        </ul>
                                                        <ul class="specialistsFor__ul">
                                                            <li class="specialistsFor__specialization">Профессиональный опыт</li>
                                                            <li class="specialistsFor__medic">7 лет</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="specialistsFor__link">
                                                    <a href="#" class="specialistsFor__a">
                                                        <span>Подробнее</span>
                                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialistsForLink-array.svg';?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="specialistsFor__img">
                                                <img src="/dist/img/specialistsForImg1.png">
                                            </div>
                                        </div>
                                        <div class="specialistsFor__item">
                                            <div class="specialistsFor__description">
                                                <div class="specialistsFor__wrapper">
                                                    <div class="specialistsFor__name">Светлана Зуева</div>
                                                    <div class="specialistsFor__block">
                                                        <ul class="specialistsFor__ul">
                                                            <li class="specialistsFor__specialization">Специализация</li>
                                                            <li class="specialistsFor__medic">Косметолог-эстетист</li>
                                                        </ul>
                                                        <ul class="specialistsFor__ul">
                                                            <li class="specialistsFor__specialization">Профессиональный опыт</li>
                                                            <li class="specialistsFor__medic">5 лет</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="specialistsFor__link">
                                                    <a href="#" class="specialistsFor__a">
                                                        <span>Подробнее</span>
                                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialistsForLink-array.svg';?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="specialistsFor__img">
                                                <img src="/dist/img/specialistsForImg1.png">
                                            </div>
                                        </div>
                                        <div class="specialistsFor__item">
                                            <div class="specialistsFor__description">
                                                <div class="specialistsFor__wrapper">
                                                    <div class="specialistsFor__name">Татьяна Малицкая</div>
                                                    <div class="specialistsFor__block">
                                                        <ul class="specialistsFor__ul">
                                                            <li class="specialistsFor__specialization">Специализация</li>
                                                            <li class="specialistsFor__medic">Косметолог-эстетист</li>
                                                        </ul>
                                                        <ul class="specialistsFor__ul">
                                                            <li class="specialistsFor__specialization">Профессиональный опыт</li>
                                                            <li class="specialistsFor__medic">7 лет</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="specialistsFor__link">
                                                    <a href="#" class="specialistsFor__a">
                                                        <span>Подробнее</span>
                                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialistsForLink-array.svg';?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="specialistsFor__img">
                                                <img src="/dist/img/specialistsForImg1.png">
                                            </div>
                                        </div>
                                        <div class="specialistsFor__item">
                                            <div class="specialistsFor__description">
                                                <div class="specialistsFor__wrapper">
                                                    <div class="specialistsFor__name">Елена Пономарева</div>
                                                    <div class="specialistsFor__block">
                                                        <ul class="specialistsFor__ul">
                                                            <li class="specialistsFor__specialization">Специализация</li>
                                                            <li class="specialistsFor__medic">Специалист по коррекции фигуры и массажу</li>
                                                        </ul>
                                                        <ul class="specialistsFor__ul">
                                                            <li class="specialistsFor__specialization">Профессиональный опыт</li>
                                                            <li class="specialistsFor__medic">10 лет</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="specialistsFor__link">
                                                    <a href="#" class="specialistsFor__a">
                                                        <span>Подробнее</span>
                                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialistsForLink-array.svg';?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="specialistsFor__img">
                                                <img src="/dist/img/specialistsForImg1.png">
                                            </div>
                                        </div>
                                        <div class="specialistsFor__item">
                                            <div class="specialistsFor__description">
                                                <div class="specialistsFor__wrapper">
                                                    <div class="specialistsFor__name">Кристина Барабина</div>
                                                    <div class="specialistsFor__block">
                                                        <ul class="specialistsFor__ul">
                                                            <li class="specialistsFor__specialization">Специализация</li>
                                                            <li class="specialistsFor__medic">Врач-косметолог, дерматолог</li>
                                                        </ul>
                                                        <ul class="specialistsFor__ul">
                                                            <li class="specialistsFor__specialization">Профессиональный опыт</li>
                                                            <li class="specialistsFor__medic">7 лет</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="specialistsFor__link">
                                                    <a href="#" class="specialistsFor__a">
                                                        <span>Подробнее</span>
                                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialistsForLink-array.svg';?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="specialistsFor__img">
                                                <img src="/dist/img/specialistsForImg1.png">
                                            </div>
                                        </div>
                                        <div class="specialistsFor__item">
                                            <div class="specialistsFor__description">
                                                <div class="specialistsFor__wrapper">
                                                    <div class="specialistsFor__name">Ангелина Линова</div>
                                                    <div class="specialistsFor__block">
                                                        <ul class="specialistsFor__ul">
                                                            <li class="specialistsFor__specialization">Специализация</li>
                                                            <li class="specialistsFor__medic">Врач-косметолог, дерматолог</li>
                                                        </ul>
                                                        <ul class="specialistsFor__ul">
                                                            <li class="specialistsFor__specialization">Профессиональный опыт</li>
                                                            <li class="specialistsFor__medic">7 лет</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="specialistsFor__link">
                                                    <a href="#" class="specialistsFor__a">
                                                        <span>Подробнее</span>
                                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialistsForLink-array.svg';?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="specialistsFor__img">
                                                <img src="/dist/img/specialistsForImg1.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contentService__testimony serviceTestimony serviceTestimony_js" id="indications">
                            <div class="serviceTestimony__content">
                                <div class="serviceTestimony__box">
                                    <div class="serviceTestimony__title">
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/serviceTestimonyPossible.svg';?>
                                        <span>Показания к процедуре</span>
                                    </div>
                                    <div class="serviceTestimony__list">
                                        <div class="serviceTestimony__item">
                                            <div class="serviceTestimony__about">
                                                <span>
                                                    Наличие локальных жировых отложений, которые не&nbsp;поддаются традиционным способам
                                                    похудения&nbsp;&mdash; спорту, диетам и&nbsp;массажу
                                                </span>
                                            </div>
                                        </div>
                                        <div class="serviceTestimony__item">
                                            <div class="serviceTestimony__about">
                                                <span>
                                                    Уменьшение объемов тела
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="serviceTestimony__box">
                                    <div class="serviceTestimony__title">
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/serviceTestimonyForbidden.svg';?>
                                        <span>Противопоказания</span>
                                    </div>
                                    <div class="serviceTestimony__list">
                                        <div class="serviceTestimony__item">
                                            <div class="serviceTestimony__about">
                                                <span>
                                                    Аллергия на&nbsp;холод
                                                </span>
                                            </div>
                                        </div>
                                        <div class="serviceTestimony__item">
                                            <div class="serviceTestimony__about">
                                                <span>
                                                    Тяжелая степень ожирения
                                                </span>
                                            </div>
                                        </div>
                                        <div class="serviceTestimony__item">
                                            <div class="serviceTestimony__about">
                                                <span>
                                                    Острые воспалительные процессы
                                                </span>
                                            </div>
                                        </div>
                                        <div class="serviceTestimony__item">
                                            <div class="serviceTestimony__about">
                                                <span>
                                                    Наличие кардиостимулятора
                                                </span>
                                            </div>
                                        </div>
                                        <div class="serviceTestimony__item">
                                            <div class="serviceTestimony__about">
                                                <span>
                                                    Беременность
                                                </span>
                                            </div>
                                        </div>
                                        <div class="serviceTestimony__item">
                                            <div class="serviceTestimony__about">
                                                <span>
                                                    Онкологические заболевания
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <aside class="contentService__aside asideService asideService_js">
                        <div class="asideService__wrapper">
                            <div class="asideService__title">
                                Уменьшение объема жировых складок до &minus;30%
                            </div>
                            <div class="asideService__list">
                                <div class="asideService__line">
                                    <div class="asideService__item">
                                        <div class="asideService__what">Длительность</div>
                                        <div class="asideService__answer">90 мин</div>
                                    </div>
                                    <div class="asideService__item">
                                        <div class="asideService__what">Процедуры</div>
                                        <div class="asideService__answer">Определяется индивидуально</div>
                                    </div>
                                </div>
                                <div class="asideService__item">
                                    <div class="asideService__what">Оборудование</div>
                                    <div class="asideService__answer">Coccon</div>
                                </div>
                                <div class="asideService__item">
                                    <div class="asideService__what">Стоимость</div>
                                    <div class="asideService__answer">От 18 000 ₽</div>
                                </div>
                            </div>
                        </div>
                        <div class="asideService__above">
                            <div class="asideService__more">-30% объема жировой складки за&nbsp;одну процедуру</div>
                        </div>
                        <div class="asideService__above">
                            <div class="asideService__more">1&nbsp;процедура для достижения результата</div>
                        </div>
                        <div class="asideService__above">
                            <div class="asideService__more">3&nbsp;года опыта работы с&nbsp;методикой</div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <section class="mainLines mainLines_service mainLines_js" data-midnight="gray">
			<?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/linesMain.svg';?>
		</section>
        <section class="sectionConsult sectionConsult_service sectionConsult_js" data-midnight="gray">
			<div class="sectionConsult__content container">
				<div class="bonusSystem__ground bonusSystem__ground_left">
					<img src="/dist/img/formTrees01.png" alt="">
				</div>
				<form class="sectionConsult__form">
					<div class="sectionConsult__title">Нужна консультация?</div>
					<div class="sectionConsult__description">
						Не&nbsp;знаете что выбрать, оставьте свой номер телефона: мы&nbsp;позвоним 
						и&nbsp;ответим на&nbsp;все интересующие вас вопросы
					</div>
                    <div class="sectionConsult__input">
						<div class="envelopeInput">
							<input class="envelopeInput__field" placeholder="Имя" type="text">
							<span class="envelopeInput__error">
								Введите Ваше имя
							</span>
						</div>
						<div class="envelopeInput">
							<input class="envelopeInput__field" placeholder="Телефон" type="text">
							<span class="envelopeInput__error">
								Неверный формат телефона
							</span>
						</div>
					</div>
					<div class="sectionConsult__send">
						<button class="sectionConsult__button btnPurple">Записаться</button>
						<div class="sectionConsult__privacy">
							Нажимая кнопку &laquo;Записаться&raquo;, вы&nbsp;соглашаетесь 
							с&nbsp;<a class="sectionConsult__policy" href="#">политикой&nbsp;конфиденциальности</a>
						</div>
					</div>
				</form>
				<div class="sectionConsult__practice hide">
					<div class="sectionConsult__year">15</div>
					<span>лет <br>профессионального <br>опыта</span>
				</div>
				<div class="bonusSystem__ground bonusSystem__ground_right">
					<img src="/dist/img/formTrees02.png" alt="">
				</div>
			</div>
			<div class="sectionConsult__doctor">
					<img src="/dist/img/doctor15.png">
				</div>
		</section>
        <section class="services serviceStage serviceStage_effect" data-midnight="gray">
            <div class="containerMin">
                <div class="serviceStage__title">Процедуры с похожим эффектом</div>
                    <div class="services__content">
                        <div class="servicesCard">
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
                        <div class="servicesCard">
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
                    </div>
                </div>
        </section>
        <section class="services services_cosmetic serviceStage" data-midnight="gray">
            <div class="containerMin">
                <div class="serviceStage__title">Для лучшего результата после процедуры <br>рекомендуем косметику</div>
                <div class="services__container">
                    <div class="cosmeticCard">
                        <div class="cosmeticCard__top">
                            <a href="" class="cosmeticCard__img" style="background-image:url(/dist/img/cosmeticCardImg-1.png)"></a>
                            <div class="cosmeticCard__title">
                                <a href="" class="cosmeticCard__name">Thalion Thalisvelt</a>
                            </div>
                        </div>
                        <div class="cosmeticCard__bottom">
                            <ul class="cosmeticCard__result">
                                <li class="cosmeticCard__effect">Крем против отеков</li>
                            </ul>
                            <div class="cosmeticCard__wrapper">
                                <div class="cosmeticCard__price">5 730 ₽</div>
                                <div class="cosmeticCard__basket">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/cosmeticCardBasket-i.svg';?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	</section>
    <svg class="clipPath" width="224" height="248" viewBox="0 0 224 248" fill="none" xmlns="http://www.w3.org/2000/svg">
        <clipPath id="stageImg">
            <path d="M76.5 231.349L36.7827 208.419C27.9813 203.337 21.443 199.561 16.497 196.016C11.5689 192.484 8.28742 189.226 5.97184 185.215C3.65624 181.205 2.47556 176.734 1.88079 170.7C1.28384 164.644 1.28272 157.094 1.28272 146.931L1.28273 101.069C1.28273 90.9062 1.28384 83.3558 1.8808 77.3C2.47557 71.2662 3.65625 66.7953 5.97185 62.7846C8.28743 58.7739 11.5689 55.516 16.497 51.984C21.443 48.4391 27.9813 44.663 36.7827 39.5814L76.5 16.6507C85.3015 11.5692 91.8409 7.79491 97.3838 5.28401C102.907 2.78218 107.369 1.56926 112 1.56926C116.631 1.56926 121.093 2.78219 126.616 5.28402C132.159 7.79491 138.699 11.5692 147.5 16.6507L187.217 39.5815C196.019 44.663 202.557 48.4392 207.503 51.984C212.431 55.516 215.713 58.7739 218.028 62.7847C220.344 66.7954 221.524 71.2662 222.119 77.3C222.716 83.3558 222.717 90.9062 222.717 101.069L222.717 146.931C222.717 157.094 222.716 164.644 222.119 170.7C221.524 176.734 220.344 181.205 218.028 185.215C215.713 189.226 212.431 192.484 207.503 196.016C202.557 199.561 196.019 203.337 187.217 208.419L147.5 231.349C138.699 236.431 132.159 240.205 126.616 242.716C121.093 245.218 116.631 246.431 112 246.431C107.369 246.431 102.907 245.218 97.3838 242.716C91.8409 240.205 85.3015 236.431 76.5 231.349Z" fill="white" stroke="#DBE9EF" stroke-width="2"/>
        </clipPath>
    </svg>
    <svg class="clipPath" width="364" height="332" viewBox="0 0 364 332" fill="none" xmlns="http://www.w3.org/2000/svg">
        <clipPath id="serviceEquipmenent">
            <path opacity="0.5" d="M26.074 106.25L52.292 60.8392C60.7498 46.1897 67.0758 35.234 73.025 26.9333C78.9678 18.6416 84.5126 13.0319 91.391 9.06066C98.2694 5.08938 105.9 3.09231 116.052 2.09158C126.215 1.08972 138.866 1.08917 155.782 1.08917L208.218 1.08916C225.134 1.08916 237.785 1.08971 247.948 2.09157C258.1 3.0923 265.731 5.08937 272.609 9.06066C279.487 13.0319 285.032 18.6416 290.975 26.9333C296.924 35.234 303.25 46.1897 311.708 60.8392L337.926 106.25C346.384 120.899 352.709 131.856 356.923 141.158C361.132 150.451 363.218 158.057 363.218 166C363.218 173.943 361.132 181.549 356.923 190.842C352.709 200.144 346.384 211.101 337.926 225.75L311.708 271.161C303.25 285.81 296.924 296.766 290.975 305.067C285.032 313.358 279.487 318.968 272.609 322.939C265.731 326.911 258.1 328.908 247.948 329.908C237.785 330.91 225.134 330.911 208.218 330.911L155.782 330.911C138.866 330.911 126.215 330.91 116.052 329.908C105.9 328.908 98.2694 326.911 91.391 322.939C84.5126 318.968 78.9678 313.358 73.025 305.067C67.0758 296.766 60.7499 285.81 52.292 271.161L26.074 225.75C17.6162 211.101 11.2912 200.144 7.07722 190.842C2.86776 181.549 0.782027 173.943 0.782027 166C0.782026 158.057 2.86776 150.451 7.07722 141.158C11.2912 131.856 17.6162 120.899 26.074 106.25Z" stroke="#8D9BB2"/>
        </clipPath>
    </svg>
</main>
<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>