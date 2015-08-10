	<!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left"><?= get($player->Name); ?></h1>
            <ul class="pull-right breadcrumb">
                <li><a href="<?= base_url(); ?>">Accueil</a></li>
				<li><a>Communauté</a></li>
                <li><a>Page perso.</a></li>
                <li class="active"><?= get($player->Name); ?></li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">	
		<div class="col-md-12">
				
			<div class="col-md-3"> 
				<object type="application/x-shockwave-flash" data="<?= swf_url('DofusPersos.swf'); ?>" id="perso_avatar" height="168" width="215">
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
					<param name="flashvars" value="render=direct&focus=face&look=<?= get($this->PageManager->get_info_player($player->Id)->EntityLookString); ?>">
					<param name="movie" value="<?= swf_url('DofusPersos.swf'); ?>">
					<param name="wmode" value="transparent">
					<p><a target="_blank" href="http://www.adobe.com/go/getflashplayer"><img src="http://staticns.ankama.com/global/img/get_flash_player.gif" alt="Get Adobe Flash player"></a></p>
				</object>
	            <form class="reg-page">
	                <fieldset>
	                    <h2 class="heading-md"><?= get($player->Name); ?></h2>
	                    <p><?= player_class(get($player->Breed)); ?> - Niveau <?= player_level(get($player->Experience), $this->PageManager); ?></p>
	                </fieldset>
	                <hr/>
	                <?php if($this->PageManager->player_has_guild($player->Id) == TRUE){ ?>
	                <fieldset>
	                    <p>Appartient à la guilde :
	                    <?= guild_emblem($guild->EmblemBackgroundShape, $guild->EmblemBackgroundColor, $guild->EmblemForegroundShape, $guild->EmblemForegroundColor, 120, 120); ?>
	                    <b><a href="<?= site_url('page/guild/'.get($guild->Id)); ?>"><?= get($guild->Name); ?></a></b><br/>
	                    Niveau <?= guild_level(get($guild->Experience), $this->PageManager); ?> - <?= $this->PageManager->count_members($guild->Id); ?> membres</center><br/>
	                    Rang : <?= guild_rank($this->PageManager->get_info_guild_members($player->Id)->RankId); ?></p>
	                </fieldset>
	                <?php } else{ ?>
	                <fieldset>
	                    <p><b><?= get($player->Name); ?></b> ne fait partie d'aucune guilde.</p>
	                </fieldset>
	                <?php } ?>
	            </form>
            </div>

			<div class="col-md-9">

			<div class="tab-v1">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#home" data-toggle="tab">Général</a></li>
					<li><a href="#armor" data-toggle="tab">Armurerie</a></li>
					<?php if($this->session->has_userdata('Id') && $account->Id == $this->PageManager->get_account_player($player->Id)->AccountId){ ?>
					<li><a href="#param" data-toggle="tab">Paramètres</a></li>
					<?php } ?>
				</ul>
			</div>
			<br/>

			<div class="tab-content">
			    <div class="tab-pane active" id="home">
			    	<p><b><?= get($player->Name); ?></b> est un <b><?= player_class(get($player->Breed)); ?></b>, actuellement <b>niveau 
                	<?= player_level(get($player->Experience), $this->PageManager); ?></b>, <b><?= get($player->Name); ?></b> a accumulé plus de <b><?= get($player->Experience); ?>
                	points d'expérience</b>.<br/>
                	<b><?= get($player->Name); ?></b> est d'alignement <b><?php player_align(get($player->AlignmentSide)); ?></b>
					<?php if($player->AlignmentSide != 0){ ?>
					, et est actuellement <b>grade <?php player_grade(get($player->Honor), $this->PageManager); ?></b> en ayant accumulé <b><?= get($player->Honor); ?>
					points d'honneur</b>
					<?php } ?>			.
                	</p><br/>
					<?php if(empty($player->cms_message) || $player->cms_message != 0){
						echo '<p><b>'.get($player->Name).'</b> n\'a pas une vie très passionnante.</p>';
					}
					else{
						echo content($player->cms_message);
					} ?>
					<br/>
                	<div class="headline"><h2>Caractéristiques :</h2></div>
                	<br/>
                	<div class="panel panel-red margin-bottom-40">
                    	<div class="panel-heading">
                        	<h3 class="panel-title">Caractéristiques de <b><?= get($player->Name); ?></b></h3>
                    	</div>
                    	<div class="panel-body">
                        	<table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Caractéristiques primaires</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
								<tr>
									<td><img src="<?= img_url('perso/vie.png'); ?>"> Vitalité</td>
									<td><?= get($player->Vitality); ?></td>
								</tr>
								<tr>
									<td><img src="<?= img_url('perso/sagesse.png'); ?>"> Sagesse</td>
									<td><?= get($player->Wisdom); ?></td>
								</tr>
								<tr>
									<td><img src="<?= img_url('perso/force.png'); ?>"> Force</td>
									<td><?= get($player->Strength); ?></td>
								</tr>
								<tr>
									<td><img src="<?= img_url('perso/intelligence.png'); ?>"> Intelligence</td>
									<td><?= get($player->Intelligence); ?></td>
								</tr>
								<tr>
									<td><img src="<?= img_url('perso/chance.png'); ?>"> Chance</td>
									<td><?= get($player->Chance); ?></td>
								</tr>
								<tr>
									<td><img src="<?= img_url('perso/agilite.png'); ?>"> Agilité</td>
									<td><?= get($player->Agility); ?></td>
								</tr>
                            <tbody>
                            </tbody>
                          	</table>
                        </div>
                	</div>
			    </div>

			    <div class="tab-pane" id="armor">
			    <?php if($player->cms_view_armor == 1){ ?>
			    	<div style="position:absolute;z-index:1">
                        <center><img style="display: inline-block;margin-left:150px;border:4px solid;border-color:#b1ac9c#c9c6bb#dfdbcd;" src="<?= img_url('perso/armu/17.png'); ?>" width=65%></center>
                    </div>
					<?php player_items($player->Id, $this->PageManager); ?>
					<div style="margin-left:160px;position:absolute;z-index:2">
						<object type="application/x-shockwave-flash" data="<?= swf_url('DofusPersos.swf'); ?>" id="perso_avatar" height="425" width="430">
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
							<param name="flashvars" value="render=direct&look=<?= get($this->PageManager->get_info_player($player->Id)->EntityLookString); ?>">
							<param name="movie" value="<?= swf_url('DofusPersos.swf'); ?>">
							<param name="wmode" value="transparent">
							<p><a target="_blank" href="http://www.adobe.com/go/getflashplayer"><img src="http://staticns.ankama.com/global/img/get_flash_player.gif" alt="Get Adobe Flash player"></a></p>
						</object>
                    </div>
			    	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			    	<div class="headline"><h2>Sorts</h2></div>
			    	<?php foreach($spells as $spell){ ?>
			    	<img style="width:50px;height:50px;margin-top:5px;margin-left:5px" src="<?= img_url('perso/spells/sort_'.$spell->SpellId.'.png'); ?>" class="tooltipster-right" title="<div style=&quot;box-sizing: border-box;clear: both;display: table;content: '';&quot;>
						<div style=&quot;float: left;box-sizing: border-box;padding-left: 1px;padding-right: 1px;&quot;>
								<object width=&quot;80&quot; height=&quot;80&quot; type=&quot;application/x-shockwave-flash&quot; data=&quot;<?= swf_url('spells/'.$spell->SpellId.'.swf'); ?>&quot; bgcolor=&quot;EDEDED&quot;/>
									<param name=&quot;movie&quot; value=&quot;<?= swf_url('spells/'.$spell->SpellId.'.swf'); ?>&quot;/>
									<param name=&quot;wmode&quot; value=&quot;transparent&quot;/>
					  			</object>
							</div>
							<div style=&quot;float: left;box-sizing: border-box;color: rgb(255, 255, 255);padding-left: 15px;padding-right: 15px;padding-top: 15px;width:200px;text-align:left;vertical-align:middle;height:50px&quot;>
								<p><strong><?= $this->PageManager->get_name($this->PageManager->get_info_spell($spell->SpellId)->NameId)->French; ?></strong></p>
								<p>Niveau <?= $spell->Level; ?></p>
							</div>
						</div>" /> 
			    	<?php } ?>
			    	<br/><br/>
			    	<div class="headline"><h2>Caractérisiques</h2></div>
			    	<div class="panel panel-red margin-bottom-40">
                    	<div class="panel-heading">
                        	<h3 class="panel-title">Caractéristiques de <b><?= get($player->Name); ?></b></h3>
                    	</div>
                    	<div class="panel-body">
                        	<table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Caractéristiques</th>
                                    <th>Total</th>
                                    <th>Dont parchemin</th>
                                </tr>
                            </thead>
								<tr>
									<td><img src="<?= img_url('perso/vie.png'); ?>"> Vitalité</td>
									<td><?= get($player->Vitality); ?></td>
									<td><?= get($player->PermanentAddedVitality); ?></td>
								</tr>
								<tr>
									<td><img src="<?= img_url('perso/sagesse.png'); ?>"> Sagesse</td>
									<td><?= get($player->Wisdom); ?></td>
									<td><?= get($player->PermanentAddedWisdom); ?></td>
								</tr>
								<tr>
									<td><img src="<?= img_url('perso/force.png'); ?>"> Force</td>
									<td><?= get($player->Strength); ?></td>
									<td><?= get($player->PermanentAddedStrength); ?></td>
								</tr>
								<tr>
									<td><img src="<?= img_url('perso/intelligence.png'); ?>"> Intelligence</td>
									<td><?= get($player->Intelligence); ?></td>
									<td><?= get($player->PermanentAddedIntelligence); ?></td>
								</tr>
								<tr>
									<td><img src="<?= img_url('perso/chance.png'); ?>"> Chance</td>
									<td><?= get($player->Chance); ?></td>
									<td><?= get($player->PermanentAddedChance); ?></td>
								</tr>
								<tr>
									<td><img src="<?= img_url('perso/agilite.png'); ?>"> Agilité</td>
									<td><?= get($player->Agility); ?></td>
									<td><?= get($player->PermanentAddedAgility); ?></td>
								</tr>
                            <tbody>
                            </tbody>
                          	</table>
                        </div>
                	</div>
			    <?php } else{ ?>
			    	<br/>
			    	<center>
			    		<div class="alert alert-danger" role="alert">
                            <span class="fa fa-exclamation" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
							Ce personnage a choisi de ne pas dévoiler ses équipements.
                       	</div>
	           		</center>
			    <?php } ?>
			    </div>

			    <div class="tab-pane" id="param">
			   		<p>Sur cette page, vous avez la possibilité de rendre confidentiel votre armurerie ou de la montrer, c'est à dire de la 
			   		rendre invisible ou visible aux yeux des autres.</p>
			   		<br/>

			   		<div class="col-md-offset-2 col-md-8">
				   		<form class="reg-page" method="post" action="">
				            <div class="reg-header">            
				                <h2>Confidentialité</h2>
				            </div>			                    
				            <div class="row">
				                <div class="col-md-6 checkbox">                     
				                </div>
				                <div class="col-md-6">
				                    <button class="btn-u pull-right" type="submit" name="view_armor">Changer la confidentialité</button>                        
				                </div>
				            </div>
				            <hr>
				            <div class="reg-header">            
				                <h2>Message personnel</h2>
				            </div>	
				            <div class="input-group margin-bottom-20">
			                    <span class="input-group-addon"><i class="fa fa-info"></i></span>
			                    <input type="text" placeholder="Votre message" class="form-control" name="content">
			                </div>
			                <hr>
			                <div class="row">
				                <div class="col-md-6 checkbox">                   
				                </div>
				                <div class="col-md-6">
				                    <button class="btn-u pull-right" type="submit" name="message">Modifier votre message</button>                        
				                </div>
				            </div>
				        </form>
			        </div>
			    </div>
			</div>
			</div>	
		</div>
    </div><!--/container-->		
    <!-- End Content Part -->