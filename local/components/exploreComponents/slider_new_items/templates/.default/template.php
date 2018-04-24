<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
echo "<pre>";
print_r($arResult);
echo "</pre>";
?>

<div class="featured-items">
    <h2>FEATURED ITEMS</h2>
    <p>Let's see featured items!</p>

    <div class="amazingcarousel-container-1">
        <div id="amazingcarousel-1">
            <div class="amazingcarousel-list-container">
                <ul class="amazingcarousel-list">
                    <?foreach($arResult as $arItem):?>

                        <li class="amazingcarousel-item">
                            <div class="items">
                                <img src="<?=$arItem["PICTURE_SRC"]?>" width="265" height="235" alt="">
                                <a class="name" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
                                <img class="stars" src="<?=SITE_TEMPLATE_PATH?>/images/star.png">
                                <img class="stars" src="<?=SITE_TEMPLATE_PATH?>/images/star.png">
                                <img class="stars" src="<?=SITE_TEMPLATE_PATH?>/images/star.png">
                                <img class="stars" src="<?=SITE_TEMPLATE_PATH?>/images/star.png">
                                <img class="stars" src="<?=SITE_TEMPLATE_PATH?>/images/star.png">
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
