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
		<div class="col-md-12">

			<div class="tab-v1">
                <ul class="nav nav-tabs">
				    <li class="active"><a href="#open" data-toggle="tab">Ouvert(s)</a></li>
				    <li><a href="#close" data-toggle="tab">Fermé(s)</a></li>
			    </ul>
            </div>
			
			<div class="tab-content">
				<div class="tab-pane active" id="open">
				<br/><br/>
				<div class="panel panel-red margin-bottom-40">
				
                    <div class="panel-heading">
                        <h3 class="panel-title">Ticket <b>ouvert</b></h3>
                    </div>
					
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th><center>#</center></th>
                                    <th>Titre</th>
                                    <th>Date</th>
									<th>Réponse(s)</th>
									<th>Label</th>
									<th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach($tickets_o as $key => $ticket){ ?>
                                <tr>
                                    <td><center><?= $key + 1; ?></center></td>
                                    <td><?= get($ticket->title); ?></td>
                                    <td><?= get($ticket->date); ?></td>
                                    <td><?= $this->SupportManager->get_nbr_answer(get($ticket->id)); ?></td>
									<td><?= tickets_label(get($ticket->label)); ?></td>
									<td><a href="<?= site_url('support/view/'.get($ticket->id)); ?>"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>                      
                </div>
				</div>
			
				<div class="tab-pane" id="close">
				<br/><br/>
				<div class="panel panel-red margin-bottom-40">
				
                    <div class="panel-heading">
                        <h3 class="panel-title">Ticket <b>fermé</b></h3>
                    </div>
					
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th><center>#</center></th>
                                    <th>Titre</th>
                                    <th>Date</th>
									<th>Réponse(s)</th>
									<th>Label</th>
									<th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach($tickets_c as $key => $ticket){ ?>
                                <tr>
                                    <td><center><?= $key + 1; ?></center></td>
                                    <td><?= get($ticket->title); ?></td>
                                    <td><?= get($ticket->date); ?></td>
                                    <td><?= $this->SupportManager->get_nbr_answer(get($ticket->id)); ?></td>
									<td><?= tickets_label(get($ticket->label)); ?></td>
									<td><a href="<?= site_url('support/view/'.get($ticket->id)); ?>"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>                      
                </div>
				</div>
			</div>
			<center><a rel="round-corners" class="btn-u btn-u-blue round-corners" href="<?= site_url('support/post'); ?>"><i class="fa fa-plus"></i> Créer un nouveau ticket</a></center><br/>
			<br/><br/><br/>
		</div>
    </div><!--/container-->		
    <!-- End Content Part -->