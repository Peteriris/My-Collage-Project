
<?php
 
 session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
	<style>
		.red{
			background: red;
		}
		.reds{
			color:red;
		}
		.blue{
			background: #0044cc;
		}
		.orange{
			color: orange;
		}
		.blues{
			color: #0044cc;
		}
		.oranges{
			background: orange;
		}
	</style>
    
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">Kubuka</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto justify-content-cente">
					<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
						<?php
						if(isset($_SESSION['userid']))
						{
						?>
					<li class="nav-item"><a href="signout.php" class="nav-link">Logout</a></li>
					<li class="testimony-wrap user-img mb-4 py-8 pb-12"><a href="confome.php" class="nav-link">
							<span class="quote d-flex align-items-center justify-content-center">
							<i class='fas fa-user-circle' style='font-size:26px'></i>
							</span></a>
					</li>
						<?php }
						else 
						{ ?>
						
					<li class="nav-item"><a href="login.php" class="nav-link">Signin</a></li>
					<?php
						}
						?>
					
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->