<!DOCTYPE HTML>
<html lang="hu">
<head>
	<meta http-equiv="Content_Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>The Smart Gardener</title>
	<link href="Pictures/logo.ico" rel="shortcut icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="animation.css">
	<link rel="stylesheet" href="demo.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="transitions.js"></script>
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
		</div>
	</nav>	
	<article class="kontext">
		<div class="layer one show">
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
	<div class="layer two">
		<h1>Adatok</h1>
	</div>
	</article>
	<ul class="bullets"></ul>
	
	<script>
		$(document).ready(function(){
			// Create a new instance of kontext
			var k = kontext( document.querySelector( '.kontext' ) );

			var bulletsContainer = document.body.querySelector( '.bullets' );

			// Create one bullet per layer
			for( var i = 0, len = k.getTotal(); i < len; i++ ) {
				var bullet = document.createElement( 'li' );
				bullet.className = i === 0 ? 'active' : '';
				bullet.setAttribute( 'index', i );
				bullet.onclick = function( event ) { k.show( event.target.getAttribute( 'index' ) ) };
				bullet.ontouchstart = function( event ) { k.show( event.target.getAttribute( 'index' ) ) };
				bulletsContainer.appendChild( bullet );
			}

			// Update the bullets when the layer changes
			k.changed.add( function( layer, index ) {
				var bullets = document.body.querySelectorAll( '.bullets li' );
				for( var i = 0, len = bullets.length; i < len; i++ ) {
					bullets[i].className = i === index ? 'active' : '';
				}
			} );

			document.addEventListener( 'keyup', function( event ) {
				if( event.keyCode === 37 ) k.prev();
				if( event.keyCode === 39 ) k.next();
			}, false );

			var touchX = 0;
			var touchConsumed = false;

			document.addEventListener( 'touchstart', function( event ) {
				touchConsumed = false;
				lastX = event.touches[0].clientX;
			}, false );

			document.addEventListener( 'touchmove', function( event ) {
				event.preventDefault();

				if( !touchConsumed ) {
					if( event.touches[0].clientX > lastX + 10 ) {
						k.prev();
						touchConsumed = true;
					}
					else if( event.touches[0].clientX < lastX - 10 ) {
						k.next();
						touchConsumed = true;
					}
				}
			}, false );
			});
		</script>
</body>
</html>