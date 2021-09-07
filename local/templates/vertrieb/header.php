<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?$APPLICATION->ShowMeta("description");?>
    <?$APPLICATION->ShowMeta("robots");?>
  <title><?$APPLICATION->ShowTitle()?></title>
<?
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/libs/swiper-bundle.min.css", true);
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/libs/jquery.fancybox.min.css", true);
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css", true);
?>
<?$APPLICATION->ShowHead();?>
</head>
<?$APPLICATION->ShowPanel();?>
<body>  

<header id="header" class="header">
      <div class="header-block">
        <div class="header-left">
            <div class="header-gumb">
                <a href="javascript:;" class="js-gumb">
                    <svg>
                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#gumb-icon"></use>
                    </svg>
                </a>
            </div>
            <div class="header-back-btn">
                <a href="#" class="btn-icon">
                    <svg>
                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#back-arrow-icon"></use>
                    </svg>
                    <span>Назад</span>
                </a>
            </div>
        </div>
        <div class="header-right">
              <div class="header-notifications">
                  <a href="javascript:;" class="header-notifications-btn">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#notification-icon"></use>
                        </svg>
                      <span>3</span>
                  </a>
                  <div class="overlay"></div>
                  <div class="header-notifications-popup">
                      <div class="header-notifications-popup-wrap">
                        <p class="header-notifications__title">Уведомления</p>
                        <div class="header-notifications-list">
                            <ul>
                                <li>
                                    <div class="notifications-desc">
                                        <a href="#">АКБ №12321312222</a>
                                        <p>Длительное время простоя АКБ</p>
                                    </div>
                                    <div class="notifications-date">
                                        <p>11.06.2020</p>
                                        <p>20:33</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="notifications-desc">
                                        <a href="#">АКБ №12321312222</a>
                                        <p>Длительное время простоя АКБ</p>
                                    </div>
                                    <div class="notifications-date">
                                        <p>11.06.2020</p>
                                        <p>20:33</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="notifications-desc">
                                        <a href="#">АКБ №12321312222</a>
                                        <p>Длительное время простоя АКБ</p>
                                    </div>
                                    <div class="notifications-date">
                                        <p>11.06.2020</p>
                                        <p>20:33</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="notifications-desc">
                                        <a href="#">АКБ №12321312222</a>
                                        <p>Длительное время простоя АКБ</p>
                                    </div>
                                    <div class="notifications-date">
                                        <p>11.06.2020</p>
                                        <p>20:33</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="notifications-desc">
                                        <a href="#">АКБ №12321312222</a>
                                        <p>Длительное время простоя АКБ</p>
                                    </div>
                                    <div class="notifications-date">
                                        <p>11.06.2020</p>
                                        <p>20:33</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="notifications-desc">
                                        <a href="#">АКБ №12321312222</a>
                                        <p>Длительное время простоя АКБ</p>
                                    </div>
                                    <div class="notifications-date">
                                        <p>11.06.2020</p>
                                        <p>20:33</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="notifications-desc">
                                        <a href="#">АКБ №12321312222</a>
                                        <p>Длительное время простоя АКБ</p>
                                    </div>
                                    <div class="notifications-date">
                                        <p>11.06.2020</p>
                                        <p>20:33</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="notifications-desc">
                                        <a href="#">АКБ №12321312222</a>
                                        <p>Длительное время простоя АКБ</p>
                                    </div>
                                    <div class="notifications-date">
                                        <p>11.06.2020</p>
                                        <p>20:33</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="header-info v-dropdown">
                  <a href="javascript:;" class="header-info-btn v-dropdown-btn">
                    <div class="header-info-photo">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/info-photo.jpg" alt="<?=IMAGE_ALT?>">
                    </div>
                    <div class="header-info-text">
                        <p class="header-info-text-name">Константин</p>
                        <p class="header-info-text-position">Организация</p>
                    </div>
                    <div class="header-info-arrow">
                        <span>
                          <svg>
                              <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#arrow-down"></use>
                          </svg>
                        </span>
                    </div>
                  </a>
                  <div class="header-info-menu v-dropdown-options">
                      <ul>
                          <li><a href="/settings-profile.html">Настройка аккаунта</a></li>
                          <li><a href="#">Выйти</a></li>
                      </ul>
                  </div>
              </div>
        </div>
      </div>
</header>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"left",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N"
	)
);?>

