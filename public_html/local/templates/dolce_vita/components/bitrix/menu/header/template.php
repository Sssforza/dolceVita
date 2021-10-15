<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<pre>
	<? //print_r($arResult)?>
</pre>

<?endif?>


<ul class="headerNavBottom__ul">
	<? foreach ($arResult as $key => $value) { ?>
		<li class="headerNavBottom__li">
			<? if ($value["SELECTED"] == 1) { ?>
				<span class="headerNavBottom__link <?= $value['PARAMS']['class'] ?? ''?>">
					<?= $value["TEXT"]?>
				</span>
			<? } else {?>
				<a class="headerNavBottom__link <?= $value['PARAMS']['class'] ?? ''?>" href="<?= $value["LINK"]?>"><?= $value["TEXT"]?></a>
			<? } ?>
	    </li>
	<? } ?>
</ul>