<?php get_header();
$featured_products = $args['featured_products'];
$categories = $args['categories'];
?>
<div class="wrapper">
	<div class="limited-container">
		<section class="main-section">
			<div class="main-section__container">
				<div class="main-section__content">
					<h1 class="main-section__title">УЛИЧНАЯ МЕБЕЛЬ ДЛЯ КОМФОРТНОГО ОТДЫХА</h1>
					<div class="main-section__sale">-30%</div>
					<a href="#" class="main-section__button">Смотреть в каталог</a>
				</div>
				<img src="images/main-section/01.png" class="main-section__image" alt="" />
			</div>
		</section>

		<?php get_template_part(
			'template-parts/featured-products',
			null,
			[
				'featured_products' => $featured_products,
				'title' => 'Популярные товары',
				'show_link' => true,
				'link_text' => 'Смотреть в каталог',
				'link_url' => '/catalog/'
			]
		) ?>
		<section class="categories">
			<div class="categories__content">
				<?php if (!empty($categories)) {
					get_template_part('template-parts/categories', null, ['categories' => $categories]);
				}
				?>

			</div>
		</section>
	</div>
</div>
<?php get_footer() ?>