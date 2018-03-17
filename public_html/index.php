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

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- jquery validate file -->
		<script type="text/javascript" src="js/jquery-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- LightBox JavaScript -->
		<script type="text/javascript" src="js/lightbox.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<script type="text/javascript" src="js/script.js"></script>

		<title>Jack Reuter | Online Portfolio</title>

		<!-- Google Analytics -->
		<script>
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] || function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o),
					m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

			ga('create', 'UA-105677414-1', 'auto');
			ga('send', 'pageview');

		</script>
	</head>
	<body class="sfooter" data-spy="scroll" data-target="#nav-links">
		<div class="sfooter-content">
			<section id="about">
				<div class="container about">
					<div class = "well">
						<div class="row">
							<div class="col-md-3 col-xs-12">
								<img class="img img-circle" src="images/about-me.jpg" alt="me"/>
							</div>
						</div>
						<div class = "row">
							<div class="col-md-9">
								<p>Hi I'm Jack Reuter, Linux enthusiast and full-stack developer in Santa Fe, NM. I use Ubuntu as
									my daily driver, and work primarily with Ruby and Javascript. I also have experience with PHP,
									and other Linux distro's like Fedora and Debian. In my free time I enjoy spending time
									outdoors. I also love watching soccer, and am a strong supporter of Manchester City and the
									Seattle Sounders.
								</p>
							</div>
						</div><!-- /.row -->
					</div>
				</div><!-- /.container -->
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
							<!-- Begin Contact Form -->
							<form id="contact-form" action="php/mailer.php" method="post" novalidate>
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
								<div class="g-recaptcha" data-sitekey="6Leo6C4UAAAAAOcWFdfJ5xt0t7lbPh-I6kbGNBzB"></div>

								<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
								<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
							</form>
							<!--empty area for form error/success output -->
							<div id="output-area"></div>
						</div><!-- /.col-md-8 -->
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
					</div><!-- /.col-xs-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</footer>
	</body>
</html>