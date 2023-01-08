<html>

<head>
    <title>CRUD Operations</title>
</head>

<body>
    <h1>CRUD Operations</h1>
    <h2>Create</h2>
    <form action="crud.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age"><br>
        <input type="submit" value="Submit">
    </form>
    <h2>Read</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
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

  $sql = "SELECT * FROM users";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["name"]. "</td><td>" . $row["age"]. "</td></tr>";
      }
  } else {
      echo "0 results";
  }
  $conn->close();
?>
    </table>
    <h2>Update</h2>
    <form action="crud.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age"><br>
        <input type="submit" value="Submit">
    </form>
    <h2>Delete</h2>
    <form action="crud.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>