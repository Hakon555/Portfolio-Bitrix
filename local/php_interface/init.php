<?
AddEventHandler("main", "OnBeforeUserLogin", Array("CUserEx", "OnBeforeUserLogin"));
AddEventHandler("main", "OnBeforeUserRegister", Array("CUserEx", "OnBeforeUserRegister"));
AddEventHandler("main", "OnBeforeUserRegister", Array("CUserEx", "OnBeforeUserUpdate"));
class CUserEx
{
   function OnBeforeUserLogin($arFields)
   {
      $filter = Array("EMAIL" => $arFields["LOGIN"]);
      $rsUsers = CUser::GetList(($by="LAST_NAME"), ($order="asc"), $filter);
      if($user = $rsUsers->GetNext())
         $arFields["LOGIN"] = $user["LOGIN"];
      else $arFields["LOGIN"] = "";
   }
   function OnBeforeUserRegister($arFields)
   {
      $arFields["LOGIN"] = $arFields["EMAIL"];
   }
}
?>