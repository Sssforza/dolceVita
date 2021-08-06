<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Форум");
?><?$APPLICATION->IncludeComponent(
	"bitrix:forum",
	"",
	Array(
		"SEF_MODE" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"DATE_FORMAT" => "d.m.Y",
		"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
		"FID" => array(
			0 => 2, 1 => 3, 2 => 4
		),
		"SET_TITLE" => "Y",
		"SET_NAVIGATION" => "Y",
		"FORUMS_PER_PAGE" => "20",
		"TOPICS_PER_PAGE" => "20",
		"MESSAGES_PER_PAGE" => "25",

		"SHOW_FORUMS_LIST" => "Y",
		"SHOW_FORUM_ANOTHER_SITE" => "Y",
		"SEF_FOLDER" => "/communication/forum/",

		"SHOW_VOTE" => "Y",
		"VOTE_CHANNEL_ID" => "3",
		"VOTE_GROUP_ID" => array(
			0 => "5",
			1 => "1"),
		"VOTE_COUNT_QUESTIONS" => "10",
		"VOTE_COUNT_ANSWERS" => "20",
		"VOTE_TEMPLATE" => "light",
		"AJAX_POST" => "Y",
		"SHOW_RATING" => "Y",
		"RATING_TYPE" => "standart",
		"RATING_ID" => array("3","4"),
		"SEF_URL_TEMPLATES" => Array(
			"index" => "index.php",
			"list" => "forum#FID#/",
			"read" => "forum#FID#/#TITLE_SEO#",
			"help" => "help/",
			"message" => "messages/forum#FID#/message#MID#/#TITLE_SEO#",
			"message_appr" => "message/approve/forum#FID#/topic#TID#/",
			"message_move" => "message/move/forum#FID#/topic#TID#/message#MID#/",
			"pm_list" => "pm/forlder#FID#/",
			"pm_edit" => "pm/folder#FID#/message#MID#/user#UID#/#mode#/",
			"pm_read" => "pm/folder#FID#/message#MID#/",
			"pm_search" => "pm/search/",
			"pm_folder" => "pm/folders/",
			"search" => "search/",
			"subscr_list" => "subscribe/",
			"active" => "topic/new/",
			"topic_move" => "topic/move/forum#FID#/topic#TID#/",
			"topic_new" => "topic/add/forum#FID#/",
			"topic_search" => "topic/search/",
			"user_list" => "users/",
			"profile" => "user/#UID#/edit/",
			"profile_view" => "user/#UID#/",
			"user_post" => "user/#UID#/post/#mode#/",
			"message_send" => "user/#UID#/send/#TYPE#/"
		),
		"VARIABLE_ALIASES" => Array(
			"index" => Array(),
			"list" => Array(),
			"read" => Array(),
			"help" => Array(),
			"message_appr" => Array(),
			"message_move" => Array(),
			"pm_list" => Array(),
			"pm_edit" => Array(),
			"pm_read" => Array(),
			"pm_search" => Array(),
			"pm_folder" => Array(),
			"search" => Array(),
			"subscr_list" => Array(),
			"active" => Array(),
			"topic_move" => Array(),
			"topic_new" => Array(),
			"topic_search" => Array(),
			"user_list" => Array(),
			"profile" => Array(),
			"profile_view" => Array(),
			"user_post" => Array(),
			"message_send" => Array(),
		)
	)
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
