<?php

class Header_Menu_Walker extends Walker_Nav_Menu
{
	public function start_lvl(&$output, $depth = 0, $args = array())
	{
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<div class=\"sub-menu\">\n";
		$output .= "$indent\t<button class=\"sub-menu__button-back\">Назад</button>\n";
		$output .= "$indent\t<ul class=\"sub-menu__list\">\n";
	}

	public function end_lvl(&$output, $depth = 0, $args = array())
	{
		$indent = str_repeat("\t", $depth);
		$output .= "$indent\t</ul>\n";
		$output .= "$indent</button>\n";
	}

	public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
	{
		$indent = str_repeat("\t", $depth);

		$classes = empty($item->classes) ? array() : (array) $item->classes;
		$classes[] = 'sub-menu__item'; // можно сделать условным, если нужно
		$class_names = implode(' ', array_map('esc_attr', array_filter($classes)));

		$title = apply_filters('nav_menu_item_title', $item->title, $item, $depth, $args);
		$url = esc_url($item->url);

		$link_class = $depth === 0 ? 'menu__link' : 'sub-menu__link';

		$output .= "$indent<li class=\"$class_names\">";
		$output .= "<a class=\"$link_class\" href=\"$url\">$title</a>";
	}


	public function end_el(&$output, $item, $depth = 0, $args = null)
	{
		$output .= "</li>\n";
	}
}
