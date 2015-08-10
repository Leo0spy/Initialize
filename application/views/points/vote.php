	<!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Voter</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="<?= base_url(); ?>">Accueil</a></li>
                <li class="active">Voter</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">	
		<div class="col-md-8">

			<?php if(!$this->session->has_userdata('Id')){ ?>
			<div class="alert alert-warning fade in">
                <strong>Attention!</strong> Vous n'êtes pas connecté, vous ne gagnerez pas de <?= $this->config->item('name_point'); ?>.
            </div>
			<?php } else{ ?>
			<div class="shadow-wrapper margin-bottom-60">
                <div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
                    <h2>Voter</h2>
                    <p>Un vote vous rapporte <?= $bonus; ?> <?= $this->config->item('name_point'); ?>, Actuellement, vous possédez <?= $account->Tokens; ?> <?= $this->config->item('name_point'); ?>. Après le vote, vous posséderez donc <?= $points_after; ?> <?= $this->config->item('name_point'); ?>.<br/>Pour voter, veuillez cliquez sur l'image ci-dessous.</p>
                </div>
            </div>
			<?php } ?>

			<br/>
			<form method="post" action="">
				<center><input style="background:url(<?= img_url('vote.png'); ?>);border:none;width: 298px;height: 122px;cursor: pointer;" type="submit" name="vote" value=""></center>
			</form>
		</div>
		
		<div class="col-md-offset-1 col-md-3">
		<br/><br/><br/>
		<img src="<?= img_url('404.png'); ?>"><br/>
		<p><center><em>En manque de <?= $this->config->item('name_point'); ?> ? Achetez-en <a href="<?= site_url('points/buy'); ?>">ici</a> !</em></center></p>
		<br/><br/><br/><br/><br/><br/>
		</div>
		
    </div><!--/container-->		
    <!-- End Content Part -->