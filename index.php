
<!DOCTYPE HTML>
<html lang="en" >
<head>
	<meta http-equiv="Content_Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>The Smart Gardener</title>
	<link href="Pictures/l.ico" rel="shortcut icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
				<a id="about" href="#aboutSection" class="navbar-brand" style="text-align: center">The Smart Gardener</a>
			</div>

		</div>
	</nav>
	<div class="container-fluid">
		<div class="row ">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div id="myCarousel" class="carousel slide " data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox" >
						<div class="item active">
							<img src="Pictures/logo.jpg" class='img img-responsive center-block' alt="TSG" data-toggle="modal" data-target="#myModal" style='width:100%;height:30em'>
							<div class="carousel-caption">
								<h3>The Smart Gardener</h3>
								<p>Save the world, save your plants!</p>
							</div>
						</div>
						<div class="item">
							<img src="Pictures/default.jpg" class='img img-responsive center-block' alt="TSG" data-toggle="modal" data-target="#myModal" style='width:100%;height:30em'>
							<div class="carousel-caption">
								<h3>The Smart Gardener</h3>
								<p>Save the world, save your plants!</p>
							</div>
						</div>
						<div class="item">
							<img src="Pictures/default2.jpg" class='img img-responsive center-block' alt="TSG" data-toggle="modal" data-target="#myModal" style='width:100%;height:30em'>
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
			</div>
			<div class="clearfix visible-xs visible-sm"></div>
			<div class='col-md-6 col-lg-6 col-sm-0 col-xs-0'style='height:30em'>
			<div class="well">
					<h1>Oregánó</h1>      
					<p style="text-align:justify">Az oregánó levelei zöldek, kb. 3-30 mm hosszúak és 2,5-20 mm szélesek. A levéllemez tojásdad alakú, néha elliptikus, szélei pedig vagy épek, vagy fűrészes szélűek. Az oregánó legtöbbünknek, ha máshonnan nem is, de a mostanában igencsak népszerű pizzériák étlapjáról biztosan ismerős. Nem véletlenül, hiszen az olasz tészták és pizzák klasszikus fűszere, de különféle zöldségekhez is előszeretettel használják. Azt viszont már biztos kevesen tudják, hogy itthon is használatos már igen régóta. Nagyszüleink leginkább a majoranna alternatívájaként alkalmazták. Van több magyar elnevezése is, úgy, mint szurokfű, vadmajoranna vagy balzsamfű.</p>
					</div>
			</div>
		</div>
		<div class="row">
			<div id="aboutSection" class="container-fluid">
				<h2>About Us <small>The Smart Gardener</small></h2>
				<blockquote class="well text-center">
								
				</blockquote>
			</div>
			<div class="container-fluid text-center">
				<p>Copyright &copy; The Smart Gardener 2017</p>
			</div>
		</div>
		<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Adatok, diagramok</h4>
      </div>
      <div class="modal-body">
		<div class="container-fluid">
			<h1>Hőmérésklet</h1>
			<div class="row">
				<div class="jumbotron well">
				<p>Diagram</p>
				<p>Diagram</p>
				<p>Diagram</p>
				<p>Diagram</p>
				</div>
			</div>
			<h1>Páratartalom</h1>
			<div class="row">
				<div class="jumbotron well">
				<p>Diagram</p>
				<p>Diagram</p>
				<p>Diagram</p>
				<p>Diagram</p>
				</div>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
	</div>
</body>
</html>