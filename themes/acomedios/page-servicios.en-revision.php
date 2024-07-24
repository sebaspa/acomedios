<?php 
  get_header();
?>
<!-- inicio div Contenedor para menu -->
<div class="banner__container" id="navbar">
  <?php get_template_part('template-parts/content', 'menu-header' ); ?>
</div>
<!-- fin div Contenedor para menu -->
<!-- Inicio div __bgbanner -->
<div class="<?php echo $pagename; ?>__bgbanner">
</div>
<!-- Fin div __bgbanner -->

<div class="<?php echo $pagename; ?>__container">

  <div class="<?php echo $pagename; ?>__content">

    <div class="img__content1">
      <div class="leon__img">
        <img src="<?= get_template_directory_uri()."/images/leon-mk-360-2.png"; ?>" alt="Marketing 360 grados" />
      </div>
      <img src="<?= get_template_directory_uri()."/images/img-mejor-juntos.png"; ?>" alt="" />
    </div>
    <div class="titles__content1">
      <div class="title_service">
        <img src="<?= get_template_directory_uri()."/images/branding.png"; ?>" alt="Branding"  id="branding"/>
        <img src="<?= get_template_directory_uri()."/images/social-media.png"; ?>" alt="social Media"  id="social-media"/>
        <img src="<?= get_template_directory_uri()."/images/data-research.png"; ?>" alt="Data Research"  id="data-research"/>
        <img src="<?= get_template_directory_uri()."/images/connection-planning.png"; ?>" alt="Connection Planning"  id="connection-planning"/>
        <img src="<?= get_template_directory_uri()."/images/strategy.png"; ?>" alt="Strategy"  id="strategy"/>
        <img src="<?= get_template_directory_uri()."/images/seo-organic.png"; ?>" alt="SEO Organic"  id="seo-organic"/>
        <img src="<?= get_template_directory_uri()."/images/creative.png"; ?>" alt="Creative"  id="creative"/>
        <img src="<?= get_template_directory_uri()."/images/media-plan.png"; ?>" alt="Media Plan"  id="media-plan"/>
        <img src="<?= get_template_directory_uri()."/images/paid-media.png"; ?>" alt="Paid Media"  id="paid-media"/>
        <img src="<?= get_template_directory_uri()."/images/advertising.png"; ?>" alt="Advertising"  id="advertising"/>
        <img src="<?= get_template_directory_uri()."/images/production-team.png"; ?>" alt="Production Team"  id="production-team"/>
      </div>
    </div>
  </div>

  <div class="<?php echo $pagename; ?>__content">
    <div class="data__content">
      <div class="titles__content2">
        <h1>DATA</h1>
        <h2>RESEARCH</h2>
      </div> 
    </div>
  </div>

</div>

<?php get_template_part('template-parts/content', 'menu-footer' ); ?>
<?php
  get_footer();
?>