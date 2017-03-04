<!DOCTYPE HTML>
<html lang="hu">
<head>
	<meta http-equiv="Content_Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>The Smart Gardener</title>
	<link href="Pictures/l.ico" rel="shortcut icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:900,400|Lato:300,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="normalize.css" />
	<link rel="stylesheet" type="text/css" href="demo.css" />
	<link rel="stylesheet" type="text/css" href="dragdealer.css" />
	<link rel="stylesheet" type="text/css" href="component.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="modernizr.custom.js"></script>
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
	<header id="header" class="codrops-header">
		<h1>The Smart Gardener</h1>
		<button class="slider-switch">Switch view</button>
	</header>
	<div id="slideshow" class="dragslider">
				<section class="img-dragger img-dragger-large dragdealer">
					<div class="handle">
						<div class="slide" data-content="content-1">
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
				</div>
			<div class='col-md-6 col-lg-6'>
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
				</div>
		</section>
	<section class="pages">
					<div class="content" data-content="content-1">
						<h1>Adatok</h1>
					</div>
				</section>
			</div>
		<script src="dragdealer.js"></script>
		<script src="classie.js"></script>
		<script src="dragslideshow.js"></script>
		<script>
			$(document).ready(function() {

				var overlay = $( 'overlay' ),
					overlayClose = overlay.querySelector( 'button' ),
					header = $( 'header' )
					switchBtnn = header.querySelector( 'button.slider-switch' ),
					toggleBtnn = function() {
						if( slideshow.isFullscreen ) {
							classie.add( switchBtnn, 'view-maxi' );
						}
						else {
							classie.remove( switchBtnn, 'view-maxi' );
						}
					},
					toggleCtrls = function() {
						if( !slideshow.isContent ) {
							classie.add( header, 'hide' );
						}
					},
					toggleCompleteCtrls = function() {
						if( !slideshow.isContent ) {
							classie.remove( header, 'hide' );
						}
					},
					slideshow = new DragSlideshow( $('slideshow' ), { 
						// toggle between fullscreen and minimized slideshow
						onToggle : toggleBtnn,
						// toggle the main image and the content view
						onToggleContent : toggleCtrls,
						// toggle the main image and the content view (triggered after the animation ends)
						onToggleContentComplete : toggleCompleteCtrls
					}),
					toggleSlideshow = function() {
						slideshow.toggle();
						toggleBtnn();
					},
					closeOverlay = function() {
						classie.add( overlay, 'hide' );
					};

				// toggle between fullscreen and small slideshow
				switchBtnn.addEventListener( 'click', toggleSlideshow );
				// close overlay
				overlayClose.addEventListener( 'click', closeOverlay );

			}());
		</script>
</body>
</html>