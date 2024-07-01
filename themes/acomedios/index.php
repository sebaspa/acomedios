<?php 

get_header();

/*
if (have_posts()):
  while (have_posts()):
    the_post();
    the_content();
  endwhile;
endif;
*/
?>
<!-- Inicio div background -->
<div class="bgBanner"></div>
<!-- Fin div background -->

<!-- inicio div Contenedor para menu -->
<div class="banner__container" id="navbar">
  <?php get_template_part('template-parts/content', 'menu-header' ); ?>
</div>
<!-- fin div Contenedor para menu -->

<!-- inicio div Contenedor para banner content -->
<div class="banner__container">
  <div class="banner__title">
    <p>DONDE <span class="ideas">LAS IDEAS</span> SE
      <br/>
      <span class="hacen">HACEN</span> <span class="realidad">REALIDAD</span>
    </p>
    <div class="banner__imgJuntos">
      <img src="<?= get_template_directory_uri()."/images/mejorjuntos.png";?>" alt="">
    </div>
    <div class="banner__imgPersonas">
      <img src="<?= get_template_directory_uri()."/images/personasReales.png";?>" alt="">
    </div>
    <div class="banner__btn">
      <a href="<?= site_url('servicios');?>">SERVICIOS INTEGRADOS</a>
    </div>
  </div>
</div>
<!-- fin div Contenedor para banner content -->

<!-- fin div Contenedor para video -->
<div class="banner__container lateral">
  <div class="banner__imgLateral">
    <img src="<?= get_template_directory_uri()."/images/Banner_Slider.png";?>" alt="">
  </div>
  <div class="banner__seccionInferior">
    <div class="banner__textIzquierdo">
      <p>
        <span class="bold">En nuestra agencia</span><br>
        el éxito lo construimos <br>
        <span class="background-color">con personas reales</span>
      </p>
    </div>
    <div class="banner__video">
      <iframe class="video" src="https://www.youtube.com/embed/idWm_Xy31ac" title="¿Acaso Quieren Una Guerra Con Los Humanos? ¡Bueno, Buena suerte! I Las mejores historias de HFY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <!-- <img src="<?= get_template_directory_uri()."/images/samung-tv3.png";?>" alt="">  -->
    </div>
  </div>
</div>
<div class="banner__container">
  <div class="carousel__container swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="<?= get_template_directory_uri()."/images/tend1.png";?>" alt=""></div>
      <div class="swiper-slide"><img src="<?= get_template_directory_uri()."/images/tend2.png";?>" alt=""></div>
      <div class="swiper-slide"><img src="<?= get_template_directory_uri()."/images/tend3.png";?>" alt=""></div>
      <div class="swiper-slide"><img src="<?= get_template_directory_uri()."/images/tend4.png";?>" alt=""></div>
      <div class="swiper-slide"><img src="<?= get_template_directory_uri()."/images/tend1.png";?>" alt=""></div>
      <div class="swiper-slide"><img src="<?= get_template_directory_uri()."/images/tend4.png";?>" alt=""></div>
    </div>
  </div>
</div>
<?php get_template_part('template-parts/content', 'menu-footer' ); ?>
<?php
  get_footer();
?>