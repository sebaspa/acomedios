<?php 
  get_header();
  the_post();
  $rugiendo = [0,21,23,28,30,31,32,34,35,36,37,38,47,48,49,51,52,53,54,55,56,57,58,59,60];
  $momentos = [0,15,16,17,18,20,22,24,25,27,29,33,40,41,42,43,44,45,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79];
  $historia = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,19,26,81,82,83,84,85,86,87,88,89];
?>
<!-- Inicio div background -->
<div class="<?php echo $pagename; ?>__bgbanner"></div>
<!-- Fin div background -->

<!-- inicio div Contenedor para menu -->
<div class="banner__container" id="navbar">
  <?php get_template_part('template-parts/content', 'menu-header' ); ?>
</div>
<!-- fin div Contenedor para menu -->
<div class="<?php echo $pagename; ?>__container">
  <div class="<?php echo $pagename; ?>__content">
    <div class="titles__content2">
      <h1>Personas Reales</h1>
    </div> 
  </div>
  <div class="<?php echo $pagename; ?>__content">
    <div class="banner__btn todos">
      <a href="#">Todos</a>
    </div>
    <div class="banner__btn rugiendo">
      <a href="#">Rugiendo Con Estilo</a>
    </div>
    <div class="banner__btn momentos">
      <a href="#">Momentos de amor</a>
    </div>
    <div class="banner__btn historia">
      <a href="#">Haciendo historia</a>
    </div>
  </div>
  <div class="<?php echo $pagename; ?>__content">
    <div class="grid-gallery">
    <?php 
      $class = "";
      for ($i=1; $i <90 ; $i++)
      { 
        $class = "";
        $ceros = ($i<10 )? '00' : '0';

       $class .= (in_array($i, $rugiendo))? ' rugiendo' : '';
       $class .= (in_array($i, $momentos))? ' momentos' : '';
       $class .= (in_array($i, $historia))? ' historia' : '';

        $sarta = '  <a class="grid-gallery__item todos '.$class.'" href="'.get_template_directory_uri().'/images/personas/'.$ceros.$i.'.webp" data-lightbox="personas-reales">
                      <img class="grid-gallery__image" data-src="'.get_template_directory_uri().'/images/personas/'.$ceros.$i.'.webp" src="'.get_template_directory_uri().'/images/personas/'.$ceros.$i.'.jpg" alt="">
                      <div class="overlay">
                        <img class="watermark" src="'.get_template_directory_uri().'/images/minileon-70.webp" alt="">
                      </div>
                    </a>';
        echo $sarta;
      }
    ?>
  </div>

  </div>
</div>
<?php get_template_part('template-parts/content', 'menu-footer' ); ?>
<?php
  get_footer();
?>