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
      <h1 class="mt-4 mb-3">Contact
        <small>Us</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="Index">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.68353446839!2d101.36980361470823!3d0.47096049965639875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a845e65964db%3A0x6487607f6751c820!2sJl.+Merpati+Sakti%2C+Simpang+Baru%2C+Tampan%2C+Kota+Pekanbaru%2C+Riau%2C+Indonesia!5e0!3m2!1sen!2sus!4v1508519938023" width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Contact Details</h3>
          <p>
              Jl.Merpati Sakti
              <br> Simpang Baru, Tampan, Pekanbaru,
            <br>Riau, 28293
            <br>
          </p>
          <p>
            <abbr title="Phone">Phone, COD, WhatsApp & Line</abbr>: 081266420048
          </p>
          <p>
            <abbr title="Email">Email</abbr>:
            <a href="libercom@gmail.com">libercom541@gmail.com
            </a>
          </p>
          
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      
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

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="<?php echo base_url();?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url();?>assets/js/contact_me.js"></script>

  </body>

</html>
