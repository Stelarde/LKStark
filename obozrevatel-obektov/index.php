<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обозреватель объектов");


?><?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N"
	)
);?>

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
            <div class="grid-item fill">
                    <div class="v-table-wrap">
                        <div class="v-table objects grid-dashboard grid-row-gap-15 fill checked-all">
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
                                    <div class="v-th"></div>
                                    <div class="v-th"><div>Название объекта</div></div>
                                    <div class="v-th"><div>Количество батарей</div></div>
                                    <div class="v-th"><div>Количество заряженных АКБ</div></div>
                                    <div class="v-th"><div>Количество разряженных АКБ</div></div>
                                    <div class="v-th up"> <!-- up/down -->
                                        <div>
                                            <a href="javascript:;">
                                                Активность
                                                <svg>
                                                    <use xlink:href="img/sprite.svg#sort-arrow"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="v-th"><div>Полных циклов в сутки</div></div>
                                    <div class="v-th"><div>Остаточный ресурс</div></div>
                                    <div class="v-th"></div>
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
                                    <div class="v-td object-icon-block type-1 gray">
                                        <div>
                                            <div class="object-icon">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/object-icons/type-1-gray.svg" alt="<?=IMAGE_ALT?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="v-td"><div>Название объекта</div></div>
                                    <div class="v-td"><div><a href="#">24</a></div></div>
                                    <div class="v-td"><div>21</div></div>
                                    <div class="v-td"><div>3</div></div>
                                    <div class="v-td percent"><div>54,55%</div></div>
                                    <div class="v-td cycles"><div>29</div></div>
                                    <div class="v-td percent"><div>58,32%</div></div>
                                    <div class="v-td"><div></div></div>
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
                                    <div class="v-td object-icon-block type-2 purple">
                                        <div>
                                            <div class="object-icon">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/object-icons/type-2-purple.svg" alt="<?=IMAGE_ALT?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="v-td"><div>Название объекта</div></div>
                                    <div class="v-td"><div><a href="#">24</a></div></div>
                                    <div class="v-td"><div>21</div></div>
                                    <div class="v-td"><div>3</div></div>
                                    <div class="v-td percent"><div>54,55%</div></div>
                                    <div class="v-td cycles"><div>29</div></div>
                                    <div class="v-td percent"><div>58,32%</div></div>
                                    <div class="v-td"><div></div></div>
                                    <div class="v-td"><div><a href="#">2</a></div></div>
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
                                    <div class="v-td object-icon-block type-3 blue">
                                        <div>
                                            <div class="object-icon">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/object-icons/type-3-blue.svg" alt="<?=IMAGE_ALT?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="v-td"><div>Название объекта</div></div>
                                    <div class="v-td"><div><a href="#">24</a></div></div>
                                    <div class="v-td"><div>21</div></div>
                                    <div class="v-td"><div>3</div></div>
                                    <div class="v-td percent"><div>54,55%</div></div>
                                    <div class="v-td cycles"><div>29</div></div>
                                    <div class="v-td percent"><div>58,32%</div></div>
                                    <div class="v-td"><div></div></div>
                                    <div class="v-td"><div><a href="#">2</a></div></div>
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
                                    <div class="v-td object-icon-block type-4 gray">
                                        <div>
                                            <div class="object-icon">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/object-icons/type-4-gray.svg" alt="<?=IMAGE_ALT?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="v-td"><div>Название объекта</div></div>
                                    <div class="v-td"><div><a href="#">24</a></div></div>
                                    <div class="v-td"><div>21</div></div>
                                    <div class="v-td"><div>3</div></div>
                                    <div class="v-td percent"><div>54,55%</div></div>
                                    <div class="v-td cycles"><div>29</div></div>
                                    <div class="v-td percent"><div>58,32%</div></div>
                                    <div class="v-td"><div></div></div>
                                    <div class="v-td"><div><a href="#">2</a></div></div>
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
                                    <div class="v-td object-icon-block type-5 purple">
                                        <div>
                                            <div class="object-icon">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/object-icons/type-5-purple.svg" alt="<?=IMAGE_ALT?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="v-td"><div>Название объекта</div></div>
                                    <div class="v-td"><div><a href="#">24</a></div></div>
                                    <div class="v-td"><div>21</div></div>
                                    <div class="v-td"><div>3</div></div>
                                    <div class="v-td percent"><div>54,55%</div></div>
                                    <div class="v-td cycles"><div>29</div></div>
                                    <div class="v-td percent"><div>58,32%</div></div>
                                    <div class="v-td"><div></div></div>
                                    <div class="v-td"><div><a href="#">2</a></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</main>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>