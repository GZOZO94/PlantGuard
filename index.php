<!DOCTYPE HTML>
<html lang="hu">
<head>
	<meta http-equiv="Content_Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>The Smart Gardener</title>
	<link href="Pictures/logo.ico" rel="shortcut icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="Java/my_jquery.js"></script>
	<link rel="stylesheet" href="Style/style.css" type="text/css">
	<script>
	
	$(document).ready(function(){
		$(".navbar-brand").click(function(e){
			e.preventDefault();
			var destId=e.currentTarget.id+"Section";

			$("html, body").animate({
				scrollTop: $("#"+destId).offset().top
			},1000);
		});
	});
	</script>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" data-target="#hide" data-toggle="collapse" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a id="about" href="#aboutSection" class="navbar-brand">The Smart Gardener</a>
			</div>
			<div class="collapse navbar-collapse" id="hide">
				<ul class="nav navbar-nav">
				
				</ul>
				<ul class="nav navbar-nav navbar-right">
					
				</ul>
			</div>
		</div>
	</nav>	
	<div class="container-fluid">
		<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="Pictures/default.jpg" class='img img-responsive center-block' alt="TFS">
					<div class="carousel-caption">
						<h3>The Smart Gardener</h3>
						<p>Save the world, save your plants!</p>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		<div class='col-md-6 col-lg-6'>
		</div>
		</div>
		</div>
		</div>
	</div>
	<div id="aboutSection" class="container-fluid">
		<h2>Rólunk <small>The Smart Gardener</small></h2>
		<blockquote class="well text-center">
			
		</blockquote>
	</div>
	<div class="container-fluid text-center">
		<p>Copyright &copy; The Smart Gardener 2017</p>
	</div>
</body>
</html>