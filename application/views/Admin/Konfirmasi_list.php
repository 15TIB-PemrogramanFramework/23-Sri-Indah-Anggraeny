<?php $this->load->view('templates/Admin/Header');?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Konfirmasi Pemesanan</h1>
		</div><?=$this->session->flashdata('pesan')?>	
	</div>
	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID konfirmasi</th>
					<th>ID Pemesanan</th>
					<th>Nama Member</th>
					<th>Jumlah Pesanan</th>
					<th style="width:200px">Bukti Pembayaran</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($konfirmasi as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_konfirmasi; ?></td>
					<td><?php echo $value->id_pesan; ?></td>
					<td><?php echo $value->nama; ?></td>
					<td><?php echo $value->jumlah; ?></td>
					<td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->gambar; ?>"></td>
					<td><a href="<?php echo site_url('konfirmasi/delete/'.$value->id_konfirmasi); ?>"
							class="btn btn-danger square-btn-adjust">
							<i class="fa fa-trash-o" aria-hidden="true"></i>
						</a>
					<a href="<?php echo site_url('konfirmasi/download/'.$value->id_konfirmasi); ?>" class="btn btn-info">Download</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<?php $this->load->view('templates/Admin/Footer'); ?>
	<script type="text/javascript">
	$(document).ready(function () {
		$('#example').DataTable();
	});
</script>