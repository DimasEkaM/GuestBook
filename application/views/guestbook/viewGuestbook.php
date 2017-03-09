<?php $this->load->view('template/header');?>
 
    <div class="container">
	
	<h1>List Guest</h1>
	<table class="table table-striped">
		<thead>	
		<tr>
			<th>ID</th>
			<th>Nama Event</th>
			<th>Nama</th>
			<th>No Telepon</th>
			<th>Nama Perusahaan</th>
			<th>Jabatan</th>
			<th>Email</th>
			<th>Created Time</th>
			<th>Nama Sales</th>
		</tr>
		</thead>
		<?php foreach($guestbook as $g){ ?>
		<tbody>
		<tr>
			<td><?php echo $g->id ?></td>
			<td><?php echo $g->event_id ?></td>
			<td><?php echo $g->nama ?></td>
			<td><?php echo $g->no_telepon ?></td>
			<td><?php echo $g->nama_perusahaan ?></td>
			<td><?php echo $g->jabatan ?></td>
			<td><?php echo $g->email ?></td>
			<td><?php echo $g->datetime ?></td>
			<td><?php echo $g->nama_sales ?></td>
		</tr>
		</tbody>
		<?php } ?>
	</table>
		<?php 
	echo $this->pagination->create_links();
	?>
    </div> <!-- /container -->
<?php $this->load->view('template/footer');?>