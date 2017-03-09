<?php $this->load->view('template/header');?>
 
    <div class="container">
	
	
	<center>
		<h3>Update Event</h3>
	</center>
	</br>
	<?php foreach($event as $e){ ?>
	<form class="form-horizontal" action="<?php echo base_url(). 'event/update'; ?>" method="post">
	  <div class="form-group">
		<label class="control-label col-sm-2" for="id_event">ID Event</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control" name="id_event" value="<?php echo $e->id_event ?>" readonly>
		</div>
	  </div>
	
	  <div class="form-group">
		<label class="control-label col-sm-2" for="nama_event">Nama Event</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control" name="nama_event" value="<?php echo $e->nama_event ?>">
		</div>
	  </div>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="tgl_mulai">Tanggal Mulai</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control" name="tgl_mulai" value="<?php echo $e->tgl_mulai ?>">
		</div>
	  </div>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="tgl_selesai">Tanggal Selesai</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control" name="tgl_selesai" value="<?php echo $e->tgl_selesai ?>">
		</div>
	  </div>

	  <div class="form-group">
		<label class="control-label col-sm-2" for="keterangan">Keterangan</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control" name="Keterangan" value="<?php echo $e->Keterangan ?>">
		</div>
	  </div>	  
	  <div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-8">
		  <button type="submit" class="btn btn-info" value="Tambah">Save</button>
		</div>
	  </div>
	</form>	
	<?php } ?>
	
	    </div> <!-- /container -->
<?php $this->load->view('template/footer');?>