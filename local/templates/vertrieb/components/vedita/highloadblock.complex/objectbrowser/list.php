<? if ( ! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
?>
<?
global $USER;
$user_id = $USER->GetID();
$GLOBALS['arFilter'] = ['UF_OBJECT_USER_ID' => $user_id];
?>
<h1>Обозреватель объектов</h1>
        <div class="grid-dashboard grid-column-12 grid-row-gap-30">
            <div class="grid-item fill">
                <a data-fancybox data-type="ajax" data-src="<?=SITE_TEMPLATE_PATH?>/popups/popup-add-object.php" href="javascript:;"  class="btn-secondary popup-link">Добавить объект</a> 
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
<? $APPLICATION->IncludeComponent(
    'bitrix:highloadblock.list',
    'objectbrowser',
    [
        'BLOCK_ID'           => $arParams['BLOCK_ID'],
        'CHECK_PERMISSIONS'  => $arParams['CHECK_PERMISSIONS'],
        'DETAIL_URL'         => $arResult['URL_TEMPLATES']['view'],
        'FILTER_NAME'        => $arParams['FILTER_NAME'],
        'PAGEN_ID'           => $arParams['PAGEN_ID'],
        'ROWS_PER_PAGE'      => $arParams['ROWS_PER_PAGE'],
        'SORT_FIELD'         => $arParams['SORT_FIELD'],
        'SORT_ORDER'         => $arParams['SORT_ORDER'],
        'COMPONENT_TEMPLATE' => $arParams['COMPONENT_TEMPLATE'],
    ],
    false
); ?>
