
			<!-- start banner Area -->
			<section class="banner-area" id="home">
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-6 col-md-6">
							<h1>
								<font color="purple"> H</font>ello <br>
								 We Are Eigtolabs <br>
								<font size="9"> Creative Digital Studio </font> 			
							</h1>
							<p class="text-white text-uppercase">
								Everyone wants the innovation through IT Consultant
							</p>
							<a href="<?=base_url()?>about" class="primary-btn header-btn text-uppercase">View Details</a>
						</div>
						<div class="banner-img col-lg-6 col-md-6">
							<img class="img-fluid" src="<?=base_url()?>assets/frontoffice/img/banner-img.png" alt="">
						</div>												
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start products Area -->
			<section class="products-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-12 pb-40 header-text text-center">
							<a href="<?=base_url()?>/work">
								<h1 class="pb-10">Check Our Works</h1>
							</a>
							<p>
								Who are in extremely love with friendly system.
							</p>
						</div>
					</div>							
					<div class="row">
						<?php foreach ($work as $key) : ?>
						<div class="col-lg-4 col-md-4">
							<div class="single-product">
								<div class="thumb">
									<img src="<?=base_url()?>assets/img/work/<?=$key->work_image?>" alt="">
								</div>
								<div class="details">
									<h4><?=$key->work_isi?></h4>
									<p>
										<?=$key->work_deskripsi?>
									</p>
									<a href="<?=base_url()?>work/post/<?=$key->work_id?>" class="primary-btn text-uppercase">View Details</a>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
								
					</div>
				</div>	
			</section>
			<!-- End products Area -->

			<!-- Start home-about Area -->
			<section class="home-about-area">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-6 home-about-left no-padding">
							<img class="mx-auto d-block img-fluid" src="<?=base_url()?>assets/frontoffice/img/about-img.png" alt="">
						</div>
						<div class="col-lg-6 home-about-right no-padding">
							<h1>Ini Section About Us <br>
							by Eigtolabs pastinya</h1>
							<h5>
								We are here to listen from you deliver exellence
							</h5>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
							</p>
							<a class="primary-btn text-uppercase" href="<?=base_url()?>about">Get Details</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->

<br><br><br>			

			<!-- Start blog Area -->
			<section class="blog-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-12 pb-40 header-text text-center">
							<a href="<?=base_url()?>/work">
								<h1 class="pb-10">Latest News from our Blog</h1>
							</a>
							<p>
								Keep Upgrade and Growth with Us.
							</p>
						</div>
					</div>
					<?php foreach ($media as $key) : ?>						
					<div class="row">
						<div class="col-lg-4 col-md-4 blog-left">
							<div class="thumb">
								<img class="img-fluid" src="<?=base_url()?>assets/img/media/<?=$key->media_gambar?>" alt="">
							</div>
							<div class="detais">
								<ul class="tags">
									<li><a href="#"><?=$key->med_kat_name?></a></li>
								</ul>
								<a href="<?=base_url()?>media/post/<?=$key->media_id?>">
									<h1>
										<!-- how to call data passing from post-controller -->
										<?=$key->media_judul?>
									</h1>
								</a>
								<p class="date">Posted on : <?=$key->media_created_time?></p>
							</div>
						</div>
					</div>
					<?php endforeach;?>
				</div>	
			</section>
			<!-- End blog Area -->

