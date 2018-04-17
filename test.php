<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?>

 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.top", 
	"slider_new_items", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"COMPATIBLE_MODE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"CUSTOM_FILTER" => "",
		"DETAIL_URL" => "",
		"DISPLAY_COMPARE" => "N",
		"ELEMENT_COUNT" => "9",
		"ELEMENT_SORT_FIELD" => "timestamp_x",
		"ELEMENT_SORT_FIELD2" => "",
		"ELEMENT_SORT_ORDER" => "desc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "",
		"HIDE_NOT_AVAILABLE" => "Y",
		"HIDE_NOT_AVAILABLE_OFFERS" => "Y",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "catalog",
		"LABEL_PROP" => array(
			0 => "NEWPRODUCT",
		),
		"LINE_ELEMENT_COUNT" => "3",
		"MESS_BTN_ADD_TO_BASKET" => "�������� � �������",
		"MESS_BTN_BUY" => "������",
		"MESS_BTN_COMPARE" => "��������",
		"MESS_BTN_DETAIL" => "���������",
		"MESS_NOT_AVAILABLE" => "��� � �������",
		"OFFERS_CART_PROPERTIES" => array(
		),
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_LIMIT" => "9",
		"OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_ORDER2" => "desc",
		"OFFER_ADD_PICT_PROP" => "-",
		"OFFER_TREE_PROPS" => "",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons,compare",
		"PRODUCT_DISPLAY_MODE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE_MOBILE" => array(
		),
		"ROTATE_TIMER" => "30",
		"SECTION_URL" => "",
		"SEF_MODE" => "Y",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PAGINATION" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "N",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"VIEW_MODE" => "SECTION",
		"COMPONENT_TEMPLATE" => "slider_new_items",
		"LABEL_PROP_MOBILE" => array(
		),
		"LABEL_PROP_POSITION" => "top-left",
		"SEF_RULE" => ""
	),
	false
);?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>