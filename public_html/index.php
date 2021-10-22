<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetAdditionalCSS("/dist/css/blocks/index.css");
?>
<main class="main">
	
		<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"banner_home", 
	array(
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "18",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "DETAIL_TEXT",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "LINK",
			1 => "DESCRIPTION",
			2 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "arrPager",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "banner_home",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?>
		<section class="originalEquipment" data-midnight="gray">
			<div class="originalEquipment__content">
				<div class="originalEquipment__texts">
					<div class="originalEquipment__title">
						<? $APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file", 
								"PATH" => SITE_TEMPLATE_PATH."/include/home/original-equipment__title.php",
								"EDIT_TEMPLATE" => ""
							)
						);?>
					</div>
					<div class="originalEquipment__description">
						<? $APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file", 
								"PATH" => SITE_TEMPLATE_PATH."/include/home/original-equipment__description.php",
								"EDIT_TEMPLATE" => ""
							)
						);?>
					</div>
				</div>
				<div class="sliderEquipment sliderArrow">
					<div class="sliderEquipment__content sliderEquipment_js">
						<div class="sliderEquipment__item">
							<div class="sliderEquipment__texts">
								<a href="#" class="sliderEquipment__title">Ultherapy</a>
								<div class="sliderEquipment__description">
									Альтера-терапия (Ultherapy <sup class="reg">&reg;</sup>) &mdash; это единственная процедура 
									с&nbsp;технологией микро-сфокусированного ультразвука для лифтинга кожи, одобренная FDA 
									и&nbsp;разрешенная к&nbsp;применению в&nbsp;России, Западной Европе и&nbsp;США. 
									Безопасность Альтеры подкрепляется...
								</div>
								<div class="sliderEquipment__box">
									<a href="#" class="sliderEquipment__procedures procedures">
										<?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/sliderEquipmentVideo-i-play.svg';?>
										<span class="sliderEquipment__video">
											Видео <br>процедуры
										</span>
									</a>
									<a href="#" class="sliderEquipment__procedures apparatus">
										<?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/sliderEquipmentVideo-i-face.svg';?>
										<span class="sliderEquipment__video">
										Процедуры <br>на&nbsp;аппарате
										</span>
									</a>
								</div>
							</div>
							<div class="sliderEquipment__img">
								<img src="/dist/img/sliderEquipmentImg-1.png" alt="">
							</div>
							<div class="sliderEquipment__dop">
								<a href="/dist/img/trash/certificate.png" class="sliderEquipment__warranty sliderEquipWarranty popupImage_js">
									<?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/sliderEquipmentWarranty-i.svg';?>
									<div class="sliderEquipWarranty__title">Гарантия <br>подлинности</div>
									<div class="sliderEquipWarranty__link">Посмотреть <br>сертификат</div>
									<div class="sliderEquipWarranty__svg">
										<?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/sliderEquipWarrantyLink.svg';?>
									</div>
								</a>
								<div class="sliderEquipment__hexagon sliderEquipHexagon">
									<?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/sliderEquipHexagon.svg';?>
									<div class="sliderEquipHexagon__number">4</div>
									<div class="sliderEquipHexagon__text">
										самый большой опыт работы с&nbsp;методиками в&nbsp;городе
									</div>
								</div>
							</div>
						</div>
						<div class="sliderEquipment__item">
							<div class="sliderEquipment__texts">
								<a href="#" class="sliderEquipment__title">2Ultherapy</a>
								<div class="sliderEquipment__description">
									Альтера-терапия (Ultherapy <sup class="reg">&reg;</sup>) &mdash; это единственная процедура 
									с&nbsp;технологией микро-сфокусированного ультразвука для лифтинга кожи, одобренная FDA 
									и&nbsp;разрешенная к&nbsp;применению в&nbsp;России, Западной Европе и&nbsp;США. 
									Безопасность Альтеры подкрепляется...
								</div>
								<div class="sliderEquipment__box">
									<a href="#" class="sliderEquipment__procedures procedures">
										<?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/sliderEquipmentVideo-i-play.svg';?>
										<span class="sliderEquipment__video">
											Видео <br>процедуры
										</span>
									</a>
									<a href="#" class="sliderEquipment__procedures apparatus">
										<?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/sliderEquipmentVideo-i-face.svg';?>
										<span class="sliderEquipment__video">
										Процедуры <br>на&nbsp;аппарате
										</span>
									</a>
								</div>
							</div>
							<div class="sliderEquipment__img">
								<img src="/dist/img/sliderEquipmentImg-1.png" alt="">
							</div>
							<div class="sliderEquipment__dop">
								<a href="/dist/img/trash/certificate.png" class="sliderEquipment__warranty sliderEquipWarranty popupImage_js">
									<?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/sliderEquipmentWarranty-i.svg';?>
									<div class="sliderEquipWarranty__title">Гарантия <br>подлинности</div>
									<div class="sliderEquipWarranty__link">Посмотреть <br>сертификат</div>
									<div class="sliderEquipWarranty__svg">
										<?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/sliderEquipWarrantyLink.svg';?>
									</div>
								</a>
								<div class="sliderEquipment__hexagon sliderEquipHexagon">
									<?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/sliderEquipHexagon.svg';?>
									<div class="sliderEquipHexagon__number">4</div>
									<div class="sliderEquipHexagon__text">
										самый большой опыт работы с&nbsp;методиками в&nbsp;городе
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="mainLines mainLines_js" data-midnight="gray">
			<?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/linesMain.svg';?>
		</section>
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list", 
			"specialists_home", 
			array(
				"DISPLAY_DATE" => "N",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"AJAX_MODE" => "N",
				"IBLOCK_TYPE" => "specialists",
				"IBLOCK_ID" => "16",
				"NEWS_COUNT" => "",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_ORDER1" => "DESC",
				"SORT_BY2" => "SORT",
				"SORT_ORDER2" => "ASC",
				"FILTER_NAME" => "",
				"FIELD_CODE" => array(
					0 => "NAME",
					1 => "PREVIEW_TEXT",
					2 => "PREVIEW_PICTURE",
					3 => "DETAIL_TEXT",
					4 => "DETAIL_PICTURE",
					5 => "",
				),
				"PROPERTY_CODE" => array(
					0 => "EDUCATION",
					1 => "EXPERIENCE",
					2 => "QUALIFICATION",
					3 => "SPECIALIZATION",
					4 => "DESCRIPTION",
					5 => "",
				),
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "/about/#IBLOCK_CODE#/#ELEMENT_CODE#/",
				"PREVIEW_TRUNCATE_LEN" => "",
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"SET_TITLE" => "N",
				"SET_BROWSER_TITLE" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_LAST_MODIFIED" => "N",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "N",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"INCLUDE_SUBSECTIONS" => "N",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "3600",
				"CACHE_FILTER" => "Y",
				"CACHE_GROUPS" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"PAGER_TITLE" => "Новости",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => "",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"SET_STATUS_404" => "Y",
				"SHOW_404" => "Y",
				"MESSAGE_404" => "",
				"PAGER_BASE_LINK" => "",
				"PAGER_PARAMS_NAME" => "arrPager",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "N",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"COMPONENT_TEMPLATE" => "specialists_home",
				"STRICT_SECTION_CHECK" => "N",
				"FILE_404" => ""
			),
			false
		);?>
		<section class="bonusCard bonusCard_js" data-midnight="gray">
			<div class="bonusCard__content">
				<div class="container">
					<div class="bonusSystem">
						<div class="bonusSystem__ground bonusSystem__ground_left">
							<?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/systemGround-left.svg';?>
						</div>
						<div class="bonusSystem__content">
							<div class="bonusSystem__box">
								<div class="bonusSystem__title">
									<? $APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										Array(
											"AREA_FILE_SHOW" => "file", 
											"PATH" => SITE_TEMPLATE_PATH."/include/home/bonus-system__title.php",
											"EDIT_TEMPLATE" => ""
										)
									);?>
								</div>
								<div class="bonusSystem__description">
									<? $APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										Array(
											"AREA_FILE_SHOW" => "file", 
											"PATH" => SITE_TEMPLATE_PATH."/include/home/bonus-system__description.php",
											"EDIT_TEMPLATE" => ""
										)
									);?>
								</div>
							</div>
						</div>
						<div class="bonusSystem__ground bonusSystem__ground_right">
							<?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/systemGround-right.svg';?>
						</div>
					</div>
				</div>
				<div class="bonusCard__card">
					<img src="/dist/img/bonusSystemCard.png">
				</div>
				<div class="bonusCard__phone">
					<img src="/dist/img/bonusSystemPhone.png">
				</div>
				<div class="typesCards">
					<div class="typesCards__content containerMin">
						<? $APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file", 
								"PATH" => SITE_TEMPLATE_PATH."/include/home/cards-guest.php",
								"EDIT_TEMPLATE" => ""
							)
						);?>
						<? $APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file", 
								"PATH" => SITE_TEMPLATE_PATH."/include/home/cards-regular.php",
								"EDIT_TEMPLATE" => ""
							)
						);?>
					</div>
				</div>
			</div>
		</section>
		<section class="videoHistory" data-midnight="gray">
			<div class="videoHistory__container container">
				<video autoplay muted loop class="videoHistory__video">
					<source src="/dist/video/videoHistory.mp4" type="video/mp4">
				</video>
				<div class="videoHistory__content">
					<div class="videoHistory__title">Истории преображений</div>
					<div class="videoHistory__description">
						Истории реальных преображений инновационными методиками от ведущих специалистов клиники
					</div>
					<a href="#" class="videoHistory__btn btnPurple">Посмотреть</a>
				</div>
			</div>
		</section>
		<section class="reviews reviews_js" data-midnight="gray">
			<div class="reviews__bg"></div>
			<div class="reviews__svg">
				<?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/linesHeart.svg';?>
			</div>
			<div class="reviews__content containerMin">
				<div class="section">
					<div class="section__title">Отзывы клиентов</div>
				</div>
				<div class="reviews__list">
					<div class="reviews__item">
						<a href="#" class="reviews__people" style="background-image:url(/dist/img/reviewsItem1.png)"></a>
					</div>
					<div class="reviews__item">
						<a href="#" class="reviews__people" style="background-image:url(/dist/img/reviewsItem2.png)"></a>
					</div>
					<div class="reviews__item">
						<a href="#" class="reviews__people" style="background-image:url(/dist/img/reviewsItem3.png)"></a>
					</div>
					<div class="reviews__item">
						<a href="#" class="reviews__people" style="background-image:url(/dist/img/reviewsItem4.png)"></a>
					</div>
					<div class="reviews__item">
						<a href="#" class="reviews__people" style="background-image:url(/dist/img/reviewsItem5.png)"></a>
					</div>
					<div class="reviews__item">
						<a href="#" class="reviews__people" style="background-image:url(/dist/img/reviewsItem6.png)"></a>
					</div>
					<div class="reviews__item">
						<a href="#" class="reviews__people" style="background-image:url(/dist/img/reviewsItem7.png)"></a>
					</div>
					<div class="reviews__item">
						<a href="#" class="reviews__people" style="background-image:url(/dist/img/reviewsItem8.png)"></a>
					</div>
					<div class="reviews__item">
						<a href="#" class="reviews__people" style="background-image:url(/dist/img/reviewsItem9.png)"></a>
					</div>
					<div class="reviews__item">
						<a href="#" class="reviews__people" style="background-image:url(/dist/img/reviewsItem10.png)"></a>
					</div>
					<div class="reviews__item">
						<a href="#" class="reviews__people" style="background-image:url(/dist/img/reviewsItem11.png)"></a>
					</div>
					<div class="reviews__item">
						<a href="#" class="reviews__people" style="background-image:url(/dist/img/reviewsItem12.png)"></a>
					</div>
				</div>
			</div>
		</section>
		<section class="sectionConsult sectionConsult_js" data-midnight="gray">
			<div class="sectionConsult__content container">
				<div class="bonusSystem__ground bonusSystem__ground_left">
					<img src="/dist/img/formTrees01.png" alt="">
				</div>
				<form class="sectionConsult__form consultForm_js">
					<div class="sectionConsult__title">Нужна консультация?</div>
					<div class="sectionConsult__description">
						Не&nbsp;знаете что выбрать, оставьте свой номер телефона: мы&nbsp;позвоним
						и&nbsp;ответим на&nbsp;все интересующие вас вопросы
					</div>
					<div class="sectionConsult__input">
						<div class="envelopeInput">
							<input class="envelopeInput__field requiredField_js" placeholder="Имя" type="text">
							<span class="envelopeInput__error">
								Введите Ваше имя
							</span>
						</div>
						<div class="envelopeInput">
							<input class="envelopeInput__field maskPhone requiredField_js" placeholder="Телефон" type="text">
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
		<section class="usefulBlog usefulBlog_js" data-midnight="gray">
			<div class="usefulBlog__content containerMin">
				<div class="section">
					<div class="section__title">Полезный блог</div>
					<a href="#" class="section__all">Все статьи</a>
				</div>
				<div class="usefulBlog__list top">
					<div class="usefulBlog__item">
						<a href="#" class="usefulBlog__img usefulBlogHover_js" style="background-image:url(/dist/img/usefulBlogImg1.png)"></a>
						<div class="usefulBlog__date">25 марта 2021</div>
						<div class="usefulBlog__title">
							<a href="#" class="usefulBlog__link usefulBlogHover_js">
								Криолиполиз&nbsp;&mdash; что это такое?
								Преимущества и&nbsp;недостатки
								процедуры
							</a>
						</div>
					</div>
					<div class="usefulBlog__item">
						<a href="#" class="usefulBlog__img usefulBlogHover_js" style="background-image:url(/dist/img/usefulBlogImg2.png)"></a>
						<div class="usefulBlog__date">18 февраля 2021</div>
						<div class="usefulBlog__title">
							<a href="#" class="usefulBlog__link usefulBlogHover_js">
								Технология омоложения Fotona&nbsp;4D
							</a>
						</div>
					</div>
					<div class="usefulBlog__item">
						<a href="#" class="usefulBlog__img usefulBlogHover_js" style="background-image:url(/dist/img/usefulBlogImg3.png)"></a>
						<div class="usefulBlog__date">3 февраля 2021</div>
						<div class="usefulBlog__title">
							<a href="#" class="usefulBlog__link usefulBlogHover_js">
								Аппарат М-22 от&nbsp;Lumenis
								является последней новинкой
								от&nbsp;компании Lumenis, лидера...
							</a>
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