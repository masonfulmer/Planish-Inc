<!DOCTYPE html>

<html lang="en">
<head>
	<!--
	Author: Mason Lee Fulmer
	Contact: mason_fulmer@yahoo.com, (503) 502-7138
	Date: 15 February 2020
	-->
	
	<title>Planish Incorporated</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- CSS and Styles -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<?php wp_head();?>
</head>

<body>
<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="override">
  <a class="navbar-brand" href="index.html">Planish Inc.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Our Work
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Projects</a>
          <a class="dropdown-item" href="#">Testimonials</a>
          <a class="dropdown-item" href="#">Case Studies</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Item 1</a>
          <a class="dropdown-item" href="#">Item 2</a>
          <a class="dropdown-item" href="#">Item 3</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
		<ul class="navbar-nav ml-auto">
			<a class="btn btn-outline-success my-2 my-sm-0" href="http://localhost/testsite/contact-us/">Contact Us</a>
		</ul>
  </div>
</nav>