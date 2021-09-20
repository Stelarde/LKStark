<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id=" " class="popup popup-changing-battery-data">
    <div class="popup-grid">
        <div class="changing-battery-data-block">
            <p class="changing-battery-data__title">Изменение данных АКБ </p>
           
            <form id="form-group" class="changing-battery-data-main" enctype="multipart/form-data" method="POST">
                <div class="changing-battery-data-image">
                    <p class="changing-battery-data-image__title">Изображение</p>
                    <div class="changing-battery-data-image-add">
                        <div class="input-add-file">
                            <input type="file" name="userfile" id="add-file-img2">
                            <?
                            $file = CFile::ResizeImageGet($arResult['battery']['UF_BATTERY_IMG'], array('width'=>65, 'height'=>65), BX_RESIZE_IMAGE_PROPORTIONAL, true); 
                            $URL = $file['src'];  
                            ?>
                            <div style="background-image: url('<?=$URL?>')"></div>
                            <label for="add-file-img2" class="btn-inline">Загрузить файл</label>
                            <a href="javascript:;" class="btn-inline delete-img">Удалить</a>
                        </div>
                    </div>
                </div>
                <div class="changing-battery-data-list">
                    <div class="v-search-wrap">
                        <div class="v-search input-wrap">
                            <div class="v-search-input input gray">
                                <label for="#">Объект</label>
                                <input type="search" name="object" value="<?=$arResult['objectName']?>">
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
                    <div class="input gray">
                        <label for="#">Комментарий</label>
                        <input type="text" name="commentObject" value="<?=$arResult['battery']['UF_COMMENT_OBJECT']?>" autocomplete="new-password">
                    </div>
                    <div class="v-search-wrap">
                        <div class="v-search input-wrap">
                            <div class="v-search-input input gray">
                                <label for="#">Вид техники</label>
                                <input type="search" name="equipment" value="<?=$arResult['battery']['UF_TECH_TYPE']?>">
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
                    <div class="input gray">
                        <label for="#">Комментарий</label>
                        <input type="text" name="commentEquipment" value="<?=$arResult['battery']['UF_COMMENT_TYPE_EQUIPMENT']?>" autocomplete="new-password">
                    </div>
                    <div class="v-search-wrap">
                        <div class="v-search input-wrap">
                            <div class="v-search-input input gray">
                                <label for="#">Клиент</label>
                                <input type="search" name="client" value="<?=$arResult['clientCompany']?>">
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
                    <div class="changing-battery-data-btns">
                        <button type="button" id="savechanges" class="btn-primary">Сохранить</button>
                        <a href="#" class="btn-inline">Отменить</a>
                    </div>
                </div>
            </form>
        </div> 
    </div>
    <a href="javascript:;" class="closing-cross" data-fancybox-close>
        <svg>
            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#closing-cross-icon"></use>
        </svg>
    </a>
</div>
<script>
    const addFileBlocksChangeBattery = document.querySelectorAll('.input-add-file');
    addFile(addFileBlocksChangeBattery);
</script>
<script>
BX.ready(function()
{
    $('#savechanges').on('click',function (){
        formData = new FormData($('#form-group')[0]);
            var request = BX.ajax.runComponentAction('vedita:changebattery.info', 'saveSettings',
                {
                    mode:'class',
                    data: formData
                        
                });

            request.then(function(response)
            {
                console.log(response);
                if(response["data"]["checkUpdateBattery"] === true)
                {
                    alert("Данные обновлены");
                    location.reload();
                }
            });
    });
});
</script>


