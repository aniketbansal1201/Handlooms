<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="styling.css" rel="stylesheet" >
<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=David+Libre&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">

</head>

<body>
<div id="brand" class="intro-text text-center">Handlooms</div>
<div id="brandaddress" class="intro-text text-center">Defence Colony</div>

<?php require_once 'nav.php';?>

<div class="container">
	<div 	class="boxy">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
 
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="item active">
        <img src="pic.jpeg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="pic2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="pic3.png" alt="New york" style="width:100%;">
      </div>
    </div>


    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  

  </div>

  <h2 class="brand-before text-center"><small>Welcome To</small></h2>
<h1 class="brand-name text-center"  id="brand">Handlooms</h1>
<h2 class="intro-text text-center"><small>By 	<strong>ANIKET</strong></small></h2>
<hr class="taglin-divider">
</div>

</div>
<div class="container">
	<div class="row">
		<div class="boxy">
			<div class="col-lg-12">
				<hr>
				<h2 class="hand intro-text text-center">
					ABOUT <strong> HANDLOOMS</strong>
				</h2>
				<hr>
			</div>

			<div class="col-lg-6">
			<img class="img-responsive img-border-left" src="pic.jpeg">				
			</div>
			<div class="col-lg-6">
				<p>A handloom sari is often woven on a shuttle-pit loom made from ropes, wooden beams and poles.[2] The shuttle is thrown from Tarsbhullar[clarification needed] side-to-side by the weaver. Other weavers use a fly-shuttle loom which can produce different types of patterns. The saris can vary in size and quality.</p>
				
			</div>
		</div>
		

	</div>

	
</div>


<footer>
<h2 class="intro-text text-center">
			paragarh			
		</h2>
	
</div>


	
</footer>



</body>
</html>