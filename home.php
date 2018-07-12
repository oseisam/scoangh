<!doctype html>
<html>
<head>
	
<?php include 'header.php'; ?>
	
</head>

<body>
	<header>
	 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Fixed navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
       <?php include 'menu.php';?>
      </div>
		  </nav>
	</header>
	
	 <main role="main">
	<!-- slide-->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
			
	<?php include 'slide.php';?>
	 </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
	
	
	
	
	
	 <div class="grid-container justify-content-md-center hide hover ">
		
    <div class="row">
     
		  <img class="img" alt="140x140" style="width: 200px; height: 200px;" src="images/news.jpg" data-holder-rendered="true">  
     
     
		  <img class="img" alt="140x140" style="width: 200px; height: 200px;" src="images/partner.jpg" data-holder-rendered="true">
      
     
		  <img class="img" alt="140x140" style="width: 200px; height: 200px;" src="images/gallery.jpg" data-holder-rendered="true">
     
     
		  <img class="img" alt="140x140" style="width: 200px; height: 200px;" src="images/tbj1.jpg" data-holder-rendered="true">
     
		 </div>
    </div>
	
	
		<div class="quote-container">
   
    <div class="flex-row">
      <div class="container col-5">
        <blockquote>
          <strong></strong>
          <small>Someone famous in <cite title="Source Title">Source Title</cite></small> </blockquote>
		  
      </div>
	<?php include_once"prayer-request.php";?>
    </div>
    
  </div>
	
	
	 <div class="jumbotron">
    <div class="container-fluid">
      <div class="flex-column">
        <div class="text-center">
          <p class="lead">Sign up for our news letter</p>
        </div>
        <div class="mail text-center col-sm-5 col-sm-offset-3"> 
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
		
		
  
	

	
	
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
</body>
</html>