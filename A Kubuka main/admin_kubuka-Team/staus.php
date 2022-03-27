
<?php

include "connect.php";
if(isset($_GET['status'])&&isset($_GET['ubid']))
{
    
    $s=$_GET['status'];
    $id=$_GET['ubid'];
    $res1 = pg_query($connect,"update userbooking set statuss='$s' where id='$id'");
      if($res1)
      {
         echo '<script>alert(" status updated Active")</script>';
      }
         else 
      {
         echo '<script>alert(" status not updated ")</script>';
      }
      
   
}
if(isset($_GET['status1'])&&isset($_GET['ubid1']))
{
    $s=$_GET['status1'];
    $id=$_GET['ubid1'];
    
    echo $s;
    $res2 = pg_query($connect,"update userbooking set statuss='$s' where id='$id'");
      if($res2)
      {
        echo '<script>alert(" status updated Deactive")</script>';
      }
         else 
      {
         echo '<script>alert(" status not updated ")</script>';
      }
      
   
}

      header ("refresh:2;url=bookingnotification.php");
?>