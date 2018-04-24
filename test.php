<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
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


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>