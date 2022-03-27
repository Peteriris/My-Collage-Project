<?php
    include "heder.php";
    include "connect.php";
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $res = pg_query($connect,"SELECT * FROM hotelregis where id='$id'");   

        $row=pg_fetch_array($res);
        

    
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
                                <h1>HOTEL ROOM TABLE </h1>
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
                                    <strong class="card-title"><h2><u><?php echo $row[1]; ?></u></h2></strong>
                                </div>
                                <br>
                                <div class="table">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="serial">No :</th>
                                                <th class="avatar">Hotel name</th>
                                                <th>Room no</th>
                                                <th>Floor no</th>
                                                <th>description </th>
                                                <th>Min price</th>
                                                <th>Max price</th>
                                                <th>Room Type</th>
                                                <th>categorry</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                             $connect = pg_connect("host=localhost dbname=kubuka user=postgres password=1234");
                                             if(isset($_POST))
                                               { 
                                                   $i=1;
                                                    $res = pg_query($connect,"SELECT * FROM roomadding where hotelid='$id'");
    
                                                         if(pg_num_rows($res)>0)
                                                         {
                                                             //$result = pg_fetch_array($res);
                                                             while($result=pg_fetch_array($res))
                                                             {
                                                                ?>
                                                            <tr>
                                                                       <td > <?php echo "$i"; ?></td><td> 
                                                                           <?php $dic=$result[6];
                                                                                $res8=pg_query($connect,"SELECT * FROM hotelregis where id='$dic'");
                                                                                $di=pg_fetch_array($res8);
                                                                                echo $di[1];
                                                                            ?>
                                                                        </td>
                                                                         <?php $req=$result[0]; ?>
                                                                       <td> <?php echo $result[1]; ?></td>
                                                                       <td> <?php echo $result[2]; ?></td>
                                                                       <td> <?php echo $result[3]; ?></td>
                                                                       <td> <?php echo $result[4]; ?></td>
                                                                       <td> <?php echo $result[5]; ?></td>
                                                                       <td> <?php echo $result[7]; ?></td>
                                                                       <td> <?php echo $result[8]; ?></td>
                                                                        <td>
                                                                            <div>
                                                                                <button type="button" class="btn btn-danger">
                                                                                    <a href="">
                                                                                        <i class="fa fa-trash-o"></i>
                                                                                    </a>
                                                                                </button>
    
                                                                                <button type="button" class="btn btn-warning">
                                                                                <a href="#">
                                                                                    <i class="fa fa-edit"></i>
                                                                                </a>
                                                                                </button>
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
            </div><!-- container -->
        </center>
                    <div class="breadcrumbs">
                                <div class="row m-2">
                                        <div class="page-title">
                                        <div class="fa-hover col-lg-3 col-md-4"><a href="form2.php?id=<?php echo $id; ?>" ><i class="icon fade-5 icon-lg fa fa-plus-square"></i></a></div>
                                        </div>
                                </div>
                    </div>


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
                                                $res = pg_query($connect,"SELECT * FROM roomaddingphoto where roomid='$req'");
                                                
                                                     if(pg_num_rows($res)>0)
                                                     {
                                                         while($result=pg_fetch_array($res))
                                                         {
                                                            ?>
                                                                <tr>
                                                                   <td> <?php echo "$i"; ?></td>
                                                                   <td>
                                                                        <div>
                                                                             <img class="image-name-bar" alt="photo" width="80" height="80" src="<?php echo $result[1]; ?>" alt="">
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
</div><!-- /#right-panel -->
<?php } ?>
<?php
include "footer.php";
?>
