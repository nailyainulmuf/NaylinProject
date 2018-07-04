<!DOCTYPE html>
<html lang="">
<head>
	<title>NayLin Project</title>
	<!--icon nama web-->
	<link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/127364/isolated/preview/06a7e759827c7b212d7c7eb7dd643c0d-camera-travel-icon-by-vexels.png"></link>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
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

     <div class="page-content">
    	<div class="row">
		  <div class="col-md-3">
		  	<div class="sidebar content-box" style="display: block;">
                <!-- <img src="https://istyle.id/wp-content/uploads//2017/04/FUJIFILM-X-T10-1.jpg"> -->
                 <!--alt="fashion" width="1566" height="774"-->
             </div>
		  </div>

		  <div class="row">
          <div class="col-md-3 col-md-offset-1  panel-warning">
            <div class="box-large">
								  
		<div class="container">
		<div class="col-md-4">
			<!--judul-->
			  <div class="page-header" style="color:#F5F5F5">
			  	<h1 class="text-center"><b>Halaman Login</b></h1>
			  </div>
			
		<center><font color="#006600">
			<?php echo form_open('login/cekLogin'); ?>

				<?php echo validation_errors(); ?>
				<div class="content-box-large">
				<div class="panel-body">
			  	<form class="form-horizontal" role="form">
					<div class="form-group">
						<h3>
						<label for="">Username</label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">

						<h3>
						<label for="">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
					</div>
				
					<h2>
						<button type="Submit" class="btn btn-primary">Login</button>
						<a class="btn btn-danger" href="<?php echo base_url('index.php/web') ?>"><font color="white">
							Kembali					
						</a>
					<br><br>
					<a class="btn btn-default" href="<?php echo base_url('index.php/registrasi/create/') ?>"><font color="black">
							Create new account
							<i class="glyphicon glyphicon-arrow-right"></i>						
						</a>


					
					
			<?php echo form_close(); ?>
				</div>
			</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>
