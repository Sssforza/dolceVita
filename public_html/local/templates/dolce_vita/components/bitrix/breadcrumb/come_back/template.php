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

$strReturn .= '<div class="comeBack__content container">';

$index = count($arResult)-2;
$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
$link = htmlspecialcharsex($arResult[$index]["LINK"]);

$strReturn .= '<a href="'.$link.'" class="comeBack__link">
    <svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 1L2 9l8 8" stroke="#A9C2C9" stroke-width="2" stroke-linecap="round"></path></svg>
    <div class="comeBack__page">'.$title.'</div>
</a>';

$strReturn .= '</div>';

return $strReturn;