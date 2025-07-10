<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use Bitrix\Catalog\ProductTable;
use Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

?>

<section class="portfolio-details section">

	<div class="container">

		<div class="row gy-4">

			<div class="col-lg-8">
				<div class="portfolio-details-slider">
					<img src="<?=$arResult['DETAIL_PICTURE']['SAFE_SRC']?>"
							alt="<?=$arResult['DETAIL_PICTURE']['ALT']?>">
				</div>
			</div>

			<div class="col-lg-4">
				<div class="portfolio-info">
					<h3><?=Loc::getMessage('PROJECT');?></h3>
					<ul>
						<li><strong><?=Loc::getMessage('SERVICES');?></strong>: <?=$arResult['SECTION']['NAME']?></li>
						<li>
							<strong><?=Loc::getMessage('BUSINESS_SECTOR');?></strong>: <?=$arResult['PROPERTIES']['BUSINESS_SECTOR']['VALUE']?>
						</li>
						<li>
							<strong><?=Loc::getMessage('CLIENT_NAME');?></strong>: <?=$arResult['PROPERTIES']['CLIENT_NAME']['VALUE']?>
						</li>
					</ul>
				</div>
				<div class="portfolio-description">
					<h2><?=$arResult['NAME']?></h2>
					<p>
						<?=$arResult['DETAIL_TEXT']?>
					</p>
				</div>
				<div>
					<a href="<?=$arResult['SECTION']['SECTION_PAGE_URL']?>"><b>В список</b></a>
				</div>

			</div>

		</div>

	</div>

</section><!-- /Portfolio Details Section -->
