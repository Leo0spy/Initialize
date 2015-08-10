    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left"><?= get($guild->Name); ?></h1>
            <ul class="pull-right breadcrumb">
                <li><a href="<?= base_url(); ?>">Accueil</a></li>
				<li><a>Communauté</a></li>
                <li><a>Guilde</a></li>
                <li class="active"><?= get($guild->Name); ?></li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">	
		<div class="col-md-12">

			<div class="col-md-3">					
			    <?= guild_emblem($guild->EmblemBackgroundShape, $guild->EmblemBackgroundColor, $guild->EmblemForegroundShape, $guild->EmblemForegroundColor, 160, 160); ?>
                <br/>
			    <div class="shadow-wrapper margin-bottom-60">
                    <div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
                        <h2><?= get($guild->Name); ?></h2>
                        <p>Niveau <?= guild_level($guild->Experience, $this->PageManager); ?> - <?= $this->PageManager->count_members(get($guild->Id)); ?> membres</p>
                    </div>
                </div>
            </div>

			<div class="col-md-9">
                	<p>La guilde <b><?= get($guild->Name); ?></b> est formé de <b><?= $this->PageManager->count_members(get($guild->Id)); ?> membres</b> et est 
                    actuellement <b>niveau <?= guild_level($guild->Experience, $this->PageManager); ?></b> en ayant accumulé plus de <b><?= get($guild->Experience); ?> points d'expérience.</b><br/>
                	Son <b>meneur <?= get($this->PageManager->get_info_player($menor->CharacterId)->Name); ?></b>, actuellement <b>niveau <?= player_level(get($this->PageManager->get_info_player($menor->CharacterId)->Experience), $this->PageManager); ?></b>, est un 
                	<b><?= player_class(get($this->PageManager->get_info_player($menor->CharacterId)->Breed)); ?></b>, celui-ci a accumulé plus de <b><?= get($menor->GivenExperience); ?>
                    points d'expérience</b> pour la guilde.
                	</p>
                	<br/><br/>	

                	<div class="panel panel-red margin-bottom-40">
                    	<div class="panel-heading">
                        	<h3 class="panel-title">Membre de la Guilde <b><?= get($guild->Name); ?></b></h3>
                    	</div>
                    	<div class="panel-body">
                        	<table class="table table-striped">
                            <thead>
                                <tr>
                                    <th><center>#</center></th>
                                    <th>Personnnage</th>
                                    <th>Sexe</th>
                                    <th>Classe</th>
                                    <th>Level</th>
                                    <th>Rang</th>
                                    <th>XP donné</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($members as $key => $player){ ?>
                            	<tr>
                            		<td><center><?= $key + 1; ?></center></td>
                            		<td><a href="<?= site_url('page/character/'.get($player->CharacterId)); ?>"><?= get($this->PageManager->get_info_player($player->CharacterId)->Name); ?></a></td>
                                    <td><img src="<?= img_url('perso/sexe/'.$this->PageManager->get_info_player($player->CharacterId)->Sex.'.png'); ?>"></td>
                            		<td><?= player_class(get($this->PageManager->get_info_player($player->CharacterId)->Breed)); ?></td>
                            		<td><?= player_level(get($this->PageManager->get_info_player($player->CharacterId)->Name), $this->PageManager); ?></td>
                            		<td><?= guild_rank(get($player->RankId)); ?></td>
                            		<td><?= get($player->GivenExperience); ?></td>
                                    <td><img src="<?= img_url('perso/align/'.$this->PageManager->get_info_player($player->CharacterId)->AlignmentSide.'.png'); ?>" width=30></td>
                            	</tr>
                            <?php } ?>
                            </tbody>
                        	</table>
                    	</div>
                    </div>
                	<center><img src="<?= img_url('perco.png'); ?>" width=20%></center>
			</div>
		</div>
    </div><!--/container-->		
    <!-- End Content Part -->