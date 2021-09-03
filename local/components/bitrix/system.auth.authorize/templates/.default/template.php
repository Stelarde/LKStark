<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?
ShowMessage($arParams["~AUTH_RESULT"]);
ShowMessage($arResult['ERROR_MESSAGE']);
?>

<main class="main">
    <div class="main-auth" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/auth-bg.jpg');"> 
        <div class="container">
            <div class="main-auth-block grid-dashboard grid-column-12 grid-column-gap-30">
                <div class="main-auth-wrapper grid-dashboard grid-column-4 grid-column-gap-30">
                    <div class="main-auth-middle">
                        <!-- Вход -->
                        <div class="login">

						<form name="form_auth" class="form-login" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
						<p class="form-title type-1">Вход</p>
							<input type="hidden" name="AUTH_FORM" value="Y" />
							<input type="hidden" name="TYPE" value="AUTH" />
							<?if ($arResult["BACKURL"] <> ''):?>
							<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
							<?endif?>
							<?foreach ($arResult["POST"] as $key => $value):?>
							<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
							<?endforeach?>
							<div class="input gray">
                                    <label for="#">Логин</label>
                                    <input type="text" placeholder="Ваш логин" autocomplete="new-password" class="bx-auth-input form-control" type="text" name="USER_LOGIN" maxlength="255" value="<?=$arResult["LAST_LOGIN"]?>">
                                </div>
							<table class="bx-auth-table">
							<div class="input password gray">
                                    <label for="#">Пароль</label>
                                    <input type="password" placeholder="Ваш пароль"  class="bx-auth-input form-control"  name="USER_PASSWORD" maxlength="255" autocomplete="off">
                                    <div class="input-icon">
                                        <svg class="password-visible-icon">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#password-visible"></use>
                                        </svg>
                                        <svg class="password-hidden-icon">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#password-hidden"></use>
                                        </svg>
                                    </div>
                                </div>
								
					<?if($arResult["SECURE_AUTH"]):?>
									<span class="bx-auth-secure" id="bx_auth_secure" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
										<div class="bx-auth-secure-icon"></div>
									</span>
									<noscript>
									<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
										<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
									</span>
									</noscript>
					<script type="text/javascript">
					document.getElementById('bx_auth_secure').style.display = 'inline-block';
					</script>
					<?endif?>
					<a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow" class="forgot-password-btn btn-inline">Забыли пароль?</a>
									
									<div class="form-login-buttons">
                                    <button type="submit" class="btn-primary login-btn name="Login" value="<?=GetMessage("AUTH_AUTHORIZE")?>">Войти</button>
                                    <a data-fancybox data-type="ajax" data-src="/popups/popup-registration.html" href="javascript:;" class="register-btn btn-inline popup-link" href="<?=$arResult["AUTH_REGISTER_URL"]?>" rel="nofollow">Зарегистрироваться</a>
                                </div>
							</table>
						</form>
						</div> 

					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<script type="text/javascript">
<?if ($arResult["LAST_LOGIN"] <> ''):?>
try{document.form_auth.USER_PASSWORD.focus();}catch(e){}
<?else:?>
try{document.form_auth.USER_LOGIN.focus();}catch(e){}
<?endif?>
</script>

<?if($arResult["AUTH_SERVICES"]):?>
	<?
$APPLICATION->IncludeComponent("bitrix:socserv.auth.form", "",
	array(
		"AUTH_SERVICES" => $arResult["AUTH_SERVICES"],
		"CURRENT_SERVICE" => $arResult["CURRENT_SERVICE"],
		"AUTH_URL" => $arResult["AUTH_URL"],
		"POST" => $arResult["POST"],
		"SHOW_TITLES" => $arResult["FOR_INTRANET"]?'N':'Y',
		"FOR_SPLIT" => $arResult["FOR_INTRANET"]?'Y':'N',
		"AUTH_LINE" => $arResult["FOR_INTRANET"]?'N':'Y',
	),
	$component,
	array("HIDE_ICONS"=>"Y")
);
?>
<?endif?>
