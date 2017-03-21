
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
$iname=$_POST['deleteItemName'];
$deleteItemKey=$_POST['deleteItemKey'];
$sql="DELETE FROM  ingredients WHERE iname='$iname' and ingID='$deleteItemKey'";

$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
header('Location: home.php');
?>
<html>
<body>
<?php

?>


</body>
</html>
