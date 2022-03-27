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

        <div class="content">
        
        <div class="animated fadeIn">
                    
             <form action="#" method="post" novalidate="novalidate" enctype="multipart/form-data" >
                <div class="col-lg-6">
                <div class="card">
                        <div class="card-header"><br><strong>Room </strong><small> Details</small></div>
                            <div class="card-body card-block">
                            
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Hotel name</label></div>
                                        <div class="col-10 col-md-5">
                                            <select class=" form-control" id="country" name="hotelname">
                                                <option  value="">Select Hotel name</option>
                                                <?php
                                                $connect = pg_connect("host=localhost dbname=kubuka user=postgres password=1234");
                                                if(isset($_POST))
                                                { 
                                                   $i=1;
                                                    $res = pg_query($connect,"SELECT * FROM hotelregis");

                                                     if(pg_num_rows($res)>0)
                                                     {
                                                        //$result = pg_fetch_array($res);
                                                        while($result=pg_fetch_array($res))
                                                        {
                                                           ?>
                                                       <option>
                                                                   <?php echo $result[1]; ?>
                                                        </option>
                                                        <?php
                                                        }
                                                     }
                                                 }
                                        ?>
                                            </select>
                                 </div> 
                                    </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header"><br><strong>Room </strong><small> Details</small></div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Room number :</label>
                                    <input type="number" id="phone1" name="room no" placeholder="Enter Room number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">floor no :</label>
                                    <input type="number" id="phone1" name="phone2" placeholder="Enter floor number" class="form-control">
                                </div>
                                
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Discteption :</label></div>
                                        <div class="col-12 col-md-9"><textarea name="disp" id="disp" rows="9" placeholder="About room..." class="form-control"></textarea></div>
                                    </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Photos</strong> uploding <sub>(Room's)</sub>
                            </div>
                            <div class="card-body card-block">
                                <div class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label"> Hotel photo's:</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="hotelPhoto" name="hotelPhoto" multiple="" class="form-control-file"></div>
                                    </div>
                                </div >
                            </div>
                        </div>
                    </div>

                   <!-- 
                       <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>USER name  </strong> SETTING
                            </div>
                            <div class="card-body card-block">
                                <div class="form-horizontal">
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="hotel-username" class=" form-control-label">Hotel User Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="hotel-username" name="hotel-username" placeholder="Enter user name" class="form-control"><span class="help-block">Please enter hotel user name</span></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9"><input type="email" id="email" name="email" placeholder="Enter Email..." class="form-control"><span class="help-block">Please enter your email</span></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Password</label></div>
                                        <div class="col-12 col-md-9"><input type="password" id="password" name="password" placeholder="Enter Password..." class="form-control"><span class="help-block">Please enter your password</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                          <div class="card-header">
                            <strong>Room  </strong> spech 
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body card-block">
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="hotel-username" class=" form-control-label">No of A/c room's</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="A/C" name="A/C" placeholder="Enter number of A/c room's" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label  class=" form-control-label">No of Non A/c room's</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nonA/C" name="nonA/C" placeholder="Enter number of non A/c room's" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label  class=" form-control-label">No of Single bed</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="Single-bed" name="Single-bed" placeholder="Enter number of Single bed" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label  class=" form-control-label">No of Double bed</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="Double-bed" name="ouble-bed" placeholder="Enter number of Double bed " class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label  class=" form-control-label">No of Classic</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="Classic" name="Classic" placeholder="Enter number of Classic rooms" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label  class=" form-control-label">No of Premium</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="Premium" name="Premium" placeholder="Enter number of Premium rooms" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label  class=" form-control-label">Min price</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="Min" name="Min" placeholder="Enter  max price" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label  class=" form-control-label">Max price</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="max" name="max" placeholder="Enter  max price" class="form-control"></div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    -->

                      <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Hotel room  price</strong> Form
                        </div>
                        <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Room price</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="radio">
                                                    <label for="radio1" class="form-check-label ">
                                                        <input type="radio" id="radio1" name="price-between" value="500-1000" class="form-check-input">500-1000
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio2" class="form-check-label ">
                                                        <input type="radio" id="radio2" name="price-between" value="1000-2000" class="form-check-input">1000-2000
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio2" class="form-check-label ">
                                                        <input type="radio" id="radio3" name="price-between" value="2000-3000" class="form-check-input">2000-3000
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio2" class="form-check-label ">
                                                        <input type="radio" id="radio4" name="price-between" value="3000-4000" class="form-check-input">3000-4000
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio2" class="form-check-label ">
                                                        <input type="radio" id="radios" name="price-between" value="4000-5000" class="form-check-input">4000-5000
                                                    </label>
                                                </div><div class="radio">
                                                    <label for="radio2" class="form-check-label ">
                                                        <input type="radio" id="radios" name="price-between" value="Above-5000" class="form-check-input">Above-5000
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- check book -->
                   
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
<script src="assets/js/main.js"></script>


</body>
</html>





















