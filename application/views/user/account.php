	<!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Mon compte</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="<?= base_url(); ?>">Accueil</a></li>
				<li><a>Utilisateur</a></li>
                <li class="active">Gestion de compte</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">	
		<div class="col-md-12">
			<div class="col-md-3">
				<center><img class="img-responsive rounded-x" src="<?= img_url('avatar/'.get($account->cms_avatar).'.jpg'); ?>" width=120></center>
				<br/>
				<div class="row tab-v3">
		            <ul class="nav nav-pills nav-stacked"> 
		                <li class="active"><a href="#home" data-toggle="tab"><i class="fa fa-home"></i> Général</a></li>
		                <li><a href="#player" data-toggle="tab"><i class="fa fa-user"></i> Mes personnages</a></li>
		                <li><a href="#settings" data-toggle="tab"><i class="fa fa-gear"></i> Paramètres</a></li> 		
		            </ul>    
				</div>
			</div>
			
			<div class="col-md-9">
				<div class="tab-content">
					<div class="tab-pane fade in" id="player">
						<div class="panel panel-red margin-bottom-40">
                    	<div class="panel-heading">
                        	<h3 class="panel-title">Mes personnages</b></h3>
                    	</div>
					
                    	<div class="panel-body">
                        	<table class="table table-striped">
                            <thead>
                                <tr>
                                	<th><center>#</center></th>
                                    <th>Nom</th>
                                    <th><center>Classe</center></th>
                                    <th>Sexe</th>
                                    <th><center>Level</center></th>
                                    <th><center>Expérience</center></th>
                                    <th>Alignement</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php foreach($players as $player){ ?>
								<tr>
									<td><center><object type="application/x-shockwave-flash" data="<?= swf_url('DofusPersos.swf'); ?>" id="perso_avatar" height="40" width="50">
										            <!-- <![endif]-->
										            <!--[if IE]>
													<object class="fix" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version="10.0.0 id="perso_avatar" width="100" height="100">
													<param name="movie" value="http://staticns.ankama.com/dofus/www//game/DofusPersos.swf" />
													<param name="allowscriptaccess" value="always" />
													<param name="flashvars" value="align=TL&render=direct&look={1|80,2126,1101,197,1668|1=16759155,2=3546376,3=16777215,4=855309,5=13974284,7=960989,8=15592727,9=7503,10=16756243|140}" />
													<param name="movie" value="http://staticns.ankama.com/dofus/www//game/DofusPersos.swf" />
													<param name="wmode" value="transparent" />
													<!--><!--dgx-->
													<param name="allowscriptaccess" value="always">
													<param name="flashvars" value="render=direct&focus=face&look=<?= get($this->UserManager->get_info_player($player->CharacterId)->EntityLookString); ?>">
													<param name="movie" value="<?= swf_url('DofusPersos.swf'); ?>">
													<param name="wmode" value="transparent">
													<p><a target="_blank" href="http://www.adobe.com/go/getflashplayer"><img src="http://staticns.ankama.com/global/img/get_flash_player.gif" alt="Get Adobe Flash player"></a></p>
												</object>
										</center>
									</td>
									<td><a href="<?= site_url('page/character/'.$this->UserManager->get_info_player($player->CharacterId)->Id); ?>"><?= get($this->UserManager->get_info_player($player->CharacterId)->Name); ?></a></td>
									<td><center><?= player_class($this->UserManager->get_info_player($player->CharacterId)->Breed); ?></center></td>
									<td><img src="<?= img_url('perso/sexe/'.$this->UserManager->get_info_player($player->CharacterId)->Sex.'.png'); ?>" width=16></td>
									<td><center><?= player_level($this->UserManager->get_info_player($player->CharacterId)->Experience, $this->UserManager); ?></center></td>
									<td><center><?= get($this->UserManager->get_info_player($player->CharacterId)->Experience); ?></center></td>
									<td><img src="<?= img_url('perso/align/'.get($this->UserManager->get_info_player($player->CharacterId)->AlignmentSide).'.png'); ?>" width=30></td>
								</tr>
								<?php } ?>
                            </tbody>
                            </table>
                        </div>
                        </div>
					</div>
                    <div class="tab-pane fade in active" id="home">
                    	<form class="reg-page">
			                    <div class="reg-header">            
			                        <h2>Informations de votre compte</h2>
			                    </div>
			                    <label for="info_login">Nom de compte :</label>
			                    <div class="input-group margin-bottom-20">
			                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
			                        <input id="info_login" type="text" placeholder="Nom de compte" class="form-control" value="<?= get($account->Login); ?>">
			                    </div> 
			                    <label for="info_pseudo">Pseudo :</label>
			                    <div class="input-group margin-bottom-20">
			                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
			                        <input id="info_pseudo" type="text" placeholder="Pseudo" class="form-control" value="<?= get($account->Nickname); ?>">
			                    </div> 
			                    <label for="info_mail">Email :</label>
			                    <div class="input-group margin-bottom-20">
			                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
			                        <input id="info_mail" type="text" placeholder="Email" class="form-control" value="<?= get($account->Email); ?>">
			                    </div> 
			                    <label for="info_role">Role :</label>
			                    <div class="input-group margin-bottom-20">
			                        <span class="input-group-addon"><i class="fa fa-star"></i></span>
			                        <input id="info_role" type="text" placeholder="Role" class="form-control" value="<?= account_role($account->Role); ?>">
			                    </div> 
			                    <label for="info_points"><?= $this->config->item('name_point'); ?> :</label>
			                    <div class="input-group margin-bottom-20">
			                        <span class="input-group-addon"><i class="fa fa-line-chart"></i></span>
			                        <input id="info_points" type="text" placeholder="<?= $this->config->item('name_point'); ?>" class="form-control" value="<?= get($account->Tokens); ?>">
			                    </div> 
			                    <label for="info_votes">Votes :</label>
			                    <div class="input-group margin-bottom-20">
			                        <span class="input-group-addon"><i class="fa fa-bar-chart"></i></span>
			                        <input id="info_votes" type="text" placeholder="Votes" class="form-control" value="<?= get($account->cms_votes); ?>">
			                    </div> 
			            </form>
					</div>
                    <div class="tab-pane fade in" id="settings">
					<div class="tab-v1">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#password" data-toggle="tab">Mot de passe</a></li>
                        <li><a href="#email" data-toggle="tab">Email</a></li>
                        <li><a href="#avatar" data-toggle="tab">Avatar</a></li>
                    </ul>                
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="password"><br/>
                        	<form class="reg-page" method="post" action="">
			                    <div class="reg-header">            
			                        <h2>Changer son mot de passe</h2>
			                    </div>
			                    <div class="input-group margin-bottom-20">
			                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
			                        <input type="password" placeholder="Ancien mot de passe" class="form-control" name="old_pass">
			                    </div> 
			                    <div class="input-group margin-bottom-20">
			                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
			                        <input type="password" placeholder="Nouveau mot de passe" class="form-control" name="new_pass">
			                    </div> 
			                    <div class="input-group margin-bottom-20">
			                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
			                        <input type="password" placeholder="Confirmer" class="form-control" name="conf_pass">
			                    </div> 
			                    <hr>
			                    <div class="row">
			                        <div class="col-md-6 checkbox">                   
			                        </div>
			                        <div class="col-md-6">
			                            <button class="btn-u pull-right" type="submit" name="change_pass">Changer</button>                        
			                        </div>
			                    </div>
			                </form>
                        </div>
                        <div class="tab-pane fade in" id="email"><br/>
                        	<form class="reg-page" method="post" action="">>
			                    <div class="reg-header">            
			                        <h2>Changer son email</h2>
			                    </div>
			                    <label for="mail">Email : <?= get($account->Email); ?></label>
			                    <div class="input-group margin-bottom-20">
			                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
			                        <input type="text" placeholder="Nouvel email" class="form-control" name="new_mail" id="mail">
			                    </div>
			                    <hr>
			                    <div class="row">
			                        <div class="col-md-6 checkbox">                   
			                        </div>
			                        <div class="col-md-6">
			                            <button class="btn-u pull-right" type="submit" name="change_mail">Changer</button>                        
			                        </div>
			                    </div>
			                </form>
						</div>
                        <div class="tab-pane fade in" id="avatar"><br/>
                        	<form class="reg-page" method="post" action="">>
			                    <div class="reg-header">            
			                        <h2>Changer son email</h2>
			                    </div>
			                    <p>Merci d'accéder à la galerie d'avatar afin de choisir celui qui vous correspond le mieux.</p>
			                    <hr>
			                    <div class="row">
			                        <div class="col-md-6 checkbox">                   
			                        </div>
			                        <div class="col-md-6">
			                            <a class="btn-u pull-right" href="<?= site_url('user/galery'); ?>">Accéder à la galerie</a>                        
			                        </div>
			                    </div>
			                </form>
						</div>
                    </div>
					</div>
					</div>
				</div>
			</div>	
		</div>
    </div><!--/container-->		
    <!-- End Content Part -->