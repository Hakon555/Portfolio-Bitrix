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

					<?$APPLICATION->IncludeComponent("bitrix:menu", "new_bottom_menu", Array(
						"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
						"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
						"DELAY" => "N",	// Откладывать выполнение шаблона меню
						"MAX_LEVEL" => "1",	// Уровень вложенности меню
						"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
						"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
						"MENU_CACHE_TYPE" => "N",	// Тип кеширования
						"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
						"ROOT_MENU_TYPE" => "newbottom",	// Тип меню для первого уровня
						"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
						"COMPONENT_TEMPLATE" => "new_bottom_menu"
					),
						false
					);?>

					<div class="block-5">
						<h3>SIGN UP</h3>
						<p class="su-validate-message-email">enter email correctly</p>
						<p class="su-validate-message-pass">enter password</p>
						<form name="sign-up" action="#" method="post">
							<input id="SUemail" type="text" name="email" placeholder="duecreation@gmail.com">
							<input id="SUpass" type="password" name="pass" placeholder="password">
							<input id="SUsub" type="button" value="Go!">
						</form>
					</div>
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