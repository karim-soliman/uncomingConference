<?php include 'header.php' ?>
  <body style="padding:50px;" >
<?php include('navbar.php'); ?>
    <div class="container">
	<div class="row">
		<div class="page-header">
		  <h1>Programme</h1>
		</div>
		    <div class="col-md-4">
		    	<a href="day1.pdf" type="button" class="btn btn-primary btn-lg btn-block">Day 1 Agenda</a>
		    </div>
		    <div class="col-md-4">
		    	<a href="day2.pdf" type="button" class="btn btn-primary btn-lg btn-block">Day 2 Agenda</a>
		    </div>
		    <div class="col-md-4">
		    	<a href="day3.pdf" type="button" class="btn btn-primary btn-lg btn-block">Day 3 Agenda</a>
		    </div>
	</div>
	<hr>
	<div class="row">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<a href="programme.pdf">
						<img src="img/day1.png" alt="Programme pg1">
					</a>
				</div>

				<div class="item">
					<a href="programme.pdf">
						<img src="img/day2.png" alt="Programme pg2">
					</a>
				</div>
				<div class="item">
					<a href="programme.pdf">
						<img src="img/day3.png" alt="Programme pg3">
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
    </div>
<?php include 'footer.php' ?>
