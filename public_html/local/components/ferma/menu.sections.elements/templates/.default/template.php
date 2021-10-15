<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<pre>
	<? //print_r($arResult)?>
</pre>
<div class="headerServices headerServicesMenu_js">
    <div class="headerServices__content container">
        <div class="headerServices__close">
            <div class="headerServices__cross headerServicesClose_js">
                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/headerServicesCross-i.svg';?>
            </div>
            <div class="headerServices__cover headerServicesClose_js">Закрыть меню</div>
        </div>
        <div class="headerServices__box">
            <div class="servicesMain">
                <ul class="servicesMain__list">
                	<? $sec = true;?>
                	<? foreach ($arResult['IBLOCK'] as $key => $value) { ?>
                		<? if ($sec) {
                			$activ = $value["ID"];
                			$sec = false;
                		} ?>
                		<li class="servicesMain__item">
                    		<span class="servicesMain__link servicesMain_js <?= $key == 0 ? 'active': ''?>" data-services="<?= $value['ID']?>"><?= $value['NAME']?></span>
                		</li>
                	<? } ?>
                </ul>
            </div>
            <div class="servicesMiddle">
            	<? foreach ($arResult["ROOT"] as $key => $root) { ?>
            		<div class="servicesMiddle__content servicesMiddle_js <?= $key == $activ ? '': 'hidden'?>" data-servicesMiddle="<?= $key?>">
            			<? $tem = true;?>
            			<? foreach ($root as $keys => $value) { ?>
		                    <div class="servicesMiddle__item">
		                    	<? if ($arResult["SECTION"][$value['ID']]) { ?>
		                        	<div class="servicesMiddle__info"><?= $value['NAME']?></div>
			                        <ul class="servicesMiddle__list">
			                        	<? for ($i=0; $i < count($arResult["SECTION"][$value['ID']]) ; $i++) { ?>
			                        		<?if ($tem && $i == 0) {
			                        			$active = 'active';
			                        			if (!$section) {
			                        				$section = $arResult["SECTION"][$value['ID']][$i]["ID"];
			                        			}
			                        		} ?>
			                        		<li class="servicesMiddle__li">
				                                <span class="servicesMiddle__link servicesMiddleLink_js <?= $active?>" data-servicesMiddleDetail="<?= $arResult["SECTION"][$value['ID']][$i]["ID"]?>"><?= $arResult["SECTION"][$value['ID']][$i]["NAME"]?></span>
				                            </li>
				                            <? $active = '';?>
			                        	<? } ?>
			                        </ul>
			                    <? } else { ?>
			                    	<div class="servicesMiddle__info"></div>
			                    	<ul class="servicesMiddle__list">
			                            <li class="servicesMiddle__li">
			                                <a href="<?= $value['SECTION_PAGE_URL']?>" class="servicesMiddle__link servicesMiddleLink_js <?= ($tem) ? 'active': ''?>" data-servicesMiddleDetail="<?= $value['ID']?>"><?= $value['NAME']?></a>
			                            </li>
			                        </ul>
			                    <? } ?>
		                    </div>
		                    <? if ($tem) {
            					$tem = false;
            				} ?>
	                	<? } ?>
	                </div>
            	<? } ?>
            </div>
            <div class="servicesDetail">
            	<? foreach ($arResult["ELEMENTS"] as $key => $elements) { ?>
            		<div class="servicesDetail__content servicesDetail_js <?= $section != $key ? 'hidden':''?>" data-servicesDetail="<?= $key?>">
	                    <ul class="servicesDetail__list">
	                    	<? for ($i=0; $i < count($elements) ; $i++) { ?>
	                    		 <li class="servicesDetail__li">
		                            <a href="<?= $elements[$i]['DETAIL_PAGE_URL']?>" class="servicesDetail__link"><?= $elements[$i]["NAME"]?></a>
		                        </li>
	                    	<? } ?>
	                    </ul>
	                </div>
            	<? } ?>
            </div>
        </div>
    </div>
</div>
<?endif?>