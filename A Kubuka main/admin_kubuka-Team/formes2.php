
<?php
    $connect = pg_connect("host=localhost dbname=kubuka user=postgres password=1234");
   if($_POST)
     {
        $hotelid=$_POST['hotelid'];
        $room_no=$_POST['room_no'];
        $floor_no=$_POST['floor_no'];
        $disp=$_POST['disp'];
        $minprice=$_POST['minprice'];
        $maxprice=$_POST['maxprice'];

        $Room_type=$_POST['Room_type'];
        $categorry=$_POST['categorry'];

    
        $res1 = pg_query($connect,"INSERT INTO roomadding(roomno,floorno,dic,minprice,maxprice,hotelid,room_type,category)VALUES('$room_no','$floor_no','$disp','$minprice','$maxprice','$hotelid','$Room_type','$categorry') returning id");
        //$RoomAdding=$res1[0];
        $resid=pg_query($connect,"select max(id) from roomadding");
        $result=pg_fetch_array($resid);
        $id=$result[0];
        if($res1)
           {
              echo ' one Succesfully inserted ';
           }
        else 
           {
              echo '<script>alert("1 Not inserted")</script>';
           }


     
      //multiple photo uploding 
      $files = array_filter($_FILES['multiplePhoto']['name']);

      $total_count = count($_FILES['multiplePhoto']['name']);

      for( $i=0 ; $i < $total_count ; $i++ ) {

         $tmpFilePath = $_FILES['multiplePhoto']['tmp_name'][$i];
         if ($tmpFilePath != ""){

            $newFilePath = "roomphoto/" . $_FILES['multiplePhoto']['name'][$i];
            $tm=$_FILES['multiplePhoto']['name'][$i];

            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
               $qurys="INSERT INTO roomaddingphoto(photo,roomid)VALUES('$newFilePath','$id')";
               //echo $qurys ;exit;
            $res6= pg_query($connect,$qurys);
      
            if($res6)
               {
                   echo " Multiple image inserted ";
                }
             else 
                {
                   echo '<script>alert(" Multiple image  not inserted ")</script>';
                }

            }
         }
     } 
         header ('refresh:0;url=page_table.php?id='.$hotelid);
    }
?>
