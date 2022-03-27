<?php
 
 session_start();
 
?>


<?php
    $connect = pg_connect('host=localhost dbname=kubuka user=postgres password=1234');
    if ($_POST) {
        $us = $_POST['username'];
        $ps = $_POST['password'];
        $res = pg_query($connect,"SELECT * FROM userlogin WHERE uname = '$us' AND password = '$ps'");
        $id=pg_fetch_array($res);
        $userid=$id[0];
        if (pg_num_rows($res) > 0) {

                    $_SESSION['userid']=$userid;
               header ('location:index.php'); 
        } else {
            echo '<script>alert("invalid user name and password")</script>';
        }
    }

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>login</title>
        <meta name="description" content="Ela Admin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
        <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
         <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <style> 
    body {
  background-image: url('./images/insta-5.jpg');
    }
        .placeicon {
            font-family: fontawesome
        }

        .custom-control-label::before {
            background-color: #dee2e6;
            border: #dee2e6;

        } 
    </style>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> 
    </head>
    <body class="bg-dark" >
            <!-- Container containing all contents -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <!-- White Container -->
                        <div class="container bg-white rounded mt-2 mb-2 px-0">
                            <!-- Main Heading -->
                            <div class="row justify-content-center align-items-center pt-3">
                                <h1><strong>Login</strong></h1>
                            </div>
                            <div class="pt-3 pb-3">
                                <form class="form-horizontal"method = "post" action ="#">
                                    <!-- User Name Input -->
                                    <div class="form-group row justify-content-center px-3">
                                        <div class="col-9 px-0"> <input type="text" name="username" placeholder="&#xf007; &nbsp; User name"
                                                class="form-control border-info placeicon"> </div>
                                    </div> <!-- Password Input -->
                                    <div class="form-group row justify-content-center px-3">
                                        <div class="col-9 px-0"> <input type="password" name="password"
                                                placeholder="&#xf084; &nbsp; &#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"
                                                class="form-control border-info placeicon"> </div>
                                    </div> <!-- CheckBox Remember Me-->
                                    <div class="form-group row justify-content-center px-3">
                                        <div class="col-9">
                                            <div class="row">
                                                <div class="col-6 px-0">
                                                    <div class="custom-control custom-checkbox mb-3"> <input
                                                            id="customCheck1" type="checkbox"
                                                            class="custom-control-input checkbox-muted"> <label
                                                            for="customCheck1"
                                                            class="custom-control-label text-muted">Remember Me</label>
                                                    </div>
                                                </div> <!-- Forgot Password Link -->
                                                <div class="col-6 px-0 text-right"> <span><a href="#"
                                                            class="text-danger"><b>Forgot Password?</b></a></span> </div>
                                            </div>
                                        </div>
                                    </div> <!-- Log in Button -->
                                    <div class="form-group row justify-content-center">
                                        <div class="col-3 px-3"> <input type="submit" value="Log in" name="ok"
                                                class="btn btn-block btn-info"> </div>
                                    </div>
                                </form>
                            </div> <!-- Alternative Login -->
                            <div class="mx-0 px-0 bg-light">
                                <div class="pt-4">
                                    <div class="row justify-content-center pt-3">
                                        <h3><strong>Login</strong></h3>
                                    </div>
                                    <div class="row justify-content-center">
                                        <h5>With your social media account</h5>
                                    </div> <!-- Social Media Login buttons -->
                                    <div class="row justify-content-center pt-4">
                                        <div class="col-10">
                                            <div class="row justify-content-center">
                                                <!-- Twitter Connect -->
                                                <div class="col-7 col-sm-4 px-1 pb-1"> <a href="#"
                                                        class="btn btn-block btn-social btn-twitter"> <span
                                                            class="fa fa-twitter"></span> Twitter </a> </div>
                                                <!-- Facebook Connect -->
                                                <div class="col-7 col-sm-4 px-1 pb-1"> <a href="#"
                                                        class="btn btn-block btn-social btn-facebook"> <span
                                                            class="fa fa-facebook"></span> Facebook </a> </div>
                                                <!-- Google Connect -->
                                                <div class="col-7 col-sm-4 px-1 pb-1"> <a href="#"
                                                        class="btn btn-block btn-social btn-google"> <span
                                                            class="fa fa-google-plus"></span> Google+ </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- Horizontal Line -->
                                <div class="px-4 pt-5">
                                    <hr>
                                </div> <!-- Register Now -->
                                <div class="pt-2">
                                    <div class="row justify-content-center">
                                        <h5>Don't have an Account?<span><a href="#" class="text-danger"> Register
                                                    Now!</a></span></h5>
                                    </div>
                                    <div class="row justify-content-center align-items-center pt-4 pb-5">
                                        <div class="col-4"> <a href="sign_in.php" class="btn btn-block btn-info"> CREATE ACCOUNT </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
    
        <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
        <script src="assets/js/main.js"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </body>
    </html>