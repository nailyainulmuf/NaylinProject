<html>

<head>
	<title>NayLin Project</title>
	<!--icon nama web-->
	<link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/127364/isolated/preview/06a7e759827c7b212d7c7eb7dd643c0d-camera-travel-icon-by-vexels.png"></link>

	<!--bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<!--Navbar sm kyk modal(daftar)-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style>
		body 
		{
			background: #F8F8FF;
			/*putih abu:F8F8FF;
			beige:F5F5DC;
			background-repeat: no-repeat;
		    background-attachment: fixed;
		    background-size: auto;*/
		}

		.affix {
			top: 0;
			width: 100%;
			z-index: 9999 !important;
		}
		.affix ~ .container{
			position: relative;
			top: 50px;
		}

		.judul{
			/*background-image: url(http://www.porcelaingres.com/img/ambienti/URBAN-GREAT/pav-urban-WHITE.jpg);
			background-image: url(https://anaisindia.com/wp-content/uploads/2016/11/digital-photography.jpg);*/
			background-image: url(https://istyle.id/wp-content/uploads//2017/04/FUJIFILM-X-T10-1.jpg);
			
			/*background-repeat: no-repeat;
			height: 570px;
			width: 1333px;*/
			position: center;
		}

		.judultext{
			font-family: forte;
			font-size: 40;
		}

		.form-group
		{
			padding: 40px;
			width: 350;
			background-color: black;
			margin: 0 auto 10px;
			border-radius: 2px;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			overflow: hidden;
			
		}

		.futer{
			background-color: #808080;
			height: 250px;
			text-align: center;
		}
	</style>

</head>

<body>

	<!--Judul+gambar-->
	<div class="judul">
	  	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	  	<!--judul-->
	  	<div class="row">
			<div class="col"></div>
			<div class="col"></div>
			<div class="col">
				<big>
					<font class="judultext" style="color: #CD5C5C">Nay</font>
					<font class="judultext" style="color: #4682B4">Lin</font>
					<font class="judultext">&nbspProject</font>
				</big>
			</div>
		</div>

		<!--btn login dan daftar-->
		<br>
		<div class="row">
			<div class="col"></div>
			<div class="col"></div>
			<div class="col"></div>
			<div class="col"></div>
			<div class="col">
				<!--button login-->
				<button type="button" class="btn btn-basic btn-lg btn-block">
					<a href='<?php echo base_url("index.php/Login/"); ?>'>
						<span class="glyphicon glyphicon-log-in" style="color: #808080"></span> 
						<font style="color: #808080">Login</font>
					</a>
				</button>

				<!--text daftar-->
				<center><font style="font-family:arial; font-size: 12;" class="text-center">
					Belum punya akun? 
					<a href='<?php echo base_url("index.php/Login/create"); ?>'>Daftar<span class="glyphicon glyphicon-user"></a>
				</font></center>
				<br><br><br><br><br><br><br><br><br><br><br><br><br>
			</div>
			<div class="col"></div>
		</div>
	</div>

	<!--navbar-->
	<nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-center" data-spy="affix" data-offset-top="574">
	  <ul class="nav navbar-nav">
	    <li class="nav-item active">
	      <a class="nav-link" href="#">Home</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">Gallery</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">Contact</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link disabled" href="#">Disabled</a>
	    </li>
	  </ul>
	</nav>

	<!--gallery-->
	<div class="container">

	  <div class="page-header" style="color:black">
	  	<h1 class="text-center"><b>Gallery :)</b></h1>
	  </div>

		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling! aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling! aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling! aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling! aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling! aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling! aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling! aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling! aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling! aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling! aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling! aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling! aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling! aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>

	</div>
	<br><br><br><br>

	<!--Footer handmade-->
	<div class="futer">
		<br>
		<font style="font-family:times new roman; font-size: 15;" class="text-center">
			THIS IS FOOTER
		</font>
			<br><br>
			<p><span class="badge badge-secondary">contact :</span></p>
			<font style="color: #F8F8FF">instagram | @lalalalla </font><br>
			<font style="color: #F8F8FF">twitter | @lililili</font>
			<br><br>
			<p><span class="badge badge-secondary">hi everyone</span></p>
			<font style="color: #F8F8FF">love photography, this is our galery</font><br>
	</div>

</body>

</html>