<?php

use App\Data\FeaturedProductsProvider;
use App\Data\CategoriesProvider;

$context = [
	'featured_products' => FeaturedProductsProvider::get(3),
	'categories' => CategoriesProvider::get()
];
get_template_part('template-parts/front-page', null, $context);
