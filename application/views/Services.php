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
      <h1 class="mt-4 mb-3">Laptop Service Center
        <small></small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="Index">Home</a>
        </li>
        <li class="breadcrumb-item active">Services</li>
      </ol>

      <!-- Image Header -->
      <img class="img-fluid rounded mb-4" src="<?php echo base_url();?>assets/img/bgsc.jpg" alt="">
        <div class="">
            <h2></h2>
            <p>Kami menyediakan layanan perbaikan laptop dengan harga yang sangat kompetitif. Jika anda mengalami masalah kerusakan laptop, kami dapat membantu. <br />
            Kami juga menerima servis laptop dalam kondisi: mati total, ganti LCD, keyboard error, hank, no charging, blank, no display, blue screen, instal ulang windows, dll.</p>
        <br />
        </div>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">PAKET LITE 150K / UNIT</h4>
            <div class="card-body">
              <p class="card-text">Pengecekan Komputer, Laptop, jaringan Internet, (Rusak Hardware 75K per case), Instal Drivers Printer, Setting Jaringan 85K per titik, Aktivasi Windows dihitung jumlah x 75K / unit, Instal Aplikasi Software Tambahan dihitung per Program 85K, Backup Data dihitung jumlah kapasitas HDD, (Jasa + Transport).</p>
            </div>
            <div class="card-footer">
              <a href="Contact" class="btn btn-primary">Contact Us to Order</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">PAKET MEDIUM 200K / UNIT</h4>
            <div class="card-body">
              <p class="card-text">Instal Windows 7/8.1/10 Pro, Ms. Office + PDF, Antivirus Free, Browser + Audio Video Player, All PC/ Laptop Drivers, (Jasa + Transport).</p>
            </div>
            <div class="card-footer">
              <a href="Contact" class="btn btn-primary">Contact Us to Order</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">PAKET FULL 250K / UNIT</h4>
            <div class="card-body">
              <p class="card-text">Bongkar Pembersihan, Instal Windows 7/8.1/10 Pro, Backup/ Restore Data 40GB, Ms. Office + PDF, Antivirus Free, Browser + Audio Video Player, All PC/ Laptop Drivers, (Jasa + Transport).</p>
            </div>
            <div class="card-footer">
              <a href="Contact" class="btn btn-primary">Contact Us to Order</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
        <div class="col-md-6">
        <img class="img-fluid" src="<?php echo base_url();?>assets/img/service.jpg" alt="">
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
