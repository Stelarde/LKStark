<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ЛК список батарей");?>
<? $APPLICATION->IncludeComponent(
    "vedita:highloadblock.complex",
    "batteries",
    [
        "BLOCK_ID"           => getHLBlockIDByName("Battaries"),
        "CHECK_PERMISSIONS"  => "Y",
        "FILTER_NAME"        => "arFilter",
        "PAGEN_ID"           => "page",
        "ROWS_PER_PAGE"      => "5",
        "ROW_KEY"            => "ID",
        "SEF_FOLDER"         => "/batteries/",
        "SEF_MODE"           => "Y",
        "SORT_FIELD"         => "ID",
        "SORT_ORDER"         => "ASC",
        "COMPONENT_TEMPLATE" => "batteries",
        "SEF_URL_TEMPLATES"  => [
            "list" => "",
            "view" => "#ID#/",
        ],
    ],
    false
);

?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>