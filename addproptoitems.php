<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("addproptoitems");
?>

<?
    if(!CModule::IncludeModule('iblock'))die();

    $rsIBlock = CIBlockElement::GetList(array(), array(
    "IBLOCK_TYPE" => "catalog"
    ));

    while($ob = $rsIBlock->GetNext()) {

        $property = CIBlockElement::GetProperty(
            $ob["IBLOCK_ID"],
            $ob["ID"],
            "sort"
        );

        $el = new CIBlockElement;
        $el->Update($ob["ID"], ["PREVIEW_TEXT" => "Valo lagla kinen na kinla poth mapen"]);

        while ($pr = $property->Fetch()) {
            if ($pr["CODE"] == "SEX") {
                $arProp = mt_rand (17, 19);
                CIBlockElement::SetPropertyValues($ob["ID"], $ob["IBLOCK_ID"], $arProp, $pr["CODE"]);
                echo "For item: \"" . $ob["NAME"] . "\" set property: " . $arProp . "<br>";
            }
        }
    }
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>