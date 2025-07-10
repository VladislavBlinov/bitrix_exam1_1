<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>

	<!-- Hero Section -->

	<section id="hero" class="hero section dark-background">

		<!-- <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in"> -->

		<div id="hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

			<div class="container position-relative">

				<? $APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/local/templates/.default/include/main/hero.php"
					)
				); ?>

				<a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
				</a>

				<a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
				</a>

				<ol class="carousel-indicators"></ol>

			</div>

		</div>

	</section><!-- /Hero Section -->

	<!-- Featured Services Section -->
	<section id="featured-services" class="featured-services section">

		<div class="container">

			<div class="row gy-4">

				<? $APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/local/templates/.default/include/main/featured-services.php"
					)
				); ?>

			</div>

		</div>

	</section><!-- /Featured Services Section -->

	<!-- About Section -->
	<section id="about" class="about section light-background">

		<div class="container">

			<div class="row gy-4">

				<? $APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/local/templates/.default/include/main/about.php"
					)
				); ?>

			</div>
		</div>

	</section><!-- /About Section -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>