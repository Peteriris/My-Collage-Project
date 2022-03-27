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
                                <h1>Hotel Registaration Table </h1>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <center>
            
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                            <div class="card-header">
                                <strong class="card-title">Custom Table</strong>
                            </div>
                            <br>
                            <div class="table">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="serial">No :</th>
                                            <th class="avatar">Hotel name</th>
                                            <th>Place</th>
                                            <th>Pincode</th>
                                            <th>Star rate</th>
                                            <th>Status</th>
                                            <th>district</th>
                                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit</th>
                                            <th>Room adding</th>
                                            <th>View photo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
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
                                                        <tr>
                                                                   <td > <?php echo "$i"; ?></td>
                                                                   <td> <?php echo $result[1]; ?></td>
                                                                   <td> <?php echo $result[2]; ?></td>
                                                                   <td> <?php echo $result[3]; ?></td>
                                                                   <td> <?php echo $result[4]; ?></td>
                                                                   <td> <?php echo $result[5]; ?></td>
                                                                   <td> 
                                                                       <?php $dic=$result[6];
                                                                            $res8=pg_query($connect,"SELECT * FROM cities where city_id='$dic'");
                                                                            $di=pg_fetch_array($res8);
                                                                            echo $di[2];
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <button type="button" class="btn btn-danger">
                                                                                <a href="#">
                                                                                    <i class="fa fa-trash-o"></i>
                                                                                </a>  DELETE
                                                                            </button> 

                                                                            <button type="button" class="btn btn-warning">
                                                                            <a href="#">
                                                                                <i class="fa fa-edit"></i>
                                                                            </a>
                                                                              EDIT
                                                                            </button>
                                                                            &nbsp;&nbsp;&nbsp;
                                                                            
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fa-hover col-lg-3 col-md-8">
                                                                         <a href="page_table.php?id=<?php echo $result[0]; ?>"><i class="fa fa-hand-o-right"></i></a>Room
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fa-hover col-lg-3 col-md-8">
                                                                         <a href="photoView.php?id=<?php echo $result[0]; ?>"><i class="fa fa-hand-o-right"></i></a>Photo
                                                                        </div>
                                                                    </td>
                                                        </tr>
                                                                <?php
					                                                $i++;
                                                         }
                                                     }
                                                     else
                                                     {
                                                        echo"No result founds";
                                                    }
                                           }
                                        ?>

                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->

                            <br><br>

                            <div class="card-header">
                                <strong class="card-title">Hotel details</strong>
                            </div>
                            <div >
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="serial">No :</th>
                                            
                                            <th>Phone 1</th>
                                            <th>Tele : pho</th>
                                            <th>Discreption</th>
                                            <th>Licience id</th>
                                            <th>Room numb</th>
                                            <th>Specfic....</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                         $connect = pg_connect("host=localhost dbname=kubuka user=postgres password=1234");
                                         if(isset($_POST))
                                           { 
                                            $i=1;
                                                $res = pg_query($connect,"SELECT * FROM hoteldetails");

                                                     if(pg_num_rows($res)>0)
                                                     {
                                                        //$result = pg_fetch_array($res);
                                                        while($result=pg_fetch_array($res))
                                                        {
                                                           ?>
                                                       <tr>
                                                                  <td> <?php echo "$i"; ?></td>
                                                                  <td> <?php echo $result[1]; ?></td>
                                                                  <td> <?php echo $result[2]; ?></td>
                                                                  <td> <?php echo $result[3]; ?></td>
                                                                  <td> <?php echo $result[4]; ?></td>
                                                                  <td> <?php echo $result[5]; ?></td>
                                                                  
                                                                  <td>
                                                                        <div class="fa-hover col-lg-3 col-md-8">
                                                                         <a href="specTable.php?id=<?php echo $result[6]; ?>"><i class="fa fa-hand-o-right"></i></a>✨✨✨
                                                                        </div>
                                                                    </td>
                                                       </tr>
                                                               <?php
                                                                   $i++;
                                                        }
                                                     }
                                                     else
                                                     {
                                                        echo"No result found";
                                                    }
                                           }
                                        ?>
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                            <br><br>

                            <div class="card-header">
                                <strong class="card-title">Hotel user login</strong>
                            </div>
                            <div class="table">
                                <table class="table table-striped table-bordered" >
                                    <thead>
                                        <tr>
                                            <th class="serial">No :</th>
                                            <th class="avatar">Hotel user name</th>
                                            <th>Email</th>
                                            <th>password</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                         $connect = pg_connect("host=localhost dbname=kubuka user=postgres password=1234");
                                         if(isset($_POST))
                                           { 
                                               $i=1;
                                                $res = pg_query($connect,"SELECT * FROM hoteluserlogin");
                                                
                                                     if(pg_num_rows($res)>0)
                                                     {
                                                         //$result = pg_fetch_array($res);
                                                         while($result=pg_fetch_array($res))
                                                         {
                                                            ?>
                                                                <tr>
                                                                   <td> <?php echo "$i"; ?></td>
                                                                   <td> <?php echo $result[1]; ?></td>
                                                                   <td> <?php echo $result[2]; ?></td>
                                                                   <td> <?php echo $result[3]; ?></td>
                                                                </tr>
                                                                <?php
					                                                $i++;
                                                         }
                                                     }
                                                     else
                                                     {
                                                        echo"No result found";
                                                    }
                                           }
                                        ?>
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                            <br><br>
                            
                    </div>
                </div>
            </div>

        </div>
    </div><!-- .animated -->
</div><!-- .content -->
        </center>

</div><!-- /#right-panel -->
<?php
include "footer.php";
?>
