<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "journeyjive";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $birth = $_POST['birth'];
  $email = $_POST['email'];
  $raw_password = $_POST['password']; // Password in plain text

  // Hash the password before storing it in the database
  $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);

  $address = $_POST['address'];

  $query = "INSERT INTO signup (firstname, lastname, birth, email, password, address) VALUES (?, ?, ?, ?, ?, ?)";
  $stmt = mysqli_prepare($con, $query);
  mysqli_stmt_bind_param($stmt, "ssssss", $firstname, $lastname, $birth, $email, $hashed_password, $address);

  if (mysqli_stmt_execute($stmt)) {
    echo "Your data is inserted";
    echo "<br>";
    header("Location: login.php");
    exit();
  } else {
    echo "Your data is not inserted";
  }

  mysqli_stmt_close($stmt);
}

mysqli_close($con);
?>