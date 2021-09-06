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
                        <?
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

                        // sorting
                        $defaultSort = 'DESC';
                        //$defaultSort = $sPropName['defaultSort'];

                        ?>
                        <div class="v-th"><div><?=htmlspecialcharsex($title)?></div></div>
                <? endforeach; ?>
                </div>
            </div>


            <?/*<div class="v-head">
                <div class="v-tr grid-dashboard grid-column-gap-30">
                    <div class="v-th"><div>
                            <div class="v-checkbox all">
                                <label>
                                    <input type="checkbox">
                                    <div></div>
                                </label>
                            </div>
                        </div></div>
                    <div class="v-th"><div>Специсполнение</div></div>
                    <div class="v-th"><div>Номер батареи</div></div>
                    <div class="v-th"><div>Название батареи</div></div>
                    <div class="v-th"><div>Вид техники</div></div>
                    <div class="v-th up"> <!-- up/down -->
                        <div>
                            <a href="javascript:;">
                                Активность
                                <svg>
                                    <use xlink:href="../img/sprite.svg#sort-arrow"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="v-th"><div>Полных циклов в сутки</div></div>
                    <div class="v-th"><div>Остаточный ресурс</div></div>
                    <div class="v-th"></div>
                    <div class="v-th"><div>Аренда</div></div>
                    <div class="v-th"></div>
                    <div class="v-th"><div>События</div></div>
                </div>
            </div>*/?>


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

                            $i++;
                            $sPropValue = $arBattery[$sBatteryProp];

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
                                   array($sPropValue, intval($arParams['BLOCK_ID'])),
                                   $arParams['DETAIL_URL']
                               );
                               $sPropValue = '<a href="'.htmlspecialcharsbx($url).'">'.$sPropValue.'</a>';
                            }

                            ?>
                            <?/*

                                <div class="v-td battery-icon type-1 gray">
                                    <div>
                                        <svg>
                                            <use xlink:href="../img/sprite.svg#battery-icon-1"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="v-td"><div>Номер батареи</div></div>
                                <div class="v-td"><div><a href="#">Название батареи</a></div></div>
                                <div class="v-td"><div>Погрузчик</div></div>
                                <div class="v-td percent"><div>54,55%</div></div>
                                <div class="v-td cycles"><div>29</div></div>
                                <div class="v-td percent"><div>58,32%</div></div>
                                <div class="v-td"><div></div></div>
                                <div class="v-td"><div>До <span>25.06.2025</span></div></div>
                                <div class="v-td"><div></div></div>
                                <div class="v-td new-notification"><div><a href="#">2</a></div></div>
                            */?>
                            <div class="v-td"><div><?=$sPropValue?></div></div>
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
