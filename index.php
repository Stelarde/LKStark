<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ЛК контроля ИБП Stark");?>
<?php
if (isDealer())
    LocalRedirect("/clients/");
else
    LocalRedirect("/obozrevatel-obektov/");

?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>