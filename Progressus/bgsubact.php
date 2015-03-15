<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

	<title>Left Sidebar template - Progressus Bootstrap template</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/dhtmlxslider.css">

   <style>
        video, canvas {
  float: left;
  margin: 10px;
  background: #eee;
  border: 1px solid #444;
}
  </style>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<?php

include 'navbar.php';

?>

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li><a href="bgsub.php"> background Subtraction Lesson</a></li>
      <li class="active">Applying the theory</li>
		</ol>

		<div class="row">
    <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>This page has visual demos!</strong> Remember to allow webcam access. Click 'x' to dismiss this warning.
    </div>
    </div>
    <div class ="row">
			<!-- Article main content -->
			<article class="col-md-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Applying Background Subtraction</h1>
				</header>
				<p>Think you`ve got your head around background? The next challenge will show you how we can apply it to a task in reality.</p>



          <div class="row">
              <div class="mol-md-8">
              <video id="v" width="320" height="240"></video>
              <canvas id="c" width="320" height="240"></canvas>
              </div>
              <div class="mol-md-4">

              </div>
          </div>


        <div class = "row">
          <div class = "col-md-2"><a class="btn btn-primary btn-lg" href="bgsub.php" role = "button" > <i class="fa fa-arrow-left">Back To Lesson</i></a></div>
          <div class = "col-md-2 col-md-offset-8">
          <a class="btn btn-primary btn-lg" href="bgsubact.php" role = "button" >Go To Test<i class="fa fa-arrow-right"></i></a></div>

			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->


	<?php

include 'footer.php';

?>





	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
  <script src="assets/js/dhtmlxslider.js">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
  <script src="assets/js/dat.gui.min.js"></script>
      <script src="assets/js/webcam.js"></script>
      <script src="assets/js/shiv.js"></script>
</body>
</html>