<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?

ShowMessage($arParams["~AUTH_RESULT"]);

?>
<main class="main">
    <div class="main-auth" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/auth-bg.jpg');"> 
        <div class="container">
            <div class="main-auth-block grid-dashboard grid-column-12 grid-column-gap-30">
                <div class="main-auth-wrapper grid-dashboard grid-column-4 grid-column-gap-30">
                    <div class="main-auth-middle">
						<div class="recovery">
							<form name="bform" class="form-recovery" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
							<?
							if ($arResult["BACKURL"] <> '')
							{
							?>
								<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
							<?
							}
							?>
								<input type="hidden" name="AUTH_FORM" value="Y">
								<input type="hidden" name="TYPE" value="SEND_PWD">
								<p class="form-title type-1">Восстановление пароля</p>
								<div class="input gray">
									<label for="#">Логин или email</label>
									<input type="text" placeholder="Ваш логин" autocomplete="new-password" name="USER_LOGIN" value="<?=$arResult["USER_LOGIN"]?>" />
									<input type="hidden" name="USER_EMAIL" />
								</div>
								<div class="form-recovery-buttons">
										<button type="submit" name="send_account_info" value="<?=GetMessage("AUTH_SEND")?>" class="btn-primary recovery-btn">Восстановить пароль</button>
								</div>
								<p><a class="register-btn btn-inline" href="<?=$arResult["AUTH_AUTH_URL"]?>"><b><?=GetMessage("AUTH_AUTH")?></b></a></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<script type="text/javascript">
document.bform.onsubmit = function(){document.bform.USER_EMAIL.value = document.bform.USER_LOGIN.value;};
document.bform.USER_LOGIN.focus();
</script>
