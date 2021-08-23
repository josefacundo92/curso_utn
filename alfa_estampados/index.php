<?php

include("conexion_db.php");

$consulta = "SELECT * FROM portfolio";
$respuesta = mysqli_query($conexion,$consulta);

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios de estampacion</title>

    

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b461557b1a.js" crossorigin="anonymous"></script>

    <!-- Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <!-- Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Estilos css-->
    <link rel="stylesheet" href="estilos.css">

    <!-- Google Font-->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700&display=swap" rel="stylesheet">


</head>

<body>

    <!--Encabezado-->
    <header class="encabezado color-primario" id="header">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-izq col-md-4 text-center">
                    <img src="imgs/logo.svg" class="logo img-fluid py-4">
                </div>

                <div class="col-der col-md-4 d-flex justify-content-center justify-content-md-end  align-items-center ">
                    <ul class="r-sociales nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-facebook-square"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-instagram-square"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-youtube-square"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://wa.me/543513912873"><i
                                    class="fab fa-whatsapp-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!--Menu superior-->
    <div class="menu-bg sticky-top">
        <div class="container">

            <nav class="menu-principal navbar navbar-expand-lg navbar-dark  ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="menu navbar-nav w-100 nav-justified">

                        <li class="nav-item">
                            <a class="nav-link" href="#nosotros">Nosotros</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#servicios">Servicios</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#trabajos">Trabajos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#cursos">Cursos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#testimonios">Testimonios</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>


    <!--Banner-->
    <section class="banner mt-4" id="nosotros">
        <div class="container cont-banner p-0">
            <div id="banner-animado" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicadores -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#banner-animado" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#banner-animado" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#banner-animado" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#banner-animado" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>

                <!-- Slider -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imgs/slide_01.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="imgs/slide_02.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="imgs/slide_03.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="imgs/slide_04.jpg" class="d-block w-100">
                    </div>

                </div>

                <!-- Controles -->
                <button class="carousel-control-prev" type="button" data-bs-target="#banner-animado"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#banner-animado"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </section>


    <!--Nosotros-->
    <section class="nosotros pt-5">
        <div class="container d-flex justify-content-center">
            <div class="row justify-content-center">
                <div class="col-10 col-md-8">
                    <div class="cont-titulos">
                        <div class="linea">
                        </div>
                        <h2 class="titulo-seccion">Nosotros</h2>
                    </div>

                    <p class="parrafos">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus tenetur
                        necessitatibus itaque numquam voluptates recusandae debitis dolorem iure! Iure dolor minima
                        adipisci qui expedita voluptatem nemo et iusto quis? Velit nemo blanditiis ratione temporibus
                        saepe. Dolor molestias magni fugiat maxime architecto consequuntur amet, iste necessitatibus!
                        Atque quas dolorem odit, quidem alias consequuntur quaerat, veritatis fuga aspernatur nulla
                        molestiae quos omnis!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--Servicios-->
    <section class="servicios pt-5" id="servicios">
        <div class="container">

            <div class="cont-titulos">
                <div class="linea">
                </div>
                <h2 class="titulo-seccion">Servicios</h2>
            </div>

            <div class="row justify-content-center">

                <div class="col-md-4 col-10 pb-4">
                    <div class="card-servicio color-secundario">
                        <img src="imgs/servicio_01_bn.jpg" class="img-fluid w-100">
                        <div class="cont_info text-center color-primario">
                            <h5>serigrafía</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, vitae.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-10 pb-4">
                    <div class="card-servicio color-secundario">
                        <img src="imgs/servicio_02_bn.jpg" class="img-fluid w-100">
                        <div class="cont_info text-center color-primario">
                            <h5>sublimación</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, vitae.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-10">
                    <div class="card-servicio color-secundario">
                        <img src="imgs/servicio_03_bn.jpg" class="img-fluid w-100">
                        <div class="cont_info text-center color-primario">
                            <h5>vinilo textil</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, vitae.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </section>

    <!--Trabajos-->
    <section class="trabajos pt-5" id="trabajos">
        <div class="container">

            <div class="cont-titulos">
                <div class="linea">
                </div>
                <h2 class="titulo-seccion">Trabajos</h2>
            </div>

            <div class="row justify-content-center cont-portfolio">

                <?php 

            while($fila = mysqli_fetch_assoc($respuesta)){

             ?>

                <div class="col-md-4 col-10 cont-img p-0">
                    <a data-fancybox="gallery" href="<?php echo $fila['url']; ?>">
                        <div class="img-portfolio">
                            <img src="<?php echo $fila['url']; ?>" class="img-fluid w-100">
                            <div class="capa"><i class="fas fa-search-plus"></i></div>
                        </div>
                    </a>
                </div>


                <?php } ?>

            </div>
        </div>
    </section>


    <!--Materiales-->
    <section class="pt-5" id="trabajos">
        <div class="container">

            <div class="cont-titulos flex-column flex-md-row ">
                <div class="linea">
                </div>
                <h2 class="titulo-seccion">Materiales</h2>
            </div>


            <div class="row justify-content-center my-5 text-center">

                <div class="col-3 mb-3 cont-marca">
                    <img src="imgs/marca1.png" class="img-fluid w-100">
                </div>

                <div class="col-3 mb-3 cont-marca">
                    <img src="imgs/marca2.png" class="img-fluid w-100">
                </div>

                <div class="col-3 mb-3 cont-marca">
                    <img src="imgs/marca3.png" class="img-fluid w-100">
                </div>

                <div class="col-3 mb-3 cont-marca">
                    <img src="imgs/marca4.png" class="img-fluid w-100">
                </div>

            </div>

        </div>
    </section>


    <!--Cursos-->
    <section class="cursos" id="cursos">
        <div class="container">
            <div class="cont-titulos flex-column flex-md-row ">
                <div class="linea">
                </div>
                <h2 class="titulo-seccion">Cursos</h2>
            </div>

            <div class="container cont-cursos">

                <div class="row justify-content-center">

                    <div class="col-lg-4 col-8 col-12 mb-4">
                        <div class="carta" id="carta">
                            <div class="lado frente text-center ">
                                <div class="info-cursos">
                                    <h4>Teoría y diseño por ordenador</h4>
                                    <br>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum a eos odit unde
                                        quos nisi
                                        quisquam ex voluptates asperiores, sapiente velit sed ipsum at nostrum.
                                    </p>
                                    <a class="btn btn-primary ver" id="verMas">Ver más...</a>
                                </div>
                            </div>
                            <div class="lado atras">
                                <div class="info-cursos text-center">
                                    <h4>Características</h4>
                                    <br>
                                    <ul>
                                        <li>Requisitos: ninguno</li>
                                        <li>Certificación al finalizar el curso</li>
                                        <li>Duración: 2 meses</li>
                                        <li>Modalidad: Online</li>
                                        <li>Precio: $6000</li>

                                    </ul>
                                    <a class="btn btn-primary" id="regresar">Regresar</a>
                                    <a class="btn btn-primary">Inscribirse</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-8 col-12 mb-4">
                        <div class="carta" id="carta2">
                            <div class="lado frente text-center ">
                                <div class="info-cursos">
                                    <h4>Procesos y técnicas de estampado textil</h4>
                                    <br>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum a eos odit unde
                                        quos nisi
                                        quisquam ex voluptates asperiores, sapiente velit sed ipsum at nostrum.
                                    </p>
                                    <a class="btn btn-primary ver" id="verMas2">Ver más...</a>
                                </div>
                            </div>
                            <div class="lado atras">
                                <div class="info-cursos text-center">
                                    <h4>Características</h4>
                                    <br>
                                    <ul>
                                        <li>Requisitos: Conocimientos básicos en Photoshop o Illustrator</li>
                                        <li>Certificación al finalizar el curso</li>
                                        <li>Duración: 4 meses</li>
                                        <li>Modalidad: Presencial</li>
                                        <li>Precio: $13000 (incluye materiales)</li>

                                    </ul>
                                    <a class="btn btn-primary" id="regresar2">Regresar</a>
                                    <a class="btn btn-primary">Inscribirse</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </section>


    <!-- Testimonios -->
    <section class="testimonios mt-4">
        <div class="cont-titulos">
            <div class="linea">
            </div>
            <h2 class="titulo-seccion">Testimonios</h2>
        </div>

        <div class="color-primario " id="testimonios">
            <div class="container color-secundario">

                <div class="row justify-content-center">
                    <div class="col-md-7 p-0">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <!--Cliente 1-->

                                <div class="carousel-item active">
                                    <div class="row justify-content-md-between justify-content-center ">
                                        <div class="tarjeta-cliente col ">
                                            <div class="img-cliente">
                                                <img src="imgs/cliente1.jpg" alt="">
                                            </div>
                                            <h3>Martín</h3>
                                            <p>“ Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut
                                                dignissimos
                                                voluptate
                                                animi incidunt odio nulla voluptas distinctio cum voluptatem ad. ”
                                            </p>

                                            <div class="estrellas">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!--Cliente 2-->

                                <div class="carousel-item">
                                    <div class="row justify-content-md-between justify-content-center ">
                                        <div class="tarjeta-cliente col">
                                            <div class="img-cliente">
                                                <img src="imgs/cliente2.jpg" alt="">
                                            </div>
                                            <h3>Agustín</h3>
                                            <p>“ Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut
                                                dignissimos
                                                voluptate
                                                animi incidunt odio nulla voluptas distinctio cum voluptatem ad. ”
                                            </p>

                                            <div class="estrellas">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>

                                        </div>



                                    </div>
                                </div>

                                <!--Cliente 3-->

                                <div class="carousel-item">
                                    <div class="row justify-content-md-between justify-content-center ">
                                        <div class="tarjeta-cliente col">
                                            <div class="img-cliente">
                                                <img src="imgs/cliente3.jpg" alt="">
                                            </div>
                                            <h3>María</h3>
                                            <p>“ Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut
                                                dignissimos
                                                voluptate
                                                animi incidunt odio nulla voluptas distinctio cum voluptatem ad. ”
                                            </p>

                                            <div class="estrellas">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!--Cliente 4-->

                                <div class="carousel-item">
                                    <div class="row justify-content-md-between justify-content-center ">
                                        <div class="tarjeta-cliente col">
                                            <div class="img-cliente">
                                                <img src="imgs/cliente4.jpg" alt="">
                                            </div>
                                            <h3>Esteban</h3>
                                            <p>“ Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut
                                                dignissimos
                                                voluptate
                                                animi incidunt odio nulla voluptas distinctio cum voluptatem ad. ”
                                            </p>

                                            <div class="estrellas">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!--Cliente 5-->

                                <div class="carousel-item">
                                    <div class="row justify-content-md-between justify-content-center ">
                                        <div class="tarjeta-cliente col">
                                            <div class="img-cliente">
                                                <img src="imgs/cliente5.jpg" alt="">
                                            </div>
                                            <h3>Ana</h3>
                                            <p>“ Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut
                                                dignissimos
                                                voluptate
                                                animi incidunt odio nulla voluptas distinctio cum voluptatem ad. ”
                                            </p>

                                            <div class="estrellas">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!--Cliente 6-->

                                <div class="carousel-item">
                                    <div class="row justify-content-md-between justify-content-center ">
                                        <div class="tarjeta-cliente col">
                                            <div class="img-cliente">
                                                <img src="imgs/cliente6.jpg" alt="">
                                            </div>
                                            <h3>Romina</h3>
                                            <p>“ Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut
                                                dignissimos
                                                voluptate
                                                animi incidunt odio nulla voluptas distinctio cum voluptatem ad. ”
                                            </p>
                                            <div class="estrellas">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- Contacto -->
    <section class="contacto mt-4" id="contacto">
        <div class="container">
            <div class="row cont-formulario">
                <div class="col">
                    <div class="row">
                        <div class="col-izq col-md-6 col-12 text-center p-0">
                            <div class="formulario">
                                <h2 class="titulos">Contacto</h2>
                                <form action="enviarCorreo.php" method="POST">
                                    <div>
                                        <input type="text" placeholder="*Apellido" class="input-formulario"
                                            name="apellido" autocomplete="off" required>
                                    </div>

                                    <div>
                                        <input type="text" placeholder="*Nombre" class="input-formulario" name="nombre"
                                            autocomplete="off" required>
                                    </div>
                                    <div>
                                        <input type="email" placeholder="*Correo electrónico" class="input-formulario"
                                            name="correo" autocomplete="off" required>
                                    </div>
                                    <div>
                                        <textarea placeholder="*Mensaje" class="input-formulario mensaje" name="mensaje"
                                            autocomplete="off" required></textarea>
                                    </div>

                                    <div class="d-grid gap-2">
                                        <input type="submit" name="enviar_mensaje" class="btn-enviar btn btn-primary"
                                            value="Enviar">
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 foto">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Pie de página -->

    <footer>
        <div class="container text-center ">
            <ul class="redes_footer justify-content-center mb-2 ">
                <li>
                    <a class="py-0" href="#"><i class="fab fa-facebook-square"></i></a>
                </li>

                <li>
                    <a class="py-0" href="#"><i class="fab fa-instagram-square"></i></a>
                </li>

                <li>
                    <a class="py-0" href="#"><i class="fab fa-youtube-square"></i></a>
                </li>

                <li>
                    <a class="py-0" href="https://wa.me/543513912873"><i class="fab fa-whatsapp-square"></i></a>
                </li>
            </ul>

            <span>©2021 Alfa Estampados - Todos los derechos reservados.</span>

        </div>

    </footer>

    <!-- botón volver arriba -->

    <div class="cont-flecha" id="#header">
        <a href="#" class="volver-arriba">
            <i class="icono-flecha fas fa-chevron-circle-up"></i>
        </a>
    </div>

    <!-- Javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="app.js"></script>

    <!-- Jquery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</body>

</html>