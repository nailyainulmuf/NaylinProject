<!DOCTYPE html>
<html>
  <head>
    <title>NayLin Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://cdn2.iconfinder.com/data/icons/seo-web-optomization-ultimate-set/512/custom_settings-512.png"></link>
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap --><!-- 
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url ('assets/css/bootstrap.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css">
    <!-- styles -->
    <link href="<?php echo base_url ('assets/css/styles.css') ?>" rel="stylesheet">
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                <h1><a href="">Admin | Website NayLinProject</a></h1>
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
                    <li class=""><a href="<?php echo base_url('index.php/m_admin') ?>"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                                        <li class="submenu">
                    <li class="#"><a href="<?php echo base_url('index.php/admin_profil') ?>"><i class="glyphicon glyphicon-user"></i> Profil</a></li>
                    <li class="#"><a href="<?php echo base_url('index.php/admin_foto') ?>"><i class="glyphicon glyphicon-picture"></i> Foto</a></li>
                    <li class="#"><a href="<?php echo base_url('index.php/admin_tips') ?>"><i class="glyphicon glyphicon-list"></i> Tips</a></li>
                     <li><a href="<?php echo base_url('index.php/komentar') ?>"><i class="glyphicon glyphicon-list-alt"></i> Komentar</a></li>
                    <li class="current"><a href="<?php echo base_url('index.php/data_user') ?>"><i class="glyphicon glyphicon-tasks"></i> User</a></li>     
                    </li>
                </ul>
             </div>
		  </div>


		  	<div class="row">
      <div class="col-md-9">
            <div class="content-box-large">
              <div class="panel-heading">
              <div class="panel-body">
                <a href="<?php echo base_url('index.php/data_user/createpdf') ?>" ><button type="button" class="btn btn-default"><i class="glyphicon glyphicon-print"></i> Print Data</button></a>
                <br><br>
                <table class="table table-striped" id="example">
                      <thead>
                        <tr>
                          <th class= "text-center">No</th>
                          <th class= "text-center">Username</th>
                          <th class= "text-center">Nama Lengkap</th>
                          <th class= "text-center">Email</th>
                          <th class= "text-center">Level</th>
                          <th class= "text-center">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $id=1; foreach ($user_list as $key) : ?>
                        <tr>
                          <td class= "text-center"><?php echo $id ?></td>
                          <td class= "text-center"><?php echo $key['username'] ?></td>
                          <td class= "text-center"><?php echo $key['nama'] ?></td>
                          <td class= "text-center"><?php echo $key['email'] ?></td>
                          <td class= "text-center"><?php echo $key['level'] ?></td>
                              <td class="text-center"><a href="<?php echo base_url('index.php/data_user/delete/' .$key['id_user']) ?>" class="btn btn-danger">Hapus</a></td>
                        </tr>
                        <?php $id++; endforeach?>
                      </tbody>
                    </table>
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
      <!-- </footer> -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo base_url ('assets/js/bootstrap.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url ('assets/js/jquery-min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/custom.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/tables.js') ?>"></script>
    <script src="<?php echo base_url('') ?>assets/datatables.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/DataTables-1.10.16/jquery.dataTables.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript">
      $(document).ready(function() {
        $('#example').DataTable();
    } );
  </script>
  </body>
</html>