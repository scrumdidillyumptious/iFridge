
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

$_SESSION['username']=$_POST['emailBox'];
$_SESSION['password']=$_POST['passwordBox'];

//$sql="select userid from users where username=$inputEmail and password=$password";
//if ($conn->query($sql) === TRUE) {
//    echo "query succesful";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
//$result = $conn->query($sql);
//$_SESSION['userid']=$mysql_result[$conn,0,userid];
//$_SESSION['password']=$mysql_result[$conn,0,password];
//$_SESSION['userid']=$mysql_result[$conn,0,userid];

?>
<html>
<body>

<textarea id=textArea rows="4" cols="50">
  <?php
print_r($_SESSION);
?>
</textarea>


</body>
</html>
