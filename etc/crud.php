<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

// CREATE
if(isset($_POST['name']) && isset($_POST['age'])) {
  $name = $_POST['name'];
  $age = $_POST['age'];

  $sql = "INSERT INTO users (name, age) VALUES ('$name', '$age')";
  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// UPDATE
if(isset($_POST['name']) && isset($_POST['age'])) {
  $name = $_POST['name'];
  $age = $_POST['age'];

  $sql = "UPDATE users SET age='$age' WHERE name='$name'";
  if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// DELETE
if(isset($_POST['name'])) {
  $name = $_POST['name'];

  $sql = "DELETE FROM users WHERE name='$name'";
  if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>