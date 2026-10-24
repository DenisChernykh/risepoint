<?php $category = $args['category'] ?? null;
$subcategories = $args['subcategories'] ?? [] ?>
<?php $image_url = get_the_post_thumbnail_url();
if (!$image_url) {
	$image_url = wc_placeholder_img_src();
} ?>
<div class="categories__item category">
	<a href="#" class="category__container-image">
		<img src="<?= $image_url ?>" class="best-selling-product__image" alt="" />
	</a>
	<div class="category__content">
		<h2 class="category__title"><?php echo esc_html($category->name) ?></h2>
		<ul class="category__list">
			<?php foreach ($subcategories as $subcategory) : ?>
				<li class="category__item"><a href="<?php echo esc_url(get_term_link($subcategory)) ?>" class="category__link"><?= esc_html($subcategory->name) ?></a></li>
			<?php endforeach; ?>
		</ul>
		<a href="<?= esc_url(get_term_link($category)) ?> ?>" class="category__all-categories-link">Все категории</a>
	</div>
</div>