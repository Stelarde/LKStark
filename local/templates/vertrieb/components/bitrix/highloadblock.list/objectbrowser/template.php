<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!empty($arResult['ERROR']))
{
	echo $arResult['ERROR'];
	return false;
}

//$GLOBALS['APPLICATION']->SetTitle('Highloadblock List');

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
                            <p>Отмечено <span id="count-checked">0</span>/<span id="count-all"><?=count($arResult['rows'])?></span></p>
                        </div>
                    </div>

                </div>
            </div>
<div class="grid-item fill">
    <div class="v-table-wrap">
        <div class="v-table objects grid-dashboard grid-row-gap-15 fill checked-all">
			<!-- head -->
			<div class="v-head">
                <div class="v-tr reports-list-table grid-dashboard grid-column-gap-30" id="report-result-table">
					<? $i = 0; foreach(array_keys($arResult['tableColumns']) as $col): ?>
						<?
						$i++;
						if ($i == 1)
							{
								$th_class = 'reports-first-column';
							}
						else if ($i == count($arResult['viewColumns']))
							{
								$th_class = 'reports-last-column';
							}
						else
							{
								$th_class = 'reports-head-cell';
							}
						// title
						$arUserField = $arResult['fields'][$col];
						$title = $arUserField["EDIT_FORM_LABEL"];
						// sorting
						$defaultSort = 'DESC';
						//$defaultSort = $col['defaultSort'];
						if ($col === $arResult['sort_id'])
						{
							$th_class .= ' reports-selected-column';
							if($arResult['sort_type'] == 'ASC')
							{
								$th_class .= ' reports-head-cell-top';
							}
						}
						else
						{
							if ($defaultSort == 'ASC')
							{
								$th_class .= ' reports-head-cell-top';
							}
						}
						if($col == 'ID'): ?>
							<div class="v-th">
								<div  class="v-checkbox all">
									<label>
										<input id="check-all" type="checkbox">
										<div></div>
									</label>
								</div>
							</div>
						<?elseif($col == 'UF_OBJECT_BATTERY_ACTIVE'):?>
							<span class="<?=$th_class?> v-th up" colId="<?=htmlspecialcharsbx($col)?>" defaultSort="<?=$defaultSort?>">
								<div class="reports-head-cell"><?if($defaultSort):?>
									<span class="reports-table-arrow"></span>
									<?endif?>
									<span class="reports-head-cell-title v-th up">
										<a href="javascript:;">
											<?=htmlspecialcharsex($title)?>
											<svg>
												<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sort-arrow"></use>
											</svg>
										</a>
									</span>
								</div>
							</span>
						<?elseif($col == 'UF_OBJECT_ERRORS' || $col == 'UF_OBJECT_WARNINGS' || $col == 'UF_OBJECT_USER_ID' || $col == 'UF_OBJECT_CONTACT_PERSON' || $col == 'UF_OBJECT_PERSON_PHONE' || $col == 'UF_OBJECT_PERSON_ADRESS'): continue?>
						<?else: ?>
							<span class="<?=$th_class?> v-th" colId="<?=htmlspecialcharsbx($col)?>" defaultSort="<?=$defaultSort?>">
								<div class="reports-head-cell">
									<?if($defaultSort):?>
									<span class="reports-table-arrow"></span>
									<?endif?>
								<span class="reports-head-cell-title v-th"><?=htmlspecialcharsex($title)?></span></div>
						</span>
						<? endif; ?>
					<? endforeach; ?>
					</div>
			</div>
			<!-- data -->
			<div class="v-body">		
			<? foreach ($arResult['rows'] as $row): ?>
					<div class="v-tr grid-dashboard grid-column-gap-30 reports-list-item">
					<? $i = 0; foreach(array_keys($arResult['tableColumns']) as $col): ?>
					<?
					$i++;
					if ($i == 1)
						{
							$td_class = 'reports-first-column';
						}
					else if ($i == count($arResult['viewColumns']))
						{
							$td_class = 'reports-last-column';
						}
					else
						{
							$td_class = '';
						}
					//if (CReport::isColumnPercentable($col))
					if (false) // numeric rows
						{
							$td_class .= ' reports-numeric-column';
						}
					$finalValue = $row[$col];
					if ($col === 'UF_OBJECT_NAME' && !empty($arParams['DETAIL_URL']))
						{
							$finalValue = '<a href="'.htmlspecialcharsbx($url).'">'.$finalValue.'</a>';
						}
					?>
					<? if($col == 'ID'): ?>
						<?php
						$url = str_replace(
							array('#ID#', '#BLOCK_ID#'),
							array($finalValue, intval($arParams['BLOCK_ID'])),
							$arParams['DETAIL_URL']
						);
						?>
						<div class="v-td">
							<div>
								<div class="v-checkbox default">
									<label>
										<input class="checkbox-default" type="checkbox">
										<div></div>
									</label>
								</div>
							</div>
						</div>
					<?elseif($col == 'UF_OBJECT_SRC'): ?>
						<div class="v-td object-icon-block type-1 gray">
							<div>
								<div class="object-icon">
									<img src="<?=$finalValue?>" alt="<?=IMAGE_ALT?>">
								</div>
							</div>
						</div>
					<? elseif($col == 'UF_OBJECT_BATTERY_AMOUNT'):  ?>
						<div class="v-td <?=$td_class?>"><a href="/batteries/"><?=$finalValue?></a></div>
					<?elseif($col == 'UF_OBJECT_BATTERY_ACTIVE' || $col == 'UF_OBJECT_BATTERY_REMAINIG_RESOURCE'): ?>
						<div class="v-td <?=$td_class?> percent"><?=$finalValue?>%</div>
					<?elseif($col == 'UF_OBJECT_BATTERY_CYCLES'): ?>
						<div class="v-td <?=$td_class?> cycles"><?=$finalValue?></div>
					<?elseif($col == 'UF_OBJECT_EVENTS'): ?>
						<div class="v-td <?=$td_class?> new-notification"><div><a href="#"><?=$finalValue?></a></div></div>
					<?elseif($col == 'UF_OBJECT_ERRORS' || $col == 'UF_OBJECT_WARNINGS' || $col == 'UF_OBJECT_USER_ID' || $col == 'UF_OBJECT_CONTACT_PERSON' || $col == 'UF_OBJECT_PERSON_PHONE' || $col == 'UF_OBJECT_PERSON_ADRESS'): continue?>
					<?else: ?>
						<div class="v-td <?=$td_class?>"><?=$finalValue?></div>
					<? endif; ?>
					<? endforeach; ?>
					</div>
					
				<? endforeach; ?>
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
				$('#check-all').click(function () 
				{
					var t = $(this).parents('.checked-all');
					if (this.checked == true)
					{
						t.find('input[type=checkbox]').each(function() 
						{
							this.checked = true; 
							$('#count-checked').text($('#count-all').text());
						});
					}
					else
					{
						t.find('input[type=checkbox]').each(function() 
						{
							this.checked = false; 
							$('#count-checked').text('0');
						});
					}
				});

				$('.checkbox-default').click(function () 
				{
					if (this.checked == true)
					{
						var countChecked = parseInt($('#count-checked').text());
						countChecked++;
						$('#count-checked').text(countChecked);
					}
					else
					{
						var countChecked = parseInt($('#count-checked').text());
						countChecked--;
						$('#count-checked').text(countChecked);
					}
				});
			});
		</script>
		
			<script type="text/javascript">
				BX.ready(function(){
					var rows = BX.findChildren(BX('report-result-table'), {tag:'span'}, true);
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
		</div>
	</div>
</div>