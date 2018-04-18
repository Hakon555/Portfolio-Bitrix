<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

			<footer>
				<div class="footer-blocks">
					<div class="block-1">
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"EDIT_TEMPLATE" => "",
								"PATH" => "/include/description.php"
							)
						);?>
					</div>
					<div class="block-2">
						<h3>HELP</h3>
						<a href="/">Newsletter</a>
						<a href="/">Blog</a>
						<a href="/">Get paid</a>
						<a href="/">Sign in</a>
						<a href="/">Sign up</a>
					</div>
					<div class="block-3">
						<h3>FOLLOW</h3>
						<a href="/">Twitter</a>
						<a href="/">Facebook</a>
						<a href="/">Instagram</a>
						<a href="/">Pinterest</a>
						<a href="/">Behance</a>
					</div>
					<div class="block-4">
						<h3>EXPLORE</h3>
						<a href="/">Features</a>
						<a href="/">Privacy</a>
						<a href="/">Features</a>
						<a href="/">Privacy</a>
						<a href="/">Privacy</a>
					</div>
                    <?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "ajax_auth", Array(
                        "FORGOT_PASSWORD_URL" => "",	// Страница забытого пароля
                        "PROFILE_URL" => "",	// Страница профиля
                        "REGISTER_URL" => "",	// Страница регистрации
                        "SHOW_ERRORS" => "Y",	// Показывать ошибки
                    ),
                        false
                    );?>
				</div>
				<hr>
				<div class="footer-images">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "",
							"PATH" => "/include/socnetworks.php"
						)
					);?>
				</div>
				<p class="copyright">&#169; Copyright 2015 explore All rights reserved</p>
			</footer>
		</div>
		
		<!--For carousel-->
		<script src="<?=SITE_TEMPLATE_PATH?>/jquery/carousel/carouselengine/initcarousel-1.js"></script>
	</body>
</html>