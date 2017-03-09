<?php $this->load->view('template/header');?>
 
    <div class="container">
	

	<h1>List User</h1>
	<a href="<?php echo base_url() ?>user/tambah" class="btn btn-success" role="button">Add User</a></br></br>	
	<table class="table table-striped">
		<thead>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th>Nama</th>
			<th>Operasi</th>
		</tr>
		</thead>
		<?php foreach($user as $u){ ?>
		<tbody>
		<tr>
			<td><?php echo $u->id ?></td>
			<td><?php echo $u->username ?></td>
			<td><?php echo $u->password ?></td>
			<td><?php echo $u->level ?></td>
			<td><?php echo $u->nama ?></td>
			<td><span class="glyphicon glyphicon-edit">
			<?php echo anchor('user/edit/'.$u->id,'Update'); ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<span class="glyphicon glyphicon-trash">
			<?php echo anchor('user/hapus/'.$u->id,'Hapus'); ?>	</span>
			</td>
		</tr>
		</tbody>
		<?php } ?>
	</table>
	<div class="halaman">Halaman : <?php echo $halaman;?></div>
	</div> <!-- /container -->
<?php $this->load->view('template/footer');?>