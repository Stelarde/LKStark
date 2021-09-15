<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>




<main class="main">
    <div class="main-internal">
    <pre>
<?

$chargeGraphicData = 
[
    'today' => 
    [
        'labels' => ['00:00', '02:00', '04:00', '06:00', '08:00', '10:00', '12:00', '14:00', '16:00', '18:00', '20:00', '22:00'],
        'charge' => [62,73,49],
        'discharge' => [70, 6, 19],
        'area'=> [45, 2, 45, 1, 44],
        'cycles' => [
            'all' => 4,
            'day' => 5,
            'partly' => 4
        ],
        'activity' => [
            'percent' => [64, 35, 10],
            'time' => [
              'charge' => '12 ч 45 мин',
              'discharge' => '23 ч 25 мин',
              'downtime' => '15 ч 30 мин'
            ]
        ]
    ],
    'week' => 
    [
        'labels' => ['05 пн', '06 вт', '07 ср', '08 чт', '09 пт', '10 сб', '11 вс'],
        'charge' => [12, 45, 22, 10, 34, 43],
        'discharge' => [45, 70, 30, 10, 34, 56],
        'area'=> [23, 3, 45, 55, 54],
        'cycles' => [
            'all' => 30,
            'day' => 2.5,
            'partly' => 34
        ],
        'activity' => [
            'percent' => [60, 14, 25],
            'time' => [
              'charge' => '22 ч 45 мин',
              'discharge' => '13 ч 15 мин',
              'downtime' => '5 ч 30 мин'
            ]
        ]
    ],
    'month' => 
    [
        'labels' => ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'],
        'charge' => [75, 33, 74, 32, 5, 11, 34, 76],
        'discharge' => [12, 45, 22, 10, 34, 43, 64],
        'area'=> [23, 3, 45, 55, 54],
        'cycles' => [
            'all' => 10,
            'day' => 2.5,
            'partly' => 2
        ],
        'activity' => [
            'percent' => [26, 14, 22],
            'time' => [
              'charge' => '2 ч 45 мин',
              'discharge' => '3 ч 10 мин',
              'downtime' => '15 ч 35 мин'
            ]
        ]
    ],
    'quarter' => 
    [
        'labels' => ['Январь', 'Февраль', 'Март'],
        'charge' => [50, 60, 10],
        'discharge' => [12, 45, 22],
        'area'=> [23, 3, 45, 55, 54],
        'cycles' => [
            'all' => 5,
            'day' => 3,
            'partly' => 55
        ],
        'activity' => [
            'percent' => [3, 17, 51],
            'time' => [
              'charge' => '2 ч 35 мин',
              'discharge' => '3 ч 15 мин',
              'downtime' => '15 ч 45 мин'
            ]
        ]
    ],
    'year' => 
    [
        'labels' => ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
        'charge' => [10, 50, 33],
        'discharge' => [75, 33, 74],
        'area'=> [72, 59, 74, 70, 55],
        'cycles' => [
            'all' => 3,
            'day' => 1,
            'partly' => 5
        ],
        'activity' => [
            'percent' => [15, 20, 20],
            'time' => [
              'charge' => '12 ч 30 мин',
              'discharge' => '3 ч 10 мин',
              'downtime' => '14 ч 40 мин'
            ]
        ]
    ],
    'all' => 
    [
        'labels' => ['2018', '2019', '2020', '2021'],
        'charge' => [10, 50, 33],
        'discharge' => [75, 33, 74],
        'area'=> [72, 59, 74, 70, 55],
        'cycles' => [
            'all' => 3,
            'day' => 1,
            'partly' => 5
        ],
        'activity' => [
            'percent' => [33, 41, 11],
            'time' => [
              'charge' => '1 ч 10 мин',
              'discharge' => '39 ч 15 мин',
              'downtime' => '14 ч 40 мин'
            ]
        ]
    ],
];
?>
<script>
    var chargeGraphicData = <?=CUtil::PhpToJSObject($chargeGraphicData)?>;
</script>
</pre>
        <div class="battery grid-dashboard grid-column-12 grid-row-gap-30">
            <div class="grid-item fill">
                <div class="battery-top grid-dashboard grid-column-12 grid-column-gap-30 grid-row-gap-15">
                    <div class="battery-info">
                        <div class="battery-info-img">
                            <?
                            
                            $file = CFile::ResizeImageGet($arResult['fields']['UF_BATTERY_IMG']['VALUE'], array('width'=>115, 'height'=>104), BX_RESIZE_IMAGE_PROPORTIONAL, true); 
                            $URL = $file['src']; 
                            ?>
                            <img src="<?=$URL?>" alt="">
                        </div>
                        <div class="battery-info-block">
                            <div class="battery-info-title">
                                <div class="battery-info-title-block">
                                    <p id="battery-info-name" value="<?=$arResult['battery_ID']?>" class="battery-info-title__name"><?=$arResult['fields']['UF_NAME']['VALUE']?></p>
                                    <p  class="battery-info-title__object"><?=$arResult['object_name']?></p>
                                    <p class="battery-info-title__number"><?=$arResult['fields']['UF_SERIAL_NUM']['VALUE']?></p>
                                    <p class="battery-info-title__technic"><?=$arResult['fields']['UF_TECH_TYPE']['VALUE']?> <?=$arResult['fields']['UF_COMMENT_TYPE_EQUIPMENT']['VALUE']?></p>
                                </div>
                                <div class="battery-info-settings">
                                    <div class="v-dropdown type-2 left">
                                        <a href="javascript:;" class="v-dropdown-btn">
                                          <svg>
                                              <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#settings-icon"></use>
                                          </svg>
                                        </a>
                                        <div class="v-dropdown-options">
                                            <div class="v-dropdown-options-wrap">
                                                <ul>
                                                    <li><a href="#">Параметры работы АКБ</a></li>
                                                    <li><a data-fancybox data-type="ajax" data-src="<?=SITE_TEMPLATE_PATH?>/popups/popup-changing-battery-data.php" href="?ID=6" class="popup-link">Редактировать данные</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="battery-info-list">
                                <div class="battery-info-list-item">
                                    <div>
                                        <p>Специсполнение</p>
                                        <span>Подогрев</span>
                                    </div>
                                    <div>
                                        <p>Дата изготовления</p>
                                        <span>05.03.2019</span>
                                    </div>
                                    <div>
                                        <p>Дата  начала эксплуатации</p>
                                        <div>
                                            <span>07.05.2019</span>
                                            <p>( 2г 2мес 1д )</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="battery-info-list-item">
                                    <div>
                                        <p>Последний сеанс связи с сервером</p>
                                        <span class="online">онлайн</span> <!-- online/offline -->
                                    </div>
                                    <div>
                                        <p>Полных циклов заряда за всё время</p>
                                        <span>52</span>
                                    </div>
                                    <div>
                                        <div>
                                            <p>Версия платы BMS</p>
                                            <span>3.02</span>
                                        </div>
                                        <div>
                                            <p>Версия ПО</p>
                                            <span>1.01</span>
                                            <svg>
                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#battery-version-icon"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="battery-effectiveness">
                        <p class="battery-effectiveness__title">Эффективность</p>
                        <div class="battery-effectiveness-graphic-wrap">
                            <div class="battery-effectiveness-graphic-persent">
                                <span>77</span>%
                            </div>
                            <div class="battery-effectiveness-graphic">
                                <div class="battery-effectiveness-graphic-arrow">
                                    <svg width="45" height="24" viewBox="0 0 45 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="32.5998" cy="11.9758" r="9.47249" transform="rotate(-180 32.5998 11.9758)" stroke="#BDBDBD" stroke-width="5"/>
                                        <rect x="21.2095" y="12.8125" width="20.5" height="2.35784" transform="rotate(-180 21.2095 12.8125)" fill="#BDBDBD"/>
                                    </svg>                                    
                                </div>
                                <span class="battery-effectiveness-num-50">50</span>
                                <span class="battery-effectiveness-num-75">75</span>
                                <span class="battery-effectiveness-num-100">100</span>

                                <span class="battery-effectiveness-green-zone-block"></span>
                                <span class="battery-effectiveness-yellow-zone-block"></span>
                                <span class="battery-effectiveness-red-zone-block"></span>
                                <span class="battery-effectiveness-orange-zone-block"></span>
                            </div>
                        </div>
                        <div class="battery-effectiveness-value">
                            <ul>
                                <li class="battery-effectiveness-value-given">
                                    <p>Отдано</p>
                                    <p><span>34,1</span> кВтч</p>                                    
                                </li>
                                <li class="battery-effectiveness-value-received">
                                    <p>Получено</p>
                                    <p><span>34,6</span> кВтч</p>  
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="battery-resource">
                        <p class="battery-resource__title">Остаточный ресурс</p>
                        <div class="object-resource-wrap">
                            <div class="object-resource-icon">
                                <div class="object-resource">
                                    <div class="object-resource-scale">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="object-resource-value">76%</div>
                        </div>
                    </div>
                    <div class="battery-data">
                        <div class="battery-data-item">
                            <p class="battery-data-item__title">Напряжение</p>
                            <p class="battery-data-item__value">49,3 В</p>
                        </div>
                        <div class="battery-data-item">
                            <p class="battery-data-item__title">Ток</p>
                            <p class="battery-data-item__value">200 А*ч</p>
                        </div>
                        <div class="battery-data-item">
                            <p class="battery-data-item__title">Температура</p>
                            <p class="battery-data-item__value">43 °С</p>
                        </div>
                        <div class="battery-data-item">
                            <p class="battery-data-item__title">Уровень заряда</p>
                            <p class="battery-data-item__value">56%</p>
                        </div>
                        <div class="battery-data-item">
                            <p class="battery-data-item__title">Аренда</p>
                            <p class="battery-data-item__value">до <?=$arResult['fields']['UF_DATE_UNTIL']['VALUE']?></p>
                        </div>
                    </div>
                    <div class="battery-events">
                        <ul>
                            <li>
                                <p>Сообщения</p>
                                <a href="javascript:;" class="new-notifications"><?=$arResult['fields']['UF_EVENT']['VALUE']?></a>
                            </li>
                            <li>
                                <p>Предупреждения</p>
                                <a href="javascript:;"><?=$arResult['fields']['UF_OBJECT_WARNINGS']['VALUE']?></a>
                            </li>
                            <li>
                                <p>Ошибки</p>
                                <a href="javascript:;"><?=$arResult['fields']['UF_OBJECT_ERRORS']['VALUE']?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="battery-map">
                        <div id="YMapsID" class="battery-map-block">
                        <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;coordorder=longlat&amp;apikey=02b24ed7-1927-4973-a0c4-ac6ff0ad7dce"></script>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid-item fill">
                <div class="battery-graphics">
                    <div class="battery-graphics-top">
                        <div class="battery-graphics-filter">
                        <form action="#" class="battery-graphics-filter-form">
                            <div class="battery-graphics-filter-block">
                                <div class="input date white">
                                    <input type="text" autocomplete="off" id="datepicker-battery-filter" data-multiple-dates-separator="  -  " placeholder="Выберите период">
                                </div>
                                <button type="submit" class="btn-inline">Показать</button>
                            </div>
                            </form>
                        </div>
                        <div class="battery-graphics-tabs">
                            <ul>
                                <li>
                                    <a href="javascript:;" id="tab-btn-today" class="active">Сегодня</a>
                                </li>
                                <li>
                                    <a href="javascript:;" id="tab-btn-week">Неделя</a>
                                </li>
                                <li>
                                    <a href="javascript:;" id="tab-btn-month">Месяц</a>
                                </li>
                                <li>
                                    <a href="javascript:;" id="tab-btn-quarter">Квартал</a>
                                </li>
                                <li>
                                    <a href="javascript:;" id="tab-btn-year">Год</a>
                                </li>
                                <li>
                                    <a href="javascript:;" id="tab-btn-all">За всё время</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="battery-graphics-main grid-dashboard grid-column-12 grid-column-gap-30">
                        <div class="battery-graphics-activity">
                            <div class="battery-graphics-main-title">
                                <p>Активность</p>
                            </div>
                            <div class="battery-graphics-activity-block">
                                <div class="canvas-wrap">
                                    <canvas class="battery-pie"></canvas>                            
                                </div>
                                <div class="battery-graphics-activity-data">
                                    <ul>
                                        <li class="data-work">
                                            <p>Работа</p>
                                            <span></span>
                                        </li>
                                        <li class="data-charge">
                                            <p>Заряд</p>
                                            <span></span>
                                        </li>
                                        <li class="data-stand">
                                            <p>Простой</p>
                                            <span></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="battery-graphics-change-level">
                            <div class="battery-graphics-main-title">
                                <p>Уровень заряда</p>
                                <div class="battery-bar-wrap">
                                    <canvas class="battery-bar"></canvas>
                                </div>
                                <div class="battery-bar-data">
                                    <ul>
                                        <li class="data-work">
                                            <p>Разряд батареи</p>
                                        </li>
                                        <li class="data-charge">
                                            <p>Заряд батареи</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="battery-graphics-cycles battery-cycles">
                            <div class="battery-graphics-main-title">
                                <p>Полных циклов</p>
                            </div>
                            <div class="battery-graphics-cycles-block">
                                <div class="object-cycles">
                                    <div class="object-cycles-value">
                                        <span></span>
                                    </div>
                                    <div class="object-cycles-text">
                                        <ul>
                                            <li class="object-cycles-text-day">
                                                <p>Полных циклов в сутки</p>
                                                <span></span>
                                            </li>
                                            <li class="object-cycles-text-partly">
                                                <p>Частичных циклов</p>
                                                <span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="grid-item fill">
                <div class="battery-title">
                    <p>Журнал событий</p>
                </div>
                <div class="v-table-wrap">
    <div class="v-table battery-event-log grid-dashboard grid-row-gap-15 fill checked-all">
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
                <div class="v-th"><div>Дата</div></div>
                <div class="v-th"><div>Событие</div></div>
                <div class="v-th"><div>Тип события</div></div>
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
                <div class="v-td"><div><span>11.05.2021</span><span>20:34</span></div></div>
                <div class="v-td"><div>Заканчивается время аренды АКБ</div></div>
                <div class="v-td"><div>Предупреждение</div></div>
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
                <div class="v-td"><div><span>11.05.2021</span><span>20:34</span></div></div>
                <div class="v-td"><div>Заканчивается время аренды АКБ</div></div>
                <div class="v-td"><div>Cообщение</div></div>
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
                <div class="v-td"><div><span>11.05.2021</span><span>20:34</span></div></div>
                <div class="v-td"><div>Заканчивается время аренды АКБ</div></div>
                <div class="v-td"><div>Предупреждение</div></div>
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
                <div class="v-td"><div><span>11.05.2021</span><span>20:34</span></div></div>
                <div class="v-td"><div>Заканчивается время аренды АКБ</div></div>
                <div class="v-td"><div>Предупреждение</div></div>
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
                <div class="v-td"><div><span>11.05.2021</span><span>20:34</span></div></div>
                <div class="v-td"><div>Заканчивается время аренды АКБ</div></div>
                <div class="v-td"><div>Сообщение</div></div>
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
                <div class="v-td"><div><span>11.05.2021</span><span>20:34</span></div></div>
                <div class="v-td"><div>Заканчивается время аренды АКБ</div></div>
                <div class="v-td"><div>Предупреждение</div></div>
            </div>
        </div>
    </div>
</div>
            </div>
            
        </div>
    </div>
</main>







<script>
BX.ready(function()
{
    var request = BX.ajax.runComponentAction('vedita:batteries.info', 'getCordBattery',
                {
                    mode:'class',
                    data:
                        {
                            battery_id: $('#battery-info-name').attr('value') 
                        }
                });

            request.then(function(response)
            {
                console.log(response);
                ymaps.ready()
                .done(function (ym) {
                    var myMap = new ym.Map('YMapsID', {
                        center: [37.025295, 55.888266],
                        zoom: 15
                    }, {
                        searchControlProvider: 'yandex#search'
                    })
                   var batts = response["data"]["arBat"];
                       var long = batts["UF_LONGITUDE"];
                       var width = batts["UF_WIDTH"];
                            myMap.geoObjects
                            .add(new ymaps.Placemark([width, long], {
                                balloonContent: 'цвет <strong>воды пляжа бонди</strong>'
                            }, {
                                preset: 'islands#icon',
                                iconColor: '#0095b6'
                            }))  
                });
            });
});
</script>