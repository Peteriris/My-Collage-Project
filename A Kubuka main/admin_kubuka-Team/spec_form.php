<?php

    include "connect.php";
        $resid=pg_query($connect,"select max(id) from hotelregis");
        $result=pg_fetch_array($resid);
        $res=$result[0];
?>

<?php
    include "connect.php";
       if(isset($_POST['submit']))
            {
               $countryprefer=$_POST['spec'];
               if(empty($countryprefer)) 
               {
                  echo("<p>You didn't select any spec.</p>\n");
               } 
               else 
               {
                  $N = count($countryprefer);
                  $var1="";
                  foreach($countryprefer as $crt)
                  {
                     $var1 .=$crt.",";
					 $res1 = pg_query($connect,"INSERT INTO hotelspecialization(hotelid,specid)VALUES('$res','$crt')");
                  }
               }
			
      
               //print_r($var1);exit;
               header ("location:home.php");
            }

      

     // 

?>
<?php
    include "heder.php";
  
    
?>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                <a class="navbar-brand" href="./"><img src="./images/Logo1.jpeg" class="image-name-bar" alt="Logo" width="40" height="40"></a>
                    <a class="navbar-brand hidden" href="./"><img src="./images/Logo4.jpeg" alt="Logo" ></a>
 
                </div>
            </div>
            
            <?php
                include "headenoti.php";
            ?>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Registaration</h1>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
            <form action="#" method="post" class="form-horizontal">
               

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Hotel spec</strong> Form
                        </div>
                        <div class="card-body">
                            <div class="form-check">
							<?php
								$res1 = pg_query($connect,"select * from specilizations");
								while($row=pg_fetch_array($res1))
								{
							?>
                                <div class="checkbox">
                                     <label for="checkbox1" class="form-check-label ">
                                         <input type="checkbox" id="spec" name="spec[]" value="<?php echo $row[0];?>" class="form-check-input"><?php echo $row[1];?>
                                    </label>
                                </div>
								
								 <?php
								}
								?>
                            </div>
                        </div>
                    </div>
                </div><!-- check book -->
                   
                <center>
                                 <div class="form-group">
                                       <div class="input-group">
                                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <div class="form-actions form-group"><button type="reset" class="btn btn-primary btn-sm">Reset</button></div>
                                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <div class="form-actions form-group">
												<input type="submit" class="btn btn-success btn-sm" name="submit" value="Submit" />
											 </div>
                                       </div>
                                 </div>
                        </center>
            </form>

            </div><!-- .animated -->


        </div><!-- .content -->

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>
