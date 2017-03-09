<?php $this->load->view('template/header');?>
 
    <div class="container">
<?php if(validation_errors()) { ?>
<div class="alert alert-warning">
<?php echo validation_errors(); ?>
</div>
<?php } ?>
 
 
<?php if($this->session->flashdata('item')) { ?>
<div class="alert alert-success">
<?php echo $this->session->flashdata('item'); ?>
</div>
<?php } ?>	
	
		<h3>Tambah User</h3>
	</br>

<?php echo form_open('user/tambah_aksi'); ?>
 <div class="form-group">
    <?php echo form_label('Username','username'); ?>
    <?php echo form_input(array("class"=>"form-control","name" => "username","value" => set_value('username'), "style"=>"width:600px;height:35px")); ?>
  </div>
 <div class="form-group">
    <?php echo form_label('Password','password'); ?>
    <?php echo form_password(array("class"=>"form-control","name" => "password","value" => set_value('password'), "style"=>"width:600px;height:35px")); ?>
  </div>
  <?php 
  $options = array(
        '1'         => 'Admin',
        '2'           => 'Sales',
);  
  ?>
 <div class="form-group">
    <?php echo form_label('Posisi','level'); ?></br>
    <?php echo form_dropdown('level', $options,'admin','style="width: 600px; height: 35px"'); ?>
  </div>
 <div class="form-group">
    <?php echo form_label('Nama','nama'); ?>
    <?php echo form_input(array("class"=>"form-control","name" => "nama","value" => set_value('nama'), "style"=>"width:600px;height:35px")); ?>
  </div>
 
   <button type="submit" class="btn btn-info">Submit</button>
<?php echo form_close(); ?>		
	
	    </div> <!-- /container -->
<?php $this->load->view('template/footer');?>