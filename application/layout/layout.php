<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<HTML xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" > 
	<head>
		<title><?= $this->config->item('name'); ?> | <?= $this->config->item('title'); ?></title>
    	<!-- Meta -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="<?= $this->config->item('name'); ?> - Servidor Dofus 2.10.">
    	<meta name="author" content="Skytrust">
    	<!-- Favicon -->
    	<link rel="shortcut icon" href="<?= img_url('favicon.ico'); ?>">
    	<!-- CSS Global Compulsory -->
    	<link rel="stylesheet" href="<?= plug_url('bootstrap/css/bootstrap.min.css'); ?>">
    	<link rel="stylesheet" href="<?= css_url('style'); ?>">
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
        <!-- CSS Tooltipster --> 
        <link rel="stylesheet" href="<?= css_url('tooltip/tooltipster'); ?>">
        <link rel="stylesheet" href="<?= css_url('tooltip/tooltipster-light'); ?>">
        <link rel="stylesheet" href="<?= css_url('tooltip/tooltipster-noir'); ?>">
        <link rel="stylesheet" href="<?= css_url('tooltip/tooltipster-punk'); ?>">
        <link rel="stylesheet" href="<?= css_url('tooltip/tooltipster-shadow'); ?>">
   		<!-- CSS Customization -->
    	<link rel="stylesheet" href="<?= css_url('custom'); ?>">
        <link rel="stylesheet" href="<?= css_url('pages/shortcode_timeline1'); ?>">
        <link rel="stylesheet" href="<?= css_url('pages/blog'); ?>">
        <link rel="stylesheet" href="<?= css_url('page_log_reg_v1'); ?>">
        <link rel="stylesheet" href="<?= css_url('pages/page_job'); ?>">
        <link rel="stylesheet" href="<?= css_url('pages/blog_magazine'); ?>">
        <script src='https://www.google.com/recaptcha/api.js'></script>
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
                    	<li><a href="<?= site_url('support/faq'); ?>"><i class="fa fa-info"></i> FAQ</a></li>
                    	<?php if($this->session->userdata('Id')){ ?>
                    	<li class="topbar-devider"></li>
						<li><a href="<?= site_url('user/account'); ?>"><i class="fa fa-user"></i> Minha Conta</a></li>
						<li class="topbar-devider"></li>
						<li><a href="<?= site_url('user/logout'); ?>"><i class="fa fa-sign-out"></i> logout</a></li> 
						<?php } else{ ?> 
						<li class="topbar-devider"></li> 
                    	<li><a href="<?= site_url('user/login'); ?>"><i class="fa fa-sign-in"></i> Login</a></li>  
                        <li class="topbar-devider"></li> 
                        <li><a href="<?= site_url('user/register'); ?>"><i class="fa fa-user-plus"></i> Registrar</a></li>
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
                            	<a href="<?= base_url(); ?>">Home</a>
                        	</li>
                        	<!-- End of home -->
                        	<!-- Users -->                        
                        	<li class="dropdown">
                            	<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Utilisateur</a>
                            	<ul class="dropdown-menu">
                            		<?php if(!$this->session->has_userdata('Id')){ ?>
                                	<li><a href="<?= site_url('user/login'); ?>"> Login</a></li>
									<li><a href="<?= site_url('user/register'); ?>"> Registrar</a></li>
									<?php } else{ ?>
									<li><a href="<?= site_url('user/account'); ?>"> Minha Conta</a></li>
									<li><a href="<?= site_url('user/logout'); ?>"> Logout</a></li>
									<?php } ?>
                            	</ul>
                        	</li>
                        	<!-- End of users -->
                            <?php if($this->session->has_userdata('Id')){ ?>
                            <li>
                                <a href="<?= site_url('points/buy'); ?>">Loja</a>
                            </li>
                            <?php } ?>
							<!-- Community -->                        
                        	<li class="dropdown">
                            	<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Comunidade</a>
                            	<ul class="dropdown-menu">
                                	<li><a href="<?= site_url('home/join'); ?>"> Jogar</a></li>
									<li><a href="<?= site_url('ladder/'); ?>"> Ranking</a></li>
									<li><a href="<?= site_url('home/staff'); ?>"> Equipe</a></li>
                                    <li><a href="<?= site_url('blog/'); ?>"> Blog</a></li>
									<li><a href="<?= $this->config->item('link_forum'); ?>"> Nosso Forum</a></li>
                            	</ul>
                        	</li>
                        	<!-- End of community -->
							<!-- Support -->                        
                        	<li class="dropdown">
                            	<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Suporte</a>
                            	<ul class="dropdown-menu">
                                	<li><a href="<?= site_url('support/faq'); ?>"> FAQ</a></li>
									<li><a href="<?= site_url('support/bugtracker'); ?>"> Bugs</a></li>
                                    <?php if($this->session->has_userdata('Id')){ ?>
                                    <li><a href="<?= site_url('support/ticket'); ?>"> Ticket</a></li>
                                    <?php } ?>
                            	</ul>
                        	</li>
                        	<!-- End of support -->
                            <li>
                                <a href="<?= site_url('points/vote'); ?>">Votar</a>
                            </li>
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
        		<div class="style-switcher-heading">Cores disponíveis :</div>
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
                <?php if($this->session->has_userdata('Id') && $this->session->userdata('Role') >= $this->config->item('panel_level')){ ?>
                <hr/>
                <div class="style-switcher-heading">Painel Admin</div>
                <center><button data-skins="default" class="btn-u btn-u-xs btn-u-dark btn-block active-switcher-btn handle-skins-btn">Acessar</button></center>
    		    <?php } ?>
            </div>
		</div>
		<!--=== End of Style Switcher ===-->   

		<!--=== Content ===-->
		<?= $output; ?>
		<!--=== End of Content ===-->

		<!--=== Footer ===-->
    	<div class="footer-v1">
        	<div class="copyright">
            	<div class="container">
                	<div class="row">
                    	<div class="col-md-6">                     
                        	<p>2015 &copy; <?= $this->config->item('name'); ?> code by Liox et Skytrust, All rights reserved.
                           	<a href="<?= site_url('home/cgu'); ?>">TDU</a><br/>
                           Página gerada em <?= $this->benchmark->elapsed_time(); ?> segundos.
                        	</p>
                    	</div>
                    	<!-- Social Links -->
                    	<div class="col-md-6">
                        	<ul class="footer-socials list-inline">
                            	<li>
                                	<a href="<?= $this->config->item('fb_link'); ?>" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                	</a>
                            	</li>
                            	<li>
                                	<a href="<?= $this->config->item('twt_link'); ?>" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
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
        <script type="text/javascript" src="<?= js_url('plugins/jquery.parallax'); ?>"></script>
		<script type="text/javascript" src="<?= js_url('plugins/style-switcher'); ?>"></script>
        <!-- JS Tooltipster --> 
        <script type="text/javascript" src="<?= js_url('tooltip/jquery.tooltipster.min'); ?>"></script>
		<script type="text/javascript">
    	jQuery(document).ready(function() {
      		App.init();
        	App.initSliders();
        	StyleSwitcher.initStyleSwitcher();      
        	ParallaxSlider.initParallaxSlider();
            $('.tooltipster-right').tooltipster({contentAsHTML: true, position: 'right', interactive: true, theme: 'tooltipster-light', arrow: true});
            $('.tooltipster-left').tooltipster({contentAsHTML: true, position: 'left', interactive: true, theme: 'tooltipster-light', arrow: true});
            $('.tooltipster').tooltipster({contentAsHTML: true, position: 'right', interactive: true, theme: 'tooltipster-light', arrow: false});
    	});
		</script>
	</body>
</HTML>