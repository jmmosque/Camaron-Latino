<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Acerca de Nosotros | Camarón Latino</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Navegación</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="about-us.html">Acerca de Nosotros</a></li>
                        <li><a href="services.html">Servicios</a></li>
                        <li><a href="portfolio.html">Portafolio</a></li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Páginas <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Blog Solo</a></li>
                                <li class="active"><a href="pricing.html">Precios</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="shortcodes.html">Códigos cortos</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li> 
                        <li><a href="contact-us.html">Contacto</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

    <section class="pricing-page">
        <div class="container">
            <div class="center">  
                <h2>Tabla de Precios</h2>
                <p class="lead">Camarón Latino</p>
            </div>  
            <div class="pricing-area text-center">
                <div class="row">
                    <div class="col-sm-4 plan price-one wow fadeInDown">
                        <ul>
                            <li class="heading-one">
                                <h1>Start Up</h1>
                                <span>$6/Month</span>
                            </li>
                            <li>5 Gb Disk Space</li>
                            <li>1GB Dadicated Ram</li>
                            <li>10 Addon Domain</li>
                            <li>10 Email Account</li>
                            <li>24/7 Support</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-two wow fadeInDown">
                        <ul>
                            <li class="heading-two">
                                <h1>Standerd</h1>
                                <span>$12/Month</span>
                            </li>
                            <li>10 Gb Disk Space</li>
                            <li>2GB Dadicated Ram</li>
                            <li>20 Addon Domain</li>
                            <li>20 Email Account</li>
                            <li>24/7 Support</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-three wow fadeInDown">
                        <img src="images/ribon_one.png">
                        <ul>
                            <li class="heading-three">
                                <h1>Premium</h1>
                                <span>$24/Month</span>
                            </li>
                            <li>50 Gb Disk Space</li>
                            <li>8GB Dadicated Ram</li>
                            <li>Unlimited Addon Domain</li>
                            <li>Unlimited Email Account</li>
                            <li>24/7 Support</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-four wow fadeInDown">
                        <ul>
                            <li class="heading-four">
                                <h1>Basic</h1>
                                <span>$3/Month</span>
                            </li>
                            <li>5 Gb Disk Space</li>
                            <li>1GB Dadicated Ram</li>
                            <li>10 Addon Domain</li>
                            <li>10 Email Account</li>
                            <li>24/7 Support</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-five wow fadeInDown">
                        <ul>
                            <li class="heading-five">
                                <h1>Standerd</h1>
                                <span>$6/Month</span>
                            </li>
                            <li>5 Gb Disk Space</li>
                            <li>1GB Dadicated Ram</li>
                            <li>10 Addon Domain</li>
                            <li>10 Email Account</li>
                            <li>24/7 Support</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-six wow fadeInDown">
                         <img src="images/ribon_two.png">
                        <ul>
                            <li class="heading-six">
                                <h1>Premium</h1>
                                <span>$12/Month</span>
                            </li>
                            <li>5 Gb Disk Space</li>
                            <li>1GB Dadicated Ram</li>
                            <li>10 Addon Domain</li>
                            <li>10 Email Account</li>
                            <li>24/7 Support</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>
                    </div>

                     <div class="col-sm-6 col-md-3 plan price-seven wow fadeInDown">
                        <ul>
                            <li class="heading-seven">
                                <h1>Developer</h1>
                                <span>$19/Month</span>
                            </li>
                            <li>5 Gb Disk Space</li>
                            <li>1GB Dadicated Ram</li>
                            <li>10 Addon Domain</li>
                            <li>10 Email Account</li>
                            <li>24/7 Support</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--/pricing-area-->
        </div><!--/container-->
    </section><!--/pricing-page-->
           
    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">Acerca de Nosotros</a></li>
                            <li><a href="#">Estamos contratando</a></li>
                            <li><a href="#">Conoce nuestro equipo de trabajo</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Términos de uso</a></li>
                            <li><a href="#">Políticas de uso</a></li>
                            <li><a href="#">Contáctenos</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Soporte</h3>
                        <ul>
                            <li><a href="#">Preguntas más frecuentes</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Foro</a></li>
                            <li><a href="#">Documentación</a></li>
                            <li><a href="#">Plíticas de reembolso</a></li>
                            <li><a href="#">Sistema de tickets</a></li>
                            <li><a href="#">Sistema de cobranza</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Desarrolladores</h3>
                        <ul>
                            <li><a href="#">Desarrolladores Web</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Tema</a></li>
                            <li><a href="#">Desarrollo</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin de Desarrollo</a></li>
                            <li><a href="#">Artículo Escrito</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. Todos los Derechos Reservados.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Acerca de Nosotros</a></li>
                        <li><a href="#">Preguntas más frecuentes</a></li>
                        <li><a href="#">Contáctenos</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>