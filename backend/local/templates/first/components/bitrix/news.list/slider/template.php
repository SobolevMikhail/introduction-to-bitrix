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
$APPLICATION->SetAdditionalCSS($templateFolder . "/css/slick.css");
$APPLICATION->SetAdditionalCSS($templateFolder . "/css/slick-theme.css");
$APPLICATION->AddHeadScript($templateFolder . "/js/jquery-1.11.0.min.js");
$APPLICATION->AddHeadScript($templateFolder . "/js/jquery-migrate-1.2.1.min.js");
$APPLICATION->AddHeadScript($templateFolder . "/js/slick.min.js");
$APPLICATION->AddHeadScript($templateFolder . "/js/script.js");
?>
<?if(!empty($arResult["ITEMS"])){?>
	<section>
		<div id="main-slider">
			<?foreach($arResult["ITEMS"] as $item){?>
				<div><img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$item["PREVIEW_PICTURE"]["ALT"]?>"></div>
			<?}?>
		</div>
	</section>
<?}?>
