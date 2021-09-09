<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
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
                                <use xlink:href="../img/sprite.svg#submenu-home-icon"></use>
                            </svg>
                        </span>
                        <span>Главная</span>
                    </a>
                </li>
                <li class="submenu-item active">
                    <a href="#">
                        <span class="submenu-item-icon">
                            <svg>
                                <use xlink:href="../img/sprite.svg#submenu-support-icon"></use>
                            </svg>
                        </span>
                        <span>Служба поддержки</span>
                    </a>
                </li>
                <li class="submenu-item">
                    <a href="#">
                        <span class="submenu-item-icon">
                            <svg>
                                <use xlink:href="../img/sprite.svg#submenu-history-icon"></use>
                            </svg>
                        </span>
                        <span>История эксплуатации</span>
                    </a>
                </li>
                <li class="submenu-item">
                    <a href="#">
                        <span class="submenu-item-icon">
                            <svg>
                                <use xlink:href="../img/sprite.svg#submenu-report-icon"></use>
                            </svg>
                        </span>
                        <span>Скачать отчёт в PDF</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
    
        <h1>Клиенты</h1>
    
        <div class="grid-dashboard grid-column-12 grid-row-gap-30">
            <div class="grid-item fill">
                <a href="#" class="btn-secondary">Добавить клиента</a> 
            </div>
            <div class="grid-item fill grid-dashboard grid-row-gap-15 subtitle-block type-2">
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
    
                    <div class="grid-item actions-search">
                        <div class="v-search-wrap">
    <div class="v-search input-wrap">
        <div class="v-search-input input white">
            <input type="search" placeholder="Номер, название батареи или имя клиента">
            <div class="input-icon">
                <svg>
                    <use xlink:href="../img/sprite.svg#input-search-icon"></use>
                </svg>
            </div>
        </div>
        <div class="v-search-hints input-hints" style="display: none;">
            <div class="input-hints-block">
                <ul>
                    <li><a href="#">ООО Мосдвор</a></li>
                    <li><a href="#">ООО Мосдвор</a></li>
                    <li><a href="#">ООО Мосдвор</a></li>
                    <li><a href="#">ООО Мосдвор</a></li>
                    <li><a href="#">ООО Мосдвор</a></li>
                    <li><a href="#">ООО Мосдвор</a></li>
                    <li><a href="#">ООО Мосдвор</a></li>
                    <li><a href="#">ООО Мосдвор</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
                    </div>
    
                    <div class="grid-item actions-filters">
                        <div class="btn-filters">
                            <a href="javascript:;">
                                Фильтр 
                                <svg>
                                    <use xlink:href="../img/sprite.svg#filters-icon"></use>
                                </svg>                            
                            </a>
                        </div>
                    </div>
    
                </div>
            </div>
            
            <div class="grid-item fill">
                <div class="v-table-wrap">
    <div class="v-table clients grid-dashboard grid-row-gap-15 fill checked-all">
        <div class="v-head">
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-th"><div>
                    <div class="v-checkbox all">
                        <label>
                            <input type="checkbox">
                            <div></div>
                        </label>
                    </div>
                </div></div>
                <div class="v-th"><div></div></div>
                <div class="v-th"><div>Имя клиента</div></div>
                <div class="v-th"><div>Количество батарей</div></div>
                <div class="v-th"><div>Количество батарей в аренде</div></div>
                <div class="v-th"><div>События</div></div>
            </div>
        </div>
        <div class="v-body">
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-td">
                    <div>
                        <div class="v-checkbox default">
                            <label>
                                <input type="checkbox">
                                <div></div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="v-td ">
                    <div>
                        <div class="client-logo">
                            <img src="../../img/client-logo.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="v-td"><div>ООО «Склад.ру»</div></div>
                <div class="v-td"><div><a href="#">47</a></div></div>
                <div class="v-td"><div><a href="#">47</a></div></div>
                <div class="v-td new-notification"><div><a href="#">2</a></div></div>
            </div>
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-td">
                    <div>
                        <div class="v-checkbox default">
                            <label>
                                <input type="checkbox">
                                <div></div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="v-td ">
                    <div>
                        <div class="client-logo">
                            <img src="../../img/client-logo.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="v-td"><div>ООО «Склад.ру»</div></div>
                <div class="v-td"><div><a href="#">47</a></div></div>
                <div class="v-td"><div><a href="#">47</a></div></div>
                <div class="v-td new-notification"><div><a href="#">4</a></div></div>
            </div>
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-td">
                    <div>
                        <div class="v-checkbox default">
                            <label>
                                <input type="checkbox">
                                <div></div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="v-td ">
                    <div>
                        <div class="client-logo">
                            <img src="../../img/client-logo.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="v-td"><div>ООО «Склад.ру»</div></div>
                <div class="v-td"><div><a href="#">47</a></div></div>
                <div class="v-td"><div><a href="#">47</a></div></div>
                <div class="v-td new-notification"><div><a href="#">12</a></div></div>
            </div>
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-td">
                    <div>
                        <div class="v-checkbox default">
                            <label>
                                <input type="checkbox">
                                <div></div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="v-td ">
                    <div>
                        <div class="client-logo">
                            <img src="../../img/client-logo.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="v-td"><div>ООО «Склад.ру»</div></div>
                <div class="v-td"><div><a href="#">47</a></div></div>
                <div class="v-td"><div><a href="#">47</a></div></div>
                <div class="v-td new-notification"><div><a href="#">2</a></div></div>
            </div>
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-td">
                    <div>
                        <div class="v-checkbox default">
                            <label>
                                <input type="checkbox">
                                <div></div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="v-td ">
                    <div>
                        <div class="client-logo">
                            <img src="../../img/client-logo.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="v-td"><div>ООО «Склад.ру»</div></div>
                <div class="v-td"><div><a href="#">47</a></div></div>
                <div class="v-td"><div><a href="#">47</a></div></div>
                <div class="v-td new-notification"><div>-</div></div>
            </div>
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-td">
                    <div>
                        <div class="v-checkbox default">
                            <label>
                                <input type="checkbox">
                                <div></div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="v-td ">
                    <div>
                        <div class="client-logo">
                            <img src="../../img/client-logo.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="v-td"><div>ООО «Склад.ру»</div></div>
                <div class="v-td"><div><a href="#">47</a></div></div>
                <div class="v-td"><div><a href="#">47</a></div></div>
                <div class="v-td new-notification"><div><a href="#">2</a></div></div>
            </div>
        </div>
    </div>
</div>
            </div>
            
        </div>
    </div>
</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>