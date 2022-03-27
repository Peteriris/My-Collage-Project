<?php
include 'header.php'; 
$connect = pg_connect('host=localhost dbname=kubuka user=postgres password=1234');

	$userid=$_SESSION['userid'];/*
	$userbookingid=$_SESSION['userbooking_id'] */

?>
<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image:url(images/hotel.jpg);">
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
	</section>
<Center>
<?php 
			if(isset($_SESSION['userid']))// this is place to be search
				{
/* 
					$userlog = pg_query($connect,"SELECT * FROM userlogin where id='$userid'");
					$userlogin=pg_fetch_array($userlog);
 */
?>
			<?php
                $user = pg_query($connect,"SELECT * FROM userbooking where usid	='$userid'");
				if(pg_num_rows($user)>0)
				{
				$bookuser=pg_fetch_array($user);
						if( $bookuser[7]==="active")
								{
            ?>
									<section class="ftco-section bg-light">
										<div class="container ">
											<div class="col-lg-10  ">
													<div class="row ">
														<div class="col-sm col-md-6 col-lg-8 ftco-animate blue">
															<div class="room">
																<div class="text p-3 text-center ">
																	<h1 class="mb-3 blues"><i> booking Successfully</i> &nbsp; Reserved form <B> <?php echo $bookuser[1]; ?> </B> to <B> <?php echo  $bookuser[2]; ?> </B> </h1>
																	<?php
																	$rooid=$bookuser[5];
																		$room = pg_query($connect,"SELECT * FROM roomadding where id='$rooid'");
																		$roombookuser=pg_fetch_array($room);
																	?>
																	<h4 class="mb-3 blues"> Room details </h4>
																		<div class="d-md-flex mt-4 mb-5 blues">
																			<ul class="list">
																				<li><span>Room number :</span> <?php  echo $roombookuser[1];  ?></li>
																				<li><span>Floor number:</span> <?php  echo $roombookuser[2];  ?> </li>
																				<li><span>Room:</span>  <?php  echo $roombookuser[7];  ?> </li>
																			</ul>
																			<ul class="list ml-md-5">
																				<li><span>View:</span>  <?php  echo $roombookuser[3];  ?> </li>
																				<li><span>price :</span>  <?php  echo $roombookuser[4];  ?> </li>
																			</ul>
																		</div>
																	<?php
																	$hotelid=$roombookuser[6];
																		$hotel = pg_query($connect,"SELECT * FROM hoteldetails where hot_regi_id='$hotelid'");
																		$hoteldetail=pg_fetch_array($hotel);
																	?>
																	<h2 class="mb-3 blues"> Hotel detail </h2>
																		<div class="d-md-flex mt-5 mb-5">
																			<ul class="list">
																				<li><span>phono number 1 :</span> <?php  echo $hoteldetail[1];  ?></li>
																				<li><span>phono number 2 :</span> <?php  echo $hoteldetail[2];  ?> </li>
																				<li><span>discription :</span>  <?php  echo $hoteldetail[3];  ?> </li>
																			</ul>
																			<ul class="list ml-md-5">
																				<li><span>Licance id:</span>  <?php  echo $hoteldetail[4];  ?> </li>
																			</ul>
																		</div>
																</div>
															</div>
														</div>
													</div>
												</div> 
											</div>
										</div>
										
									</section>
									<?php/* 	
											$Subject="kubuka booking website "
											$retval = mail ($to,$subject,$message,$header);
         
											if( $retval == true ) {
											   echo "Message sent successfully...";
											}else {
											   echo "Message could not be sent...";
											}
									 */?>
	<?php
							}
					elseif( $bookuser[7]=="deactive" )
						{
	?>
							<section class="ftco-section bg-light">
								<div class="container">
									<div class="col-lg-10">
											<div class="row">
												<div class="col-sm col-md-6 col-lg-8 ftco-animate red">
													<div class="room">
														<div class="text p-3 text-center">
															<h1 class="mb-3 reds"><i>  booking cancal </i> &nbsp; Reserved form <B> <?php echo $bookuser[1]; ?> </B> to <B> <?php echo  $bookuser[2]; ?> </B> </h1>
														</div>
													</div>
												</div>
											</div>
										</div> 
									</div>
								</div>
							</section>
	<?php

						}
					else
						{
?>
							<section class="ftco-section bg-light">
								<div class="container ">
									<div class="col-lg-10">
											<div class="row">
												<div class="col-sm col-md-6 col-lg-8 ftco-animate orange">
													<div class="room">
														<div class="text p-3 text-center">
															<h1 class="mb-3 oranges"><i> booking Registered</i> &nbsp; Reserved form <B> <?php echo $bookuser[1]; ?> </B> to <B> <?php echo  $bookuser[2]; ?> </B> </h1>
														</div>
													</div>
												</div>
											</div>
										</div> 
									</div>
								</div>
							</section>
<?php
					}
				}
				else{
	?>
	<section class="ftco-section bg-light">
								<div class="container ">
									<div class="col-lg-10">
											<div class="row">
												<div class="col-sm col-md-6 col-lg-8 ftco-animate ">
													<div class="room">
														<div class="text p-3 text-center">
															<h1 class="mb-3 "> sorry !!! 🥺🥺</h1>
															<p><a href="index.php"> Home </a></p>
														</div>
													</div>
												</div>
											</div>
										</div> 
									</div>
								</div>
							</section>
			<?php
				}
				?>

<?php
        }
      else
      {
        
        header('location:login.php');
      }
    ?>
</Center>


    

<?php

include 'footer.php'; 
?>