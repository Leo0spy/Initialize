	<!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Galerie d'avatar</h1>
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
			<form method="post" action="" class="sky-form">
			<header>Changer son avatar</header>
			<fieldset>
				<section>
					<div class="inline-group">	
						<?php for($ini = 1; $ini <= 116; $ini++){ ?>
						<label class="radio"><input type="radio" name="avatar" value="<?= $ini; ?>"><i class="rounded-x"></i><img src="<?= img_url('avatar/'.$ini.'.jpg'); ?>" width=100 class="img-responsive rounded-x"></label>
						<?php } ?>
                    </div>
				</section>
			</fieldset>
			<fieldset>
				<section>
					<button type="submit" name="change" class="btn-u"><i class="fa fa-check"></i> Changer</button>
				</section>
			</fieldset>
			</form>
		</div>
    </div><!--/container-->		
    <!-- End Content Part -->