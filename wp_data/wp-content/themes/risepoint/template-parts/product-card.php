<?php $image_url = get_the_post_thumbnail_url();
if (!$image_url) {
	$image_url = wc_placeholder_img_src();
} ?>
<div class="best-selling-products__item best-selling-product">
	<div class="best-selling-product__container-image">
		<a href="#" class="best-selling-product__link-image">
			<img src="<?= $image_url ?>" class="best-selling-product__image" alt="" />
		</a>
	</div>
	<a href="#" class="best-selling-product__link">
		<h2 class="best-selling-product__title"><?= esc_html(get_the_title()) ?></h2>
	</a>
	<div class="best-selling-product__price">9 400 ₽</div>
	<div class="best-selling-product__bottom">
		<a href="#" class="best-selling-product__button">Выбрать комплектацию</a>
		<a href="#" class="best-selling-product__favorite">
			<i class="best-selling-product__favorite-icon _icon-favorite"></i>
		</a>
	</div>
</div>