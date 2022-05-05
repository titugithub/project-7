<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astro Motion by TemplateMo</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/slick.css" type="text/css" /> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/templatemo-style.css">
<!--
    
TemplateMo 560 Astro Motion

https://templatemo.com/tm-560-astro-motion

-->

<?php wp_head();?>
</head>
<body <?php body_class()?>>
    <video autoplay muted loop id="bg-video">
        <source src="<?php echo get_template_directory_uri(  )?>/video/gfp-astro-timelapse.mp4" type="video/mp4">
    </video>
    <div class="page-container">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <div class="cd-slider-nav">
              <nav class="navbar navbar-expand-lg" id="tm-nav">
                <a class="navbar-brand" href="#">Astro Motion</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-supported-content" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbar-supported-content">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                      <li class="nav-item selected">
                        <a class="nav-link" aria-current="page" href="#0" data-no="1">Home</a>
                        <div class="circle"></div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#0" data-no="2">Gallery</a>
                        <div class="circle"></div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#0" data-no="3">About</a>
                        <div class="circle"></div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#0" data-no="4">Contact</a>
                        <div class="circle"></div>
                      </li>
                    </ul>
                  </div>
              </nav>
            </div>
          </div>          
        </div>        
      </div>      
      <div class="container-fluid tm-content-container">
        <ul class="cd-hero-slider mb-0 py-5">
          <li class="px-3" data-page-no="1">
            <div class="page-width-1 page-left">
              <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container">
                <div class="intro-left tm-bg-dark">
                  <h2 class="mb-4"><?php the_field( 'title', 'option' ); ?></h2>
                  <p class="mb-4">
                  <?php the_field( 'description', 'option' ); ?></p>
                </div>
                <div class="intro-right">

                  <?php $image_1 = get_field( 'image_1', 'option' ); ?>
                  <?php if ( $image_1 ) : ?>
                    <img class="img-fluid intro-img-1" src="<?php echo esc_url( $image_1['url'] ); ?>" alt="<?php echo esc_attr( $image_1['alt'] ); ?>" />
                  <?php endif; ?>

                  <?php $image_2 = get_field( 'image_2', 'option' ); ?>
                  <?php if ( $image_2 ) : ?>
                    <img class="img-fluid intro-img-2" src="<?php echo esc_url( $image_2['url'] ); ?>" alt="<?php echo esc_attr( $image_2['alt'] ); ?>" />
                  <?php endif; ?>
          
                </div>
                <div class="circle intro-circle-1"></div>
                <div class="circle intro-circle-2"></div>
                <div class="circle intro-circle-3"></div>
                <div class="circle intro-circle-4"></div>
              </div>
              <div class="text-center">
                <a href="#0" data-page-no="2" class="btn btn-primary tm-intro-btn tm-page-link">
                  View Gallery
                </a>
              </div>            
            </div>            
          </li>
          <li data-page-no="2">
            <!-- Image Carousel -->
            <div class="mx-auto position-relative gallery-container">
              <div class="circle intro-circle-1"></div>
              <div class="circle intro-circle-2"></div>
              <div class="mx-auto tm-border-top gallery-slider">




                <?php

                $args = array(
                    'post_type' => 'gallery',
                    'posts_per_page' => -1
                );
                $query = new WP_Query($args);
                while( $query -> have_posts() ) {
                    $query -> the_post();
                ?>
                <figure class="effect-julia item">
                    <?php the_post_thumbnail()?>
                    <figcaption>
                        <div>
                            <p><?php the_title();?></p>
                        </div>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <?php
                }
                wp_reset_postdata();
                
            ?>


              </div>
            </div>
          </li>
          <li data-page-no="3" class="px-3">
            <div class="position-relative page-width-1 page-right tm-border-top tm-border-bottom">
              <div class="circle intro-circle-1"></div>
              <div class="circle intro-circle-2"></div>
              <div class="circle intro-circle-3"></div>
              <div class="circle intro-circle-4"></div>
              <div class="tm-bg-dark content-pad">
                <h2 class="mb-4"><?php the_field( 'titledssad', 'option' ); ?></h2>
                <p class="mb-4">
                <?php the_field( 'descriptiongfdggf', 'option' ); ?>
                </p>
              </div>              
            </div>
          </li>
          <li data-page-no="4">
            <div class="mx-auto page-width-2">
              <div class="row">
                <div class="col-md-6 me-0 ms-auto">
                  <h2 class="mb-4"><?php the_field( 'titledf', 'option' ); ?></h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 tm-contact-left">

                  <div action="#" method="POST" class="contact-form">


                    <!-- <div class="input-group tm-mb-30">
                        <input name="name" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0" placeholder="Name">
                    </div>
                    <div class="input-group tm-mb-30">
                        <input name="email" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0" placeholder="Email">
                    </div>
                    <div class="input-group tm-mb-30">
                        <textarea rows="5" name="message" class="textarea form-control rounded-0 border-top-0 border-end-0 border-start-0" placeholder="Message"></textarea>
                    </div>
                    <div class="input-group justify-content-end">
                        <input type="submit" class="btn btn-primary tm-btn-pad-2" value="Send">
                    </div> -->
                    <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]')?>


                  </div>

                </div>
                <div class="col-md-6 tm-contact-right">                  
                  <p class="mb-4">
                  <?php the_field( 'descriptiogsn', 'option' ); ?>
                  </p>
                  <div>
                    Email: <a href="mailto:info@company.com" class="tm-link-white"><?php the_field( 'emailf', 'option' ); ?></a>
                  </div>
                  <div class="tm-mb-45">
                    Tel: <a href="tel:0100200340" class="tm-link-white"><?php the_field( 'telephoneddd', 'option' ); ?></a>
                  </div>
                  <!-- Map -->
                  <div class="map-outer">
                    <div class="gmap-canvas">
                        <iframe width="100%" height="400" id="gmap-canvas"
                            src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
                </div>
              </div>
            </div>            
          </li>
        </ul>
    </div>
    <div class="container-fluid">
      <footer class="row mx-auto tm-footer">
        <div class="col-md-6 px-0">
        <?php the_field( 'copyright_text', 'option' ); ?>
        </div>
        <div class="col-md-6 px-0 tm-footer-right">
        <?php the_field( 'design_by_text', 'option' ); ?>
        </div>
      </footer>
    </div>
  </div>
  <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
  <div id="loader-wrapper">            
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>  
  <script src="<?php echo get_template_directory_uri()?>/js/jquery-3.5.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/slick.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/templatemo-script.js"></script>
  <?php wp_footer()?>
</body>
</html>