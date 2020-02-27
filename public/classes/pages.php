<?php

namespace NineNineProblems;

function admin_menu(){
	add_menu_page(
		'99 Problems',
		'99 Problems',
		"manage_options",
		'99_problems',
		null,
		'dashicons-chart-area',
		5
	);

	add_submenu_page(
		'99_problems',
		'Walls',
		'Walls',
		'edit_posts',
		"edit-tags.php?taxonomy=".TAX_WALL."&post_type=".CPT_REBUILDING,
		false
	);
}
add_action( 'admin_menu', __NAMESPACE__.'\admin_menu' );