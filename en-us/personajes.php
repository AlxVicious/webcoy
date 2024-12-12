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
    <link rel="stylesheet" href="../css/estilo.css">


    <title>Personajes Icónicos</title>
  </head>
  <body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
    <input type="hidden" id="title" value="personajes.php">
    <div class="container">

      <!--Header-->
      <?php include '../assets/php/header2-en.html'; ?>
      <!-- Fin Header-->

      <!-- Idioma -->
      <div class="container flex-md-row mx-auto pt-3 pb-3 border-3 border-bottom border-danger">
        <span class="es"><img src="../img/mx.png" alt="Español"></span>
        <input type="checkbox" class="check" checked>
        <span class="en"><img src="../img/eu.png" alt="Ingles"></span>
      </div>
      <!-- Fin Idioma -->

      <!-- Titulo -->
      <div class="container flex-md-row mx-auto pt-3 pb-3">
        <div class="text-center">
            <h1 id="fp">Iconic Figures</h1>
        </div>
      </div>
      <!-- Fin Titulo -->
      <!-- Cuerpo -->
      <div class="container border-3 border-bottom border-danger mb-3">
        <div class="row">
          <div class="col-sm-10 mx-auto mb-3"><!-- Descripcion -->
            <p>La Alcaldía Coyoacán es uno de los nodos culturales que ha recibido a un gran número de figuras icónicas, a continuación, podrás ver algunos de ellos.
            </p>
          </div>
        </div>
      </div>
      <!-- Fin Cuerpo -->

      <!-- Lim -->
      <div class="lim">
        <!-- Sitios de interes -->
        <div class="container border-3 border-bottom border-danger mb-3 text-center">

          <!-- Inicio Tarjetas -->
          <div class="row">
            <!-- Tarjeta 1 -->
            <div class="col">
              <div class="card mx-auto" style="width: 18rem;">
                <a href="#"><img src="../img/FridaKahlo1.jpg" class="card-img-top" alt="Frida Kahlo"></a>
                <div class="card-body">
                  <h5 class="card-title">Frida Kahlo</h5>
                </div>
              </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="col">
              <div class="card mx-auto" style="width: 18rem;">
                <a href="#"><img src="../img/EmilioFernandez.jpg" class="card-img-top" alt="Emilio Fernandez"></a>
                <div class="card-body">
                  <h5 class="card-title">Emilio Fernández</h5>
                </div>
              </div>
            </div>

            <!-- Tarjeta 3 -->
            <div class="col">
              <div class="card mx-auto" style="width: 18rem;">
                <a href="#"><img src="../img/ClementeOrozco.jpg" class="card-img-top" alt="José Clemente Orozco"></a>
                <div class="card-body">
                  <h5 class="card-title">José Clemente Orozco</h5>
                </div>
              </div>
            </div>

            <!-- Tarjeta 4 -->
            <div class="col">
              <div class="card mx-auto" style="width: 18rem;">
                <a href="../assets/pic/en-us/LeonTrotsky.php"><img src="../img/LeonTrotsky1.jpg" class="card-img-top" alt="Leon Trotsky"></a>
                <div class="card-body">
                  <h5 class="card-title">León Trotsky</h5>
                </div>
              </div>
            </div>

            <!-- Tarjeta 5 -->
            <div class="col">
              <div class="card mx-auto" style="width: 18rem;">
                <a href="#"><img src="../img/SalvadorElizondo.jpg" class="card-img-top" alt="Salvador Elizondo"></a>
                <div class="card-body">
                  <h5 class="card-title">Salvador Elizondo</h5>
                </div>
              </div>
            </div>

            <!-- Tarjeta 6 -->
            <div class="col">
              <div class="card mx-auto" style="width: 18rem;">
                <a href="#"><img src="../img/SalvadorNovo.jpg" class="card-img-top" alt="Salvador Novo"></a>
                <div class="card-body">
                  <h5 class="card-title">Salvador Novo</h5>
                </div>
              </div>
            </div>

          </div>
          <!-- Fin Tarjetas -->
        </div>
        <!-- Fin Personajes Iconicos -->
      </div>
      <!-- Fin Lim -->

    </div>

    <!-- Pie de Pagina -->
    <footer>
      <?php include '../assets/php/footer-en.html'; ?>
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
              items:2
          },
          1000:{
              items:3
          }
        }
      })
    </script>
    <script src="../js/app2.js">

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