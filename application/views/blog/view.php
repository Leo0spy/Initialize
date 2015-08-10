    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Article</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="<?= base_url(); ?>">Accueil</a></li>
                <li><a>Communauté</a></li>
                <li><a href="<?= site_url('blog/'); ?>">Blog</a></li>
                <li class="active">Article</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">		
    	<div class="row blog-page blog-item">
            <!-- Left Sidebar -->
        	<div class="col-md-8 md-margin-bottom-60">
                <!--Blog Post-->        
                <div class="blog margin-bottom-40">
                    <h2><a><?= get($news->title); ?></a></h2>
                    <div class="blog-post-tags">
                        <ul class="list-unstyled list-inline blog-info">
                            <li><i class="fa fa-calendar"></i> <?= convert_date($news->date); ?></li>
                            <li><i class="fa fa-pencil"></i> <?= get($news->author); ?></li>
                            <li><i class="fa fa-tags"></i> <?= type_news(get($news->type)); ?></li>
                            <li><i class="fa fa-comments-o"></i> <a><?= $this->BlogManager->count_comments(get($news->id)); ?></a></li>
                        </ul>
                    </div>
                    <div class="blog-img">
                        <img class="img-responsive" src="<?= img_url($news->img); ?>">
                    </div>
                    <p><?= content($news->content); ?></p><br/>
                </div>
                <!--End Blog Post-->        

    			<hr>

                <div class="media">
                    <h3>Commentaires (<?= $this->BlogManager->count_comments(get($news->id)); ?>)</h3>
                </div>
                <!-- Recent Comments -->
                <?php foreach($comments as $comment){ ?>
                <div class="media">
                    <a class="pull-left">
                        <img class="img-responsive rounded-x" src="<?= img_url('avatar/'.$this->BlogManager->get_info_account(get($comment->author))->cms_avatar.'.jpg'); ?>" width=40/>
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?= $this->BlogManager->get_info_account(get($comment->author))->Nickname; ?> <span><a><?= convert_date(get($comment->date)); ?></a></span></h4>
                        <p><?= content($comment->content); ?></p>
                    </div>
                </div><!--/media-->
                <?php } ?>
                <div class="text-center">
                    <?= pagination(site_url('blog/view/'.$news->id), $nbr_page, $current); ?>
                </div>
                
                <!-- End Recent Comments -->

                <hr>

                <?php if($this->session->has_userdata('Id')){ ?>
                <!-- Comment Form -->
                <div class="post-comment">
                	<h3>Laisser un commentaire</h3>
                    <form method="post" action="">
                        <label>Message</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-11 col-md-offset-0">
                                <textarea class="form-control" rows="8" name="content" placeholder="Votre message..."></textarea>
                            </div>                
                        </div>
                        
                        <p><button class="btn-u" type="submit" name="send">Envoyer</button></p>
                    </form>
                </div>
                <!-- End Comment Form -->
                <?php } ?>
            </div>
            <!-- End Left Sidebar -->

            <!-- Right Sidebar -->
            <div class="col-md-4 magazine-page">
                <!-- Posts -->
                <div class="posts margin-bottom-40">
                    <div class="headline headline-md"><h2>Actualités récentes</h2></div>

                    <?php foreach($last_news as $last){ ?>
                    <div class="magazine-posts col-md-12 col-sm-6 margin-bottom-30">
                        <h3><a href="<?= site_url('blog/view/'.get($last->id)); ?>"><?= get($last->title); ?></a></h3>
                        <span><i class="color-green">Par <?= get($last->author); ?></i> / <?= convert_date(get($last->date)); ?></span>
                        <div class="magazine-posts-img">
                            <a href="<?= site_url('blog/view/'.get($last->id)); ?>"><img class="img-responsive" src="<?= img_url(get($last->img)); ?>" alt=""></a>
                            <?= type_news($last->type); ?>
                        </div>
                    </div>
                    <?php } ?>

                </div><!--/posts-->
                <!-- End Posts -->

            </div>
            <!-- End Right Sidebar -->
        </div><!--/row-->        
    </div><!--/container-->		
    <!--=== End Content Part ===-->