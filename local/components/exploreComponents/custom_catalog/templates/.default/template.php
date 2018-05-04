<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="products-col">
    <h2>PRODUCTS COLLECTIONS</h2>
    <p>Check out popular products in our shop!</p>

    <div class="products-menu">
        <p class="button-all chosen-prod-cat">ALL</p>
        <p class="button-mens">MENS</p>
        <p class="button-womens">WOMENS</p>
        <p class="button-kids">KIDS</p>
    </div>


    <div class="container-products-area">
        <div class="products-area products-area-all choosen-products-area">

            <?foreach($arResult as $arItem):?>

                <?$picture = CFile::ResizeImageGet($arItem["PICTURE_SRC"], array('width'=>265, 'height'=>200), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>

                <div class="products">
                    <div class="container_for_picture">
                        <img src="<?=$picture["src"]?>" alt="">
                    </div>
                    <a class="name" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
                    <p><?=$arItem["PREVIEW_TEXT"]?></p>
                    <p class="price"><?=$arItem["PRICE"]?></p>
                    <div class="ad-to-cart-button">
                        <p>ADD TO CART</p>
                    </div>
                </div>

            <?endforeach;?>
        </div>
    </div>

    <div class="more">
        <p>MORE</p>
    </div>
</div>


<script>
    const $ajPath = "<?=$componentPath?>/ajax.php";
    const $ibType = "<?=$arResult["0"]["IBLOCK_TYPE"];?>";
</script>


