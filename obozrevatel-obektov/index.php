<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обозреватель объектов");


?>
    <div class="main-internal">
        <main class="main">
  
            <?$APPLICATION->IncludeComponent(
    	        "bitrix:menu",
    	        "top",
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
            );?>
        

            <!-- Таблица объектов -->
            <? $APPLICATION->IncludeComponent(
                "vedita:highloadblock.complex",
                "objectbrowser",
                [
                    "BLOCK_ID"           => getHLBlockIDByName("ObjectBrowser"),
                    "CHECK_PERMISSIONS"  => "Y",
                    "FILTER_NAME"        => "arFilter",
                    "PAGEN_ID"           => "page",
                    "ROWS_PER_PAGE"      => "5",
                    "ROW_KEY"            => "ID",
                    "SEF_FOLDER"         => "/obozrevatel-obektov/",
                    "SEF_MODE"           => "Y",
                    "SORT_FIELD"         => "ID",
                    "SORT_ORDER"         => "ASC",
                    "COMPONENT_TEMPLATE" => "objectbrowser",
                    "SEF_URL_TEMPLATES"  => [
                        "list" => "",
                        "view" => "#ID#/",
                    ],
                ],
                false
            );
            ?>
        </div>
    </div>
</main>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>