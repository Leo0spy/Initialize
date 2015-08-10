    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Blog</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="<?= base_url(); ?>">Accueil</a></li>
                <li><a>Communauté</a></li>
                <li class="active">Blog</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">	
        <ul class="timeline-v1">
            <?php foreach($news as $key => $new){ ?>
            <li <?php if(($key + 2)&1){ echo 'class="timeline-inverted"'; } ?>>
                <div class="timeline-badge primary"><i class="glyphicon glyphicon-record"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <img class="img-responsive" src="<?= img_url(get($new->img)); ?>" />
                    </div>
                    <div class="timeline-body text-justify">
                        <h2 class="font-light"><a href="<?= site_url('blog/view/'.get($new->id)); ?>"><?= get($new->title); ?></a></h2>
                        <p><?= limit_text(get($new->content)); ?></p>
                        <a class="btn-u btn-u-sm" href="<?= site_url('blog/view/'.get($new->id)); ?>">Read More</a>
                    </div>
                    <div class="timeline-footer">
                        <ul class="list-unstyled list-inline blog-info">
                            <li><i class="fa fa-clock-o"></i> <?= convert_date(get($new->date)); ?> - <i class="fa fa-tags"></i> <?= type_news(get($new->type)); ?> - Par <i><?= get($new->author); ?></i></li>
                        </ul>
                        <a class="likes">
                            <i class="fa fa-comments-o"></i> <?= $this->BlogManager->count_comments(get($new->id)); ?>
                        </a>
                    </div>
                </div>
            </li>
            <?php } ?>
            <li class="clearfix" style="float: none;"></li>
        </ul>
        <div class="text-center">
            <?= pagination(site_url('blog/home'), $nbr_page, $current); ?>
        </div>  
    </div><!--/container-->		
    <!-- End Content Part -->