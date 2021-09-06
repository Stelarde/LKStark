<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="left-menu">


</ul>
<div id="sidebar" class="sidebar">
    <div class="sidebar-block">
        <div class="sidebar-logo">
            <a href="/">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/logo-dark.png" alt="<?=IMAGE_ALT?>">
            </a>
        </div>
        <div class="sidebar-menu">
            <nav>
                <ul>
				<?
					foreach($arResult as $arItem):
						if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
							continue;
					?>
						<?if($arItem["SELECTED"]):?>
							<li>
								<a href="<?=$arItem["LINK"]?>" class="active">
									<span class="sidebar-menu-icon">
										<svg>
											<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sidebar-menu-object-icon"></use>
										</svg>
									</span>
									<span><?=$arItem["TEXT"]?></span>
								</a>
							</li>
						<?else:?>
							<li>
								<a href="<?=$arItem["LINK"]?>">
									<span class="sidebar-menu-icon">
										<svg>
											<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#sidebar-menu-object-icon"></use>
										</svg>
									</span>
									<span><?=$arItem["TEXT"]?></span>
								</a>
							</li>
						<?endif?>
					<?endforeach?>
                </ul>
            </nav>            
        </div>
    </div>
</div>
<?endif?>