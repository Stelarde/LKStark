<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
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
		"SORT_ORDER" => "ASC"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>