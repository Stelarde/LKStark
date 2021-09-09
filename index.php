<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ЛК контроля ИБП Stark");?>
<?php
if ($_GET['logout'] === "yes") {    
    $USER->Logout();
    LocalRedirect('/');
}
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>