<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Jacob - Personal Website</title>
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/starter-template.css" rel="stylesheet">
</head>


<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Jacob's Homepage</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="hobbies.html">Hobbies</a></li>
            <li><a href="work.html">Work</a></li>
			<li><a href="school.html">School</a></li>
			<li><a href="aboutme.html">About Me</a></li>
			<li><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
		<div id="output"></div>  
		<?php
			$today=date("F j, Y");
			echo "<p>Today is: $today</p>";
		?>
        <p class="lead">I made this website for fun. Take a look around!</p>
      </div>

    </div><!-- /.container -->
	<div class="text-center">
		<a class="btn btn-default" href="index.php" role="button">Return to Home</a>
	</div>
    <script src="assets/js/add-content.js"></script>
  </body>
</html>
