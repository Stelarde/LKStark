<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<h1>Документация</h1>
<div class="grid-dashboard grid-column-12 grid-row-gap-30">

            <div class="grid-item fill">
                <div class="v-table-wrap">
    <div class="v-table documentation grid-dashboard grid-row-gap-15 fill">
        <div class="v-head">
            <div class="v-tr grid-dashboard grid-column-gap-30">
                <div class="v-th"><div>Наименование документа</div></div>
                <div class="v-th"><div>Тип документа</div></div>
                <div class="v-th"><div>Общее краткое описание</div></div>
            </div>
        </div>
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<div class="v-body" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="v-tr grid-dashboard grid-column-gap-30">
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<!-- <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"> <div class="v-td"><div><?echo $arItem["NAME"]?></div></div></a>
			<?else:?>
				<b><?echo $arItem["NAME"]?></b><br />
			<?endif;?> -->
			<div class="v-td"><div><?echo $arItem["NAME"]?></div></div>
		<?endif;?>
		<div class="v-td"><div><? echo $arItem["PROPERTIES"]["DOCUMENT_TYPE"]["VALUE"] ?></div></div>
		<div class="v-td"><div><? echo $arItem["PROPERTIES"]["DOCUMENT_DESCRIPTION"]["VALUE"] ?></div></div>
		<div class="v-td">
                    <div>
						<? $url = CFile::GetPath($arItem["PROPERTIES"]["DOCUMENT_SRC"]["VALUE"]); ?>
                        <a href="<?=$url?>" download>
                            <svg>
                                <use xlink:href= "<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#download-icon"></use>
                            </svg>
                        </a>
                    </div>
        </div>
	</div>
<?endforeach;?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
