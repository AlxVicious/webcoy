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
    <link rel="stylesheet" href="css/estilo.css">


    <title>Inicio</title>
  </head>
  <body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
    <input type="hidden" id="title" value="ofertaCultural.php">
    <div class="container">

      <!--Header-->
      <?php include 'assets/php/header2.html' ?>
      <!-- Fin Header-->

      <!-- Idioma -->
      <div class="container flex-md-row mx-auto pt-3 pb-3 border-3 border-bottom border-danger">
        <span class="es"><img src="img/mx.png" alt="Español"></span>
        <input type="checkbox" class="check">
        <span class="en"><img src="img/eu.png" alt="Ingles"></span>
      </div>
      <!-- Fin Idioma -->

      <!-- Titulo -->
      <div class="container flex-md-row mx-auto pt-3 pb-3">
        <div class="text-center">
            <h1 id="fp">Oferta Cultural</h1>
        </div>
      </div>
      <!-- Fin Titulo -->
      <!-- Cuerpo -->
      <div class="container border-3 border-bottom border-danger mb-3">
        <div class="row">
          <div class="col-sm-10 mx-auto mb-3"><!-- Descripcion -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pulvinar, mauris ut accumsan malesuada, nulla urna rhoncus lectus, in commodo ex sapien et velit. Integer molestie viverra viverra. Nullam scelerisque ligula vel aliquet accumsan. Donec ac justo cursus libero fermentum scelerisque sed bibendum enim. Donec congue sed nisi nec imperdiet. Nullam id erat vel lectus venenatis dignissim. Morbi in lectus sit amet libero vehicula dictum id nec ex. Nullam eu molestie odio. Nullam laoreet vestibulum tristique. Fusce suscipit tortor egestas faucibus fermentum.<br><br>
            Donec at sollicitudin purus. Fusce molestie eros vel egestas ultricies. Donec non cursus nisl. Phasellus vel arcu tortor. Morbi lacus nisi, fermentum a purus vitae, ultrices pulvinar nisi. Ut enim massa, faucibus ac faucibus in, auctor non est. Pellentesque tempus, odio sed pharetra tempor, elit lorem ultrices sem, in tristique velit lacus quis est. Cras iaculis efficitur consequat.</p>
          </div>
        </div>
      </div>
      <!-- Fin Cuerpo -->
      <div class="lim">
        <!-- Carousel -->
        <div class="container border-3 border-bottom border-danger mb-3">
          <h2>Oferta Cultural</h2>
          <section>
            <div class="container-fluid">
              <div class="row">
                <div class="owl-carousel owl-theme">
                  <!-- Item 1 -->
                  <div class="item">
                    <div class="card">

                      <div class="card mx-auto" style="width: 18rem;">
                        <img src="img/Cortes.png" class="card-img-top" alt="Casa Hernan Cortes">
                        <div class="card-body">
                          <h5 class="card-title">Casa de Hernan Cortés</h5>
                          <p class="card-text">El Antiguo Palacio del Ayuntamiento de Coyoacán, también conocido como casa de Hernán Cortés.</p>
                          <a href="assets/ofc/es-mx/HernanCortes.php" class="btn btn-danger">Ir</a>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- Fin Item 1 -->
                  <!-- Item 2 -->
                  <div class="item">
                    <div class="card">

                      <div class="card mx-auto" style="width: 18rem;">
                        <img src="img/mncp.jpg" class="card-img-top" alt="Museo Nacional de Culturas Populares">
                        <div class="card-body">
                          <h5 class="card-title">Museo Nacional de Culturas Populares</h5>
                          <p class="card-text">Museo dedicado a la diversidad cultural y étnica de México.</p>
                          <a href="assets/ofc/es-mx/CulturasPopulares.php" class="btn btn-danger">Ir</a>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- Fin Item 2 -->
                  <!-- Item 3 -->
                  <div class="item">
                    <div class="card">

                      <div class="card mx-auto" style="width: 18rem;">
                        <img src="img/frida.jpg" class="card-img-top" alt="Fachada Museo Frida Kahlo">
                        <div class="card-body">
                          <h5 class="card-title">Museo Frida Khalo</h5>
                          <p class="card-text">Museo dedicado a la vida y obra de Frida Kahlo, este recinto es tambien conocido como la Casa Azul</p>
                          <a href="assets/ofc/es-mx/FridaKahlo.php" class="btn btn-danger">Ir</a>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- Fin Item 3 -->
                  <!-- Item 4 -->
                  <div class="item">
                    <div class="card">

                      <div class="card mx-auto" style="width: 18rem;">
                        <img src="img/1.jpg" class="card-img-top" alt="Museo Leon Trotsky">
                        <div class="card-body">
                          <h5 class="card-title">Museo León Trotsky</h5>
                          <p class="card-text">Museo fundado en la antigua casa de Leon Trotsky.</p>
                          <a href="assets/ofc/es-mx/LeonTrotsky.php" class="btn btn-danger">Ir</a>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- Fin Item 4 -->

                </div>
              </div>
            </div>
          </section>
        </div>
      </div>

    </div>

    <!-- Pie de Pagina -->
    <footer>
      <?php include 'assets/php/footer.html'; ?>
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
              items:3
          }
        }
      })
    </script>
    <script src="js/app2.js">

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