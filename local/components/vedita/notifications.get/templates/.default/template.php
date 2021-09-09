<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$this->addExternalJS("/local/components/vedita/notifications.get/script.js");?>
<div class="header-notifications">
    <a href="javascript:;" class="header-notifications-btn">
          <svg>
              <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#notification-icon"></use>
          </svg>
        <span id="number-of-notifications">0</span>
    </a>
    <div class="overlay"></div>
    <div class="header-notifications-popup">
        <div class="header-notifications-popup-wrap">
          <p class="header-notifications__title">Уведомления</p>
          <div class="header-notifications-list">
              
          </div>
        </div>
    </div>
</div>
