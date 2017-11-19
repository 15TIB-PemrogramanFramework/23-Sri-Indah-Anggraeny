<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
   <?php $this->load->view('Menu');?>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Tentang Produk yang Kami Jual
        <small></small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="Index">Home</a>
        </li>
        <li class="breadcrumb-item active">Tentang Produk</li>
      </ol>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="<?php echo base_url();?>assets/img/1.jpg" alt="">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Deskripsi Produk</h3>
          <p>Laptop adalah komputer portabel yang terintegrasi pada sebuah casing. Beratnya berkisar dari 1 hingga 6 kilogram tergantung dari ukuran, bahan dan spesifikasi. Sumber listrik berasal dari baterai atau A/C adaptor yang dapat digunakan untuk mengisi ulang baterai dan menyalakan laptop itu sendiri. Baterai Laptop pada umumnya dapat bertahan sekitar 1 hingga 6 jam bergantung pada cara pemakaian, spesifikasi, dan ukuran baterai.</p>
          <h3 class="my-3">Jenis Laptop</h3>
            
          <ul>
            <li>Ultrabook</li>
            <li>Notebook Touchscreen</li>
            <li>Performa Tinggi</li>
            <li>Performa Standar</li>
          </ul>
        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Produk Terkait</h3>

      <div class="row">
        
        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
              <img class="img-fluid" src="<?php echo base_url();?>assets/img/top.jpg" alt=""></>
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="<?php echo base_url();?>assets/img/laptop.jpg" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="<?php echo base_url();?>assets/img/lap.jpg" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="<?php echo base_url();?>assets/img/ll.jpg" alt="">
          </a>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/popper/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
