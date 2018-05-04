<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * Class HeaderBanner is a component
 */
class HeaderBanner extends CBitrixComponent{

    /**
     * Private function v_1.0
     */
    private function banner()
    {
        $rsIBlock = CIBlockElement::GetList(array(), array(
            "ACTIVE" => "Y",
            "IBLOCK_TYPE" => $this->arParams["IBLOCK_TYPE"]
        ));

        $this->arResult = $rsIBlock->GetNext();
        $srcPic = CFile::GetPath($this->arResult["PREVIEW_PICTURE"]);
        $this->arResult["BANNER_PICTURE"] = $srcPic;
    }

    /**
     * Override executeComponent() for the Banner component
     * @return array
     */
    public function executeComponent(){
        $this->banner();
        $this->IncludeComponentTemplate();
        return $this->arResult;
    }
}
?>