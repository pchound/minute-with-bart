<?php
// Get the database connection file
require_once '../library/connections.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
  <link rel="stylesheet" href="../css/style.css">
  <title>A Minute With Bart</title>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">

  <a href="index.php"><img src="../images/site-logo.jpg" class="img-responsive" alt="a minute with bart"></a> 


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">


        <ul class="navbar-nav">

        <li class="nav-item dropdown">
            <a class="btn btn-dark dropdown" href="#" >
              A Minute With Bart
            </a>
          </li>

        <li class="nav-item dropdown">
            <a class="btn btn-dark dropdown" href="#" >
              Articles
            </a>
          </li>

          <li class="nav-item dropdown">
          
            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              TV Appearances
            </button>

              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="test.html">Stand alone</a></li>
               
              </ul>
          </li>


          <li class="nav-item dropdown">
            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Radio
            </button>

              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="#">Stand alone</a></li>
              </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="btn btn-dark dropdown" href="#" >
              Civics in a minute
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="btn btn-dark dropdown" href="#" >
              Literature
            </a>
          </li>

          <li class="nav-item dropdown">
            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Bart Tips
            </button>

              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="test.html">Cooking</a></li>
                <li><a class="dropdown-item" href="#">Gardening</a></li>
                <li><a class="dropdown-item" href="#">Life Hacks</a></li>
              </ul>
          </li>


          <li class="nav-item dropdown">
            <a class="btn btn-dark dropdown" href="#" >
              Shop
            </a>
          </li>


          <li class="nav-item dropdown">
            <a class="btn btn-dark dropdown" href="#" >
              Subscriber Exclusive
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
