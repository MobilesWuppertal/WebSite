<?php
/*
* Plugin Name: Mobiles Wuppertal: Leitbild
* Description: Erweitert die WordPress-Taxonomie für das Leitbild von Mobiles Wuppertal.
* Version: 1.0
* Author: Arne Kamola
* Author URI: https://arne.kamola.de/
*/

function mobileswupperatl_register_taxonomy_guidingprinciple() {
	$labels = array(
		'name'				=> _x( 'Leitbild', 'taxonomy general name' ),
		'singular_name'		=> _x( 'Leitbild-Punkt', 'taxonomy singular name' ),
		'search_items'		=> __( 'Leitbild durchsuchen' ),
		'all_items'			=> __( 'Alle Leitbild-Punkte' ),
		'parent_item'		=> __( 'Eltern Leitbild-Punkt' ),
		'parent_item_colon'	=> __( 'Eltern Leitbild-Punkt:' ),
		'edit_item'			=> __( 'Leitbild-Punkt bearbeiten' ),
		'update_item'		=> __( 'Leitbild-Punkt aktualisieren' ),
		'add_new_item'		=> __( 'Leitbild-Punkt hinzuügen' ),
		'new_item_name'		=> __( 'Name des Leitbild-Punktes' ),
		'menu_name'			=> __( 'Leitbild' ),
	);
	$args = array(
		'hierarchical'		=> true, // make it hierarchical (like categories)
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_admin_column'	=> true,
		'query_var'			=> true,
		'rewrite'			=> [ 'slug' => 'leitbild' ],
	);
	$object_types = array(
		'post'
	);
	register_taxonomy( 'leitbild', $object_types, $args );
}
add_action( 'init', 'mobileswupperatl_register_taxonomy_guidingprinciple' );
