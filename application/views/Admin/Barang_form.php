<?php $this->load->view('templates/Admin/Header'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Insert Data Barang</h1>
		</div>
		<?php $this->session->flashdata('pesan') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			
			<div class="form-group">
				<label>Gambar Barang: </label>
				<input type="file" name="filefoto" class="form-control" placeholder="Inputkan Gambar Barang">
			</div>
			<div class="form-group">
				<label>Nama Barang: </label>
				<input type="text" name="nama" class="form-control" placeholder="Inputkan Nama Barang" 
				required value="<?php echo $nama; ?>">
			</div>
			<div class="form-group">
				<label>Deskripsi Barang: </label>
				<input type="text" name="deskripsi" class="form-control" placeholder="Inputkan Deskripsi Barang" 
				required value="<?php echo $deskripsi; ?>">
			</div>
			<div class="form-group">
				<label>Harga Barang: </label>
				<input type="text" name="harga" class="form-control" placeholder="Inputkan Harga Barang" 
				required value="<?php echo $harga; ?>">
			</div>
			
			
			<input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
			<button class="btn btn-danger square-btn-adjust" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('barang')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/Admin/Footer'); ?>

