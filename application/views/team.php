			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Our Teams				
							</h1>	
							<p class="text-white link-nav"><a href="<?=base_url()?>">Back to Home </a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start products Area -->
			<section class="products-area product-page section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-12 pb-40 header-text text-center">
							<h1 class="pb-10">Kerjasama Team dan Kekeluargaan </h1>
							<p>
								We are family together strong and gaol
							</p>
						</div>
					</div>							
					<div class="row">
						<?php foreach ($team as $key): ?>
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<div class="thumb">
									<img class="img-fluid" src="<?=base_url()?>assets/img/team/<?=$key->team_image?>" alt="">
								</div>
								<div class="details">
									<h4><?=$key->team_nama?></h4>
									<p>
										<?=$key->team_jabatan?>
									</p>
									
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>	
			</section>
			<!-- End products Area -->
