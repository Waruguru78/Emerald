<?php
  if ($_POST) {
    // Get form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    
    // Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "emerald";
    
    // Create connection
    $conn = new mysqli("mysql:host=$servername;dbname=$dbname", $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    // Prepare SQL statement
    $sql = "INSERT INTO order (fname, lname, contact, address, city)
    VALUES ('$fname', '$lname','$contact','$address', '$city')";
    
    // Execute SQL statement and close connection
    if ($conn->query($sql) === TRUE) {
      echo "Order saved successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
  }
?>