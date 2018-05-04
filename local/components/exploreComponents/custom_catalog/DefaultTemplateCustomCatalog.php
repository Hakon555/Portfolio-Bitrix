<?
namespace custom_catalog;

class DefaultTemplateCustomCatalog
{
    public static function getProductsArea($arResult){

        $htmlFromAjax = "<div class='products-area choosen-products-area'>";

        foreach($arResult as $arItem){

            $htmlFromAjax .= "
            <div class='products'>

                <div class='container_for_picture'>
                    <img src='$arItem[PICTURE_SRC]' alt=''>
                </div>

                <a class='name' href='$arItem[DETAIL_PAGE_URL]'>$arItem[NAME]</a>
                <p>$arItem[PREVIEW_TEXT]</p>
                <p class='price'>$arItem[PRICE]</p>

                <div class='ad-to-cart-button'>
                    <p>ADD TO CART</p>
                </div>
            </div>

            ";

        }

        $htmlFromAjax .= "</div>";

        return $htmlFromAjax;
    }
}
