<?php
include 'header.php'; 
$connect = pg_connect('host=localhost dbname=kubuka user=postgres password=1234');

if(isset($_GET['HotelId']))
{
    $HotelId=$_GET['HotelId'];
    $res = pg_query($connect,"SELECT * FROM hotelregis where id='$HotelId'");   

    $row=pg_fetch_array($res);

    $hotelIdname=$row[0];

?>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
          			<h2 class="mb-4"><?php echo $row[1] ?></h2>
          			<div class="single-slider owl-carousel">
                <?php
                $countlmultiple = pg_query($connect,"SELECT count(*) FROM hotelimages where hotel_id='$hotelIdname'" );
                $CountofMutliple=pg_fetch_array($countlmultiple);

                $gethotelmultiple = pg_query($connect,"SELECT * FROM hotelimages where hotel_id='$hotelIdname'" );
                    if(pg_num_rows($gethotelmultiple)>0)
                    {
                ?>
                <?php
                      for($i=0;$i<$CountofMutliple[0];$i++)
                          {
                            while($hotelimage=pg_fetch_array($gethotelmultiple))
                            {
                ?>
          				<div class="item"><!-- 
          					<div class="room-img" style="background-image: url(images/room-1.jpg);"></div> -->
                    <img src="../A Kubuka main/admin_kubuka-Team/<?php echo $hotelimage[1]; ?>" alt="hotel image"  width="50%" class="room-img">
          				</div>
                  <?php 
                        }
                     }
                    }
                  ?>
          			</div>
          			</div>
          		</div>
          		<div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
              <?php
											$HotelDetail = pg_query($connect,"SELECT * FROM hoteldetails where hot_regi_id	='$hotelIdname'" );
											$Hd=pg_fetch_array($HotelDetail);
							?>
    						<p><?php echo $Hd[3]; ?></p>
    						<div class="d-md-flex mt-5 mb-5">
    							<ul class="list">
	    							<li><span>Max:</span> 3 Persons</li>
	    							<li><span>Size:</span> 45 m2</li>
	    						</ul>
	    						<ul class="list ml-md-5">
	    							<li><span>View:</span> Sea View</li>
	    							<li><span>Bed:</span><?php echo $Hd[5]; ?></li>
	    						</ul>
    						</div></div>
                
            <div class="sidebar-box ftco-animate">
              <h3>Specifications Of Hotels's</h3>
              <div class="tagcloud">
                <?php
                $countSpec = pg_query($connect,"SELECT count(*) FROM hotelspecialization where hotelid='$hotelIdname'" );
                $countOfSpec=pg_fetch_array($countSpec);

                $hotelSpec = pg_query($connect,"SELECT * FROM hotelspecialization where hotelid='$hotelIdname'" );
                if(pg_num_rows($hotelSpec)>0)
                {
                    for($i=0;$i<=$countOfSpec[0];$i++)
                    {
                      while($hotelSECil=pg_fetch_array($hotelSpec))
                      {
                        $heclicationId=$hotelSECil[2];
                        $specific = pg_query($connect,"SELECT * FROM specilizations where specid='$heclicationId'" );
                         $di=pg_fetch_array($specific);
                ?>
                <a class="tag-cloud-link"><?php echo $di[1]; ?></a>
                <?php
                      }
                    }
                 }
                ?>
              </div>
            </div>

          		<div class="col-md-12 room-single ftco-animate mb-5 mt-4">
          			<h3 class="mb-4">Take A Tour</h3>
          			<div class="block-16">
		              <figure>
		                <img src="images/room-4.jpg" alt="Image placeholder" class="img-fluid">
		                <a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span class="icon-play"></span></a>
		              </figure>
		            </div>
          		</div>
<!-- 
          		<div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
          			<h4 class="mb-4">Your &nbsp;  Review &amp; Ratings</h4>
          			<div class="row">
          				<div class="col-md-6">
          					<form method="post" class="star-rating">
										  <div class="form-check">
												<input type="radio" name="R1" class="form-check-input"  id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 Ratings</span></p>
												</label>
										  </div>
										  <div class="form-check">
									      <input type="radio" name="R1" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 75   Ratings</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      <input type="radio" name="R1" class="form-check-input"  id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 50 Ratings</span></p>
									     </label>
										  </div>
										  <div class="form-check">
										    <input type="radio" name="R1" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 25 Ratings</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      <input type="radio" name="R1" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
										    </label>
										  </div>
										</form>
          				</div>
          			</div>
          		</div> -->

          		<div class="col-md-12 room-single ftco-animate mb-5 mt-5">
          			<h4 class="mb-4">Available Room</h4>
          			<div class="row">
                  <?php
                  $count = 0;
                  $Counts = pg_query($connect,"SELECT count(*) FROM roomadding where hotelid	='$hotelIdname' ");
                  $CountPlacesroom=pg_fetch_array($Counts);
          
                  $Countidroom = pg_query($connect,"SELECT * FROM roomadding where hotelid	='$hotelIdname'");
                    if(pg_num_rows($Countidroom)>0)
                    {			
                      for($i=0;$i<$CountPlacesroom[0];$i++)
                        {
                          while($CountNameIdroom=pg_fetch_array($Countidroom))
                          {
                  ?>
          				<div class="col-sm col-md3 col-lg-6 ftco-animate">
				    				<div class="room">
                          <?php
                              $hotelPhoto = pg_query($connect,"SELECT * FROM roomaddingphoto  where roomid='$CountNameIdroom[0]'");
                               
                                while($resultphoto=pg_fetch_array($hotelPhoto)) 
                                {
                                  $count++;
                                      for($i=$count;$i<=1;$i++)
                                      {
                        ?><div class=" align-items-center">
				    					 <a href="RoomBooking.php?HotelId=<?php echo$CountNameIdroom[0]; ?>"><img src="../A Kubuka main/admin_kubuka-Team/<?php  echo $resultphoto[1];  ?>" alt="hotel image"  width="100%" class="img d-flex justify-content-center align-items-center">
									     </div>
				    					</a>
                      <?php
                                break;
                                      }
                                }
                              
                      ?><div class="text p-3 text-center">
				    						<h3 class="mb-3"><a href="RoomBooking.php?HotelId=<?php echo$CountNameIdroom[0]; ?>"><?php  echo $CountNameIdroom[8];  ?></a></h3>
                        <ul>
											  <li><span>Spec :</span><?php echo $CountNameIdroom[3]; ?></li>
                        </ul>
				    						<p><span class="price mr-2"><?php echo $CountNameIdroom[4]; ?></span> <span class="per">per night</span></p>
				    						<hr>
				    						<p class="pt-1"><a href="RoomBooking.php?HotelId=<?php echo$CountNameIdroom[0]; ?>" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a></p>
				    					</div>
				    				</div>
				    			</div>
				    			<?php
                          }
                        }
                      }
                  ?>
				    			</div>
          			</div>
          		</div>

          	</div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->


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
  <?php } ?>
    <?php
include 'footer.php'; 
?>