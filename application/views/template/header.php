<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="FaberNainggolan">
    <title>Atap Teduh Lestari</title>
    <!-- Bootstrap core CSS -->
	<link href = "<?php echo base_url() ?>assets/css/jquery-ui.css" rel = "stylesheet">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<!--  Datepicker -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<!--  jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

	<!-- Bootstrap Date-Picker Plugin -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
	<script>
	 $(document).ready (function(){
            $("#success-alert").hide();
            $("#myWish").click(function showAlert() {
$("#success-alert").fadeTo(10000, 10000).slideUp(1000, function(){
    $("#success-alert").slideUp(10000);
}); 
							
                  });       
                    });
	
	</script>
  </head>
 
  <body>
    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Atap Teduh Lestari</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url() ?>dashboard"><i class="glyphicon glyphicon-home"></i> Home</a></li>
				<?php
				if($this->session->userdata('level') == "1"){

				?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Data Event <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url('event'); ?>">Kelola Event</a></li>

					<li><a href="<?php echo base_url() ?>event/tambah">Tambah Event</a></li>

              </ul>
            </li>	

				<?php
				}
				?> 			
			
				<?php
				if($this->session->userdata('level') == "1"){

				?>			
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Data User <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">


					   <li><a href="<?php echo base_url() ?>user">Kelola User</a></li>
	  
			  

					<li ><a href="<?php echo base_url() ?>user/tambah" disabled>Tambah User</a></li>

				
              </ul>
            </li>					
							<?php
				}
				?> 

     
            <li><a href="<?php echo base_url() ?>guestbook">Guestbook</a></li>
			
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">[<?php echo $this->session->userdata("nama"); ?>] <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
