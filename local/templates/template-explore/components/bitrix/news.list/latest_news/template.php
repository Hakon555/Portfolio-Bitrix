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

<div class="blog">
	<h2>LATEST NEW'S</h2>
	<p>Read latest new's in our blog</p>
	<div class="blog_news">

	<?$block = 1;?>
	<?foreach($arResult["ITEMS"] as $arItem):?>

		<?switch($block):?>
<?case 1:?>

		<?$picture = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>385, 'height'=>350), BX_RESIZE_IMAGE_EXACT, false);?>

		<div class="blog_news_left">
			<div class="container_for_picture">
				<img src="<?=$picture["src"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
			</div>
			<h3><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h3>
			<p><?=$arItem["PREVIEW_TEXT"];?></p>
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">READ MORE</a>
		</div>
		<?break;?>
<?case 2:?>

		<?$picture = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>590, 'height'=>230), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>

		<div class="blog_news_right_up">
			<div class="container_for_picture">
				<img src="<?=$picture["src"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
			</div>
			<h3><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h3>
			<p><?=$arItem["PREVIEW_TEXT"];?></p>
		</div>
		<?break;?>
<?case 3:?>

		<?$picture = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>590, 'height'=>190), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>

		<div class="blog_news_right_down">
			<div class="container_for_picture">
				<img src="<?=$picture["src"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
			</div>
			<h3><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h3>
			<p><?=$arItem["PREVIEW_TEXT"];?></p>
		</div>
		<?break;?>
		<?endswitch;?>

		<?$block++;?>
	<?endforeach;?>

	</div>
</div>
