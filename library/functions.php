<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection file
    include_once "connections.php";

    // Get form data
    $title = $_POST["title"];
    $link = $_POST["link"];

    // Prepare and execute SQL statement to insert data into the database using PDO
    $sql = "INSERT INTO articles (title, link) VALUES (:title, :link)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':link', $link);
    $stmt->execute();

    // Redirect to the form page with success message
    header("Location: index.php?success=1");
    exit;
}
?>
