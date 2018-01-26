<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach($arResult['ITEMS'] as $item){?>
	<div class="news-line">
		<div class="news-line-prev-pic">
			<a href="<?=$item['DETAIL_PAGE_URL']?>">
				<img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="<?=$item['PREVIEW_PICTURE']['ALT']?>">
			</a>
		</div>
		<div class="news-line-prev-text">
			<a href="<?=$item['DETAIL_PAGE_URL']?>">
				<h2 class="news-h2"><?=$item['NAME']?></h2>
			</a>
			<p><?=$item['PREVIEW_TEXT']?></p>
			<span class="news-date"><?=$item['DISPLAY_ACTIVE_FROM']?></span>
		</div>
	</div>
<?}?>