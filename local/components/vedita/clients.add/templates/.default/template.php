<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$this->addExternalJS("/local/components/vedita/support.add/script.js");?>
<div id="popup-client" class="popup popup-client">
    <div class="popup-grid">
       <div class="popup-client-main">
            <p class="popup-client__title">Добавить клиента</p>
            <form action="#" class="popup-client-form" id="form-group">
                <div class="popup-client-form-logo">
                    <p class="popup-client-form-logo__title">Логотип</p>
                    <div class="popup-client-form-logo-add">
                        <div class="input-add-file">
                            <input type="file" id="add-file-img1" name="add-file-img1">
                            <div></div>
                            <label for="add-file-img1" class="btn-inline">Загрузить файл</label>
                            <a href="javascript:;" class="btn-inline delete-img">Удалить</a>
                        </div>
                    </div>
                </div>
                <div class="popup-client-form-block">
                    <div class="input gray">
                        <label for="#">Email</label>
                        <input type="text" autocomplete="new-password" name="email"> 
                    </div>
                    <div class="input gray">
                        <label for="#">Логин</label>
                        <input type="login" autocomplete="new-password" name="login"> 
                    </div>
                    <div class="input gray">
                        <label for="#">Название организации</label>
                        <input type="text" autocomplete="new-password" name="work-company">
                    </div>
                    <div class="input gray">
                        <label for="#">Адрес</label>
                        <input type="text" autocomplete="new-password" name="address">
                    </div>
                    <div class="input gray">
                        <label for="#">Контактное лицо</label>
                        <input type="text" autocomplete="new-password" name="title">
                    </div>
                    <div class="input gray">
                        <label for="#">Телефон</label>
                        <input type="tel" autocomplete="new-password" name="personal-phone"> 
                    </div>
                    <div class="textarea gray">
                        <label for="#">Заметки</label>
                        <textarea name="personal-notes"></textarea>
                    </div> 
                    <div class="popup-client-form-btn">
                        <button type="button" class="btn-primary" id="add">Добавить</button> 
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
        $('#add').on('click', function () 
        {
            var form_data = new FormData($('#form-group')[0]);

            var request = BX.ajax.runComponentAction('vedita:clients.add', 'ajaxAddEvent', 
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
