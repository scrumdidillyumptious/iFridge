<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	<?php
$servername = "localhost";
$username = "testuser";
$password = "password";
$dbName= "myfridgedb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
<<<<<<< HEAD
echo "Connected successfully";
=======
>>>>>>> origin/master

?>

    <link rel="icon" href="../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel2.css" rel="stylesheet">

  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="home.html">iFridge</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="home.html">Home</a></li>
                <li><a href="about.html">About</a></li>
				<li><a href="settings.html">Settings</a></li>
                <li class="Sort By">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sort By <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Alphabetical</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Expiration</a></li>
                    <li><a href="#">Difficulty</a></li>
                  </ul>
                </li>
				<li><a href="login.html">Logout</a></li>
				<form class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
				</form>

              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false" data-pause="true">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>What's In Your Fridge?</h1>
              <p>
				<table id=ingTable class="table table-responsive">
<<<<<<< HEAD
				<thead class="thead-inverse">
=======
		<thead class="thead-inverse">
>>>>>>> origin/master
						<tr class = "header">
							<th>Item</th>
							<th>Expiration</th>
						</tr>
					</thead>
					<tbody>
              <?php
            $sql = "SELECT iname, expDate FROM ingredients";
            $result = mysqli_query($conn, $sql);
            $i = 0;
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $class = ($i == 0) ? "" : "alt";
								echo "<tr class=\" ".$class." \">";
								echo "<td>".$row["iname"]."</td>";
								echo "<td>".$row["expDate"]."</td>";
								echo "</tr>";
								$i = ($i==0) ? 1:0;
                }
            } else {
                echo "0 results";
            }

						?>
					</tbody>
				</table>
			 </p>
             <p>
<<<<<<< HEAD
				<a class="btn btn-lg btn-primary" href="#" role="button">Add</a>
				<a class="btn btn-lg btn-primary" href="#" role="button">Delete</a>
=======
               <button class="btn btn-lg btn-primary" data-toggle="modal" data-target="#addItemModal">Add Item</a>
               <button class="btn btn-lg btn-primary" data-toggle="modal" data-target="#deleteItemModal">Delete Item</button>
>>>>>>> origin/master
			</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption" >
              <h1>What's In Your Cookbook?</h1>
              <p>
				<table class="table table-responsive">
					<thead class="thead-inverse">
						<tr>
							<th>Recipe</th>
							<th>Difficulty</th>
						</tr>
					</thead>
					<tbody>
            <?php
          $sql = "SELECT rname, difficulty FROM recipie ";
          $result = mysqli_query($conn, $sql);
          $i = 0;
          if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                  $class = ($i == 0) ? "" : "alt";
              echo "<tr class=\" ".$class." \">";
              echo "<td>".$row["rname"]."</td>";
              echo "<td>".$row["difficulty"]."</td>";
              echo "</tr>";
              $i = ($i==0) ? 1:0;
              }
          } else {
              echo "0 results";
          }

          ?>
					</tbody>
				</table>
			  </p>
              <p>
<<<<<<< HEAD
				<a class="btn btn-lg btn-primary" href="#" role="button">Add</a>
				<a class="btn btn-lg btn-primary" href="#" role="button">Delete</a>
=======
                <a class="btn btn-lg btn-primary" data-toggle="modal" data-target="#addRecipeModal">Add Recipe</a>
        				<a class="btn btn-lg btn-primary" data-toggle="modal" data-target="#deleteRecipeModal">Delete Recipe</a>
>>>>>>> origin/master
			  </p>
            </div>
          </div>
        </div>
        <div class="item">
			<img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
			<div class="container">
				<div class="carousel-caption">
				<h1>What's On Your Shopping List?</h1>
				<p>Feature Coming Soon!</p>
				<p>
					<a class="btn btn-lg btn-primary" href="#" role="button">Add</a>
					<a class="btn btn-lg btn-primary" href="#" role="button">Delete</a>
				</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

<<<<<<< HEAD
=======
    <!-- Add Item Modal -->
  <div class="modal fade" id="addItemModal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close"
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Add Item
                </h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="addIng.php" class="form-normal" role="form" method="post">
                    <div class="form-group">
                      <label  class="col-sm-2 control-label"
                              for="addItemName">Name</label>
                      <div class="col-sm-4">
                          <input class="form-control"
                          id="addItemName" placeholder="Milk, Bread, Meth"/>
                      </div>
                      <label class="col-sm-2 control-label"
                            for="addItemExp" >Exp. Data</label>
                      <div class="col-sm-4">
                          <input class="form-control"
                              id="addItemExp" placeholder="Expiration"/>
                      </div>
                  </div>
                </form>
                <br><br><br>
                <form>
                  <div class="form-group">
                      <label  class="col-sm-2 control-label"
                              for="addItemAmount">Amount</label>
                      <div class="col-sm-4">
                          <input class="form-control"
                          id="addItemAmount" placeholder="1,2,3"/>
                      </div>
                      <label class="col-sm-2 control-label"
                            for="addItemKey" >Key</label>
                      <div class="col-sm-4">
                          <input class="form-control"
                              id="addItemKey" placeholder="Key"/>
                      </div>
                  </div>
                </form>
      <br><br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal" onclick="addItemDialog();">Confirm
                </button>
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">Close
                </button>
            </div>
       </div>
  </div>
  </div>
  <!-- END MODAL- Relocate? -->
  <!-- Delete Item Modal -->
  <div class="modal fade" id="deleteItemModal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close"
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Delete Item
                </h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <form class="form-normal" role="form">
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="deleteItemName">Name</label>
                    <div class="col-sm-4">
                        <input class="form-control"
                        id="deleteItemName" placeholder="Milk, Bread, Meth"/>
                    </div>
                    <label class="col-sm-2 control-label"
                          for="deleteItemKey" >Key</label>
                    <div class="col-sm-4">
                        <input class="form-control"
                            id="deleteItemKey" placeholder="Key"/>
                    </div>
                 </div>
               </form>
               <br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal" onclick="deleteItemDialog();">Confirm
                </button>
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">Close
                </button>
            </div>
       </div>
  </div>
  </div>
  <!-- END MODAL- Relocate? -->

  <script type="text/JavaScript">

    function addItemDialog(){
      alert("Item Add Test");
    }

    function deleteItemDialog(){
      alert("Item Delete Test");
    }

    function addRecipeDialog(){

    }

    function deleteRecipeDialog(){

    }

  </script>

>>>>>>> origin/master
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	<script src="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/bootstrap.min.js"</script>
    <!--<script src="../../dist/js/bootstrap.min.js"></script>-->
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
