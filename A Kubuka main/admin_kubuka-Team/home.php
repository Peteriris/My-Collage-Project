
<?php
session_start();
if(!isset($_SESSION['usname']))
 {
    header('location:index.php'); 
 }
 else
 {

?>
<?php
    include "heder.php";
    include "connect.php";
?>
    
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
        </header>
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                
                <!-- /Widgets -->
                <div class="row">
                                    <?php
										$userbookingreq = pg_query($connect,"SELECT count(*) FROM userbooking where statuss is null");
										$userbookingreguest=pg_fetch_array($userbookingreq);
									?>
                
                <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-4">
                            <div class="card-body">
                                <p class="text-light mt-1 m-0">Booking Notification</p>
                                        <a href="bookingnotification.php"><i class="icon fade-5 icon-lg fa fa-bell"></i></a>
                                        <span class="count float-left"><?php echo $userbookingreguest[0]; ?></span>
                                        </button>
                                        
                                        <!-- 
                                        <div class="dropdown-menu" aria-labelledby="notification">
                                            <p class="red">You have 3 Notification</p>
                                            <a class="dropdown-item media" href="#">
                                                <i class="fa fa-check"></i>
                                                <p>Server #1 overloaded.</p>
                                            </a>
                                            <a class="dropdown-item media" href="#">
                                                <i class="fa fa-info"></i>
                                                <p>Server #2 overloaded.</p>
                                            </a>
                                            <a class="dropdown-item media" href="#">
                                                <i class="fa fa-warning"></i>
                                                <p>Server #3 overloaded.</p>
                                            </a>
                                        </div> -->

                            </div>
                        </div>
                    </div>

                    <!--<div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-4">
                            <div class="card-body">
                                <p class="text-light mt-1 m-0">Message</p>
                                            
                                <div class="card-righ text-white float-right text-right">
                                        <a href="bookingnotification.php"><i class=" icon fade-5 icon-lg fa fa-envelope"></i></a>
                                </div>
                                        <span class="count  ">4</span>
                                        </button>
                                        
                                        
                                        <div class="dropdown-menu" aria-labelledby="notification">
                                            <p class="red">You have 3 Notification</p>
                                            <a class="dropdown-item media" href="#">
                                                <i class="fa fa-check"></i>
                                                <p>Server #1 overloaded.</p>
                                            </a>
                                            <a class="dropdown-item media" href="#">
                                                <i class="fa fa-info"></i>
                                                <p>Server #2 overloaded.</p>
                                            </a>
                                            <a class="dropdown-item media" href="#">
                                                <i class="fa fa-warning"></i>
                                                <p>Server #3 overloaded.</p>
                                            </a>
                                        </div> 

                            </div>
                        </div>
                    </div> -->
                
                
                        <!-- <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div> -->
                                    <?php
										$userbook = pg_query($connect,"SELECT * FROM userbooking");
										$bookuser=pg_fetch_array($userbook);
									?>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-1">
                            <div class="card-body">
                                <div class="card-left pt-1 float-left">
                                    <h3 class="mb-0 fw-r">
                                        <span class="currency float-left mr-1">$</span>
                                        <span class="count">2120</span>
                                    </h3>
                                    <p class="text-light mt-1 m-0">Year Revenue</p>
                                </div><!-- /.card-left -->

                                <div class="card-right float-right text-right">
                                    <i class="icon fade-5 icon-lg pe-7s-cash"></i>
                                </div><!-- /.card-right -->

                            </div>

                        </div>
                    </div>
                    <!--/.col-->

                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-6">
                            <div class="card-body">
                                <div class="card-left pt-1 float-left">
                                <?php
										$Hotelreg = pg_query($connect,"SELECT count(*) FROM hotelregis ");
										$Hotelregnumb=pg_fetch_array($Hotelreg);
									?>
                                    <h3 class="mb-0 fw-r">
                                        <span class="count float-left"><?php echo $Hotelregnumb[0]; ?></span>
                                    </h3>
                                    <p class="text-light mt-1 m-0"><br>Number of Hotel booked</p>
                                </div><!-- /.card-left -->

                                <div class="card-right float-right text-right">
                                    <div id="flotBar1" class="flotBar1"></div>
                                </div><!-- /.card-right -->
                               
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-6">
                            <div class="card-body">
                                <div class="card-left pt-1 float-left">
                                <?php
										$booking = pg_query($connect,"SELECT count(*) FROM userbooking ");
										$bookingnumb=pg_fetch_array($booking);
									?>
                                    <h3 class="mb-0 fw-r">
                                        <span class="count float-left"><?php echo $bookingnumb[0]; ?></span>
                                    </h3>
                                    <p class="text-light mt-1 m-0"><br>Totel Booking</p>
                                </div><!-- /.card-left -->

                                <div class="card-right float-right text-right">
                                    <div id="flotBar1" class="flotBar1"></div>
                                </div><!-- /.card-right -->
                               
                            </div>

                        </div>
                    </div>
                    <!--/.col-->

                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-3">
                            <div class="card-body">
                                <div class="card-left pt-1 float-left">
                                <?php
										$NumRoom = pg_query($connect,"SELECT count(*) FROM roomadding ");
										$NumRoomadding=pg_fetch_array($NumRoom);
									?>
                                    <h3 class="mb-0 fw-r">
                                        <span class="count"><?php echo $NumRoomadding[0]; ?></span>
                                    </h3>
                                    <p class="text-light mt-1 m-0">Number of room's</p>
                                </div><!-- /.card-left -->

                                <div class="card-right float-right text-right">
                                    <i class="icon fade-5 icon-lg pe-7s-users"></i>
                                </div><!-- /.card-right -->

                            </div>

                        </div>
                    </div>
                    <!--/.col-->

                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-2">
                            <div class="card-body">
                                <div class="card-left pt-1 float-left"> <?php
										$userlogin = pg_query($connect,"SELECT count(*) FROM userlogin ");
										$userlog=pg_fetch_array($userlogin);
									?>
                                    <h3 class="mb-0 fw-r">
                                        <span class="count float-left"><?php echo $userlog[0]; ?></span>
                                    </h3>
                                    <p class="text-light mt-1 m-0"><br>Number of user's</p>
                                </div><!-- /.card-left -->

                                <div class="card-right float-right text-right">
                                    <i class="icon fade-5 icon-lg pe-7s-users"></i>
                                </div><!-- /.card-right -->

                            </div>

                        </div>
                    </div>
                    <!--/.col-->

<!--

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-four">
                                    <div class="stat-icon dib">
                                        <i class="ti-server text-muted"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading">Database</div>
                                            <div class="stat-text">Total: 765</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-four">
                                    <div class="stat-icon dib">
                                        <i class="ti-user text-muted"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading">Users</div>
                                            <div class="stat-text">Total: 24720</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-four">
                                    <div class="stat-icon dib">
                                        <i class="ti-stats-up text-muted"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading">Daily Sales</div>
                                            <div class="stat-text">Total: $76,58,714</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-four">
                                    <div class="stat-icon dib">
                                        <i class="ti-pulse text-muted"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading">Bandwidth</div>
                                            <div class="stat-text">Total: 4TB</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Total Profit</div>
                                        <div class="stat-digit">1,012</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">New Customer</div>
                                        <div class="stat-digit">961</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Active Projects</div>
                                        <div class="stat-digit">770</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-link text-danger border-danger"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Referrals</div>
                                        <div class="stat-digit">2,781</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-sm-12 mb-4">
                        <div class="card-group">
                            <div class="card col-md-6 no-padding ">
                                <div class="card-body">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-users"></i>
                                    </div>

                                    <div class="h4 mb-0">
                                        <span class="count">87500</span>
                                    </div>

                                    <small class="text-muted text-uppercase font-weight-bold">Visitors</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-md-6 no-padding ">
                                <div class="card-body">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-user-plus"></i>
                                    </div>
                                    <div class="h4 mb-0">
                                        <span class="count">385</span>
                                    </div>
                                    <small class="text-muted text-uppercase font-weight-bold">New Clients</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-2" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-md-6 no-padding ">
                                <div class="card-body">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-cart-plus"></i>
                                    </div>
                                    <div class="h4 mb-0">
                                        <span class="count">1238</span>
                                    </div>
                                    <small class="text-muted text-uppercase font-weight-bold">Products sold</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-3" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-md-6 no-padding ">
                                <div class="card-body">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-pie-chart"></i>
                                    </div>
                                    <div class="h4 mb-0">
                                        <span class="count">28</span>%
                                    </div>
                                    <small class="text-muted text-uppercase font-weight-bold">Returning Visitors</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-4" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-md-6 no-padding ">
                                <div class="card-body">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="h4 mb-0">5:34:11</div>
                                    <small class="text-muted text-uppercase font-weight-bold">Avg. Time</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-5" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                            <div class="card col-md-6 no-padding ">
                                <div class="card-body">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-comments-o"></i>
                                    </div>
                                    <div class="h4 mb-0">
                                        <span class="count">972</span>
                                    </div>
                                    <small class="text-muted text-uppercase font-weight-bold">COMMENTS</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
    -->
    

                </div><!-- .row -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
    </div>

    




    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                <a class="navbar-brand" href="./"><img src="./images/Logo1.jpeg" class="image-name-bar" alt="Logo" width="40" height="40"></a>
                    <a class="navbar-brand hidden" href="./"><img src="./images/Logo4.jpeg" alt="Logo" ></a>
 
                </div>
            </div>
            
        </header>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
    <?php
      }
    ?>
