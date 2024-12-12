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

    <title>Leon Trotsky Museum</title>
  </head>
  <body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
    <input type="hidden" id="title" value="LeonTrotsky.php">
    <div class="container">
      <!--Header-->
      <?php include '../../php/header-en.html' ?>

      <!-- Fin Header-->


      <!-- Idioma -->
      <div class="container flex-md-row mx-auto pt-3 pb-3 border-3 border-bottom border-danger">
        <span class="es"><img src="../../../img/mx.png" alt="Español"></span>
        <input type="checkbox" class="check" checked>
        <span class="en"><img src="../../../img/eu.png" alt="Ingles"></span>
      </div>
      <!-- Fin Idioma -->

      <div class="container flex-md-row mx-auto pt-3 pb-3">
        <div class="text-center">
            <h1 id="fp">Leon Trotsky Museum</h1>
        </div>
      </div>
      <!-- Fin Titulo -->
      <!-- Cuerpo -->
      <div class="container border-3 border-bottom border-danger mb-3">
        <div class="row">
          <div class="col-sm-5 mx-auto"><!-- Descripcion -->
            <p>The Leon Trotsky Museum was founded in 1990 in the house where Lev Davidovich Bronstein, better known as Leon Trotsky used to live, he was a Russian revolutionary leader, who after being persecuted by Joseph Stalin after the October Bolshevik revolution obtained political asylum from the government Cardenista and arrived in Mexico in 1937.</p>
          </div>
          <div class="col-sm-auto mx-auto" style="max-width:400px;"><!-- Mapa -->
            <p class="text-center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.2640890083544!2d-99.16412837755921!3d19.35771444511246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ffc657eee819%3A0x10c5cc8cef3a7ff2!2sMuseo%20Casa%20de%20Le%C3%B3n%20Trotsky!5e0!3m2!1sen!2smx!4v1663128933651!5m2!1sen!2smx" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
            <div class="row text-center">
              <!-- Estacionamiento -->
              <div class="col">
                <a href="https://goo.gl/maps/sL7YUWGS6WmdYosZ9"><img src="../../../img/park.png" alt="Parking" style="max-width:72px;"></a>
              </div>
              <!-- Transporte -->
              <div class="col">
                <button class="click"><img src="../../../img/rail.png" alt="Transporte" style="max-width:60px;"></button>
                <div class="list">
                  <a href="https://goo.gl/maps/zz3NQJwkbRif8ws76"><button class="links">Metrobus</button></a>
                  <a href="https://goo.gl/maps/yx2Kf2cVw8XnFzCH8"><button class="links">Bus</button></a>
                  <a href="https://goo.gl/maps/fuKoe5v7uUcPnWxi7"><button class="links">Subway</button></a>
                  <a href="https://goo.gl/maps/vR1bCMAVp8tVFwhW9"><button class="links">Rental Bicycle</button></a>
                  <a href="https://goo.gl/maps/ZTA7obufZM5s3mdi8"><button class="links">Cab Spot</button></a>
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
        <h2>Photos</h2>
        <section>
          <div class="container-fluid">
            <div class="row">
              <div class="owl-carousel owl-theme">
                <!-- Item 01 -->
                <div class="item">
                  <div class="card">
                    <a href="../../../img/LeonTrotsky1.jpg"><img src="../../../img/LeonTrotsky1.jpg" alt="Entrada" class="card-img-top" style="height:250px;"></a>
                  </div>
                </div>
                <!-- Fin Item 01 -->
                <!-- Item 02 -->
                <div class="item">
                  <div class="card">
                    <a href="../../../img/LeonTrotsky2.jpg"><img src="../../../img/LeonTrotsky2.jpg" alt="Entrada" class="card-img-top" style="height:250px;"></a>
                  </div>
                </div>
                <!-- Fin Item 02 -->
                <!-- Item 1 -->
                <div class="item">
                  <div class="card">
                    <a href="../../../img/1.jpg"><img src="../../../img/1.jpg" alt="Entrada" class="card-img-top" style="height:250px;"></a>
                  </div>
                </div>
                <!-- Fin Item 1 -->
                <!-- Item 2 -->
                <div class="item">
                  <div class="card">
                    <a href="../../../img/2.jpg"><img src="../../../img/2.jpg" alt="Entrada" class="card-img-top" style="height:250px;"></a>
                  </div>
                </div>
                <!-- Fin Item 2 -->
                <!-- Item 3 -->
                <div class="item">
                  <div class="card">
                    <a href="../../../img/3.jpg"><img src="../../../img/3.jpg" alt="Entrada" class="card-img-top" style="height:250px;"></a>
                  </div>
                </div>
                <!-- Fin Item 3 -->
                <!-- Item 4 -->
                <div class="item">
                  <div class="card">
                    <a href="../../../img/4.jpg"><img src="../../../img/4.jpg" alt="Entrada" class="card-img-top" style="height:250px;"></a>
                  </div>
                </div>
                <!-- Fin Item 4 -->
                <!-- Item 5 -->
                <div class="item">
                  <div class="card">
                    <a href="../../../img/5.jpg"><img src="../../../img/5.jpg" alt="Entrada" class="card-img-top" style="height:250px;"></a>
                  </div>
                </div>
                <!-- Fin Item 5 -->
                <!-- Item 6 -->
                <div class="item">
                  <div class="card">
                    <a href="../../../img/6.jpg"><img src="../../../img/6.jpg" alt="Entrada" class="card-img-top" style="height:250px;"></a>
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
        <!-- Sitios de Interes Cultural -->
        <div class="container border-3 border-bottom border-danger mb-3">
          <h2>Cultural Highlights</h2>

          <!-- Inicio Tarjetas -->
          <div class="row">
            <!-- Tarjeta 1 -->
            <div class="col">
              <div class="card mx-auto" style="width: 18rem;">
                <img src="../../../img/Cortes.png" class="card-img-top" alt="Casa Hernan Cortes">
                <div class="card-body">
                  <h5 class="card-title">Hernan Cortes House</h5>
                  <p class="card-text">Old City Hall of Coyoacan also known as the Hernan Cortes House</p>
                  <a href="HernanCortes.php" class="btn btn-danger">Go</a>
                </div>
              </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="col">
              <div class="card mx-auto" style="width: 18rem;">
                <img src="../../../img/mncp.jpg" class="card-img-top" alt="Museo Nacional de Culturas Populares">
                <div class="card-body">
                  <h5 class="card-title">National Museum of Popular Cultures</h5>
                  <p class="card-text">Museum dedicated to the cultural and etnic diversity in Mexico.</p>
                  <a href="CulturasPopulares.php" class="btn btn-danger">Go</a>
                </div>
              </div>
            </div>

            <!-- Tarjeta 3 -->
            <div class="col">
              <div class="card mx-auto" style="width: 18rem;">
                <img src="../../../img/frida.jpg" class="card-img-top" alt="Fachada Museo Frida Kahlo">
                <div class="card-body">
                  <h5 class="card-title">Frida Khalo Museum</h5>
                  <p class="card-text">Museum dedicated to the life and work of Frida Kahlo, this site is also known as the Casa Azul</p>
                  <a href="FridaKahlo.php" class="btn btn-danger">Go</a>
                </div>
              </div>
            </div>

          </div>
          <!-- Fin Tarjetas -->
        </div>
        <!-- Fin Sitios de Interes -->

        <!-- Oferta Gastronomica -->
        <div class="container border-3 border-bottom border-danger mb-3">
          <h2>Gastronomic Offer</h2>

          <!-- Inicio Tarjetas -->
          <div class="row">
            <!-- Tarjeta 1 -->
            <div class="col">
              <div class="card mx-auto" style="width: 18rem;">
                <img src="../../../img/vienet.jpg" class="card-img-top" alt="Fachada la Vienet">
                <div class="card-body">
                  <h5 class="card-title">La Vienet</h5>
                  <p class="card-text">Small and cozy place where you can enjoy a delicious breakfast.</p>
                  <a href="https://goo.gl/maps/DuPLxb6FK2nKqL7FA" class="btn btn-danger">Show map</a>
                </div>
              </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="col">
              <div class="card mx-auto" style="width: 18rem;">
                <img src="../../../img/chamorro.jpg" class="card-img-top" alt="Delicioso chamorro">
                <div class="card-body">
                  <h5 class="card-title">Chamorros de Coyoacan</h5>
                  <p class="card-text">Simple canteen in an airy space focused on main dishes such as pork chamorro is its specialty.</p>
                  <a href="https://goo.gl/maps/evjuBQRzf1VhXP2H7" class="btn btn-danger">Show map</a>
                </div>
              </div>
            </div>

            <!-- Tarjeta 3 -->
            <div class="col">
              <div class="card mx-auto" style="width: 18rem;">
                <img src="../../../img/mercado.jpg" class="card-img-top" alt="Fachada Museo Frida Kahlo">
                <div class="card-body">
                  <h5 class="card-title">Mercado de Coyoacan</h5>
                  <p class="card-text">One of the most renowned markets in Mexico City.</p>
                  <a href="https://goo.gl/maps/vNcSkp3VL7Zfftrn8" class="btn btn-danger">Show map</a>
                </div>
              </div>
            </div>

          </div>
          <!-- Fin Tarjetas -->
        </div>
        <!-- Fin Oferta Gastronomica -->
      </div>
      <!-- Fin Lim -->

    </div>

    <!-- Pie de Pagina -->
    <footer>
      <?php include '../../../assets/php/footer2-en.html'; ?>
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
    <!--  Script button transporte  -->
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

    </div>
  </body>
</html>