<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>Registrasi form using HTML5 and CSS3</title>
  
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
  
     <link rel="stylesheet" href="<?php echo base_url();?>assets/css_login/style.css">

  
</head>

<body>
  <?php $this->load->view('Menu');?>

<br><br><br><br><br><br>

        <div class="container">

    


		<!--_______________________________________Register_________________________________ -->

<br>
<center>

					<section id="content">
					<form action="<?php echo base_url(). 'Member/daftar_aksi'; ?>" method="post">
						 <h1>Form Registrasi</h1>
						<table>
							<tbody>
							<tr> <td> Nama </td>
								<td> : 	</td>
								<td> <div class="">
									<input type="text" class="form-control" name="nama" placeholder="Nama" size="50">
								</div></td>
							</tr>

							<tr> <td> Email </td>
								<td> : </td>
								<td> <div class="">
									<input type="text" class="form-control" name="email" placeholder="Email" size="50">
								</div></td>
							</tr>

							<tr> <td> Alamat </td>
								<td> : </td>
								<td><div class="">
									<input type="text" class="form-control" name="alamat" placeholder="Alamat" size="50">
								</div></td>
							</tr>

							<tr> <td> Username </td>
								<td> : </td>
								<td> <div class="">
									<input type="text" class="form-control" name="username" placeholder="Username" size="50">
								</div></td>
							</tr>

								<tr> <td> Password </td>
								<td> : </td>
								<td><div class="">
									<input type="password" class="form-control" name="password" placeholder="Password" size="50">
								</div></td>
							</tr>

							

							<tr> <td></td>
								<td><td><center><input type="submit" class="" value="DAFTAR" /></center></td></td>
								<td></td>
							</tr>
						</table>
					</form>
					
				</center></section>
			</div>
		</div>
	</div>
	<BR>
	<BR>
	
 <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
        </div>
        <!-- /.container -->
    </footer>

    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/popper/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>