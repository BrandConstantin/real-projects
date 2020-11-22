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
          <nav class="menu-programa">
            <a href="#talleres"><i class="fa fa-code"></i>Talleres</a>
            <a href="#conferencias"><i class="fa fa-comment"></i>Conferencias</a>
            <a href="#seminarios"><i class="fa fa-university"></i>Seminarios</a>
          </nav>

          <div id="talleres" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>HTML5, CSS3 y JavaScript</h3>
              <p><i class="fa fa-clock-o"></i>15:00</p>
              <p><i class="fa fa-calendar"></i>10 Diciembre 2020</p>
              <p><i class="fa fa-user"></i>Juan Jesús Estrada Gonzalez</p>
            </div>
            <div class="detalle-evento">
              <h3>Resposiv Web Design</h3>
              <p><i class="fa fa-clock-o"></i>17:00</p>
              <p><i class="fa fa-calendar"></i>10 Diciembre 2020</p>
              <p><i class="fa fa-user"></i>Mark Wondered</p>
            </div>
            <a href="" class="button float-right">Ver</a>
          </div>

          <div id="conferencias" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>JavaScript, Ajax, jQuery</h3>
              <p><i class="fa fa-clock-o"></i>17:00</p>
              <p><i class="fa fa-calendar"></i>11 Diciembre 2020</p>
              <p><i class="fa fa-user"></i>Gregoria Sanchez</p>
            </div>
            <div class="detalle-evento">
              <h3>UIX</h3>
              <p><i class="fa fa-clock-o"></i>19:00</p>
              <p><i class="fa fa-calendar"></i>10 Diciembre 2020</p>
              <p><i class="fa fa-user"></i>Mark Wondered</p>
            </div>
            <a href="" class="button float-right">Ver</a>
          </div>

          <div id="seminarios" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>jQuery & PHP</h3>
              <p><i class="fa fa-clock-o"></i>19:00</p>
              <p><i class="fa fa-calendar"></i>12 Diciembre 2020</p>
              <p><i class="fa fa-user"></i>Michal Oldthroft</p>
            </div>
            <div class="detalle-evento">
              <h3>BACK DEVELOPER</h3>
              <p><i class="fa fa-clock-o"></i>21:00</p>
              <p><i class="fa fa-calendar"></i>10 Diciembre 2020</p>
              <p><i class="fa fa-user"></i>Mark Wondered</p>
            </div>
            <a href="" class="button float-right">Ver</a>
          </div>
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