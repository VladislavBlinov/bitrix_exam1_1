<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

use Bitrix\Main\Page\Asset;

require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/boot.php";
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">

<head>

	<? $APPLICATION->ShowHead(); ?>
	<title><? $APPLICATION->ShowTitle() ?></title>


	<!-- Favicons -->
	<link href="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/favicon.png" rel="icon">
	<link href="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Vendor CSS Files -->
	<?
	Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/vendor/bootstrap/css/bootstrap.min.css");
	Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/vendor/bootstrap-icons/bootstrap-icons.css");
	Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/vendor/aos/aos.css");
	?>


	<!-- Main CSS File -->
	<?
	Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/css/main.css");
	?>

	<?
	Asset::getInstance()->addString('<meta content="width=device-width, initial-scale=1.0" name="viewport">');
	?>
</head>

<body class="scrolled">
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<header id="header" class="header d-flex align-items-center">
	<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

		<a href="/" class="logo d-flex align-items-center">
			<h1 class="sitename"><?=GetMessage('COMPANY')?></h1>
		</a>

		<nav id="navmenu" class="navmenu">

			<? $APPLICATION->IncludeComponent(
				"bitrix:menu",
				"top",
				array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "left",
					"DELAY" => "N",
					"MAX_LEVEL" => "3",
					"MENU_CACHE_GET_VARS" => array(0 => "",),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "Y",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"ROOT_MENU_TYPE" => "top",
					"USE_EXT" => "Y"
				)
			); ?>

			<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
		</nav>

	</div>
</header>

<main class="main">