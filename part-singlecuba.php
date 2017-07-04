 <?php
/**
 * Include WordPress Loop
 *
 * @package WordPress
 * @subpackage IAMSocial 1.0.8
 * @since IAMSocial 1.0.0
 */
?>
 <div class="row">

     <div class=" col-xs-12 ">
         <div class="main-title">

             <figure><img id="map" class="mapa"
                                                      src=" <?php the_post_thumbnail_url() ?>"
                          data-toggle="tooltip"
                          data-action="focus"
                          data-placement="bottom"
                          title="El viajero es responsable de llevar toda la documentación necesaria para su viaje, junto a su boleto de avión. En caso que se presente al aeropuerto sin la documentación, corre el riesgo de la pérdida parcial o total del boleto de avión."/>
             </figure>
             <div id="cap1" class="col-xs-2 location1 manito capa"><img id="loc1"
                                                                        class="alignnone size-full wp-image-166 hidden-xs"
                                                                        src="<?php echo get_site_url() . '/wp-content/uploads/2016/12/LOK.png' ?>"
                                                                        alt="habana"
                                                                        width="36" height="36"
                                                                        tabindex="0"
                                                                        role="button"
                                                                        data-togle="popover"
                                                                        data-placement="top"
                                                                        data-trigger="click"
                                                                        data-html="true"
                                                                        data-original-title="<h4>Habana</h4>"
                                                                        data-content="<p>Usted puede reserva su boleto de avion hacia La Habana con nosotros a los mejores precios del mercado.</p>
                                                                                     <p><a href='#<?php echo get_the_title()?>'><button type='button' class='btn btn-primary'>Reservar</button></a></p>"/>

             </div>
             <div class="col-xs-2 location2 capa"><img id="loc2"
                                                              class="alignnone size-full wp-image-166 hidden-xs"
                                                              src="<?php echo get_site_url() . '/wp-content/uploads/2016/12/LOK.png' ?>"
                                                              alt="cienfuegos"
                                                              width="36" height="36"
                                                              tabindex="0"
                                                              role="button"
                                                              data-togle="popover"
                                                              data-placement="bottom"
                                                              data-trigger="click"
                                                              data-html="true"
                                                              data-original-title="<h4>Cienfuegos</h4>"
                                                              data-content="<p>Reserve con nosotros su viaje a Cienfuegos, le garantizamos calidad y rapides en el servicio.</p>
                                                                            <p><a href='#<?php echo get_the_title()?>'><button type='button' class='btn btn-primary'>Reservar</button></a></p>"/>
             </div>
             <div class="col-xs-2 location3 manito capa"><img id="loc3"
                                                              class="alignnone size-full wp-image-166 hidden-xs"
                                                              src="<?php echo get_site_url() . '/wp-content/uploads/2016/12/LOK.png' ?>"
                                                              alt="Santa Clara"
                                                              width="36" height="36"
                                                              tabindex="0"
                                                              role="button"
                                                              data-togle="popover"
                                                              data-placement="top"
                                                              data-trigger="click"
                                                              data-html="true"
                                                              data-original-title="<h4>Santa Clara</h4>"
                                                              data-content="<p>La mejor forma de asegurar su viaje a Santa Clara es reservando con nosotros su boleto de avion</p>
                                                                            <p><a href='#<?php echo get_the_title()?>'><button type='button' class='btn btn-primary'>Reservar</button></a></p>"/>

             </div>
             <div class="col-xs-2 location4 manito capa"><img id="loc4"
                                                              class="alignnone size-full wp-image-166 hidden-xs"
                                                              src="<?php echo get_site_url() . '/wp-content/uploads/2016/12/LOK.png' ?>"
                                                              alt="Barco hundido en la guerra spano cubana norteamericana"
                                                              width="36" height="36"
                                                              tabindex="0"
                                                              role="button"
                                                              data-togle="popover"
                                                              data-placement="top"
                                                              data-trigger="click"
                                                              data-html="true"
                                                              data-original-title="<h4>Camaguey</h4>"
                                                              data-content="<p></p>
                                                                              <p>Le ofrecemos los mejores precios de boletos de avion con destino a Camaguey.</p>
                                                                              <p><a href='#<?php echo get_the_title()?>'><button type='button' class='btn btn-primary'>Reservar</button></a></p>"/>

             </div>
             <div class="col-xs-2 location5 manito capa"><img id="loc5"
                                                              class="alignnone size-full wp-image-166 hidden-xs"
                                                              src="<?php echo get_site_url() . '/wp-content/uploads/2016/12/LOK.png' ?>"
                                                              alt="Barco hundido en la guerra spano cubana norteamericana"
                                                              width="36" height="36"
                                                              tabindex="0"
                                                              role="button"
                                                              data-togle="popover"
                                                              data-placement="top"
                                                              data-trigger="click"
                                                              data-html="true"
                                                              data-original-title="<h4>Holguin</h4>"
                                                              data-content="<p>Los mejores precios de boletos de avion a la ciudad de los parques Holguin lo tenemos nosotros.</p>
                                                                             <p><a href='#<?php echo get_the_title()?>'><button type='button' class='btn btn-primary'>Reservar</button></a></p>"/>

             </div>
             <div class="col-xs-2 location6 manito capa"><img id="loc6"
                                                              class="alignnone size-full wp-image-166 hidden-xs"
                                                              src="<?php echo get_site_url() . '/wp-content/uploads/2016/12/LOK.png' ?>"
                                                              alt="Barco hundido en la guerra spano cubana norteamericana"
                                                              width="36" height="36"
                                                              tabindex="0"
                                                              role="button"
                                                              data-togle="popover"
                                                              data-placement="bottom"
                                                              data-trigger="click "
                                                              data-html="true"
                                                              data-original-title="<h4>Santiago de cuba</h4>"
                                                              data-content="<p>Asegure su pasaje a Santiago de Cuba con rapides aqui en nuestra pagina.</p>
                                                                            <p><a href='#<?php echo get_the_title()?>'><button type='button' class='btn btn-primary'>Reservar</button></a></p>"/>

             </div>


             <script type="text/javascript">// <![CDATA[
                 function tipmap(div_id) {
                     jQuery(function () {
                         jQuery("#" + div_id).tooltip('hide');

                     });
                 }


                 function tip(div_id) {
                     jQuery(function () {
                         jQuery("#" + div_id).popover('show');

                     });
                 }
                 var popover = new Array('loc1', 'loc2', 'loc3', 'loc4', 'loc5', 'loc6');


                 tipmap('map')
                 tip('loc1');
                 tip('loc2');
                 tip('loc3');
                 tip('loc4');
                 tip('loc5');
                 tip('loc6');


                 /* for(i=0; i < popover.length; i++)
                  {
                  jQuery('#'+popover[i]).on('show.bs.popover',function()
                  {
                  //console.log(this.id != popover[i]);
                  for(i=0; i < popover.length; i++)
                  {
                  if(this.id != popover[i])
                  jQuery("#" + popover[i]).popover('toogle');
                  }
                  })
                  }*/

                 /* jQuery(document).keyup(function(e){
                  console.log(e.keyCode);
                  });*/

                 for (i = 0; i < popover.length; i++) {
                     jQuery('#' + popover[i]).on('click', function () {
                         jQuery("#" + popover[i]).popover('toggle');
                     })
                 }

                 jQuery(document).keyup(function (e) {
                     //console.log(e.keycode ? e.keycode : e.which);
                     var value = e.keycode ? e.keycode : e.which;
                     if (value === 27) {
                         for (i = 0; i < popover.length; i++) {

                             jQuery("#" + popover[i]).popover('hide');


                         }
                     }
                 });
                 // ]]>*/</script>
         </div>
     </div>

     <div  class="clearfix"></div>
     <div class="col-xs-12"><hr class="style-three"></div>

     <div class="col-xs-12">



             <h2>Formulario de Reservación</h2>
         <?php do_shortcode('[my-booking-form]') ?>

     </div>

     </div>
