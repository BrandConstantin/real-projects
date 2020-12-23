<footer class="site-footer">
    <div class="contenedor clearfix">
      <div class="footer-informacion">
        <h3>Sobre <span>GdlWEbCamp</span></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestias, tempora, culpa neque soluta velit odit eos illo iste voluptate reiciendis cum non unde, necessitatibus deleniti veritatis distinctio laborum voluptatibus.</p>
      </div>
      <div class="ultimos-tweets">
        <h3>Últimos <span>tweets</span></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <span>#conferencias</span> by <span>@aliasAl</span></p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <span>#conferencias</span> by <span>@aliasAl</span></p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <span>#conferencias</span> by <span>@aliasAl</span></p>
      </div>
      <div class="redes-sociales">
        <h3>Redes <span>sociales</span></h3>
        <nav class="redes-sociales">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-pinterest"></i></a>
          <a href="#"><i class="fa fa-youtube"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>
        </nav>
      </div>
    </div>

    <p class="copyright">
      Todos los derechos rezervador Constantin Brindusoiu 2020
    </p>
  </footer>
  
  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/vendor/jquery.animateNumber.js"></script>
  <script src="js/vendor/jquery.countdown.min.js"></script>
  <script src="js/vendor/jquery.lettering.js"></script>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script src="js/leaflet.js"></script>

  <?php
    $archivo = basename($_SERVER['PHP_SELF']); // RETORNA EL NOMBRE DEL ARCHIVO ACTUAL
    $pagina = str_replace(".php", "", $archivo);

    if($pagina == 'invitados' || $pagina == 'index'){
      echo '  <script src="js/jquery.colorbox-min.js"></script>';
    }else if($pagina == 'conferencia'){
      echo '  <script src="js/jquery.lightbox-min.js"></script>';
    }
  ?>

  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
