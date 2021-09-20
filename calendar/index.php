<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Календарь");
?>

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

            <h1>Календарь</h1>

            <div class="calendar grid-dashboard grid-column-12 grid-column-gap-30">
                <div class="calendar-main">
                    <div class="calendar-main-top grid-item grid-dashboard grid-column-7 grid-column-gap-30">
                        <div class="calendar-nav">
                            <div class="calendar-nav-arrows">
                                <a href="javascript:;" class="calendar-nav-arrow">
                                    <svg>
                                        <use xlink:href="img/sprite.svg#calendar-arrow-prev"></use>
                                    </svg>
                                </a>
                                <p>Сегодня</p>
                                <a href="javascript:;" class="calendar-nav-arrow">
                                    <svg>
                                        <use xlink:href="img/sprite.svg#calendar-arrow-next"></use>
                                    </svg>
                                </a>
                            </div>
                            <div class="calendar-nav-date">
                                <p>Июнь 2021</p>
                            </div>
                        </div>
                        <div class="calendar-tabs">
                            <ul>
                                <li>
                                    <a href="javascript:;">Неделя</a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="active">Месяц</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Квартал</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Год</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="calendar-month">
                        <div class="calendar-month-top grid-item grid-dashboard grid-column-7 grid-column-gap-30 grid-row-gap-30">
                            <div>пн</div>
                            <div>вт</div>
                            <div>ср</div>
                            <div>чт</div>
                            <div>пт</div>
                            <div>сб</div>
                            <div>вс</div>
                        </div>
                        <div class="calendar-month-main grid-item grid-dashboard grid-column-7 grid-column-gap-30 grid-row-gap-30">
                            <div class="other-month-day">
                                <a href="javascript:;">
                                    <p>31</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div class="active-day">
                                <a href="javascript:;">
                                    <p>2</p>
                                    <div>
                                        <p class="messages">Сообщений: <span>2</span></p>
                                        <p class="errors">Ошибок: <span>2</span></p>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div>
                                        <p class="messages">Сообщений: <span>2</span></p>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div>
                                        <p class="messages">Сообщений: <span>2</span></p>
                                        <p class="errors">Ошибок: <span>2</span></p>
                                        <p class="warnings">Предупреждений: <span>5</span></p>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div>
                                        <p class="errors">Неисправен test test test</p>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div class="current-day">
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p>1</p>
                                    <div></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="calendar-detailed">
                    <div class="calendar-detailed-block grid-item grid-dashboard grid-column-5 grid-column-gap-30">
                        <div class="calendar-detailed-top">
                            <p class="calendar-detailed-top__date">2 июня 2021</p>
                            <p class="calendar-detailed-top__day">среда</p>
                        </div>
                        <div class="calendar-detailed-table">
                            <div class="calendar-detailed-table-head grid-item grid-dashboard grid-column-5 grid-column-gap-30">
                                <div>Дата</div>
                                <div>Тип события</div>
                                <div>Событие</div>
                            </div>
                            <div class="calendar-detailed-table-body">
                                <div class="calendar-detailed-table-body-tr">
                                    <div>
                                        <p>2.06.2021</p>
                                        <p>20:34</p>
                                    </div>
                                    <div>
                                        <p class="error">Ошибка</p>
                                    </div>
                                    <div>
                                        <p>Неисправен датчик тока</p>
                                        <p><a href="#">АКБ №П455555555</a></p>
                                        <p>на <a href="#">Объекте</a>, <a href="#">ООО Мосгор</a></p>
                                    </div>
                                </div>
                                <div class="calendar-detailed-table-body-tr">
                                    <div>
                                        <p>2.06.2021</p>
                                        <p>20:34</p>
                                    </div>
                                    <div>
                                        <p class="message">Сообщение</p>
                                    </div>
                                    <div>
                                        <p>Неисправен датчик тока</p>
                                        <p><a href="#">АКБ №П455555555</a></p>
                                        <p>на <a href="#">Объекте</a>, <a href="#">ООО Мосгор</a></p>
                                    </div>
                                </div>
                                <div class="calendar-detailed-table-body-tr">
                                    <div>
                                        <p>2.06.2021</p>
                                        <p>20:34</p>
                                    </div>
                                    <div>
                                        <p class="message">Сообщение</p>
                                    </div>
                                    <div>
                                        <p>Неисправен датчик тока</p>
                                        <p><a href="#">АКБ №П455555555</a></p>
                                        <p>на <a href="#">Объекте</a>, <a href="#">ООО Мосгор</a></p>
                                    </div>
                                </div>
                                <div class="calendar-detailed-table-body-tr">
                                    <div>
                                        <p>2.06.2021</p>
                                        <p>20:34</p>
                                    </div>
                                    <div>
                                        <p class="message">Сообщение</p>
                                    </div>
                                    <div>
                                        <p>Неисправен датчик тока</p>
                                        <p><a href="#">АКБ №П455555555</a></p>
                                        <p>на <a href="#">Объекте</a>, <a href="#">ООО Мосгор</a></p>
                                    </div>
                                </div>
                                <div class="calendar-detailed-table-body-tr">
                                    <div>
                                        <p>2.06.2021</p>
                                        <p>20:34</p>
                                    </div>
                                    <div>
                                        <p class="message">Сообщение</p>
                                    </div>
                                    <div>
                                        <p>Неисправен датчик тока</p>
                                        <p><a href="#">АКБ №П455555555</a></p>
                                        <p>на <a href="#">Объекте</a>, <a href="#">ООО Мосгор</a></p>
                                    </div>
                                </div>
                                <div class="calendar-detailed-table-body-tr">
                                    <div>
                                        <p>2.06.2021</p>
                                        <p>20:34</p>
                                    </div>
                                    <div>
                                        <p class="message">Сообщение</p>
                                    </div>
                                    <div>
                                        <p>Неисправен датчик тока</p>
                                        <p><a href="#">АКБ №П455555555</a></p>
                                        <p>на <a href="#">Объекте</a>, <a href="#">ООО Мосгор</a></p>
                                    </div>
                                </div>
                                <div class="calendar-detailed-table-body-tr">
                                    <div>
                                        <p>2.06.2021</p>
                                        <p>20:34</p>
                                    </div>
                                    <div>
                                        <p class="message">Сообщение</p>
                                    </div>
                                    <div>
                                        <p>Неисправен датчик тока</p>
                                        <p><a href="#">АКБ №П455555555</a></p>
                                        <p>на <a href="#">Объекте</a>, <a href="#">ООО Мосгор</a></p>
                                    </div>
                                </div>
                                <div class="calendar-detailed-table-body-tr">
                                    <div>
                                        <p>2.06.2021</p>
                                        <p>20:34</p>
                                    </div>
                                    <div>
                                        <p class="message">Сообщение</p>
                                    </div>
                                    <div>
                                        <p>Неисправен датчик тока</p>
                                        <p><a href="#">АКБ №П455555555</a></p>
                                        <p>на <a href="#">Объекте</a>, <a href="#">ООО Мосгор</a></p>
                                    </div>
                                </div>
                                <div class="calendar-detailed-table-body-tr">
                                    <div>
                                        <p>2.06.2021</p>
                                        <p>20:34</p>
                                    </div>
                                    <div>
                                        <p class="message">Сообщение</p>
                                    </div>
                                    <div>
                                        <p>Неисправен датчик тока</p>
                                        <p><a href="#">АКБ №П455555555</a></p>
                                        <p>на <a href="#">Объекте</a>, <a href="#">ООО Мосгор</a></p>
                                    </div>
                                </div>
                                <div class="calendar-detailed-table-body-tr">
                                    <div>
                                        <p>2.06.2021</p>
                                        <p>20:34</p>
                                    </div>
                                    <div>
                                        <p class="message">Сообщение</p>
                                    </div>
                                    <div>
                                        <p>Неисправен датчик тока</p>
                                        <p><a href="#">АКБ №П455555555</a></p>
                                        <p>на <a href="#">Объекте</a>, <a href="#">ООО Мосгор</a></p>
                                    </div>
                                </div>
                                <div class="calendar-detailed-table-body-tr">
                                    <div>
                                        <p>2.06.2021</p>
                                        <p>20:34</p>
                                    </div>
                                    <div>
                                        <p class="message">Сообщение</p>
                                    </div>
                                    <div>
                                        <p>Неисправен датчик тока</p>
                                        <p><a href="#">АКБ №П455555555</a></p>
                                        <p>на <a href="#">Объекте</a>, <a href="#">ООО Мосгор</a></p>
                                    </div>
                                </div>
                                <div class="calendar-detailed-table-body-tr">
                                    <div>
                                        <p>2.06.2021</p>
                                        <p>20:34</p>
                                    </div>
                                    <div>
                                        <p class="message">Сообщение</p>
                                    </div>
                                    <div>
                                        <p>Неисправен датчик тока</p>
                                        <p><a href="#">АКБ №П455555555</a></p>
                                        <p>на <a href="#">Объекте</a>, <a href="#">ООО Мосгор</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>