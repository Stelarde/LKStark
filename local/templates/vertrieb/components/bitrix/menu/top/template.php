<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<div id="submenu" class="submenu">
    <div class="submenu-block">
        <nav>
            <ul class="submenu-list grid-dashboard grid-column-gap-30">
				<?foreach($arResult as $arItem):
					if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
						continue;
				?>
					<?if($arItem["SELECTED"]):?>
						<li class="submenu-item active">
							<a href="<?=$arItem["LINK"]?>">
								<span class="submenu-item-icon">
									<svg>
										<use xlink:href="<?=$arItem["PARAMS"]["src"]?>"></use>
									</svg>
								</span>
								<span><?=$arItem["TEXT"]?></span>
							</a>
						</li>
					<?else:?>
						<li>
							<a href="<?=$arItem["LINK"]?>">
								<span class="submenu-item-icon">
									<svg>
										<use xlink:href="<?=$arItem["PARAMS"]["src"]?>"></use>
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
<?endif?>