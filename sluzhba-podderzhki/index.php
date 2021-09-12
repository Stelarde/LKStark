<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Служба поддержки");
?>
<div class="main-internal">
 <main class="main">
	<?$APPLICATION->IncludeComponent(
		"bitrix:menu",
		"top",
		Array(
			"ALLOW_MULTI_SELECT" => "N",
			"CHILD_MENU_TYPE" => "top",
			"DELAY" => "N",
			"MAX_LEVEL" => "1",
			"MENU_CACHE_GET_VARS" => array(""),
			"MENU_CACHE_TIME" => "3600",
			"MENU_CACHE_TYPE" => "N",
			"MENU_CACHE_USE_GROUPS" => "Y",
			"ROOT_MENU_TYPE" => "top",
			"USE_EXT" => "N"
		)
	);?>
	<h1>Служба поддержки</h1>
	<div class="support-service grid-dashboard grid-column-12 grid-column-gap-30 fill">
    <?$APPLICATION->IncludeComponent(
	    "vedita:support.add",
	    "",
        Array()
    );?>
		<div class="grid-item tile contacts">
			<div class="tile">
				<div class="tile-top">
					<p class="tile-top__title">
						Контакты
					</p>
				</div>
				<div class="tile-main">
					<p>
						+7 475 888 88 88
					</p>
					<p>
                        <a href="mailto:service@pochta.ru">service@pochta.ru</a>
					</p>
				</div>
			</div>
		</div>
	</div>
 </main>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>