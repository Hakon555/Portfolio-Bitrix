<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="featured-items">
    <h2>FEATURED ITEMS</h2>
    <p>Let's see featured items!</p>

    <div class="amazingcarousel-container-1">
        <div id="amazingcarousel-1">
            <div class="amazingcarousel-list-container">
                <ul class="amazingcarousel-list">
                    <?foreach($arResult as $arItem):?>

                        <?$picture = CFile::ResizeImageGet($arItem["PICTURE_SRC"], array('width'=>265, 'height'=>235), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>

                        <li class="amazingcarousel-item">
                            <div class="items">

                                <div class="container_for_picture">
                                    <img src="<?=$picture["src"]?>" width="<?=$picture["width"]?>" height="<?=$picture["height"]?>" alt="">
                                </div>
                                <a class="name" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>

                                <?$countStars = 0;
                                for($i = $arItem["PROPERTIES"]["rating"]; $i>0; $i--):?>
                                    <?$countStars++?>
                                    <img class="stars <?="star-".$countStars."_".$arItem["ID"]?>" src="<?=SITE_TEMPLATE_PATH?>/images/star.png">
                                <?endfor;?>
                                <?for($i = 5 - ceil($arItem["PROPERTIES"]["rating"]); $i>0; $i--):?>
                                    <?$countStars++?>
                                    <img class="stars <?="star-".$countStars."_".$arItem["ID"]?>" src="<?=SITE_TEMPLATE_PATH?>/images/empty_star.png">
                                <?endfor;?>

                                <p class="price"><?=$arItem["PRICE"]?></p>
                            </div>

                        </li>

                    <?endforeach?>
                </ul>

            </div>

            <div class="amazingcarousel-nav"></div>
        </div>
    </div>
</div>

<script>
    const $srcChoicePic = "<?=SITE_TEMPLATE_PATH?>/images/choice_star.png";
    const $ajaxPath = "<?=$componentPath?>/ajax.php";
    const $ibType = "<?=$arResult["0"]["IBLOCK_TYPE"];?>";
</script>