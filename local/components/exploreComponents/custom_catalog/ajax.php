<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if(!CModule::IncludeModule('iblock'))die();

include_once "class.php";
include_once "DefaultTemplateCustomCatalog.php";
use custom_catalog\DefaultTemplateCustomCatalog;


switch ($_POST["sex"]) {
    case "a":
        echo DefaultTemplateCustomCatalog::getProductsArea(CustomCatalog::allItemsAjax(0, $_POST["ibType"], $_POST["quantity"]));
        break;
    case "m":
        echo DefaultTemplateCustomCatalog::getProductsArea(CustomCatalog::allItemsAjax(17, $_POST["ibType"], $_POST["quantity"]));
        break;
    case "w":
        echo DefaultTemplateCustomCatalog::getProductsArea(CustomCatalog::allItemsAjax(18, $_POST["ibType"], $_POST["quantity"]));
        break;
    case "k":
        echo DefaultTemplateCustomCatalog::getProductsArea(CustomCatalog::allItemsAjax(19, $_POST["ibType"], $_POST["quantity"]));
        break;
}
?>