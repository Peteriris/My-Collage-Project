<?php
include 'header.php'; 

 $connect = pg_connect('host=localhost dbname=kubuka user=postgres password=1234');
if ($_POST) 
{
	$placess = $_POST['palcesearch'];
	$checkInDate = $_POST['checkInDate'];
	$checkOutDate = $_POST['checkOutDate'];/* 
	$Adult = $_POST['Number_of']; */

	$_SESSION['checkInDate']=$checkInDate;
	$_SESSION['checkOutDate']=$checkOutDate;/* 
	$_SESSION['Adult']=$Adult; */


	$places= strtolower($placess);
	$placesUpper= strtoupper($placess); 
}
?>
	<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image:url(images/travel3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center">
					<div class="col-md-12 ftco-animate text-center">
						<div class="text mb-5 pb-3">
							<h1 class="mb-3">Welcome To kubhuka</h1>
							<h2>Hotels &amp; Resorts</h2>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image:url(images/travel.jpg);">
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

	<!-- <section class="ftco-booking">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<form action="#" class="booking-form">
						<div class="row">
							<div class="col-md-2.5 d-flex">
								<div class="form-group p-2 align-self-stretch d-flex align-items-end">
									<div class="wrap">
										<label for="#">Search </label>
										<span class="icon-search2"></span><input type="search" class="form-control "
											placeholder=" &#xf0e0;Search your place">
									</div>
								</div>
							</div>
							<div class="col-md-2 d-flex">
								<div class="form-group p-1 align-self-stretch d-flex align-items-end">
									<div class="wrap">
										<label for="#">Check-in Date</label>
										<input type="text" class="form-control checkin_date"
											placeholder=" Check-in date">
									</div>
								</div>
							</div>
							<div class="col-md-2 d-flex">
								<div class="form-group p-1 align-self-stretch d-flex align-items-end">
									<div class="wrap">
										<label for="#">Check-out Date</label>
										<input type="text" class="form-control checkout_date"
											placeholder="Check-out date">
									</div>
								</div>
							</div>
							<div class="col-md-2 d-flex">
								<div class="form-group p-1 align-self-stretch d-flex align-items-end">
									<div class="wrap">
										<label for="#">No.. of menber</label>
										<input type="text" class="form-control checkout_date"
											placeholder="Check-out date">
									</div>
								</div>
							</div>

							<div class="col-md-2 align-self-center">
								<div class="form-group d-flex align-self-stretch">
									<input type="submit" value="Check Availability"
									class="btn btn-primary py-3 px-4 align-self-stretch">
								</div>
							</div>

						</div>
					</form>
				</div>
			</div>
		</div>
	</section> -->
    <section class="ftco-booking">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<form method = "post" action ="#" class="booking-form">
						<div class="row">
							<div class="col-md-2 d-flex">
								<div class="form-group  ">
									<div class="wrap">
										<label for="#">Search </label>
										<span class="icon-search2"></span><input type="search" name="palcesearch" class="form-control "
											placeholder="Search your place">
									</div>
								</div>
							</div>
							<div class="col-md-2 d-flex">
								<div class="form-group p-1 align-self-stretch d-flex align-items-end">
									<div class="wrap">
										<label for="#">Check-in Date</label>
										<input type="text" class="form-control checkin_date" name="checkInDate"
											placeholder=" Check-in date">
									</div>
								</div>
							</div>
							<div class="col-md-2 d-flex">
								<div class="form-group p-1 align-self-stretch d-flex align-items-end">
									<div class="wrap">
										<label for="#">Check-out Date</label>
										<input type="text" class="form-control checkout_date" name="checkOutDate"
											placeholder="Check-out date">
									</div>
								</div>
							</div>
                            <!-- <div class="col-md-2 d-flex">
								<div class="form-group p-1 align-self-stretch d-flex align-items-end">
									<div class="wrap">
                                    <label for="#">NO.. Adult</label>
                                        <select name="Number_of" id="" class="form-control">
                                            <option value="0 Adult">0 Adult</option>
                                            <option value="1 Adult">1 Adult</option>
                                            <option value="2 Adult">2 Adult</option>
                                            <option value="3 Adult">3 Adult</option>
                                            <option value="4 Adult">4 Adult</option>
                                            <option value="5 Adult">5 Adult</option>
                                            <option value="6 Adult">6 Adult</option>
                                        </select>
									</div>
								</div>
							</div> -->
                            
							<div class="col-md-2 align-self-center">
								<div class="form-group d-flex align-self-stretch">
									<input type="submit" value="Search"
									class="btn btn-primary py-3 px-4 align-self-stretch">
								</div>
							</div>

						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
				<div class="col-lg-3 sidebar">
					<div class="sidebar-wrap bg-light ftco-animate">
						<h3 class="heading mb-4">Advance Search</h3>
						<form action="#">
					<div class="fields">
						<!-- <div class="form-group">
						  <input type="text" id="checkin_date" class="form-control checkin_date" placeholder="Check In Date">
						</div>
						<div class="form-group">
						  <input type="text" id="checkin_date" class="form-control checkout_date" placeholder="Check Out Date">
						</div>
						<div class="form-group">
						  <div class="select-wrap one-third">
						  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
						  <select name="" id="" class="form-control">
							  <option value="">Room Type</option>
							  <option value="">Suite</option>
							<option value="">Family Room</option>
							<option value="">Deluxe Room</option>
							<option value="">Classic Room</option>
							<option value="">Superior Room</option>
							<option value="">Luxury Room</option>
						  </select>
						</div>
						</div>
						<div class="form-group">
						  <div class="select-wrap one-third">
						  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
						  <select name="" id="" class="form-control">
							  <option value="">0 Adult</option>
							  <option value="">1 Adult</option>
							<option value="">2 Adult</option>
							<option value="">3 Adult</option>
							<option value="">4 Adult</option>
							<option value="">5 Adult</option>
							<option value="">6 Adult</option>
						  </select>
						</div>
						</div>
						<div class="form-group">
						  <div class="select-wrap one-third">
						  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
						  <select name="" id="" class="form-control">
							  <option value="">0 Children</option>
							  <option value="">1 Children</option>
							<option value="">2 Children</option>
							<option value="">3 Children</option>
							<option value="">4 Children</option>
							<option value="">5 Children</option>
							<option value="">6 Children</option>
						  </select>
						</div>
						</div> -->
						<div class="form-group">
							<div class="range-slider">
								<span>
								     <input type="number" value="25000" min="0" max="25000"/> -
								     <input type="number" value="50000" min="25000" max="50000"/>
								</span>
									<input value="0" min="0" max="120000" step="500" type="range"/>
									<input value="50000" min="0" max="120000" step="500" type="range"/>
								</svg>
							</div>
						</div>
						<div class="form-group">
						  <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
						</div>
					  </div>
				  </form>
					</div>
					<form method="post" class="star-rating">
					<div class="sidebar-wrap bg-light ftco-animate">
						<h3 class="heading mb-4">Star Rating</h3>
								<div class="form-check">
									  <input type="checkbox" class="form-check-input" id="exampleCheck1">
									  <label class="form-check-label" for="exampleCheck1">
										  <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
									  </label>
								</div>
								<div class="form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">
									 <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
								</label>
								</div>
								<div class="form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">
									<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
							   </label>
								</div>
								<div class="form-check">
								  <input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">
									<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
								</label>
								</div>
								<div class="form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">
									<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
								  </label>
								</div>
				</div>
					

					<div class="sidebar-wrap bg-light ftco-animate">
						<h3 class="heading mb-4">Specilizations</h3>
								<div class="form-check">
									<?php
										$connect1 = pg_connect('host=localhost dbname=kubuka user=postgres password=1234');
										$res1 = pg_query($connect1,"select * from specilizations");
										while($row=pg_fetch_array($res1))
										{
									?>
									<label class="form-check-label" >
									<input type="checkbox" id="spec"  name="spec[]" value="<?php echo $row[0];?>" > <?php echo $row[1];?>&nbsp;&nbsp;&nbsp;
									<hr>
									</label>
									<?php
										}
									?>
								</div>
					</div>
				</form>
		  
		  
		  
			</div>
	        <div class="col-lg-9">



			
				<?php 
					if(isset($placesUpper))// this is place to be search
						{
				?>
			<div class="row no-gutters justify-content-center pb-5">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<h2>
						<span>
							<?php
										echo $placesUpper;
							?>
					</span>
				</h2>
				<br>
				</div>
			<?php
						}
			?>
        				
		    <div class="row"> 
			<?php
			$connect = pg_connect('host=localhost dbname=kubuka user=postgres password=1234');
			if ($_POST) 
			{

				$Count = pg_query($connect,"SELECT count(*) FROM hotelregis where place like '$places' or  locations like '$places%_'");
				$CountPlaces=pg_fetch_array($Count);

				$Countid = pg_query($connect,"SELECT * FROM hotelregis where place='$places'");
					if(pg_num_rows($Countid)>0)
					{			
						for($i=0;$i<$CountPlaces[0];$i++)
							{
								while($CountNameId=pg_fetch_array($Countid))
								{
						?> 
							<div class="col-sm col-md3 col-lg-6 ftco-animate">
								<div class="room">
									<?php
										$hotelPhoto = pg_query($connect,"SELECT * FROM hotelphotouplode where hot_regi_id='$CountNameId[0]'");
                                                
										if(pg_num_rows($hotelPhoto)>0)
										{
											while($result=pg_fetch_array($hotelPhoto)) 
											{
									?>
																 
									<a href="hotelRoom-singel.php?HotelId=<?php echo$CountNameId[0]; ?>"><img src="../A Kubuka main/admin_kubuka-Team/<?php echo $result[1]; ?>" alt="hotel image"  width="100%" class="img d-flex justify-content-center align-items-center">
									<!-- <div class="icon d-flex justify-content-center align-items-center">
											<span class="icon-search2"></span>
										</div> -->
									</a>
									<?php
											}
										}
									?>
									<div class="text p-5 text-center">
										<h3 class="mb-3"><a href="hotelRoom-singel.php?HotelId=<?php echo$CountNameId[0]; ?>"><?php echo $CountNameId[1];  ?></a></h3>
										<?php
											$RoomAdding = pg_query($connect,"SELECT min(minprice) FROM roomadding where hotelid='$CountNameId[0]'" );
											$Rd=pg_fetch_array($RoomAdding);
											?>
										<p><span class="price mr-2"><?php echo $Rd[0];  ?></span> <span class="per">/per night  </span>.    upto</p>
										<ul class="list">
											<li><span>Location:</span> <?php echo $CountNameId[7];  ?></li>
											<li><span>Place:</span> <?php echo $CountNameId[2];  ?></li>
											<?php
											$HotelDetail = pg_query($connect,"SELECT * FROM hoteldetails where hot_regi_id	='$CountNameId[0]'" );
											$Hd=pg_fetch_array($HotelDetail);
											?>
											<li><span>Discr:</span> <?php echo $Hd[3]; ?></li>
											<li><span>Star:</span><?php echo $CountNameId[4]; ?></li>
											<li><span>Bed:</span> <?php echo $Hd[5]; ?></li>
										</ul>
										<hr>
										<p class="pt-1"><a href="hotelRoom-singel.php?HotelId=<?php echo$CountNameId[0]; ?>" class="btn-custom">Book Now <span class="icon-long-arrow-right"></span></a></p>
									</div>
								</div>
							</div>
	<?php
							}
						}
					}
					else
					{
			?>
						<?php
						$Countelse = pg_query($connect,"SELECT count(*) FROM hotelregis ");
						$CountPlaceselse=pg_fetch_array($Countelse);
		
						$Countidelse = pg_query($connect,"SELECT * FROM hotelregis ");
							if(pg_num_rows($Countidelse)>0)
							{			
								for($i=0;$i<$CountPlaceselse[0];$i++)
									{
										while($CountNameIdelse=pg_fetch_array($Countidelse))
										{
						?>
									<div class="col-sm col-md-5 col-lg-4 ftco-animate">
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
											 <a href="hotelRoom-singel.php?HotelId=<?php echo$CountNameIdelse[0]; ?>"><img src="../A Kubuka main/admin_kubuka-Team/<?php echo $result[1]; ?>" alt="hotel image"  width="100%" class="img d-flex justify-content-center align-items-center">
											 <!-- <div class="icon d-flex justify-content-center align-items-center">
													<span class="icon-search2"></span>
												</div> -->
											</a>
											<?php
													}
												}
											?>
											<div class="text p-3 text-center">
												<h3 class="mb-3"><a href="hotelRoom-singel.php?HotelId=<?php echo$CountNameIdelse[0]; ?>"><?php echo $CountNameIdelse[1];  ?></a></h3>
												<?php
													$RoomAdding = pg_query($connect,"SELECT min(minprice) FROM roomadding where hotelid='$CountNameIdelse[0]'" );
													$Rd=pg_fetch_array($RoomAdding);
													?>
												<p><span class="price mr-2"><?php echo $Rd[0];  ?></span> <span class="per">/per night  </span>.    upto</p>
												<ul class="list">
													<li><span>Location:</span> <?php echo $CountNameIdelse[7];  ?></li>
													<li><span>Place:</span> <?php echo $CountNameIdelse[2];  ?></li>
													<?php
													$HotelDetail = pg_query($connect,"SELECT * FROM hoteldetails where hot_regi_id	='$CountNameIdelse[0]'" );
													$Hd=pg_fetch_array($HotelDetail);
													?>
													<li><span>Discr:</span> <?php echo $Hd[3]; ?></li>
													<li><span>Star:</span><?php echo $CountNameIdelse[4]; ?></li>
													<li><span>Bed:</span> <?php echo $Hd[5]; ?></li>
												</ul>
												<hr>
												<p class="pt-1"><a href="hotelRoom-singel.php?HotelId=<?php echo$CountNameIdelse[0]; ?>" class="btn-custom">Book Now <span class="icon-long-arrow-right"></span></a></p>
											</div>
										</div>
									</div>
			<?php
									}
								}
							}
			}
		}
		else
			{
	?>
				<?php

				$count =0;
				$Countidelse = pg_query($connect,"SELECT * FROM hotelregis ");
					if(pg_num_rows($Countidelse)>0)
					{			
						for($i=0;$i<6 ;$i++)
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
												 
									<!-- <a href="hotelRoom-singel.php?HotelId=<?php/*  echo$CountNameIdelse[0]; */ ?>" class="img d-flex justify-content-center align-items-center" style="background-image: url(/../xampp/htdocs/A Kubuka main/admin_kubuka-Team/);" alt="hotel image">
									 -->
									 <a href="hotelRoom-singel.php?HotelId=<?php echo$CountNameIdelse[0]; ?>"><img src="../A Kubuka main/admin_kubuka-Team/<?php echo $result[1]; ?>" alt="hotel image" higth="" width="100%" class="img d-flex justify-content-center align-items-center">									
									<!-- <div class="icon d-flex justify-content-center align-items-center">
											<span class="icon-search2"></span>
										</div> -->
									</a>
									<?php
											}
										}
									?>
									<div class="text p-3 text-center">
										<h3 class="mb-3"><a href="hotelRoom-singel.php?HotelId=<?php echo$CountNameIdelse[0]; ?>"><?php echo $CountNameIdelse[1];  ?></a></h3>
										<?php
											$RoomAdding = pg_query($connect,"SELECT min(minprice) FROM roomadding where hotelid='$CountNameIdelse[0]'" );
											$Rd=pg_fetch_array($RoomAdding);
											?>
										<p><span class="price mr-2"><?php echo $Rd[0];  ?></span> <span class="per">/per night  </span>.    upto</p>
										<ul class="list">
											<li><span>Location:</span> <?php echo $CountNameIdelse[7];  ?></li>
											<li><span>Place:</span> <?php echo $CountNameIdelse[2];  ?></li>
											<?php
											$HotelDetail = pg_query($connect,"SELECT * FROM hoteldetails where hot_regi_id	='$CountNameIdelse[0]'" );
											$Hd=pg_fetch_array($HotelDetail);
											?>
											<li><span>Discr:</span> <?php echo $Hd[3]; ?></li>
											<li><span>Star:</span><?php echo $CountNameIdelse[4]; ?></li>
											<li><span>Bed:</span> <?php echo $Hd[5]; ?></li>
										</ul>
										<hr>
										<p class="pt-1"><a href="hotelRoom-singel.php?HotelId=<?php echo$CountNameIdelse[0]; ?>" class="btn-custom">Book Now <span class="icon-long-arrow-right"></span></a></p>
									</div>
								</div>
							</div>
	<?php	break;
								}
							}
						}
					}
			}
	?>
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