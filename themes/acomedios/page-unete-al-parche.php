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
    <div class="<?php echo $pagename; ?>__logo">
      <img src="<?= get_template_directory_uri()."/images/logo-herramientas.png"; ?>" alt="" />
    </div>
    <div class="<?php echo $pagename; ?>__form">
      <?php echo apply_shortcodes( '[contact-form-7 id="9b543b7" title="Únete al Parche" html_class="jobs"]' ); ?>
    </div>
  </div>
</div>
<?php get_template_part('template-parts/content', 'menu-footer' ); ?>
<?php
  get_footer();
?>