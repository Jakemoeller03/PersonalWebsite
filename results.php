<?php
session_start();
include("functions.php");
?>
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
            <li><a href="index.html">Home</a></li>
            <li><a href="hobbies.html">Hobbies</a></li>
            <li><a href="work.html">Work</a></li>
            <li><a href="school.html">School</a></li>
            <li><a href="aboutme.html">About Me</a></li>
            <li class="active"><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <div class="starter-template">
        <h1>Contact</h1>
        <div class="mx-auto">
          <p class="lead">View Contact Form Results Here</p>
          <br>
          <div class="row">
			
			
          	<table class="table table-striped">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Username</th>
					<th>Password</th>
					<th>Comments</th>
				</tr>
			</thead>
			<tbody id="form_info">
			
			</tbody>
			</table>
            
          </div>
        </div>
      </div>
    </div><!-- /.container -->
    <div class="text-center">
        <a class="btn btn-default" href="index.html" role="button">Return to Home</a>
    </div>
	<script src="assets/js/jquery-3.5.1.js"></script>
    <script>
	
	function refresh_data(){
    $.ajax({
        type: 'get',
        url: 'https://ec2-3-129-9-4.us-east-2.compute.amazonaws.com/hw15/contact_query.php',
        success: function(data){
            $('#form_info').html(data);
        }
    });
}

setInterval(function(){ refresh_data(); }, 500);
	</script>
	
	
	
	
	
  </body>
</html>
