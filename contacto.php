<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    require("components/head.php");
    ?>

</head>

<body>


    <?php
    require("components/nav.php");
    ?>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banners/Prototipo de ordenador web tecnológica moderna negro y amarillo.jpg"
                    alt="Imagen 1" style="width: 100%; max-height: 500px; object-fit: cover;">
                <div class="carousel-caption">


                </div>
            </div>

        </div>


        <!-- Controles de navegación -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </a>
    </div>
    <div class="container5">
        <div class="abot-section">
            <div>
                <h1></h1>
                <p>Somos una empresa comprometida con la mejora de la experiencia de compra para nuestros clientes.
                    Hemos creado una plataforma tecnológica innovadora que simplifica y agiliza el proceso de
                    adquisición de artículos para la remodelación de interiores.</p>
            </div>
            <img src="images/imagenes logo/carretilla.jpeg" alt="">
        </div>


    </div>
    <div class="wrapper2">
    <div class="container6">
      <div class="contact-form">
        <h2>Envíanos un mensaje</h2>
        <form action="enviar.php" method="post">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre" required>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>

          <label for="mensaje">Mensaje:</label>
          <textarea id="mensaje" name="mensaje" required></textarea>

          <button type="submit">Enviar</button>
        </form>
      </div>
    </div>
  </div>




    <?php
    require("components/footer.php");
    ?>








    <!-- Animaciones : AOS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- Mi Script -->
    <script src="js/app.js"></script>

    <script>

        AOS.init({
            duration: 1200,
        })


    </script>

</body>

</html>