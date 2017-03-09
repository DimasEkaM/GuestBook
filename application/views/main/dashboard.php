<?php $this->load->view('template/header');?>
 
    <div class="container">
	
	<!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron">
			<h1>PT.Atap Teduh Lestari</h1>
			<p>Sistem Informasi Event dan Guestbook</p>





		</div>

		


	
	<div id="myCarousel" class="carousel slide" data-ride="carousel"
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo base_url() ?>assets/img/carousel1.png" alt="Chania" height="5000" width="500">
    </div>

    <div class="item">
      <img src="<?php echo base_url() ?>assets/img/iko-roof-shingles.jpg" alt="Chania" height="5000" width="500">
    </div>

    <div class="item">
      <img src="<?php echo base_url() ?>assets/img/1.jpg" alt="Flower">
    </div>
    <div class="item">
      <img src="<?php echo base_url() ?>assets/img/2.jpg" alt="Flower">
    </div>
    <div class="item">
      <img src="img_flower2.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>

  
  
      </div> <!-- /container -->
<?php $this->load->view('template/footer');?>
