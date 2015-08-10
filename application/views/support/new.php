	<!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Mes tickets</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="<?= base_url(); ?>">Accueil</a></li>
                <li><a>Assistance</a></li>
                <li class="active">Ticket</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">	
	
		<div class="col-md-4">
			<div class="shadow-wrapper margin-bottom-60">
		        <div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
		            <h2>Règles</h2>
					<p>Lors de la création d'un nouveau ticket, vous vous engagez à respecter les règles ci-dessous :<br/>
					- Votre titre doit être claire et doit résumer votre problème.<br/>
					- Toutes formes d'insultes sera severement punis.<br/>
					- Veuillez à ne pas créez de ticket à fin d'amusement.<br/>
					- Le système de ticket n'est pas un système de tchat avec les membres de l'équipe de <?= $this->config->item('name'); ?>.<br/></p>                
				</div>
		    </div>
		</div>
		
		<div class="col-md-8">
			<form class="reg-page" method="post" action="">
			    <div class="reg-header">            
			        <h2>Poster un nouveau ticket</h2>
			    </div>
			    <div class="input-group margin-bottom-20">
			        <span class="input-group-addon"><i class="fa fa-info"></i></span>
			        <input type="text" placeholder="Titre" class="form-control" name="title">
			    </div> 
			    <textarea class="form-control" rows="5" placeholder="Description du problème" name="content"></textarea><br/>
                <label for="form_label">Label</label>
				<select name="label" class="form-control" id="form_label">
						<option value="1">Jeu</option>
						<option value="2">Forum</option>
						<option value="3">Site</option>
						<option value="4">Autre</option>
				</select>
			    <hr>
			    <div class="row">
			        <div class="col-md-6 checkbox">
			            <a class="btn-u pull-left" href="<?= site_url('support/ticket'); ?>">Retour</a>                      
			        </div>
			        <div class="col-md-6">
			            <button class="btn-u pull-right" type="submit" name="post">Poster</button>                        
			        </div>
			    </div>
			</form> 
		</div>
    </div><!--/container-->		
    <!-- End Content Part -->