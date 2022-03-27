<?php


session_start();
 
$userid=$_SESSION['userid'];
?>
<?php
$connect = pg_connect('host=localhost dbname=kubuka user=postgres password=1234');
   if($_POST)
     {

		$HotelId=$_GET['HotelId_number'];
		$res = pg_query($connect,"SELECT * FROM roomadding where id='$HotelId'");   
		$row=pg_fetch_array($res);
		$roomidOfHotel=$row[6];
 
        $checkInDate=$_POST['checkInDate'];
        $checkOutDate=$_POST['checkOutDate'];
        $Adult=$_POST['Adult'];

        if(isset($_POST['submit']))
        {
          $res1 = pg_query($connect,"INSERT INTO userbooking(cindate,coutdate,menb,usid,hotelid,roomid)VALUES('$checkInDate','$checkOutDate','$Adult','$userid','$HotelId','$roomidOfHotel')");
           
          $userbook=pg_query($connect,"select max(id) from userbooking");
          $result=pg_fetch_array($userbook);
          $bookuser=$result[0];
  
$_SESSION['userbooking_id']=$bookuser; 

          if($res1)
              {
                  echo ' one Succesfully inserted ';
              }
            else 
              { 
                echo '<script>alert("4 Not inserted")</script>';
                     
               }
        }
        header('refresh:0;url=confome.php');
   }
?>