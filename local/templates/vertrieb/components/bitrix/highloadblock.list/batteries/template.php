<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$bShowClients = ($arParams['SHOW_CLIENTS'] == "Y") ? true : false;
if (!empty($arResult['ERROR']))
{
	echo $arResult['ERROR'];
	return false;
}

//$GLOBALS['APPLICATION']->SetTitle('Highloadblock List');
/*
?>
<pre>
    <?=print_r($arResult, true);?>
</pre>
*/?>
<div class="grid-item fill">
    <div class="v-table-wrap">
        <div class="v-table battery-client grid-dashboard grid-row-gap-15 fill checked-all">
            <!-- head -->
            <div class="v-head">
                <div class="v-tr grid-dashboard grid-column-gap-30">

                    <? $i = 0;
                    foreach(array_keys($arResult['tableColumns']) as $sPropName): ?>
                        <?
                        if (!in_array($sPropName, $arParams['DISPLAY_PROPS'])) continue;

                        if ($sPropName === "ID")
                        {
                            ?>
                            <div class="v-th"><div>
                                    <div class="v-checkbox all">
                                        <label>
                                            <input type="checkbox">
                                            <div></div>
                                        </label>
                                    </div>
                                </div></div>
                            <?
                            continue;
                        }
                        // title
                        $arUserField = $arResult['fields'][$sPropName];
                        $title = $arUserField["LIST_COLUMN_LABEL"] != "" ? $arUserField["LIST_COLUMN_LABEL"] : $sPropName;

                        if ($sPropName === "UF_ACTIVITY")
                        {
//                            echo "<pre>".print_r($arParams, true)."</pre>";die();
                            //var_dump($arParams["SORT_ORDER"]);
                            $sSortDirection = "down";
                            $sNewSortDirection = "asc";
                            if ($arParams["SORT_ORDER"] == "ASC")
                            {
                                $sSortDirection = "up";
                                $sNewSortDirection = "desc";
                            }

                            global $APPLICATION;
                            $sUrl = $APPLICATION->GetCurDir();
                            ?>
                            <div class="v-th <?= $sSortDirection?>"> <!-- up/down -->
                                <div>
                                    <a href="<?=$sUrl?>?sort=uf_activity&order=<?=$sNewSortDirection ?>">
                                        <?=htmlspecialcharsex($title)?>
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH ?>/img/sprite.svg#sort-arrow"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <?
                            continue;
                        }
                        
                        ?>
                        <div class="v-th"><div><?=htmlspecialcharsex($title)?></div></div>
                    <?if (!$bShowClients && ($sPropName == "UF_RES_LEFT" || $sPropName == "UF_DATE_UNTIL")):?><div class="v-th"><div></div></div><?endif;?>
                <? endforeach; ?>
                </div>
            </div>

            <!-- data -->
            <div class="v-body">
                <? foreach ($arResult['rows'] as $arBattery): ?>
                    <?
                        $iBattaryId = 0;
                    ?>
                    <div class="v-tr grid-dashboard grid-column-gap-30">

                        <? $i = 0;
                        foreach(array_keys($arResult['tableColumns']) as $sBatteryProp): ?>
                            <?
                            if (!in_array($sBatteryProp, $arParams['DISPLAY_PROPS'])) continue;
                            $sAdditionalClass = '';
                            $i++;
                            $sPropValue = $arBattery[$sBatteryProp];
                            if($sBatteryProp == 'UF_OBJECT_ERRORS' || $sBatteryProp == 'UF_OBJECT_WARNINGS' || $sBatteryProp == 'UF_WIDTH' || $sBatteryProp == 'UF_LONGITUDE' || $sBatteryProp == 'UF_BATTERY_FOR_RENT')
                        {
                            continue;
                        }
                            if ($sBatteryProp === 'ID')
                            {
                                $iBattaryId = (int) $sPropValue;
                                ?>
                                <div class="v-td">
                                    <div>
                                        <div class="v-checkbox default">
                                            <label>
                                                <input type="checkbox" id="<?= $sPropValue?>">
                                                <div></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <?
                                continue;
                            }
                            elseif ($sBatteryProp === 'UF_NAME' && !empty($arParams['DETAIL_URL']) && $iBattaryId > 0)
                            {
                                $url = str_replace(
                                   array('#ID#', '#BLOCK_ID#'),
                                   array($iBattaryId, intval($arParams['BLOCK_ID'])),
                                   $arParams['DETAIL_URL']
                               );
                               $sPropValue = '<a href="'.htmlspecialcharsbx($url).'">'.$sPropValue.'</a>';
                            }
                            elseif ($sBatteryProp === 'UF_SPECOPS')
                            {
                                $sSprite = '';
                                if ($sPropValue == "снег")
                                    $sSprite = "battery-icon-1";
                                if ($sPropValue == "вода")
                                    $sSprite = "battery-icon-2";
                                if ($sSprite) :
                                    ?>
                                    <div class="v-td battery-icon type-1 gray">
                                        <div>
                                            <svg>
                                                <use xlink:href="<?=SITE_TEMPLATE_PATH ?>/img/sprite.svg#<?= $sSprite;?>"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <?
                                    continue;
                                endif;
                            }
                            elseif ($sBatteryProp === 'UF_EVENT' && $sPropValue != 0)
                            {
                                ?><div class="v-td new-notification"><div><a href="#"><?=$sPropValue?></a></div></div><?
                                continue;
                            }

                            if ($sBatteryProp === 'UF_ACTIVITY' || $sBatteryProp === 'UF_RES_LEFT')
                                $sAdditionalClass .= 'percent ';

                            if ($sBatteryProp === 'UF_CYCLES')
                                $sAdditionalClass .= 'cycles ';

                            ?>
                            <div class="v-td <?=$sAdditionalClass;?>"><div><?=$sPropValue?></div></div>
                            <?if (!$bShowClients && ($sBatteryProp == "UF_RES_LEFT" || $sBatteryProp == "UF_DATE_UNTIL")):?><div class="v-td <?=$sAdditionalClass;?>"><div></div></div><?endif;?>
                        <? endforeach; ?>
                    </div>
                <? endforeach; ?>




            </div>
        </div>
    </div>
</div>







<?php
/*
if ($arParams['ROWS_PER_PAGE'] > 0):
	$APPLICATION->IncludeComponent(
		'bitrix:main.pagenavigation',
		'',
		array(
			'NAV_OBJECT' => $arResult['nav_object'],
			'SEF_MODE' => 'N',
		),
		false
	);
endif;*/
?>

