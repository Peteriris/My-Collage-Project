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
                                <h1>Hotel image Table </h1>
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
                                <strong class="card-title">Hotel Photos</strong>
                            </div>
                            <div class="table">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="serial">No :</th>
                                            <th class="avatar">logo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                         $connect = pg_connect("host=localhost dbname=kubuka user=postgres password=1234");
                                         if(isset($_GET))
                                           { 
                                               $i=1;
                                               
                                               $id = $_GET['id'];
                                                $res = pg_query($connect,"SELECT * FROM hotelphotouplode where hot_regi_id='$id'");
                                                
                                                     if(pg_num_rows($res)>0)
                                                     {
                                                         while($result=pg_fetch_array($res)) 
                                                         {
                                                            ?>
                                                                <tr>
                                                                   <td> <?php echo "$i"; ?></td>
                                                                   <td>
                                                                        <div >
                                                                             <img class="image-name-bar" alt="photo" width="80" height="80" src="<?php echo $result[  1]; ?>" alt="">
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
                            
                            <div class="card-header">
                                <strong class="card-title">Multiple hotel Photos</strong>
                            </div>
                            <div class="table">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="serial">No :</th>
                                            <th class="avatar">Photo's</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                         $connect = pg_connect("host=localhost dbname=kubuka user=postgres password=1234");
                                         if(isset($_GET))
                                           { 
                                               $i=1;
                                               
                                                $id = $_GET['id'];
                                                $res = pg_query($connect,"SELECT * FROM hotelimages where hotel_id='$id'" );
                                                
                                                     if(pg_num_rows($res)>0)
                                                     {
                                                         while($result=pg_fetch_array($res))
                                                         {
                                                            ?>
                                                                <tr>
                                                                   <td> <?php echo "$i"; ?></td>
                                                                   <td>
                                                                        <div >
                                                                             <img class="image-name-bar" alt="photo" width="80" height="80" src="<?php echo $result[  1]; ?>" alt="">
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
