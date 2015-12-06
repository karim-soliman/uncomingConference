<!-- Nav bar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsed_nav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">ICNTSE</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="collapsed_nav">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Call For Papers<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="home.php#confTopics">Topics</a></li>
            <li><a href="home.php#callPapers">Important Dates</a></li>
            <li><a href="fees.php">Fees</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="registration.php">Registration</a></li>
            <li><a href="abstract.php">Abstract Submission</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="poster.php">Poster Guidelines</a></li>
            <li><a href="poster.php#paperGuidelines">Paper Guidelines</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="brochure.php">Brochure</a></li>
            <li><a href="programme.php">Programme</a></li>
            <li><a href="keynote.php">Keynote Speakers</a></li>
            <li><a href="committees.php">Committees</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="home.php#sponsors">Sponsors</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="home.php#venue">Venue & Accommodation</a></li>
            <li><a href="aboutalex.php">About Alexandria</a></li>
          </ul>
        </li>
     	<li><a href="" data-toggle="modal" data-target="#contact-us">Contact us</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- end of nav -->

<?php include('contactus_modal.php');?>
