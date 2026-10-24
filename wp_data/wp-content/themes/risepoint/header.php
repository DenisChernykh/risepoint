<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<div class="header__body">
			<div class="header__container">
				<div class="header__logo">
					<?php if (has_custom_logo()) {
						the_custom_logo();
					} else {
						bloginfo('name');
					} ?>
				</div>
				<div class="header__menu menu">
					<div class="menu__icon">
						<span></span>
					</div>

					<nav class="menu__body">

						<?php
						$args = [
							'theme_location' => 'main-menu',
							'container' => 'false',

							'menu_class' => 'menu__list',
							'walker' => new Header_Menu_Walker(),
						];

						wp_nav_menu($args);
						?>
					</nav>

				</div>
				<a href="tel:+79999999999" class="header__cull" data-da=".menu__list,991.98,last">
					<i class="header__phone-icon _icon-phone"></i>
					<span class="header__phone">+7 999 999 99 99</span>
				</a>
				<div class="header__container-cart-and-favorite" data-da=".header__container,991.98,1">
					<a href="<?php echo esc_url(YITH_WCWL()->get_wishlist_url()); ?>" class="header__button-open-favorite">
						<i class="header__button-icon header__button-icon-favorite _icon-favorite"></i>
						<span class="header__number"><?php echo esc_html(yith_wcwl_count_products()); ?></span>
					</a>
					<a href="#" class="header__button-open-cart">
						<i class="header__button-icon header__button-icon-cart _icon-cart"></i>
						<span class="header__number"><?php echo WC()->cart->get_cart_contents_count() ?></span>
					</a>
				</div>
			</div>
		</div>
	</header>
</body>

</html>