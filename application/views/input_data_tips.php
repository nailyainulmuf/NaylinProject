<!DOCTYPE html>
<html>
  <head>
    <title>NayLin Project </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--icon nama web-->
  <link rel="icon" type="image/png" href="https://cdn2.iconfinder.com/data/icons/seo-web-optomization-ultimate-set/512/custom_settings-512.png"></link>
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <link href="<?php echo base_url ('assets/css/bootstrap.css') ?>" rel="stylesheet">
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
                    <li class="current"><a href="<?php echo base_url('index.php/admin_tips') ?>"><i class="glyphicon glyphicon-list"></i> Tips</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Komentar</a></li>
                    <li class="#"><a href="<?php echo base_url('index.php/data_user') ?>"><i class="glyphicon glyphicon-tasks"></i> User</a></li>     
                    </li>
                </ul>
             </div>
      </div>


        <div class="row">
          <div class="col-md-9">
            <div class="content-box-large">
              <h1>Tambah Data Tips</h1>
    
      <?php echo form_open_multipart('admin_tips/create'); ?>

        <?php echo validation_errors(); ?>
          <div class="form-group">
            <label for="">Judul Tips</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Tips disini">
          </div>
          <div class="form-group">
                    <label for="">Tips</label>
                      <textarea class="form-control" type="text" id="tips" name="tips" placeholder="Masukkan Isi Tips disini" rows="10"></textarea>
                      <input type="hidden" class="form-control" id="fk_user" name="fk_user" value="<?php echo $id_user ?>">
                    </div>
        
          <button type="Submit" class="btn btn-primary">Simpan</button>
          <a href="<?php echo base_url('index.php/admin_tips/') ?>" class="btn btn-info">Kembali</a>
      <?php echo form_close(); ?>
        </div>

      </div>
    </div>
    </div>

    <footer>
        <div class="container">
         
            <div class="copy text-center">
               Copyright &copy 2018 <a href='#'>Website NayLinProject</a>
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