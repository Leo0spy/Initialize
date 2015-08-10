<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Nous rejoindre</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="<?= base_url(); ?>">Accueil</a></li>
            <li><a>Communauté</a></li>
            <li class="active">Nous rejoindre</li>
        </ul>
   	</div>
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container content">	
	<div class="col-md-8">

		<?php if(!$this->session->has_userdata('Id')){ ?>
		<div class="shadow-wrapper margin-bottom-60">
            <div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
                <h2>Inscription</h2>
                <p>Bienvenue à toi cher visiteur, si tu es ici c'est que tu cherche à rejoindre notre communauté.Nous allons donc t'aider, 
				la première étape va être de créer ton compte <?= $this->config->item('name'); ?>.</p>
				<br/>
				<center><a rel="round-corners" class="btn-u" href="<?= site_url('user/register'); ?>"><i class="fa fa-user-plus"></i> S'inscrire</a></center>
			</div>
        </div>
        <center><img src="<?= img_url('community.png'); ?>" width=65%></center>
        <?php } ?>

        <div class="shadow-wrapper margin-bottom-60">
            <div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
                <h2>Téléchargement</h2>
                <p>La dernière étape pour accéder au serveur est le téléchargement et l'installation du jeu.<br/>
	            Pour ce faire nous avons développé un launcher qui va se charger de télécharger et d'assurer la mise à jour des fichiers de votre installation.</p>
				<br/>
				<center><a rel="round-corners" class="btn-u" href="<?= $this->config->item('link_dl'); ?>"><i class="fa fa-cloud-download"></i> Télécharger <?= $this->config->item('name'); ?></a></center>
			</div>
        </div>
        <center><img src="<?= img_url('join_us.png'); ?>" width=65%></center>
	</div>
	<div class="col-md-offset-1 col-md-3">
		<div class="headline"><h2>A propos de <?= $this->config->item('name'); ?></h2></div>
			<p>Qu'est-ce que <b><?= $this->config->item('name'); ?></b> ?<br/><br/>
			<?= $this->config->item('name'); ?>, c'est avant tout un serveur qui est à l'écoute de ses joueurs et de leurs attentes.<br/>
			C'est pour cela que les développeurs de <?= $this->config->item('name'); ?> travaillent durent pour vos offrir une expérience de jeu unique et exclusif.
			</p>
			<br/>

			<div id="myCarousel" class="carousel slide carousel-v1">
                <div class="carousel-inner">
					<?php foreach($screenshots as $screen){ ?>
                    <div class="item <?php if($screen->id == 1){ echo 'active'; } ?>">
                        <img src="<?= img_url(get($screen->img)); ?>">
                    </div>	
					<?php } ?>  
                </div>
                    
				<div class="carousel-arrow">
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                    </a>
                </div>
			</div>
			<br/>
			<div class="headline"><h2>Support & FAQ</h2></div>
				<p>Un problème qui subsiste ?<br/><br/>
				Faîtes un tour sur notre FAQ, si celle-ci ne vous apporte pas la solution, postez un ticket ou un sujet sur notre forum.
				</p><br/>
				<center>
				<a rel="round-corners" class="btn-u btn-u-red round-corners" href="<?= site_url('support/faq'); ?>"><i class="fa fa-info"></i> FAQ</a>
				<?php if($this->session->userdata('guid')){ ?>
				<a rel="round-corners" class="btn-u btn-u-blue round-corners" href="<?= site_url('support/ticket'); ?>"><i class="fa fa-ticket"></i> Ticket</a>
				<?php } ?>
				<a rel="round-corners" class="btn-u btn-u-green round-corners" href="<?= $this->config->item('link_forum'); ?>"><i class="fa fa-globe"></i> Forum</a>
				</center>
	</div>	
</div><!--/container-->		
<!-- End Content Part -->