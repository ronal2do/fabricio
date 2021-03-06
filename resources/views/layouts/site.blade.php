<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 7 ]> <html lang="pt-BR" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="pt-BR" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="pt-BR" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="pt-BR"><!--<![endif]-->
<html lang="pt-BR" ng-app="balneario">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fabricio Oliveira</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">

    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<nav class="navbar navbar-light navbar-fixed-top">
  <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
    &#9776;
  </button>
  <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
    <div class="container Nav">
        <a class="navbar-brand" href="/"><img src="./img/logo.png" alt="" style="max-width:100%;"></a>
        <ul class="nav navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="/biografias#fabricio">Fabrício <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/biografias#carlos">Carlos Humberto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#videos">Vídeos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#agenda">Agenda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/fotos">Fotos</a>
          </li>
        </ul>

        <ul class="nav navbar-nav pull-xs-right">

            <div class="col-xs-4">
                <div class="social">
                    <a class="link" href="https://www.facebook.com/fabriciooliveira05/?fref=ts" target="_blank">
                        <i class="fa fa-facebook fa-fw"></i>
                    </a>
                </div>
            </div>

            <div class="col-xs-4">
                <div class="social">
                    <a class="link" href="https://www.instagram.com/fabriciooliveirabc/" target="_blank">
                        <i class="fa fa-instagram fa-fw"></i>
                    </a>
                </div>
            </div>

            <div class="col-xs-4">
                <div class="social">
                    <a class="link" href="https://www.youtube.com/channel/UC5DsmBGsyR5dMmxl4NokHqA?sub_confirmation=1" target="_blank">
                        <i class="fa fa-youtube fa-fw"></i>
                    </a>
                </div>
            </div>

        </ul>

    </div>
  </div>
</nav>


    @yield('content')


<section class="footer">
    <div class="container">
        <div class="col-sm-4">
            <img src="./img/logo_footer.png" alt="" style="max-width: 100%">
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="col-xs-4">
                <div class="social-footer facebook">
                    <a class="link" href="https://www.facebook.com/fabriciooliveira05/?fref=ts" target="_blank">
                        <i class="fa fa-facebook fa-fw fa-3x"></i>
                    </a>
                </div>
       
            </div>
            <div class="col-xs-4">
                <div class="social-footer">
                    <a class="link" href="https://www.instagram.com/fabriciooliveirabc/" target="_blank">
                        <i class="fa fa-instagram fa-fw fa-3x"></i>
                    </a>
                </div>

            </div>
            <div class="col-xs-4">
                <div class="social-footer">
                    <a class="link" href="https://www.youtube.com/channel/UC5DsmBGsyR5dMmxl4NokHqA?sub_confirmation=1" target="_blank">
                        <i class="fa fa-youtube fa-fw fa-3x"></i> 
                    </a>
                </div>
      
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container text-sm-center">
        <p class="p">COLIGAÇÃO MAJORITÁRIA Partidos Integrantes - PSB, PR, REDE, PTB, PMB, PROS, PHS, PTC, PEN, Solidariedade, PTdoB, PDT - Nome da Coligação Balneário de Novas Ideias.</p>
    </div>
</footer>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<!-- <script src="js/bootstrap-image-gallery.min.js"></script> -->
<script src="js/owl.carousel.min.js"></script>
<script src="js/angular.min.js"></script>
<script src="js/ngMask.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<script src="js/app.js"></script>
<script src="js/main.js"></script>


<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
    <!-- Include this after the sweet alert js file -->
    @include('sweet::alert')
</body>
</html>
