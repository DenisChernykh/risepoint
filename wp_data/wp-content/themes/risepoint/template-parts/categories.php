<?php

use App\Data\CategoriesProvider;

$categories = $args['categories'] ?? [];

if (empty($categories)) {
	return;
}


foreach ($categories as $category) {
	$subcategories = CategoriesProvider::getSubcategories($category->term_id);
	get_template_part(
		'template-parts/category-card',
		null,
		['category' => $category, 'subcategories' => $subcategories]
	);
}
