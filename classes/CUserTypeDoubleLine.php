<?
use Bitrix\Main;
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock;


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
?>