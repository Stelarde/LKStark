<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Документация");
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

        <h1>Документация</h1>

        <div class="grid-dashboard grid-column-12 grid-row-gap-30">

            <div class="grid-item fill">
                <div class="v-table-wrap">
    <div class="v-table documentation grid-dashboard grid-row-gap-15 fill">
        <div class="v-head">
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-th"><div>Наименование документа</div></div>
                <div class="v-th"><div>Тип документа</div></div>
                <div class="v-th"><div>Общее краткое описание</div></div>
            </div>
        </div>
        <div class="v-body">
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-td"><div>Руководство по эксплуатации.pdf</div></div>
                <div class="v-td"><div>Руководство</div></div>
                <div class="v-td"><div>Lacus aliquet habitasse magna suspendisse. Elementum</div></div>
                <div class="v-td">
                    <div>
                        <a href="#" download>
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#download-icon"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-td"><div>Инструкция.pdf</div></div>
                <div class="v-td"><div>Инструкция</div></div>
                <div class="v-td"><div>Nunc, euismod pellentesque consequat, duis auctor. Lacus aliquet habitasse magna suspendisse. Elementum</div></div>
                <div class="v-td">
                    <div>
                        <a href="#" download>
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#download-icon"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-td"><div>Руководство по эксплуатации.pdf</div></div>
                <div class="v-td"><div>Руководство</div></div>
                <div class="v-td"><div>Lacus aliquet habitasse magna suspendisse. Elementum</div></div>
                <div class="v-td">
                    <div>
                        <a href="#" download>
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#download-icon"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-td"><div>Руководство по эксплуатации.pdf</div></div>
                <div class="v-td"><div>Руководство</div></div>
                <div class="v-td"><div>Lacus aliquet habitasse magna suspendisse. Elementum</div></div>
                <div class="v-td">
                    <div>
                        <a href="#" download>
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#download-icon"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            
        </div>
    </div>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>