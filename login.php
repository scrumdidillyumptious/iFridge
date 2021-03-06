<?php
session_start();
if($_SESSION['username'])
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sign In</title>

    <!-- Bootstrap core CSS -->
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">iFridge</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- Navbar End -->

    <div class="row">
    	<div class="col-md-4"></div>
	    <div class="container well col-md-4">
	      <form class="form-signin" action="welcome.php" method = "post">
	        <h2 class="form-signin-heading">Please sign in</h2>
	        <label for="inputEmail" class="sr-only">Username</label>
	        <input name="emailBox" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
	        <label for="inputPassword" class="sr-only">Password</label>
	        <input name="passwordBox" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
	        <div class="checkbox">
	          <label>
	            <input type="checkbox" value="remember-me"> Remember me
	          </label>
            <input type=submit/>
	        </div>
	        <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="formHandler();">Sign in</button>
	      </form>

	    </div>
	    <div class="col-md-4"></div>
   	</div>

   	<script type="text/JavaScript">
   		$(document).ready(function(){
   			alert("hey");
   		});

   		function formHandler(){

   			var dataArray = $('form').serializeArray(), dataObj = {};

   			$(dataArray).each(function(i, field){
   				dataObj[field.name] = field.value;
   			});

   			//alert(dataObj['emailBox']);     //print input email
   			//alert(dataObj['passwordBox']);  //print input password

   			//send input email to database (dataObj['emailBox']), return correctPass
   			var correctPass = "readCorrectPasswordFromDatabase"; //database connection here to return registered password

   			if(dataObj['passwordBox'] == correctPass){
          <?php
print_r($_SESSION);
?>
   				window.location = "home.php";
   			}
   			else{
          <?php
print_r($_SESSION);
?>
   				alert("Password Incorrect");
   				window.location = "login.php";
   			}

   		}

   	</script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	<script src="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/bootstrap.min.js"</script>
    <!--<script src="../../dist/js/bootstrap.min.js"></script>-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
