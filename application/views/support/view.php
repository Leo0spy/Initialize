	<!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Mes tickets</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="<?= base_url(); ?>">Accueil</a></li>
                <li><a>Assistance</a></li>
                <li class="active">Ticket</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">	
		<div class="col-md-12">

			<div class="col-md-9">
			<div class="headline"><h2>Voir un ticket</h2></div><br/>
				<div class="row">
					<div class="col-md-2">
						<img class="img-responsive rounded-x" src="<?= img_url('avatar/'.$account->cms_avatar.'.jpg'); ?>" width=90/>
					</div>
					<div class="col-md-10">
						<blockquote class="text-left">
		                    <h2><?= get($ticket->title); ?></h2>
		                    <p><?= content($ticket->post); ?></p>
							<small><?= get($account->Nickname); ?>, posté le <?= get($ticket->date); ?>.</small>
						</blockquote>
					</div>
				</div>
				<?php foreach($answers as $answer){ ?>
				<div class="row">
					<div class="col-md-2">
						<img class="img-responsive rounded-x" src="<?= img_url('avatar/'.get($this->SupportManager->get_info($answer->author)->cms_avatar).'.jpg'); ?>" width=90/>
					</div>
					<div class="col-md-10">
						<blockquote class="text-left">
							<h2>Re : <?= get($ticket->title); ?></h2>
	                    	<p><?= content($answer->post); ?></p>
							<small><?= get($this->SupportManager->get_info($answer->author)->Nickname); ?>, posté le <?= get($answer->date); ?>.</small>
						</blockquote>
					</div>
				</div>
				<?php } ?>
				<br/><br/>
				<?php if($ticket->closed != '1'){  ?>
				<form class="reg-page" method="post" action="">
				    <textarea class="form-control" rows="5" placeholder="Réponse" name="content"></textarea>  
				    <hr>
				    <div class="row">
				        <div class="col-md-6 checkbox">                  
				        </div>
				        <div class="col-md-6">
				            <button class="btn-u pull-right" type="submit" name="post">Ajouter</button>                        
				        </div>
				    </div>
				</form>
				<?php } ?>
			</div>
			
			<div class="col-md-3">
			<div class="headline"><h2>Autres options :</h2></div><br/>

				<form method="post" action="">
					<center>
						<?php if($ticket->closed != '1'){ ?>
						<button class="btn btn-danger" type="submit" name="close"><i class="fa fa-close"></i> Fermer ce ticket</button>
						<?php } ?>
						<a rel="round-corners" class="btn btn-primary" href="<?= site_url('support/ticket'); ?>"><i class="fa fa-reply"></i> Retour</a><br/><br/>
						<img src="<?= img_url('pichon.png'); ?>" width=70%>
						<p><i>Tu peux toujours taper du pichon...</i></p>
					</center>
				</form>
			</div>
		</div>
    </div><!--/container-->		
    <!-- End Content Part -->