<html>
<head>
	<title>ICNTSE</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/carousel.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/parallax.css">

	
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	
</head>
<body style="padding:50px;">
<?php include('navbar.php'); ?>	

<!-- Carousal -->
<div class="container">
<div class="row">
                    <div class="col-md-12" data-wow-delay="0.2s">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/rssems/128.jpg" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adellecharles/128.jpg" alt="">
                                </li>
                            </ol>

                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center">

                                <!-- Quote 1 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <!-- Carousel Buttons Next/Prev -->
                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
</div>
<!-- End of Carousal -->
<!-- parallax -->
    <main>
      <section class="module parallax parallax-1">
        <div class="container">
          <h1>ICTNE</h1>
        </div>
      </section>
  </main>
<!-- end of parallax -->
<div  id="alex" class= "container">
	<hr class="featurette-divider">

      <divclass="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">About Alexandria. <span class="text-muted">The bride of the mediterranean.</span></h2>
          <p class="lead">Alexandria is the largest city on the Mediterranean Coast and the second largest city in Egypt, extending about 32 km (20 mi) along the coast. Founded 331 BC by Alexander the Great, it remained the capital of Hellenistic and Roman and Byzantine Egypt for almost 1000 years. Hellenistic Alexandria was best known for the Lighthouse of Alexandria (Pharos), one of the Seven Wonders of the Ancient World ... <a class="btn btn-info btn-sm" href="aboutalex.php" role="button">Read more</a></p>
        </div>
        <div class="col-md-5">
          <!-- Alexandria carousal -->
          <div id = "alex_carousal" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/alex.jpg">
      <div class="carousel-caption">
        El Raml Station
      </div>
    </div>
    <div class="item">
      <img src="img/AlexandriaLibrary2.jpg">
      <div class="carousel-caption">
        Bibliotheca Alexandria 
      </div>
    </div>
    <div class="item">
      <img src="img/stanley.jpg">
      <div class="carousel-caption">
        Stanley Bridge   
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#alex_carousal" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#alex_carousal" role="button" data-slide="next">
    <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> <!-- end of carousal Alexandria -->
        </div> <!-- end of col-md-5 -->
      </div>

      <div  id="confTopics"></div>
      <hr class="featurette-divider">

      <div  class="row featurette">
        <div class="col-md-9 col-md-push-3">
          <h2 class="featurette-heading">The Conference Topics.</h2>
          <p class="lead">The conference is specifically designed to focus on the issues related to energy and energy conservation. Industry leaders, engineers and academics will discuss in this conference the latest developments in the use and production of renewable energy and ways of energy conservation.</p>
			 <div class="panel-group" id="" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingOne">
			      <h4 class="panel-title">
			        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			          <b>Power and Energy Engineering</b>
			        </a>
			      </h4>
			    </div>
			    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
			      <div class="panel-body">
			      	<ul>
			      		<li>Innovation in Energy Technology</li>
			      		<li>Power Systems and Automation</li>
			      		<li>Centralized and Decentralized Energy Systems</li>
			      		<li>Power System Quality</li>
			      		<li>Nuclear Power</li>
			      		<li>Clean Coal Technologies in Power Generation</li>
			      		<li>Energy Economics</li>
			      	</ul>
			      </div>
			    </div>
			  </div>
			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingTwo">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			          <b>Renewable Energy Technologies Applications and Integration</b>
			        </a>
			      </h4>
			    </div>
			    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
			      <div class="panel-body">
			      	<ul>
			      		<li>Hybrid Power Systems</li>
			      		<li>Photovoltaic Solar Power Systems</li>
			      		<li>Thermal Solar Energy</li>
			      		<li>Wind Energy Technology and Applications</li>
			      		<li>Intelligent Control for Renewable Energy</li>
			      		<li>Hydrogen fuel</li>
			      		<li>Fuel Cells Technology and Applicationsli</li>
			      		<li>Smart Grids, Micro Grids, and others</li>
			      	</ul>
			      </div>
			    </div>
			  </div>
			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingThree">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
			          <b>Energy Management</b>
			        </a>
			      </h4>
			    </div>
			    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			      <div class="panel-body">
			      	<ul>
			      		<li>Energy and Sustainable Development</li>
			      		<li>Green Energy Technologies</li>
			      		<li>Energy and Environment</li>
			      		<li>Clean Transportation Fuels</li>
			      		<li>Energy challenges in the urbanization process</li>
			      		<li>Building Efficiency Technologies</li>
			      	</ul>
			      </div>
			    </div>
			  </div>
			   <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingFour">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
			         <b>Energy & Sustainable Development</b>
			        </a>
			      </h4>
			    </div>
			    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
			      <div class="panel-body">
			      	<ul>
			      		<li>Energy Audit and On-site Measurement</li>
			      		<li>Energy Management & Policies</li>
			      		<li>Energy Analysis & Energy Efficiency</li>
			      		<li>Energy Sustainability in developing countries</li>
			      		<li>National Energy Strategy and Decision making</li>
			      		<li>Regional Issues, Economics & Policies</li>
			      	</ul>
			      </div>
			    </div>
			  </div>
			     <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingFive">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
			          <b>BioEnergy</b>
			        </a>
			      </h4>
			    </div>
			    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
			      <div class="panel-body">
			      	<ul>
			      		<li>BioDiesel</li>
			      		<li>BioFuels</li>
			      		<li>BioRefinery</li>
			      	</ul>
			      </div>
			    </div>
			  </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingSix">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                <b>Energy Sotrage</b>
              </a>
            </h4>
          </div>
          <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
            <div class="panel-body">
              <ul>
                <li>Physical Energy Storage</li>
                <li>Chemical Energy Storage</li>
              </ul>
            </div>
          </div>
        </div>
			</div>
        </div>

        <div class="col-md-3 col-md-pull-9">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="img/qutim-conference-icon.png">
        </div>
      </div>
      <div id = "callPapers"></div>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-10">
          <h2 class="featurette-heading">Important Dates</h2>
          <table class="table">
          	<tr><th>Date</th><th>Event</th></tr>
          	<tr><td>February 15, 2016</td><td>Abstract Submission Deadline</td></tr>
          	<tr><td>March 20, 2016</td><td>Last Notification for Abstract Acceptance*</td></tr>
          	<tr><td>May 15, 2016</td><td>Full Paper Submission Deadline</td></tr>
          	<tr><td>July 15, 2016</td><td>Last Notification for Full-Paper Acceptance**</td></tr>
          	<tr><td>August 15, 2016</td><td>Payment Deadline</td></tr>
          	<tr><td>August 31, 2016</td><td>Letter of Final Acceptance***</td></tr>
          	<tr><td>September 15, 2016</td><td>Conference Program</td></tr>
          	<tr><td>October 1, 2016</td><td>Conference Launch</td></tr>
		  </table>
      <h4>
        *Acceptance is issued once a positive feedback is received from the reviewing committee<br>
        **Late payment fees are mandatory after this date<br>
        ***Will not be issued without completing the fees, and approval of the Full-Paper
      </h4>
        </div>
        <div class="col-md-2">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="img/calendar-icon.png">
        </div>
      </div>
      <div id="venue"></div>
      <hr class="featurette-divider">
</div>

  <div class="row">
    <div class="col-md-7">
      <h1>Venue & Accommodation</h1>
      <h4>
        The venue of this conference is Alexandria "The Mediterranean Pearl". It is a thriving city, rich in beauty, heritage, culture and history as it has been Egypt's prime gate throughout history that prevailed for centuries as the world's greatest repository of knowledge and exporter of culture. We look forward to seeing you this October in our beautiful city. 

        <br><br>Special rates for the accommodation for our participants are in:
        <br>
        <ul>
          <li><h4>Hilton Green Plaza: <a class="btn btn-sm btn-info" href="http://www.ar.hilton.com/en/hotel/Hilton-Alexandria-Green-Plaza">Click here</a></h4></li>
          <li><h4>Green Plaza Inn: <a class="btn btn-sm btn-info" href="http://www.greenplazainn.com/">Click here</a></h4></li>
        </ul>
      </h4>
    </div>
    <div class="col-md-4"><img src="img/hilton.jpg" class="img-responsive img-thumbnail"></div>
  </div>
<hr>

<div class="container">
  <div id="sponsers"></div>
<div class="row">
	<h1 align="center">Sponsers</h1>
 </div>
      <!-- Three columns of text below circle pictures -->
      <div class="row">
        <div class="col-md-4">
          <img class="img-circle center-block" src="img/logo.png" width="140" height="140">
          <h3 align="center">Schenider</h3>
          
        </div><!-- /.col-md-4 -->
        <div class="col-md-4">
          <img class="img-circle center-block" src="img/logo.png" width="140" height="140">
          <h3 align="center">ABB</h3>
          
        </div><!-- /.col-md-4 -->
        <div class="col-md-4">
          <img class="img-circle center-block" src="img/logo.png" width="140" height="140">
          <h3 align="center">Sponser 3</h3>
         
        </div><!-- /.col-md-4 -->
      </div><!-- /.row -->
  </div>



<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
