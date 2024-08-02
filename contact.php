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
            <li><a href="index.php">Home</a></li>
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
          <p class="lead">Please fill out the form below!</p>
          <br>
          <div class="center-block">
            <?php
            if (!isset($_POST['submit'])) {
            ?>
            <form action="contact.php" method="post">
            <?php
                if (isset($_GET['fnamerr'])) {
                    if ($_GET['fnamerr'] == "NULL") {
                        echo '<div class="form-group has-error" id="fnStatus">';
                        echo '<label class="control-label" for="firstname">First Name</label>';
                        echo '<input name ="firstName" type="text" class="form-control" id="FirstName" placeholder="First Name">';
                        echo '<span class="help-block" id="fnFeedback">FIRST NAME CANNOT BE BLANK!</span>';
                        echo '</div>';
                    } elseif ($_GET['fnamerr'] == "invalidSize") {
                        echo '<div class="form-group has-error" id="fnStatus">';
                        echo '<label class="control-label" for="firstname">First Name</label>';
                        echo '<input name ="firstName" type="text" class="form-control" id="FirstName"  value="' . $_SESSION['firstname'] . '">';
                        echo '<span class="help-block" id="fnFeedback">FIRST NAME MUST HAVE MORE THAN 2 CHARACTERS!</span>';
                        echo '</div>';
                    } elseif ($_GET['fnamerr'] == "invalidChar") {
                        echo '<div class="form-group has-error" id="fnStatus">';
                        echo '<label class="control-label" for="firstname">First Name</label>';
                        echo '<input name ="firstName" type="text" class="form-control" id="FirstName" value="' . $_SESSION['firstname'] . '">';
                        echo '<span class="help-block" id="fnFeedback">FIRST NAME CANNOT CONTAIN INVALID CHARACTERS!</span>';
                        echo '</div>';
                    }
                } else {
                    if (isset($_SESSION['firstname']) && $_SESSION['firstname'] != NULL) {
                        echo '<div class="form-group has-success" id="fnStatus">';
                        echo '<label class="control-label" for="firstname">First Name</label>';
                        echo '<input name ="firstName" type="text" class="form-control" id="FirstName" value="' . $_SESSION['firstname'] . '">';
                        echo '<span class="help-block" id="fnFeedback"></span>';
                        echo '</div>';
                    } else {
                        echo '<div class="form-group" id="fnStatus">';
                        echo '<label class="control-label" for="firstname">First Name</label>';
                        echo '<input name ="firstName" type="text" class="form-control" id="FirstName" placeholder="First Name">';
                        echo '<span class="help-block" id="fnFeedback"></span>';
                        echo '</div>';
                    }
                }

                if (isset($_GET['lnamerr'])) {
                    if ($_GET['lnamerr'] == "NULL") {
                        echo '<div class="form-group has-error" id="lnStatus">';
                        echo '<label class="control-label" for="lastname">Last Name</label>';
                        echo '<input name="lastName" type="text" class="form-control" id="LastName">';
                        echo '<span class="help-block" id="lnFeedback">LAST NAME CANNOT BE BLANK!</span>';
                        echo '</div>';
                    } elseif ($_GET['lnamerr'] == "invalidSize") {
                        echo '<div class="form-group has-error" id="lnStatus">';
                        echo '<label class="control-label" for="lastname">Last Name</label>';
                        echo '<input name="lastName" type="text" class="form-control" id="LastName" value="' . $_SESSION['lastname'] . '">';
                        echo '<span class="help-block" id="lnFeedback">LAST NAME MUST HAVE MORE THAN 2 CHARACTERS!</span>';
                        echo '</div>';
                    } elseif ($_GET['lnamerr'] == "invalidChar") {
                        echo '<div class="form-group has-error" id="lnStatus">';
                        echo '<label class="control-label" for="lastname">Last Name</label>';
                        echo '<input name="lastName" type="text" class="form-control" id="LastName" value="' . $_SESSION['lastname'] . '">';
                        echo '<span class="help-block" id="lnFeedback">LAST NAME CANNOT CONTAIN INVALID CHARACTERS!</span>';
                        echo '</div>';
                    }
                } else {
                    if (isset($_SESSION['lastname']) && $_SESSION['lastname'] != NULL) {
                        echo '<div class="form-group has-success" id="lnStatus">';
                        echo '<label class="control-label" for="lastname">Last Name</label>';
                        echo '<input name="lastName" type="text" class="form-control" id="LastName" value="' . $_SESSION['lastname'] . '">';
                        echo '<span class="help-block" id="lnFeedback"></span>';
                        echo '</div>';
                    } else {
                        echo '<div class="form-group" id="lnStatus">';
                        echo '<label class="control-label" for="lastname">Last Name</label>';
                        echo '<input name="lastName" type="text" class="form-control" id="LastName" placeholder="Last Name">';
                        echo '<span class="help-block" id="lnFeedback"></span>';
                        echo '</div>';
                    }
                }
				
				if(isset($_GET['emailerr'])) {
					if($_GET['emailerr'] == "NULL") {
						echo '<div class="form-group has-error" id="emailStatus">';
						echo '<label class="control-label" for="email">email</label>';
						echo '<input name="email" type="text" class="form-control" id="email">';
						echo '<span class="help-block" id="emailFeedback">Email can not be blank!</span>';
						echo '</div>';
					}
					elseif($_GET['emailerr'] == "invalidEmail") {
						echo '<div class="form-group has-error" id="emailStatus">';
						echo '<label class="control-label" for="email">email</label>';
						echo '<input name="email" type="text" class="form-control" id="email" value="' . $_SESSION['email'] . '">';
						echo '<span class="help-block" id="emailFeedback">Invalid Email Adress!</span>';
						echo '</div>';
					}
				}
				else { 
					if(isset($_SESSION['email']) && $_SESSION['email'] != NULL) {
						echo '<div class="form-group has-success" id="emailStatus">';
						echo '<label class="control-label" for="email">Email</label>';
						echo '<input name="email" type="text" class="form-control" id="Email" value="' . $_SESSION['email'] . '">';
						echo '<span class="help-block" id="emailFeedback"></span>';
						echo '</div>';
					} 
					else {
						echo '<div class="form-group" id="emailStatus">';
						echo '<label class="control-label" for="email">email</label>';
						echo '<input name="email" type="text" class="form-control" id="email">';
						echo '<span class="help-block" id="emailFeedback"></span>';
						echo '</div>';
					}
				}
				
				if(isset($_GET['phonerr'])) {
					if($_GET['phonerr'] == "NULL") {
						echo '<div class="form-group has-error" id="phoneStatus">';
						echo '<label class="control-label" for="phone">Phone</label>';
						echo '<input name="phone" type="phone" class="form-control" id="Phone">';
						echo '<span class="help-block" id="phoneFeedback">You Must Input A Phone Number!</span>';
						echo '</div>';
					} 
					elseif($_GET['phonerr'] == "invalidPhone") {
						echo '<div class="form-group has-error" id="phoneStatus">';
						echo '<label class="control-label" for="phone">Phone</label>';
						echo '<input name="phone" type="phone" class="form-control" id="Phone" value="' . $_SESSION['phone'] . '">';
						echo '<span class="help-block" id="phoneFeedback">Invalid Phone Number!</span>';
						echo '</div>';
					}
				} 
			  	else { 
					if(isset($_SESSION['phone']) && $_SESSION['phone'] != NULL) {
						echo '<div class="form-group has-success" id="phoneStatus">';
						echo '<label class="control-label" for="phone">Phone</label>';
						echo '<input name="phone" type="phone" class="form-control" id="Phone" value="' . $_SESSION['phone'] . '">';
						echo '<span class="help-block" id="phoneFeedback"></span>';
						echo '</div>';
					} 
					else {
						echo '<div class="form-group" id="phoneStatus">';
						echo '<label class="control-label" for="phone">Phone</label>';
						echo '<input name="phone" type="phone" class="form-control" id="Phone">';
						echo '<span class="help-block" id="phoneFeedback"></span>';
						echo '</div>';
					}

				}
				
				if(isset($_GET['unerr'])) {
					if($_GET['unerr'] == "NULL") {
						echo '<div class="form-group has-error" id="unStatus">';
						echo '<label class="control-label" for="username">Create a username: </label>';
						echo '<input name="username" type="text" class="form-control" id="username">';
						echo '<span class="help-block" id="unFeedback">Must Enter A Username!</span>';
						echo '</div>';
					} 
					elseif($_GET['unerr'] == "invalidUsername") {
						echo '<div class="form-group has-error" id="unStatus">';
						echo '<label class="control-label" for="username">Create a username: </label>';
						echo '<input name="username" type="text" class="form-control" id="username" value="' . $_SESSION['username'] . '">';
						echo '<span class="help-block" id="unFeedback">Username Must Be More Than 5 Characters!</span>';
						echo '</div>';
					}
				} 
				else { 
					if(isset($_SESSION['username']) && $_SESSION['username'] != NULL) {
						echo '<div class="form-group has-success" id="unStatus">';
						echo '<label class="control-label" for="username">Create a username: </label>';
						echo '<input name="username" type="text" class="form-control" id="username" value="' . $_SESSION['username'] . '">';
						echo '<span class="help-block" id="unFeedback"></span>';
						echo '</div>';
					} 
					else {
						echo '<div class="form-group" id="unStatus">';
						echo '<label class="control-label" for="username">Create a username: </label>';
						echo '<input name="username" type="text" class="form-control" id="username">';
						echo '<span class="help-block" id="unFeedback"></span>';
						echo '</div>';
					}
				}
				
				if(isset($_GET['pwerr'])) {
					if($_GET['pwerr'] == "NULL") {
						echo '<div class="form-group has-error" id="pwStatus">';
						echo '<label class="control-label" for="password">Create a password: </label>';
						echo '<input name="password" type="password" class="form-control" id="password">';
						echo '<span class="help-block" id="pwFeedback">Must Enter A Password!</span>';
						echo '</div>';
					} 
					elseif($_GET['pwerr'] == "invalidPassword") {
						echo '<div class="form-group has-error" id="pwStatus">';
						echo '<label class="control-label" for="password">Create a password: </label>';
						echo '<input name="password" type="password" class="form-control" id="password" value="' . $_SESSION['password'] . '">';
						echo '<span class="help-block" id="pwFeedback">Password Must Be More Than 5 Characters!</span>';
						echo '</div>';
					}
				} 
				else { 
					if(isset($_SESSION['password']) && $_SESSION['password'] != NULL) {
						echo '<div class="form-group has-success" id="pwStatus">';
						echo '<label class="control-label" for="password">Create a password: </label>';
						echo '<input name="password" type="password" class="form-control" id="password" value="' . $_SESSION['password'] . '">';
						echo '<span class="help-block" id="pwFeedback"></span>';
						echo '</div>';
					} 
					else {
						echo '<div class="form-group" id="pwStatus">';
						echo '<label class="control-label" for="password">Create a password: </label>';
						echo '<input name="password" type="password" class="form-control" id="password">';
						echo '<span class="help-block" id="pwFeedback"></span>';
						echo '</div>';
					}
				}
				
				if(isset($_GET['comerr'])) {
					if($_GET['comerr'] == "invalidComment") {
						echo '<div class="form-group has-error" id="commentsStatus">';
						echo '<label class="control-label" for="comments">Comments</label>';
						echo '<textarea name="comments" class="form-control" id="comments"></textarea>';
						echo '<span class="help-block" id="commentsFeedback">You Must Include A Comment!</span>';
						echo '</div>';
					} 
				} 
			  	else { 
					if(isset($_SESSION['comments']) && $_SESSION['comments'] != NULL) {
						echo '<div class="form-group has-success" id="commentsStatus">';
						echo '<label class="control-label" for="comments">Comments</label>';
						echo '<input name="comments" class="form-control" id="comments" value="' . $_SESSION['comments'] . '">';
						echo '<span class="help-block" id="commentsFeedback"></span>';
						echo '</div>';
					} 
					else {
						echo '<div class="form-group" id="commentsStatus">';
						echo '<label class="control-label" for="comments">Comments</label>';
						echo '<textarea name="comments" class="form-control" id="comments"></textarea>';
						echo '<span class="help-block" id="commentsFeedback"></span>';
						echo '</div>';
					}
				}
            ?>
           
                
                
                    
                     
                    
                
                <br><br>
                <button name="submit" value="submit" type="submit" class="btn btn-primary">Submit</button>
            </form>
            <?php
            } else {
				
				$_SESSION['errArray'] = [];

                $fnamerr = '';
                $lnamerr = '';
				$emailerr = '';
				$phonerr = '';
				$unerr = '';
				$pwerr = '';
				$comerr = '';
				
                if (!isset($_SESSION['errArray'])) {
                    $_SESSION['errArray'] = [];
                }

                // First Name
                $firstname = $_POST['firstName'];
                if ($firstname == NULL) {
                    $fnamerr = "NULL";
                } elseif (strlen($firstname) < 3) {
                    $fnamerr = "invalidSize";
                    $_SESSION['firstname'] = $firstname;
                } elseif (!preg_match("/^[a-zA-Z'-]+$/", $firstname)) {
                    $fnamerr = "invalidChar";
                    $_SESSION['firstname'] = $firstname;
                } else {
                    $_SESSION['firstname'] = $firstname;
                }

                if (strlen($fnamerr) > 0) {
                    $_SESSION['errArray'][] = "fnamerr=$fnamerr";
                }

                // Last Name
                $lastname = $_POST['lastName'];
                if ($lastname == NULL) {
                    $lnamerr = "NULL";
                } elseif (strlen($lastname) < 3) {
                    $lnamerr = "invalidSize";
                    $_SESSION['lastname'] = $lastname;
                } elseif (!preg_match("/^[a-zA-Z'-]+$/", $lastname)) {
                    $lnamerr = "invalidChar";
                    $_SESSION['lastname'] = $lastname;
                } else {
                    $_SESSION['lastname'] = $lastname;
                }

                if (strlen($lnamerr) > 0) {
                    $_SESSION['errArray'][] = "lnamerr=$lnamerr";
                }
				
				//Email
				$email = $_POST['email'];
				if($email == NULL)
				{
					$emailerr = "NULL";
				}
				elseif(!preg_match('/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $email))
				{
					$emailerr = "invalidEmail";
					$_SESSION['email'] = $email;
				}
				else
				{
					$_SESSION['email'] = $email;
				}
				if(strlen($emailerr) > 0)
					$_SESSION['errArray'][] = "emailerr=$emailerr";
			
				//Phone Number
				$phone = $_POST['phone'];
				if($phone == NULL)
				{
					$phonerr="NULL";
				}
				elseif(!preg_match('/^\d+$/',$phone))
				{
					$phonerr = "invalidPhone";
					$_SESSION['phone'] = $phone;
				}
				else
				{
					$_SESSION['phone'] = $phone;
				}
				if(strlen($phonerr) > 0)
					$_SESSION['errArray'][] = "phonerr=$phonerr";
				
				//Username
				$username = $_POST['username'];
				if($username == "NULL")
				{
					$unerr = "NULL";
				}
				elseif(strlen($username)<6) {
					$unerr = "invalidUsername";
					$_SESSION['username'] = $username;
				}
				else {
					$_SESSION['username'] = $username;
				}
				if(strlen($unerr) > 0)
					$_SESSION['errArray'][] = "unerr=$unerr";
				
				//Password
				$password = $_POST['password'];
				if($password == "NULL")
				{
					$pwerr = "NULL";
				}
				elseif(strlen($password)<6) {
					$pwerr = "invalidPassword";
					$_SESSION['password'] = $password;
				}
				else {
					$_SESSION['password'] = $password;
				}
				if(strlen($pwerr) > 0)
					$_SESSION['errArray'][] = "pwerr=$pwerr";
				
				//Comments
				$comments = $_POST['comments'];
				if(strlen($comments) == 0)
				{
					$comerr = "invalidComment";
				}
				else{
					$_SESSION['comments'] = $comments;
				}
				if(strlen($comerr) > 0)
					$_SESSION['errArray'][] = "comerr=$comerr";
				
				
				
				
				if (count($_SESSION['errArray']) > 0) {
                    $errString = implode("&", $_SESSION['errArray']);
                    redirect("contact.php?$errString");
                }
				$dblink=db_connect("contact_data");
				$sql="Insert into `form_data` (`first_name`,`last_name`,`email`,`phone`,`username`,`password`,`comments`) values ('$firstname','$lastname','$email','$phone','$username','$password','$comments')";
				$dblink->query($sql) or
					die("<p>Something went wrong with: <br>$sql<br></p>".$dblink->error);
				echo '<h1>Data successfully entered into the database!</h1>';
				
                
            }
            ?>
          </div>
        </div>
      </div>
    </div><!-- /.container -->
    <div class="text-center">
        <a class="btn btn-default" href="index.php" role="button">Return to Home</a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  </body>
</html>
