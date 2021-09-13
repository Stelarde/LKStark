<!DOCTYPE html>
<html lang="ru">
<head>
<title><?$APPLICATION->ShowTitle()?></title>
<?$APPLICATION->ShowMeta("description");?>
<?$APPLICATION->ShowMeta("robots");?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/libs/swiper-bundle.min.css", true);
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/libs/jquery.fancybox.min.css", true);
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css", true);

?>

<?$APPLICATION->ShowHead();?>

</head>

<body> 
<header id="header-login" class="header-login">
    <div class="container">
        <div class="header-login-block">
            <a href="/" class="header-login-logo">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/logo-dark.png" alt="<?=IMAGE_ALT?>">
            </a>
        </div>
    </div>
</header>