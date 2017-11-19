<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/modern-business.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    

    <div class="tagline-lower  text-expanded text-shadow text-uppercase text-black my-4 d-none d-lg-block"></div>
    <div id="logo" class="pull-left">
    <img src="<?php echo base_url();?>assets/img/logo.jpg" alt="" title="" />


    <?php $this->load->view('Menu');?>
    <!-- Gambar Utama Home -->
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid w-100" src="<?php echo base_url();?>assets/img/1.png" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-shadow">First Slide</h3>
                        <p class="text-shadow">This is the caption for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid w-100" src="<?php echo base_url();?>assets/img/22.jpg" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-shadow">Second Slide</h3>
                        <p class="text-shadow">This is the caption for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid w-100" src="<?php echo base_url();?>assets/img/8.jpg" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-shadow">Third Slide</h3>
                        <p class="text-shadow">This is the caption for the third slide.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4 text-center">Welcome to LiberCom</h1>
        <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-black my-4 d-none d-lg-block">"Barang bekas lebih baik dari pada barang KW!!!"</div>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Melayani Pembelian Laptop</h4>
                    <div class="card-body">
                        <p class="card-text">LiberCom menjual laptop second dengan berbagai merk. Untuk pemesanan caranya gampang banget! Pilih barang yang anda minati dan langsung pesan. Tersedia berbagai merk laptop berkualitas juga loh.</p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" href="Produk">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Melayani Penjualan Laptop</h4>
                    <div class="card-body">
                        <p class="card-text">
                            Laptop anda tidak terpakai??? Mending jadiin duit saja. LiberCom melayani dengan sepenuh hati :)<br />
                            Untuk penjualan langsung hubungi kami via telepon, email, media sosial atau langsung datang ke toko. Penjualan laptop hanya untuk wilayah Pekanbaru dan sekitarnya.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="Contact" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Melayani Service Laptop</h4>
                    <div class="card-body">
                        <p class="card-text">LiberCom juga melayani service laptop dengan berbagai macam kondisi loh! Harga yang ditawarkan pun sangat bersahabat. Untuk service laptop juga silahkan hubungi kami via telepon, email, media sosial atau langsung datang ke toko. </p>
                    </div>
                    <div class="card-footer">
                        <a href="Services" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- Portfolio Section -->
        <h2>Testimoni</h2>
        <div class="row">
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <img class="d-block img-fluid w-100" src="<?php echo base_url();?>assets/img/t.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Dani</h4>
                        <p class="card-text">Saya membeli laptop langsung ke toko Libercom. Layanan yang mereka berikan sangat memuaskan! Terimakasih Libercom.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <img class="d-block img-fluid w-100" src="<?php echo base_url();?>assets/img/testi2.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Putri</h4>
                        <p class="card-text">Saya memilih Libercom untuk membeli notebook karena disini laptop bergaransi panjang. Jadi apabila laptop saya bermasalah saya hanya perlu memperbaikinya di Libercom.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <img class="d-block img-fluid w-100" src="<?php echo base_url();?>assets/img/testi3.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Jaka</h4>
                        <p class="card-text">Harga yang ditawarkan Libercom sangat bersahabat dan sangat cocok buat mahasiswa seperti saya. Jadi jangan ragu untuk membeli, menjual ataupun service laptop anda di libercom.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
            </div>
        </div>
        <!-- /.row -->
        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <br />
                <br />
                <br />
                <h2>Mengapa Melakukan Jual Beli dan Service di LiberCom?</h2>
                <p>LiberCOm siap melayani anda setiap saat dan dengan sepenuh hati. Selain itu kami juga selalu menjunjung tinggi nilai-nilai etika yang baik, seperti kejujuran, ketepatan, dan profesionalitas dalam berbisnis.</p>
                
                <br />
                <h5><strong>Jual-Beli Laptop 2nd & Service Bergaransi serta Berkualitas</strong></h5>
                <ul>

                    <li>Harga Bersaing</li>
                    <li>Kualitas Prima</li>
                    <li>Bergaransi Panjang</li>
                    
                </ul>
                <p></p>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo base_url();?>assets/img/9.jpg" alt="" title="">
            </div>
        </div>

        <!-- /.row -->
        <hr>
        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
                <h5>Respon Cepat, Aman, Bergaransi</h5>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
            </div>
        </div>
    </div></div>
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
