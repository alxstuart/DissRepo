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
			<li><a href="bgsub.php"> background Subtraction Lesson</li>
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
					<h1 class="page-title">Background Subtraction</h1>
				</header>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, itaque, cumque, maxime obcaecati reprehenderit ea dignissimos amet voluptatem id excepturi facilis totam veritatis maiores eveniet neque explicabo temporibus quisquam in ex ab fugiat ipsa tempore sunt corporis nostrum quam illum!</p>
				<p>Consectetur cupiditate labore repudiandae beatae nisi fugiat facilis natus illum vitae doloremque. In, perspiciatis, natus, impedit voluptas itaque odio repudiandae placeat nisi totam repellendus earum dolores mollitia tempore quasi beatae alias cum dicta maxime laborum corporis harum porro magnam laboriosam.</p>
				<p>Aut, eaque, minus atque alias odio mollitia cum nisi ipsa nulla natus quae minima similique ipsam aspernatur molestias animi in deleniti nam. Tempora, labore, modi eum perspiciatis doloremque sequi nam illo corporis iusto maiores nisi recusandae repellat animi reiciendis accusamus.</p>



				<h2>How we Estimate the Background</h2>
				<p>Est, maiores, fuga sed nemo qui veritatis ducimus placeat odit quisquam dolorum. Rem, sunt, praesentium veniam maiores quia molestias eos fugit eaque ducimus veritatis provident assumenda. Quia, fuga, voluptates voluptatibus quis enim nam asperiores aliquam dignissimos ullam recusandae debitis iste.</p>
				<p>Dignissimos, beatae, praesentium illum eos autem perspiciatis? Minus, non, tempore, illo, mollitia exercitationem tempora quas harum odio dolores delectus quidem laudantium adipisci ducimus ullam placeat eaque minima quae iure itaque corporis magni nesciunt eius sed dolor doloremque id quasi nisi.</p>

        <h2>What Difference Does Changing the Thresholds Make</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, itaque, cumque, maxime obcaecati reprehenderit ea dignissimos amet voluptatem id excepturi facilis totam veritatis maiores eveniet neque explicabo temporibus quisquam in ex ab fugiat ipsa tempore sunt corporis nostrum quam illum!</p>


          <div class="row">
              <div class="mol-md-8">
              <video id="v" width="320" height="240"></video>
              <canvas id="c" width="320" height="240"></canvas>
              </div>
              <div class="mol-md-4">

              </div>
          </div>


        <div class = "row">
          <div class = "col-md-2 col-md-offset-10">
  <a class="btn btn-primary btn-lg" href="bgsubact.php" role = "button" >Go To Activity</a></div>

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