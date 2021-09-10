<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="robots" content=""> 
  <title>Title</title>
  <link rel="stylesheet" href="css/libs/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/libs/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>      
<header id="header" class="header">
      <div class="header-block">
        <div class="header-left">
            <div class="header-gumb">
                <a href="javascript:;" class="js-gumb">
                    <svg>
                        <use xlink:href="img/sprite.svg#gumb-icon"></use>
                    </svg>
                </a>
            </div>
            <div class="header-back-btn">
                <a href="#" class="btn-icon">
                    <svg>
                        <use xlink:href="img/sprite.svg#back-arrow-icon"></use>
                    </svg>
                    <span>Назад</span>
                </a>
            </div>
        </div>
        <div class="header-right">
              <div class="header-notifications">
                  <a href="javascript:;" class="header-notifications-btn">
                        <svg>
                            <use xlink:href="img/sprite.svg#notification-icon"></use>
                        </svg>
                      <span>3</span>
                  </a>
                  <div class="overlay"></div>
                  <div class="header-notifications-popup">
                      <div class="header-notifications-popup-wrap">
                        <p class="header-notifications__title">Уведомления</p>
                        <div class="header-notifications-list">
                            <ul>
                                <li class="error">
                                    <div class="notifications-desc">
                                        <a href="#">АКБ №12321312222</a>
                                        <p>Обрыв соединения датчика тока</p>
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
                        <img src="img/info-photo.jpg" alt="">
                    </div>
                    <div class="header-info-text">
                        <p class="header-info-text-name">Константин</p>
                        <p class="header-info-text-position">Организация</p>
                    </div>
                    <div class="header-info-arrow">
                        <span>
                          <svg>
                              <use xlink:href="img/sprite.svg#arrow-down"></use>
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

<div id="sidebar" class="sidebar">
    <div class="sidebar-block">
        <div class="sidebar-logo">
            <a href="/">
                <img src="img/logo-dark.png" alt="">
            </a>
        </div>
        <div class="sidebar-menu">
            <nav>
                <ul>
                    <li>
                        <a href="#" class="active">
                            <span class="sidebar-menu-icon">
                                <svg>
                                    <use xlink:href="img/sprite.svg#sidebar-menu-object-icon"></use>
                                </svg>
                            </span>
                            <span>Обозреватель объектов</span>
                        </a>
                    </li>
                    <li>
                        <a href="/client-list-battery.html">
                            <span class="sidebar-menu-icon">
                                <svg>
                                    <use xlink:href="img/sprite.svg#sidebar-menu-battery-icon"></use>
                                </svg>
                            </span>
                            <span>Список батарей</span>
                        </a>
                    </li>
                    <li>
                        <a href="/client-documentation.html">
                            <span class="sidebar-menu-icon">
                                <svg>
                                    <use xlink:href="img/sprite.svg#sidebar-menu-docs-icon"></use>
                                </svg>
                            </span>
                            <span>Документация</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="sidebar-menu-icon">
                                <svg>
                                    <use xlink:href="img/sprite.svg#sidebar-menu-calendar-icon"></use>
                                </svg>
                            </span>
                            <span>Календарь событий</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="sidebar-menu-icon">
                                <svg>
                                    <use xlink:href="img/sprite.svg#sidebar-menu-guide-icon"></use>
                                </svg>
                            </span>
                            <span>Руководство</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="sidebar-menu-icon">
                                <svg>
                                    <use xlink:href="img/sprite.svg#sidebar-menu-appeals-icon"></use>
                                </svg>
                            </span>
                            <span>Обращения</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dealer-clients.html">
                            <span class="sidebar-menu-icon">
                                <svg>
                                    <use xlink:href="img/sprite.svg#sidebar-menu-clients-icon"></use>
                                </svg>
                            </span>
                            <span>Клиенты</span>
                        </a>
                    </li>
                </ul>
            </nav>            
        </div>
    </div>
</div>

<main class="main">

    <div class="main-internal">
        <div id="submenu" class="submenu">
    <div class="submenu-block">
        <nav>
            <ul class="submenu-list grid-dashboard grid-column-gap-30">
                <li class="submenu-item">
                    <a href="/">
                        <span class="submenu-item-icon">
                            <svg>
                                <use xlink:href="img/sprite.svg#submenu-home-icon"></use>
                            </svg>
                        </span>
                        <span>Главная</span>
                    </a>
                </li>
                <li class="submenu-item active">
                    <a href="/support-service.html">
                        <span class="submenu-item-icon">
                            <svg>
                                <use xlink:href="img/sprite.svg#submenu-support-icon"></use>
                            </svg>
                        </span>
                        <span>Служба поддержки</span>
                    </a>
                </li>
                <li class="submenu-item">
                    <a href="/dealer-operation-history.html">
                        <span class="submenu-item-icon">
                            <svg>
                                <use xlink:href="img/sprite.svg#submenu-history-icon"></use>
                            </svg>
                        </span>
                        <span>История эксплуатации</span>
                    </a>
                </li>
                <li class="submenu-item">
                    <a href="#">
                        <span class="submenu-item-icon">
                            <svg>
                                <use xlink:href="img/sprite.svg#submenu-report-icon"></use>
                            </svg>
                        </span>
                        <span>Скачать отчёт в PDF</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

        <h1>Журнал событий</h1>

        <div class="grid-dashboard grid-column-12 grid-row-gap-30">
            <div class="grid-item fill">
                <a href="#" class="btn-secondary">Скачать</a> 
            </div>
            <div class="grid-item fill grid-dashboard grid-row-gap-15 subtitle-block type-2">
                <div class="grid-item grid-dashboard grid-column-12 grid-column-gap-30 label-filters-wrap">
                    <div class="label-filters">
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div>
                            <span>ООО МОСГОР</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                        <div class="reset-all">
                            <span>Сбросить все фильтры</span>
                            <a href="javascript:;" class="label-filters-cross"></a>
                        </div>
                    </div>
                </div>
                <div class="grid-item grid-dashboard grid-column-12 grid-column-gap-30 actions-wrap">

                    <div class="grid-item actions-search">
                        <div class="v-search-wrap">
    <div class="v-search input-wrap">
        <div class="v-search-input input white">
            <input type="search" placeholder="Номер, название батареи или имя клиента">
            <div class="input-icon">
                <svg>
                    <use xlink:href="img/sprite.svg#input-search-icon"></use>
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
                    </div>

                    <div class="grid-item actions-filters">
                        <div class="btn-filters active">
                            <div class="filter v-dropdown">
                                <a href="javascript:;" class="filter-btn v-dropdown-btn">
                                    Фильтр 
                                    <svg>
                                        <use xlink:href="img/sprite.svg#filters-icon"></use>
                                    </svg>                            
                                </a>
                                <div class="filter-block v-dropdown-options">
                                    <form action="#">
                                        <div class="filter-item">
                                            <p>По батарее</p>
                                            <div class="v-search-wrap">
                                                <div class="v-search input-wrap">
                                                    <div class="v-search-input input gray">
                                                        <input type="search" placeholder="Название или номер батареи">
                                                        <div class="input-icon">
                                                            <svg>
                                                                <use xlink:href="img/sprite.svg#input-search-icon"></use>
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
                                        </div>
                                        <div class="filter-item">
                                            <p>По объекту</p>
                                            <div class="v-search-wrap">
                                                <div class="v-search input-wrap">
                                                    <div class="v-search-input input gray">
                                                        <input type="search" placeholder="Название объекта">
                                                        <div class="input-icon">
                                                            <svg>
                                                                <use xlink:href="img/sprite.svg#input-search-icon"></use>
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
                                        </div>
                                        <div class="filter-item">
                                            <p>По виду техники</p>
                                            <div class="v-search-wrap">
                                                <div class="v-search input-wrap">
                                                    <div class="v-search-input input gray">
                                                        <input type="search">
                                                        <div class="input-icon">
                                                            <svg>
                                                                <use xlink:href="img/sprite.svg#input-search-icon"></use>
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
                                        </div>
                                        <div class="filter-item start">
                                            <p>По типу события</p>
                                            <div class="filter-checkbox-block">
                                                <div class="v-checkbox default">
                                                    <label>
                                                        <input type="checkbox">
                                                        <div></div>
                                                        <p>Сообщение</p>
                                                    </label>
                                                </div>
                                                <div class="v-checkbox default">
                                                    <label>
                                                        <input type="checkbox">
                                                        <div></div>
                                                        <p>Уведомление</p>
                                                    </label>
                                                </div>
                                                <div class="v-checkbox default">
                                                    <label>
                                                        <input type="checkbox">
                                                        <div></div>
                                                        <p>Ошибка</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filter-item">
                                            <p>По дате</p>
                                            <div class="input gray">
                                                <input type="text" autocomplete="new-password">
                                            </div>
                                        </div>
                                        <div class="filter-item">
                                            <button type="submit" class="btn-primary">Применить</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
            <div class="grid-item fill">
                <div class="v-table-wrap">
    <div class="v-table event-log grid-dashboard grid-row-gap-15 fill checked-all">
        <div class="v-head">
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-th"><div>
                    <div class="v-checkbox all">
                        <label>
                            <input type="checkbox">
                            <div></div>
                        </label>
                    </div>
                </div></div>
                <div class="v-th"><div>Дата</div></div>
                <div class="v-th"><div>Номер батареи</div></div>
                <div class="v-th"><div>Название батареи</div></div>
                <div class="v-th"><div>Объект</div></div>
                <div class="v-th"><div>Клиент</div></div>
                <div class="v-th"><div>Вид техники</div></div>
                <div class="v-th"><div>Событие</div></div>
                <div class="v-th"><div>Тип события</div></div>
            </div>
        </div>
        <div class="v-body">
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-td">
                    <div>
                        <div class="v-checkbox default">
                            <label>
                                <input type="checkbox">
                                <div></div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="v-td"><div><span>11.05.2021</span><span>20:34</span></div></div>
                <div class="v-td"><div>Номер батареи</div></div>
                <div class="v-td"><div><a href="#">Название батареи</a></div></div>
                <div class="v-td"><div><a href="#">Название объекта</a></div></div>
                <div class="v-td"><div><a href="#">ООО «Склад.ру»</a></div></div>
                <div class="v-td"><div>Погрузчик</div></div>
                <div class="v-td"><div>Заканчивается время аренды АКБ</div></div>
                <div class="v-td"><div>Предупреждение</div></div>
            </div>
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-td">
                    <div>
                        <div class="v-checkbox default">
                            <label>
                                <input type="checkbox">
                                <div></div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="v-td"><div><span>11.05.2021</span><span>20:34</span></div></div>
                <div class="v-td"><div>Номер батареи</div></div>
                <div class="v-td"><div><a href="#">Название батареи</a></div></div>
                <div class="v-td"><div><a href="#">Название объекта</a></div></div>
                <div class="v-td"><div><a href="#">ООО «Склад.ру»</a></div></div>
                <div class="v-td"><div>Погрузчик</div></div>
                <div class="v-td"><div>Заканчивается время аренды АКБ</div></div>
                <div class="v-td"><div>Сообщение</div></div>
            </div>
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-td">
                    <div>
                        <div class="v-checkbox default">
                            <label>
                                <input type="checkbox">
                                <div></div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="v-td"><div><span>11.05.2021</span><span>20:34</span></div></div>
                <div class="v-td"><div>Номер батареи</div></div>
                <div class="v-td"><div><a href="#">Название батареи</a></div></div>
                <div class="v-td"><div><a href="#">Название объекта</a></div></div>
                <div class="v-td"><div><a href="#">ООО «Склад.ру»</a></div></div>
                <div class="v-td"><div>Погрузчик</div></div>
                <div class="v-td"><div>Заканчивается время аренды АКБ</div></div>
                <div class="v-td"><div>Предупреждение</div></div>
            </div>
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-td">
                    <div>
                        <div class="v-checkbox default">
                            <label>
                                <input type="checkbox">
                                <div></div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="v-td"><div><span>11.05.2021</span><span>20:34</span></div></div>
                <div class="v-td"><div>Номер батареи</div></div>
                <div class="v-td"><div><a href="#">Название батареи</a></div></div>
                <div class="v-td"><div><a href="#">Название объекта</a></div></div>
                <div class="v-td"><div><a href="#">ООО «Склад.ру»</a></div></div>
                <div class="v-td"><div>Погрузчик</div></div>
                <div class="v-td"><div>Заканчивается время аренды АКБ</div></div>
                <div class="v-td"><div>Предупреждение</div></div>
            </div>
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-td">
                    <div>
                        <div class="v-checkbox default">
                            <label>
                                <input type="checkbox">
                                <div></div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="v-td"><div><span>11.05.2021</span><span>20:34</span></div></div>
                <div class="v-td"><div>Номер батареи</div></div>
                <div class="v-td"><div><a href="#">Название батареи</a></div></div>
                <div class="v-td"><div><a href="#">Название объекта</a></div></div>
                <div class="v-td"><div><a href="#">ООО «Склад.ру»</a></div></div>
                <div class="v-td"><div>Погрузчик</div></div>
                <div class="v-td"><div>Заканчивается время аренды АКБ</div></div>
                <div class="v-td"><div>Сообщение</div></div>
            </div>
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-td">
                    <div>
                        <div class="v-checkbox default">
                            <label>
                                <input type="checkbox">
                                <div></div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="v-td"><div><span>11.05.2021</span><span>20:34</span></div></div>
                <div class="v-td"><div>Номер батареи</div></div>
                <div class="v-td"><div><a href="#">Название батареи</a></div></div>
                <div class="v-td"><div><a href="#">Название объекта</a></div></div>
                <div class="v-td"><div><a href="#">ООО «Склад.ру»</a></div></div>
                <div class="v-td"><div>Погрузчик</div></div>
                <div class="v-td"><div>Заканчивается время аренды АКБ</div></div>
                <div class="v-td"><div>Предупреждение</div></div>
            </div>
        </div>
    </div>
</div>
            </div>
            
        </div>
    </div>
    
</main>

<script src="js/libs/jquery.min.js"></script>
<script src="js/libs/jquery.fancybox.min.js"></script>
<script src="js/libs/chart.min.js"></script>
<script src="js/libs/chartjs-plugin-datalabels.js"></script>
<script src="js/main.min.js"></script>
</body>
</html>
  <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>