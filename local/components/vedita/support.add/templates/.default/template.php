<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$this->addExternalJS("/local/components/vedita/support.add/script.js");?>
<div class="grid-item tile send-request">
	<div class="tile">
		<div class="tile-top">
			<p class="tile-top__title">
				Отправить обращение
			</p>
		</div>
		<div class="tile-main grid-dashboard grid-column-3 grid-column-gap-30 fill">
			<form enctype="multipart/form-data" class="send-request-form" method="POST" id="form-group">
				<div class="input gray">
                    <label for="theme">Тема</label> <input type="text" name="theme" id="theme" placeholder="Ваша тема" autocomplete="new-password">
				</div>
				<div class="textarea gray">
                    <label for="message">Сообщение</label> <textarea name="message" id="message" placeholder="Ваше сообщение"></textarea>
				</div>
				<div class="attath-file">
					<label for="file">ПРИКРЕПИТЬ ФАЙЛЫ</label> <input name="support-files" type="file" id="file" multiple>
				</div>
                <button type="button" id="send-message" class="btn-primary send-request-btn">Отправить</button>
			</form>
		</div>
	</div>
</div>
