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
			background-image: url(https://thumbs.dreamstime.com/b/vintage-camera-background-wood-43413984.jpg)
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

		.form-group
		{
			padding: 40px;
			width: 350;
			background-color: #F8F8FF;
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

	<!--navbar-->
	<nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-center" data-spy="affix" data-offset-top="574">
	  <ul class="nav navbar-nav">
	    <li class="nav-item active">
	      <a class="nav-link" href="<?php echo base_url('index.php/user/') ?>">Home</a>
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

	<div class="container">

	  <div class="page-header" style="color:white">
	  	<h1 class="text-center"><b>Upload Foto</b></h1>
	  </div>

	  <!--Form-->
      <div class="content-box">
      <br>
      <?php echo form_open_multipart('user_foto/create'); ?>

        <center>
			<font style="color:white"><?php echo validation_errors(); ?></font>
		</center>
		<div class="form-group">

			<label for="">Judul Foto</label>
			<input type="text" class="form-control" id="judul" name="judul" placeholder="Isi Judul Foto disini">
			<br>

			<label for="">Foto</label>
			<input type="file" name="userfile" size="20">
			<br>

			<label for="">Kategori</label>
			<select name="kategori" class="form-control">
				<option selected="selected">---</option>
				<?php foreach ($kategori_list as $key) : ?>
					<option value="<?php echo $key['id_kategori'] ?>"><?php echo $key['nama_kategori']?></option>
				<?php endforeach?>
            </select>
            <br>

			<label for="">Deskripsi</label>
			<input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Isi Deskripsi Foto">

			<input type="hidden" class="form-control" id="fk_user" name="fk_user" value="<?php echo $id_user ?>">

			<br>
			<button type="Submit" class="btn btn-primary">Upload</button>
			<a href="<?php echo base_url('index.php/user/') ?>" class="btn btn-danger">Kembali</a>

		</div>
      
      </div>

      <?php echo form_close(); ?>
      </div>
      <br><br>

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