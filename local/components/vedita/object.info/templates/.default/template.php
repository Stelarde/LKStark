<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="object-top grid-dashboard grid-column-12 grid-row-gap-20">
            <div class="grid-item fill grid-dashboard grid-column-12 grid-column-gap-30">
                <div class="object-info">
                    <div class="object-item grid-dashboard grid-column-6 grid-column-gap-30">
                        <div class="object-info-icon type-3 gray"> <!-- type-3 == object-icon-3 -->
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#object-icon-3"></use>
                            </svg>
                        </div>
						
						
                        <div class="object-info-main">
                            <div class="object-info-main-top">
                                <p id="object-info-name" value="<?=$arResult['object_ID']?>" class="object-info-main-top__title"><?=$arResult["fields"]["UF_OBJECT_NAME"]["VALUE"]?></p>
                                <div class="object-info-settings">
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
                                                    <li><a href="#">Редактировать данные</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="object-info-main-text">
                                <ul>
                                    <li class="grid-dashboard grid-column-5 grid-column-gap-30">
                                        <p>Количество батарей</p>
                                        <p>
                                            <a href="/batteries?UF_OBJECT_ID=<?=$arResult['object_ID']?>" class="link-inline"><?=$arResult["battery_amount"]?></a>
                                        </p>
                                    </li>
                                    <li class="grid-dashboard grid-column-5 grid-column-gap-30">
                                        <p>Количество батарей в аренде</p>
                                        <p>
                                            <a href="/batteries?UF_OBJECT_ID=<?=$arResult['object_ID']?>&UF_BATTERY_FOR_RENT=1" class="link-inline"><?=$arResult["battery_amount_rent"]?></a>
                                        </p>
                                    </li>
                                    <li class="grid-dashboard grid-column-5 grid-column-gap-30">
                                        <p>Клиент</p>
                                        <p>
                                            <a href="/clients/<?=$arResult["fields"]["UF_OBJECT_USER_ID"]["VALUE"]?>" class="link-inline"><?
											 $rsUser = CUser::GetByID($arResult["fields"]["UF_OBJECT_USER_ID"]["VALUE"]);
											 $arUser = $rsUser->Fetch();
											 print_r($arUser["WORK_COMPANY"]);
											 ?></a>
                                        </p>
                                    </li>
                                    <li class="grid-dashboard grid-column-5 grid-column-gap-30">
                                        <p>Контактное лицо</p>
                                        <p>
                                            <a href="#" class="link-inline"><?=$arResult["fields"]["UF_OBJECT_CONTACT_PERSON"]["VALUE"]?></a>
                                        </p>
                                    </li>
                                    <li class="grid-dashboard grid-column-5 grid-column-gap-30">
                                        <p>Телефон</p>
                                        <p><?=$arResult["fields"]["UF_OBJECT_PERSON_PHONE"]["VALUE"]?></p>
                                    </li>
                                    <li class="grid-dashboard grid-column-5 grid-column-gap-30">
                                        <p>Адрес</p>
                                        <p><?=$arResult["fields"]["UF_OBJECT_PERSON_ADRESS"]["VALUE"]?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
				<? 
				?>
                <div class="object-events">
                    <div class="object-item">
                        <p class="object-events__title">События</p>
                        <div class="object-events-list">
                            <ul>
                                <li>
                                    <p>Сообщения</p>
                                    <a href="javascript:;" class="new-notifications"><?=$arResult["fields"]["UF_OBJECT_EVENTS"]["VALUE"]?></a>
                                </li>
                                <li>
                                    <p>Предупреждения</p>
                                    <a href="javascript:;"><?=$arResult["fields"]["UF_OBJECT_WARNINGS"]["VALUE"]?></a>
                                </li>
                                <li>
                                    <p>Ошибки</p>
                                    <a href="javascript:;"><?=$arResult["fields"]["UF_OBJECT_ERRORS"]["VALUE"]?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="object-map">
                    <div id="YMapsID" class="object-item">
                        <!-- временное решение -->
                        <!-- <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae89e3588e8e5b78c9d83e145bddd634883fc81d465c12cd5f5d8411cc6bf077a&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script> -->
                        <!-- временное решение -->
                        
                        <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;coordorder=longlat&amp;apikey=02b24ed7-1927-4973-a0c4-ac6ff0ad7dce"></script>
                        
                    </div>
                </div>
            </div>
            
            <div class="grid-item fill">
                <div class="v-table-wrap">
    <div class="v-table graphics grid-dashboard grid-row-gap-15 fill">
        <div class="v-head">
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-th"><div>Вид техники</div></div>
                <div class="v-th"><div>Количество батарей</div></div>
                <div class="v-th"><div>Активность</div></div>
                <div class="v-th"><div>Полных циклов в сутки</div></div>
                <div class="v-th"><div>Остаточный ресурс</div></div>
            </div>
        </div>
        <div class="v-body">
        <? foreach($arResult['info_by_type'] as $info_by_type)
        {
            ?>
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-td"><div><?=$info_by_type['TYPE']?></div></div>
                <div class="v-td"><div><?=count($info_by_type['BATTERY_INFO'])?></div></div>
                <div class="v-td">
                    <div>
                        <div class="object-graphic grid-dashboard grid-column-5 grid-column-gap-30 fill">
                            <div class="object-graphic-wrap">
                                <div class="canvas-wrap">
                                    <canvas class="graphics-item"></canvas>                            
                                </div>
                            </div>
                            <div class="object-graphic-data">
                                <ul>
                                    <li class="data-work">
                                        <p>Работа</p>
                                        <span>32 ч 10 мин</span>
                                    </li>
                                    <li class="data-charge">
                                        <p>Заряд</p>
                                        <span>66 ч 20 мин</span>
                                    </li>
                                    <li class="data-stand">
                                        <p>Простой</p>
                                        <span>32 ч 11 мин</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="v-td">
                    <div>
                        <div class="object-cycles">
                            <div class="object-cycles-value">
                                <span>9</span>
                            </div>
                            <div class="object-cycles-text">
                                <ul>
                                    <li>
                                        <p>Полных циклов в сутки</p>
                                        <span>2,2</span>
                                    </li>
                                    <li>
                                        <p>Частичных циклов</p>
                                        <span>7</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="v-td">
                    <div>
                        <div class="object-resource-wrap">
                            <div class="object-resource-icon">
                                <div class="object-resource">
                                    <div class="object-resource-scale">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="object-resource-value">100%</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
            ?>
        </div>
    </div>
</div>





<script>
BX.ready(function()
{
    var request = BX.ajax.runComponentAction('vedita:object.info', 'getCordBaterry',
                {
                    mode:'class',
                    data:
                        {
                            object_id: $('#object-info-name').attr('value')
                        }
                });

            request.then(function(response)
            {
                ymaps.ready()
                .done(function (ym) {
                    var myMap = new ym.Map('YMapsID', {
                        center: [37.025295, 55.888266],
                        zoom: 15
                    }, {
                        searchControlProvider: 'yandex#search'
                    })
                   var batts = response["data"]["arBat"];
                   
                   batts.map(function(bat){
                      
                       var long = bat["UF_LONGITUDE"];
                       var width = bat["UF_WIDTH"];
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
    $('.addObject').on('click',function (){
            var request = BX.ajax.runComponentAction('vedita:object.add', 'addObject',
                {
                    mode:'class',
                    data:
                        {
                            src: $('#object-img').attr('src'),
                            object_name: $('#object-name').val(),
                            object_contact_person: $('#object-contact-person').val(),
                            object_contact_phone: $('#object-contact-phone').val(),
                            object_adres: $('#object-adres').val()
                        }
                });

            request.then(function(response)
            {
                if(response["data"]["status"] == false)
                {
                    alert(response["data"]["answer"]);
                }
                else
                {
                    alert("Объект добавлен");
                    location.reload();
                }
            });
    });
    $('#icon-open').on('click',function(){
        $('.popup-add-object-main').css('display','none');
        $('.popup-add-object-select-icon').css('display','block');
    });
    $('#icon-close').on('click',function(){
        $('.popup-add-object-main').css('display','block');
        $('.popup-add-object-select-icon').css('display','none');
    });
    $('#save-icon').on('click',function(){
        var src = $(":checked").parent().children('.object-icon-wrap').children('.object-icon').children('img').attr('src');
        $('#object-img').attr('src' , src);
        $('.popup-add-object-main').css('display','block');
        $('.popup-add-object-select-icon').css('display','none');
    });
    $('#changePassword').on('click',function (){
        var request = BX.ajax.runComponentAction('vedita:setting.profile', 'changePassword',
                {
                    mode:'class',
                    data:
                        {
                           oldPassword : $('#oldPassword').val(),
                           newPassword : $('#newPassword').val(),
                           confirmPassword : $('#confirmPassword').val()
                        }
                });

            request.then(function(response)
            {
                if(response["data"]["data"]["status"] == false)
                {
                    alert(response["data"]["data"]["answer"]);
                }
                else
                {
                    alert("Данные обновлены");
                    location.reload();
                }
            });
    });
});
</script>