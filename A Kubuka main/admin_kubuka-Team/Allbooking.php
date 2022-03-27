<?php
    include "heder.php";
    include "connect.php";
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $res = pg_query($connect,"SELECT * FROM hotelregis where id='$id'");   

        $row=pg_fetch_array($res);

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

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>HOTEL ROOM SPECFICATION TABLE </h1>
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
                                    <strong class="card-title"><h2>Notification</h2></strong>
                                </div>
                                <br>
                                <div class="table">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="serial">No :</th>
                                                <th>Hotel Name</th>
                                                <th>check in date </th>
                                                <th>check out date </th>
                                                <th>Number of Adults </th>
                                                <th>Status </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         $connect = pg_connect("host=localhost dbname=kubuka user=postgres password=1234");
                                         if(isset($_GET))
                                           { 
                                               $i=1;
                                               
                                                    $userbookingreqnoti = pg_query($connect,"SELECT * FROM userbooking ");
                                                     if(pg_num_rows($userbookingreqnoti)>0)
                                                     {
                                                         while($result=pg_fetch_array($userbookingreqnoti))
                                                         {
                                                            ?>
                                                            <tr>
                                                                <td> <?php echo "$i"; ?></td>
                                                                <?php 
                                                                   $Hotelname = pg_query($connect,"SELECT * FROM hotelregis where id='$result[6]' " );
                                                                   $Hotreg=pg_fetch_array($Hotelname);
                                                              ?>
                                                                <td> <?php echo $Hotreg[1]; ?> </td>
                                                                
                                                                <td> <?php echo $result[1]; ?></td>
                                                                <td> <?php echo $result[2]; ?></td>
                                                                <td> <?php echo $result[3]; ?></td> 
                                                                <td> <?php echo $result[7]; ?></td>   
                                                                   
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
    
                        </div>
                    </div>
                </div>
            </div><!-- container -->
        </center>
</div><!-- /#right-panel -->
<?php
include "footer.php";
?>
