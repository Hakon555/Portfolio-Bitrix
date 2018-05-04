<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Explore");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("");
?>

	<?$APPLICATION->IncludeComponent(
		"exploreComponents:slider_new_items",
		".default",
		array(
			"COMPONENT_TEMPLATE" => ".default",
			"IBLOCK_TYPE" => "catalog"
		),
		false
	);?>

	<?$APPLICATION->IncludeComponent(
		"exploreComponents:custom_catalog",
		".default",
		array(
			"COMPONENT_TEMPLATE" => ".default",
			"IBLOCK_TYPE" => "catalog"
		),
		false
)	;?>

	<div class="newsletter">
		<h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
		<p>Only our latest news to send your email address</p>
		<p class="nl-validate-message">Please enter your email address correctly</p>
		<form name="newsletter" action="#" method="post">
			<input id="NLemail" type="text" name="email_newsletter" placeholder="Enter your email address">
			<input id="NLsub" type="button" value="Subscribe">
		</form>
	</div>
	<div class="blog">
		<h2>LATEST NEW'S</h2>
		<p>Read latest new's in our blog</p>
		<div class="blog_news">
			<div class="blog_news_left">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/left_img.jpg" alt="" width="385" height="350">
				<h3><a href="/">Top kamla of this year</a></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a href="/read_more/">READ MORE</a>
				<div class="be"></div>
			</div>
			<div class="blog_news_right_up">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/right_up.jpg" alt="" width="590" height="230">
				<h3><a href="/">Specialize in mobile and WEB</a></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<div class="ball"></div>
			</div>
			<div class="blog_news_right_down">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/right_down.jpg" alt="" width="590" height="190">
				<h3><a href="/">Best photo of this month!</a></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<div class="bird"></div>
			</div>
		</div>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>