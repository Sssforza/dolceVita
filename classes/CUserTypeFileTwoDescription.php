<?
use Bitrix\Main;
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock;

class CUserTypeFileTwoDescription
{
	/**
     * Метод возвращает массив описания собственного типа свойств
     * @return array
     */
    public function GetUserTypeDescription()
    {
        return array(
            'USER_TYPE_ID' => 'user_file_two_desc', //Уникальный идентификатор типа свойств
            'USER_TYPE' => 'FILETWODESC',
            'CLASS_NAME' => __CLASS__,
            'DESCRIPTION' => 'Файл с двумя описаниями',
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
    	$return = false;
    	if (!empty($value['VALUE']['IMG_LINE'])) {
    		if (isset($value['VALUE']['IMG_LINE']['tmp_name']) && !file_exists($value['VALUE']['IMG_LINE']['tmp_name'])) {
    			$tmpFilesDir = \CTempFile::GetAbsoluteRoot();
    			$tmp_name = $tmpFilesDir.$value['VALUE']['IMG_LINE']['tmp_name'];
    		} else {
    			$tmp_name = $value['VALUE']['IMG_LINE']['tmp_name'];
    		}
    		$arr_file=Array(
				"name" => $value['VALUE']['IMG_LINE']['name'],
				"size" => $value['VALUE']['IMG_LINE']['size'],
				"tmp_name" => $tmp_name,
				"type" => $value['VALUE']['IMG_LINE']['type'],
				"old_file" => "",
				"del" => "Y",
				"MODULE_ID" => ""
			);
			$fid = CFile::SaveFile($arr_file, "iblock");
				$resalt['VALUE']['IMG_LINE'] = intval($fid);
    	} else {
    		$resalt['VALUE']['IMG_LINE'] = '';
    	}
    	$resalt['VALUE']['VALUE_LINE'] = $value['VALUE']['VALUE_LINE'];
        if ($resalt['VALUE']['VALUE_LINE']!='' || $resalt['VALUE']['IMG_LINE'])
        {

            try {
                $return['VALUE'] = serialize($resalt['VALUE']);
            } catch(Bitrix\Main\ObjectException $exception) {
                echo $exception->getMessage();
            }
        }
        if( is_array($value) && array_key_exists("DESCRIPTION", $value) )
            $return["DESCRIPTION"] = $value["DESCRIPTION"];

        return $return;
    }


    public static function ConvertFromDB($arProperty, $value, $format = '')
    {
        $return = false;
         
        if(!is_array($value["VALUE"]))
        {
            $return = array(
                "VALUE" => unserialize($value["VALUE"]),
                "DESCRIPTION" => $value["DESCRIPTION"]
            );
        }
         
        return $return;
    }

    /**
     * Представление формы редактирования значения
     * @param $arUserField
     * @param $arHtmlControl
     */
    public static function GetPropertyFieldHtml($arProperty, $value, $arHtmlControl)
    {
        $itemId = 'row_' . substr(md5($arHtmlControl['VALUE']), 0, 10);
        $fieldName =  htmlspecialcharsbx($arHtmlControl['VALUE']);
        //htmlspecialcharsback нужен для того, чтобы избавиться от многобайтовых символов из-за которых не работает unserialize()
        $arValue['VALUE_LINE'] = htmlspecialcharsback($value['VALUE']['VALUE_LINE']);
        $arValue['IMG_LINE'] = htmlspecialcharsback($value['VALUE']['IMG_LINE']);

        $valueLine = ($arValue['VALUE_LINE']) ? $arValue['VALUE_LINE'] : '';
        $imgLine = ($arValue['IMG_LINE']) ? $arValue['IMG_LINE'] : '';

        $html .='</br>&nbsp;Значение: &nbsp&nbsp &nbsp;<input type="text" name="'.$arHtmlControl["DESCRIPTION"].'" size="'.$arProperty['COL_COUNT'].'" value="'.htmlspecialcharsex($value["DESCRIPTION"]) . '"></br></br>';
        $html .='&nbsp;Описанаие: &nbsp;<textarea name="'. $fieldName.'[VALUE_LINE]" cols="'.$arProperty['COL_COUNT'].'" rows="'.$arProperty['ROW_COUNT'].'">'.$valueLine.'</textarea></br></br>';
        	$arFile = CFile::MakeFileArray($imgLine);
        	$html .= \Bitrix\Main\UI\FileInput::createInstance(array("name" => $fieldName.'[IMG_LINE]',"description" => false,"upload" => true,"allowUpload" => "I",
                     "medialib" => true,
                     "fileDialog" => true,
                     "cloud" => true,
                     "delete" => true,
                     "maxCount" => 2
                  ))->show($arFile);

        return $html;
    }
}
?>