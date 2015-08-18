<!--=== Slider ===-->
<div class="slider-inner">
    <div id="da-slider" class="da-slider">
		<?php foreach($sliders as $slider){ ?>
        <div class="da-slide">
            <h2><i><?= content($slider->title); ?></i></h2>
            <p><i><?= content($slider->content); ?></i></p>
            <div class="da-img"><img class="img-responsive" src="<?= img_url('sliders/'.get($slider->img)); ?>" /></div>
        </div>	
		<?php } ?>
        <div class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>        
        </div>
    </div>
</div><!--/slider-->
<!--=== End of Slider ===-->

<div class="purchase">
    <div class="container">
        <div class="row">
            <div class="col-md-9 animated fadeInLeft">
                <span>Gostaria de uma nova aventura ?</span>
				<p>Se for este o caso, então venha <b>jogar conosco!</b></p>
            </div>            
            <div class="col-md-3 btn-buy animated fadeInRight">
                <a href="<?= site_url('home/join'); ?>" class="btn-u btn-u-lg"><i class="fa fa-cloud-download"></i> Jogar <?= $this->config->item('name'); ?></a>
            </div>
        </div>
    </div>
</div><!--/row-->

<!--=== Content Part ===-->
<div class="container content">	
   	<!-- Service Blocks -->
   	<div class="row margin-bottom-30">
       	<div class="col-md-4">
        	<div class="service">
                <i class="fa fa-users service-icon"></i>
        		<div class="desc">
        			<h4>Uma comunidade amiga</h4>
                    <p>Sempre ouvimos o que você e toda a comunidade de jogadores tem a dizer, contamos sempre com a ajuda dos jogadores para a evolução do servidor.</p>
        		</div>
        	</div>	
        </div>
        <div class="col-md-4">
        	<div class="service">
                <i class="fa fa-cog service-icon"></i>
        		<div class="desc">
        			<h4>Os desenvolvedores</h4>
					<p>Nossos desenvolvedores dão o seu máximo para manter  o servidor da melhor forma possivel e garantir o futuro do servidor com uma jogatina agradavel.</p>      			
				</div>
        	</div>	
        </div>
        <div class="col-md-4">
        	<div class="service">
                <i class="fa fa-laptop service-icon"></i>
        		<div class="desc">
        			<h4>Un gameplay</h4>
					<p>Juntamos os nossos esforços para recriar uma experiência verdadeiramente diferente de outros servidores.</p>
        		</div>
        	</div>	
        </div>			    
    </div>
    <!-- End Service Blokcs -->
    <!-- Info Blokcs -->
    <div class="row margin-bottom-30">
        <!-- Welcome Block -->
    	<div class="col-md-6 md-margin-bottom-40">
    		<div class="headline"><h2>Atualizações</h2></div>
                <div class="row">
               		<a class="twitter-timeline" href="<?= $this->config->item('twt_link'); ?>" width="650" height="385" data-chrome="noscrollbar noborders" data-widget-id="<?= $this->config->item('twt_id'); ?>">Tweets de @<?= $this->config->item('twt_name'); ?></a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>	
				</div>
            </div><!--/col-md-6-->        
            <!-- Latest Shots -->
            <div class="col-md-6">
    			<div class="headline"><h2>ScreenShots</h2></div>
    				<div id="myCarousel" class="carousel slide carousel-v1">
                    	<div class="carousel-inner">
							<?php foreach($screenshots as $screen){ ?>
                        	<div class="item <?php if($screen->id == 1){ echo 'active'; } ?>">
                            	<img src="<?= img_url(get($screen->img)); ?>">
                            	<div class="carousel-caption">
                                	<p><?= get($screen->desc); ?></p>
                            	</div>
                        	</div>				
							<?php } ?>  
                    	</div>
                    	<div class="carousel-arrow">
                        	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        	</a>
                        	<a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        	</a>
                    	</div>
    				</div>
            	</div><!--/col-md-4-->
    		</div>	
    		<!-- End of Latest Shots -->
        	<div class="headline"><h2>Assistencia & Suporte</h2></div>
        <div class="row margin-bottom-20">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                	<div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="<?= img_url('support/faq.jpg'); ?>" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="<?= site_url('support/faq'); ?>">+ info</a>					
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="<?= site_url('support/faq'); ?>">FAQ</a></h3>
                        <p>Procurando respostas para seus problemas? O FAQ pode te ajudar!</p><br/>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="<?= img_url('support/ticket.jpg'); ?>" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="<?= site_url('support/ticket'); ?>">+ info</a>					
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="<?= site_url('support/ticket'); ?>">Ticket</a></h3>
                        <p>Envie um ticket para discutir o problema com alguém da equipe</p><br/>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="<?= img_url('support/bugtracker.jpg'); ?>" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="<?= site_url('support/bugtracker'); ?>">+ info</a>					
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="<?= site_url('support/bugtracker'); ?>">Bugtracker</a></h3>
                        <p>Pode listar os bugs que você encontrou enquanto jogava no <?= $this->config->item('name'); ?>.</p><br/>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="<?= img_url('support/forum.png'); ?>">
                        </div>
                        <a class="btn-more hover-effect" href="<?= $this->config->item('link_forum'); ?>">+ info</a>					
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="<?= $this->config->item('link_forum'); ?>">Forum</a></h3>
                        <p>Deseja conversar com a comunidade sobre algum problema ou algo que encontrou no jogo, utilize nosso forum!</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/container-->		
    <!-- End Content Part -->