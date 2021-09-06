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
);?><?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "top",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>