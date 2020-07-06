<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/et-line-icon.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Header Area Start -->
		<header class="top">
			<div class="header-area two header-sticky">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-6">
							<div class="logo">
								<a href="index.html"><img src="img/logo/logo3.png" alt="eduhome" /></a>
							</div>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-6">
                            <div class="content-wrapper text-right">
                                <!-- Main Menu Start -->
                                <div class="main-menu">
                                    <nav>
                                        @include('partials.nav')
                                    </nav>
                                </div>
                                <!--Search Form Start-->
                                <div class="search-btn">
                                    <ul data-toggle="dropdown" class="header-search search-toggle">
                                        <li class="search-menu">
                                            <i class="fa fa-search"></i>
                                        </li>
                                    </ul>
                                    <div class="search">
                                        <div class="search-form">
                                            <form id="search-form" action="#">
                                                <input type="search" placeholder="Search here..." name="search" />
                                                <button type="submit">
                                                    <span><i class="fa fa-search"></i></span>
                                                </button>
                                            </form>                                
                                        </div>
                                    </div>
                                </div>	
                                <!--End of Search Form-->
                                <!-- Main Menu End -->
                            </div>
						</div>
                        <div class="col-xs-12">
                            <div class="mobile-menu hidden-lg hidden-md hidden-sm"></div> 
                        </div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header Area End -->
        
        @yield('content')

        <!-- Footer Start -->
        <footer class="footer-area">
            <div class="main-footer" style="padding-top: 50px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-widget pr-60">
                                <div class="footer-logo pb-25">
                                    <a href="index.html"><img src="img/logo/logo3.png" alt="eduhome"></a>
                                </div>
                                <p>I must explain to you how all this mistaken idea of denoung pleure and praising pain was born and give you a coete account of the system. </p>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                        <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
                                    </ul>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3>información</h3>
                                <ul>
                                    <li><a href="#">Secretaría de Desarrollo</a></li>
                                    <li><a href="#">Secretaría de Finanzas</a></li>
                                    <li><a href="#">Jefatura de Sistemas</a></li>
                                    <li><a href="#">Jefatura de Medio Ambiente</a></li>
                                    <li><a href="#">TimeTable</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3>enlaces de interés</h3>
                                <ul>
                                    <li><a href="#">Subalcaldías</a></li>
                                    <li><a href="#">Distritos</a></li>
                                    <li><a href="teacher.html">Medio Ambiente</a></li>
                                    <li><a href="#">teams &amp; conditions</a></li>
                                    <li><a href="event.html">our events</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3>ponerse en contacto</h3>
                                <p>Your address goes here, Street<br>City, Roadno 785 New York</p>
                                <p>+880  548  986  898  87<br>+880  659  785  658  98</p>
                                <p>info@sucre.bo<br>www.sucre.bo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <p>Copyright © <a href="https://devitems.com/" target="_blank">Jefatura de Tecnologías de la Información</a> {{ date('Y') }}. Todos los derechos reservados.</p>
                        </div> 
                    </div>
                </div>    
            </div>
        </footer>
        <!-- Footer End -->

        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.meanmenu.js"></script>
        <script src="js/jquery.magnific-popup.js"></script>
        <script src="js/ajax-mail.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.mb.YTPlayer.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
