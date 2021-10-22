<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<? if ($arResult) { ?>
	<nav class="footer__nav footerNav">
		<ul class="footerNav__list">
			<? foreach ($arResult as $key => $value) { ?>
				<li class="footerNav__li">
					<a class="footerNav__link" href="<?= $value["LINK"]?>"><?= $value["TEXT"]?></a>
				</li>
			<? } ?>
		</ul>
	</nav>
<? } ?>