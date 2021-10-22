<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<!-- <pre>
	<? //print_r($arResult)?>
</pre> -->
<? if ($arResult["ITEMS"]) { ?>
<section class="specialists specialists_js" data-midnight="gray">
    <div class="specialists__bg"></div>
    <div class="specialists__content container">
        <div class="specialists__container">
            <div class="specialists__header">
                <div class="specialists__title">Наши специалисты</div>
                <div class="specialists__link">
                    <a href="/about/specialists/" class="specialists__all">Все специалисты</a>
                </div>
                <div class="specialists__state">
                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialistsHexagon.svg';?>
                    <div class="specialists__number">20</div>
                    <div class="specialists__text">
                        профессиональных косметологов в&nbsp;штате компании
                    </div>
                </div>
            </div>
            <div class="specialists__box">
                <div class="specialists__nav specialistsNav scrollbar">
                    <div class="specialistsNav__content specialistsNavScroll_js scrollbarCustom">
                        <? foreach ($arResult["ITEMS"] as $key => $item) { ?>
                            <div class="specialistsNav__item <?= $key == 0 ? 'active' : ''?>" data-slide="<?= $key +1?>">
                                <div class="specialistsNav__img">
                                    <? $renderNav = CFile::ResizeImageGet($item['DETAIL_PICTURE']['ID'], array('width'=>80, 'height'=>80), BX_RESIZE_IMAGE_EXACT, true);?>
                                    <div class="specialistsNav__bg" style="background-image:url(<?= $renderNav['src']?>)"></div>
                                </div>
                                <div class="specialistsNav__wrapper">
                                    <div class="specialistsNav__name"><?= $item["NAME"]?></div>
                                    <div class="specialistsNav__hakeem"><?= implode(', ', $item["PROPERTIES"]["SPECIALIZATION"]["VALUE"])?></div>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                </div>
                <div class="specialists__for specialistsFor">
                    <div class="specialistsFor__content specialistsFor_js">
                        <? foreach ($arResult["ITEMS"] as $key => $value) { ?>
                            <div class="specialistsFor__item">
                                <div class="specialistsFor__description">
                                    <div class="specialistsFor__wrapper">
                                        <div class="specialistsFor__name"><?= $value["NAME"]?></div>
                                        <div class="specialistsFor__block">
                                            <ul class="specialistsFor__ul">
                                                <li class="specialistsFor__specialization">Специализация</li>
                                                <li class="specialistsFor__medic"><?= implode(', ', $value["PROPERTIES"]["SPECIALIZATION"]["VALUE"])?></li>
                                            </ul>
                                            <ul class="specialistsFor__ul">
                                                <li class="specialistsFor__specialization">Профессиональный опыт</li>
                                                <li class="specialistsFor__medic"><?= $value["PROPERTIES"]["EXPERIENCE"]["VALUE"]?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="specialistsFor__link">
                                        <a href="<?= $value['DETAIL_PAGE_URL']?>" class="specialistsFor__a">
                                            <span>Подробнее</span>
                                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/specialistsForLink-array.svg';?>
                                        </a>
                                    </div>
                                </div>
                                <div class="specialistsFor__img">
                                    <? $renderImg = CFile::ResizeImageGet($value['PREVIEW_PICTURE']['ID'], array('width'=> 423, 'height' => 585), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                                    <img src="<?= $renderImg['src']?>">
                                </div>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<? } ?>