<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

	<div class="offer_on_image">
		<!--<h2>Winter<br>Collection</h2>-->
		<h2><?=$arResult["ITEMS"][0]["NAME"];?></h2>
		<p><?=$arResult["ITEMS"][0]["PREVIEW_TEXT"];?></p>
		<div class="shop_now">
			<p>SHOP NOW</p>
			<img src="<?=SITE_TEMPLATE_PATH?>/images/shop_now.png">
		</div>
	</div>

	<script>
		const $header_background = $("div.wrapper-explore header");
		$header_background.css("background", "url(<?=$arResult["ITEMS"][0]["PREVIEW_PICTURE"]["SRC"]?>)");

		const $button_detail = $("div.shop_now");
		$button_detail.on("click", ()=>{
			location.href = "<?=$arResult["ITEMS"][0]["DETAIL_PAGE_URL"]?>";
		});
	</script>