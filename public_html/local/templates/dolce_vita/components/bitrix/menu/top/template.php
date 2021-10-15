<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<!-- <pre>
	<? //print_r($arResult)?>
</pre> -->

<?endif?>

<ul class="headerNavTop__ul">
	<? foreach ($arResult as $key => $value) { ?>
		<li class="headerNavTop__li">
			<? if ($value["SELECTED"] == 1) { ?>
				<div class="headerNavTop__link <?= $value['PARAMS']['class'] ?? ''?>">
		            <?= $value["TEXT"]?>
		        </div>
			<? } else {?>
				<a class="headerNavTop__link <?= $value['PARAMS']['class'] ?? ''?>" href="<?= $value["LINK"]?>"><?= $value["TEXT"]?></a>
			<? } ?>
	    </li>
	<? } ?>
</ul>