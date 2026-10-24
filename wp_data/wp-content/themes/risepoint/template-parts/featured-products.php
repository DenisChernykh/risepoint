<?php
$featured_products = $args['featured_products'] ?? null;
$title = $args['title'] ?? 'Популярные товары';
$show_link = $args['show_link'] ?? true;
$link_text = $args['link_text'] ?? 'Смотреть в каталог';
$link_url = $args['link_url'] ?? '/catalog/';
if (!$featured_products instanceof WP_Query || !$featured_products->have_posts()) {
	return;
}

?>
<section class="best-selling-products">
	<div class="best-selling-products__head">
		<h2 class="best-selling-products__title"><?= esc_html($title) ?></h2>

	</div>

	<div class="best-selling-products__content">
		<?php while ($featured_products->have_posts()): $featured_products->the_post(); ?>
			<?php get_template_part('template-parts/product-card'); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>
	<?php if ($show_link): ?>
		<a href="<?= esc_url($link_url) ?>" class="main-section__button">
			<?= esc_html($link_text) ?>
		</a>
	<?php endif; ?>
</section>