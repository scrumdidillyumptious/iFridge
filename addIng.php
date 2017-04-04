
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
$iname=$_POST['addItemName'];
$expDate=$_POST['addItemExp'];
$quantity=$_POST['addItemAmount'];
$ingID=$_POST['addItemKey'];
$dateLogged=32217;

$sql="INSERT INTO ingredients(ingID, iname, dateLogged, quantity, expDate, users_userid) VALUES ('$ingID','$iname','$dateLogged', '$quantity', '$expDate','4')";

$result = $conn->query($sql);
/*if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/

$conn->close();
header('Location: home.php');
?>
<html>
<body>
<?php

?>


</body>
</html>
