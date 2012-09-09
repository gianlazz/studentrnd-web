<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?> - StudentRND</title>
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="/assets/css/hellahotchickens.css"/>
	<link rel="image_src" href="http://studentrnd.org/images/cubes.gif" />
	<!-- <script src="http://code.jquery.com/jquery-1.5.2.min.js"></script> -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script src="/bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div id="main">
			 <?php
				// $uri = $_SERVER['REQUEST_URI'];
			 	$path = pathinfo($route);
			 	$fname = $path['filename'];
			 	$active = ' class="active"';
			 ?>
	<div id="<?php echo $fname; // this will add a CSS id to every page based on the filename ?>" class="container">
		<div class="row" style="margin:10px 0px">
		</div>
		<a href="http://studentrnd.org/"><img src="http://studentrnd.org/images/srndlogotransparent.png"/></a>
		<div class="row nav-bar">
			<div class="span8">
				<ul class="nav nav-pills">
					<li<?php if($fname == "index") echo $active;?>><a href="/">Home</a></li>
					<li><a href="http://blog.studentrnd.org/">Blog</a></li>
					<li<?php if($fname == "about") echo $active;?>><a href="/about/">About</a></li>
					<li<?php if($fname == "getinvolved") echo $active;?>><a href="/getinvolved/">Get Involved</a></li>
					<li><a href="http://blog.studentrnd.org/">Blog</a></li>
					<li<?php if($fname == "contact") echo $active;?>><a href="/contact/">Contact Us</a></li>
					<li<?php if($fname == "donate") echo $active;?>><a href="/donate/">Donate</a></li>
				</ul>
			</div>
			<div class="span4" id="connect">
				<ul>
					<li><a href="http://facebook.com/studentrnd" title="Follow us on Facebook"><img src="../assets/img/facebook.png" alt="Facebook"></a></li>
					<li><a href="http://twitter.com/StudentRND" title="Follow us on Twitter"><img src="../assets/img/twitter.png" alt="Twitter"></a></li>
					<li><?php echo $phone; ?></li>
					<!-- <li>OPEN!</li> -->
				</ul>
			</div>
		</div>
