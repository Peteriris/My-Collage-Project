
            
<?php
    include "connect.php";
?>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                             --></form>
                        </div>
                        <div class="dropdown for-notification">
                            <?php
										$userbookingreqnoti = pg_query($connect,"SELECT count(*) FROM userbooking where statuss is null");
										$userbookingreguestnoti=pg_fetch_array($userbookingreqnoti);
									?>
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger"><?php echo $userbookingreguestnoti[0]; ?></span>
                            </button>
                                    <?php
										$userbook = pg_query($connect,"SELECT * FROM userbooking");
										$bookuser=pg_fetch_array($userbook);
									?>
                            
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have <?php echo $userbookingreguestnoti[0]; ?> Notification</p>
                            <?php
                             for($i=0;$i<$userbookingreguestnoti[0];$i++)
                             {
                            ?>
                                <a class="dropdown-item media" href="bookingnotification.php">
                                    <i class="fa fa-check"></i>
                                    <p><?php echo $bookuser[1]; ?></p>
                                    <dr>
                                    <p> &nbsp; &nbsp; &nbsp;<?php echo $bookuser[2]; ?></p>
                                    <?php
                                    $use=$bookuser[5];
										$hotel = pg_query($connect,"SELECT * FROM hotelregis where id='$use'");
										$hoteldetail=pg_fetch_array($hotel);
									?>
                                    <p> &nbsp; <?php echo $hoteldetail[1]; ?></p>
                                    <p>  &nbsp;<?php echo $bookuser[3]; ?></p>
                                </a>
                            <?php
                               }
                            ?>
                            </div>
                            
                        </div>

                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="index.php"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count"><?php echo $userbookingreguestnoti[0]; ?></span></a>

                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>