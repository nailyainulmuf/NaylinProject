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
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style>
		body 
		{
			background-color: #474738;
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

		.judulfoto{
			font-family: Times New roman;
			font-size: 20;
			text-align: center;
			color: black;
		}

		.judultips{
			font-family: Times New roman;
			font-size: 20;
			text-align: justify;
			color: black;
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
			background-color: #1d1d16;
			height: 250px;
			text-align: center;
		}
	</style>

</head>

<body>

	<!--Judul+gambar-->
	<div class="judul">
	  	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
				<br>
				<font>Hello <?php echo $username; ?>, Welcome to NayLinProject</font>
			</div>
			
		</div>

		<br><br><br><br><br><br><br><br><br><br><br>
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
	      <a class="nav-link" href="#">Tips</a>
	    </li>

	    <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="">
				<span class="glyphicon glyphicon-user"></span><?php echo $username; ?>
			</a>
			<ul class="dropdown-menu">
				<li><a href="<?php echo base_url("index.php/user_setphoto/"); ?>">My Photo</a></li>
				<li><a href="<?php echo base_url("index.php/user_setakun/update"); ?>">Edit Profil</a></li>
				<li><a href="<?php echo base_url('index.php/login/logout') ?>">Logout</a></li>
			</ul>
		</li>

	  </ul>
	</nav>

	<!--GALLERY-->
	<br><br>
	<div class="container" style="background-color: #F8F8FF">
	  <br>
	  <div class="page-header" style="color:black">
	  	<h1 class="text-center">Gallery</h1>
	  </div>
	  <center>
		<button type="button" class="btn btn-info">
			<a href="<?php echo base_url('index.php/user_foto/create'); ?>">
				<font style="color: white">Upload Foto</font>
			</a>
		</button>
	  </center><br>
	  
	  <div class="row">

	  	<!--tampilan foto-->
	    <?php $id=1; foreach ($foto_list as $key) : ?>
	    <div class="col-md-4">
	      <div class="thumbnail">
	        <a href="<?php echo base_url('assets/images/foto/').$key['photo'] ?>" target="_blank">
	          <img src="<?php echo base_url('assets/images/foto/').$key['photo'] ?>" alt="fotonya mana?" style="width:100%">
	          <div class="caption">
				<div class="judulfoto">
	        		<?php echo $key['judul'] ?><br><br>
	        	</div>
	          	<p>
	          		<font style="color: blue">
						<span class="glyphicon glyphicon-user"></span> <?php echo $key['nama'] ?><br>
					</font>
					Kategori : <?php echo $key['nama_kategori'] ?><br>
	            	<?php echo $key['deskripsi'] ?>
	            </p>
	          </div>
	        </a>
	      </div>
	      <br>
	    </div>
	    <?php $id++; endforeach?>

	  </div>
	</div>
	<br><br><br><br>

	<!--TIPS-->
	<div class="container" style="background-color: #F8F8FF">
	  
	  <div class="page-header">
		<h1 class="text-center">TIPS</h1>
	  </div>

	  	<!--tampilan tips-->
	    <?php $id=1; foreach ($tips_list as $key) : ?>
	    
	      <div class="thumbnail">

	        <a href="" target="_blank">
	          <div class="caption">

				<div class="judultips">
	        		<?php echo $key['judultips'] ?><br><br>
	        	</div>
	          	<p>
	            	<?php echo $key['tips'] ?>
	            </p>

	          </div>
	        </a>

	      </div>
	      <br>

	    
	    <?php $id++; endforeach?>

	</div>
	<br><br><br><br>

	<!--Footer handmade(contact)-->
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