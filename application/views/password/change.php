	<!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Mot de passe oublié</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="<?= base_url(); ?>">Accueil</a></li>
                <li><a>Utilisateur</a></li>
                <li class="active">Mot de passe</li>
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
                        <h2>Récupérer son mot de passe</h2>
                    </div>

                    <p>Question : <b><?= get($account->SecretQuestion); ?></b></p>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-magic"></i></span>
                        <input type="text" placeholder="Réponse secrète" class="form-control" name="answer">
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" placeholder="Nouveau mot de passe" class="form-control" name="password">
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" placeholder="Confirmer" class="form-control" name="conf_password">
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-md-6 checkbox">                     
                        </div>
                        <div class="col-md-6">
                            <button class="btn-u pull-right" type="submit" name="change">Confirmer</button>                        
                        </div>
                    </div>
                </form>   
                <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            </div>
        </div><!--/row-->
    </div><!--/container-->		
    <!-- End Content Part -->