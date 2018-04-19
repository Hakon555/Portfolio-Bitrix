<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
use Bitrix\Main\Page\Asset;
?>

<!doctype html>
<html>
	<head>
		<?$APPLICATION->ShowHead()?>
		<meta http-equiv="Content-type" content="text/html;" charset="utf-8">
		<title><?$APPLICATION->ShowTitle()?></title>
		<?$APPLICATION->SetAdditionalCSS("https://fonts.googleapis.com/css?family=Roboto:300,400,700");?>
		
		<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico"
		
		<!--JQuery-->
		<?Asset::getInstance()->addJs("https://code.jquery.com/jquery-3.3.1.min.js");?>
		
		<!--For tabs-->
		<?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/jquery/tabs/tabs.js");?>
		
		<!--For carousel-->
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/jquery/carousel/carouselengine/initcarousel-1.css");
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/jquery/carousel/carouselengine/amazingcarousel.js");
		//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/jquery/carousel/carouselengine/initcarousel-1.js");?>
		
		<!--For Form Validate-->
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/jquery/form_validate/form_validate.css");
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/jquery/form_validate/form_validate.js");?>

	</head>
	<body class="body-explore">
		<?$APPLICATION->ShowPanel();?>
		
		<div class="wrapper wrapper-explore">
			<header>
				<div class="first-line">
					<div class="div-logo"><a href="/"><img class="logo" src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="logo"></a></div>
					
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						"top_menu_catalog", 
						array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "left",
							"DELAY" => "N",
							"MAX_LEVEL" => "3",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "main",
							"USE_EXT" => "Y",
							"COMPONENT_TEMPLATE" => "top_menu_catalog"
						),
						false
					);?>
					
					<div class="cart">
						<a href="/cart/"><img src="<?=SITE_TEMPLATE_PATH?>/images/cart.png"></a>
						<a class="cart-to-buy" href="/cart/">3</a>
					</div>
					<div class="my-account">
						<p>My Account</p>
						<img src="<?=SITE_TEMPLATE_PATH?>/images/arrow.png">
					</div>
				</div>
				<div class="offer_on_image">
					<h2>Winter<br>Collection</h2>
					<p>Buy stylish products in our shop!</p>
					<div class="shop_now">
						<p>SHOP NOW</p>
						<img src="<?=SITE_TEMPLATE_PATH?>/images/shop_now.png">
					</div>
				</div>
			</header>