<?php

    session_start();

    define("APPURL" , "http://localhost/Simple_bookshop_website-usingPHP");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5c5946fe44.js" crossorigin="anonymous"></script>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark" >
    <div class="container" style="margin-top: none">
        <a class="navbar-brand  text-white" href="<?php echo APPURL; ?>">Bookstore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active  text-white" aria-current="page" href="<?php echo APPURL; ?>">Home</a>
            </li>
            <li class="nav-item ">
            <a class="nav-link  text-white" href="<?php echo APPURL; ?>/contact.php">Contact</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active  text-white" aria-current="page" href="<?php echo APPURL; ?>/categories/index.php">Categories</a>
            </li>

            <?php if(isset($_SESSION['username'])) : ?>

            <li class="nav-item">
            <a class="nav-link active  text-white" aria-current="page" href="<?php echo APPURL; ?>/shopping/cart.php"><i class="fas fa-shopping-cart"></i>(2)</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Username
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link  text-white" href="<?php echo APPURL; ?>/auth/login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  text-white" href="<?php echo APPURL; ?>/auth/register.php">Register</a>
            </li>
        </ul>
       
        </div>
    </div>
    
    </nav>
</body>
</html>