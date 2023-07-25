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
                <img src="images/banners/slidehome.webp" alt="Imagen 1" style="width: 100%; max-height: 500px; object-fit: cover;">
                <div class="carousel-caption">
                    <h3>Diseños modernos</h3>

                </div>
            </div>
            <div class="carousel-item">
                <img src="images/banners/COCINAS-MODERNAS.jpg" alt="Imagen 2" style="width: 100%; max-height: 500px; object-fit: cover;">
                <div class="carousel-caption">
                    <h3>Cocinas modernas</h3>

                </div>
            </div>
            <div class="carousel-item">
                <img src="images/banners/AMB-ATELIER-GRIS--scaled.jpg" alt="Imagen 3" style="width: 100%; max-height: 500px; object-fit: cover;">
                <div class="carousel-caption">
                    <h3>Interiores impecables</h3>

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
    <!-- =================================
           HOME PRODUCTOS DESTACADOS
        ================================== -->
    <div class="hm-page-block bg-fondo">

        <div class="container">

            <div class="header-title" data-aos="fade-up">
                <h1>Productos disponibles</h1>
            </div>




            <!-- TABS -->
            <ul class="hm-tabs" data-aos="fade-up" id="seccion-destino">
                <li class="hm-tab-link">
                    Pisos ceramicos
                </li>

                <li class="hm-tab-link ">
                    Panel adhesivo
                </li>

                <li class="hm-tab-link ">
                    Techos
                </li>

                <li class="hm-tab-link ative" >
                    En oferta
                </li>

            </ul>

            <!-- CONTENIDO DE LOS TABS -->
            <!-- ceramicos -->
            <div class="tabs-content" data-aos="fade-up" >

                <div class="grid-product">

                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/porcelanatos/porcelanatomarmol.png" alt="">
                            </a>
                            <span class="stin stin-new">Nuevo</span>
                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Porcelanato Para Piso Y Pared Estilo Mármol</h3>
                            </a>
                            <div class="precio">
                                <span>$115000</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>

                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/porcelanatos/pocelanato_01.webp" alt="">
                            </a>
                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Porcelanato Valenza</h3>
                            </a>
                            <div class="precio">
                                <span>$120000</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>

                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/porcelanatos/porcelanato.webp" alt="">
                            </a>
                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Piso porcelanato Classic Calacatta</h3>
                            </a>
                            <div class="precio">
                                <span>$119000</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>

                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/porcelanatos/porcelanatoblakhues.jpg" alt="">
                            </a>
                            <span class="stin stin-new">Nuevo</span>
                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Porcelanato Importado Beige Pleno Pulido</h3>
                            </a>
                            <div class="precio">
                                <span>$117000</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>
                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/porcelanatos/porcelanato-berilo-grey-pulido-60x120.jpg" alt="">
                            </a>
                            <span class="stin stin-new">Nuevo</span>
                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Porcelanato berilio grey pulido 60x120</h3>
                            </a>
                            <div class="precio">
                                <span>$115000</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>
                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/porcelanatos/diamante-hortensia-60x60.jpg" alt="">
                            </a>
                            <span class="stin stin-new">Nuevo</span>
                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Ceramica Diamante Hortensia 60x60</h3>
                            </a>
                            <div class="precio">
                                <span>$125000</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>
                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/porcelanatos/porcemarmolado.webp" alt="">
                            </a>
                            <span class="stin stin-new">Nuevo</span>
                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Porcelanato para piso y pared de 60x120 pulido marmolado blanco</h3>
                            </a>
                            <div class="precio">
                                <span>$105000</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>
                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/porcelanatos/porcelanato-antracita-mate-75x75.jpg" alt="">
                            </a>
                            <span class="stin stin-new">Nuevo</span>
                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Porcelanato antracita mate 75 x 75</h3>
                            </a>
                            <div class="precio">
                                <span>$108500</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Panel Adhesivo -->
            <div class="tabs-content" data-aos="fade-up" id="seccion-destino2">

                <div class="grid-product">

                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/paredes/dunas.jpg" alt="">
                            </a>
                            <span class="stin stin-new">Nuevo</span>
                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Panel de relieve Beach</h3>
                            </a>
                            <div class="precio">
                                <span>$35000</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>

                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/paredes/panelnegro.jpg" alt="">
                            </a>

                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Panel 3D negro</h3>
                            </a>
                            <div class="precio">
                                <span>$45000</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>

                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/paredes/panel3d.jpeg" alt="">
                            </a>
                            <span class="stin stin-new">Nuevo</span>

                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Panel decorativo s040 cuadros black</h3>
                            </a>
                            <div class="precio">
                                <span>$68000</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>

                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/paredes/panelcolores.jpg" alt="">
                            </a>
                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Panel 3D linea exclusiva caja x 3.28mts²</h3>
                            </a>
                            <div class="precio">
                                <span>$158000</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>
                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/paredes/titandecko_3dpvc.jpg" alt="">
                            </a>
                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Pared 3D pvc caja x 33 paneles + PEG (2.97m²) - SP049</h3>
                            </a>
                            <div class="precio">
                                <span>$165000</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>
                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/paredes/3dboard_titandecko.jpg" alt="">
                            </a>
                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Pared 3D fibra vegetal caja x 4 paneles (1mt²) DL064</h3>
                            </a>
                            <div class="precio">
                                <span>$50000</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>
                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/paredes/3d_titandecko_3.jpg" alt="">
                            </a>
                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Pared 3D fibra vegetal caja x 4 paneles (1mt²) DL051</h3>
                            </a>
                            <div class="precio">
                                <span>$50000</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>
                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/paredes/Pared3d.png" alt="">
                            </a>
                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Pared 3D adhesiva linea económica caja x 6 laminas (3.23mt²) EW097</h3>
                            </a>
                            <div class="precio">
                                <span>$72000</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Techos -->
            <div class="tabs-content" data-aos="fade-up">

                <div class="grid-product" >

                    <div class="product-item" >
                        <div class="p-portada">
                            <a href="">
                                <img src="images/techos/techo-driwall.jpg" alt="">
                            </a>

                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Techos en driwall</h3>

                            </a>

                            <div class="precio">
                                <span>$22000</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>

                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/techos/techo.jpg" alt="">
                            </a>
                            <span class="stin stin-new">Nuevo</span>

                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Techo PVC Miel</h3>
                            </a>
                            <div class="precio">
                                <span>$68000</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>

                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/techos/techopvcroble.png" alt="">
                            </a>
                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Techo PVC roble </h3>
                            </a>
                            <div class="precio">
                                <span>$112000</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>

                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/techos/pvcblanco.jpg" alt="">
                            </a>
                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Techo PVC blanco brillante</h3>
                            </a>
                            <div class="precio">
                                <span>$78000</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>
                    
                   

                </div>

            </div>

            <!-- Productos En oferta -->
            <div class="tabs-content" data-aos="fade-up">

                <div class="grid-product">

                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/techos/tablillamadera.webp" alt="">
                            </a>
                            <span class="stin stin-oferta">Oferta</span>
                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Tablilla estilo madera acanalada</h3>
                            </a>
                            <div class="precio">
                                <span>$25590</span>
                                <span class="thash">$29590</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>

                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/techos/nudos.jpg" alt="">
                            </a>
                            <span class="stin stin-oferta">Oferta</span>
                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Tablilla imitación madera con diseño de nudos</h3>
                            </a>
                            <div class="precio">
                                <span>$32500</span>
                                <span class="thash">$49900</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>

                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/paredes/dunas.jpg" alt="">
                            </a>
                            <span class="stin stin-oferta">Oferta</span>
                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Panel adhesivo con diseño de dunas</h3>
                            </a>
                            <div class="precio">
                                <span>$59500</span>

                                <span class="thash">$79900</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>

                    <div class="product-item">
                        <div class="p-portada">
                            <a href="">
                                <img src="images/porcelanatos/porcelanato.webp" alt="">
                            </a>
                            <span class="stin stin-oferta">Oferta</span>
                        </div>

                        <div class="p-info">
                            <a href="">
                                <h3>Porcelanato estilo marmol blanco brillante</h3>
                            </a>
                            <div class="precio">
                                <span>$95350</span>
                                <span class="thash">$115500</span>
                            </div>
                            <a href="#" class="hm-btn btn-primary uppercase">AGREGAR AL CARRITO</a>
                        </div>

                    </div>

                </div>

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