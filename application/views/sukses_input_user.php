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
  .navbar {
      font-family: Montserrat, sans-serif;
      font-size: 1em !important;
      letter-spacing: 4px;
  }
  .navbar li a, .navbar .navbar-brand { 
      color:#ff5050  !important;
  }

  .mt {
	margin-top: 80px;
}

.mb {
	margin-bottom: 80px;
}
  .carousel-inner img { 
      width: 100%; 
      margin: auto;
  }

  #about {
	background-color:#eaeaea;
}
h1 {      
      font-size: 40px;
      color: #ffffff;
  }

h2 {
	font-size: 20px;
	color: #ffffff;}
#social {
	padding-top: 30px;
	padding-bottom: 30px;
	background-color: #ffffff;
}

#social i {
	font-size: 40px;
	color: #4a4a4a
}

#social i:hover {
	color: #1abc9c
}
#footerwrap {
	padding-top: 70px;
	padding-bottom: 50px;
	background-color: #2f2f2f;
}

#footerwrap p {
	color: #f2f2f2;
	margin-left: 10px;
}


  </style>
	</head>
	<body>

				
     <div class="page-content">
    	<div class="row">
		  <div class="col-md-3">
		  	<div class="sidebar content-box" style="display: block;">
                <img src="<?php echo base_url ('assets/images/bg-login1.png') ?>" alt="fashion" width="1566" height="774">
             </div>
		  </div>

		  <div class="row">
          <div class="col-md-3 col-md-offset-1  panel-warning">
            <div class="box-large">
              <!--  -->
		  
								  
		<div class="container">
		<div class="col-md-4">
			<!--judul-->
			  <div class="page-header" style="color:white">
			  	<h1 class="text-center"><b>Halaman Login</b></h1>
			  </div>
			
		<center><font color="#ffffff">
			<?php echo form_open('login/cekLogin'); ?>

				<?php echo validation_errors(); ?>
				<div>
					<center><h3>Sukses daftar, silahkan login</h3><br></center>
				</div>
				<div class="content-box-large">
				<div class="panel-body">
			  	<form class="form-horizontal" role="form">
					<div class="form-group">
						<h2>
						<label for="">Username</label>
						<input type="text" class="form-control" id="username" name="username" placeholder="input field">
					</div>
					<div class="form-group">
						<h2>
						<label for="">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="input field">
					</div>
				
					<h2><button type="Submit" class="btn btn-primary">Submit</button>
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
<?php
/*	echo "Sukses Simpan Data";

	
	echo anchor('login', 'Kembali');*/
?>