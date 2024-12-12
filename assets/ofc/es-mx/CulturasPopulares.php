<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- 1. Owl Carousel Min.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- 2. Owl Carousel Min.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fuente Titulo-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi+Ink&display=swap" rel="stylesheet">
    <!-- Fuente Parrafo-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Reem+Kufi+Ink&display=swap" rel="stylesheet">

    <!-- Hoja de Estilo -->
    <link rel="stylesheet" href="../../../css/estilo.css">


    <title>Museo Nacional de Culturas Populares</title>
  </head>
  <body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">

    <input type="hidden" id="title" value="CulturasPopulares.php">
    <div class="container">
      <!--Header-->
      <?php include '../../php/header.html' ?>

      <!-- Fin Header-->

      <!-- Idioma -->
      <div class="container flex-md-row mx-auto pt-3 pb-3 border-3 border-bottom border-danger">
        <span class="es"><img src="../../../img/mx.png" alt="Español"></span>
        <input type="checkbox" class="check">
        <span class="en"><img src="../../../img/eu.png" alt="Ingles"></span>
      </div>
      <!-- Fin Idioma -->

      <!-- Titulo -->
      <div class="container flex-md-row mx-auto pt-3 pb-3">
        <div class="text-center">
            <h1 id="fp">Museo Nacional de Culturas Populares</h1>
        </div>
      </div>
      <!-- Fin Titulo -->
      <!-- Cuerpo -->
      <div class="container border-3 border-bottom border-danger mb-3">
        <div class="row">
          <div class="col-sm-5 mx-auto"><!-- Descripcion -->
            <p>El Museo Nacional de Culturas Populares (MNCP) se fundó el 24 de septiembre de 1982 con el propósito de documentar, difundir y estimular las iniciativas de los creadores de las culturas populares de México, a través del diálogo y el reconocimiento al pluralismo. Para conmemorar su 40 aniversario, la Secretaría de Cultura del Gobierno de México, a través de la Dirección General de Culturas Populares, Indígenas y Urbanas (DGCPIU), impulsa una serie de actividades que motivarán a la reflexión sobre el quehacer de este recinto.</p>
          </div>
          <div class="col-sm-auto mx-auto" style="max-width:400px;"><!-- Mapa -->
            <p class="text-center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7528.8418273521775!2d-99.16569298221576!3d19.350918973128195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ffc284c5a0b3%3A0x64d8e9be1a4fe593!2sMuseo%20Nacional%20de%20Culturas%20Populares!5e0!3m2!1sen!2smx!4v1663888991525!5m2!1sen!2smx" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
            <div class="row text-center">
              <!-- Estacionamiento -->
              <div class="col">
                <a href="https://goo.gl/maps/6gEqP6LaqewhD94A8"><img src="../../../img/park.png" alt="Estacionamiento" style="max-width:72px;"></a>
              </div>
              <!-- Transporte -->
              <div class="col">
                <button class="click"><img src="../../../img/rail.png" alt="Transporte" style="max-width:60px;"></button>
                <div class="list">
                  <a href="https://goo.gl/maps/zz3NQJwkbRif8ws76"><button class="links">Metrobus</button></a>
                  <a href="https://goo.gl/maps/yx2Kf2cVw8XnFzCH8"><button class="links">Autobus</button></a>
                  <a href="https://goo.gl/maps/fuKoe5v7uUcPnWxi7"><button class="links">Metro</button></a>
                  <a href="https://goo.gl/maps/vR1bCMAVp8tVFwhW9"><button class="links">Ecobici</button></a>
                  <a href="https://goo.gl/maps/ZTA7obufZM5s3mdi8"><button class="links">Taxi</button></a>
                </div>
                <!-- Fin Transporte -->
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- Fin Cuerpo -->

      <!-- Carousel -->
      <div class="container border-3 border-bottom border-danger mb-3">
        <h2>Fotografias</h2>
        <section>
          <div class="container-fluid">
            <div class="row">
              <div class="owl-carousel owl-theme">
                <!-- Item 1 -->
                <div class="item">
                  <div class="card">
                    <a href="../../../img/Culpop1.jpg"><img src="../../../img/Culpop1.jpg" alt="Entrada" class="card-img-top" style="height:250px;"></a>
                  </div>
                </div>
                <!-- Fin Item 1 -->
                <!-- Item 2 -->
                <div class="item">
                  <div class="card">
                    <a href="../../../img/Culpop2.jpg"><img src="../../../img/Culpop2.jpg" alt="Entrada" class="card-img-top" style="height:250px;"></a>
                  </div>
                </div>
                <!-- Fin Item 2 -->
                <!-- Item 3 -->
                <div class="item">
                  <div class="card">
                    <a href="../../../img/Culpop3.jpg"><img src="../../../img/Culpop3.jpg" alt="Entrada" class="card-img-top" style="height:250px;"></a>
                  </div>
                </div>
                <!-- Fin Item 3 -->
                <!-- Item 4 -->
                <div class="item">
                  <div class="card">
                    <a href="../../../img/Culpop4.jpg"><img src="../../../img/Culpop4.jpg" alt="Entrada" class="card-img-top" style="height:250px;"></a>
                  </div>
                </div>
                <!-- Fin Item 4 -->
                <!-- Item 5 -->
                <div class="item">
                  <div class="card">
                    <a href="../../../img/Culpop5.jpg"><img src="../../../img/Culpop5.jpg" alt="Entrada" class="card-img-top" style="height:250px;"></a>
                  </div>
                </div>
                <!-- Fin Item 5 -->
                <!-- Item 6 -->
                <div class="item">
                  <div class="card">
                    <a href="../../../img/Culpop6.jpg"><img src="../../../img/Culpop6.jpg" alt="Entrada" class="card-img-top" style="height:250px;"></a>
                  </div>
                </div>
                <!-- Fin Item 6 -->
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- Lim -->
      <div class="lim">
        <!-- Sitios de interes -->
        <div class="container border-3 border-bottom border-danger mb-3">
          <h2>Sitios de Interes</h2>

          <!-- Inicio Tarjetas -->
          <div class="row">
            <!-- Tarjeta 1 -->
            <div class="col">
              <div class="card mx-auto" style="width: 18rem;">
                <img src="../../../img/Cortes.png" class="card-img-top" alt="Casa Hernan Cortes">
                <div class="card-body">
                  <h5 class="card-title">Casa de Hernan Cortés</h5>
                  <p class="card-text">El Antiguo Palacio del Ayuntamiento de Coyoacán —también conocido como casa de Hernán Cortés.</p>
                  <a href="HernanCortes.php" class="btn btn-danger">Ir</a>
                </div>
              </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="col">
              <div class="card mx-auto" style="width: 18rem;">
                <img src="../../../img/1.jpg" class="card-img-top" alt="Museo Leon Trotsky">
                <div class="card-body">
                  <h5 class="card-title">Museo León Trotsky</h5>
                  <p class="card-text">Museo fundado en la antigua casa de Leon Trotsky.</p>
                  <a href="LeonTrotsky.php" class="btn btn-danger">Ir</a>
                </div>
              </div>
            </div>

            <!-- Tarjeta 3 -->
            <div class="col">
              <div class="card mx-auto" style="width: 18rem;">
                <img src="../../../img/frida.jpg" class="card-img-top" alt="Fachada Museo Frida Kahlo">
                <div class="card-body">
                  <h5 class="card-title">Museo Frida Khalo</h5>
                  <p class="card-text">Museo dedicado a la vida y obra de Frida Kahlo, este recinto es tambien conocido como la Casa Azul</p>
                  <a href="FridaKahlo.php" class="btn btn-danger">Ir</a>
                </div>
              </div>
            </div>

          </div>
          <!-- Fin Tarjetas -->
        </div>
        <!-- Fin Sitios de Interes -->

        <!-- Oferta Gastronomica -->
        <div class="container border-3 border-bottom border-danger mb-3">
          <h2>Oferta Gastronomica</h2>

          <!-- Inicio Tarjetas -->
          <div class="row">
            <!-- Tarjeta 1 -->
            <div class="col">
              <div class="card mx-auto" style="width: 18rem;">
                <img src="../../../img/Coyoacana.jpg" class="card-img-top" alt="Fachada la Vienet">
                <div class="card-body">
                  <h5 class="card-title">La Coyoacana</h5>
                  <p class="card-text">Considerado también como una de las mejores cantinas del CDMX gracias a su variedad de comida típica mexicana y mezcal.</p>
                  <a href="https://goo.gl/maps/pThGt5ndoRPWqpsD6" class="btn btn-danger">Mostrar en mapa</a>
                </div>
              </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="col">
              <div class="card mx-auto" style="width: 18rem;">
                <img src="../../../img/Antiguo.jpg" class="card-img-top" alt="Delicioso chamorro">
                <div class="card-body">
                  <h5 class="card-title">Antiguo Palacio de Coyoacán</h5>
                  <p class="card-text">Precioso restaurante, dentro de un edificio antiguo, el cual ofrece una gran variedad de platillos mexicanos</p>
                  <a href="https://goo.gl/maps/bD7ne22597bwySGFA" class="btn btn-danger">Mostrar en mapa</a>
                </div>
              </div>
            </div>

            <!-- Tarjeta 3 -->
            <div class="col">
              <div class="card mx-auto" style="width: 18rem;">
                <img src="../../../img/mercado.jpg" class="card-img-top" alt="Fachada Museo Frida Kahlo">
                <div class="card-body">
                  <h5 class="card-title">Mercado de Coyoacan</h5>
                  <p class="card-text">Uno de los mercados mas reconocidos de la Ciudad de México</p>
                  <a href="https://goo.gl/maps/9a5heyJDDCA16GSX9" class="btn btn-danger">Mostrar en mapa</a>
                </div>
              </div>
            </div>

          </div>
          <!-- Fin Tarjetas -->
        </div>
        <!-- Fin Sitios de Interes -->
      </div>
      <!-- Fin Lim -->

    </div>

    <!-- Pie de Pagina -->
    <footer>
      <?php include '../../../assets/php/footer2.html'; ?>
    </footer>
    <!-- Fin Pie de Pagina -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Carousel CDNJS 1. Owl Carousel Min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- init Owl Carousel -->
    <script>
      $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:5
          }
        }
      })
    </script>
    <script src="../../../js/app.js">

    </script>
    <script>
      let click = document.querySelector('.click');
      let list = document.querySelector('.list');
      click.addEventListener("click",()=>{
        list.classList.toggle('newlist');
      });
    </script>

    <!-- Desactivar -->
    <script type="text/javascript">
      $(document).ready(function () {
          //Disable cut copy paste
          $('body').bind('cut copy paste', function (e) {
              e.preventDefault();
          });

          //Disable mouse right click
          $("body").on("contextmenu",function(e){
              return false;
          });
      });
    </script>

  </body>
</html>
