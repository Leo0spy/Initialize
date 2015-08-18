    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">A Equipe <?= $this->config->item('name'); ?></h1>
            <ul class="pull-right breadcrumb">
                <li><a href="<?= site_url('support/faq'); ?>">Home</a></li>
                <li><a>Comunidade</a></li>
                <li class="active">Equipe</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">	
	   <div class="row team">
            <div class="alert alert-info fade in">
                <strong>Informação!</strong> Todos os integrantes da equipe <?= $this->config->item('name'); ?> estão listados aqui.
            </div>  

            <?php foreach($staffs as $staff){ ?>
            <div class="col-sm-3">
                <div class="thumbnail-style">
                    <center><img class="img-responsive rounded-x" src="<?= img_url('avatar/'.get($staff->avatar).'.jpg'); ?>" width=135 /></center>
                    <div class="inner-team">
                        <center><h3><?= get($staff->name); ?></h3>
                        <small class="color-green"><?= get($staff->rank); ?></small>
                        <br/>
                        <p><?= get($staff->desc); ?></p>
                        <hr>    
                        <ul class="list-inline team-social">
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="fb tooltips" data-original-title="Facebook" href="<?= $this->config->item('fb_link'); ?>">
                                <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="tw tooltips" data-original-title="Twitter" href="<?= $this->config->item('twt_link'); ?>">
                                <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="gp tooltips" data-original-title="Skype" href="skype:<?= get($staff->skype_name); ?>?userinfo">
                                <i class="fa fa-skype"></i>
                                </a>
                            </li>
                        </ul></center>
                        <br/>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div><!--/container-->		
    <!-- End Content Part -->