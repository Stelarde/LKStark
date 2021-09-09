<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<main class="main">
    <div class="main-internal">
    
        <h1><?=$arResult["user"]['LAST_NAME'] . ' ' . $arResult["user"]['NAME'] . ' ' . $arResult["user"]['SECOND_NAME']?></h1>
        <div class="settings-profile grid-dashboard grid-column-12 grid-column-gap-30 fill">
            <div class="grid-item tile personal-data">
                <div class="tile">
                    <div class="tile-top">
                        <p class="tile-top__title">Личные данные</p>
                        <a data-fancybox data-type="ajax" data-src="<?=SITE_TEMPLATE_PATH?>/popups/popup-settings-profile.php" href="javascript:;" class="btn-inline popup-link">Изменить</a>
                    </div>
                    <div class="tile-main"> 
                          <div class="personal-data-img">
                              <div class="personal-data-img-wrap">
                                  <img src="<?=$arResult["user_image"]?>" alt="">
                              </div>
                          </div>                     
                          <div class="personal-data-info grid-dashboard grid-column-2 grid-column-gap-30 fill">
                                <div class="personal-data-info-item">
                                    <ul>
                                        <li>
                                            <p>Фамилия</p>
                                            <p><?=$arResult["user"]['LAST_NAME']?></p>
                                        </li>
                                        <li>
                                            <p>Имя</p>
                                            <p><?=$arResult["user"]['NAME']?></p>
                                        </li>
                                        <li>
                                            <p>Отчество</p>
                                            <p><?=$arResult["user"]['SECOND_NAME']?></p>
                                        </li>
                                        <li>
                                            <p>Город</p>
                                            <p><?=$arResult["user"]['PERSONAL_CITY']?></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="personal-data-info-item">
                                    <ul>
                                        <li>
                                            <p>Телефон</p>
                                            <p><?=$arResult["user"]['PERSONAL_PHONE']?></p>
                                        </li>
                                        <li>
                                            <p>E-mail</p>
                                            <p><?=$arResult["user"]['EMAIL']?></p>
                                        </li>
                                    </ul>
                                </div>
                                
                          </div>                     
                    </div>
                </div>
            </div>
            <div class="grid-item tile organization">
                <div class="tile">
                    <div class="tile-top">
                        <p class="tile-top__title">Организация</p>
                    </div>
                    <div class="tile-main"> 
                        <div class="organization-list">
                            <ul>
                                <li>
                                    <p>Название организации</p>
                                    <p><?=$arResult["user"]['WORK_COMPANY']?></p>
                                </li>
                                <li>
                                    <p>Роль организации</p>
                                    <p><?=$arResult["user_role"]?></p>
                                </li>
                                <li>
                                    <p>Должность в организации</p>
                                    <p><?=$arResult["user"]['WORK_POSITION']?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item tile personal-recovery-password">
                <div class="tile">
                    <div class="tile-top">
                        <p class="tile-top__title">Изменение пароля</p>
                    </div>
                    <div class="tile-main"> 
                        <form action="#" class="personal-recovery-password-form">
                            <div class="input password gray">
                                <label for="#">Старый пароль</label>
                                <input id="oldPassword" type="password" placeholder="Старый пароль" autocomplete="new-password">
                                <div class="input-icon">
                                    <svg class="password-visible-icon">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#password-visible"></use>
                                    </svg>
                                    <svg class="password-hidden-icon">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#password-hidden"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="input password gray">
                                <label for="#">Новый пароль</label>
                                <input id="newPassword" type="password" placeholder="Новый пароль" autocomplete="new-password">
                                <div class="input-icon">
                                    <svg class="password-visible-icon">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#password-visible"></use>
                                    </svg>
                                    <svg class="password-hidden-icon">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#password-hidden"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="input password gray">
                                <label for="#">Подтверждение нового пароля</label>
                                <input id="confirmPassword" type="password" placeholder="Подтверждение нового пароля" autocomplete="new-password">
                                <div class="input-icon">
                                    <svg class="password-visible-icon">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#password-visible"></use>
                                    </svg>
                                    <svg class="password-hidden-icon">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#password-hidden"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="personal-recovery-password-btn">
                                <button id="changePassword" type="button" class="btn-primary">Сменить пароль</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>










<script>
BX.ready(function()
{
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