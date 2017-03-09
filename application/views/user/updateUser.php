<?php $this->load->view('template/header');?>
 
    <div class="container">
	
	
	<center>
		<h3>Update User</h3>
	</center>
	</br>
	<?php foreach($user as $u){ ?>
	<form class="form-horizontal" action="<?php echo base_url(). 'user/update'; ?>" method="post">
	  <div class="form-group">
		<label class="control-label col-sm-2" for="id">ID</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control" name="id" value="<?php echo $u->id ?>" readonly>
		</div>
	  </div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="username">Username</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control" name="username" value="<?php echo $u->username ?>">
		</div>
	  </div>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="password">Password</label>
		<div class="col-sm-6">
		  <input type="password" class="form-control" name="password" value="<?php echo $u->password ?>">
		</div>
	  </div>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="level">Level</label>
		<div class="col-sm-6">
			  <select class="form-control" id="level" name="level">
				<option value="<?php echo $u->level ?>"><?php echo $u->level ?></option>
				<option value="1">Admin</option>
				<option value="2">Sales</option>
			  </select>
		</div>
	  </div>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="nama">Nama</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control" name="nama" value="<?php echo $u->nama ?>">
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