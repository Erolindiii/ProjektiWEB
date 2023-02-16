<?php
require_once('DBS_Connection.php');
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Validate the form data
  // ...

  // Connect to the database
  $conn = mysqli_connect('host', 'username', 'email' , 'password', 'dbname');
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Insert the data into the database
  $sql = "INSERT INTO users (username, email, password)
          VALUES ('$username', '$password', '$email')";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close the database connection
  mysqli_close($conn);
}
?>