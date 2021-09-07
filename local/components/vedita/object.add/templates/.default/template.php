<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div id="popup-add-object" class="popup popup-add-object">
    <div class="popup-grid">
       <div class="popup-add-object-main">
            <p class="popup-add-object__title">Добавить объект</p>
            <form action="#" class="popup-add-object-form">
                <div class="popup-add-object-icon">
                    <p class="popup-add-object-icon__title">Иконка</p>
                    <div class="popup-add-object-icon-selected">
                        <div class="object-icon-wrap">
                            <div class="object-icon">
                                <img id="object-img" src="<?=SITE_TEMPLATE_PATH?>/img/object-icons/type-1-gray.svg" alt="">
                            </div>
                        </div>
                        <a href="#" id="icon-open" class="btn-inline">Выбрать</a>
                    </div>
                </div>
                <div class="input gray">
                    <label for="#">Название объекта</label>
                    <input id="object-name" type="text" placeholder="Название объекта" autocomplete="new-password">
                </div>
                <div class="input gray">
                    <label for="#">Контактное лицо</label>
                    <input id="object-contact-person" type="text" placeholder="Контактное лицо" autocomplete="new-password">
                </div>
                <div class="input gray">
                    <label for="#">Телефон</label>
                    <input id="object-contact-phone" type="text" placeholder="Телефон" autocomplete="new-password">
                </div>
                <div class="input gray">
                    <label for="#">Адрес</label>
                    <input id="object-adres" type="text" placeholder="Адрес" autocomplete="new-password">
                </div>
                <div class="popup-add-object-form-btn">
                    <button type="submit" class="btn-primary addObject">Добавить</button>
                </div>
            </form>
       </div>

       <!-- Выбор иконки -->
       <div class="popup-add-object-select-icon" style="display: none;">
           <p class="popup-add-object__title">Выбрать иконку</p>
           <form action="#" class="select-icon-form">
                <div class="select-icon-form-list">
                    <label>
                        <input type="radio" id="1" name="select-icon-form">
                        <div class="object-icon-wrap">
                            <div class="object-icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/object-icons/type-1-gray.svg" alt="">
                            </div>
                        </div>
                    </label>
                    <label>
                        <input type="radio" id="2" name="select-icon-form">
                        <div class="object-icon-wrap">
                            <div class="object-icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/object-icons/type-2-gray.svg" alt="">
                            </div>
                        </div>
                    </label>
                    <label>
                        <input type="radio" id="3" name="select-icon-form" checked>
                        <div class="object-icon-wrap">
                            <div class="object-icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/object-icons/type-3-gray.svg" alt="">
                            </div>
                        </div>
                    </label>
                    <label>
                        <input type="radio" id="4" name="select-icon-form">
                        <div class="object-icon-wrap">
                            <div class="object-icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/object-icons/type-4-gray.svg" alt="">
                            </div>
                        </div>
                    </label>
                    <label>
                        <input type="radio" id="5" name="select-icon-form">
                        <div class="object-icon-wrap">
                            <div class="object-icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/object-icons/type-5-gray.svg" alt="">
                            </div>
                        </div>
                    </label>

                    <label>
                        <input type="radio" id="6" name="select-icon-form">
                        <div class="object-icon-wrap">
                            <div class="object-icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/object-icons/type-1-blue.svg" alt="">
                            </div>
                        </div>
                    </label>
                    <label>
                        <input type="radio" id="7" name="select-icon-form">
                        <div class="object-icon-wrap">
                            <div class="object-icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/object-icons/type-2-blue.svg" alt="">
                            </div>
                        </div>
                    </label>
                    <label>
                        <input type="radio" id="8" name="select-icon-form">
                        <div class="object-icon-wrap">
                            <div class="object-icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/object-icons/type-3-blue.svg" alt="">
                            </div>
                        </div>
                    </label>
                    <label>
                        <input type="radio" id="9" name="select-icon-form">
                        <div class="object-icon-wrap">
                            <div class="object-icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/object-icons/type-4-blue.svg" alt="">
                            </div>
                        </div>
                    </label>
                    <label>
                        <input type="radio" id="10" name="select-icon-form">
                        <div class="object-icon-wrap">
                            <div class="object-icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/object-icons/type-5-blue.svg" alt="">
                            </div>
                        </div>
                    </label>

                    <label>
                        <input type="radio" id="11" name="select-icon-form">
                        <div class="object-icon-wrap">
                            <div class="object-icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/object-icons/type-1-purple.svg" alt="">
                            </div>
                        </div>
                    </label>
                    <label>
                        <input type="radio" id="12" name="select-icon-form">
                        <div class="object-icon-wrap">
                            <div class="object-icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/object-icons/type-2-purple.svg" alt="">
                            </div>
                        </div>
                    </label>
                    <label>
                        <input type="radio" id="13" name="select-icon-form">
                        <div class="object-icon-wrap">
                            <div class="object-icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/object-icons/type-3-purple.svg" alt="">
                            </div>
                        </div>
                    </label>
                    <label>
                        <input type="radio" id="14" name="select-icon-form">
                        <div class="object-icon-wrap">
                            <div class="object-icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/object-icons/type-4-purple.svg" alt="">
                            </div>
                        </div>
                    </label>
                    <label>
                        <input type="radio" id="15" name="select-icon-form">
                        <div class="object-icon-wrap">
                            <div class="object-icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/object-icons/type-5-purple.svg" alt="">
                            </div>
                        </div>
                    </label>
                </div>
                <div class="select-icon-form-btns">
                    <button type="button" id="save-icon" class="btn-primary">Сохранить</button>
                    <a href="#" id="icon-close" class="btn-inline">Отменить</a>
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
});
</script>