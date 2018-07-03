<html>

<head>
	<title>NayLin Project</title>
	<!--icon nama web-->
	<link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/127364/isolated/preview/06a7e759827c7b212d7c7eb7dd643c0d-camera-travel-icon-by-vexels.png"></link>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<style>
		body 
		{
			background-image: url(https://istyle.id/wp-content/uploads//2017/04/FUJIFILM-X-T10-1.jpg);
		    background-size: auto;
		}
		.form-group
		{
			padding: 40px;
			width: 350px;
			background-color: #F7F7F7;
			margin: 0 auto 10px;
			border-radius: 2px;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			overflow: hidden;
			
		}
	</style>

</head>

<body>
		
	<div class="container">

	  <div class="page-header" style="color:white">
	  	<h1 class="text-center"><b>Daftar Akun</b></h1>
	  </div>

	  <br>
	  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	  	<div class="form-group">
			
			<?php echo form_open('registrasi/create'); ?>

				<?php echo validation_errors(); ?>
		
			<label for="">Username</label>
			<input type="text" class="form-control" id="username" name="username" placeholder="Username anda" >
			<br>
			<label for="">Password</label>
			<input type="password" class="form-control" id="password" name="password" placeholder="Password anda">
			<br>
			<label for="">Confirm Password</label>
			<input type="password" class="form-control" id="confirm" name="confirm" placeholder="Tulis ulang password">
			<br>
			<label for="">Nama Lengkap</label>
			<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap anda">
			<br>
			<label for="">Email</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="Email anda">

			<br>
			<center>
				<br>
				<button type="Submit" class="btn btn-primary">Daftar</button>
				<a class="btn btn-danger" href="<?php echo base_url('index.php/login') ?>"><font color="white">
					Kembali					
				</a>
			</center>
			
			<?php echo form_close(); ?>

		</div>
	  </div>

	</div>

</body>

</html>