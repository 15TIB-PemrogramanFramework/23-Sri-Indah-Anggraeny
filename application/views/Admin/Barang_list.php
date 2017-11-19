<?php $this->load->view('templates/Admin/Header');?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Barang</h1>
		</div><?=$this->session->flashdata('pesan')?>	
		<div class="col-md-12 text-right">
		<a href="<?php echo site_url('barang/tambah'); ?>" class="btn btn-danger square-btn-adjust" 
		style="margin-top:20px; margin-bottom:20px">
		<i class="fa fa-plus-circle"></i> Insert</a>
		</div>	

	</div>
	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th style="width: 10px">ID</th>
					<th style="width:200px">Gambar</th>
					<th>Nama</th>
					<th>Deskripsi</th>
					<th>Harga</th>
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($barang as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_barang; ?></td>
					<td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->gambar_barang; ?>"></td>
					<td><?php echo $value->nama_barang; ?></td>
					<td><?php echo $value->deskripsi_barang; ?></td>
					<td><?php echo $value->harga_barang; ?></td>
						<td>
						<a href="<?php echo site_url('barang/delete/'.$value->id_barang); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash-o" aria-hidden="true"></i>
						</a>
						<a href="<?php echo site_url('barang/update/'.$value->id_barang); ?>"
							class="btn btn-warning">
							<i class="fa fa-pencil-square"></i>
						</a>
					</td>	
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