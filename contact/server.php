<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'database.php';

$data = $_POST;

if(isset($_POST['add_message'])){

    $query = "INSERT INTO contact SET name=:name, email=:email, message=:message";

    $query = $db->prepare($query);

    $query->bindParam(':name', $data['name']);
    $query->bindParam(':email', $data['email']);
    $query->bindParam(':message', $data['message']);

    $status = $query->execute();

    if ($status)
        echo "Message sent";
    else
        echo "Message not sent!!";

};

?>