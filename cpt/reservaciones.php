<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 30/12/2016
 * Time: 23:04
 */
function create_resevaciones_post_type()
{
    register_post_type('reservaciones',
        array(
            'labels' => array(
                'name' => 'Reservaciones',
                'singular_name' => 'Reservaciones',
                'add_new' => 'Agregar Nueva',
                'add_new_item' => 'Agregar Nuevas reservaciones',
                'edit_item' => 'Edit reservación',
                'new_item' => 'Nueva reservación',
                'view_item' => 'Ver reservación',
                'search_items' => 'Buscar reservaciones',
                'not_found' => 'Nada encontrado',
                'not_found_in_trash' => 'Nada encontrado en la basura',
                'parent_item_colon' => ''
            ),

            'public' => true,
            'publicly_queryable' => false,
            'show_ui' => true,
            'query_var' => true,
            //'menu_icon' => get_stylesheet_directory_uri() . '/yourimage.png',
            'rewrite' => array('slug' => 'reservaciones', 'with_front' => FALSE),
            'capability_type' => 'post',
            'hierarchical' => true,
            'has_archive' => true,
            'menu_position' => null,
            'supports' => array('title'),
            'taxonomies' => array('tipos'),

        )
    );
}

add_action('init', 'create_resevaciones_post_type');

register_taxonomy("tipos", array("reservaciones"), array(
    "hierarchical" => true,
    "label" => "Tipos",
    "publicly_queryable"=>false,
    "singular_label" => "Tipo",
    "rewrite" => true,

));

function add_reservation_meta_boxes()
{
    add_meta_box("reservation_services_meta", "Datos", "add_contact_data_reservation_meta_box", "reservaciones", "normal", "low");
}

function add_contact_data_reservation_meta_box()
{
    global $post;

    //$custom = get_post_custom( $post->ID );
    ?>
    <table>
        <?php $terms=wp_get_object_terms($post->ID,"tipos");
        foreach($terms as $term){
            if($term->slug=="cuba"){
             ?>
        <tr>
            <th>
                <h2>Datos del viaje</h2>
            </th>
        </tr>
        <tr>
            <td>
                <p>
                    <label>Destino</label>
                    <input type="text" name="destino" id="destino"
                           value="<?php echo get_post_meta($post->ID, 'destino', true) ?>"
                    >
                </p>
            </td>
            <td>
                <p>
                    <label>Fecha Inicial</label>
                    <input type="text" name="startdate" id="startdate"
                           value="<?php echo get_post_meta($post->ID, 'startdate', true) ?> ">
                </p>
            </td>
            <td>
                <p>
                    <label>Fecha Final</label>
                    <input type="text" name="finaldate" id="finaldate"
                           value="<?php echo get_post_meta($post->ID, 'finaldate', true) ?>">
                </p></td>
        </tr>

                <?php

            }
            elseif ($term->slug=="autos"){?>
                <tr>
            <th>
                <h2>Datos de Renta</h2>
            </th>
        </tr>
        <tr>
            <td>
                <p>
                    <label>Destino</label>
                    <input type="text" name="destino" id="destino"
                           value="<?php echo get_post_meta($post->ID, 'destino', true) ?>">
                </p>
            </td>
            <td>
                <p>
                    <label>Auto</label>
                    <input type="text" name="autos_renta" id="autos_renta"
                           value="<?php echo get_post_meta($post->ID, 'autos_renta', true) ?>">
                </p>
            </td>
            <td>
                <p>
                    <label>Fecha de recogida</label>
                    <input type="text" name="startdate" id="startdate"
                           value="<?php echo get_post_meta($post->ID, 'startdate', true) ?> ">
                </p>
            </td>
            <td>
                <p>
                    <label>Lugar de Recogida</label>
                    <input type="text" name="lugar_recogida" id="lugar_recogida"
                           value="<?php echo get_post_meta($post->ID, 'lugar_recogida', true) ?>">
                </p>
            </td>
            <tr>
                <td>
                <p>
                    <label>Fecha Devolución</label>
                    <input type="text" name="finaldate" id="finaldate"
                           value="<?php echo get_post_meta($post->ID, 'finaldate', true) ?>">
                </p>
                 </td>
                    <td>
                        <p>
                            <label>Lugar de Devolución</label>
                            <input type="text" name="lugar_devolucion" id="lugar_devolucion"
                                   value="<?php echo get_post_meta($post->ID, 'lugar_devolucion', true) ?>">
                        </p>
                    </td>
                    <td>
                        <p>
                            <label>Número de vuelo</label>
                            <input type="text" name="numero_vuel" id="numero_vuel"
                                   value="<?php echo get_post_meta($post->ID, 'numero_vuel', true) ?>">
                        </p>
                    </td>
                    <td>
                        <p>
                            <label>Hora de Llegada</label>
                            <input type="text" name="hora_lleg" id="hora_lleg"
                                   value="<?php echo get_post_meta($post->ID, 'hora_lleg', true) ?>">
                        </p>
                    </td>
                </tr>
        </tr>

            <?php }
            elseif (($term->slug=="reserva-hotel")||($term->slug=="internacionales"))
            { ?>
                <tr>
                    <th>
                        <h2>Datos de Reserva de Hotel</h2>
                    </th>
                </tr>
                <tr>
                    <td>
                        <p>
                            <label>Destino</label>
                            <input type="text" name="destino" id="destino"
                                   value="<?php echo get_post_meta($post->ID, 'destino', true) ?>">
                        </p>
                    </td>
                    <td>
                        <p>
                            <label>Estado</label>
                            <input type="text" name="state" id="state"
                                   value="<?php echo get_post_meta($post->ID, 'state', true) ?>">
                        </p>
                    </td>
                    <td>
                        <p>
                            <label>Fecha Inicial</label>
                            <input type="text" name="startdate" id="startdate"
                                   value="<?php echo get_post_meta($post->ID, 'startdate', true) ?> ">
                        </p>
                    </td>
                    <td>
                        <p>
                            <label>Fecha Final</label>
                            <input type="text" name="finaldate" id="finaldate"
                                   value="<?php echo get_post_meta($post->ID, 'finaldate', true) ?>">
                        </p>
                    </td>
                    <td>
                        <p>
                            <label>Hotel</label>
                            <input type="text" name="hoteles_selc" id="hoteles_selc"
                                   value="<?php echo get_post_meta($post->ID, 'hoteles_selc', true) ?>">
                        </p>
                    </td>

                    </tr>
                   <tr>
                    <td>
                        <p>
                            <label>Cantidad Personas</label>
                            <input type="text" name="cant_pers" id="cant_pers"
                                   value="<?php echo get_post_meta($post->ID, 'cant_pers', true) ?>">
                        </p>
                    </td>


                <?php $cant=get_post_meta($post->ID, 'cant_pers', true);
                 if ($cant) {
                     $acomp = $cant - 1;
                 }
                // var_dump(get_post_meta($post->ID, "acompte_nomb0" , true) );
                 if ($acomp > 0){
                     $j=0;?>
                     <tr>
                         <th>
                             <h2>Datos Acompañantes</h2>
                         </th>
                     </tr>
                     <?php
                for($i=1;$i<=$acomp;$i++)
                {


                    ?>
                    <tr>
                    <td>

                    <p>
                        <label>nombre</label>
                        <input type="text" name="acompte_nomb<?php echo $j ?>" id="acompte_nomb<?php echo $j ?>"
                               value="<?php echo get_post_meta($post->ID, "acompte_nomb".$j , true) ?>">
                    </p>
                    </td>
                        <td>
                    <p>
                        <label>Apellido</label>
                        <input type="text" name="acompte_apell<?php echo $j ?>" id="acompte_apell<?php echo $j ?>"
                               value="<?php echo get_post_meta($post->ID, "acompte_apell".$j , true) ?>">
                    </p>
                        </td>
                        <td>
                            <p>
                                <label>Pasaporte</label>
                                <input type="text" name="passp<?php echo $j ?>" id="passp<?php echo $j ?>"
                                       value="<?php echo get_post_meta($post->ID, "passp".$j , true) ?>">
                            </p>
                        </td>

                    </tr>
                    <?php
                    $j++;

                  }
                 }
                 ?>



            <?php }
        }

        ?>
                   </tr>
        <tr>
            <th>
                <h2>Datos Personales</h2>
            </th>
        </tr>
        <tr>
            <td>
                <p>
                    <label>Nombre</label>
                    <input type="text" name="contactName" id="contactName"
                           value="<?php echo get_post_meta($post->ID, 'contactName', true) ?>">
                </p>
            </td>
            <td>
                <p>
                    <label>Apellido</label>
                    <input type="text" name="lastname" id="lastname"
                           value="<?php echo get_post_meta($post->ID, 'lastname', true) ?>">
                </p>
            </td>
            <td>
                <p>
                    <label>Email</label>
                    <input type="text" name="email" id="email"
                           value="<?php echo get_post_meta($post->ID, 'email', true) ?>">
                </p>
            </td>
            <td>
                <p>
                    <label>Sexo</label>
                    <input type="text" name="sexo" id="sexo"
                           value="<?php echo get_post_meta($post->ID, 'sexo', true) ?>">
                </p></td>
        </tr>
        <tr>
            <td>
                <p>
                    <label>Fecha de Nacimiento</label>
                    <input type="text" name="fecha_nac" id="fecha_nac"
                           value="<?php echo get_post_meta($post->ID, 'fecha_nac', true) ?>">
                </p>
            </td>
            <td>
                <p>
                    <label>Dirección</label>
                    <textarea id="direccion" name="direccion"><?php echo get_post_meta($post->ID, 'direccion', true) ?></textarea>
                </p>
            </td>
            <td>
                <p>
                    <label>Cuidad</label>
                    <input type="text" name="ciudad" id="ciudad"
                           value="<?php echo get_post_meta($post->ID, 'ciudad', true) ?>">
                </p>
            </td>
            <td>
                <p>
                    <label>Estado</label>
                    <input type="text" name="estado" id="estado"
                           value="<?php echo get_post_meta($post->ID, 'estado', true) ?>">
                </p>
            </td>
        <tr>
            <td>
                <p>
                    <label>Código Postal</label>
                    <input type="text" name="zip_code" id="zip_code"
                           value="<?php echo get_post_meta($post->ID, 'zip_code', true) ?>">
                </p>
            </td>

            <td>
                <p>
                    <label>Telefono</label>
                    <input type="text" name="telefono" id="telefono"
                           value="<?php echo get_post_meta($post->ID, 'telefono', true) ?>">
                </p>
            </td>
        </tr>


        </tr>
        <?php foreach($terms as $term){
            if($term->slug == "cuba"){
         ?>
        <tr>
            <th>
                <h2>
                    Datos Pasaporte
                </h2>
            </th>
        <tr>
            <td>
                <p>
                    <label>Pasaporte Cubano</label>
                    <input type="text" name="pasaporte_cu" id="pasaporte_cu"
                           value="<?php echo get_post_meta($post->ID, 'pasaporte_cu', true) ?>">
                </p>
            </td>
            <td>
                <p>
                    <label>Fecha de Vencimiento</label>
                    <input type="text" name="fecha_vec" id="fecha_vec"
                           value="<?php echo get_post_meta($post->ID, 'fecha_vec', true) ?>">
                </p>
            </td>
            <td>
                <p>
                    <label>Pasaporte Extranjero</label>
                    <input type="text" name="pasaporte" id="pasaporte"
                           value="<?php echo get_post_meta($post->ID, 'pasaporte', true) ?>">
                </p>
            </td>
            <td>
                <p>
                    <label>Fecha de Vencimiento</label>
                    <input type="text" name="fecha_vec_ex" id="fecha_vec_ex"
                           value="<?php echo get_post_meta($post->ID, 'fecha_vec_ex', true) ?>">
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    <label>Direccion en Cuba</label>
                    <input type="text" name="direccion_cu" id="direccion_cu"
                           value="<?php echo get_post_meta($post->ID, 'direccion_cu', true) ?>">
                </p>
            </td>
            <td>
                <p>
                    <label>Provincia</label>
                    <input type="text" name="prov" id="prov"
                           value="<?php echo get_post_meta($post->ID, 'prov', true) ?>">
                </p>
            </td>

        </tr>
                <?php }
        } ?>


        </tr>

    </table>
<?php }

add_action('admin_init', 'add_reservation_meta_boxes');

add_filter("manage_edit-reservaciones_columns", "reservaciones_manager_edit_columns");
function reservaciones_manager_edit_columns($columns){
    $columns = array(
        "cb" => "<input type=\"checkbox\" />",
        "title" => "Nombre de las Reservaciones",
        "email" => "Email",
        "cat" => "Tipo de reservación",
        "date"=>"Fecha de creada"

    );
    return $columns;
}

add_action("manage_reservaciones_posts_custom_column",
    "reservaciones_manager_custom_columns");
function reservaciones_manager_custom_columns($columns){
    global $post;
    $custom = get_post_custom();
    switch ($columns)
    {

        case "email":
            echo $custom["email"][0];
            break;

        case "cat":

            echo get_the_term_list($post->ID, 'tipos');
            break;

    }

}
