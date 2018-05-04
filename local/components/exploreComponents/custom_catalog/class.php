<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


class CustomCatalog extends CBitrixComponent{

    protected function allItems(){

        $rsIBlock = CIBlockElement::GetList(array(), array(
            "IBLOCK_TYPE" => $this->arParams["IBLOCK_TYPE"]
        ));

        for($i = 0; ($ob = $rsIBlock->GetNext()) && $i<6; $i++){

            $arPrice = CPrice::GetByID($ob["ID"]);

            $this->arResult[$i] = [
                "IBLOCK_TYPE" => $this->arParams["IBLOCK_TYPE"],
                "ID" => $ob["ID"],
                "NAME" => $ob["NAME"],
                "PICTURE_SRC" => $ob["DETAIL_PICTURE"],
                "PRICE" => CurrencyFormat($arPrice["PRICE"], $arPrice["CURRENCY"]),
                "DETAIL_PAGE_URL" => $ob["DETAIL_PAGE_URL"],
                "PREVIEW_TEXT" => $ob["PREVIEW_TEXT"]
            ];
        }
    }

    public static function allItemsAjax($sex, $ibType, $quantity){

        $arResult = [];
        if($sex == 0){
            $rsIBlock = CIBlockElement::GetList(array(), array(
                "IBLOCK_TYPE" => $ibType
            ));
        }else{
            $rsIBlock = CIBlockElement::GetList(array(), array(
                "IBLOCK_TYPE" => $ibType,
                "PROPERTY_SEX" => $sex
            ));
        }

        for($i = 0; ($ob = $rsIBlock->GetNext()) && $i<$quantity; $i++){

            $arPrice = CPrice::GetByID($ob["ID"]);

            $picture = CFile::ResizeImageGet($ob["DETAIL_PICTURE"], array('width'=>265, 'height'=>200), BX_RESIZE_IMAGE_PROPORTIONAL, true);

            $arResult[$i] = [
                "IBLOCK_TYPE" => $ibType,
                "ID" => $ob["ID"],
                "NAME" => $ob["NAME"],
                "PICTURE_SRC" => $picture["src"],
                "PRICE" => CurrencyFormat($arPrice["PRICE"], $arPrice["CURRENCY"]),
                "DETAIL_PAGE_URL" => $ob["DETAIL_PAGE_URL"],
                "PREVIEW_TEXT" => $ob["PREVIEW_TEXT"]
            ];
        }

        return $arResult;
    }

    public function executeComponent(){
        $this->allItems();
        $this->IncludeComponentTemplate();
        return $this->arResult;
    }
}
?>