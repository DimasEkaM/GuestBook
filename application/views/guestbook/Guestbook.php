<?php $this->load->view('template/header');?>
 
    <div class="container">

	<h1>Pilih Event</h1>
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
				<a href="<?php echo base_url() ?>guestbook/addGuest/<?php echo $e->id_event;?>" class="btn btn-info" role="button">Add Guest</a>
				<a href="<?php echo base_url() ?>guestbook/pagination2/<?php echo $e->id_event;?>" class="btn btn-warning" role="button">List Guest</a>
			</td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
	
    </div> <!-- /container -->
<?php $this->load->view('template/footer');?>