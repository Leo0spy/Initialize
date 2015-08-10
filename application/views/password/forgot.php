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
            <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                <form class="reg-page" method="post" action="">
                    <div class="reg-header">            
                        <h2>Récupérer son mot de passe</h2>
                    </div>

                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" placeholder="Nom de compte" class="form-control" name="login">
                    </div>                    
                    <center><div class="g-recaptcha" data-sitekey="<?= $this->config->item('public_key'); ?>"></div></center>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 checkbox">                     
                        </div>
                        <div class="col-md-6">
                            <button class="btn-u pull-right" type="submit" name="change">Confirmer</button>                        
                        </div>
                    </div>
                </form>   
                <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            </div>
        </div><!--/row-->
    </div><!--/container-->		
    <!-- End Content Part -->