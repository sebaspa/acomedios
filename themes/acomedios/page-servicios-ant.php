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

<!-- inicio div Contenedor para banner content -->
<div class="banner__container <?php echo $pagename; ?>__container ">

  <div class="<?php echo $pagename; ?>__content">

    <div class="<?php echo $pagename; ?>__herramientas">
      <div class="servicios__herramientas">
        <img src="<?= get_template_directory_uri()."/images/seo.png"; ?>" alt="" />
      </div> 
    </div>

    <div class="<?php echo $pagename; ?>__text">
    </div>

  </div>
</div>
<!-- fin div Contenedor para menu -->
<?php
  get_footer();
?>