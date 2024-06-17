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

<?php get_template_part('template-parts/content', 'menu-header' ); ?>

<div class="bgBanner">
  <div class="bgBanner__img">
    <div class="banner__container">
      <div class="banner__title">
        <p>DONDE <span class="ideas">LAS IDEAS</span> SE
          <br/>
          <span class="hacen">HACEN</span> <span class="realidad">REALIDAD</span>
        </p>
      </div>
      <div class="banner__imgJuntos">
        <img src="<?= get_template_directory_uri()."/images/mejorjuntos.png";?>" alt="">
      </div>
      <div class="banner__btn">
        <a href="">MÁS INFORMACIÓN</a>
      </div>
      <div class="banner__imgPersonas">
        <img src="<?= get_template_directory_uri()."/images/personasReales.png";?>" alt="">
      </div>
      <div class="banner__seccionInferior">
        <div class="banner__imgLateral">
          <img src="<?= get_template_directory_uri()."/images/Banner_Slider.png";?>" alt="">
        </div>
        <div class="banner__textIzquierdo">
          <p>
            <span class="bold">En nuestra agencia</span><br>
            el éxito lo construimos <br>
            <span class="background-color">con personas reales</span>
          </p>
        </div>
        <div class="banner__video">
          <iframe class="video" src="https://www.youtube.com/embed/idWm_Xy31ac" title="¿Acaso Quieren Una Guerra Con Los Humanos? ¡Bueno, Buena suerte! I Las mejores historias de HFY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <!-- <img src="<?= get_template_directory_uri()."/images/samung-tv3.png";?>" alt=""> -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 
<div class="bgPhone">
  <div class="bgPhone__img"></div>
</div>
 -->
<!-- 
<div class="carousel-container">
  <div class="carousel-inner">
    <div class="carousel-item">
      <img src="imagen1.jpg" alt="Imagen 1">
      <img src="marco-celular.png" class="marco-celular" alt="Marco de celular">
    </div>
    <div class="carousel-item">
      <img src="imagen2.jpg" alt="Imagen 2">
    </div>
    <div class="carousel-item">
      <img src="imagen3.jpg" alt="Imagen 3">
    </div>
    </div>
</div> -->
 <?php
  get_footer();
?>