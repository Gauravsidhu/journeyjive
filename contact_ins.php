<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "journeyjive";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
  echo "Failed to connect to the database: " . mysqli_connect_error();
  exit;
}

// Check if the form was submitted and if the required fields are set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'], $_POST['email'], $_POST['textarea'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $textarea = $_POST['textarea'];

  $query = "INSERT INTO contact (name, email, textarea) VALUES ('$name', '$email', '$textarea')";

  $result = mysqli_query($con, $query);

  if (!$result) {
    echo "Error: " . mysqli_error($con);
  } else {
    // echo "Name: $name, Email: $email, Textarea: $textarea";
    header("Location:contact.php");
  }
} else {
  echo "Form not submitted or required fields are missing.";
}

?>