<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<!doctype html>
<html>
	<head>
		<?$APPLICATION->ShowHead()?>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title><?$APPLICATION->ShowTitle()?></title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
		
		<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico"
		
		<!--For carousel-->
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/jquery/carousel/carouselengine/initcarousel-1.css">	
		
		<!--For Form Validate-->
		<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/jquery/form_validate/form_validate.css">
	</head>
	<body class="body-explore">
		<?$APPLICATION->ShowPanel();?>
		
		<div class="wrapper wrapper-explore">
			<header>
				<div class="first-line">
					<div class="div-logo"><a href="/"><img class="logo" src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="logo"></a></div>
					<div class="top-menu">
						<ul>
							<li><a href="/home/">Home</a></li>
							<li><a href="/mens/">Mens</a></li>
							<li><a href="/womens/">Womens</a></li>
							<li><a href="/kids/">Kids</a></li>
							<li><a href="/blog/">Blog</a></li>
						</ul>
					</div>
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