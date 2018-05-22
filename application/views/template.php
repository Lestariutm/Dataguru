<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selamat Datang di Sistem Data Guru</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active">
              <?php echo anchor('Dashboard','Home'); ?>
            </li>
            <li>
              <?php echo anchor('Dataguru','Data Guru'); ?>
            </li>
            <li>
              <?php echo anchor('Guruppl','Data Guru PPL'); ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="container">
      <?php $this->load->view($content); ?>

    </div>

    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>