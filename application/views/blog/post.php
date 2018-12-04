			  
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Latest Posts				
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
							<?php foreach ($media as $key): ?>
							<div class="single-post">
								<img class="img-fluid" src="<?=base_url()?>assets/img/media/<?=$key->media_gambar?>" alt="">
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
								<!-- isi disini klo ada body of media'nya -->
								<div class="bottom-meta">
									<div class="user-details row align-items-center">
										<!-- <div class="comment-wrap col-lg-6">
											<ul>
												<li><a href="#"><span class="lnr lnr-heart"></span>	4 likes</a></li>
												<li><a href="#"><span class="lnr lnr-bubble"></span> 06 Comments</a></li>
											</ul>
										</div> -->
										<div class="social-wrap col-lg-6">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
											</ul>
											
										</div>
									</div>
								</div>
							</div>
							<?php endforeach; ?>

							<!-- end blog foreach here ++++++++++++++++++++ -->
																					
						</div>


						<div class="col-lg-4 sidebar">
							<div class="single-widget search-widget">
								<form class="example" action="#" style="margin:auto;max-width:300px">
								  <input type="text" placeholder="Search Posts" name="search2">
								  <button type="submit"><i class="fa fa-search"></i></button>
								</form>								
							</div>

							<div class="single-widget category-widget">
								<h4 class="title">Post Categories</h4>
								<ul>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Techlology</h6> <span>37</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Lifestyle</h6> <span>24</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Fashion</h6> <span>59</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Art</h6> <span>29</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Food</h6> <span>15</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Architecture</h6> <span>09</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Adventure</h6> <span>44</span></a></li>
								</ul>
							</div>

							<!-- <div class="single-widget recent-posts-widget">
								<h4 class="title">Recent Posts</h4>
								<div class="blog-list ">
									<div class="single-recent-post d-flex flex-row">
										<div class="recent-thumb">
											<img class="img-fluid" src="img/blog/r1.jpg" alt="">
										</div>
										<div class="recent-details">
											<a href="blog-single.html">
												<h4>
													Home Audio Recording
													For Everyone
												</h4>
											</a>
											<p>
												02 hours ago
											</p>
										</div>
									</div>	
									<div class="single-recent-post d-flex flex-row">
										<div class="recent-thumb">
											<img class="img-fluid" src="img/blog/r2.jpg" alt="">
										</div>
										<div class="recent-details">
											<a href="blog-single.html">
												<h4>
													Home Audio Recording
													For Everyone
												</h4>
											</a>
											<p>
												02 hours ago
											</p>
										</div>
									</div>	
									<div class="single-recent-post d-flex flex-row">
										<div class="recent-thumb">
											<img class="img-fluid" src="img/blog/r3.jpg" alt="">
										</div>
										<div class="recent-details">
											<a href="blog-single.html">
												<h4>
													Home Audio Recording
													For Everyone
												</h4>
											</a>
											<p>
												02 hours ago
											</p>
										</div>
									</div>	
									<div class="single-recent-post d-flex flex-row">
										<div class="recent-thumb">
											<img class="img-fluid" src="img/blog/r4.jpg" alt="">
										</div>
										<div class="recent-details">
											<a href="blog-single.html">
												<h4>
													Home Audio Recording
													For Everyone
												</h4>
											</a>
											<p>
												02 hours ago
											</p>
										</div>
									</div>																																					
								</div>								
							</div> -->
						</div>
					</div>
				</div>	
			</section>
			<!-- End blog-posts Area -->
