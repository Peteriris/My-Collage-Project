
<?php
include 'header.php'; 
$connect = pg_connect('host=localhost dbname=kubuka user=postgres password=1234');

if(isset($_GET['HotelId']))
{
    $HotelId=$_GET['HotelId'];
    $res = pg_query($connect,"SELECT * FROM roomadding where id='$HotelId'");   

    $row=pg_fetch_array($res);

?>

    <section class="ftco-section">
                <form  action="RoomBooking-hotel.php?HotelId_number=<?php echo$HotelId; ?>" method="post" >
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
          			<h2 class="mb-4"><?php  echo $row[8];  ?></h2>
          			<div class="single-slider owl-carousel">
                          <?php
                              $hotelPhoto = pg_query($connect,"SELECT * FROM roomaddingphoto  where roomid='$row[0]'");
                              while($resultphoto=pg_fetch_array($hotelPhoto)) 
                              {
                        ?>
          				<div class="item"> 
          					<div class="room-img" style=""> 
                    <img src="../A Kubuka main/admin_kubuka-Team/<?php  echo $resultphoto[1];  ?>" alt="hotel image"  class="room-img">
                  </div>
          				</div>
<?php
                              }
?>
          			</div>
          		</div>
                  <div class="col-md-7 text-center heading-section ftco-animate">
                      <?php
                        $RoomAdding = pg_query($connect,"SELECT min(maxprice) FROM roomadding where id='$row[0]'" );
                        $Rd=pg_fetch_array($RoomAdding);
                        ?>
                      <h2 class="mb-4"><span class="price mr-2"><?php echo $Rd[0];  ?> ₹</span> <span class="per">/per night  </span>.    upto</h2>
                  </div>
          		<div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
    						<div class="d-md-flex mt-5 mb-5">
    							<ul class="list">
	    							<li><span>Max:</span> 3 Persons</li>
	    							<li><span>Room:</span>  <?php  echo $row[7];  ?> </li>
	    							<li><span>Size:</span> 45 m2</li>
	    						</ul>
	    						<ul class="list ml-md-5">
	    							<li><span>View:</span>  <?php  echo $row[3];  ?> </li>
	    							<li><span>Room no:</span>  <?php  echo $row[1];  ?> </li>
	    							<li><span>Bed:</span> 1</li>
	    						</ul>
    						</div>
                  
    						</div> 
                  <div class="form-group ">
                    <input type="submit" value="Booking now" class="btn btn-primary py-3 px-5">
                  </div>
                </form>

          	</div>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            
            
            <div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
          			<h4 class="mb-4">User Review &amp; Ratings</h4>
          			<div class="row">
          				<div class="col-md-6">
          					<form method="post" class="star-rating">
										  <div class="form-check">
												
												<label class="form-check-label" for="exampleCheck1">
													<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 Ratings</span></p>
												</label>
										  </div>
										  <div class="form-check">
									      
									      <label class="form-check-label" for="exampleCheck1">
									    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 30 Ratings</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i>  &nbsp;5 Ratings</span></p>
									     </label>
										  </div>
										  <div class="form-check">
										    
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i>  &nbsp;0 Ratings</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> &nbsp; 0 Ratings</span></p>
										    </label>
										  </div>
										</form>
          				</div>
          			</div>
          		</div>

            

            <div class="sidebar-box ftco-animate">
              <h3>Specifications Of Hotels's</h3>
              <div class="tagcloud">
                <?php
                $countSpec = pg_query($connect,"SELECT count(*) FROM hotelspecialization where hotelid='$row[6]'" );
                $countOfSpec=pg_fetch_array($countSpec);

                $hotelSpec = pg_query($connect,"SELECT * FROM hotelspecialization where hotelid='$row[6]'" );
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
          </div>
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
      }
      include 'footer.php'; 
    ?>