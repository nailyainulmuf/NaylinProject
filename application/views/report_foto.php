<!DOCTYPE html>
<html>
  <head>
    <title>NayLin Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <body bgcolor="white">
  	

		  	<div class="row">
      <div class="col-md-9">
            <!-- <div class="content-box-large"> -->
              <!-- <div class="panel-heading">
              <div class="panel-body"> -->
                <h1>Laporan Foto yang Terpublish</h1>
                <table class="table">
                      <thead>
                        <tr>
                          <th class= "text-center">No</th>
                          <th class= "text-center">Judul</th>
                          <th class= "text-center">Deskripsi</th>
                          <th class= "text-center">Foto</th>
                          <th class= "text-center">Kategori</th>
                          <th class= "text-center">By User</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php $id=1; foreach ($foto_list as $key) : ?>
                        <tr>
                          <td class= "text-center"><?php echo $id ?></td>
                          <td class= "text-center"><?php echo $key['judul'] ?></td>
                          <td class= "text-center"><?php echo $key['deskripsi'] ?></td>
                          <td class= "text-center"><?php echo $key['photo'] ?></td>
                          <td class= "text-center"><?php echo $key['nama_kategori'] ?></td>
                          <td class= "text-center"><?php echo $key['username'] ?></td>

                        </tr>
                        <?php $id++; endforeach?>
                      </tbody>
                    </table>
              </div>
            </div>
          </div>

  			</div>
      
  



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