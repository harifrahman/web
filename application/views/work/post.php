			  
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Our Work				
							</h1>	
							<p class="text-white link-nav"><a href="<?=base_url()?>">Back to Home </a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<!-- Start blog-posts Area -->
			<section class="blog-posts-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 post-list blog-post-list">
							<!-- repeat here ++++++++++++++++++++++++++++ -->
							<?php foreach ($work as $key): ?>
							<div class="single-post">
								<img class="img-fluid" src="<?=base_url()?>assets/img/work/<?=$key->work_image?>" alt="">
								<a href="<?=base_url()?>work/post/<?=$key->work_id?>">
									<h1>
										<!-- how to call data passing from post-controller -->
										<?=$key->work_nama?>
									</h1>
								</a>
								<p class="date">Posted on : <?=$key->work_created_time?></p>
								<!-- isi disini klo ada body of media'nya -->
								<p>
									<?=$key->work_deskripsi?>		
								</p>
								<div class="bottom-meta">
								</div>
							</div>
							<?php endforeach; ?>

							<!-- end blog foreach here ++++++++++++++++++++ -->
																					
						</div>
					</div>
				</div>	
			</section>
			<!-- End blog-posts Area -->
