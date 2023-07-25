<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    require("components/head.php");
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function realizarOperacion() {
            var numero1 = parseFloat(document.querySelector('input[name="numero_1"]').value);
            var numero2 = parseFloat(document.querySelector('input[name="numero_2"]').value);
            var operacion = document.querySelector('select[name="operacion"]').value;

            $.ajax({
                type: 'POST',
                url: 'operacion.php',
                data: {
                    numero_1: numero1,
                    numero_2: numero2,
                    operacion: operacion
                },
                success: function (resultado) {
                    // Muestra el resultado en el display
                    document.getElementById('resultadoDisplay').textContent = resultado;for (let index = 0; index < array.length; index++) {
                        const element = array[index];
                        
                    }
                    }
            });
        }
    </script>

</head>

<body>


    <?php
    require("components/nav.php");
    ?>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
       

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banners/calculator.jpg" alt="Imagen 1" style="width: 100%; max-height: 500px; object-fit: cover;">
                <div class="carousel-caption">


                </div>
            </div>

        </div>
        <section class="calculador" style="background-image: url(images/otros/huellas.webp);">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <div class="card">
                            <div class="card-header bg-success text-white">
                                Calculadora
                            </div>
                            <div class="card-body">
                                <form  method="POST">
                                    <div class="form-group mt-2">
                                        <div class="form-group mt-2">
                                            <div class="display">
                                                <span id="resultadoDisplay"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <label for="">Operacion</label>
                                    <select name="operacion" id="" class="form-select" required>
                                        <option value="" disabled selected>Seleccione operacion</option>
                                        <option value="sumar">sumar</option>
                                        <option value="restar">restar</option>
                                        <option value="dividir">dividir</option>
                                        <option value="multiplicar">multiplicar</option>
                                    </select>


                            </div>
                            <div class="form-group mt-2">
                                <label for="">Numero 1</label>
                                <input type="number" name="numero_1" class="form-control" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Numero 2</label>
                                <input type="number" name="numero_2" class="form-control" required>
                            </div>
                            <button type="button" class="btn btn-success mt-3 w-100" onclick="realizarOperacion()">Calcular</button>
                            </form>
                        </div>
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