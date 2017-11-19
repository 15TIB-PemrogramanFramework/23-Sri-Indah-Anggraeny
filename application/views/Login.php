<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login form using HTML5 and CSS3</title>
  
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css_login/style.css">

</head>
<body>
  <?php $this->load->view('Menu');?>
  <br><br><br><br><br>
  <div class="container">

    <br><br><br><br><br>
    <section id="content">
      <form role="form" method="post" action="">
        <h1>Login Form</h1>
        <div>
          <input type="text" placeholder="Username" required="" name="username" />
        </div>
        <div>
          <input type="password" placeholder="Password" required="" name="password" />
        </div>
        <div>
          <input type="submit" value="Log in" />
          <a href="<?php echo base_url()."Welcome/Registrasi";?>">Register</a>
        </div>        
      </form><!-- form -->
    </section><!-- content -->
    <br><br>
  </div><!-- container --><br><br><br>

  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
  </footer>

  <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/popper/popper.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
