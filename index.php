<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ЛК контроля ИБП Stark");?>
<?php

global $USER;
$arGroups = $USER->GetUserGroupArray();
if (in_array(DEALER_GROUP, $arGroups))
    LocalRedirect("/clients/");
else
    LocalRedirect("/obozrevatel-obektov/");

?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>