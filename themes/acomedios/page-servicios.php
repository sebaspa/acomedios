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
<?php
  get_footer();
?>