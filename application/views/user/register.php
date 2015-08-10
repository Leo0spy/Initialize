<!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Inscription</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="<?= base_url(); ?>">Accueil</a></li>
                <li><a>Utilisateur</a></li>
                <li class="active">Inscription</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">	
		<div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                <form class="reg-page" method="post" action="">
                    <div class="reg-header">            
                        <h2>S'inscrire sur <?= $this->config->item('name'); ?></h2>
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="text" placeholder="Nom de compte" class="form-control" name="login">
                    </div>                    
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" placeholder="Pseudo" class="form-control" name="pseudo">
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" placeholder="Adresse mail" class="form-control" name="mail">
                    </div>  
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" placeholder="Mot de passe" class="form-control" name="password">
                    </div>  
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" placeholder="Confirmer" class="form-control" name="conf_password">
                    </div>      

                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-question"></i></span>
                        <input type="text" placeholder="Question secrète" class="form-control" name="question">
                    </div>  
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-magic"></i></span>
                        <input type="text" placeholder="Réponse secrète" class="form-control" name="answer">
                    </div>       
                    <div class="input-group margin-bottom-20">
                    	<label><input type="checkbox" name="terms"> J'accepte les <a href="<?= site_url('home/cgu'); ?>">Termes & Conditions</a></label>   
                    </div>
                    <center><div class="g-recaptcha" data-sitekey="<?= $this->config->item('public_key'); ?>"></div></center>
					<hr>
                     <div class="row">
                        <div class="col-md-6 checkbox">                      
                        </div>
                        <div class="col-md-6">
                            <button class="btn-u pull-right" type="submit" name="register">S'inscrire</button>                        
                        </div>
                    </div>
                </form>   
            </div>
        </div><!--/row-->
    </div><!--/container-->		
    <!-- End Content Part -->