<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 28/12/2016
 * Time: 23:38
 */
function create_provincias_post_type() {
    register_post_type( 'provincias',
        array(
            'labels' => array(
                'name' => 'Provincias',
                'singular_name' => 'Provincia',
                'add_new' => 'Agregar Nuevo',
                'add_new_item' => 'Agregar Nuevas provincias',
                'edit_item' => 'Edit Provincia',
                'new_item' => 'Nuevo Provincias',
                'view_item' => 'Ver provincias',
                'search_items' => 'Buscar Provincias',
                'not_found' =>  'Nada encontrado',
                'not_found_in_trash' => 'Nada encontrado en la basura',
                'parent_item_colon' => ''
            ),

            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            //'menu_icon' => get_stylesheet_directory_uri() . '/yourimage.png',
            'rewrite' => array('slug'=>'provincias','with_front'=>FALSE),
            'capability_type' => 'post',
            'hierarchical' => true,
            'has_archive'=>true,
            'menu_position' => null,
            'supports' => array('title','editor','thumbnail','excerpt','post‐formats','author'),
            //'taxonomies'          => array( 'tipos' ),

        )
    );
}
add_action( 'init', 'create_provincias_post_type' );
flush_rewrite_rules();