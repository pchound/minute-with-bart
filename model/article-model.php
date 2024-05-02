<?php
function regArticle($id, $title, $link, $category, $created_at)
{
$db = bartConnect();

$sql = 'INSERT INTO articles (id, title, link, category, created_at)
VALUES (:id, :title, :link, :category, :created_at';


$stmt = $db->prepare($sql);

$stmt->bindvalue(':id', $id, PDO::PARAM_INT);
$stmt->bindvalue(':title', $title, PDO::PARAM_STR);
$stmt->bindvalue(':link', $link, PDO::PARAM_STR);
$stmt->bindvalue(':category', $category, PDO::PARAM_STR);
$stmt->bindvalue(':created_at', $created_at, PDO::PARAM_STR);



// Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
}
?>