<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if(!CModule::IncludeModule('iblock'))die();

$rsIBlock = CIBlockElement::GetList(array(), array(
    "IBLOCK_TYPE" => $_POST['ib_type'],
    "PROPERTY_NEWPRODUCT" => "1",
    "ID" => $_POST['item_id']
));

$ob = $rsIBlock->GetNext();

$property = CIBlockElement::GetProperty(
    $ob["IBLOCK_ID"],
    $ob["ID"],
    "sort"
);

while($pr = $property->Fetch()) {
    if($pr["CODE"] == "vote_count"){
        $arProp["vote_count"] = $pr["VALUE"] + 1;
    }
    if($pr["CODE"] == "vote_sum"){
        $arProp["vote_sum"] = $pr["VALUE"] + $_POST['rating'];
    }
    if($pr["CODE"] == "rating"){
        $arProp["rating"] = $arProp["vote_sum"]/$arProp["vote_count"];
    }
}

CIBlockElement::SetPropertyValueCode($_POST['item_id'], "vote_count", $arProp["vote_count"]);
CIBlockElement::SetPropertyValueCode($_POST['item_id'], "vote_sum", $arProp["vote_sum"]);
CIBlockElement::SetPropertyValueCode($_POST['item_id'], "rating", $arProp["rating"]);
?>