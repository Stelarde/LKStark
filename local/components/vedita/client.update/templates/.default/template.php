<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div id="popup-client" class="popup popup-client">
    <div class="popup-grid">
       <div class="popup-client-main">
            <p class="popup-client__title">Изменение данных клиента</p>
            <form action="#" class="popup-client-form" id="form-group">
                <div class="popup-client-form-logo">
                    <p class="popup-client-form-logo__title">Логотип</p>
                    <div class="popup-client-form-logo-add">
                        <div class="input-add-file">
                            <input type="file" id="add-file-img2" name="add-file-img2">
                            <div style="background-image: url(<?=$arResult['logoSrc']?>);"></div>
                            <label for="add-file-img2" class="btn-inline">Загрузить файл</label>
                            <?if (!empty($arResult['logoSrc'])):?>
                                <a href="javascript:;" class="btn-inline delete-img" style="display: block;">Удалить</a>
                            <?else:?>
                                <a href="javascript:;" class="btn-inline delete-img">Удалить</a>
                            <?endif;?>
                        </div>
                    </div>
                </div>
                <div class="popup-client-form-block">
                    <div class="input gray">
                        <label for="#">Название организации</label>
                        <input type="text" autocomplete="new-password" value="<?=$arResult['WORK_COMPANY']?>" id="work-company" name="work-company">
                    </div>
                    <div class="input gray">
                        <label for="#">Адрес</label>
                        <input type="text" autocomplete="new-password" value="<?=$arResult['UF_ADDRESS']?>" id="address" name="address">
                    </div>
                    <div class="input gray">
                        <label for="#">Контактное лицо</label>
                        <input type="text" autocomplete="new-password" value="<?=$arResult['TITLE']?>" id="title" name="title">
                    </div>
                    <div class="input gray">
                        <label for="#">Телефон</label>
                        <input type="tel" autocomplete="new-password" value="<?=$arResult['PERSONAL_PHONE']?>" id="personal-phone" name="personal-phone"> 
                    </div>
                    <div class="textarea gray">
                        <label for="#">Заметки</label>
                        <textarea name="personal-notes" id="personal-notes"><?=$arResult['PERSONAL_NOTES']?></textarea>
                    </div> 
                    <div class="popup-client-form-btn">
                        <button type="button" class="btn-primary" id="update">Сохранить</button> 
                        <a href="javascript:;" class="btn-inline" data-fancybox-close>Отменить</a>
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
    const addFileBlocks = document.querySelectorAll('.input-add-file');
    addFile(addFileBlocks);

    $(document).ready(function() {
        $('#update').on('click', function () 
        {
            var form_data = new FormData($('#form-group')[0]);

            var request = BX.ajax.runComponentAction('vedita:client.update', 'ajaxUpdateEvent', 
            {
                mode:'class',
                data: form_data
            });
            request.then(function(response)
            {
                if (response['data']['result'] && !response['data']['error'])
                {
                    location.reload();
                }
                else 
                {
                    alert('Проверьте введенные данные');
                }
            });
        });
    });
</script>
