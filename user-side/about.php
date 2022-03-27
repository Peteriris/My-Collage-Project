<?php
include "header.php";

$connect = pg_connect('host=localhost dbname=kubuka user=postgres password=1234');
?>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
	            <h1 class="mb-4 bread">About Us</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

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

    <section class="ftco-section ftc-no-pb ftc-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 img-3 d-flex justify-content-center align-items-center" style="background-image: url(images/bg_2.jpg);">
						<a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
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
							<p>Kubhuka BOOKING is an tourist agent which provides the facilities for booking hotels, ins,
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

    <section class="instagram pt-5">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2><span>Instagram</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-1.jpg" class="insta-img image-popup" style="background-image: url(images/insta-1.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-2.jpg" class="insta-img image-popup" style="background-image: url(images/insta-2.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-3.jpg" class="insta-img image-popup" style="background-image: url(images/insta-3.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-4.jpg" class="insta-img image-popup" style="background-image: url(images/insta-4.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-5.jpg" class="insta-img image-popup" style="background-image: url(images/insta-5.jpg);">
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