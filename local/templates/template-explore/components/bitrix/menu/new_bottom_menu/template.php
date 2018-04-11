<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?
/*echo $arResult[0]["PARAMS"]["NAME_SEC"];
echo "<pre>";
//var_dump($arResult);
print_r($arResult);
echo "</pre>";*/
?>

<?if (!empty($arResult)):?>

<?foreach($arResult as $arItem):?>

	<?if($arItem["PARAMS"]["NAME_SEC"]):?>
	
		<?if($arItem["PARAMS"]["BLOCK_CLASS"] != "block-2"):?>
			</div>
		<?endif?>

		<div class="<?=$arItem["PARAMS"]["BLOCK_CLASS"]?>">
			<h3><?=$arItem["PARAMS"]["NAME_SEC"]?></h3>
			<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
		
	<?else:?>
	
			<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
		
	<?endif?>
	
<?endforeach?>

	</div>

<?endif?>