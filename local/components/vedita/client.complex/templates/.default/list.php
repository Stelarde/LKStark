<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$this->addExternalJS("/local/components/vedita/client.complex/script.js");?>

<h1>Клиенты</h1>
    
<div class="grid-dashboard grid-column-12 grid-row-gap-30">
    <div class="grid-item fill">
        <a data-fancybox data-type="ajax" data-src="<?=SITE_TEMPLATE_PATH?>/popups/popup-add-client.php" href="javascript:;"  class="btn-secondary popup-link">Добавить клиента</a>
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
                    <p>Отмечено <span id="count-checked">0</span>/<span id="count-all"><?=count($arResult['users'])?></span></p>
                </div>
            </div>
            <div class="grid-item actions-search">
                <div class="v-search-wrap">
                    <div class="v-search input-wrap">
                        <div class="v-search-input input white">
                            <input type="search" placeholder="Номер, название батареи или имя клиента">
                            <div class="input-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#input-search-icon"></use>
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
                    <div class="filter v-dropdown">
                        <a href="javascript:;" class="filter-btn v-dropdown-btn">
                            Фильтр 
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#filters-icon"></use>
                            </svg>                            
                        </a>
                        <div class="filter-block v-dropdown-options">
                            <form action="#">
                                <div class="filter-item">
                                    <p>По клиенту</p>
                                    <div class="v-search-wrap">
                                        <div class="v-search input-wrap">
                                            <div class="v-search-input input gray">
                                                <input type="search" placeholder="Название или номер батареи">
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
                                <div class="filter-item">
                                    <p>По виду техники</p>
                                    <div class="v-search-wrap">
                                        <div class="v-search input-wrap">
                                            <div class="v-search-input input gray">
                                                <input type="search">
                                                <div class="input-icon">
                                                    <svg>
                                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>img/sprite.svg#input-search-icon"></use>
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
                                <div class="filter-item start">
                                    <p>По типу события</p>
                                    <div class="filter-checkbox-block">
                                        <div class="v-checkbox default">
                                            <label>
                                                <input type="checkbox">
                                                <div></div>
                                                <p>Сообщение</p>
                                            </label>
                                        </div>
                                        <div class="v-checkbox default">
                                            <label>
                                                <input type="checkbox">
                                                <div></div>
                                                <p>Уведомление</p>
                                            </label>
                                        </div>
                                        <div class="v-checkbox default">
                                            <label>
                                                <input type="checkbox">
                                                <div></div>
                                                <p>Ошибка</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-item">
                                    <p>По дате</p>
                                    <div class="input gray">
                                        <input type="text" autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="filter-item">
                                    <button type="submit" class="btn-primary">Применить</button>
                                </div>
                            </form>
                        </div>
                    </div>
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
                                    <input type="checkbox" id="check-all">
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
                <?foreach($arResult['users'] as $arUser):?>
                    <div class="v-tr grid-dashboard grid-column-gap-30">                        
                        <div class="v-td">
                            <div>
                                <div class="v-checkbox default">
                                    <label>
                                        <input type="checkbox" class="checkbox-default">
                                        <div></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="v-td " onclick="window.location.href='/clients/<?=$arUser['ID']?>/'">
                            <div>
                                <div class="client-logo">
                                    <a href="/clients/<?=$arUser['ID']?>/">
                                        <img src="<?=$arUser['logoSrc']?>" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="v-td" onclick="window.location.href='/clients/<?=$arUser['ID']?>/'"><div><?=$arUser['WORK_COMPANY']?></div></div>
                        <div class="v-td" onclick="window.location.href='/clients/<?=$arUser['ID']?>/'"><div><a href="#"><?=$arUser['countBattary']?></a></div></div>
                        <div class="v-td" onclick="window.location.href='/clients/<?=$arUser['ID']?>/'"><div><a href="#"><?=$arUser['countRentBattary']?></a></div></div>
                        <div class="v-td new-notification" onclick="window.location.href='/clients/<?=$arUser['ID']?>/'"><div><a href="#"><?=$arUser['countEvents']?></a></div></div>                        
                    </div>
                <?endforeach;?>
                </div>
            </div>
        </div>
    </div>            
</div>
