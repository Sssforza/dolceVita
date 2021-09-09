<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");?><?$APPLICATION->IncludeComponent(
	"bitrix:search.page",
	"tags",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COLOR_NEW" => "000000",
		"COLOR_OLD" => "C8C8C8",
		"COLOR_TYPE" => "Y",
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"PAGE_RESULT_COUNT" => "10",
		"PATH_TO_USER_PROFILE" => "#SITE_DIR#people/user/#USER_ID#/",
		"PERIOD_NEW_TAGS" => "",
		"RESTART" => "N",
		"SHOW_CHAIN" => "Y",
		"SHOW_RATING" => "Y",
		"SHOW_WHERE" => "Y",
		"TAGS_INHERIT" => "Y",
		"TAGS_PAGE_ELEMENTS" => "20",
		"TAGS_PERIOD" => "",
		"TAGS_SORT" => "NAME",
		"TAGS_URL_SEARCH" => "",
		"WIDTH" => "100%",
		"arrFILTER" => array(0=>"no",),
		"arrWHERE" => array(0=>"forum",1=>"iblock_news",2=>"iblock_articles",3=>"iblock_books",4=>"blog",)
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:event_list",
	"",
	Array(
		"FILTER" => array("USERS","PAGE_EDIT","MENU_EDIT","FORUM"),
		"FORUM_MESSAGE_PATH" => "#SITE_ID#community/forum/messages/forum#FORUM_ID#/topic#TOPIC_ID#/message#MESSAGE_ID#/#message#MESSAGE_ID#",
		"FORUM_PATH" => "#SITE_ID#community/forum/forum#FORUM_ID#/",
		"FORUM_TOPIC_PATH" => "#SITE_ID#community/forum/forum#FORUM_ID#/topic#TOPIC_ID#/",
		"PAGE_NUM" => "10",
		"USER_PATH" => "#SITE_ID#company/personal/user/#user_id#/"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>