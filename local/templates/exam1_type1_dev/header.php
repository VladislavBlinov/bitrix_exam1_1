<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

use Bitrix\Main\Application;

require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/header.php";

?>
	<!-- Page Title -->
<? if (!$isMain): ?>

	<div class="page-title dark-background">
		<div class="container position-relative">
			<h1><? $APPLICATION->ShowTitle(false) ?> </h1>
			<p><? $APPLICATION->ShowProperty('page_text_under_title') ?></p>
			<nav class="breadcrumbs">
				<? $APPLICATION->IncludeComponent(
					"bitrix:breadcrumb",
					"bc_dev",
					array(
						"PATH" => "",
						"SITE_ID" => "s1",
						"START_FROM" => "0"
					)
				); ?>
			</nav>
		</div>
	</div><!-- End Page Title -->
<? endif; ?>