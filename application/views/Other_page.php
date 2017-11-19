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
      <h1 class="mt-4 mb-3">Other Page
        <small></small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="Index">Home</a>
        </li>
        <li class="breadcrumb-item active">Other Page</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
          <div class="list-group">
            <a href="Index" class="list-group-item">Home</a>
            <a href="About" class="list-group-item">About</a>
            <a href="Services" class="list-group-item">Services</a>
            <a href="Contact" class="list-group-item">Contact</a>
            <a href="Produk" class="list-group-item">Produk</a>
            <a href="Tentang_produk" class="list-group-item">Tentang Produk</a>
            <a href="Other_page" class="list-group-item active">Other Page</a>
            <a href="<?php echo base_url()."LoginMember"?>" class="list-group-item ">Login</a>
            <a href="Registrasi" class="list-group-item ">Register</a>
          </div>
        </div>
        <!-- Content Column -->
        <div class="col-lg-9 mb-4">
          


          <!-- Preview Image -->
          <img class="img-fluid rounded" src="<?php echo base_url();?>assets/img/lib.jpg" alt=""></div>

          <hr>


          <!-- Post Content -->
          <p class="lead">Libercom adalah toko komputer yang menyediakan jual beli laptop bekas yang berkualitas dan juga menyediakan layanan jasa service.</p>

          <p>Jual beli laptop bisa langsung antar ketoko, Go Send dan COD, begitu juga untuk layanan jasa service. Pada sistem ini untuk pembelian laptop hanya dapat melakukan pemesanan sementara untuk transaksi pembayaran dapat dilakukan dengan transfer atau cash. Untuk penjualan dan jasa service dapat mengubungi kami via email, media sosial dan telepon.</p>

          
          </div>
        </div>
      </div>
      <!-- /.row -->
      </div>
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
