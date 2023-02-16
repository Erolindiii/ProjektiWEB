<?php
require_once('DBS_Connection.php');
// Check if the form data has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Validate the form data
  if (empty($email) || empty($password)) {
    echo "Error: All fields are required";
    exit;
  }

  // Connect to the database
  $conn = mysqli_connect('hostname', 'email', 'password', 'database');
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Check if the user exists in the database
  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    echo "Login successful";
  } else {
    echo "Error: Invalid email or password";
  }

  // Close the database connection
  mysqli_close($conn);
}
?>
