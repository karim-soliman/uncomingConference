<?php include 'header.php' ?>
  <body style="padding: 50px;">
<?php include('navbar.php'); ?>
    <div class="container">
	    <div class="row">
		<div class="page-header">
		  <h1>Conference Brochure</h1>
		</div>
	    </div>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <a href="brochure.pdf">
	      <img src="img/brochure1.jpg" alt="Brochure pg1">
	      </a>
	    </div>

	    <div class="item">
	      <a href="brochure.pdf">
	      <img src="img/brochure2.jpg" alt="Brochure pg2">
              </a>
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
    </div>
<?php include 'footer.php' ?>
