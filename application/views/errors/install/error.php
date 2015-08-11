<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<HTML xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" > 
	<head>
		<title>Initialize CMS | Instalação</title>
    	<!-- Meta -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="<?= $obj->config->item('name'); ?> - Servidor Dofus">
    	<meta name="author" content="Skytrust">
    	<!-- Favicon -->
    	<link rel="shortcut icon" href="<?= img_url('favicon.ico'); ?>">
    	<!-- CSS Global Compulsory -->
    	<link rel="stylesheet" href="<?= plug_url('bootstrap/css/bootstrap.min.css'); ?>">
    	<link rel="stylesheet" href="<?= css_url('style'); ?>">
		<script src='https://www.google.com/recaptcha/api.js'></script>
    	<!-- CSS Implementing Plugins -->
    	<link rel="stylesheet" href="<?= plug_url('line-icons/line-icons.css'); ?>">
    	<link rel="stylesheet" href="<?= plug_url('font-awesome/css/font-awesome.min.css'); ?>">
    	<link rel="stylesheet" href="<?= plug_url('flexslider/flexslider.css'); ?>">  
    	<link rel="stylesheet" href="<?= plug_url('parallax-slider/css/parallax-slider.css'); ?>">
		<link rel="stylesheet" href="<?= css_url('plugins/brand-buttons/brand-buttons'); ?>">
		<link rel="stylesheet" href="<?= css_url('plugins/brand-buttons/brand-buttons-inversed'); ?>">
		<link rel="stylesheet" href="<?= plug_url('cube-portfolio/cubeportfolio/css/cubeportfolio.css'); ?>">
		<link rel="stylesheet" href="<?= plug_url('sky-forms/version-2.0.1/css/custom-sky-forms.css'); ?>">
		 <!--[if lt IE 9]>
        <link rel="stylesheet" href="assets/plugins/sky-forms/version-2.0.1/css/sky-forms-ie8.css">
    	<![endif]-->
    	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    	<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    	<![endif]-->
    	<!-- CSS Theme -->    
    	<link rel="stylesheet" href="<?= css_url('theme-colors/default'); ?>" id="style_color">
    	<link rel="stylesheet" href="<?= css_url('theme-skins/dark'); ?>">
   		<!-- CSS Customization -->
    	<link rel="stylesheet" href="<?= css_url('custom'); ?>">
	</head>
	<body>
		<!--=== Wrapper ===-->
		<div class="wrapper">

		<!--=== Navbar ===-->    
    	<div class="header">
        	<!-- Topbar -->
        	<div class="topbar">
            	<div class="container">
                	<!-- Topbar Navigation -->
                	<ul class="loginbar pull-right">
                    	<li class="languagesSelector">
                        	<i class="fa fa-globe"></i>
                        	<a>Idioma</a>
                        	<ul class="languages">
                            	<li class="active"><a href="#">Português <i class="fa fa-check"></i></a></li>
                        	</ul>
                    	</li>
                    	<li class="topbar-devider"></li>   
                    	<li><a><i class="fa fa-info"></i> Instalação</a></li>  
                	</ul>
                	<!-- End Topbar Navigation -->
            	</div>
        	</div>
        	<!-- End Topbar -->
        	<!-- Navbar -->
        	<div class="navbar navbar-default mega-menu" role="navigation">
            	<div class="container">
                	<!-- Brand and toggle get grouped for better mobile display -->
                	<div class="navbar-header">
                    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        	<span class="sr-only">Toggle navigation</span>
                        	<span class="fa fa-bars"></span>
                    	</button>
                    	<a class="navbar-brand">
                        	<img id="logo-header" src="<?= img_url('logo.jpg'); ?>" alt="Logo" width=100>
                    	</a>
                	</div>
                	<!-- Collect the nav links, forms, and other content for toggling -->
                	<div class="collapse navbar-collapse navbar-responsive-collapse">
                    	<ul class="nav navbar-nav">
                        	<!-- Home -->
                        	<li class="active">
                            	<a>Instalação</a>
                        	</li>
                        	<!-- End of home -->
                    	</ul>
                	</div><!--/navbar-collapse-->
            	</div>    
        	</div>            
    	</div>
    	<!--=== End of Navbar ===-->    

		<!--=== Content ===-->
		<br/>
        <center>
            <div class="row">
            <div class="col-md-offset-2 col-md-8">
            <div class="alert alert-<?= $type_e; ?>" role="alert">
                <span class="fa fa-<?= $icon; ?>" aria-hidden="true"></span>
                <span class="sr-only">Erro:</span>
                <?= $message; ?>
            </div>
            </div>
            </div>
            <meta http-equiv="refresh" content="<?= $time; ?>;URL=<?= $url; ?>">
        </center>
		<!--=== End of Content ===-->

		<!--=== Footer ===-->
    	<div class="footer-v1">
        	<div class="copyright">
            	<div class="container">
                	<div class="row">
                    	<div class="col-md-6">                     
                        	<p>2015 &copy; Initialize CMS code by Liox et Skytrust, All rights reserved.
                        	</p>
                    	</div>
                	</div>
            	</div> 
        	</div><!--/copyright-->
    	</div>
    	<!--=== End of Footer ===-->
    	</div>
    	<!--=== End of Wrapper ===-->
		<!-- JS Global Compulsory -->			
		<script type="text/javascript" src="<?= plug_url('jquery/jquery.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= plug_url('jquery/jquery-migrate.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= plug_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
		<!-- JS Implementing Plugins -->
		<script type="text/javascript" src="<?= plug_url('back-to-top.js'); ?>"></script>
		<script type="text/javascript" src="<?= plug_url('flexslider/jquery.flexslider-min.js'); ?>"></script>
		<script type="text/javascript" src="<?= plug_url('parallax-slider/js/modernizr.js'); ?>"></script>
		<script type="text/javascript" src="<?= plug_url('parallax-slider/js/jquery.cslider.js'); ?>"></script>
		<!-- JS Customization -->
		<script type="text/javascript" src="<?= js_url('custom'); ?>"></script>
		<!-- JS Page Level -->           
		<script type="text/javascript" src="<?= js_url('app'); ?>"></script>
		<script type="text/javascript" src="<?= js_url('plugins/parallax-slider'); ?>"></script>
		<script type="text/javascript" src="<?= js_url('plugins/style-switcher'); ?>"></script>
		<script type="text/javascript">
    	jQuery(document).ready(function() {
      		App.init();
        	App.initSliders();
        	StyleSwitcher.initStyleSwitcher();      
        	ParallaxSlider.initParallaxSlider();
    	});
		</script>
	</body>
</HTML>