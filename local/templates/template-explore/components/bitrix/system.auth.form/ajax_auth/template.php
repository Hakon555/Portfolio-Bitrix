<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CJSCore::Init();
?>

<?
if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
	ShowMessage($arResult['ERROR_MESSAGE']);
?>

<?if($arResult["FORM_TYPE"] == "login"):?>

	<div class="block-5">
		<h3>SIGN UP</h3>
		<p class="su-validate-message-email">enter email correctly</p>
		<p class="su-validate-message-pass">enter password</p>

		<form id="SUform" name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">

			<?if($arResult["BACKURL"] <> ''):?>
				<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
			<?endif?>

			<?foreach ($arResult["POST"] as $key => $value):?>
				<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
			<?endforeach?>

			<input type="hidden" name="AUTH_FORM" value="Y" />
			<input type="hidden" name="TYPE" value="AUTH" />


			<input id="SUemail" type="text" name="USER_LOGIN" placeholder="<?=GetMessage("AUTH_EMAIL")?>">
			<input id="SUpass" type="password" name="USER_PASSWORD" placeholder="<?=GetMessage("AUTH_PASSWORD")?>">
			<input id="SUsub" class="SUsub-button" name="Login" type="submit" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>">

		</form>
	</div>

<?else:?>

	<div class="block-5">

		<h3>SIGN UP</h3>

		<form action="<?=$arResult["AUTH_URL"]?>">

			<?=$arResult["USER_NAME"]?>
			<?=$arResult["USER_LOGIN"]?>

			<?foreach ($arResult["GET"] as $key => $value):?>
			<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
			<?endforeach?>

			<input type="hidden" name="logout" value="yes" />
			<input class="SUsub-button" type="submit" name="logout_butt" value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>" />

		</form>

	</div>

<?endif?>