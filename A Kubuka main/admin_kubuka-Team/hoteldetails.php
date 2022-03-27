
<?php
    $connect = pg_connect("host=localhost dbname=kubuka user=postgres password=1234");
   if($_POST)
     {
        $hotname=$_POST['Hotel_name'];
        $hotPlaces=$_POST['Place'];
		  $hotPlace= strtolower($hotPlaces);
        $location=$_POST['Location'];
        $PinCode=$_POST['PinCode'];
        $radios=$_POST['radios'];
        $distric=$_POST['city'];
        $radiose=$_POST['radiose'];
        
        $phone1=$_POST['phone1'];
        $phone2=$_POST['phone2'];
        $disp=$_POST['disp'];
        $license=$_POST['licence'];
        $reginumb=$_POST['reginumb'];

        $hotelusername=$_POST['hotel-username'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        //conection of hotel registercation in database
        
      $res1 = pg_query($connect,"INSERT INTO hotelregis(hotelname,place,pincode,star,districtid,statuse,locations)VALUES('$hotname','$hotPlace','$PinCode','$radios','$distric','$radiose','$location') returning id");
      //$Hotel_Ref_id=$res1[0]
      
      $resid=pg_query($connect,"select max(id) from hotelregis");
      $result=pg_fetch_array($resid);
      $Hotel_Ref_id=$result[0];
      if($res1)
           {
              echo ' one Succesfully inserted ';
           }
        else 
           {
              echo '<script>alert("1 Not inserted")</script>';
           }
         
      //  hoteldetails
      echo $distric;
      $res2 = pg_query($connect,"INSERT INTO hoteldetails(pho1,pho2,discreption,liceid,regroom,hot_regi_id)VALUES('$phone1','$phone2','$disp','$license','$reginumb','$Hotel_Ref_id')");
      if($res2)
      {
         echo "2 Succesfully inserted";
      }
         else 
      {
         echo '<script>alert(" 2 Not inserted")</script>';
      }
      //hotelphotouplode
      
      if(isset($_POST['submit']))
      {
         $dir="uplode/";
         $file=$dir.basename($_FILES['hotelicons']['name']);
         if(move_uploaded_file($_FILES['hotelicons']['tmp_name'],$file))
         {
            $res3 = pg_query($connect,"INSERT INTO hotelphotouplode(logo,hot_regi_id)VALUES('$file','$Hotel_Ref_id')");
         
               if($res3)
                  {
                      echo " 3 Succesfully inserted";
                   }
                else 
                   {
                      echo '<script>alert(" 3 Not inserted")</script>';
                   }
         }
      }
      //multiple photo uploding 
         $files = array_filter($_FILES['multiplePhoto']['name']);

         $total_count = count($_FILES['multiplePhoto']['name']);

         for( $i=0 ; $i < $total_count ; $i++ ) {

            $tmpFilePath = $_FILES['multiplePhoto']['tmp_name'][$i];
            if ($tmpFilePath != ""){

               $newFilePath = "multpotp/" . $_FILES['multiplePhoto']['name'][$i];
               $tm=$_FILES['multiplePhoto']['name'][$i];

               if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                  $qurys="INSERT INTO hotelimages(image_name,hotel_id)VALUES('$newFilePath','$Hotel_Ref_id')";
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
        }  /* 
               if(isset($_POST['submit'])){
                  $countfiles = count($_FILES['multiplePhoto']['name']);
                  for($i=0;$i<$countfiles;$i++){
                     $filename = $_FILES['multiplePhoto']['name'][$i];
                     $sql = "INSERT INTO multipleHotelPhoto(photo) VALUES ('$filename')";
                     $db->query($sql);
                     move_uploaded_file($_FILES['multiplePhoto']['tmp_name'][$i],'multpotp/'.$filename);
                  }
               } */

      //hoteluserlogin
      $res4 = pg_query($connect,"INSERT INTO hoteluserlogin(hotusername,email,passwords,hot_regi_id)VALUES('$hotelusername','$email','$password','$Hotel_Ref_id')");
        if($res4)
           {
              echo ' 4 Succesfully inserted';
           }
        else 
           {
              echo '<script>alert("4 Not inserted")</script>';
           }

      header ("refresh:5;url=spec_form.php");
   }
?>
