<?php
    $connect = pg_connect("host=localhost dbname=kubuka user=postgres password=1234");
    $aDoor = $_POST['spec'];
   if($_POST)
     {
        
      $res1 = pg_query($connect,"INSERT INTO hotelregis(hotelname,place,pincode,star,districtid,statuse)VALUES('$hotname','$hotPlace','$PinCode','$radios','$distric','$radiose')");
            
            if(isset($_POST['ok']))
            {
               $countryprefer=$_POST['spec'];
               if(empty($specprefer)) 
               {
                  echo("<p>You didn't select any spec.</p>\n");
               } 
               else 
               {
                  $N = count($specprefer);
                  $var1="";
                  foreach($specprefer as $crt)
                  {
                     $var1 .=$crt.",";
                  }
               }

               
            }

      

      header ('refresh:0;url=home.php');
   }
?>


$aDoor = $_POST['formDoor'];
  if(empty($aDoor)) 
  {
    echo("You didn't select any buildings.");
  } 
  else 
  {
    $N = count($aDoor);

    echo("You selected $N door(s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($aDoor[$i] . " ");
    }
  }
