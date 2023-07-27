<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content>
    <meta name="description" content>
    <title>Compu Actual  - index</title>
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!--owl carousel css-->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <!--magnific popup css-->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <!--icomoon css-->
    <link rel="stylesheet" type="text/css" href="css/icomoon.css">
    <!--icofont css-->
    <link rel="stylesheet" type="text/css" href="css/icofont.min.css">
    <!--animate css-->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!--main css-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--responsive css-->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>

<body>
    <!--Start Preloader-->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell align-middle">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>
    <!--End Preloader-->
    <!--start header-->
    <header id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo -->
            <a class="" data-scroll-nav="1">
            <img src="https://cdn-icons-png.flaticon.com/512/1802/1802913.png"
                     alt="" width="80" height="80"> CompuActual | El equipo más moderno</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"><i class="icofont-navigation-menu"></i></span>
                    </button>
                    <!-- navbar links -->
                    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ route('home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Volver al home</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar sesión</a>
            
                                    @if (Route::has('register'))
                                        
                                    @endif
                                @endauth
                            </div>
                        @endif
            </nav>
        </div>
    </header>
    <!--end header-->
    <!--start home area-->
    <section id="home-area" data-scroll-index="0">
        <div class="container">
            <div class="row">
                <!--start caption content-->
                <div class="col-md-6">
                    <div class="caption d-table">
                        <div class="d-table-cell align-center">
                            <h1>¡Bienvenid@ a CompuActual!</h1>
                            <p></p>
                            <a href="#">Conócenos</a>
                        </div>
                    </div>
                </div>
                <!--end caption content-->
                <!--start caption image-->
                <div class="col-md-6">
                    <div class="caption-img text-right">
                        <img src="images/hello.jpg" class="img-fluid" alt>
                    </div>
                    
                </div>
                <!--end caption image-->
    <!--start testimonial area-->
    <section class="testi-area bg-gray" data-scroll-index="5">
        <div class="container">
            <div class="row">
                <!--start section heading-->
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                    <div class="section-heading text-center">
                        <h2>¿Quiénes somos?</h2>
                    </div>
                </div>
                <!--end section heading-->
            </div>
            <!--start testimonial carousel-->
            <div class="testi-carousel owl-carousel">
                <!--start testimonial single-->
                <div class="testi-single text-center">
                    <div class="client-info">
                        <div class="client-img">
                        
                        </div>
                        <div class="client-details">
                            <h4>Historia</h4>
                        </div>
                    </div>
                    <div class="client-comment">
                        <span><i class="icofont-quote-left"></i></span>
                        <p class="mb-2"></p>
                        <p class="text-justify"><strong>"CompuActual"</strong> Ubicada en camino Real a San Mateo No. 365C, de la localidad de Santa Ana Xalmimilulco, Puebla. <br> Fundada el 21 de Enero de 2019 por el ingeniero Miguel Ocaña Ascencio. Actualmente cuenta con servicios de asistencia y soporte técnico.</p>

                    </div>
            </div>
                <!--end testimonial single-->
                <!--start testimonial single-->
                <div class="testi-single text-center">
                    <div class="client-info">
                        <div class="client-img">
                            <img src="" class="img-fluid" alt>
                        </div>
                        <div class="client-details">
                            <h4>Misión</h4>
                        </div>
                    </div>
                    <div class="client-comment">
                        <span><i class="icofont-quote-left"></i></span>
                        <p class="mb-2"></p>
                        <p class="text-justify"> Servir y transformar a México ayudando a las personas a alcanzar su mayor potencial tecnológico</p>
                    </div>
                </div>
                <!--end testimonial single-->
                <!--start testimonial single-->
                <div class="testi-single text-center">
                    <div class="client-info">
                        <div class="client-img">
                            <img src="" class="img-fluid" alt>
                        </div>
                        <div class="client-details">
                            <h4>Visión</h4>
                        </div>
                    </div>
                    <div class="client-comment">
                        <span><i class="icofont-quote-left"></i></span>
                        <p class="mb-2"></p>
                        <p class="text-justify"> En 2025 ser a nivel estatal la empresa referente en calidad y valor entregado por cada soporte tecnico concluido</p
                    </div>
                </div>
                <!--end testimonial single-->
                <!--start testimonial single-->
                
                <!--end testimonial single-->
                <!--start testimonial single-->
                
                <!--end testimonial single-->
            </div>
            <!--end testimonial carousel-->
        </div>
    </section>
        
    
    

    <!--end video area-->
    <!--start why choose area-->
    
    
    <!--end why choose area-->
    <!--start product area-->
    
    <!--end testimonial area-->
    <!--start contact area-->
    <section id="contact-area" data-scroll-index="6">
        <div class="container">
            <div class="row">
                <!--start section heading-->
                <div class="col-lg-6 col-md-6">
                    <div class="section-heading">
                        <h2>Contacta con nosotros</h2>
                        <p>Déjanos un mensaje y en breve nos comunicaremos contigo para atender tu petición.</p>
                    </div>
                </div>
                <!--end section heading-->
            </div>
            <div class="row">
                <!--start contact form-->
                <div class="col-md-7">
                    <div class="contact-form">
                        <form id="ajax-contact" action="contact.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre*" required="required" data-error="El nombre es obligatorio.">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico*" required="required" data-error="El correo electrónico es obligatorio.">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message" rows="10" placeholder="Escribe tu comentario*" required="required" data-error="Por favor escriba un comentario."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <button type="submit">Enviar comentario</button>
                            <div class="messages"></div>
                        </form>
                    </div>
                </div>
                <!--end contact form-->
                <!--start contact image-->
                <div class="col-md-5">
                    <div class="contact-img text-center">
                        <img src="images/contact.svg" class="img-fluid animation-jump" alt>
                    </div>
                </div>
                <!--end contact image-->
            </div>
        </div>
    </section>
    <!--end contact area-->
    <!--start footer-->
    <footer id="footer" class="md-gray">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <div class="footer-social">
                        <ul>
                            <li><span>Síguenos en:</span></li>
                            <li><a href="https://www.facebook.com/Compuactual/?locale=es_LA"><i class="icofont-facebook"></i></a></li>
                            <li><a href="https://mobile.twitter.com"><i class="icofont-twitter"></i></a></li>
                    <p class="text-center py-4">NovaSystems ®<br>
                                Copyright © 2023 Todos los derechos reservados<br>
                    </p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end footer-->
    <!--jQuery js-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!--proper js-->
    <script src="js/popper.min.js"></script>
    <!--bootstrap js-->
    <script src="js/bootstrap.min.js"></script>
    <!--magnic popup js-->
    <script src="js/magnific-popup.min.js"></script>
    <!--owl carousel js-->
    <script src="js/owl.carousel.min.js"></script>
    <!--scrollIt js-->
    <script src="js/scrollIt.min.js"></script>
    <!--validator js-->
    <script src="js/validator.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <!--main js-->
    <script src="js/custom.js"></script>
</body>

</html>
