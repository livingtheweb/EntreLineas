<!-- HEADER -->

<header id="masthead" class="header">



    <!-- Matches score board / Tablero con el resultado de los partidos

    ====================================================================== -->

    <!-- <section class="score-board d-md-block">

        <div class="container-fluid px-0">

            <div class="board d-flex" style="overflow-y:scroll;">

                <h5 class="board-title co_dark-blue border-right border-secondary text-center d-flex justify-content-center align-items-center my-0 p-3">
                   
                    <style>
                        span.dashicons-arrow-down-alt {
                            display:none;
                        }
                        @media screen and (max-width:768px) {
                            span.dashicons-arrow-down-alt {
                            display:inline-block;
                            }
                        }
                    </style>
                    <span>Tablero de partidos <span class="dashicons dashicons-arrow-down-alt"></span></span>

                </h5>

                <div class="container">

                    <div class="row justify-content-center flex-grow-1 h-100">



                        <?php           

                            $reg = array(

                                'category__and' => array( 5, 44 ),

                                'posts_per_page' => 1,

                                'order' => 'DESC'

                            );



                            $filter_posts = new WP_Query($reg);



                            if ($filter_posts -> have_posts()): 

                                while ($filter_posts -> have_posts()): 

                                    $filter_posts -> the_post() 

                        ?>



                        <div class="board-match border-left col-md-4 px-5 pt-1 pb-3 <?php the_field('jugando'); ?>">

                            <div class="co_light-gray d-flex align-items-center">

                                <span><?php the_field('periodo'); ?></span>

                                <svg class="pointer animated flash infinite <?php the_field('jugando'); ?>" width="12" height="11">

                                    <circle cx="6" cy="5.5" r="2.75" fill="#ff8837"/>

                                </svg>   

                            </div>

                            <div class="row flex-nowrap">

                                <div class="col-10 text-uppercase text-truncate" data-toggle="tooltip" data-placement="right" title="<?php the_field('equipo_local'); ?>"><?php the_field('equipo_local'); ?> </div>

                                <div class="col-2 text-center" ><?php the_field('marcador_local'); ?></div>

                            </div>

                            <div class="row flex-nowrap">

                                <div class="col-10 text-uppercase text-truncate" data-toggle="tooltip" data-placement="right" title="<?php the_field('equipo_visitante'); ?>"><?php the_field('equipo_visitante'); ?></div>

                                <div class="col-2 text-center"><?php the_field('marcador_visitante'); ?></div>

                            </div> 

                        </div>



                        <?php endwhile; ?>

                        <?php else: ?>

                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>



                        <?php           

                            $reg = array(

                                'category__and' => array( 6, 44 ),

                                'posts_per_page' => 1,

                                'order' => 'DESC'

                            );



                            $filter_posts = new WP_Query($reg);



                            if ($filter_posts -> have_posts()): 

                                while ($filter_posts -> have_posts()): 

                                    $filter_posts -> the_post() 

                        ?>



                        <div class="board-match border-left col-md-4 px-5 pt-1 pb-3 <?php the_field('jugando'); ?>">

                            <div class="co_light-gray d-flex align-items-center">

                                <span><?php the_field('periodo'); ?></span>

                                <svg class="pointer animated flash infinite <?php the_field('jugando'); ?>" width="12" height="11">

                                    <circle cx="6" cy="5.5" r="2.75" fill="#ff8837"/>

                                </svg>   

                            </div>

                            <div class="row flex-nowrap">

                                <div class="col-10 text-uppercase text-truncate" data-toggle="tooltip" data-placement="right" title="<?php the_field('equipo_local'); ?>"><?php the_field('equipo_local'); ?></div>

                                <div class="col-2 text-center"><?php the_field('marcador_local'); ?></div>

                            </div>

                            <div class="row flex-nowrap">

                                <div class="col-10 text-uppercase text-truncate" data-toggle="tooltip" data-placement="right" title="<?php the_field('equipo_visitante'); ?>"><?php the_field('equipo_visitante'); ?></div>

                                <div class="col-2 text-center"><?php the_field('marcador_visitante'); ?></div>

                            </div> 

                        </div>



                        <?php endwhile; ?>

                        <?php else: ?>

                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>



                        <?php           

                            $reg = array(

                                'category__and' => array( 7, 44 ),

                                'posts_per_page' => 1,

                                'order' => 'DESC'

                            );



                            $filter_posts = new WP_Query($reg);



                            if ($filter_posts -> have_posts()): 

                                while ($filter_posts -> have_posts()): 

                                    $filter_posts -> the_post() 

                        ?>



                        <div class="board-match border-left border-right col-md-4 px-5 pt-1 pb-3 <?php the_field('jugando'); ?>">

                            <div class="co_light-gray d-flex align-items-center">

                                <span><?php the_field('periodo'); ?></span>

                                <svg class="pointer animated flash infinite <?php the_field('jugando'); ?>" width="12" height="11">

                                    <circle cx="6" cy="5.5" r="2.75" fill="#ff8837"/>

                                </svg>   

                            </div>

                            <div class="row flex-nowrap">

                                <div class="col-10 text-uppercase text-truncate" data-toggle="tooltip" data-placement="right" title="<?php the_field('equipo_local'); ?>"><?php the_field('equipo_local'); ?></div>

                                <div class="col-2 text-center"><?php the_field('marcador_local'); ?></div>

                            </div>

                            <div class="row flex-nowrap">

                                <div class="col-10 text-uppercase text-truncate" data-toggle="tooltip" data-placement="right" title="<?php the_field('equipo_visitante'); ?>"><?php the_field('equipo_visitante'); ?></div>

                                <div class="col-2 text-center"><?php the_field('marcador_visitante'); ?></div>

                            </div> 

                        </div>



                        <?php endwhile; ?>

                        <?php else: ?>

                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>



                    </div>

                </div>   

            </div>    

        </div>   

    </section> -->
    <!--/score-board-->





    <!-- Top site brief news / Noticias breves en el inicio del sitio

    ==================================================================== -->

    <div id="carousel" class="carousel bg_light-blue slide d-lg-block py-lg-2" data-ride="carousel">

      

        <!-- Carousel 

        *************** -->

        <script>

          jQuery(document).ready(function(){

            jQuery('.carousel-item:first-of-type').addClass('active');

          });

        </script>



        <div class="carousel-inner d-block mx-auto w-75">



            <?php           

                $reg = array(

                    'cat' => 30,

                    'posts_per_page' => 10,

                    'order' => 'DESC'

                );



                $filter_posts = new WP_Query($reg);



                if ($filter_posts -> have_posts()): 

                    while ($filter_posts -> have_posts()): 

                        $filter_posts -> the_post() 

            ?>



            <div class="carousel-item">

                <div class="carousel-statement text-light text-center text-truncate">

                    <?php the_field('noticias_breves'); ?>

                </div>

            </div>



            <?php endwhile; ?>

            <?php else: ?>

            <?php endif; ?>

            <?php wp_reset_postdata(); ?>



        </div>



        <!-- Controls 

        **************** -->

        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">

            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            <span class="sr-only">Previous</span>

        </a>

        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">

            <span class="carousel-control-next-icon" aria-hidden="true"></span>

            <span class="sr-only">Next</span>

        </a>



    </div><!--/carousel-->



    <!-- Navbar / Barra de navegación 

    =================================== --> 



    <nav id="navbar" class="navbar bg_dark-blue navbar-expand d-flex flex-column py-5 flex-sm-row justify-content-sm-around px-md-4 pb-lg-0">



        <div class="d-flex flex-column align-items-center flex-md-row justify-content-md-around flex-md-grow-1">



            <!-- Brand / Marca 

            ********************* -->

            <div class="site-branding mb-3 mb-md-0">

                <?php

                    the_custom_logo();

                    if ( is_front_page() && is_home() ) :

                ?>

                    <h1 class="site-title">

                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

                    </h1>

                <?php

                else :

                ?>

                    <p class="site-title text-light text-center m-0"><?php bloginfo( 'name' ); ?></p>

                <?php

                endif;

                    $entre_lineas_description = get_bloginfo( 'description', 'display' );

                    if ( $entre_lineas_description || is_customize_preview() ) :

                ?>

                    <p class="site-description d-none"><?php echo $entre_lineas_description; /* WPCS: xss ok. */ ?></p>

                <?php 

                endif; 

                ?>

            </div>



            <!-- Thumbnail image / Imagen en miniatura 

            ********************************************* -->



            <?php           

                $reg = array(

                    'cat' => 25,

                    'posts_per_page' => 1,

                    'order' => 'DESC'

                );



                $filter_posts = new WP_Query($reg);



                if ($filter_posts -> have_posts()): 

                    while ($filter_posts -> have_posts()): 

                        $filter_posts -> the_post() 

            ?>



            <!-- <nav class="navbar-thumbnail d-none d-lg-block ml-lg-3 mr-xl-5">

                <h6 class="thumbnail-title co_bright-orange text-center">Perfiles</h6>

                <a class="thumbnail-link d-block position-relative mb-lg-n4" href="#profiles">

                    <div class="link-overlay d-flex justify-content-center align-items-end position-absolute">

                        <span class="overlay-title co_dark-blue text-center pb-5"><?php the_field('nombre'); ?></span>

                    </div>

                    <figure class="link-img bo_bright-orange img-fluid m-0" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>

                </a> 

            </nav> -->



            <?php endwhile; ?>

            <?php else: ?>

            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

  

            <!-- Menu (external navigation) / Menú (navegación fuera de la página) 

            ************************************************************************* -->

            <nav class="navbar-teams d-flex justify-content-center mb-2 mb-md-0 align-items-lg-center">

                <a href="<?php echo get_permalink(199); ?>" class="teams-link rounded-circle d-block position-relative mx-3">

                    <div class="link-overlay link-overlay__tomba rounded-circle text-uppercase text-center position-absolute">Tomba</div>

                    <img class="link-img rounded-circle img-fluid" src="<?php echo get_template_directory_uri()?>/assets/images/badge-tomba.svg" alt="">  

                </a>

                <a href="<?php echo get_permalink(202); ?>" class="teams-link rounded-circle d-block position-relative mx-3">  

                    <div class="link-overlay link-overlay__lepra rounded-circle text-uppercase text-center position-absolute">Lepra</div>

                    <img class="link-img rounded-circle img-fluid" src="<?php echo get_template_directory_uri()?>/assets/images/badge-lepra.png" alt="">

                </a>  

                <a href="<?php echo get_permalink(204); ?>" class="teams-link rounded-circle d-block position-relative mx-3">

                    <div class="link-overlay link-overlay__lobo rounded-circle text-uppercase text-center position-absolute">Lobo</div>

                    <img class="link-img rounded-circle img-fluid" src="<?php echo site_url() ?>/wp-content/uploads/2019/03/badge-lobo.png" alt="">

                </a>  

            </nav>

        

        </div>

          

        <div class="d-none d-sm-flex flex-sm-column-reverse pr-md-5 ml-md-5 flex-lg-row justify-content-lg-around align-self-lg-start flex-lg-grow-1 pr-lg-0 ml-lg-0">



            <!-- Menu (internal navigation) / Menú (navegación interna) 

            ************************************************************** -->

            <nav class="navbar-menu d-flex flex-column mt-sm-5 mt-md-4 mt-lg-5 pt-lg-3">

                <span class="menu-date co_light-gray pl-2 mb-2 mb-lg-3"><?php echo date('l j \d\e F \d\e Y') ?></span>

                <ul class="navbar-nav ml-0">

                    <!-- <li class="nav-item item__profiles active mx-2"> 

                        <a class="nav-link link__scroll text-light text-uppercase px-0" href="#profiles">Perfiles</a> 

                    </li> -->

                    <li class="nav-item item__multimedia mx-2"> 

                        <a class="nav-link link__scroll text-light text-uppercase px-0" href="#multimedia">Multimedia</a> 

                    </li>

                    <li class="nav-item item__contact mx-2"> 

                        <a class="nav-link link__scroll text-uppercase text-light px-0" href="#footer">Contacto</a> 

                    </li>

                </ul>

            </nav>  



            <!-- Menu (social media links) / Menú (enlaces a redes sociales) 

            ******************************************************************* -->

            <nav class="navbar-social">

                <div class="social-claim text-light pl-2 mb-3 w-100 mb-md-2 mt-md-2 pl-lg-0 mt-lg-0 text-lg-center">

                ¡Seguinos!</div>

                <div class="social-icons d-flex">

                    <a class="icon-link mx-2" href="https://www.instagram.com/p/BAC8ycSkQZG" target="_blank">

                        <img class="icon-img img-fluid" src="<?php echo get_template_directory_uri( ); ?>/assets/images/icon-instagram.svg" alt="">

                    </a>

                    <a class="icon-link mx-2" href="https://twitter.com/entrelineas_mza" target="_blank">

                        <img class="icon-img img-fluid" src="<?php echo get_template_directory_uri( ); ?>/assets/images/icon-twitter.svg" alt="">

                    </a>

                    <a class="icon-link mx-2" href="https://www.facebook.com/entrelineasmza" target="_blank">

                        <img class="icon-img img-fluid" src="<?php echo get_template_directory_uri( ); ?>/assets/images/icon-facebook.svg" alt="">

                    </a>

                    <a class="icon-link mx-2" href="https://www.youtube.com/channel/UC8snr4_uNuxCT09MH0Qxxjg" target="_blank">

                        <img class="icon-img img-fluid" src="<?php echo get_template_directory_uri( ); ?>/assets/images/icon-youtube.svg" alt="">

                    </a>
                    <script type="text/javascript">
                        jQuery(document).ready(function() {

                            // Search -----------------------------
                            jQuery(".js-searchBar").click(function () {
                                jQuery('.searchBar').addClass("open");
                                jQuery('#search').focus();
                            });
                            jQuery(".js-searchClose").click(function () {
                                jQuery('.searchBar').removeClass("open");
                            });
                        });
                    </script>

                    <a href="javascript:void(0);" class="js-searchBar">
                        <span class="dashicons dashicons-search" style="
                            color: white;
                            font-size: 26px;">
                        </span>
                    </a>

                </div>  

            </nav> 



        </div>

    </nav><!--/navbar-->   



    <!-- Nav scroll (utility navbar that comes out when the user is scrolling) / 

     Nav scroll (navbar utilitario que aparece cuando el usuario hace scroll)

    ================================================================================ -->

    <nav id="nav-scroll" class="nav-scroll bg_dark-blue">

        <div class="d-flex justify-content-between px-3 px-sm-5">

          

            <!-- Brand / Marca 

            ********************* -->

            <div class="scroll-brand">  

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

                    <img class="brand-img" src="<?php echo site_url() ?>/wp-content/uploads/2019/03/brand-monogram.png" alt="">

                </a>

            </div>



            <!-- Menu (external navigation) / Menú (navegación fuera de la página) 

            ************************************************************************* -->

            <nav class="scroll-teams align-self-end d-none d-sm-block">

                <ul class="nav-menu d-flex p-0 ml-0 mb-1">

                    <li class="nav-item"> 

                        <a class="nav-link text-light" href="<?php echo get_permalink(199); ?>">Tomba</a> 

                    </li>

                    <li class="nav-item"> 

                        <a class="nav-link text-light" href="<?php echo get_permalink(202); ?>">Lepra</a> 

                    </li>

                    <li class="nav-item"> 

                        <a class="nav-link text-light" href="<?php echo get_permalink(204); ?>">Lobo</a> 

                    </li>

                </ul>

            </nav>



            <!-- Menu (internal navigation) / Menú (navegación en el interior de la página) 

            ********************************************************************************** -->

            <nav id="scroll-menu" class="scroll-menu align-self-end">

                <ul class="nav-menu d-flex p-0 ml-0 mb-2">

                    <li class="nav-item item__profiles mx-2"> 

                        <a class="nav-link link__scroll marked text-light text-uppercase px-0" href="#profiles">Perfiles</a> 

                    </li>

                    <li class="nav-item item__multimedia mx-2"> 

                        <a class="nav-link link__scroll text-light text-uppercase px-0" href="#multimedia">Multimedia</a> 

                    </li>

                    <li class="nav-item item__contact mx-2"> 

                        <a class="nav-link link__scroll text-light text-uppercase px-0" href="#footer">Contacto</a> 

                    </li>

                </ul>

            </nav>    



        </div>

    </nav><!--/nav-scroll-->  



    <!-- Cover / Portada 

    ====================== -->

    <section id="cover" class="cover">

        <div class="container-fluid">

            <div class="row mt-5">

                <div class="left col-12 col-lg-8">



                    <!-- Main news / Noticia principal 

                    ************************************* -->

                    

                    <?php 

                        $reg = array(

                            'category__and' => array( 4, 12, 38 ), 

                            'posts_per_page' => 1

                        );



                        $filter_posts = new WP_Query($reg);



                        if ($filter_posts -> have_posts()): 

                            while ($filter_posts -> have_posts()): 

                                $filter_posts -> the_post() 

                    ?>



                    <article class="cover-main">

                        <h6 class="main-lead co_bright-orange">   

                            <!-- Código para que devuelva el Tag como texto plano en vez de un link -->

                            <?php $tags = get_the_tags(); 

                                if ($tags) {                 

                                    foreach( $tags as $tag ) {

                                        echo $tag->name;

                                    }            

                                }

                            ?>

                        </h6>

                        <h2 class="main-head mt-3 mb-0">

                            <a class="co_dark-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                        </h2>

                        <h4 class="main-subhead mt-2 mb-3 mb-sm-0 mb-md-4"><?php the_excerpt(); ?></h4>

                        <div class="photo-owner text-right"><?php the_field('creditos'); ?></div>

                        <a class="main-link d-block" href="<?php the_permalink(); ?>">

                            <figure class="main-image home-image img-fluid m-0" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center"></figure>

                        </a>  

                    </article>



                    <?php endwhile; ?>

                    <?php else: ?>

                    <?php endif; ?>

                    <?php wp_reset_postdata(); ?>

                    



                    <!-- Statics (last scores and next matches) / 

                         Estadísticas (últimos resultados y próximos partidos) 

                    ************************************************************* -->

                    <aside class="cover-statics mt-5">

                        <div class="d-flex flex-column justify-content-center align-items-center flex-sm-row flex-sm-wrap align-items-sm-start justify-content-md-between justify-content-lg-center justify-content-xl-between">



                            <!-- TOMBA STATICS / ESTADÍSTICAS TOMBA -->



                            <?php 

                                $reg = array(

                                    'category__and' => array( 5, 43 ),

                                    'posts_per_page' => 1

                                );



                                $filter_posts = new WP_Query($reg);



                                if ($filter_posts -> have_posts()): 

                                    while ($filter_posts -> have_posts()): 

                                        $filter_posts -> the_post()   

                            ?>

                          

                            <!-- Box containing the statistical information / Cuadro que contiene las estadísticas -->  

                            <div class="statics-box bo_dark-blue px-4 pb-2 mb-3 mr-sm-2 mr-md-0 mr-lg-2 mr-xl-0">

                                <!-- Last scores / Últimos resultados -->

                                <div class="match-box bo_bright-orange mb-3">

                                    <h6 class="box-title text-truncate pt-3">

                                        <span class="text-uppercase d-inline-block pr-2">

                                            <?php the_field('torneo_partido_jugado'); ?></span> 

                                            <?php the_field('fecha_partido_jugado'); ?>

                                    </h6>

                                    <div class="box-match d-flex justify-content-around pt-3">

                                        <div class="d-flex flex-column align-items-center">           

                                            <img class="team-badge img-fluid" width="90" height="90" src="<?php the_field('escudo_equipo_local');?>" alt="">

                                            <div class="match-score">

                                                <?php the_field('resultado_equipo_local'); ?>

                                            </div>

                                        </div>

                                        <div class="d-flex flex-column align-items-center">

                                            <img class="team-badge img-fluid" width="90" height="90" src="<?php the_field('escudo_equipo_visitante'); ?>" alt="">

                                            <div class="match-score">

                                                <?php the_field('resultado_equipo_visitante'); ?>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="box-link text-uppercase text-center mb-2">

                                        <a data-toggle="modal" data-target="#matchHighlights_1">

                                            <span class="co_bright-orange">Resumen</span>

                                        </a>

                                    </div>

                                </div>

                                <!-- Next matches / Próximos partidos -->

                                <div class="match-box bo_bright-orange mb-3">

                                    <h6 class="box-title text-truncate">

                                        <span class="text-uppercase d-inline-block pr-2">

                                            <?php the_field('torneo_partido_1'); ?></span> 

                                            <?php the_field('fecha_partido_1'); ?>

                                    </h6>

                                    <div class="box-match text-truncate mb-2">

                                            <?php the_field('local_partido_1'); ?> - <?php the_field('visitante_partido_1'); ?>

                                    </div>

                                </div>

                                <div class="match-box bo_bright-orange mb-3 d-none d-md-block">

                                    <h6 class="box-title text-truncate">

                                        <span class="text-uppercase d-inline-block pr-2">

                                            <?php the_field('torneo_partido_2'); ?></span> 

                                            <?php the_field('fecha_partido_2'); ?>

                                    </h6>

                                    <div class="box-match text-truncate mb-2">

                                            <?php the_field('local_partido_2'); ?> - <?php the_field('visitante_partido_2'); ?>

                                    </div>

                                </div>

                                <div class="match-box bo_bright-orange mb-3 d-none d-md-block">

                                    <h6 class="box-title text-truncate">

                                        <span class="text-uppercase d-inline-block pr-2">

                                            <?php the_field('torneo_partido_3'); ?></span> 

                                            <?php the_field('fecha_partido_3'); ?>

                                    </h6>

                                    <div class="box-match text-truncate mb-2">

                                            <?php the_field('local_partido_3'); ?> - <?php the_field('visitante_partido_3'); ?>

                                    </div>

                                </div>

                            </div><!--/statics-box-->



                            <?php endwhile; ?>                      

                            <?php endif; ?>

                            <?php wp_reset_postdata(); ?>





                            <!-- LEPRA STATICS / ESTADÍSTICAS LEPRA -->

              

                            <?php 

                                $reg = array(

                                    'category__and' => array( 6, 43 ),

                                    'posts_per_page' => 1

                                );



                                $filter_posts = new WP_Query($reg);



                                if ($filter_posts -> have_posts()): 

                                    while ($filter_posts -> have_posts()): 

                                        $filter_posts -> the_post()  

                            ?>



                            <!-- Box containing the statistical information / Cuadro que contiene las estadísticas -->

                            <div class="statics-box bo_dark-blue px-4 pb-2 mb-3 ml-sm-2 ml-md-0 ml-lg-2 ml-xl-0">

                                <!-- Last scores / Últimos resultados -->

                                <div class="match-box bo_bright-orange mb-3">

                                    <h6 class="box-title text-truncate pt-3">

                                        <span class="text-uppercase d-inline-block pr-2">

                                            <?php the_field('torneo_partido_jugado'); ?></span> 

                                            <?php the_field('fecha_partido_jugado'); ?>

                                    </h6>

                                    <div class="box-match d-flex justify-content-around pt-3">

                                        <div class="d-flex flex-column align-items-center">

                                            <img class="team-badge img-fluid" width="90" height="90" src="<?php the_field('escudo_equipo_local'); ?>" alt="">

                                            <div class="match-score">

                                                <?php the_field('resultado_equipo_local'); ?>

                                            </div>

                                        </div>

                                        <div class="d-flex flex-column align-items-center">

                                            <img class="team-badge img-fluid" width="90" height="90" src="<?php the_field('escudo_equipo_visitante'); ?>" alt="">

                                            <div class="match-score">

                                                <?php the_field('resultado_equipo_visitante'); ?> 

                                            </div>

                                        </div>

                                    </div>

                                    <div class="box-link text-uppercase text-center mb-2">

                                        <a data-toggle="modal" data-target="#matchHighlights_2">

                                            <span class="co_bright-orange">Resumen</span>

                                        </a>

                                    </div>

                                </div>

                                <!-- Next matches / Próximos partidos -->

                                <div class="match-box bo_bright-orange mb-3 d-none d-md-block">

                                    <h6 class="box-title text-truncate">

                                        <span class="text-uppercase d-inline-block pr-2">

                                            <?php the_field('torneo_partido_1'); ?></span> 

                                            <?php the_field('fecha_partido_1'); ?>

                                    </h6>

                                    <div class="box-match text-truncate mb-2">

                                            <?php the_field('local_partido_1'); ?> - <?php the_field('visitante_partido_1'); ?>

                                    </div>

                                </div>

                                <div class="match-box bo_bright-orange mb-3">

                                    <h6 class="box-title text-truncate">

                                        <span class="text-uppercase d-inline-block pr-2">

                                            <?php the_field('torneo_partido_2'); ?></span> 

                                            <?php the_field('fecha_partido_2'); ?>

                                    </h6>

                                    <div class="box-match text-truncate mb-2">

                                            <?php the_field('local_partido_2'); ?> - <?php the_field('visitante_partido_2'); ?>

                                    </div>

                                </div>

                                <div class="match-box bo_bright-orange mb-3 d-none d-md-block">

                                    <h6 class="box-title text-truncate">

                                        <span class="text-uppercase d-inline-block pr-2">

                                            <?php the_field('torneo_partido_3'); ?></span> 

                                            <?php the_field('fecha_partido_3'); ?>

                                    </h6>

                                    <div class="box-match text-truncate mb-2">

                                            <?php the_field('local_partido_3'); ?> - <?php the_field('visitante_partido_3'); ?>

                                    </div>

                                </div>

                            </div><!--/statics-box-->



                            <?php endwhile; ?>                      

                            <?php endif; ?>

                            <?php wp_reset_postdata(); ?>





                            <!-- LOBO STATICS / ESTADÍSTICAS LOBO -->

                                    

                            <?php 

                                $reg = array(

                                    'category__and' => array( 7, 43 ),

                                    'posts_per_page' => 1

                                );



                                $filter_posts = new WP_Query($reg);



                                if ($filter_posts -> have_posts()): 

                                    while ($filter_posts -> have_posts()): 

                                        $filter_posts -> the_post()  

                            ?>



                            <!-- Box containing the statistical information / Cuadro que contiene las estadísticas -->  

                            <div class="statics-box bo_dark-blue px-4 pb-2 mb-3">

                                <!-- Last scores / Últimos resultados -->

                                <div class="match-box bo_bright-orange mb-3">

                                    <h6 class="box-title text-truncate pt-3">

                                        <span class="text-uppercase d-inline-block pr-2">

                                            <?php the_field('torneo_partido_jugado'); ?></span> 

                                            <?php the_field('fecha_partido_jugado'); ?>

                                    </h6>

                                    <div class="box-match d-flex justify-content-around pt-3">

                                        <div class="d-flex flex-column align-items-center">           

                                            <img class="team-badge img-fluid" width="90" height="90" src="<?php the_field('escudo_equipo_local'); ?>" alt="">

                                            <div class="match-score">

                                                <?php the_field('resultado_equipo_local'); ?> 

                                            </div>

                                        </div>

                                        <div class="d-flex flex-column align-items-center">

                                            <img class="team-badge img-fluid" width="90" height="90" src="<?php the_field('escudo_equipo_visitante'); ?>" alt="">

                                            <div class="match-score">

                                                <?php the_field('resultado_equipo_visitante'); ?> 

                                            </div>

                                        </div>

                                    </div>

                                    <div class="box-link text-uppercase text-center mb-2">

                                        <a data-toggle="modal" data-target="#matchHighlights_3">

                                            <span class="co_bright-orange">Resumen</span>

                                        </a>

                                    </div>

                                </div>

                                <!-- Next matches / Próximos partidos -->

                                <div class="match-box bo_bright-orange mb-3">

                                    <h6 class="box-title text-truncate">

                                        <span class="text-uppercase d-inline-block pr-2">

                                            <?php the_field('torneo_partido_1'); ?></span> 

                                            <?php the_field('fecha_partido_1'); ?>

                                    </h6>

                                    <div class="box-match text-truncate mb-2">

                                            <?php the_field('local_partido_1'); ?> - <?php the_field('visitante_partido_1'); ?>

                                    </div>

                                </div>

                                <div class="match-box bo_bright-orange mb-3 d-none d-md-block">

                                    <h6 class="box-title text-truncate">

                                        <span class="text-uppercase d-inline-block pr-2">

                                            <?php the_field('torneo_partido_2'); ?></span> 

                                            <?php the_field('fecha_partido_2'); ?>

                                    </h6>

                                    <div class="box-match text-truncate mb-2">

                                            <?php the_field('local_partido_2'); ?> - <?php the_field('visitante_partido_2'); ?>

                                    </div>

                                </div>

                                <div class="match-box bo_bright-orange mb-3 d-none d-md-block">

                                    <h6 class="box-title text-truncate">

                                        <span class="text-uppercase d-inline-block pr-2">

                                            <?php the_field('torneo_partido_3'); ?></span> 

                                            <?php the_field('fecha_partido_3'); ?>

                                    </h6>

                                    <div class="box-match text-truncate mb-2">

                                            <?php the_field('local_partido_3'); ?> - <?php the_field('visitante_partido_3'); ?>

                                    </div>

                                </div>

                            </div><!--/statics-box-->



                            <?php endwhile; ?>                      

                            <?php endif; ?>

                            <?php wp_reset_postdata(); ?>



                    

                        </div>

                    </aside>

                </div><!--/left-->



                <!-- Secondary news (less prominent news that remains small in the right side) / 

                     Noticias secundarias (noticias menos destacadas que se ubican al costado derecho) 

                ***************************************************************************************** -->



                <?php 

                    $reg = array(

                        'category__and' => array( 4, 13, 38 ), 

                        'posts_per_page' => 1

                    );



                    $filter_posts = new WP_Query($reg);



                    if ($filter_posts -> have_posts()): 

                        while ($filter_posts -> have_posts()): 

                            $filter_posts -> the_post() 

                ?>



                <div class="right col-12 col-lg-4">

                    <div class="row mt-5 mt-md-0 flex-lg-column">

                        <article class="cover-secondary mt-5 col-12 col-sm-10 mx-sm-auto col-md mt-lg-0">

                            <h6 class="secondary-lead co_bright-orange">

                                <?php $tags = get_the_tags(); 

                                    if ($tags) {                 

                                        foreach( $tags as $tag ) {

                                            echo $tag->name;

                                        }            

                                    }

                                ?>  

                            </h6>

                            <div class="photo-owner text-right"><?php the_field('creditos'); ?></div>

                            <a class="secondary-link d-block" href="<?php the_permalink(); ?>">

                                <?php the_post_thumbnail('large', array('class' => 'link-img img-fluid')); ?>

                            </a>  

                            <h2 class="secondary-head mt-4">

                                <a class="co_dark-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                            </h2>

                            <h4 class="secondary-subhead mt-3 w-100 d-none d-sm-block"><?php the_excerpt(); ?></h4>

                        </article>



                        <?php endwhile; ?>

                        <?php else: ?>

                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>



                        <?php 

                            $reg = array(

                                'category__and' => array( 4, 14, 38 ), 

                                'posts_per_page' => 1

                            );



                            $filter_posts = new WP_Query($reg);



                            if ($filter_posts -> have_posts()): 

                                while ($filter_posts -> have_posts()): 

                                    $filter_posts -> the_post() 

                        ?>



                        <article class="cover-secondary mt-5 col-12 col-sm-10 mx-sm-auto col-md">

                            <h6 class="secondary-lead co_bright-orange">

                                <?php $tags = get_the_tags(); 

                                    if ($tags) {                 

                                        foreach( $tags as $tag ) {

                                            echo $tag->name;

                                        }            

                                    }

                                ?>

                            </h6>

                            <div class="photo-owner text-right"><?php the_field('creditos'); ?></div>

                            <a class="secondary-link d-block" href="<?php the_permalink(); ?>">

                                <?php the_post_thumbnail('large', array('class' => 'link-img img-fluid')); ?>

                            </a>  

                            <h2 class="secondary-head mt-4">

                                <a class="co_dark-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                            </h2>

                            <h4 class="secondary-subhead mt-3 w-100 d-none d-sm-block"><?php the_excerpt(); ?></h4>

                        </article>



                    </div><!--/row-->    



                    <?php endwhile; ?>

                    <?php else: ?>

                    <?php endif; ?>

                    <?php wp_reset_postdata(); ?>



                </div><!--/right-->

        

            </div><!--/row-->

        </div><!--/container-fluid-->

    </section><!--/cover-->          



</header>



<div id="content" class="site-content">