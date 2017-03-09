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
	

		<h3>Tambah Event</h3>
	</br>

<?php echo form_open('event/tambah_aksi'); ?>
 <div class="form-group">
    <?php echo form_label('Nama Event','nama_event'); ?>
    <?php echo form_input(array("class"=>"form-control","name" => "nama_event","value" => set_value('nama_event'), "style"=>"width:600px;height:35px")); ?>
  </div>
  <div class="form-group">
    <?php echo form_label('Tanggal Mulai','tgl_mulai'); ?>
	<div class='input-group date' id='datepicker2'>
    <?php echo form_input(array("class"=>"form-control","name" => "tgl_mulai","value" => set_value('tgl_mulai'),"style"=>"width:600px;height:35px")); ?>
					<span class="input-group-addon" style="float: left;width:35px;height:35px">
					<span class="glyphicon glyphicon-calendar"></span>
					</span>	
	</div>
  </div>
  <div class="form-group">
    <?php echo form_label('Tanggal Selesai','tgl_selesai'); ?>
	<div class='input-group date' id='datepicker'>
    <?php echo form_input(array("class"=>"form-control","name" => "tgl_selesai","value" => set_value('tgl_selesai'),"style"=>"width:600px;height:35px")); ?>
					<span class="input-group-addon" style="float: left;width:35px;height:35px">
					<span class="glyphicon glyphicon-calendar"></span>
					</span>	
	</div>
  </div>
 <div class="form-group">
    <?php echo form_label('Keterangan','keterangan'); ?>
    <?php echo form_input(array("class"=>"form-control","name" => "keterangan", "value" => set_value('keterangan'),"style"=>"width:600px;height:35px")); ?>
  </div>  
 
   <button type="submit" class="btn btn-info">Submit</button>
<?php echo form_close(); ?>	
	

	
	    </div> <!-- /container -->
<?php $this->load->view('template/footer');?>