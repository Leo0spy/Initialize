<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<HTML xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" > 
	<head>
		<title><?= $obj->config->item('name'); ?> | <?= $obj->config->item('title'); ?></title>
    	<!-- Meta -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="<?= $obj->config->item('name'); ?> - Serveur privé Dofus 1.29.">
    	<meta name="author" content="Liox | Agora">
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
                        	<a>Langues</a>
                        	<ul class="languages">
                            	<li class="active"><a href="#">Français <i class="fa fa-check"></i></a></li>
                        	</ul>
                    	</li>
                    	<li class="topbar-devider"></li>   
                    	<li><a href="index.php?p=faq"><i class="fa fa-info"></i> FAQ</a></li>  
                    	<li class="topbar-devider"></li>			
                    	<li><a href="index.php?p=ticket"><i class="fa fa-ticket"></i> Ticket</a></li>
                    	<?php if($obj->session->userdata('guid')){ ?>
                    	<li class="topbar-devider"></li>
						<li><a href="<?= site_url('user/account'); ?>"><i class="fa fa-user"></i> Mon compte</a></li>
						<li class="topbar-devider"></li>
						<li><a href="<?= site_url('user/logout'); ?>"><i class="fa fa-user-times"></i> Se déconnecter</a></li> 
						<?php } else{ ?> 
						<li class="topbar-devider"></li> 
                    	<li><a href="<?= site_url('user/login'); ?>"><i class="fa fa-unlock"></i> Se Connecter</a></li>  
                    	<?php } ?> 
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
                    	<a class="navbar-brand" href="<?= base_url(); ?>">
                        	<img id="logo-header" src="<?= img_url('logo.jpg'); ?>" alt="Logo" width=100>
                    	</a>
                	</div>
                	<!-- Collect the nav links, forms, and other content for toggling -->
                	<div class="collapse navbar-collapse navbar-responsive-collapse">
                    	<ul class="nav navbar-nav">
                        	<!-- Home -->
                        	<li class="active">
                            	<a href="<?= base_url(); ?>">Accueil</a>
                        	</li>
                        	<!-- End of home -->
                        	<!-- Users -->                        
                        	<li class="dropdown">
                            	<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Utilisateur</a>
                            	<ul class="dropdown-menu">
                            		<?php if(!$obj->session->userdata('guid')){ ?>
                                	<li><a href="<?= site_url('user/login'); ?>"><i class="fa fa-unlock"></i> Se connecter</a></li>
									<li><a href="<?= site_url('user/register'); ?>"><i class="fa fa-reorder"></i> S'inscrire</a></li>
									<?php } else{ ?>
									<li><a href="<?= site_url('user/account'); ?>"><i class="fa fa-user"></i> Mon compte</a></li>
									<li><a href="<?= site_url('user/logout'); ?>"><i class="fa fa-user-times"></i> Se déconnecter</a></li>
									<?php } ?>
                            	</ul>
                        	</li>
                        	<!-- End of users -->
							<!-- Encyclopedia -->                        
                        	<li class="dropdown">
                            	<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Encyclopédie</a>
                            	<ul class="dropdown-menu">
									<li><a href="index.php?p=monsters"><i class="fa fa-book"></i> Bestiaire</a></li>
									<li><a href="index.php?p=item"><i class="fa fa-trophy"></i> Equipements</a></li>
                                	<li><a href="index.php?p=itemset"><i class="fa fa-bookmark"></i> Panoplies</a></li>
									<li><a href="index.php?p=search"><i class="fa fa-search"></i> Recherche</a></li>
                            	</ul>
                        	</li>
                        	<!-- End of Encyclopedia -->
							<!-- Community -->                        
                        	<li class="dropdown">
                            	<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Communauté</a>
                            	<ul class="dropdown-menu">
                                	<li><a href="<?= site_url('home/join'); ?>"><i class="fa fa-desktop"></i> Nous rejoindre</a></li>
									<li><a href="<?= site_url('ladder/'); ?>"><i class="fa fa-trophy"></i> Les classements</a></li>
									<li><a href="<?= site_url('home/staff'); ?>"><i class="fa fa-users"></i> L'équipe</a></li>
									<li><a href="<?= $obj->config->item('link_forum'); ?>"><i class="fa fa-comments"></i> Notre forum</a></li>
                            	</ul>
                        	</li>
                        	<!-- End of community -->
							<!-- Support -->                        
                        	<li class="dropdown">
                            	<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Assistance</a>
                            	<ul class="dropdown-menu">
                                	<li><a href="index.php?p=faq"><i class="fa fa-info"></i> FAQ</a></li>
									<li><a href="index.php?p=bugtracker"><i class="fa fa-bug"></i> Bugtracker</a></li>
                            	</ul>
                        	</li>
                        	<!-- End of support -->
							<!-- Vote -->
                        	<li>
                            	<a href="<?= site_url('points/vote'); ?>">Voter</a>
                        	</li>
                        	<!-- End of vote -->
                    	</ul>
                	</div><!--/navbar-collapse-->
            	</div>    
        	</div>            
    	</div>
    	<!--=== End of Navbar ===-->    

		<!--=== Style Switcher ===-->  
		<i class="style-switcher-btn fa fa-cogs hidden-xs"></i>
		<div class="style-switcher animated fadeInRight">
    		<div class="style-swticher-header">
        		<div class="style-switcher-heading">Thèmes</div>            
        		<div class="theme-close"><i class="icon-close"></i></div>
    		</div>
    		<div class="style-swticher-body">
        		<!-- Theme Colors -->
        		<div class="style-switcher-heading">Couleurs disponibles :</div>
        		<ul class="list-unstyled">
           			<li class="theme-default theme-active" data-style="default" data-header="light"></li>
            		<li class="theme-blue" data-style="blue" data-header="light"></li>
            		<li class="theme-orange" data-style="orange" data-header="light"></li>
            		<li class="theme-red" data-style="red" data-header="light"></li>
            		<li class="theme-light" data-style="light" data-header="light"></li>
            		<li class="theme-purple last" data-style="purple" data-header="light"></li>
            		<li class="theme-aqua" data-style="aqua" data-header="light"></li>
            		<li class="theme-brown" data-style="brown" data-header="light"></li>
            		<li class="theme-dark-blue" data-style="dark-blue" data-header="light"></li>
            		<li class="theme-light-green" data-style="light-green" data-header="light"></li>
            		<li class="theme-dark-red" data-style="dark-red" data-header="light"></li>
            		<li class="theme-teal last" data-style="teal" data-header="light"></li>
        		</ul>  
        		<!-- End of Theme Colors -->
    		</div>
		</div>
		<!--=== End of Style Switcher ===-->   

		<!--=== Content ===-->
		<br/>
        <center>
            <div class="row">
            <div class="col-md-offset-2 col-md-8">
            <div class="alert alert-<?= $type_e; ?>" role="alert">
                <span class="fa fa-<?= $icon; ?>" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
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
                        	<p>2015 &copy; <?= $obj->config->item('name'); ?> code by Liox, tous droit réservés.
                           	<a href="<?= site_url('home/cgu'); ?>">CGU</a>
                        	</p>
                    	</div>
                    	<!-- Social Links -->
                    	<div class="col-md-6">
                        	<ul class="footer-socials list-inline">
                            	<li>
                                	<a href="<?= $obj->config->item('fb_link'); ?>" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                	</a>
                            	</li>
                            	<li>
                                	<a href="<?= $obj->config->item('twt_link'); ?>" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                	</a>
                            	</li>
                        	</ul>
                    	</div>
                    	<!-- End of Social Links -->
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