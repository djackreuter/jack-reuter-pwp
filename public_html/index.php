<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatable" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
				integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!-- Font Awesome -->
		<script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>

		<!-- Custom CSS -->
		<link rel="shortcut icon" href="images/j-icon.ico"/>
		<link href="css/style.css" rel="stylesheet"/>

		<!-- jQuery v3.0 -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
				  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
				  crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
				  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
				  crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
				  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
				  crossorigin="anonymous"></script>

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

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<title>Jack Reuter</title>

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
	<body class="sfooter">
		<div class="sfooter-content">
			<div class="container mt-5">
				<div class = "card about-card">
					<div class="row justify-content-center">
						<div class="col-xs-12">
							<img class="img rounded-circle" src="images/about-me.jpg" alt="me"/>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-12">
								<p class="mt-2">Hi I'm Jack Reuter, Linux enthusiast and full-stack developer in Santa Fe, NM. I use Ubuntu
									as
									my daily driver, and work primarily with Ruby and Javascript. I also have experience with
									PHP,
									and other Linux distro's like Fedora and Debian. In my free time I enjoy spending time
									outdoors. I also love watching soccer, and am a strong supporter of Manchester City and the
									Seattle Sounders.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.container -->
			<div class="container mt-5">
				<div class="row justify-content-center">
					<div class="col-xs-12 col-md-8">
						<div class="contact-card mb-5">
							<h2>Contact Me</h2>
							<!-- Begin Contact Form -->
							<form id="contact-form" action="php/mailer.php" method="post" novalidate>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="text-danger mr-1">*</span><span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
									</div>
									<input type="text" class="form-control" id="name" name="name" placeholder="Name" aria-label="name" aria-describedby="basic-addon1">
								</div>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="text-danger mr-1">*</span><span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
									</div>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
								</div>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="mr-1 hide">*</span><span class="input-group-text" id="basic-addon1"><i class="fas fa-pencil-alt" aria-hidden="true"></i></span>
									</div>
									<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" aria-label="subject" aria-describedby="basic-addon1">
								</div>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="text-danger mr-1">*</span><span class="input-group-text" id="basic-addon1"><i class="fa fa-comment" aria-hidden="true"></i></span>
									</div>
									<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)" aria-label="message" aria-describedby="basic-addon1"></textarea>
								</div>
								<!-- reCAPTCHA -->
								<div class="g-recaptcha ml-2" data-sitekey="6Leo6C4UAAAAAOcWFdfJ5xt0t7lbPh-I6kbGNBzB"></div>
								<button class="btn btn-success ml-2" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
								<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
							</form>
							<!--empty area for form error/success output -->
							<div id="output-area"></div>
						</div>
					</div><!-- /.col-md-8 -->
				</div><!-- /.row -->
			</div><!-- /.container contact -->
		</div><!-- /.sfooter-content -->

		<footer>
			<div class="container-fluid">
				<div class="row">
					<div class="col copyright">
						<p>Copyright &copy; 2018</p>
					</div><!-- /.col-xs-6 -->
					<div class="col links">
						<a href="https://github.com/djackreuter" target="_blank"><i class="fab fa-github icons"
																										aria-hidden="true"></i></a>
						<a href="https://www.linkedin.com/in/jackreuter/" target="_blank"><i class="fab fa-linkedin icons"
																													aria-hidden="true"></i></a>
					</div><!-- /.col-xs-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</footer>
	</body>
</html>