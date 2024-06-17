<?php 
  get_header();
?>
<!-- Inicio div background -->
<div class="contactenos__bgbanner"></div>
<!-- Fin div background -->

<!-- inicio div Contenedor para menu -->
<div class="banner__container" id="navbar">
  <?php get_template_part('template-parts/content', 'menu-header' ); ?>
</div>
<!-- fin div Contenedor para menu -->

<!-- inicio div Contenedor para banner content -->
<div class="banner__container <?php echo $pagename; ?>__container ">
  <div class="<?php echo $pagename; ?>__form">

    <h1 class="<?php echo $pagename; ?>__title">¿Quieres Consultar<br>a los especialistas?</h1>

    <div class="contact__form">
      <form action="">
        <div class="form__input full__input">
          <input type="text" id="name" name="name" placeholder="Nombre Completo">
        </div>
        <div class="form__input full__input">
          <input type="text" id="empresa" name="empresa" placeholder="Nombre de la empresa">
        </div>
        <div class="form__input">
          <input type="text" id="email" name="email" placeholder="E-mail">
        </div>
        <div class="form__input">
          <input type="text" id="telefono" name="telefono" placeholder="Teléfono de contacto">
        </div>
        <div class="form__input">
          <button class="form__btn" >Enviar</button>
        </div>
      </form>

    </div>

    <p class="<?php echo $pagename; ?>__clausule" > Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut dolor repudiandae itaque 
      necessitatibus ipsam vitae commodi, expedita repellat iusto impedit iure unde iste, eos 
      officiis ipsum ut deleniti consequatur sunt. </p>

  </div>

  <div class="<?php echo $pagename; ?>__map">
    <a href="https://maps.app.goo.gl/nQs8DDXyZFNH1XBK8" target="_blank">
      <img src="<?= get_template_directory_uri()."/images/contacto-cel-pin.png"; ?>" alt="">
    </a>
  </div>

  <div class="<?php echo $pagename; ?>__logo">
    <a href="<?php echo site_url(); ?>">
      <img src="<?= get_template_directory_uri()."/images/logo-contacto.png"; ?>" alt="">
    </a>
  </div>

</div>
<?php
  get_footer();
?>