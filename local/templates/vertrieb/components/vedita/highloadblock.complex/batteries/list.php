<?
use Bitrix\Main\Application;
if ( ! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)    die();



/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
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
                                <use xlink:href="img/sprite.svg#submenu-home-icon"></use>
                            </svg>
                        </span>
                                <span>Главная</span>
                            </a>
                        </li>
                        <li class="submenu-item active">
                            <a href="#">
                        <span class="submenu-item-icon">
                            <svg>
                                <use xlink:href="img/sprite.svg#submenu-support-icon"></use>
                            </svg>
                        </span>
                                <span>Служба поддержки</span>
                            </a>
                        </li>
                        <li class="submenu-item">
                            <a href="#">
                        <span class="submenu-item-icon">
                            <svg>
                                <use xlink:href="img/sprite.svg#submenu-history-icon"></use>
                            </svg>
                        </span>
                                <span>История эксплуатации</span>
                            </a>
                        </li>
                        <li class="submenu-item">
                            <a href="#">
                        <span class="submenu-item-icon">
                            <svg>
                                <use xlink:href="img/sprite.svg#submenu-report-icon"></use>
                            </svg>
                        </span>
                                <span>Скачать отчёт в PDF</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <h1>Список батарей</h1>

        <div class="grid-dashboard grid-column-12 grid-row-gap-30">
            <div class="grid-item fill grid-dashboard grid-row-gap-15 subtitle-block">
                <div class="grid-item grid-dashboard grid-column-12 grid-column-gap-30 label-filters-wrap">
                    <?/*
                    <div class="label-filters">
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div class="reset-all">
                            <span>Сбросить все фильтры</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                    </div>
*/?>
                </div>
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
                                            <use xlink:href="img/sprite.svg#input-search-icon"></use>
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
                        <div class="btn-filters active">
                            <a href="javascript:;">
                                Фильтр
                                <svg>
                                    <use xlink:href="img/sprite.svg#filters-icon"></use>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="grid-item actions-show-quantity">
                        <p>Показать</p>
                        <div class="grid-item fill">
                            <div class="v-select special white">
                                <div class="v-select-value">100</div>
                                <div class="v-select-options">
                                    <div class="v-select-options-block">
                                        <ul>
                                            <li><a href="#">100</a></li>
                                            <li><a href="#">50</a></li>
                                            <li><a href="#">10</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?
            $sSortField = "UF_ACTIVITY";
            $sSortOrder = "DESC";

            $request = Application::getInstance()->getContext()->getRequest();

            $arSortOrderAllowed = ["ASC", "DESC"];
            $arSortFieldAllowed = ["ID", "UF_NAME", "UF_DATE_UNTIL", "UF_TECH_TYPE", "UF_ACTIVITY", "UF_CYCLES", "UF_RES_LEFT"];

            $sNewSortField = strtoupper($request->get("sort"));
            $sNewSortOrder = strtoupper($request->get("order"));

            if(in_array($sNewSortField, $arSortFieldAllowed))
                $sSortField = $sNewSortField;
            if(in_array($sNewSortOrder, $arSortOrderAllowed))
                $sSortOrder = $sNewSortOrder;
            ?>


            <? $APPLICATION->IncludeComponent(
                'bitrix:highloadblock.list',
                'batteries',
                [
                    'BLOCK_ID'           => $arParams['BLOCK_ID'],
                    'CHECK_PERMISSIONS'  => $arParams['CHECK_PERMISSIONS'],
                    'DETAIL_URL'         => $arResult['URL_TEMPLATES']['view'],
                    'FILTER_NAME'        => $arParams['FILTER_NAME'],
                    'PAGEN_ID'           => $arParams['PAGEN_ID'],
                    'ROWS_PER_PAGE'      => $arParams['ROWS_PER_PAGE'],
                    'SORT_FIELD'         => $sSortField,
                    'SORT_ORDER'         => $sSortOrder,
                    'COMPONENT_TEMPLATE' => $arParams['COMPONENT_TEMPLATE'],
                ],
                false
            ); ?>

        </div>
    </div>
</main>




