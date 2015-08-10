	<!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Bugtracker</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="<?= base_url(); ?>">Accueil</a></li>
                <li><a>Assistance</a></li>
                <li class="active">Bugtracker</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">	
		<div class="col-md-12">

			<div class="tab-v1">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#all" data-toggle="tab">Tous</a></li>
					<?php if($this->session->has_userdata('Id')){ ?>
					<li><a href="#new" data-toggle="tab">Nouveau</a></li>
					<?php } ?>
				</ul>
			</div>
			
			<div class="tab-content">
				<div class="tab-pane active" id="all">
				<br/><br/>
				<div class="panel panel-red margin-bottom-40">
				
                    <div class="panel-heading">
                        <h3 class="panel-title">Liste des <b>bugs recensés</b> par les joueurs</h3>
                    </div>
					
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th><center>#</center></th>
                                    <th>Titre</th>
                                    <th>Auteur</th>
									<th>Vote(s)</th>
									<th></th>
                                </tr>
                            </thead>
                            <tbody>

							<?php foreach($bugtrackers as $key => $bug){ ?>
								<tr <?= color_line($key + 1); ?>>
                                    <td><center><?= $key + 1; ?></center></td>
                                    <td><?= get($bug->title); ?></td>
									<td><?= get($this->SupportManager->get_info($bug->author)->Nickname); ?></td>
                                    <td><?= get($bug->vote); ?></td>
									<td><center><a data-toggle="modal" data-target="#myModal<?= $key + 1; ?>"><i class="fa fa-eye"></i></a></center></td>
                                </tr>
								
						<div class="modal fade" id="myModal<?= $key + 1;  ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 id="myModalLabel" class="modal-title"><?= get($bug->title); ?> - <?= get($this->SupportManager->get_info($bug->author)->Nickname); ?></h4>
                                    </div>
                                    <div class="modal-body">
										<p><?= content($bug->content); ?></p>
                                    </div>
                                    <div class="modal-footer">
										<form method="post" action="">
										<fieldset>
											<button data-dismiss="modal" class="btn-u btn-u-default" type="button">Fermer</button>
											<?php if($this->session->has_userdata('Id')){ ?>
											<button class="btn-u" type="submit" name="vote" <?php if(already_voted($bug->vote_account, $account->Id) == TRUE){ echo 'disabled="disabled"'; } ?>>Voter</button>
											<?php } ?>
										</fieldset>
										</form>
                                    </div>
								</div>
                            </div>
                        </div>
							<?php } ?>
                            </tbody>
							
                        </table>
                    </div>                      
                </div>
				</div>
			
				<?php if($this->session->has_userdata('Id')){ ?>
				<div class="tab-pane" id="new"><br/>
					<div class="col-md-4">
						<div class="shadow-wrapper margin-bottom-60">
		                    <div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
		                        <h2>Règles</h2>
								<p>- Toutes insultes sera sévérement punis.<br/>
								- Veuillez décrire précisement le bug rencontré et si possible précisez la catégorie dans la description de celui-ci.<br/>
								- Veillez à ce que votre titre indique précisement le problème.<br/>
								Toute les déclarations de bug ne respectant pas ces règles seront supprimés. </p>                   
							</div>
		                </div>
					</div>
					<div class="col-md-8">
						<div class="col-md-12">
			                <form class="reg-page" method="post" action="">
			                    <div class="reg-header">            
			                        <h2>Déclarer un nouveau bug</h2>
			                    </div>
			                    <div class="input-group margin-bottom-20">
			                        <span class="input-group-addon"><i class="fa fa-info"></i></span>
			                        <input type="text" placeholder="Titre" class="form-control" name="title">
			                    </div> 
			                    <textarea class="form-control" rows="5" placeholder="Description du bug" name="content"></textarea>                  
			                    <hr>
			                    <div class="row">
			                        <div class="col-md-6 checkbox">
			                            <a class="btn-u pull-left" href="<?= site_url('support/bugtracker'); ?>">Retour</a>                      
			                        </div>
			                        <div class="col-md-6">
			                            <button class="btn-u pull-right" type="submit" name="post">Poster</button>                        
			                        </div>
			                    </div>
			                </form>            
			            </div>
					</div>
				</div>
				<?php } ?>

			</div>
			<br/><br/><br/><br/>
			
		</div>
		
    </div><!--/container-->		
    <!-- End Content Part -->