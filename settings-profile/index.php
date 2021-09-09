<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Настройки профиля");
?>

<?$APPLICATION->IncludeComponent(
	"vedita:setting.profile",
	"",
Array()
);?>
 

    <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>