
<?php
include 'header.php'; 

$connect = pg_connect('host=localhost dbname=kubuka user=postgres password=1234');
$HotelId=$_GET['HotelId_number'];
    $res = pg_query($connect,"SELECT * FROM roomadding where id='$HotelId'");   

    $row=pg_fetch_array($res);

    $userid=$_SESSION['userid']
?>

<?php 
			if(isset($_SESSION['userid']))// this is place to be search
				{
?>

    <section class="ftco-section">
                <form  action="bookingphp.php?HotelId_number=<?php echo$HotelId; ?>" method="post" >
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
          	<div class="row">
            <div class="container">
            <?php
              if(isset($_SESSION['checkOutDate'])&&($_SESSION['checkInDate']))
              {
                
            ?>
      <label for="uname"><b>Check In Date</b></label>
      <input type="text" value="<?php echo$_SESSION['checkInDate']; ?>" readonly class="form-control border-info placeicon" name="checkInDate"  >

      <label for="psw"><b>ChickOut Date</b></label>
      <input type="text"  class="form-control border-info placeicon" name="checkOutDate" value="<?php echo$_SESSION['checkOutDate']; ?>" readonly>
      <label for="#">NO.. Adult</label>
          <select name="Adult" id="" class="form-control">
              <option value="1 Adult">1 Adult</option>
              <option value="2 Adult">2 Adult</option>
              <option value="3 Adult">3 Adult</option>
              <option value="4 Adult">4 Adult</option>
              <option value="5 Adult">5 Adult</option>
              <option value="6 Adult">6 Adult</option>
          </select>
          <?php
              }
            else{
      ?>
      <label for="uname"><b>Check In Date</b></label>
      <input type="date"  class="form-control border-info placeicon"required name="checkInDate"  >

      <label for="psw"><b>ChickOut Date</b></label>
      <input type="date"  class="form-control border-info placeicon"required name="checkOutDate" >
      <label for="#">NO.. Adult</label>
          <select name="Adult" id="" class="form-control">
              <option value="1 Adult">1 Adult</option>
              <option value="2 Adult">2 Adult</option>
              <option value="3 Adult">3 Adult</option>
              <option value="4 Adult">4 Adult</option>
              <option value="5 Adult">5 Adult</option>
              <option value="6 Adult">6 Adult</option>
          </select>
      <?php
            }
      ?>
    </div>
          		<div class="col-md-12 ftco-animate">
                <br><hr>
                <?php
                $user = pg_query($connect,"SELECT * FROM userlogin where id='$userid'");   
                $userdata=pg_fetch_array($user);
                ?>
          			<h4 class="mb-4"> User Deatail </h4>

          			<div class="single-slider owl-carousel">
                  <div class="col-9 px-0"> 
                    <input type="text" name="username" readonly value=" <?php echo $userdata[1]; ?>" class="form-control border-info placeicon"> </div>
                  </div>
                  <br>
                  <div class="col-9 px-0">
                     <input type="text" name="useremail"readonly value=" <?php echo $userdata[2]; ?>" class="form-control border-info placeicon"> </div>
                  </div>

          		<div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
    						<div class="d-md-flex mt-5 mb-5">
                  <div class="col-9 px-0"> 
                <?php
                  $HotelName = pg_query($connect,"SELECT * FROM hotelregis where id='$row[6]'");   
                  $Hotel=pg_fetch_array($HotelName);
                ?>

                <?php
                  $district = pg_query($connect,"SELECT * FROM cities where city_id	='$Hotel[6]'");   
                  $districtname=pg_fetch_array($district);
                ?>
                <u> <h4 class="mb-4"> Hotel details </h4> </u>
                  <h6 class="mb-4"> <?php $hotelid= $Hotel[0]; echo $Hotel[1]; ?> </h6>
                  <h6 class="mb-4"> <?php echo $Hotel[2]; ?> </h6>
                  <h6 class="mb-4"> <?php echo $districtname[2]; ?> </h6>
                  <h6 class="mb-4"> <?php echo $Hotel[3]; ?> </h6>
                  <h6 class="mb-4"> <?php echo $Hotel[4]; ?> </h6>
                  <h6 class="mb-4"> <?php echo $Hotel[7]; ?> </h6>
                  </div>
    						</div>
    					</div> 
                  <div class="form-group ">
                    <input type="submit" value="Submit" name="submit" class="btn btn-primary py-3 px-5">
                  </div>
                </form>

          	</div>
          </div> <!-- .col-md-8 -->






          
          
          <div class="col-lg-4 sidebar ftco-animate">
          <div class="col-lg-14">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
          			<div class="single-slider owl-carousel">
                          <?php
                              $hotelPhoto = pg_query($connect,"SELECT * FROM roomaddingphoto  where roomid='$row[0]'");
                                $resultphoto=pg_fetch_array($hotelPhoto)
                        ?>
          				<div class="item"> 
          					<div class="img" > 
                    <img src="../A Kubuka main/admin_kubuka-Team/<?php  echo $resultphoto[1];  ?>" alt="hotel image"  class="room-img">
                  </div>
          				</div>

          			</div>
                
          			<h4 class="mb-4"><?php  echo $row[8];  ?></h4>
          		</div>
                  <div class="col-md-7 text-center heading-section ftco-animate">
                      <?php
                        $RoomAdding = pg_query($connect,"SELECT min(maxprice) FROM roomadding where id='$row[0]'" );
                        $Rd=pg_fetch_array($RoomAdding);
                        ?>
                      <h4 class="mb-4"><span class="price mr-2"><?php echo $Rd[0];  ?> ₹</span> <span class="per">/per night  </span>.    upto</h4>
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
      else
      {
        
        header('location:login.php');
      }
    ?>



    <?php

        include 'footer.php'; 
    ?>
