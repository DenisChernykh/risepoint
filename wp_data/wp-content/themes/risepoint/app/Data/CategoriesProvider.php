<?php

namespace App\Data;

use WP_Query;

class CategoriesProvider
{
	public static function get(): array
	{
		$categories = get_terms([
			'taxonomy' => 'product_cat',
			'parent' => 0,
			'hide_empty' => true
		]);
		if (is_wp_error($categories) || empty($categories)) {
			return [];
		}
		return $categories;
	}
	public static function getSubcategories(int $parent_id): array
	{
		$subcategories = get_terms([
			'taxonomy' => 'product_cat',
			'parent' => $parent_id,
			'hide_empty' => true
		]);
		if (is_wp_error($subcategories) || empty($subcategories)) {
			return [];
		}
		return $subcategories;
	}
}
