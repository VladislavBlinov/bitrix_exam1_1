<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
} ?>

<? if (!empty($arResult)): ?>

	<div class="services-list">

		<?
		foreach ($arResult as $arItem):?>

			<a <?=$arItem['SELECTED'] ? 'class="active"' : ''?> href="<?=$arItem["LINK"]?>">
				<i class="bi <?=$arItem['PARAMS']['menu_ico'] ?? 'bi-arrow-right-circle'?>"></i>
				<span><?=$arItem["TEXT"]?></span>
			</a>

		<? endforeach ?>

	</div>
<? endif ?>