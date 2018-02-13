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
    <title>Blog | Camarón Latino</title>
    
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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Páginas <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Blog</a></li>
                                <li><a href="pricing.html">Precios</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="shortcodes.html">Códigos cortos</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="blog.html">Blog</a></li> 
                        <li><a href="contact-us.html">Contacto</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

    <section id="blog" class="container">
        <div class="center">
            <h2>Blogs</h2>
            <p class="lead"></p>
        </div>

        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                                    <span id="publish_date">07  NOV</span>
                                    <span><i class="fa fa-user"></i> <a href="#">John Doe</a></span>
                                    <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments">2 Comments</a></span>
                                    <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                                </div>
                            </div>
                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <a href="#"><img class="img-responsive img-blog" src="images/blog/blog1.jpg" width="100%" alt="" /></a>
                                <h2><a href="blog-item.html">Camarón Latino</a></h2>
                                <h3>Somos una comunidad dedicada a ofrecer los mejores servicios y productos para el desarrollo camaronero del país. Con respuesta directa de los mejores proveedores.</h3>
                                <a class="btn btn-primary readmore" href="blog-item.html">Seguir leyendo <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                        
                    <div class="blog-item">
                        <div class="row">
                             <div class="col-sm-2 text-center">
                                <div class="entry-meta"> 
                                    <span id="publish_date">07  NOV</span>
                                    <span><i class="fa fa-user"></i> <a href="#">John Doe</a></span>
                                    <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments">2 Comments</a></span>
                                    <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                                </div>
                            </div>
                            <div class="col-sm-10 blog-content">
                                <a href=""><img class="img-responsive img-blog" src="images/blog/blog2.jpg" width="100%" alt="" /></a>
                                <h2><a href="blog-item.html">Somos una comunidad dedicada a ofrecer los mejores servicios y productos para el desarrollo camaronero del país. Con respuesta directa de los mejores proveedores.</h3>
                                <a class="btn btn-primary readmore" href="blog-item.html">Seguir leyendo <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                        
                    <ul class="pagination pagination-lg">
                        <li><a href="#"><i class="fa fa-long-arrow-left"></i>Página Anterior</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Siguiente Página<i class="fa fa-long-arrow-right"></i></a></li>
                    </ul><!--/.pagination-->
                </div><!--/.col-md-8-->

                <aside class="col-md-4">
                    <div class="widget search">
                        <form role="form">
                                <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                        </form>
                    </div><!--/.search-->
    				
    				<div class="widget categories">
                        <h3>Comentarios Recientes</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="single_comments">
                                    <img src="images/blog/avatar3.png" alt=""  />
                                    <p>Somos una comunidad dedicada a ofrecer los mejores servicios y productos para el desarrollo camaronero del país. Con respuesta directa de los mejores proveedores.</p>
                                    <div class="entry-meta small muted">
                                        <span>Hecho por <a href="#">Jennifer</a></span <span>para <a href="#">Camarón Latino</a></span>
                                    </div>
                                </div>
                                <div class="single_comments">
                                    <img src="images/blog/avatar3.png" alt=""  />
                                    <p>Somos una comunidad dedicada a ofrecer los mejores servicios y productos para el desarrollo camaronero del país. Con respuesta directa de los mejores proveedores.</p>
                                    <div class="entry-meta small muted">
                                        <span>Hecho por <a href="#">Jennyfer</a></span <span>para <a href="#">Camarón Latino</a></span>
                                    </div>
                                </div>
                                <div class="single_comments">
                                    <img src="images/blog/avatar3.png" alt=""  />
                                    <p>Somos una comunidad dedicada a ofrecer los mejores servicios y productos para el desarrollo camaronero del país. Con respuesta directa de los mejores proveedores.</p>
                                    <div class="entry-meta small muted">
                                        <span>Hecho por <a href="#">Jennyfer</a></span <span>para <a href="#">Camarón Latino</a></span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->
                     

                    <div class="widget categories">
                        <h3>Categorías</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="blog_category">
                                    <li><a href="#">Computadores <span class="badge">04</span></a></li>
                                    <li><a href="#">Teléfonos inteligentes <span class="badge">10</span></a></li>
                                    <li><a href="#">Gatgets <span class="badge">06</span></a></li>
                                    <li><a href="#">Tecnología <span class="badge">25</span></a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.categories-->
    				
    				<div class="widget blog_gallery">
                        <h3>Nuestra Galería</h3>
                        <ul class="sidebar-gallery">
                            <li><a href="#"><img src="images/blog/gallery1.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery2.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery3.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery4.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery5.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery6.png" alt="" /></a></li>
                        </ul>
                    </div><!--/.blog_gallery-->
    			</aside>  
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->

    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Compañía</h3>
                        <ul>
                            <li><a href="#">Acerca de Nosotros</a></li>
                            <li><a href="#">Estamos Contratando</a></li>
                            <li><a href="#">Conoce el equipo de trabajo</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Términos de Uso</a></li>
                            <li><a href="#">Política de privacidad</a></li>
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
                            <li><a href="#">Plítica de reembolso</a></li>
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
                            <li><a href="#">Desarrollo</a></li>
                            <li><a href="#">Correo de Marketing</a></li>
                            <li><a href="#">Plugin de Desarrollo</a></li>
                            <li><a href="#">Escritura del Artículo</a></li>
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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>