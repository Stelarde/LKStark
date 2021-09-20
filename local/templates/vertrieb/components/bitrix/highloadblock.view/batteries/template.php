<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!empty($arResult['ERROR']))
{
	ShowError($arResult['ERROR']);
	return false;
}

global $USER_FIELD_MANAGER;

foreach ($arResult["fields"] as $sFieldName => $arField)
{
    if ($sFieldName == "UF_NAME")
        $GLOBALS['APPLICATION']->SetTitle("Страница АКБ: " . $arField["VALUE"]);
}

//echo "<pre style='display:none'>".print_r($arResult, true)."</pre>";
//$GLOBALS['APPLICATION']->SetTitle('Highloadblock Row');

$listUrl = str_replace('#BLOCK_ID#', intval($arParams['BLOCK_ID']),	$arParams['LIST_URL']);
$APPLICATION->IncludeComponent(
   "vedita:batteries.info",
   "",
Array(
	'batteriesinfo' => $arResult["fields"],
	'row' => $arResult["row"]
)
);