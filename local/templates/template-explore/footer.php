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
						<?$APPLICATION->IncludeComponent("bitrix:menu", "new_bottom_menu", Array(
							"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
							"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
							"DELAY" => "N",	// Откладывать выполнение шаблона меню
							"MAX_LEVEL" => "1",	// Уровень вложенности меню
							"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
							"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
							"MENU_CACHE_TYPE" => "N",	// Тип кеширования
							"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
							"ROOT_MENU_TYPE" => "bottomHelp",	// Тип меню для первого уровня
							"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
							"COMPONENT_TEMPLATE" => "new_bottom_menu"
						),
							false
						);?>
					</div>
					<div class="block-3">
						<h3>FOLLOW</h3>
						<?$APPLICATION->IncludeComponent("bitrix:menu", "new_bottom_menu", Array(
							"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
							"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
							"DELAY" => "N",	// Откладывать выполнение шаблона меню
							"MAX_LEVEL" => "1",	// Уровень вложенности меню
							"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
							"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
							"MENU_CACHE_TYPE" => "N",	// Тип кеширования
							"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
							"ROOT_MENU_TYPE" => "bottomFollow",	// Тип меню для первого уровня
							"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
							"COMPONENT_TEMPLATE" => "new_bottom_menu"
						),
							false
						);?>
					</div>
					<div class="block-4">
						<h3>EXPLORE</h3>
						<?$APPLICATION->IncludeComponent("bitrix:menu", "new_bottom_menu", Array(
							"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
							"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
							"DELAY" => "N",	// Откладывать выполнение шаблона меню
							"MAX_LEVEL" => "1",	// Уровень вложенности меню
							"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
							"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
							"MENU_CACHE_TYPE" => "N",	// Тип кеширования
							"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
							"ROOT_MENU_TYPE" => "bottomExplore",	// Тип меню для первого уровня
							"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
							"COMPONENT_TEMPLATE" => "new_bottom_menu"
						),
							false
						);?>
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