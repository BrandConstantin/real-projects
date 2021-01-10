<?php
include_once 'includes/templates/header.php';
?>

  <section class="seccion">
    <h2>La mejor conferencia de diseño web de España</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat iure quibusdam, nihil beatae quos magnam veritatis praesentium quidem? Nihil mollitia velit consequuntur tempora incidunt. Perspiciatis, officiis. Aspernatur ullam quo dolore.</p>
  </section>

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.ogv" type="video/ogv">
        <source src="video/video.webm" type="video/webm">
      </video>
    </div>

    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del evento</h2>        
            <?php
                try {
                  require_once('includes/functions/conection.php');
                  $sql = "SELECT * FROM `categoria_evento` ";
                  $resultado = $conn->query($sql);
                } catch (Exception $e) {
                  $error = $e->getMessage();
                }
              ?>
            <nav class="menu-programa">
              <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                <?php $categoria = $cat['cat_evento']; ?>
                    <a href="#<?php echo strtolower($categoria) ?>">
                          <i class="fa <?php echo $cat['icono'] ?>" aria-hidden="true"></i> <?php echo $categoria ?>
                    </a>
              <?php } ?>
            </nav>

            <?php
                try {
                  require_once('includes/functions/conection.php');
                  $sql = "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
                  $sql .= "FROM `eventos` ";
                  $sql .= "INNER JOIN `categoria_evento` ";
                  $sql .= "ON eventos.id_cat_evento=categoria_evento.id_categoria ";
                  $sql .= "INNER JOIN `invitados` ";
                  $sql .= "ON eventos.id_inv=invitados.invitado_id ";
                  $sql .= "AND eventos.id_cat_evento = 1 ";
                  $sql .= "ORDER BY `evento_id` LIMIT 2;";
                  $sql .= "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
                  $sql .= "FROM `eventos` ";
                  $sql .= "INNER JOIN `categoria_evento` ";
                  $sql .= "ON eventos.id_cat_evento=categoria_evento.id_categoria ";
                  $sql .= "INNER JOIN `invitados` ";
                  $sql .= "ON eventos.id_inv=invitados.invitado_id ";
                  $sql .= "AND eventos.id_cat_evento = 2 ";
                  $sql .= "ORDER BY `evento_id` LIMIT 2;";
                  $sql .= "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
                  $sql .= "FROM `eventos` ";
                  $sql .= "INNER JOIN `categoria_evento` ";
                  $sql .= "ON eventos.id_cat_evento=categoria_evento.id_categoria ";
                  $sql .= "INNER JOIN `invitados` ";
                  $sql .= "ON eventos.id_inv=invitados.invitado_id ";
                  $sql .= "AND eventos.id_cat_evento = 3 ";
                  $sql .= "ORDER BY `evento_id` LIMIT 2;";
                } catch (Exception $e) {
                  $error = $e->getMessage();
                }
              ?>

            <?php $conn->multi_query($sql); ?>

            <?php
                do {
                    $resultado = $conn->store_result();
                    $row = $resultado->fetch_all(MYSQLI_ASSOC);    ?>

                    <?php $i = 0; ?>
                    <?php foreach($row as $evento): ?>
                      <?php if($i % 2 == 0) { ?>
                        <div id="<?php echo strtolower($evento['cat_evento']) ?>" class="info-curso ocultar clearfix">
                      <?php } ?>
                              <div class="detalle-evento">
                                  <h3><?php echo html_entity_decode($evento['nombre_evento']) ?></h3>
                                  <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $evento['hora_evento']; ?></p>
                                  <p><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $evento['fecha_evento']; ?></p>
                                  <p><i class="fa fa-user" aria-hidden="true"></i> <?php echo $evento['nombre_invitado'] . " " .  $evento['apellido_invitado']; ?></p>
                              </div>
                      <?php if($i % 2 == 1): ?>
                            <a href="calendario.php" class="button float-right">Ver todos</a>
                        </div> <!--#talleres-->
                      <?php endif; ?>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    <?php $resultado->free(); ?>
              <?php  } while ($conn->more_results() && $conn->next_result());?>
        </div> <!--.programa-evento-->
        </div>
      </div>
    </div>
  </section><!--talleres -->

  <section class="invitados contenedor seccion">
    <h2>Nuestros invitados</h2>
    <ul class="lista-invitados clearfix">
      <li>
        <div class="invitado">
          <img src="img/invitado1.jpg" alt="invitado">
          <p>Rafael Bautista Mochevinque</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado2.jpg" alt="invitado">
          <p>Susan Rockefert</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado3.jpg" alt="invitado">
          <p>Yulian Svorski</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado4.jpg" alt="invitado">
          <p>Roxana Mihalache</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado5.jpg" alt="invitado">
          <p>Eduard GrayJoy</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado6.jpg" alt="invitado">
          <p>Raquel R.</p>
        </div>
      </li>
    </ul>
  </section> 

  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
          <li><p class="numero"></p> Invitados</li>
          <li><p class="numero"></p> Talleres</li>
          <li><p class="numero"></p> Dias</li>
          <li><p class="numero"></p> Conferencias</li>
      </ul>
    </div>
  </div>

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Pase por día</h3>
            <p class="numero">30€</p>
            <ul>
              <li>Desayuno</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="" class="button hollow">Comprar Pase</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Todos los días</h3>
            <p class="numero">110€</p>
            <ul>
              <li>Desayuno</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="" class="button">Comprar Pase</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Pase por 2 día</h3>
            <p class="numero">50€</p>
            <ul>
              <li>Desayuno</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="" class="button hollow">Comprar Pase</a>
          </div>
        </li>
      </ul>
    </div>
  </section> <!-- precios -->

  <div class="mapa" id="mapa">  </div>

  <section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto nobis cupiditate dignissimos suscipit mollitia, excepturi dicta nulla cumque cum! Corrupti in blanditiis iste officiis modi vitae accusamus quas earum?</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="testimonial">
            <cite>Larissa Navarro <span>Diseñador de @prisma</span></cite>
          </footer>
        </blockquote>
      </div>
      <div class="testimonial">
        <blockquote>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus explicabo repudiandae odit hic exercitationem nostrum, magnam, asperiores nemo neque ab ipsum non ratione eum eveniet consequatur illo saepe nobis error!</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="testimonial">
            <cite>Michelangelo Faroli <span>Java Developer en Starlight Software</span></cite>
          </footer>
        </blockquote>
      </div>
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur deleniti qui, dicta alias amet vel dolorem aspernatur rerum ratione sint. Commodi deleniti sed voluptatem id illum a nihil doloribus odio!</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="testimonial">
            <cite>Ronaldo Caldeira <span>Anglar developer en MadeiraSoft</span></cite>
          </footer>
        </blockquote>
      </div>
    </div>
  </section>

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>Regístrate al newsletter</p>
      <h3>GdlWEbCamp</h3>
      <a href="" class="button transparente">Registrate</a>
    </div>
  </div>

  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva">
      <ul class="clearfix">
        <li><p id="dias" class="numero"></p> días</li>
        <li><p id="horas" class="numero"></p> horas</li>
        <li><p id="minutos" class="numero"></p> minutos</li>
        <li><p id="segundos"class="numero"></p> segundos</li>
      </ul>
    </div>
  </section>

<?php
include_once 'includes/templates/footer.php';
?>