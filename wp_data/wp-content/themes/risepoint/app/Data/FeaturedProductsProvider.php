<?php

namespace App\Data;

use WP_Query;

class FeaturedProductsProvider
{
	public static function get(int $limit = 3): ?WP_Query
	{
		$ids = \wc_get_featured_product_ids();
		if (empty($ids)) {
			return null;
		}
		return new WP_Query([
			'post_type' => 'product',
			'post__in' => $ids,
			'posts_per_page' => $limit
		]);
	}
}
