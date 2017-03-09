<?php $this->load->view('template/header');?>
 
    <div class="container">

 
 
<?php if($this->session->flashdata('item')) { ?>
<div class="alert alert-success">
<?php echo $this->session->flashdata('item'); ?>
</div>
<?php } ?>
    
		
	<center>
		<h3>Isi Buku Tamu</h3>
	</center>
	</br>
	<form class="form-horizontal" action="<?php echo base_url(). 'guestbook/tambahGuest'; ?>" method="post">
	 <div class="form-group">
		<label class="control-label col-sm-2" for="event_id">Nama Event</label>
		<div class="col-sm-6">
			<?php foreach($event as $e){ ?>
		  <input type="hidden" class="form-control" name="event_id" value="<?php echo $e->id_event ?>">
		  <input type="text" class="form-control" name="event_name" value="<?php echo $e->nama_event ?>" readonly>
				<?php } ?>
		</div>
	 </div>	
	<div class="form-group">
		<label class="control-label col-sm-2" for="nama">Nama</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control" name="nama" required>
		</div>
	  </div>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="no_telepon">Nomor Telepon</label>
		<div class="col-sm-6">
		  <input type="text" pattern="[0-9]{12}"   class="form-control" name="no_telepon" maxlength="12"  required>
		</div>
	  </div>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="nama_perusahaan">Nama Perusahaan</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control" name="nama_perusahaan" required>
		</div>
	  </div>

	  <div class="form-group">
		<label class="control-label col-sm-2" for="jabatan">Jabatan</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control" name="jabatan" required>
		</div>
	  </div>	  
	  <div class="form-group">
		<label class="control-label col-sm-2" for="email">Email</label>
		<div class="col-sm-6">
		  <input type="email" class="form-control" name="email" required>
		</div>
	  </div>

	  
	  <div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-8">
		  <button type="submit"  class="btn btn-info" value="Tambah">Save</button>
		</div>
	  </div>
	</form>	

	
	    </div> <!-- /container -->
<?php $this->load->view('template/footer');?>