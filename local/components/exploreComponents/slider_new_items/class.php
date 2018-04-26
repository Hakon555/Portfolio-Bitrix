<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * Class for component, which show new items in slider
 * Class SliderNewItems
 */
class SliderNewItems extends CBitrixComponent{

    /**
     * Function slider() select 9 new items from iblock
     */
    protected function slider()
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
                "IBLOCK_TYPE" => $this->arParams["IBLOCK_TYPE"],
                "ID" => $ob["ID"],
                "NAME" => $ob["NAME"],
                "PICTURE_SRC" => $ob["DETAIL_PICTURE"],
                "PRICE" => CurrencyFormat($arPrice["PRICE"], $arPrice["CURRENCY"]),
                "DETAIL_PAGE_URL" => $ob["DETAIL_PAGE_URL"],
                "PROPERTIES" => $arProp
            ];
        }

    }

    /**
     * Override
     * @return array
     */
    public function executeComponent(){
        $this->slider();
        $this->IncludeComponentTemplate();
        return $this->arResult;
    }
}
?>