<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatable" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- LightBox CSS -->
		<link href="css/lightbox.min.css" rel="stylesheet">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
				rel="stylesheet"/>

		<!-- Custom CSS Here -->
		<link rel="shortcut icon" href="images/j-icon.ico"/>

		<link href="css/style.css" rel="stylesheet"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery v3.0 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- LightBox JavaScript -->
		<script type="text/javascript" src="js/lightbox.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<script type="text/javascript" src="js/script.js"></script>

		<title>Jack Reuter | Online Portfolio</title>
	</head>
	<body class="sfooter" data-spy="scroll" data-target="#nav-links">
		<div class="sfooter-content">
			<header>
				<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
									  data-target="#nav-links" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" id="title" href="#">Jack Reuter</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="nav-links">
							<ul class="nav navbar-nav">
								<li><a href="#home">Home</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#portfolio">Portfolio</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>
			<section id="home">

			</section>
			<section id="about">
				<div class="container about">
					<div class="row">
						<div class="col-md-4 about-header">
							<h2>About Me</h2>
						</div><!-- /.col-md-4 -->
					</div><!-- /.row -->
					<div class="row">
						<div class="col-md-3 col-xs-12">
							<img class="img img-circle" src="images/about-me.jpg" alt="me"/>
						</div>
						<div class="col-md-9">
							<p>Hi I'm Jack Reuter, I am a full-stack web developer born and raised in Albuquerque, NM. I
								attended The University of New Mexico and received my B.A. in Communication in 2016. Upon
								graduation, I decided that my passion was not in the field of communication, but rather in
								the world of software development. I attended the Deep Dive Coding bootcamp in Albuquerque
								where I gained solid knowledge of essential web technologies, and built sites utilizing both
								frontend and backend languages. I have experience working with HTML5, CSS3, JavaScript, PHP,
								and MySQL, as well as popular libraries and frameworks such as Bootstrap, jQuery, and Angular.
								In my free time I enjoy spending time outdoors and enjoying the New Mexico weather. I also
								love watching soccer, and am a strong supporter of Manchester City and the Seattle Sounders.
							</p>
						</div>
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>
			<section id="portfolio">
				<div class="container projects">
					<div class="row">
						<div class="col-md-4">
							<h2>Portfolio</h2>
						</div><!-- /.col-md-4 -->
					</div><!-- /.row -->
					<div class="row">
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<a href="images/acme.png" data-lightbox="images"><img
										src="images/acme-small.png" alt="acme web design"/></a>
								<div class="caption">
									<h3>Acme Web Design</h3>
								</div><!-- /.caption -->
							</div><!-- /.thumbnail -->
						</div><!-- /.col-sm-6 col-md-4 -->
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<a href="images/placeholder-2.jpg" data-lightbox="images">
									<img src="images/placeholder-2-small.jpg" alt="place holder
								picture"/></a>
								<div class="caption">
									<h3>Place Holder Project</h3>
								</div><!-- /.caption -->
							</div><!-- /.thumbnail -->
						</div><!-- /.col-sm-6 col-md-4 -->
					</div><!-- /.row -->
				</div><!-- /. container projects -->
			</section>
			<section id="contact">
				<div class="container contact">
					<div class="row">
						<div class="col-md-4">
							<h2>Contact Me</h2>
						</div><!-- /.col-md-4 -->
					</div><!-- /.row -->
					<div class="row">
						<div class="col-xs-12 col-md-8">
							<form id="contact-form" action="php/mailer.php" method="post">
								<div class="form-group">
									<label for="name">Name <span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user" aria-hidden="true"></i>
										</div><!-- /.input-group-addon -->
										<input type="text" class="form-control" id="name" name="name" placeholder="Name">
									</div><!-- /.input-group -->
								</div><!-- /.form-group -->
								<div class="form-group">
									<label for="email">Email <span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-envelope" aria-hidden="true"></i>
										</div><!-- /.input-group-addon -->
										<input type="email" class="form-control" id="email" name="email" placeholder="Email">
									</div><!-- /.input-group -->
								</div><!-- /.form-group -->
								<div class="form-group">
									<label for="subject">Subject</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil" aria-hidden="true"></i>
										</div><!-- /.input-group-addon -->
										<input type="text" class="form-control" id="subject" name="subject"
												 placeholder="Subject">
									</div><!-- /.input-group -->
								</div><!-- /.form-group -->
								<div class="form-group">
									<label for="message">Message <span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-comment" aria-hidden="true"></i>
										</div><!-- /.input-group-addon -->
										<textarea class="form-control" rows="5" id="message" name="message"
													 placeholder="Message (2000 characters max)"></textarea>
									</div><!-- /.input-group -->
								</div><!-- /.form-group -->

								<!-- reCAPTCHA -->
								<div class="g-recaptcha" data-sitekey="--TBD--"></div>

								<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
								<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
							</form>
						</div><!-- /.col-md-8 -->
					</div><!-- /.row -->

					<!--empty area for form error/success output -->
					<div class="row">
						<div class="col-xs-12">
							<div id="output-area"></div>
						</div><!-- /.col-xs-12 -->
					</div><!-- /.row -->
				</div><!-- /.container contact -->
			</section>
		</div><!-- /.sfooter-content -->

		<footer>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-6 copyright">
						<p>Copyright &copy; 2017</p>
					</div><!-- /.col-xs-6 -->
					<div class="col-xs-6 links">
						<a href="https://github.com/djackreuter" target="_blank"><i class="fa fa-github"
																										aria-hidden="true"></i></a>
						<a href="https://www.linkedin.com/in/jackreuter/" target="_blank"><i class="fa fa-linkedin-square"
																													aria-hidden="true"></i></a>
						<a href="https://twitter.com/djackreuter" target="_blank"><i class="fa fa-twitter-square"
																										 aria-hidden="true"></i></a>
					</div><!-- /.col-xs-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</footer>
	</body>
</html>