<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Site d'informations sur l'intelligence artificielle</title>

    <meta name="description" content="Site d'informations sur l'intelligence artificielle">
    <meta name="keywords" content="IA">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ secure_asset('assets/img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ secure_asset('assets/img/favicon.png') }}">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="{{ secure_asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ secure_asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('assets/css/responsive.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <header id="masthead" class="site-header site-header-white">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">

                <div class="navbar-header">

                    <h3>Site d'informations sur l'intelligence artificielle</h3>

                </div>

                <div class="collapse navbar-collapse" id="agency-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="/">Home</a></li>
                        <li><a href="/listeNonConfirm">Confirmer Information</a></li>
                        <li><a href="#">Se deconnecter</a></li>

                    </ul>

                </div>

            </div>
        </nav>
    </header>

    <div id="hero" class="hero overlay subpage-hero blog-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Blog</h1>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->


    <!-- CONTENU -->
    <main id="main" class="site-main">

        <section class="site-section subpage-site-section section-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        @foreach($infos as $info)
                        <article class="blog-post">
                        <img src="{{ secure_asset('imgs/' . $info->photo) }}" class="img-res" alt="">
                            <div class="post-content">
                                <h2 class="post-title">{{$info->titre}}</h2>
                                <p>{{$info->contenu}}</p>
                                <div class="post-meta">
                                    <span class="post-author">
                                        Author : <a href="#">John Smith</a>
                                    </span>
                                    <span class="post-date">
                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{$info->dateajout}}</a>
                                    </span>
                                    <span>
                                        <a href="/publier/{{ $info->idinfo }}"><button class="btn btn-success">Publier</button></a>
                                    </span>
                                </div><!-- /.post-meta -->
                            </div><!-- /.post-content -->
                        </article><!-- /.blog-post -->
                        @endforeach
                    </div>
                </div>
            </div>
        </section><!-- /.section-portfolio -->

    </main><!-- /#main -->
    <!-- CONTENU -->




    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a class="site-title"><span>Agency</span>Perfect</a>
                    <p>We're a digital agency focused on creative and results-driven solutions.</p>
                    <p>We measure our success by the results we drive for our clients.</p>
                </div>
                <div class="col-lg-offset-4 col-md-3 col-sm-4 col-md-offset-2 col-sm-offset-0 col-xs-6 ">
                    <h3>Keep in touch</h3>
                    <ul class="list-unstyled contact-links">
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@agencyperfect.com">info@agencyperfect.com</a></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+37400800000">+374 (00) 80 00 00 </a></li>
                        <li><i class="fa fa-fax" aria-hidden="true"></i><a href="+37400900000">+374 (00) 90 00 00</a></li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                            <p>20 Leo, Armenia</p>
                        </li>
                    </ul>
                </div>
                <div class="clearfix visible-xs"></div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <h3>Featured links</h3>
                    <ul class="list-unstyled">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="portfolio.html">Porfolio</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8">
                        <div class="social-links">
                            <a class="twitter-bg" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="facebook-bg" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                            <a class="linkedin-bg" href="#"><i class="fa fa-linkedin"></i></a>
                        </div><!-- /.social-links -->
                    </div>
                    <div class="col-xs-4">
                        <div class="text-right">
                            <p>&copy; AgencyPerfect</p>
                            <p>All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.copyright -->
    </footer><!-- /#footer -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{ secure_asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/jquery.countTo.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/jquery.shuffle.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/script.js') }}"></script>

</body>

</html>
