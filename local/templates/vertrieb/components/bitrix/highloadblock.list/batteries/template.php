<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!empty($arResult['ERROR']))
{
	echo $arResult['ERROR'];
	return false;
}

//$GLOBALS['APPLICATION']->SetTitle('Highloadblock List');

?>

<div class="grid-item fill">
    <div class="v-table-wrap">
        <div class="v-table battery-client grid-dashboard grid-row-gap-15 fill checked-all">
            <!-- head -->
            <div class="v-head">
                <div class="v-tr grid-dashboard grid-column-gap-30">

                    <? $i = 0;
                    foreach(array_keys($arResult['tableColumns']) as $sPropName): ?>
                        <? //var_dump($sPropName);
                        if($sPropName == 'UF_OBJECT_ERRORS' || $sPropName == 'UF_OBJECT_WARNINGS' || $sPropName == 'UF_WIDTH' || $sPropName == 'UF_LONGITUDE' || $sPropName == 'UF_BATTERY_FOR_RENT')
                        {
                            continue;
                        }
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
                        $title = $arUserField["LIST_COLUMN_LABEL"]? $arUserField["LIST_COLUMN_LABEL"]: $sPropName;

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

                        <? endforeach; ?>
                    </div>
                <? endforeach; ?>




            </div>
        </div>
    </div>
</div>







<?php
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
endif;
?>


<form id="hlblock-table-form" action="" method="get">
	<input type="hidden" name="BLOCK_ID" value="<?=htmlspecialcharsbx($arParams['BLOCK_ID'])?>">
	<input type="hidden" name="sort_id" value="">
	<input type="hidden" name="sort_type" value="">
</form>

<script type="text/javascript">
	BX.ready(function(){
		var rows = BX.findChildren(BX('report-result-table'), {tag:'th'}, true);
		for (i in rows)
		{
			var ds = rows[i].getAttribute('defaultSort');
			if (ds == '')
			{
				BX.addClass(rows[i], 'report-column-disabled-sort')
				continue;
			}

			BX.bind(rows[i], 'click', function(){
				var colId = this.getAttribute('colId');
				var sortType = '';

				var isCurrent = BX.hasClass(this, 'reports-selected-column');

				if (isCurrent)
				{
					var currentSortType = BX.hasClass(this, 'reports-head-cell-top') ? 'ASC' : 'DESC';
					sortType = currentSortType == 'ASC' ? 'DESC' : 'ASC';
				}
				else
				{
					sortType = this.getAttribute('defaultSort');
				}

				var idInp = BX.findChild(BX('hlblock-table-form'), {attr:{name:'sort_id'}});
				var typeInp = BX.findChild(BX('hlblock-table-form'), {attr:{name:'sort_type'}});

				idInp.value = colId;
				typeInp.value = sortType;

				BX.submit(BX('hlblock-table-form'));
			});
		}
	});
</script>
