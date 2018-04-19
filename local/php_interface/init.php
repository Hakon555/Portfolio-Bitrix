<?
AddEventHandler("main", "OnBeforeUserLogin", Array("EmailAuth", "changeLoginToEmail"));

/**
 * Class for authorization using Email address
 * Class EmailAuth
 */
class EmailAuth{
	/**
	 * Function change entered user's email to login of that user in array $arFields
	 * @param $arFields	Array for changing
	 */
	public function changeLoginToEmail($arFields){

		$filter = Array("EMAIL" => $arFields["LOGIN"]);
		$userFromBD = CUser::GetList($by="LAST_NAME", $order="asc", $filter);

		if($user = $userFromBD->GetNext())
			$arFields["LOGIN"] = $user["LOGIN"];
	}
}
?>