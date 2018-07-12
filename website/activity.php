<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SCOAN GHANA</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="http://www.scoan.org">SCOAN</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">HOME <span class="sr-only">(current)</span></a> </li>
        <li><a href="activity.php">Weekly Activities</a> </li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="news.php">News</a> </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">MORE <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a> </li>
            <li><a href="#">Another action</a> </li>
            <li><a href="#">Something else here</a> </li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a> </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!-- HEADER -->
<header>
  <div class="jumbotron"></div>
</header>
<!-- / HEADER --> 

<!--  SECTION-1 -->
<section>
  <div class="container bg-warning">
    <div class="row">
      <div class="col-lg-12 page-header text-center">
        <h2>ACTIVITIES</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-6 col-lg-6">
        <blockquote>
          <h2>Monday</h2>
			<h4>General Enquiry:</h4>
			<h5>Know more about the ministry and how to visit the head quaters.</h5>
          <small>10:00AM to 1:00PM</small> </blockquote>
      </div>
      <div class="col-6 col-lg-6">
        <blockquote>
          <h2>Wednessday</h2>
			<h4>Prayer Meeting:</h4>
			<h5>Join us destroy every plan of the devil.</h5>
          <small>4:00AM to 6:00PM</small> </blockquote>
      </div>
      <div class="col-6 col-lg-6">
        <blockquote>
          <h2>Friday</h2>
			<h4>Youth Meeting:</h4>
			<h5>.</h5>
          <small>4:00AM to 6:00PM</small> </blockquote>
      </div>
      <div class="col-6 col-lg-6">
        <blockquote>
			<h2>Saturday</h2>
          <h4>Evangelical class:</h4>
			<h5>.</h5>
          <small>2:00pm to 3:00pm <cite title="Source Title">Source Title</cite></small> </blockquote>
      </div>
    </div>
    
  </div>
  <div class="jumbotron">
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="text-center">
          <p class="lead">Sign up for our news letter</p>
        </div>
        <div class=" text-center col-sm-6 col-sm-offset-3"> 
        	<div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                <span class="help-block" style="display: none;">Please enter a valid e-mail address.</span>
			</div>
			<a class="btn  btn-block btn-lg btn-success" href="#" title="">Sign up now!</a> 
        </div>
      </div>
    </div>
  </div>
  <!-- /container --> 
  <!-- / CONTAINER--> 
</section>
<!-- FOOTER -->
<div class="container-fluid bg-danger">
  <div class="row">
    <div class="col-lg-offset-3 col-xs-12 col-lg-6">
      <div class="jumbotron">
        <div class="row text-center">
          <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2>Prayer Request</h2>
          </div>
          <div class="text-center col-lg-12"> 
            <!-- CONTACT FORM https://github.com/jonmbake/bootstrap3-contact-form -->
            <form role="form" id="feedbackForm" class="text-center">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                <span class="help-block" style="display: none;">Please enter your name.</span></div>
              <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                <span class="help-block" style="display: none;">Please enter a valid e-mail address.</span></div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea rows="10" cols="100" class="form-control" id="message" name="message" placeholder="Message"></textarea>
                <span class="help-block" style="display: none;">Please enter a message.</span></div>
              <span class="help-block" style="display: none;">Please enter a the security code.</span>
              <button type="submit" id="feedbackSubmit" class="btn btn-primary btn-lg" style=" margin-top: 10px;"> Send</button>
            </form>
            <!-- END CONTACT FORM --> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="text-center bg-info">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h6>Copyright © 2017 SCOAN GH. All rights reserved.<h6>
      </div>
    </div>
  </div>
</footer>
<!-- / FOOTER --> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>
