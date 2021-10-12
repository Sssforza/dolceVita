<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->SetAdditionalCSS("/dist/css/blocks/services.css", true);
?>
<?$APPLICATION->IncludeComponent(
	"ferma:news", 
	".default", 
	array(
		"DEPTH_LEVEL" => "3",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "N",
		"CATEGORY_CODE" => "CATEGORY",
		"CATEGORY_IBLOCK" => array(
			0 => "12",
		),
		"CATEGORY_ITEMS_COUNT" => "5",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "XML_ID",
			3 => "NAME",
			4 => "TAGS",
			5 => "SORT",
			6 => "PREVIEW_TEXT",
			7 => "PREVIEW_PICTURE",
			8 => "DETAIL_TEXT",
			9 => "DETAIL_PICTURE",
			10 => "DATE_ACTIVE_FROM",
			11 => "ACTIVE_FROM",
			12 => "DATE_ACTIVE_TO",
			13 => "ACTIVE_TO",
			14 => "SHOW_COUNTER",
			15 => "SHOW_COUNTER_START",
			16 => "IBLOCK_TYPE_ID",
			17 => "IBLOCK_ID",
			18 => "IBLOCK_CODE",
			19 => "IBLOCK_NAME",
			20 => "IBLOCK_EXTERNAL_ID",
			21 => "DATE_CREATE",
			22 => "CREATED_BY",
			23 => "CREATED_USER_NAME",
			24 => "TIMESTAMP_X",
			25 => "MODIFIED_BY",
			26 => "USER_NAME",
			27 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "DURATION_PROCEDURE",
			1 => "BEFORE_AND_AFTER",
			2 => "WQUIPMENT",
			3 => "TOTAL_COST",
			4 => "NUMBER_PROCEDURES",
			5 => "EQUIPMENT",
			6 => "REVIEWS",
			7 => "INDICATIONS",
			8 => "ADVANTAGE_ONE",
			9 => "ADVANTAGE_TWO",
			10 => "ADVANTAGE_THREE",
			11 => "PROGRAMS",
			12 => "CONTRAINDICATIONS",
			13 => "RESULTAT",
			14 => "SPECIALISTS",
			15 => "SERVICES",
			16 => "STAGE",
			17 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "Y",
		"DISPLAY_AS_RATING" => "rating",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"FILE_404" => "",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"FORUM_ID" => "1",
		"GROUP_PERMISSIONS" => array(
			0 => "1",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "services",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "XML_ID",
			3 => "NAME",
			4 => "TAGS",
			5 => "SORT",
			6 => "PREVIEW_TEXT",
			7 => "PREVIEW_PICTURE",
			8 => "DETAIL_TEXT",
			9 => "DETAIL_PICTURE",
			10 => "DATE_ACTIVE_FROM",
			11 => "ACTIVE_FROM",
			12 => "DATE_ACTIVE_TO",
			13 => "ACTIVE_TO",
			14 => "SHOW_COUNTER",
			15 => "SHOW_COUNTER_START",
			16 => "IBLOCK_TYPE_ID",
			17 => "IBLOCK_ID",
			18 => "IBLOCK_CODE",
			19 => "IBLOCK_NAME",
			20 => "IBLOCK_EXTERNAL_ID",
			21 => "DATE_CREATE",
			22 => "CREATED_BY",
			23 => "CREATED_USER_NAME",
			24 => "TIMESTAMP_X",
			25 => "MODIFIED_BY",
			26 => "USER_NAME",
			27 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"MAX_VOTE" => "5",
		"MESSAGES_PER_PAGE" => "10",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"NUM_DAYS" => "30",
		"NUM_NEWS" => "20",
		"PAGER_BASE_LINK" => "",
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_PARAMS_NAME" => "arrPager",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Косметология",
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
		"POST_FIRST_MESSAGE" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"REVIEW_AJAX_POST" => "Y",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHARE_HANDLERS" => array(
			0 => "delicious",
			1 => "facebook",
			2 => "lj",
			3 => "twitter",
		),
		"SHARE_HIDE" => "Y",
		"SHARE_SHORTEN_URL_KEY" => "",
		"SHARE_SHORTEN_URL_LOGIN" => "",
		"SHARE_TEMPLATE" => "",
		"SHOW_404" => "Y",
		"SHOW_LINK_TO_FORUM" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "Y",
		"URL_TEMPLATES_READ" => "",
		"USE_CAPTCHA" => "Y",
		"USE_CATEGORIES" => "Y",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "Y",
		"VOTE_NAMES" => array(
			0 => "0",
			1 => "1",
			2 => "2",
			3 => "3",
			4 => "4",
			5 => "",
		),
		"YANDEX" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"CATEGORY_THEME_12" => "list",
		"CATEGORY_THEME_13" => "list",
		"CATEGORY_THEME_14" => "list",
		"CATEGORY_THEME_15" => "list",
		"SEF_FOLDER" => "/services/cosmetology/",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"detail" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
		)
	),
	false
);?><?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>