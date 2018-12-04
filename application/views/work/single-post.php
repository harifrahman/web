            <!-- start banner Area -->
            <section class="banner-area relative" id="home">    
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                Recent Work               
                            </h1>   
                            <p class="text-white link-nav"><a href="<?= base_url()?>">Home </a>
                        </div>                                          
                    </div>
                </div>
            </section>
            <!-- End banner Area -->    
			<?php foreach ($detail_work as $key): ?>
			<!-- Start blog-posts Area -->
			<section class="blog-posts-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 post-list blog-post-list">
							<div class="single-post">
								<img class="img-fluid" src="<?=base_url()?>assets/img/work/<?=$key->work_image?>" alt="">
								<a href="#">
									<h1>
										<?=$key->work_nama?>
									</h1>
                                    <h6 class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?=date('d F Y', strtotime($key->work_created_time))?></h6>
								</a>
								<div class="content-wrap">
                                    <!-- body of content article media here -->
									<?=$key->work_isi?>									
								</div>

                            <!-- End nav Area -->
            				<?php endforeach; ?>
							</div>																		
						</div>
				</div>	
			</section>
			<!-- End blog-posts Area -->
