<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatable" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
				rel="stylesheet"/>

		<!-- Custom CSS Here -->
		<link href="css/style.css" rel="stylesheet"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery v3.0 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<script type="text/javascript" src="js/script.js"></script>

		<title>Jack Reuter | Online Portfolio</title>
	</head>
	<body>
		<main id="home">
			<header>
				<nav class="navbar navbar-fixed-top" data-target="navbar" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse"
									  data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Jack Reuter</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="#home">Home</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#portfolio">Portfolio</a></li>
								<li><a href="#contact">Contact</a></li>
								<!-- add to footer <li class="social pull-right"><a href="#">Social Links</a></li> -->
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>
		</main>
		<section>
			<div class="container about" id="about">
				<div class="row">
					<div class="col-md-5">
						<h2>About Me</h2>
					</div>
				</div>
				<div class="row">
					<div>
						<img class="img img-circle" src="documentation/images/placeholder-img.jpg" alt="placeholder"/>
					</div>
					<div class="col-md-9">
						<p>Pellentesque sed bibendum eros, vitae malesuada lorem. Ut posuere, purus id convallis gravida,
							elit nunc commodo leo, quis euismod felis velit at orci. Ut sapien purus, condimentum eget arcu
							nec, volutpat condimentum dui. Fusce gravida mauris et nisl vulputate iaculis. Orci varius
							natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ultrices nisi
							vel pulvinar finibus. Etiam egestas massa augue, vel dictum nisl mollis et. Curabitur sit amet
							orci in lectus iaculis auctor eget vitae neque. Etiam ut risus at justo bibendum tempus vel
							vulputate ligula. Etiam et nulla nec augue ultricies efficitur. Curabitur euismod, nisi iaculis
							vestibulum facilisis, ligula justo commodo lacus, eget eleifend dolor eros pharetra neque. Duis
							et metus lacus. Pellentesque rutrum risus vel tellus pharetra pretium.</p>
					</div>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>
		<section>
			<div class="container projects" id="portfolio">
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<a href="documentation/images/acme.png" title="View img in new window" target="_blank"><img
								src="documentation/images/acme.png" alt="acme web design"/></a>
							<div class="caption">
								<h3>Acme Web Design</h3>
							</div><!-- /.caption -->
						</div><!-- /.thumbnail -->
					</div><!-- /.col-sm-6 col-md-4 -->
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<a href="documentation/images/placeholder-2.jpg" title="View img in new window" target="_blank"><img
									src="documentation/images/placeholder-2.jpg" alt="place holder picture"/></a>
							<div class="caption">
								<h3>Place Holder Project</h3>
							</div><!-- /.caption -->
						</div><!-- /.thumbnail -->
					</div><!-- /.col-sm-6 col-md-4 -->
				</div><!-- /.row -->
			</div><!-- /. container projects -->
		</section>
		<section>
			<div class="container contact" id="contact">
				<div class="row">
					<div class="col-md-8">

					</div><!-- /.col-md-8 -->
				</div><!-- /.row -->
			</div><!-- /.container contact -->
		</section>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">

					</div><!-- /.col-xs-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</footer>
	</body>
</html>