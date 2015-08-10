	<!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Connexion</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="<?= base_url(); ?>">Accueil</a></li>
                <li><a>Utilisateur</a></li>
                <li class="active">Connexion</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">	
		<div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <form class="reg-page" method="post" action="">
                    <div class="reg-header">            
                        <h2>Se connecter à votre compte</h2>
                    </div>

                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" placeholder="Nom de compte" class="form-control" name="login">
                    </div>                    
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" placeholder="Mot de passe" class="form-control" name="password">
                    </div>                    

                    <div class="row">
                        <div class="col-md-6 checkbox">
                            <label><input type="checkbox"> Rester connecté</label>                        
                        </div>
                        <div class="col-md-6">
                            <button class="btn-u pull-right" type="submit" name="connect">Se connecter</button>                        
                        </div>
                    </div>

                    <hr>

                    <h4>Mot de passe oublié ?</h4>
                    <p>Pas de problème, <a class="color-green" href="<?= site_url('password/forgot'); ?>">cliquez ici</a> pour restaurer votre mot de passe.</p>
                </form>   
                <br/><br/><br/><br/><br/><br/><br/><br/><br/>         
            </div>
        </div><!--/row-->
    </div><!--/container-->		
    <!-- End Content Part -->