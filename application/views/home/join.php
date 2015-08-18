<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Jogar</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="<?= base_url(); ?>">Home</a></li>
            <li><a>Comunidade</a></li>
            <li class="active">Jogar</li>
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
                <h2>Registro</h2>
                <p>Bem vindo, para começar a jogar conosco você vai precisar de uma conta. Caso ainda não tenha pode se registrar no Servidor <?= $this->config->item('name'); ?> clicando abaixo:</p>
				<br/>
				<center><a rel="round-corners" class="btn-u" href="<?= site_url('user/register'); ?>"><i class="fa fa-user-plus"></i> Registrar</a></center>
			</div>
        </div>
        <center><img src="<?= img_url('community.png'); ?>" width=65%></center>
        <?php } ?>

        <div class="shadow-wrapper margin-bottom-60">
            <div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
                <h2>Download</h2>
                <p>A próxima etapa é fazer o download do instalador do jogo.<br/>
	            Clique abaixo para realizar o download do nosso launcher:</p>
				<br/>
				<center><a rel="round-corners" class="btn-u" href="<?= $this->config->item('link_dl'); ?>"><i class="fa fa-cloud-download"></i> Download Launcher <?= $this->config->item('name'); ?></a></center>
			</div>
        </div>
        <center><img src="<?= img_url('join_us.png'); ?>" width=65%></center>
	</div>
	<div class="col-md-offset-1 col-md-3">
		<div class="headline"><h2>Sobre o <?= $this->config->item('name'); ?></h2></div>
			<p>O que é o <b><?= $this->config->item('name'); ?></b> ?<br/><br/>
			<?= $this->config->item('name'); ?>, é  um servidor que está ouvindo seus jogadores e está focado em atender as suas expectativas.<br/>
			É por isso que os desenvolvedores do <?= $this->config->item('name'); ?> trabalhar constantemente para dar ao jogador uma experiência de única.
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
			<div class="headline"><h2>Suporte & FAQ</h2></div>
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