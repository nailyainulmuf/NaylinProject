<!DOCTYPE html>
<html>
  <head>
    <title>NayLin Project </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">
    <link rel="icon" type="image/png" href="https://cdn2.iconfinder.com/data/icons/seo-web-optomization-ultimate-set/512/custom_settings-512.png"></link>

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
    <style>
      .logo-small {
      color: #f4511e;
      font-size: 50px;
  }

    </style>
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
                    <li class="current"><a href="<?php echo base_url('index.php/m_admin') ?>"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li class="submenu">
                      <li class="#"><a href="<?php echo base_url('index.php/admin_foto') ?>"><i class="glyphicon glyphicon-picture"></i> Foto</a></li>
                      <li class="#"><a href="<?php echo base_url('index.php/admin_tips') ?>"><i class="glyphicon glyphicon-list"></i> Tips</a></li>
                      <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Komentar</a></li>
                      <li><a href="<?php echo base_url('index.php/data_user') ?>"><i class="glyphicon glyphicon-user"></i> User</a></li>     
                    </li>
                </ul>
             </div>
      </div>


        <div class="row">
          <div class="col-md-9">
            <div class="content-box-large">
              <h2>Selamat Datang Di Naylin Project Website Portofolio</h2>
      <span></span>
      <br>
          <div class="row slideanim">
    <div class="col-sm-4"><center>
      <span class="glyphicon glyphicon-picture logo-small"></span><?php foreach ($jml_foto as $foto) {?>
      <strong><h4><?php echo $foto ?> Foto</h4><strong>
      <u><p>Data Keseluruhan Foto</p></u><?php } ?>
    </div>
    <div class="col-sm-4"><center>
      <span class="glyphicon glyphicon-user logo-small"></span><?php foreach ($jml_user as $user) {?>
      <strong><h4><?php echo $user ?> User</h4><strong>
      <u><p>Data Keseluruhan User</h4></p><?php } ?>
    </div>
    <div class="col-sm-4"><center>
      <span class="glyphicon glyphicon-list logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2018 &copy <a href='#'>Website NayLinProject</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo base_url ('assets/js/bootstrap.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url ('assets/js/jquery-min.js') ?>"></script>

    <script src="<?php echo base_url ('assets/js/custom.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/tables.js') ?>"></script>
  </body>
</html>