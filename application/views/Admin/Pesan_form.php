<?php $this->load->view('templates/Admin/Header'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?php echo $button; ?> Data Pesanan</h1>
		</div>
		<?php $this->session->flashdata('pesan') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			
			<div class="form-group">
				<label>Status</label><br>
				<input type="radio" name="status" value="Sedang diproses"> Sedang diproses &nbsp;
				<input type="radio" name="status" value="Sedang dikirim"> Sedang dikirim &nbsp;
				<input type="radio" name="status" value="Dibatalkan"> Dibatalkan
			</div>			
			<input type="hidden" name="id_pesan" value="<?php echo $id_pesan; ?>">
			<button class="btn btn-danger square-btn-adjust" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('pesan')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/Admin/Footer'); ?>