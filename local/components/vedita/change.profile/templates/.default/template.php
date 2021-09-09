<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div id="popup-settings-profile" class="popup popup-settings-profile">
    <div class="popup-grid">
        <div class="popup-settings-profile-block">
            <p class="popup-settings-profile__title">Личные данные</p>
            <div class="popup-settings-profile-main">
                
                    <form id="form-group" class="popup-settings-profile-form" enctype="multipart/form-data" method="POST">
                    <div class="popup-settings-profile-img-wrap">
                        <div class="popup-settings-profile-img">
                            <img id="person_image" src="<?=$arResult["user_image"]?>" alt="">
                        </div> 
                        <label for="files" class="btn-inline">Загрузить</label>
                        <input id="files"  name="userfile" style="display: none;"  type="file">
                    </div>
                    <div class="input gray">
                        <label for="#">Фамилия</label>
                        <input id="last_name" value="<?=$arResult["user"]['LAST_NAME']?>" name="last_name" type="text" autocomplete="new-password">
                    </div>
                    <div class="input gray">
                        <label for="#">Имя</label>
                        <input id="name" name="name" value="<?=$arResult["user"]['NAME']?>" type="text" autocomplete="new-password">
                    </div>
                    <div class="input gray">
                        <label for="#">Отчество</label>
                        <input id="second_name" name="second_name" value="<?=$arResult["user"]['SECOND_NAME']?>" type="text" autocomplete="new-password">
                    </div>
                    <div class="input gray">
                        <label for="#">Город</label>
                        <input id="personal_city" name="personal_city" value="<?=$arResult["user"]['PERSONAL_CITY']?>" type="text" autocomplete="new-password">
                    </div>
                    <div class="input gray">
                        <label for="#">Телефон</label>
                        <input id="personal_phone" name="personal_phone" value="<?=$arResult["user"]['PERSONAL_PHONE']?>" type="text" autocomplete="new-password">
                    </div>
                    <div class="input gray">
                        <label for="#">E-mail</label>
                        <input id="email"  name="email" type="text" value="<?=$arResult["user"]['EMAIL']?>" autocomplete="new-password">
                    </div>

                    <div class="popup-settings-profile-form-btns">
                        <button type="button" id="changeSetting" class="btn-primary">Сохранить</button>
                        <a href="javascript:;" data-fancybox-close class="btn-inline">Отменить</a>
                    </div>
                    </form>
                </div>
            </div> 
        </div>
    <a href="javascript:;" class="closing-cross" data-fancybox-close>
        <svg>
            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#closing-cross-icon"></use>
        </svg>
    </a>
</div>
<script>
BX.ready(function()
{
    $('#files').on('change',function(){
       formData = new FormData($('#form-group')[0]);
        var request = BX.ajax.runComponentAction('vedita:change.profile', 'getPath',
                {
                    mode:'class',
                    data: formData
                });

            request.then(function(response)
            {
                $('#person_image').attr('src', response["data"]["result"]);
            });
        
    });
    $('#changeSetting').on('click',function (){
        formData = new FormData($('#form-group')[0]);
            var request = BX.ajax.runComponentAction('vedita:change.profile', 'changeSetting',
                {
                    mode:'class',
                    data: formData
                        
                });

            request.then(function(response)
            {
                console.log(response);
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


