<?php

use Bitrix\Main;
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock;

//Вешаем обработчик на событие создания списка пользовательских свойств OnUserTypeBuildList
AddEventHandler('iblock', 'OnIBlockPropertyBuildList', ['CUserTypeDoubleLine', 'GetUserTypeDescription']);

//Вешаем обработчик на событие создания списка пользовательских свойств OnUserTypeBuildList
AddEventHandler('iblock', 'OnIBlockPropertyBuildList', ['CUserTypeLinkSectionsDesc', 'GetUserTypeDescription']);

class CUserTypeLinkSectionsDesc
{
    /**
     * Метод возвращает массив описания собственного типа свойств
     * @return array
     */
    public function GetUserTypeDescription()
    {
        return array(
            'USER_TYPE_ID' => 'user_link_sections', //Уникальный идентификатор типа свойств
            'USER_TYPE' => 'LINKDESC',
            'CLASS_NAME' => __CLASS__,
            'DESCRIPTION' => 'Привязка к элементам с названием',
            'PROPERTY_TYPE' => E,
            'ConvertToDB' => [__CLASS__, 'ConvertToDB'],
            'ConvertFromDB' => [__CLASS__, 'ConvertFromDB'],
            'GetPropertyFieldHtml' => [__CLASS__, 'GetPropertyFieldHtml'],
            'GetPublicViewHtml' => [__CLASS__, 'GetPublicViewHtml'],
        );
    }

    /**
     * Конвертация данных перед сохранением в БД
     * @param $arProperty
     * @param $value
     * @return mixed
     */
    public static function ConvertToDB($arProperty, $value)
    {
        $return = false;
         
        if( is_array($value) && array_key_exists("VALUE", $value) )
        {
            $return = array(
                "VALUE" => serialize($value["VALUE"])
            );
        }
         
		// сериализацию убирать не стал, если понадобится сохранять несколько значений
        if( is_array($value) && array_key_exists("DESCRIPTION", $value) )
            $return["DESCRIPTION"] = $value["DESCRIPTION"];
         
        return $return; 
    }

    /**
     * Конвертируем данные при извлечении из БД
     * @param $arProperty
     * @param $value
     * @param string $format
     * @return mixed
     */
    public static function ConvertFromDB($arProperty, $value, $format = '')
    {
        $return = false;
         
        if(!is_array($value["VALUE"]))
        {
            $return = array(
                "VALUE" => unserialize($value["VALUE"])
            );
        }
         
        return $return;
    }

    public static function GetPublicViewHtml($arProperty, $value, $strHTMLControlName)
    {
    	echo '<pre>';
    	print_r($value);
    	echo '</pre>';
    	return '';
    }

    /**
     * Представление формы редактирования значения
     * @param $arUserField
     * @param $arHtmlControl
     */
    public static function GetPropertyFieldHtml($arProperty, $value, $arHtmlControl)
    {
    	echo '<pre>';
    	//print_r($value);
    	echo '</pre>';
    	$value["DESCRIPTION"] = $value["DESCRIPTION"];
         
        // значения по умолчанию
        $arItem = Array(
            "ID" => 0,
            "IBLOCK_ID" => 0,
            "NAME" => ""
        );
         
        // получение информации по выбранному элементу
        if(intval($value["VALUE"]) > 0)
        {
            $arFilter = Array(
                "ID" => intval($value["VALUE"]),
                "IBLOCK_ID" => $arProperty["LINK_IBLOCK_ID"],
            );
 
            $arItem = \CIBlockElement::GetList(Array(), $arFilter, false, false, Array("ID", "IBLOCK_ID", "NAME"))->Fetch();
        }
         
        // сама строка с товаром и доп.значениями
        $html = '</br>Название:<input type="text" id="quan" size="30" name="'.$arHtmlControl["DESCRIPTION"].'" value="'.htmlspecialcharsex($value["DESCRIPTION"]).'"></br>';
        $html .= 'Элемент: <input name="'.$arHtmlControl["VALUE"].'" id="'.$arHtmlControl["VALUE"].'" value="'.htmlspecialcharsex($value["VALUE"]).'" size="5" type="text">';
        $html .= ' <span id="sp_'.md5($arHtmlControl["VALUE"]).'">'.$arItem["NAME"].'</span>   ';
        $html .= '<input type="button" value="Выбрать" onclick="jsUtils.OpenWindow(\'/bitrix/admin/iblock_element_search.php?lang='.LANG.'&IBLOCK_ID='.$arProperty["LINK_IBLOCK_ID"].'&n='.$arHtmlControl["VALUE"].' \', 600, 500);"=""></br>';
 
        return  $html;
    }
}
class CUserTypeDoubleLine
{
    /**
     * Метод возвращает массив описания собственного типа свойств
     * @return array
     */
    public function GetUserTypeDescription()
    {
        return array(
            'USER_TYPE_ID' => 'user_DoubleLine', //Уникальный идентификатор типа свойств
            'USER_TYPE' => 'DOUBLELINE',
            'CLASS_NAME' => __CLASS__,
            'DESCRIPTION' => '2 Строки(название, описание)',
            'PROPERTY_TYPE' => Iblock\PropertyTable::TYPE_STRING,
            'ConvertToDB' => [__CLASS__, 'ConvertToDB'],
            'ConvertFromDB' => [__CLASS__, 'ConvertFromDB'],
            'GetPropertyFieldHtml' => [__CLASS__, 'GetPropertyFieldHtml'],
            'GetPublicViewHtml' => [__CLASS__, 'GetPublicViewHtml'],
        );
    }

    /**
     * Конвертация данных перед сохранением в БД
     * @param $arProperty
     * @param $value
     * @return mixed
     */
    public static function ConvertToDB($arProperty, $value)
    {
        if ($value['VALUE']['VALUE_LINE']!='' || $value['VALUE']['TITLE_LINE']!='')
        {
            try {
                $value['VALUE'] = base64_encode(serialize($value['VALUE']));
            } catch(Bitrix\Main\ObjectException $exception) {
                echo $exception->getMessage();
            }
        } else {
            $value['VALUE'] = '';
        }

        return $value;
    }

    /**
     * Конвертируем данные при извлечении из БД
     * @param $arProperty
     * @param $value
     * @param string $format
     * @return mixed
     */
    public static function ConvertFromDB($arProperty, $value, $format = '')
    {
        if ($value['VALUE'] != '')
        {
            try {
                $value['VALUE'] = unserialize(base64_decode($value['VALUE']), [stdClass::class]);
            } catch(Bitrix\Main\ObjectException $exception) {
                echo $exception->getMessage();
            }
        }

        return $value;
    }

    public static function GetPublicViewHtml($arProperty, $value, $strHTMLControlName)
    {
    	$arValue = unserialize(htmlspecialcharsback($value['VALUE']), [stdClass::class]);
    	return $arValue;
    }

    /**
     * Представление формы редактирования значения
     * @param $arUserField
     * @param $arHtmlControl
     */
    public static function GetPropertyFieldHtml($arProperty, $value, $arHtmlControl)
    {
    	echo '<pre>';
    	//print_r($arProperty);
    	echo '</pre>';
        $itemId = 'row_' . substr(md5($arHtmlControl['VALUE']), 0, 10); //ID для js
        $fieldName =  htmlspecialcharsbx($arHtmlControl['VALUE']);
        //htmlspecialcharsback нужен для того, чтобы избавиться от многобайтовых символов из-за которых не работает unserialize()
        $arValue['TITLE_LINE'] = htmlspecialcharsback($value['VALUE']['TITLE_LINE']);
        $arValue['VALUE_LINE'] = htmlspecialcharsback($value['VALUE']['VALUE_LINE']);

        //$html = '</br><div class="property_row" id="'. $itemId .'">';

        //$html .= '<div class="reception_time">';
        $titleLine = ($arValue['TITLE_LINE']) ? $arValue['TITLE_LINE'] : '';
        $valueLine = ($arValue['VALUE_LINE']) ? $arValue['VALUE_LINE'] : '';

        $html .='</br>&nbsp;Значение: &nbsp&nbsp &nbsp;<input type="text" name="'. $fieldName.'[TITLE_LINE]" size="'.$arProperty['COL_COUNT'].'" value="'. $titleLine . '"></br></br>';
        $html .='&nbsp;Описанаие: &nbsp;<textarea name="'. $fieldName.'[VALUE_LINE]" cols="'.$arProperty['COL_COUNT'].'" rows="'.$arProperty['ROW_COUNT'].'">'.$valueLine.'</textarea></br></br>';
        if($titleLine!='' && $valueLine!=''){
        //    $html .= '&nbsp;&nbsp;<input type="button" style="height: auto;" value="x" title="Удалить" onclick="document.getElementById(\''. $itemId .'\').parentNode.parentNode.remove()" />';
        }
        //$html .= '</div>';

        //$html .= '</div></br>';

        return $html;
    }
}