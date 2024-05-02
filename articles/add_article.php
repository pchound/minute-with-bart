<?php
session_start();
// Get the database connection file
require_once '../library/connections.php';


switch ($action)
{
    case 'new_article':
    $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $link = trim(filter_input(INPUT_POST, 'link', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $category = trim(filter_input(INPUT_POST, 'category', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
}

if (empty($title) || (empty($link)) || (empty($category)))
{
    $message = '<p>Please provide information for all empty form fields.</p>';
    include $_SERVER['DOCUMENT_ROOT'] . '/minute-with-bart/view/input-articles.php';
    exit;
}

$regOutcomeArticle = regArticle($id, $title, $link, $category, $created_at);

if($regOutcomeArticle === 1)
{
    if($regOutcomeVehicle === 1)
    {
       $message = "<p>Success!</p>";
       //include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/view/vehicle-management.php';
       include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/view/add-vehicle.php';
       exit;
    }
    else 
    {
       $message = "<p>Registration failed. Please try again.</p>";
       include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/view/add-vehicle.php';
       exit;
    }
   
}
?>