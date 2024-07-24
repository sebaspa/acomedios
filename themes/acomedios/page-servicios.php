<?php 
  get_header();
?>
<!-- inicio div Contenedor para menu -->
<div class="banner__container" id="navbar">
  <?php get_template_part('template-parts/content', 'menu-header' ); ?>
</div>
<!-- fin div Contenedor para menu -->
<!-- Inicio div __bgbannersec1 -->
<div class="<?php echo $pagename; ?>__bgbannersec1">
  <div class="<?php echo $pagename; ?>__container">

    <div class="<?php echo $pagename; ?>__content">
      <div class="img__content1">
        <img src="<?= get_template_directory_uri()."/images/leon-mk-360-2.png"; ?>" alt="Marketing 360 grados" />
        <img src="<?= get_template_directory_uri()."/images/img-mejor-juntos.png"; ?>" alt="" />
      </div>
      <div class="titles__content1">
        <div class="title_service">
          <img src="<?= get_template_directory_uri()."/images/social-media.png"; ?>" alt="social Media"  id="social-media"/>
          <img src="<?= get_template_directory_uri()."/images/branding.png"; ?>" alt="Branding"  id="branding"/>
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

  </div>

  <div class="<?php echo $pagename; ?>__container container2">

    <div class="<?php echo $pagename; ?>__content">
      <div class="titles__content2 contenidos">
        <h1>DATA</h1>
        <h2>RESEARCH</h2>
      </div> 
    </div>

    <div class=" servicios__content--without <?php echo $pagename; ?>__content">
      <div class="swiper-research">
        <ul>
          <li>Tendencias del sector</li>
          <li>Diagnóstico de página web</li>
          <li>Informe de consumidor o categoría</li>
          <li>Informe de sector o categoría</li>
          <li>Alcance y frecuencia</li>
          <li>Arquetipo de audiencia</li>
        </ul>
      </div>
      <div class="swiper-research">
        <ul>
          <li>Rating TV</li>
          <li>Consumo de medios</li>
          <li>Benckmark de medios y marcas</li>
          <li>Buyer persona</li>
          <li>Customer Journey Map</li>
          <li>Análisis de SEO</li>
          <li>Investigaciones AD HOC</li>
        </ul>
      </div>
      <div class="swiper-research">
        <ul>
          <li>Trabajo de Campo</li>
          <li>Focus group</li>
          <li>Entrevistas</li>
          <li>Paneles digitales</li>
          <li>Estudios sindicados cualitativos o cuantitativos</li>
          <li>Cliente incógnito</li>
        </ul>
      </div>
    </div>
    <!-- Inicio seccion Herramientas -->
    <div class="<?php echo $pagename; ?>__content">
      <div class="seccion-centro">
        <div class="content__title contenidos">
          <h3>Herramientas</h3>
        </div>
        <p class="p1">
          <span>Partímos de un esquema con más de 47 herramientas de investigación de medios y mercados</span>,
          para desarrollar procesos de estrategia, planeación y ejecución de campañas publicitarias 360. 
        </p>
        <p class="p2">Nuestro pull de herramientas...</p>
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
    </div>
    <!-- Fin seccion Herramientas -->

    <!-- Inicio seccion contenidos -->
    <div class="<?php echo $pagename; ?>__content">
      <div class="seccion-centro seccion-centro_extendida">
        <div class="content__title contenidos">
          <h3>CONTENIDOS</h3>
        </div>
        <div class="content__structure">
          <div class="content__mobil">
            <div class="content__items">
              <ul>
                <li>Estrategias de contenidos alineados a objetivos de negocio</li>
                <li>Estrategia de marca en el ecosistema digital</li>
                <li>Base de datos con influencers de todo el país</li>
                <li>Selección del perfil según la marca</li>
                <li>Contacto con influenciadores</li>
                <li>Gestión de acciones</li>
                <li>Medición de KPI's influencers, escuchas digitales y monitoreo de la conversación</li>
              </ul>
            </div>
            <div class="content__items margin__left__0">
              <ul>
                <li>Manual de crisis de Redes Sociales</li>
                <li>Manual de uso de Redes Sociales</li>
                <li>Identificación de tendencias y oportunidades</li>
                <li>Parrilla de contenidos AON</li>
                <li>Cubrimientos de eventos en Real Time</li>
                <li>Tácticas de comunicación para Redes Sociales</li>
              </ul>
            </div>
          </div>
          <div class="content__link">
            <a href="#" class="btn__jobs">TRABAJOS</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin seccion contenidos -->

    <!-- Inicio seccion producción -->
    <div class=" servicios__content--without <?php echo $pagename; ?>__content">
      <div class="seccion-centro seccion-centro_extendida">
        <div class="content__title contenidos">
          <h3>PRODUCCIÓN</h3>
        </div>
        <div class="content__structure__1260 content__structure  ">
          <div class="content__window">
            <div class="content__items">
              <ul>
                <li>Creación de videos corporativos</li>
                <li>Creación de contenidos audiovisuales para redes sociales</li>
                <li>Edición de videos</li>
                <li>Uso de motion graphics</li>
                <li>Grabación de contenidos audivisuales</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin seccion producción -->

    <!-- Inicio seccion creatividad -->
    <div class=" servicios__content--without <?php echo $pagename; ?>__content">
      <div class="seccion-centro seccion-centro_extendida">
        <div class="content__title contenidos">
          <img src="<?= get_template_directory_uri()."/images/creatividad-textos-superiores.webp"; ?>" alt="" />
        </div>
        <div class="content__title contenidos">
          <h3>CREATIVIDAD</h3>
        </div>
        <div class="content__title contenidos">
          <img src="<?= get_template_directory_uri()."/images/creatividad-textos-inferiores.webp"; ?>" alt="" />
        </div>
      </div>
    </div>
    <!-- Fin seccion creatividad -->

    <!-- Inicio seccion connection planning -->
    <div class=" servicios__content--without <?php echo $pagename; ?>__content">
      <div class="seccion-centro seccion-centro_extendida flex__row">
        <div class="content__items">
          <div class="planning content__title">
            <h4><span>CONNECTION</span> PLANNING</h4>
          </div>
        </div>
        <div class="content__items">
          <ul class="ulplanning">
            <li>Estrategias multicanal.</li>
            <li>Integración de medios ON + OFF.</li>
            <li>Identificación de universos.</li>
            <li>Relacionamiento de medios y conocimiento de mercados</li>
            <li>Análisis de activación en medios de la competencia.</li>
            <li>Alcance multimedia general sin duplicidad (MMP).</li>
            <li>Dossier con data de todos los medios de la industria.</li>
            <li>Planeación estratégica con base en data.</li>
            <li>Scouting y negociación estratégica.</li>
            <li>Reporte de evidencias en tiempo real.</li>
            <li>Informe de rating y ranking de medios.</li>
            <li>Rastreo de propuestas de paquetes de oportunidad.</li>
            <li>Negociación de tarifas.</li>
            <li>Creatividad en formatos de medios.</li>
            <li>Connection Day con clientes y medios.</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Fin seccion connection planning -->

    <!-- Inicio seccion connection digital -->
    <div class=" servicios__content--without <?php echo $pagename; ?>__content">
      <div class="seccion-centro seccion-centro_extendida">
        <div class="content__digital flex__row">
          <div class="content__items">
            <ul class="uldigital">
              <li>Identificación de audiencias en canales digitales y modelos de compra.</li>
              <li>Plataformas propias de pauta, self service, configuración de campañas.</li>
              <li>Taggeo de sitios web.</li>
              <li>Medición y análisis de campañas desde las plataformas sindicadas de la industría.</li>
              <li>Automatización de entornos digitales, desde todos los frentes (Mailings - WhatsApp - CRM - SMS).</li>
              <li>Publicidad nativa y de contenido.</li>
            </ul>
          </div>
          <div class="content__items">
            <ul class="uldigital">
              <li>Publicidad en redes sociales.</li>
              <li>Publicidad programática.</li>
              <li>Optimización continua de campañas.</li>
              <li>Integración de herramientas.</li>
              <li>Estrategia de SEO + SEM.</li>
              <li>Ecommerce y seguimiento a objetivos de ventas.</li>
              <li>Clusterización de audiencias digitales y su entorno.</li>
              <li>Usabilidad de las diferentes fuentes de audiencias.</li>
              <li>Medición de las plataformas en sitio web e identificación de mapas de calor en el sitio web.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class=" <?php echo $pagename; ?>__content__digital">
      <div class="title__digital">
        <h3>DIGITAL</h3>
      </div>
    </div>
    <!-- Fin seccion connection digital -->
    
    <!-- Inicio seccion creatividad -->
    <div class=" <?php echo $pagename; ?>__content btl">
      <div class="title__btl">
        <h3>BTL</h3>
      </div>
      <div class="content__btl">
        <img src="<?= get_template_directory_uri()."/images/BG-valla.png"; ?>" alt="" />
        <div class="content__valla">
          <div class="content__items">
            <ul class="ulvalla">
              <li>Estrategias BTL presenciales, virtuales y digitales.</li>
              <li>Scouting - Avanzadas de preproducción.</li>
              <li>Suministros de Personal.</li>
              <li>Suministrso de técnica (Audio y video).</li>
            </ul>
          </div>
          <div class="content__items">
            <ul class="ulvalla">
              <li>Elaboración de cotizaciones.</li>
              <li>Levantamiento de Renders.</li>
              <li>Elaboración de Raider Técnico.</li>
              <li>Elaboración de presupuestos.</li>
              <li>Creación de activaciones de marca.</li>
            </ul>
          </div>
          <div class="content__items">
            <ul class="ulvalla">
              <li>Realización de eventos institucionales, académicos, culturales,
                deportivos y corporativos.
              </li>
              <li>Registro fotográfico y de video.</li>
              <li>Consecución de proveedores.</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
    <!-- Fin seccion creatividad -->
  </div>
</div>
<!-- Fin div __bgbannersec1 -->

<?php get_template_part('template-parts/content', 'menu-footer' ); ?>
<?php
  get_footer();
?>