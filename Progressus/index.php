<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

	<title>Insight CV:Teaching Kids Computer Vision</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
	<?php

include 'navbar.php';

?>

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">INSIGHT CV</h1>
				<p class="tagline">TEACHING COMPUTER VISION TO STUDENTS</p>
				<p><a class="btn btn-action btn-lg" role="button">GO TO LESSONS</a></p>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">Why do you need to learn about Computer Vision?</h2>
		<p class="text-muted">
			Computer Vision is everywhere. As technology becomes more integrated with our lives, our demand for it to be aware of the world around us increases with it. When almost every device available has a camera, it makes sense to use it!
		</p>
	</div>
	<!-- /Intro-->

	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">

			<h3 class="text-center thin">Where Can We Apply Computer Vision?</h3>

			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Autonomous Machines &amp Robots</h4></div>
					<div class="h-body text-center">
						<p>From making androids to self driving cars, autonomous machines require computer vision to see the world they are moving in. Take a look at PROJECT X and PROJECT Z for interesting applications.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-camera fa-5"></i>Photography &amp Images</h4></div>
					<div class="h-body text-center">
						<p>Focus based on face detection, photo tags from image content and even shake reduction in videos exist because of technologies from computer vision.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-gamepad fa-5"></i>Gaming</h4></div>
					<div class="h-body text-center">
						<p>All of the big game hardware companies have applications that require computer vision, from mobile phone augumented reality to hand gestures on a Microsoft Kinetic.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-group fa-5"></i>People</h4></div>
					<div class="h-body text-center">
						<p>A lot of computer vision technology is used for tracking people; security, saftey, media and scientific research all have demands for computer vision technologies. </p>
					</div>
				</div>
			</div> <!-- /row  -->

		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

		<h2 class="text-center top-space">Frequently Asked Questions</h2>
		<br>

		<div class="row">
			<div class="col-sm-6">
				<h3>This might contain content</h3>
				<p>and this might too.</p>
			</div>
			<div class="col-sm-6">
				<h3>what about this?</h3>
				<p>
					Yes, this too!</p>
			</div>
		</div> <!-- /row -->


		<div class="jumbotron top-space">
			<h4>This project has been created as part of my final project at Aberystwyth University. Any content is open to change and should not be taken as final or offically endorsed by any teaching establishment.</h4>
     		<p class="text-right"><a class="btn btn-primary btn-large">Learn More»</a></p>
  		</div>

</div>	<!-- /container -->

	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


  <?php

include 'footer.php';

?>

</body>
</html>
