<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";
$strReturn = '';

$arResult = array_unique($arResult, SORT_REGULAR);

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()

$strReturn .= '<div class="breadCrumbs gray"><ul class="breadCrumbs__list">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$first = '';
		if ($arResult[$index]["LINK"] == '/') {
			$title = 'На главную';
			$first = '<svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="color" d="M4.62 8.77L.336 4.486 4.62.202l.672.7-3.08 3.08h8.204V4.99H2.212l3.08 3.094-.672.686z" fill="#DBE9EF"></path></svg>';
		}
		$strReturn .= '
			<li class="breadCrumbs__item">'
				.$first.'
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item" class="breadCrumbs__chit">
					'.$title.'
				</a>
			</li>';
	}
	else
	{
		$strReturn .= '
			<li class="breadCrumbs__item">
				<span class="breadCrumbs__chit">'.$title.'</span>
			</li>';
	}
}

$strReturn .= '</ul></div>';

return $strReturn;
