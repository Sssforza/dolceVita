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
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<?endforeach;?>
<main class="main">
    <section class="comeBack comeBack_banerSection">
        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb","come_back",Array(
                "START_FROM" => "0",
                "PATH" => "",
                "SITE_ID" => "s1",
            )
        );?>
    </section>
	<section class="page page_team">
        <section class="banerSection">
            <div class="banerSection__sheet banerSection__sheet_left"></div>
            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array(
                            "START_FROM" => "0",
                            "PATH" => "",
                            "SITE_ID" => "s1"
                        )
                    );?>
            <div class="banerSection__content">
                <div class="banerSection__title">Команда Dolce Vita</div>
                <div class="banerSection__description">
                    <?= $arResult["DESCRIPTION"]?>
                </div>
            </div>
            <div class="banerSection__sheet banerSection__sheet_right"></div>
        </section>
        <section class="team team_js" data-midnight="gray">
            <div class="team__content containerMin">
                <div class="teamList">
                    <div class="teamList__content">
                    	<? if ($arResult["TABS"]) { ?>
                    		<div class="teamList__item teamItem_js active" data-choice="all">Все специалисты</div>
	                    	<? foreach ($arResult["TABS"] as $key => $value) { ?>
	                    		<div class="teamList__item teamItem_js" data-choice="<?= $key;?>"><?= $value?></div>
	                    	<? } ?>
                    	<? } ?>
                    </div>
                </div>
                <div class="teamPeople">
                    <div class="teamPeople__list teamPeopleList_js show" data-specificity="all">
                    	<? foreach ($arResult["ITEMS"] as $key => $value) { ?>
                    		<div class="teamPeople__item">
	                            <a href="<?= $value['DETAIL_PAGE_URL']?>" class="teamPeople__person teamPeopleLink_js">
	                                <div class="teamPeople__bg">
	                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
	                                </div>
	                                <div class="teamPeople__human">
	                                    <img src="<?= $value['PREVIEW_RESIZE']['src']?>">
	                                </div>
	                            </a>
	                            <div class="teamPeople__name">
	                                <a href="<?= $value['DETAIL_PAGE_URL']?>" class="teamPeople__link teamPeopleLink_js"><?= $value['NAME']?></a>
	                            </div>
	                            <div class="teamPeople__doctor"><?= implode(", ", $value["PROPERTIES"]["SPECIALIZATION"]["VALUE"])?></div>
	                        </div>
                    	<? } ?>
                    </div>
                    <? foreach ($arResult["TABS"] as $key => $value) { ?>
                    	 <div class="teamPeople__list teamPeopleList_js hide" data-specificity="<?= $key?>">
                    	 	<? for ($e=0; $e < count($arResult["ITEMS"]) ; $e++) { ?>
                    	 		<? if (in_array($key, $arResult["ITEMS"][$e]["PROPERTIES"]["SPECIALIZATION"]["VALUE_ENUM_ID"])) { ?>
                    	 			<div class="teamPeople__item">
			                            <a href="<?= $arResult['ITEMS'][$e]['DETAIL_PAGE_URL']?>" class="teamPeople__person teamPeopleLink_js">
			                                <div class="teamPeople__bg">
			                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/teamPeopleBg.svg';?>
			                                </div>
			                                <div class="teamPeople__human">
			                                    <img src="<?= $arResult['ITEMS'][$e]['PREVIEW_RESIZE']['src']?>">
			                                </div>
			                            </a>
			                            <div class="teamPeople__name">
			                                <a href="<?= $arResult['ITEMS'][$e]['DETAIL_PAGE_URL']?>" class="teamPeople__link teamPeopleLink_js"><?= $arResult['ITEMS'][$e]['NAME']?></a>
			                            </div>
			                            <div class="teamPeople__doctor"><?= implode(", ", $arResult['ITEMS'][$e]["PROPERTIES"]["SPECIALIZATION"]["VALUE"])?></div>
			                        </div>
                    	 		<? } ?>
                    	 	<? } ?>
	                    </div>
                    <? } ?>
                </div>
            </div>
        </section>
	</section>
</main>