<?php
include 'heder.php';
include 'connect.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $dic = $id;
    $res8 = pg_query($connect, "SELECT * FROM hotelregis where id='$dic'");
    $di = pg_fetch_array($res8);
}
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

      <div class="content">
        
        <div class="animated fadeIn">
                    
            <form action="formes2.php" method="post" enctype="multipart/form-data" >
                
             <center>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header"><br><strong>Room </strong><small> Details</small></div>
                            <div class="card-body card-block">
                                <div class="row form-group">
                                    <div class="col col-md-12"><label for="textarea-input" class=" form-control-label"><b><h3><?php echo $di[1]; ?></h3></b></label></div>
                                    <div class="col-10 col-md-5">
                                        <input type="hidden" id="phone1" name="hotelid" placeholder="Enter Room number" value="<?php echo $id; ?>" class="form-control">
                                    </div>
                                </div> 
                                    <div class="card-body card-block">
                                        <div class="row form-group">
                                            <label for="company" class=" form-control-label">Room number :</label>
                                            <div class="col-10 col-md-5">
                                                <input type="text" id="phone1" required name="room_no" placeholder="Enter Room number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label for="company" class=" form-control-label">floor no : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                            <div class="col-10 col-md-5">
                                                <input type="text" id="phone1" required name="floor_no" placeholder="Enter floor number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                                <div class="col col-md-2"><label  class=" form-control-label">description  </label></div>
                                                <div class="col-12 col-md-7"><textarea name="disp" id="disp" rows="4" required placeholder="About room..." class="form-control"></textarea></div>
                                        </div>

                                        <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label"> Room photo's:</label></div>
                                        <div class="col-12 col-md-9"><input type="file" multiple="multiple" id="multiplePhoto[]" name="multiplePhoto[]" class="form-control-file"></div>

                                        <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label"> Room video:</label></div>
                                        <div class="col-12 col-md-9"><input type="file" multiple="multiple" id="multiplePhoto[]" name="imageo[]" class="form-control-file"></div>
                                    
                                    </div>
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Min price</label></div>
                                        <div class="col-7 col-md-5">
                                            <select class=" form-control" id="minprice" name="minprice">
                                                <option  value="">Select Min price</option>
                                                <?php
                                                $connect = pg_connect(
                                                    'host=localhost dbname=kubuka user=postgres password=1234'
                                                );
                                                if (isset($_POST)) {
                                                    $res = pg_query(
                                                        $connect,
                                                        'SELECT * FROM hotelregispricelist'
                                                    );

                                                    if (pg_num_rows($res) > 0) {
                                                        //$result = pg_fetch_array($res);
                                                        while (
                                                            $result = pg_fetch_array(
                                                                $res
                                                            )
                                                        ) {
                                                            echo '<option value="' .
                                                                $result[1] .
                                                                '">' .
                                                                $result[1] .
                                                                '</option>';
                                                        }
                                                        echo '<option  value="above">Above</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>                             
                                        
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Max price</label></div>
                                             <div class="col-7 col-md-5">
                                                 <select class=" form-control" id="maxprice" name="maxprice" >
                                                            <option  value="">Select Max price</option>
                                                            <?php
                                                            $connect = pg_connect(
                                                                'host=localhost dbname=kubuka user=postgres password=1234'
                                                            );
                                                            if (isset($_POST)) {
                                                                $res = pg_query(
                                                                    $connect,
                                                                    'SELECT * FROM hotelregispricelist'
                                                                );

                                                                if (
                                                                    pg_num_rows(
                                                                        $res
                                                                    ) > 0
                                                                ) {
                                                                    //$result = pg_fetch_array($res);
                                                                    while (
                                                                        $result = pg_fetch_array(
                                                                            $res
                                                                        )
                                                                    ) {
                                                                        echo '<option value="' .
                                                                            $result[1] .
                                                                            '">' .
                                                                            $result[1] .
                                                                            '</option>';
                                                                    }
                                                                    echo '<option  value="above">Above</option>';
                                                                }
                                                            }
                                                            ?>
                                                 </select>
                                             </div>  

                                             <div class="container mt-3">
                                                 <p class="bg-secondary text-white"><hr></p>
                                            </div> 
                                        <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Room Type:</label></div>
                                        <div class="col col-md-3">
                                            <div class="form-check">
                                                <div class="radio">
                                                    <label for="radio1" class="form-check-label ">
                                                        <input type="radio" id="radio1" name="Room_type" value="A/C" class="form-check-input">A/C
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio2" class="form-check-label ">
                                                        <input type="radio" id="radio2" name="Room_type" value="Non A/c" class="form-check-input">Non A/c
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                    </div>

                                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Room Category</label></div>
                                             <div class="col-7 col-md-5">
                                                 <select class=" form-control" id="categorry" name="categorry" >
                                                    <option value="Suite">Suite</option>
                                                    <option selected value="Family Room">Family Room</option>
                                                    <option  value="Deluxe Room">Deluxe Room</option>
                                                    <option value="Classic Room">Classic Room</option>
                                                    <option value="Luxury Room">Luxury Room</option>
                                                    <option value="Superior Room">Superior Room</option>
                                                 </select>
                                             </div>



                                        </div>
                                    </div><!--card-body card-block -->
                            </div>
                        </div>
                 </div>
             </center>
                   
                                 <div class="form-group">
                                       <div class="input-group">
                                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <div class="form-actions form-group"><button type="reset" class="btn btn-primary btn-sm">Reset</button></div>
                                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Submit</button></div>
                                       </div>
                                 </div> 
            </form>

        </div><!-- .animated -->
     </div><!-- .content -->

    </div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script><!-- 
<script type="text/JavaScript">
    function priceFeaching()
    { 
	    var num=(document.getElementById('minprice').value);
        if(num>=)
    }
</script> -->
</body>
</html>
















