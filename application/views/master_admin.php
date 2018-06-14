<!DOCTYPE html>
<html>
  <head>
    <title>NayLin Project </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--icon nama web-->
  <link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/127364/isolated/preview/06a7e759827c7b212d7c7eb7dd643c0d-camera-travel-icon-by-vexels.png"></link>
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap --><!-- 
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url ('assets/css/bootstrap.css') ?>" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url ('assets/css/styles.css') ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><!-- <img src="<?php echo base_url ('assets/images/logo.png') ?>" alt="logo" width="88" height="57"> --><a href="">Admin | Website NayLinProject</a></h1>
	              </div>
	           </div>
	           <ul class="nav navbar-nav navbar-right">
				<li><a href=""> Halo,<?php echo $username; ?> sebagai <?php echo $level; ?></a></li>
				<li><a href="<?php echo base_url('index.php/login/logout') ?>">Logout</a></li>
			</ul>
	     </div>
	</div>
	 </div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    
                    <li class="#"><a href="barang.php"><i class="glyphicon glyphicon-list"></i> Foto</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Komentar</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-user"></i> User</a></li>
                   
                   
                         <!-- Sub menu -->
                        
                    </li>
                </ul>
             </div>
		  </div>


		  	<div class="row">
  				<div class="col-md-9">
  					<div class="content-box-large">
		  				<div class="panel-heading">
							<a href="#tambah" data-toggle="modal"><button class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Tambah Data Foto</button></a>
							
						</div>
						<div class="panel-body">
		  					<table class="table">
				              <thead>
				                <tr>
									<th width="100">ID Foto</th>
									<th width="133">Foto</th>
									<th width="50">Deskripsi</th>
									<th width="85"colspan="2">Aksi</th>
				                </tr>
				              </thead>
				              <tbody>
				                
				              </tbody>
				            </table>
		  				</div>
		  			</div>
  				</div>
  			</div>

  			


		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2018 <a href='#'>Website NayLinProject</a>
            </div>
            
         </div>
      </footer>

     <link href="<?php echo base_url ('assets/vendors/datatables/dataTables.bootstrap.css') ?>" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo base_url ('assets/js/bootstrap.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url ('assets/js/jquery-min.js') ?>"></script>

    <script src ="<?php echo base_url ('assets/vendors/datatables/js/jquery.dataTables.min.js') ?>"></script>

    <script src="<?php echo base_url ('assets/vendors/datatables/dataTables.bootstrap.js') ?>"></script>

    <script src="<?php echo base_url ('assets/js/custom.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/tables.js') ?>"></script>
  </body>
</html>