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
  <div class="bgBanner__img"></div>
</div>
<div class="bgPhone">
  <div class="bgPhone__img"></div>
</div>
<?php
  get_footer();
?>