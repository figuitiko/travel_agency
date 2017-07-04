<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 21/12/2016
 * Time: 23:13
 */
function create_servicios_post_type() {
    register_post_type( 'servicios',
        array(
            'labels' => array(
                'name' => 'Servicios',
                'singular_name' => 'servicio',
                'add_new' => 'Agregar Nuevo',
                'add_new_item' => 'Agregar Nuevos servicios',
                'edit_item' => 'Edit servicio',
                'new_item' => 'Nuevo servicio',
                'view_item' => 'Ver servicios',
                'search_items' => 'Buscar servicios',
                'not_found' =>  'Nada encontrado',
                'not_found_in_trash' => 'Nada encontrado en la basura',
                'parent_item_colon' => ''
            ),

            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            //'menu_icon' => get_stylesheet_directory_uri() . '/yourimage.png',
            'rewrite' => array('slug'=>'servicios','with_front'=>FALSE),
            'capability_type' => 'post',
            'hierarchical' => true,
            'has_archive'=>true,
            'menu_position' => null,
            'supports' => array('title','editor','thumbnail','excerpt','post‐formats','author'),
            //'taxonomies'          => array( 'tipos' ),

        )
    );
}
add_action( 'init', 'create_servicios_post_type' );
flush_rewrite_rules();