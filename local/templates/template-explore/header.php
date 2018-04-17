<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
use Bitrix\Main\Page\Asset;
?>

<!doctype html>
<html>
	<head>
		<?$APPLICATION->ShowHead()?>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
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
				<?$APPLICATION->IncludeComponent("bitrix:news.list", "header_banner", Array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
					"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
					"AJAX_MODE" => "N",	// Включить режим AJAX
					"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
					"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
					"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
					"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
					"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
					"CACHE_GROUPS" => "Y",	// Учитывать права доступа
					"CACHE_TIME" => "3600",	// Время кеширования (сек.)
					"CACHE_TYPE" => "A",	// Тип кеширования
					"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
					"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
					"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
					"DISPLAY_DATE" => "N",	// Выводить дату элемента
					"DISPLAY_NAME" => "Y",	// Выводить название элемента
					"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
					"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
					"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
					"FIELD_CODE" => array(	// Поля
						0 => "",
						1 => "",
					),
					"FILTER_NAME" => "",	// Фильтр
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
					"IBLOCK_ID" => "4",	// Код информационного блока
					"IBLOCK_TYPE" => "banner",	// Тип информационного блока (используется только для проверки)
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
					"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
					"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
					"NEWS_COUNT" => "1",	// Количество новостей на странице
					"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
					"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "3600",	// Время кеширования страниц для обратной навигации
					"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
					"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
					"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
					"PAGER_TITLE" => "",	// Название категорий
					"PARENT_SECTION" => "",	// ID раздела
					"PARENT_SECTION_CODE" => "",	// Код раздела
					"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
					"PROPERTY_CODE" => array(	// Свойства
						0 => "",
						1 => "",
					),
					"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
					"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
					"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
					"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
					"SET_STATUS_404" => "N",	// Устанавливать статус 404
					"SET_TITLE" => "N",	// Устанавливать заголовок страницы
					"SHOW_404" => "N",	// Показ специальной страницы
					"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
					"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
					"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
					"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
					"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
				),
					false
				);?>
			</header>