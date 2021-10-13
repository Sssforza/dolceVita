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

$strReturn .= '<div class="breadCrumbs"><ul class="breadCrumbs__list">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<li class="breadCrumbs__item">
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
