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
                <ul class="nav nav-tabs">
                    <li><a href="<?= site_url('ladder/pvm'); ?>">PVM</a></li>
                    <li><a href="<?= site_url('ladder/pvp'); ?>">PVP</a></li>
                    <li class="active"><a>Guildas</a></li>
                    <li><a href="<?= site_url('ladder/vote'); ?>">Votos</a></li>
                </ul>
            </div>

            <br/>
            <div class="panel panel-red margin-bottom-40">
                <div class="panel-heading">
                    <h3 class="panel-title">Ranking <b>Guildas</b></h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th><center>#</center></th>
                                <th>Nome</th>
                                <th><center>Emblema</center></th>
                                <th>Level</th>
                                <th>Experiência</th>
                                <th>Membros</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($guilds as $pos => $guild){ ?>
                                <?= color_line($pos + 1); ?>
                                <td><center><?= $pos + 1; ?></center></td>
                                <td><a href="<?= site_url('page/guild/'.get($guild->Id)); ?>"><?= get($guild->Name); ?></a></td>
                                <td><?= guild_emblem($guild->EmblemBackgroundShape, $guild->EmblemBackgroundColor, $guild->EmblemForegroundShape, $guild->EmblemForegroundColor); ?></td>
                                <td><?= guild_level(get($guild->Experience), $this->LadderManager); ?></td>
                                <td><?= get($guild->Experience); ?></td>
                                <td><?= $this->LadderManager->count_members($guild->Id); ?></td>
                            </tr>                    
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>