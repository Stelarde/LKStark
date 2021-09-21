<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>




<main class="main">
    <div class="main-internal">
        
    <pre>
    <?
$fullCycles = 105;
$givenAway = 34.1;
$received = 34.6;
$effectiveness = $givenAway/($received/100);
$remainingResource = (3000 - $fullCycles) * 100 / 3000;
$dateMake = "05.03.2019";
$dateStart = "07.05.2019";
$periodUse = "(2г 2мес 1д)";
$voltage = 0;
$temperature = 12;
$current = 200;
$charge_level = 80;
$chargeGraphicData = 
[
    'today' => 
    [
        'labels' => ['00:00', '02:00', '04:00', '06:00', '08:00', '10:00', '12:00', '14:00', '16:00', '18:00', '20:00', '22:00'],
        'charge' => [70,70,0,0,0,0,0,0,0,70,70,70],
        'discharge' => [0,0,40,20,50,70,30,70,40,0,0,0] ,
        'area'=> [90,100,90,80,70,60,50,40,30,70,100,100],
        'cycles' => [
            'all' => 1,
            'day' => 1,
            'partly' => 1
        ],
        'activity' => [
            'percent' => [54.2, 41.7, 4.1],
            'time' => [
              'charge' => '13 ч 0 мин',
              'discharge' => '10 ч 0 мин',
              'downtime' => '1 ч 0 мин'
            ]
        ]
    ],
    'week' => 
    [
        'labels' => ['','20 пн', ' ',  ' ', '21 вт', ' ', '22 ср', ' ', '23 чт', ' ', '24 пт', ' ', '25 сб', ' ', '26 вс'],
        'charge' => [0,70, 0 , 0 ,70,0 , 70,0],
        'discharge' => [0,46.25, 0, 0,30,0 ,45.7],
        'area'=> [100,70,30,60,100,40,100, 31],
        'cycles' => [
            'all' => 3,
            'day' => 1,
            'partly' => 3
        ],
        'activity' => [
            'percent' => [53.5, 40.3, 6.2],
            'time' => [
              'charge' => '38 ч 30 мин',
              'discharge' => '29 ч 0 мин',
              'downtime' => '3 ч 30 мин'
            ]
        ]
    ],
    'month' => 
    [
        'labels' => ['','1', '', '2', '', '3', '', '4', '', '5', '', '6', '', '7', '', '8' , '', '9', '', '10', '', '11', '', '12','', '13', '', '14', '', '15', '', '16', '', '17', '', '18', '', '19', '', '20', '', '21', '', '22', '', '23', '', '24', '', '25', '', '26', '', '27', '', '28', '', '29', '', '30', '', '31'],
        'charge' => [0,70, 0 , 0 ,70,0 , 70,0,70,0 ,70,0,70,0 , 70,0, 70,0 , 70,0, 70,0 , 70,0, 70,0 , 70,0, 70,0 , 70,0,70,0 , 70,0, 70,0 , 70,0, 70,0 , 70,0, 70,0],
        'discharge' => [0,46.25, 0, 0,30,0 ,56.25, 0,20,0 ,66.25, 0,35,0 ,26.25, 0,40,0 ,46.25, 0,34,0 ,51.25, 0,40,0 ,66.25, 0,33,0 ,36.25, 0,50,0 ,56.25, 0,33,0 ,26.25, 0,46.25,0 ,30,0 ,45.7],
        'area'=> [100,70,30,70,100,40,100,20,100,50,100,10,100,36,100,45,100,35,100,30,100,38,100,24,100,35,100,10,100,36,100,33,100,24,100,20,100,38,100,43,100,30,100,40,100,31],
        'cycles' => [   
            'all' => 20,
            'day' => 1,
            'partly' => 19
        ],
        'activity' => [
            'percent' => [53, 40.3, 6.7],
            'time' => [
              'charge' => '279 ч 45 мин',
              'discharge' => '213 ч 10 мин',
              'downtime' => '36 ч 5 мин'
            ]
        ]
    ],
    'quarter' => 
    [
        'labels' => ['','Июль','', 'Август','', 'Сентябрь'],
        'charge' => [0,70,0, 70,0, 70],
        'discharge' => [0,40,0, 50,0, 40],
        'area'=> [100,60, 35, 100, 30, 100,35],
        'cycles' => [
            'all' => 78,
            'day' => 1,
            'partly' => 60
        ],
        'activity' => [
            'percent' => [53.7, 39.1, 7.2],
            'time' => [
              'charge' => '1070 ч 25 мин',
              'discharge' => '780 ч 15 мин',
              'downtime' => '170 ч 45 мин'
            ]
        ]
    ],
    'year' => 
    [
        'labels' => ['','Январь', '','','Февраль', '','Март','', 'Апрель','', 'Май','', 'Июнь','', 'Июль','', 'Август','', 'Сентябрь','', 'Октябрь','', 'Ноябрь','', 'Декабрь'],
        'charge' => [0,70,0,0, 70,0, 70 , 0,70,0, 70,0, 70,0,70,0, 70,0, 70],
        'discharge' => [0,40,0,0, 37,0, 44,0,30,0, 45,0, 35,0,40,0, 50,0, 40],
        'area'=> [100, 60, 35, 60, 100, 30, 100,35,100, 35, 100, 30, 100,35,100, 35, 100,30,100,35],
        'cycles' => [
            'all' => 224,
            'day' => 1,
            'partly' => 210
        ],
        'activity' => [
            'percent' => [49.7, 44, 6.3],
            'time' => [
              'charge' => '3300 ч 30 мин',
              'discharge' => '2800 ч 10 мин',
              'downtime' => '510 ч 40 мин'
            ]
        ]
    ],
    'all' => 
    [
        'labels' => ['','2019','', '2020','', '2021'],
        'charge' => [0,70,0,70,0,70],
        'discharge' => [0,35, 0,30, 0,45],
        'area'=> [100,70,40,100,50,100,30],
        'cycles' => [
            'all' => 732,
            'day' => 1,
            'partly' => 680
        ],
        'activity' => [
            'percent' => [51.3, 42, 6.7],
            'time' => [
              'charge' => '12100 ч 10 мин',
              'discharge' => '9902 ч 15 мин',
              'downtime' => '1558 ч 40 мин'
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
                                        <span><?=$dateMake?></span>
                                    </div>
                                    <div>
                                        <p>Дата  начала эксплуатации</p>
                                        <div>
                                            <span><?=$dateStart?></span>
                                            <p><?=$periodUse?></p>
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
                                        <span><?=$fullCycles?></span>
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
                                <span><?=(int)$effectiveness?></span>%
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
                                    <p><span><?=$givenAway?></span> кВтч</p>                                    
                                </li>
                                <li class="battery-effectiveness-value-received">
                                    <p>Получено</p>
                                    <p><span><?=$received?></span> кВтч</p>  
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
                            <div class="object-resource-value"><?=$remainingResource?>%</div>
                        </div>
                    </div>
                    <div class="battery-data">
                        <div class="battery-data-item">
                            <p class="battery-data-item__title">Напряжение</p>
                            <p class="battery-data-item__value"><?=$voltage?> В</p>
                        </div>
                        <div class="battery-data-item">
                            <p class="battery-data-item__title">Ток</p>
                            <p class="battery-data-item__value"><?=$current?> А</p>
                        </div>
                        <div class="battery-data-item">
                            <p class="battery-data-item__title">Температура</p>
                            <p class="battery-data-item__value"><?=$temperature?> °С</p>
                        </div>
                        <div class="battery-data-item">
                            <p class="battery-data-item__title">Уровень заряда</p>
                            <p class="battery-data-item__value"><?=$charge_level?>%</p>
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