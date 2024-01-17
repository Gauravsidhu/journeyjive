<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "journeyjive";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
  echo "you are not connected with database";
} else {
  echo "you are connected with database";
}

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];

$query = "INSERT INTO discover (name,email,number) VALUES ('$name','$email','$number')";

$result = mysqli_query($con, $query);

if ($result) {
  header("Location:dashboard.php");
} else {
  echo "your data is not inserted";
}

?>