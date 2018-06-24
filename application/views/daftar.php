<html>

<head>
	<title>NayLin Project</title>
	<!--icon nama web-->
	<link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/127364/isolated/preview/06a7e759827c7b212d7c7eb7dd643c0d-camera-travel-icon-by-vexels.png"></link>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<style>
		body 
		{
			background-image: url(http://backgroundcheckall.com/wp-content/uploads/2017/12/login-background-image-5.png);
		    background-repeat: no-repeat;
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

	  <div class="page-header" style="color:#F5F5F5">
	  	<h1 class="text-center">Daftar Akun</h1>
	  </div>

	  <br>
	  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	  	<div class="form-group">
			
			<?php echo form_open('login/create') ?>

			<?php echo validation_errors(); ?>
			<label for="">Username</label>
			<input type="text" class="form-control" id="username" name="username" >
			<br>
			<label for="">Password</label>
			<input type="password" class="form-control" id="password" name="password">

			<br>
			<center>
				<br>
				<button type="Submit" class="btn btn-default">Daftar</button>
			</center>
			
			<?php echo form_close(); ?>

		</div>
	  </div>

	</div>

</body>

</html>