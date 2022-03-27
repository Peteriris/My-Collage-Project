<?php
    include "header.php";

	
	$connect = pg_connect('host=localhost dbname=kubuka user=postgres password=1234');
?>

	<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image:url(images/bg_1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center">
					<div class="col-md-12 ftco-animate text-center">
						<div class="text mb-5 pb-3">
							<h1 class="mb-3">Welcome To kubuka</h1>
							<h2>Hotels &amp; Resorts</h2>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image:url(images/bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center">
					<div class="col-md-12 ftco-animate text-center">
						<div class="text mb-5 pb-3">
							<h1 class="mb-3">Enjoy Your exp...</h1>
							<h2>Join With Us</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2 class="mb-4">Our Service</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm col-md-5 col-lg-3 ftco-animate">
					<div class="room">
						<a href="hotel.php" class="img d-flex justify-content-center align-items-center"
							style="background-image: url('images/hotel.jpg');">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3 text-center">
							<h3 class=" heading mb-3">Hotel</h3>
							<p>A hotel should relieve travelers of their insecurity and loneliness. It should make them feel warm and cozy.</p>
							<hr>
							<p class="pt-0"><a href="hotel.php" class="btn-custom">View Hotel Room Details <span
										class="icon-long-arrow-right"></span></a></p>

						</div>
					</div>
				</div>
				<div class="col-sm col-md-5 col-lg-3 ftco-animate">
					<div class="room">
						<a href="#" class="img d-flex justify-content-center align-items-center"
							style="background-image: url('images/resort.jpg');">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3 text-center">
							<h3 class=" heading mb-3">Resort</h3>
							<p>Our resorts are designed to inspire and delight every sense.</p>
							<hr>
							<p class="pt-5">Service is not Available</p>
							

						</div>
					</div>
				</div>
				<div class="col-sm col-md-5 col-lg-3 ftco-animate">
					<div class="room">
						<a href="#" class="img d-flex justify-content-center align-items-center"
							style="background-image: url('images/hostels.jpg');">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3 text-center">
							<h3 class=" heading mb-3">Hostels</h3>
							<p>The one who thinks it's a cool idea and worth it, has sure forgotten that independence comes with a price.
								 If one doesn't still agree, you gotta try staying at a hostel</p>
							<hr>
							<p class="pt-0">Service is not Available</p>
							</div>
					</div>
				</div>
				<div class="col-sm col-md-5 col-lg-3 ftco-animate">
					<div class="room">
						<a href="#" class="img d-flex justify-content-center align-items-center"
							style="background-image: url('images/pod.jpg');">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3 text-center">
							<h3 class=" heading mb-3">Pod</h3>
							<p>A small river named Duden flows by their place and supplies.</p>
							<hr>
							<p class="pt-5">Service is not Available</p>
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftc-no-pb ftc-no-pt">
		<div class="container">
			<div class="row">
				<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
					style="background-image: url(images/bg_2.jpg);">
					<a href="https://vimeo.com/45830194"
						class="icon popup-vimeo d-flex justify-content-center align-items-center">
						<span class="icon-play"></span>
					</a>
				</div>
				<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
					<div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
						<div class="ml-md-0">
							<span class="subheading">Welcome to kubhuka</span>
							<h2 class="mb-4">Welcome To Our Hotel</h2>
						</div>
					</div>
					<div class="pb-md-5">
						<p> Kubhuka BOOKING is an tourist agent which provides the facilities for booking hotels, ins,
							houses, holiday apartments, Resorts and other accommodations’ for customers. We also provide
							rooms such as Suite Rooms,Family Rooms,Deluxe Rooms,Superior Rooms,Classic Rooms,Luxury
							Rooms We operate our business in India, Malaysia, Singapore and other South East Asia. Any
							customers need to book hotel, ins or apartment they need to visit their office which is
							situated in Thrissur,Kerala for checking the availability as well as negotiation. Recently
							we have decided to change the booking pattern from manual to web based system. It will help
							them to manage the customers booking easily and also to keep the customers data more safe.
							It will also help staffs to keep in track their customer’s online booking request as well as
							easily to reply feedback to the customers. For that we hired a developer to build the web
							system for this reputed company.</p>

						<ul class="ftco-social d-flex">
							<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-reception-bell"></span>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">25/7 Front Desk</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-serving-dish"></span>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Restaurant Bar</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-sel Searchf-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-car"></span>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Transfer Services</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-spa"></span>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Spa Suites</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>


	<section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Our Rooms</h2>
          </div>
        </div>    		
    		<div class="row">
    			<!-- <div class="col-sm col-md-6 col-lg-4 ftco-animate">
    				<div class="room">
    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/room-2.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3 text-center">
    						<h3 class="mb-3"><a href="rooms.html">Family Room</a></h3>
    						<p><span class="price mr-2">Rs 2300.00</span> <span class="per">per night</span></p>
    						<hr>
    						<p class="pt-1"><a href="room-single.html" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a></p>
    					</div>
    				</div>
    			</div> -->
				<?php
				$count =0;
						$Countidelse = pg_query($connect,"SELECT * FROM hotelregis ");
							if(pg_num_rows($Countidelse)!=0)
							{	
										while($CountNameIdelse=pg_fetch_array($Countidelse))
										{
											
								$count++;
								for($i=$count;$i<=6;$i++)
								{
										
				?>
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
    				<div class="room">
					<?php
							$hotelPhoto = pg_query($connect,"SELECT * FROM hotelphotouplode where hot_regi_id='$CountNameIdelse[0]'");
													
							if(pg_num_rows($hotelPhoto)>0)
								{
									while($result=pg_fetch_array($hotelPhoto)) 
											{
					?>
														 
						<!-- <a href="hotelRoom-singel.php?HotelId=<?php /* echo$CountNameIdelse[0]; */ ?>" class="img d-flex justify-content-center align-items-center" style="background-image: url(/../xampp/htdocs/A Kubuka main/admin_kubuka-Team/);" alt="hotel image">
							-->
							<a href=""><img src="../A Kubuka main/admin_kubuka-Team/<?php echo $result[1]; ?>" alt="hotel image"  width="100%" class="img d-flex justify-content-center align-items-center">
							<!-- <div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div> -->
						</a>
					<?php
							}
						}
					?>
    					<div class="text p-3 text-center">
    						<h3 class="mb-3"><a href=""><?php echo  $CountNameIdelse[1]; ?></a></h3>
    						<p><span class="price mr-2"><?php echo  $CountNameIdelse[2]; ?></span></p>
    						<hr>
    						<p class="pt-1"><a href="" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a></p>
    					</div>
    				</div>
    			</div>
    			<?php
									break;
								}
				}
			}
				?>
    		</div>
    	</div>
    </section>

	<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<?php
										$userlogin = pg_query($connect,"SELECT count(*) FROM userlogin ");
										$userlog=pg_fetch_array($userlogin);
									?>
									<strong class="number" data-number="<?php echo $userlog[0]; ?>">0</strong>
									<span>Happy Guests</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
								<?php
										$NumRoom = pg_query($connect,"SELECT count(*) FROM roomadding ");
										$NumRoomadding=pg_fetch_array($NumRoom);
									?>
									<strong class="number" data-number="<?php echo $NumRoomadding[0]; ?>">0</strong>
									<span>Rooms</span>
								</div>
							</div>
						</div>
						<!-- <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<strong class="number" data-number="1000">0</strong>
									<span>Staffs</span>
								</div>
							</div>
						</div> -->
						<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text"><?php
										$Hotelreg = pg_query($connect,"SELECT count(*) FROM hotelregis ");
										$Hotelregnumb=pg_fetch_array($Hotelreg);
									?>
									<strong class="number" data-number="<?php echo $Hotelregnumb[0]; ?>">0</strong>
									<span>Destination</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- 
	<section class="ftco-section testimony-section bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 ftco-animate">
					<div class="row ftco-animate">
						<div class="col-md-12">
							<div class="carousel-testimony owl-carousel ftco-owl">
								<div class="item">
									<div class="testimony-wrap py-4 pb-5">
										<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
											<span class="quote d-flex align-items-center justify-content-center">
												<i class="icon-quote-left"></i>
											</span>
										</div>
										<div class="text text-center">
											<p class="mb-4">A small river named Duden flows by their place and supplies
												it with the necessary regelialia. It is a paradisematic country, in
												which roasted parts of sentences fly into your mouth.</p>
											<p class="name">Nathan Smith</p>
											<span class="position">Guests</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-wrap py-4 pb-5">
										<div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
											<span class="quote d-flex align-items-center justify-content-center">
												<i class="icon-quote-left"></i>
											</span>
										</div>
										<div class="text text-center">
											<p class="mb-4">A small river named Duden flows by their place and supplies
												it with the necessary regelialia. It is a paradisematic country, in
												which roasted parts of sentences fly into your mouth.</p>
											<p class="name">Nathan Smith</p>
											<span class="position">Guests</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-wrap py-4 pb-5">
										<div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
											<span class="quote d-flex align-items-center justify-content-center">
												<i class="icon-quote-left"></i>
											</span>
										</div>
										<div class="text text-center">
											<p class="mb-4">A small river named Duden flows by their place and supplies
												it with the necessary regelialia. It is a paradisematic country, in
												which roasted parts of sentences fly into your mouth.</p>
											<p class="name">Nathan Smith</p>
											<span class="position">Guests</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-wrap py-4 pb-5">
										<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
											<span class="quote d-flex align-items-center justify-content-center">
												<i class="icon-quote-left"></i>
											</span>
										</div>
										<div class="text text-center">
											<p class="mb-4">A small river named Duden flows by their place and supplies
												it with the necessary regelialia. It is a paradisematic country, in
												which roasted parts of sentences fly into your mouth.</p>
											<p class="name">Nathan Smith</p>
											<span class="position">Guests</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-wrap py-4 pb-5">
										<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
											<span class="quote d-flex align-items-center justify-content-center">
												<i class="icon-quote-left"></i>
											</span>
										</div>
										<div class="text text-center">
											<p class="mb-4">A small river named Duden flows by their place and supplies
												it with the necessary regelialia. It is a paradisematic country, in
												which roasted parts of sentences fly into your mouth.</p>
											<p class="name">Nathan Smith</p>
											<span class="position">Guests</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2>Recent Blog</h2>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-3 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="blog-single.html" class="block-20"
							style="background-image: url('images/image_1.jpg');">
						</a>
						<div class="text mt-3 d-block">
							<h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the
									blind texts</a></h3>
							<div class="meta mb-3">
								<div><a href="#">Dec 6, 2018</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="blog-single.html" class="block-20"
							style="background-image: url('images/image_2.jpg');">
						</a>
						<div class="text mt-3">
							<h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the
									blind texts</a></h3>
							<div class="meta mb-3">
								<div><a href="#">Dec 6, 2018</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="blog-single.html" class="block-20"
							style="background-image: url('images/image_3.jpg');">
						</a>
						<div class="text mt-3">
							<h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the
									blind texts</a></h3>
							<div class="meta mb-3">
								<div><a href="#">Dec 6, 2018</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="blog-single.html" class="block-20"
							style="background-image: url('images/image_4.jpg');">
						</a>
						<div class="text mt-3">
							<h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the
									blind texts</a></h3>
							<div class="meta mb-3">
								<div><a href="#">Dec 6, 2018</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<section class="instagram">
		<div class="container-fluid">
			<div class="row no-gutters justify-content-center pb-5">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<h2><span>Instagram</span></h2>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-sm-12 col-md ftco-animate">
					<a href="images/insta-1.jpg" class="insta-img image-popup"
						style="background-image: url(images/insta-1.jpg);">
						<div class="icon d-flex justify-content-center">
							<span class="icon-instagram align-self-center"></span>
						</div>
					</a>
				</div>
				<div class="col-sm-12 col-md ftco-animate">
					<a href="images/insta-3.jpg" class="insta-img image-popup"
						style="background-image: url(images/insta-3.jpg);">
						<div class="icon d-flex justify-content-center">
							<span class="icon-instagram align-self-center"></span>
						</div>
					</a>
				</div>
				<div class="col-sm-12 col-md ftco-animate">
					<a href="images/insta-4.jpg" class="insta-img image-popup"
						style="background-image: url(images/insta-4.jpg);">
						<div class="icon d-flex justify-content-center">
							<span class="icon-instagram align-self-center"></span>
						</div>
					</a>
				</div>
				<div class="col-sm-12 col-md ftco-animate">
					<a href="images/insta-5.jpg" class="insta-img image-popup"
						style="background-image: url(images/insta-5.jpg);">
						<div class="icon d-flex justify-content-center">
							<span class="icon-instagram align-self-center"></span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<?php
include 'footer.php'; 
?>