<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обозреватель объектов");


?>

<main class="main">
    <div class="main-internal">
        <div id="submenu" class="submenu">
        <div class="submenu-block">
            <nav>
                <ul class="submenu-list grid-dashboard grid-column-gap-30">
                    <li class="submenu-item">
                        <a href="#">
                            <span class="submenu-item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#submenu-home-icon"></use>
                                </svg>
                            </span>
                            <span>Главная</span>
                        </a>
                    </li>
                    <li class="submenu-item active">
                        <a href="#">
                            <span class="submenu-item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#submenu-support-icon"></use>
                                </svg>
                            </span>
                            <span>Служба поддержки</span>
                        </a>
                    </li>
                    <li class="submenu-item">
                        <a href="#">
                            <span class="submenu-item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#submenu-history-icon"></use>
                                </svg>
                            </span>
                            <span>История эксплуатации</span>
                        </a>
                    </li>
                    <li class="submenu-item">
                        <a href="#">
                            <span class="submenu-item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#submenu-report-icon"></use>
                                </svg>
                            </span>
                            <span>Скачать отчёт в PDF</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

        <h1>Обозреватель объектов</h1>

        <div class="grid-dashboard grid-column-12 grid-row-gap-30">
            <div class="grid-item fill">
                <a data-fancybox data-type="ajax" data-src="<?=SITE_TEMPLATE_PATH?>/popups/popup-add-object.html" href="javascript:;"  class="btn-secondary popup-link">Добавить объект</a> 
            </div>
            <div class="grid-item fill grid-dashboard grid-row-gap-15 subtitle-block">
                <div class="grid-item grid-dashboard grid-column-12 grid-column-gap-30 actions-wrap">
                    <div class="grid-item actions-select">
                        <div class="v-select default">
                            <div class="v-select-value">Выберите действие</div>
                            <div class="v-select-options">
                                <div class="v-select-options-block">
                                    <ul>
                                        <li><a href="#">Выберите действие</a></li>
                                        <li><a href="#">Сформировать отчёт</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item actions-marked">
                        <div class="marked-text">
                            <p>Отмечено <span>1</span>/<span>10</span></p>
                        </div>
                    </div>

                </div>
            </div>

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