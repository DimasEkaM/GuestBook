<?php $this->load->view('template/header');?>
 
    <div class="container">

	<h1>List Event</h1>


	<a href="<?php echo base_url() ?>event/tambah" class="btn btn-success" role="button">Add Event</a></br></br>
	<table class="table table-striped">
		<thead>
		<tr>
			<th>ID</th>
			<th>Nama Event</th>
			<th>Tanggal Mulai</th>
			<th>Tanggal Selesai</th>
			<th>Keterangan</th>
			<th>Operasi</th>
		</tr>
		</thead>
		<?php foreach($event as $e){ ?>
		<tbody>
		<tr>
			<td><?php echo $e->id_event ?></td>
			<td><?php echo $e->nama_event ?></td>
			<td><?php echo $e->tgl_mulai ?></td>
			<td><?php echo $e->tgl_selesai ?></td>
			<td><?php echo $e->Keterangan ?></td>
			<td>
				<span class="glyphicon glyphicon-edit">
				<?php echo anchor('event/edit/'.$e->id_event,'Update'); ?>
				</span>
			<span class="glyphicon glyphicon-trash">
			<?php echo anchor('event/hapus/'.$e->id_event,'Hapus'); ?>	</span>
			</td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
	<div class="halaman">Halaman : <?php echo $halaman;?></div>
    </div> <!-- /container -->
<?php $this->load->view('template/footer');?>