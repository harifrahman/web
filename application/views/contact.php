	<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Contact				
							</h1>	
							<p class="text-white link-nav"><a href="#">Visit Us</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						<div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5>Sumatra Utara, Indonesia</h5>
									<p>Sejahtera Street, Medan</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>0823 8707 6439</h5>
									<p>Mon to Sat 8am to 10pm</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>admin@eigtolabs.com</h5>
									<p>Send us your query anytime!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
							<form class="forms-sample" action="<?=base_url()?>contact/create/do_create" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="nama">Name</label>
                          <input type="text" class="form-control" name="contact_nama" required>
                      </div>
                      <div class="form-group">
                        <label for="subject">Subject</label>
                          <input type="text" class="form-control" name="contact_subject" required>
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                          <input type="email" class="form-control" name="contact_email" required>
                      </div>
                      <div class="form-group">
                        <label for="nohp">Phone Number</label>
                          <input type="text" class="form-control" name="contact_nohp" required>
                      </div>
                    <div class="form-group">
                      <label for="body">Message</label>
                      <textarea class="form-control" id="body" name="contact_isi" rows="7" placeholder="Write here..."></textarea>
                    </div>
                    <button type="submit" class="primary-btn	">Submit</button>
                    
                  </form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->
