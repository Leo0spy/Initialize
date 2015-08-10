	<!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Acheter des <?= $this->config->item('name_point'); ?></h1>
            <ul class="pull-right breadcrumb">
                <li><a href="<?= base_url(); ?>">Accueil</a></li>
				<li><a>Boutique</a></li>
                <li class="active">Acheter des <?= $this->config->item('name_point'); ?></li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">	
		<div class="col-md-8">
			<div class="shadow-wrapper margin-bottom-60">
                <div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
                    <h2>Acheter des <?= $this->config->item('name_point'); ?></h2>
                    <p>Vous avez actuellement <?= get($account->Tokens); ?> <?= $this->config->item('name_point'); ?>, avec l'achat, vous gagnerez <?= $bonus; ?> <?= $this->config->item('name_point'); ?>, ce qui élévera votre solde de <?= $this->config->item('name_point'); ?> à un total de <?= $points_after; ?>.
                    <br/>Pour acheter des <?= $this->config->item('name_point'); ?>, veuillez cliquer sur l'image ci-dessous et rentrez le code obtenu dans la partie consacré sur le site.</p>
                </div>
            </div>
			<br/>
			<center><a onclick="window.open(this.href,'StarPass','width=700,height=500,scrollbars=yes,resizable=yes');return false;" href="<?= site_url('points/script'); ?>"><img src="<?= img_url('starpass.png'); ?>"></a></center>
			<br/>
			<div class="alert alert-warning fade in">
                <strong>Attention !</strong> Veuillez votre code en cas de problème.
            </div>
            <br/>
			<div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">
                <form class="reg-page" method="post" action="">
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-code"></i></span>
                        <input type="text" placeholder="Code Starpass" class="form-control" name="code">
                    </div>                 
                    <hr/>
                    <div class="row">
                        <div class="col-md-6 checkbox">                    
                        </div>
                        <div class="col-md-6">
                            <button class="btn-u pull-right" type="submit" name="buy">Valider</button>                        
                        </div>
                    </div>
                </form>           
            </div>
			
		</div>
		<div class="col-md-4">
			<div class="headline"><h2>Voter pour <?= $this->config->item('name'); ?></h2></div>
			<p>Vous pouvez aussi gagner des <?= $this->config->item('name_point'); ?> en votant pour <?= $this->config->item('name'); ?>, pour cela,
			il suffit de cliquer sur le bouton suivant :
			</p>
			<center><a class="btn-u btn-u-red" href="<?= site_url('points/vote'); ?>"><i class="fa fa-thumbs-up"></i> Voter</a>
			<br/>
			<img src="<?= img_url('xelor.jpg'); ?>" width=70%></center>
		</div>
    </div><!--/container-->		
    <!-- End Content Part -->