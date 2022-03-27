<?php
    include "heder.php";
    include "connect.php";
    $result = pg_query($connect,"SELECT * FROM countries WHERE status = '1'"); 
    
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
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li>Registaration</li>
                                    <li><a href="#">Hotel details</a></li>
                                    <li><a href="#">Room specifications</a></li>
                                    <li><a href="#">Hotel specifications</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
            <form action="hoteldetails.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                    <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="Hotel name" class=" form-control-label">Hotel name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" required id="Hotel name" name="Hotel_name" placeholder="Hotel name" class="form-control"><small class="form-text text-muted">Enter the name of Hotel</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="Place" class=" form-control-label">Place</label></div>
                                        <div class="col-12 col-md-9"><input type="text" required  id="Place" name="Place" placeholder="Place" class="form-control"><small class="form-text text-muted">Enter the Place</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="Location" class=" form-control-label">Location</label></div>
                                        <div class="col-12 col-md-9"><input type="text" required  id="Location" name="Location" placeholder="Location" class="form-control"><small class="form-text text-muted">Enter the Place</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="PinCode" class=" form-control-label">PinCode</label></div>
                                        <div class="col-12 col-md-9"><input type="number" required  id="PinCode" name="PinCode" placeholder="PinCode" class="form-control"><small class="form-text text-muted">Enter the PinCode</small></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Country</label></div>
                                        <div class="col-12 col-md-9">
                                        <select class="form-control-lg form-control" id="country" name="country">
                                            <option  value="">Select Country</option>
                                                <?php 
                                                if(pg_num_rows($result) > 0)
                                                { 
                                                    while($row = pg_fetch_assoc($result)){  
                                                        echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>'; 
                                                    } 
                                                }
                                                else
                                                { 
                                                    echo '<option value="">Country not available</option>'; 
                                                } 
                                                ?>
                                        </select>
                                        </div>
                                        </div>       




                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="selectLg" class=" form-control-label">State</label></div>
                                        <div class="col-12 col-md-9">
                                            <!-- <select name="state" id="selectLg" class="form-control-lg form-control">
                                                <option value="0">Please select</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="karnataka">karnataka</option>
                                                <option value="Andhra pradesh">Andhra pradesh</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Telangana">Telangana</option>
                                            </select> -->
                                            <select class="form-control-lg form-control" id="state" name="state">
                                            <option value="">Select country first</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="selectLg" class=" form-control-label">district</label></div>
                                        <div class="col-12 col-md-9">
                                            <!-- <select name="district" id="selectLg" class="form-control-lg form-control">
                                                <option value="0">Please select</option>
                                                <option value="Thrissur">Thrissur</option>
                                                <option value="Earnakulam">Earnakulam</option>
                                                <option value="Palakkad">Palakkad</option>
                                                <option value="Kollam">Kollam</option>
                                                <option value="Kottyam">Kottyam</option>
                                            </select> -->
                                            <select class="form-control-lg form-control" id="city" name="city">
                                            <option value="">Select state first</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Star Rating</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="radio">
                                                    <label for="radio1" class="form-check-label ">
                                                        <input type="radio" id="radio1" name="radios" value="⭐" class="form-check-input">⭐
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio2" class="form-check-label ">
                                                        <input type="radio" id="radio2" name="radios" value="⭐ ⭐" class="form-check-input">⭐ ⭐
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio3" class="form-check-label ">
                                                        <input type="radio" id="radio3" name="radios" value="⭐ ⭐ ⭐" class="form-check-input">⭐ ⭐ ⭐
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio2" class="form-check-label ">
                                                        <input type="radio" id="radio4" name="radios" value="⭐ ⭐ ⭐ ⭐" class="form-check-input">⭐ ⭐ ⭐ ⭐
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio2" class="form-check-label ">
                                                        <input type="radio" id="radio5" name="radios" value="⭐ ⭐ ⭐ ⭐ ⭐" class="form-check-input">⭐ ⭐ ⭐ ⭐ ⭐
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">status</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="radio">
                                                    <label for="radio1" class="form-check-label ">
                                                        <input type="radio" id="radio1" name="radiose" value="Active" class="form-check-input">Active
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio2" class="form-check-label ">
                                                        <input type="radio" id="radio2" name="radiose" value="Not active" class="form-check-input">Not active
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                    </div>
                                    </div> <!--card-body-->
                                </div>
                            </div>
                        </div> <!-- .card -->
                    </div><!--/.col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Hotel </strong><small> Details</small></div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Phone no 1 :</label>
                                    <input type="tel" required id="phone1"  name="phone1" placeholder="Enter phone number 1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Lan No :</label>
                                    <input type="tel" id="phone1" name="phone2" placeholder="Enter phone number 2" class="form-control">
                                </div>
                                
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Discteption :</label></div>
                                        <div class="col-12 col-md-9"><textarea name="disp" id="disp" rows="9" placeholder="About hotel..." class="form-control"></textarea></div>
                                    </div>

                                <div class="form-group">
                                    <label for="street" class=" form-control-label"> Licence id :</label>
                                    <input type="text" required id="licence"  name="licence" placeholder="Enter Licence id " class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="country" class=" form-control-label">Regiser room :</label>
                                    <input type="number" required id="reginumb"  name="reginumb" placeholder="register room number in website" class="form-control">
                                </div>
                                 
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Photos</strong> uploding <sub>(Hotel's)</sub>
                            </div>
                            <div class="card-body card-block">
                                <div class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Hotel icon :</label></div>
                                        <div class="col-12 col-md-9"><input type="file" required  id="hotelicon" name="hotelicons" class="form-control-file"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label"> Hotel photo's:</label></div>
                                        <div class="col-12 col-md-9"><input type="file" required multiple="multiple" id="multiplePhoto[]" name="multiplePhoto[]" class="form-control-file"></div>
                                    </div>
                                </div >
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>USER name  </strong> SETTING
                            </div>
                            <div class="card-body card-block">
                                <div class="form-horizontal">
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="hotel-username" class=" form-control-label">Hotel User Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" required  id="hotel-username" name="hotel-username" placeholder="Enter user name" class="form-control"><span class="help-block">Please enter hotel user name</span></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9"><input type="email" required  id="email" name="email" placeholder="Enter Email..." class="form-control"><span class="help-block">Please enter your email</span></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Password</label></div>
                                        <div class="col-12 col-md-9"><input type="password" required  id="password" name="password" placeholder="Enter Password..." class="form-control"><span class="help-block">Please enter your password</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                </div><!--row-->

                   
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
                                             <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm" name="submit">Submit</button></div>
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
<script>
$(document).ready(function(){
    $('#country').on('change', function(){
        var countryID = $(this).val();
		//alert(countryID);
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'c_id='+countryID,
                success:function(html1){
                    $('#state').html(html1);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change', function(){
        var stateID = $(this).val();
		//alert(stateID);
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(h){
                    $('#city').html(h);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>

</body>

</html>

<?php}
?>








