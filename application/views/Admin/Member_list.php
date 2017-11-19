<?php $this->load->view('templates/Admin/Header');?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Member</h1>
		</div><?=$this->session->flashdata('pesan')?>	
	</div>
	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID Member</th>
					<th>Nama Member</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Username</th>
					<th>Password</th>
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($member as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_member; ?></td>
					<td><?php echo $value->nama; ?></td>
					<td><?php echo $value->email; ?></td>
					<td><?php echo $value->alamat; ?></td>
					<td><?php echo $value->username; ?></td>
					<td><?php echo $value->password; ?></td>
					<td>
						<a href="<?php echo site_url('member/delete/'.$value->id_member); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash-o" aria-hidden="true"></i>
						</a>
						<a href="<?php echo site_url('member/update/'.$value->id_member); ?>"
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