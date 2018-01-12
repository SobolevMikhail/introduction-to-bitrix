<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)){?>
	<nav class="kl-block-100 klim-head-menu">
		<ul>
			<?foreach($arResult as $item){?>
				<li><a href="<?=$item["LINK"]?>"><?=$item["TEXT"]?></a></li>
			<?}?>
		</ul>
	</nav>
<?}?>