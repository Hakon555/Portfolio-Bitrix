<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Iblock;

class SliderNewItems extends CBitrixComponent{

    private function slider()
    {
        $rsIBlock = CIBlockElement::GetList(array(), array(
            "IBLOCK_TYPE" => $this->arParams["IBLOCK_TYPE"],
            "PROPERTY_NEWPRODUCT" => "1",
        ));

        for($i = 0; ($ob = $rsIBlock->GetNext()) && $i<9; $i++){

            $arPrice = CPrice::GetByID($ob["ID"]);

            $property = CIBlockElement::GetProperty(
                $ob["IBLOCK_ID"],
                $ob["ID"],
                "sort"
            );

            $arProp = [];

            while($pr = $property->Fetch()) {
                if($pr["CODE"] == "vote_count"){
                    $arProp["vote_count"] = $pr["VALUE"];
                }
                if($pr["CODE"] == "vote_sum"){
                    $arProp["vote_sum"] = $pr["VALUE"];
                }
                if($pr["CODE"] == "rating"){
                    $arProp["rating"] = $pr["VALUE"];
                }
            }

            $this->arResult[$i] = [
                "ID" => $ob["ID"],
                "NAME" => $ob["NAME"],
                "PICTURE_SRC" => CFile::GetPath($ob["DETAIL_PICTURE"]),
                "PRICE" => CurrencyFormat($arPrice["PRICE"], $arPrice["CURRENCY"]),
                "DETAIL_PAGE_URL" => $ob["DETAIL_PAGE_URL"],
                "PROPERTIES" => $arProp
            ];
        }

    }

    public function executeComponent(){
        $this->slider();
        $this->IncludeComponentTemplate();
        return $this->arResult;
    }
}
?>