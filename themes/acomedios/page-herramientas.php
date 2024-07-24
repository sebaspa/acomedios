<?php 
  get_header();
?>

<!-- Inicio div background -->
<div class="<?php echo $pagename; ?>__bgbanner"></div>
<!-- Fin div background -->

<!-- inicio div Contenedor para menu -->
<div class="banner__container" id="navbar">
  <?php get_template_part('template-parts/content', 'menu-header' ); ?>
</div>
<!-- fin div Contenedor para menu -->
<div class="contenedor">
  <div class="seccion-izquierda">
    
    <div class="content__title">
      <h1>Herramientas</h1>
      </div>
    <div class="imagenes">
      <img src="<?= get_template_directory_uri()."/images/audiencias.png"; ?>" alt="" />
      <img src="<?= get_template_directory_uri()."/images/seo.png"; ?>" alt="" />
      <img src="<?= get_template_directory_uri()."/images/medios.png"; ?>" alt="" />
      <img src="<?= get_template_directory_uri()."/images/contexto.png"; ?>" alt="" />
      <img src="<?= get_template_directory_uri()."/images/rastreo.png"; ?>" alt="" />
      <img src="<?= get_template_directory_uri()."/images/escucha.png"; ?>" alt="" />
      <img src="<?= get_template_directory_uri()."/images/tracking.png"; ?>" alt="" />
      <img src="<?= get_template_directory_uri()."/images/contenidos.png"; ?>" alt="" />
      <img src="<?= get_template_directory_uri()."/images/influencers.png"; ?>" alt="" />
    </div>
  </div>
  <div class="seccion-derecha">
    <p>
      <b>Partimos de un esquema con más de 47 herramientas de investigación de medios y mercados,</b> 
      para desarrollar procesos de estrategia, planeación y ejecución de campañas publicitarias 360.
    </p>
    <div class="iconos">
      <img src="<?= get_template_directory_uri()."/images/logo-herramientas.png"; ?>" alt="" />
    </div>
  </div>
</div>
<?php get_template_part('template-parts/content', 'menu-footer' ); ?>
<?php
  get_footer();
?>