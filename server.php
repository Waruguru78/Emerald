<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


# my-shop-001
#My-shop-0001
require 'database.php';

$data = $_POST;

if(isset($_POST['add_order'])){

    $query = "INSERT INTO order set name=:name, email=:email, contact=:contact, address=:address, city=:city";

    $query = $db->prepare($query);

    $query->bindParam(':name', $data['name']);
    $query->bindParam(':email', $data['email']);
    $query->bindParam(':contact', $data['contact']);
    $query->bindParam(':address', $data['address']);
    $query->bindParam(':city', $data['city']);

    $status = $query->execute();

    if ($status)
        echo "Order Added";
    else
        echo "Order not Added!!";
}
elseif(isset($_POST['contact_us'])){

    $query = "INSERT INTO contact set name=:name, email=:email, message=:message";

    $query = $db->prepare($query);

    $query->bindParam(':name', $data['name']);
    $query->bindParam(':email', $data['email']);
    $query->bindParam(':message', $data['message']);

    $status = $query->execute();

    if ($status)
        echo "Message sent!";
    else
        echo "Message not sent!!";
}