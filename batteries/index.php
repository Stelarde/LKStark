<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?php
$arPropsToDisplay = [
    "ID",
    "UF_SPECOPS",
    "UF_SERIAL_NUM",
    "UF_NAME",
    "UF_TECH_TYPE", //вид техники
    "UF_ACTIVITY",
    "UF_CYCLES",
    "UF_RES_LEFT",
    "UF_DATE_UNTIL",
    "UF_EVENT",
];
$APPLICATION->SetTitle("ЛК список батарей");?><?$APPLICATION->IncludeComponent(
	"vedita:highloadblock.complex",
	"batteries",
	Array(
		"BLOCK_ID" => getHLBlockIDByName("Battaries"),
		"CHECK_PERMISSIONS" => "Y",
		"COMPONENT_TEMPLATE" => "batteries",
		"FILTER_NAME" => "arFilter",
		"PAGEN_ID" => "page",
		"ROWS_PER_PAGE" => "5",
		"ROW_KEY" => "ID",
		"SEF_FOLDER" => "/batteries/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => ["list"=>"","view"=>"#ID#/",],
		"SORT_FIELD" => "ID",
		"SORT_ORDER" => "ASC",
        "DISPLAY_PROPS" => $arPropsToDisplay,
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>