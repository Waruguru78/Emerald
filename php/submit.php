<?php
  if ($_POST) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $order = $_POST['order'];
    
    // Connect to database
    $servername = "localhost";
    $username = "database_username";
    $password = "database_password";
    $dbname = "database_name";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    // Prepare SQL statement
    $sql = "INSERT INTO orders (name, email, order)
    VALUES ('$name', '$email', '$order')";
    
    // Execute SQL statement and close connection
    if ($conn->query($sql) === TRUE) {
      echo "Order saved successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
  }
?>