<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="grid-item fill grid-dashboard grid-column-gap-30">
    <div class="client-info-wrap">
        <div class="client-info">
            <div class="client-info-img">
                <img src="<?=$arResult['user']['logoSrc']?>" alt="">
            </div>
            <div class="client-info-block">
                <div class="client-info-top">
                    <div class="client-info-top-title">
                        <p><?=$arResult['user']['WORK_COMPANY']?></p>
                    </div>
                    <div class="client-info-top-settings">
                         <div class="v-dropdown type-2 right">
                             <a href="javascript:;" class="v-dropdown-btn">
                             <svg>
                                 <use xlink:href="img/sprite.svg#settings-icon"></use>
                             </svg>
                             </a>
                             <div class="v-dropdown-options">
                                 <div class="v-dropdown-options-wrap">
                                     <ul>
                                         <li><a data-fancybox data-type="ajax" data-src="/popups/popup-change-client.html" href="javascript:;" class="popup-link">Редактировать данные</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                    </div>
                </div>
                <div class="client-info-main">
                    <div class="client-info-contacts">
                        <ul>
                            <li>
                                <p>Контактное лицо</p>
                                <p><a href="#"><?=$arResult['user']['TITLE']?></a></p>
                            </li>
                            <li>
                                <p>Адрес</p>
                                <p><?=$arResult['user']['UF_ADDRESS']?></p>
                            </li>
                        </ul>
                    </div>
                    <div class="client-info-mobile">
                         <ul>
                             <li>
                                 <p>Телефон</p>
                                 <p><?=$arResult['user']['PERSONAL_PHONE']?></p>
                             </li>
                         </ul>
                    </div>
                    <div class="client-info-notes">
                         <ul>
                             <li>
                                 <p>Заметки</p>
                                 <p><?=$arResult['user']['PERSONAL_NOTES']?></p>
                             </li>
                         </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
