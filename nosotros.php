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

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/otros/esat.jpg" alt="Imagen 1"
                    style="width: 100%; max-height: 500px; object-fit: cover;">
                <div class="carousel-caption">


                </div>
            </div>

        </div>
        <div class="container5">
            <div class="abot-section">
                <div>
                    <h1>Quienes somos</h1>
                    <p>Somos una empresa comprometida con la mejora de la experiencia de compra para nuestros clientes.
                        Hemos creado una plataforma tecnológica innovadora que simplifica y agiliza el proceso de
                        adquisición de artículos para la remodelación de interiores.</p>
                </div>
                <img src="images/imagenes logo/carretilla.jpeg" alt="">
            </div>
            <div class="abot-section">
                <div>
                    <h1>Nuestra Meta</h1>
                    <p>Nuestro enfoque es garantizar que todos los usuarios, independientemente de su nivel tecnológico,
                        puedan disfrutar de una experiencia de compra segura y sin complicaciones. Nuestra meta es
                        ofrecer
                        una solución fácil de usar, accesible para un amplio público, proporcionando una interfaz
                        intuitiva
                        y amigable. </p>
                </div>
                <img src="images/otros/gif.gif" alt="">
            </div>
            <div class="abot-section">
                <div>
                    <h1>Lo mas Importante</h1>
                    <p>Valoramos la comodidad de nuestros clientes y estamos comprometidos con la excelencia en cada
                        aspecto
                        de nuestro servicio. Trabajamos constantemente para brindar innovación y eficiencia a través de
                        nuestra plataforma, con el propósito de mejorar la satisfacción y las oportunidades comerciales
                        para
                        nuestros usuarios.</p>
                </div>
                <img src="images/otros/experienciacliente.jpg" alt="">
            </div>
        </div>
        <section class="team">
            <div class="container6">
                <h1>NUESTRO EQUIPO</h1>
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-3">
                        <div class=" img-box">
                            <img src="images/otros/avatar.jpeg" class="img-responsive">

                        </div>
                        <div class="datos">
                            <h2> Karen Franco</h2>
                            <H3> Project Manager</H3>
                            <H3> Desarrolladora</H3>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class=" img-box">
                            <img src="images/otros/avatarmnl.jpg" class="img-responsive";>

                        </div>
                        <div class="datos">
                            <h2> Manuel Gonzalez</h2>
                            <H3> Scrum Master</H3>
                            <H3> Desarrollador</H3>
                        </div>

                    </div>

                </div>
            </div>

        </section>








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