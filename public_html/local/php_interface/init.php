<?php

define('PROJECT_ROOT', realpath($_SERVER['DOCUMENT_ROOT'] . '/..'));

require_once PROJECT_ROOT . '/vendor/autoload.php';

//Вешаем обработчик на событие создания списка пользовательских свойств OnUserTypeBuildList
AddEventHandler('iblock', 'OnIBlockPropertyBuildList', ['CUserTypeDoubleLine', 'GetUserTypeDescription']);

//Вешаем обработчик на событие создания списка пользовательских свойств OnUserTypeBuildList
AddEventHandler('iblock', 'OnIBlockPropertyBuildList', ['CUserTypeLinkSectionsDesc', 'GetUserTypeDescription']);

//Вешаем обработчик на событие создания списка пользовательских свойств OnUserTypeBuildList
AddEventHandler('iblock', 'OnIBlockPropertyBuildList', ['CUserTypeFileTwoDescription', 'GetUserTypeDescription']);