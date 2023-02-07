<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'database.php';

$data = $_POST;

if(isset($_POST['add_review'])){

    $query = "INSERT INTO reviews SET name=:name, review=:review, email=:email";

    $query = $db->prepare($query);

    $query->bindParam(':name', $data['name']);
    $query->bindParam(':review', $data['review']);
    $query->bindParam(':email', $data['email']);

    $status = $query->execute();

    if ($status)
        echo "Review Added";
    else
        echo "Review not Added!!";

};

$reviews_query = $db->query("SELECT * FROM reviews");
$reviews = $reviews_query->fetchAll(PDO::FETCH_ASSOC);

foreach ($reviews as $review) {
    echo "<div class='review'>";
    echo "<p><strong>Name:</strong> " . $review['name'] . "</p>";
    echo "<p><strong>Review:</strong> " . $review['review'] . "</p>";
    echo "<p><strong>Review:</strong> " . $review['email'] . "</p>";
    echo "</div>";
}
?>