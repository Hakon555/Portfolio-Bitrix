<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if($arResult["ERROR_MESSAGE"]){
	
	if(preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,6})+$/", $_POST['USER_LOGIN'])){
		$arResult["ERROR_MESSAGE"]["MESSAGE"] = GetMessage("LOGIN_ERROR");
	}else{
		$arResult["ERROR_MESSAGE"]["MESSAGE"] = GetMessage("LOGIN_PATTERN_ERROR");
	}
}
?>