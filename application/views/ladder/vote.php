    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">O Ranking</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li><a>Comunidade</a></li>
                <li class="active">Ranking</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <div class="container content"> 
        <div class="col-md-12">

            <div class="tab-v1">
                <ul class="nav nav-tabs tabs">
                    <li><a href="<?= site_url('ladder/pvm'); ?>">PVM</a></li>
                    <li><a href="<?= site_url('ladder/pvp'); ?>">PVP</a></li>
                    <?php if($this->config->item('ladder_guilds') == TRUE){ ?>
                    <li><a href="<?= site_url('ladder/guild'); ?>">Guildas</a></li>
                    <?php } ?>
                    <li class="active"><a>Votos</a></li>
                </ul>
            </div>

            <br/>
            <div class="panel panel-red margin-bottom-40">
                <div class="panel-heading">
                    <h3 class="panel-title">Ranking <b>Voto</b></h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th><center>#</center></th>
                                <th>Apelido</th>
                                <th></th>
                                <th>Votos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($vote as $pos => $acc){ ?>
                                <?= color_line($pos + 1); ?>
                                <td><center><?= $pos + 1; ?></center></td>
                                <td><?= get($acc->Nickname); ?></td>
                                <td><img class="img-responsive rounded-x" src="<?= img_url('avatar/'.get($acc->cms_avatar).'.jpg'); ?>" width=35/></td>
                                <td><?= get($acc->cms_votes); ?></td>
                            </tr>                    
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>