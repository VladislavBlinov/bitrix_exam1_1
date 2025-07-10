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
 *
 *  _________________________________________________________________________
 * |    Attention!
 * |    The following comments are for system use
 * |    and are required for the component to work correctly in ajax mode:
 * |    <!-- items-container -->
 * |    <!-- pagination-container -->
 * |    <!-- component-end -->
 */

?>

<section class="portfolio section">

	<div class="container">
		<div class="row gy-4">

			<? foreach ($arResult["ITEMS"] as $arItem):

				$IMAGE = CFile::ResizeImageGet(
					$arItem['DETAIL_PICTURE']["ID"],
					array(
						'width' => 416,
						'height' => 416
					),
					BX_RESIZE_IMAGE_EXACT,
				); ?>

				<div class="col-lg-4">
					<article>
						<div class="post-img">
							<img src="<?=$IMAGE["src"]?>" alt="<?=$arItem['DETAIL_PICTURE']['ALT']?>" class="img-fluid">
						</div>
						<div class="card-body">
							<h5 class="title"><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a></h5>
							<p class="card-text"><?=$arItem['PREVIEW_TEXT']?></p>
						</div>
					</article>
				</div><!-- End list item -->
			<? endforeach; ?>
		</div>

	</div><!-- End Portfolio Container -->

</section><!-- /Portfolio List Section -->
