<!DOCTYPE html>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<html>
      <head>
         <meta charset="UTF-8">
         <title>PAMINAWA</title>
         <link href="./res/style.css" rel="stylesheet" type="text/css"/>
      </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <form class="form-inline">
    <input class="form-control mr-sm-2" type="What do you want to play?" placeholder="What do you want to play?" aria-label="What do you want to play?">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
    <a class="navbar-brand" href="index.php">
        <img src="views/paminawa.png" width="30" height="30" class="d-inline-block align-top" alt="">
        PAMINAWA
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <?php 
    if(isset($_SESSION['uid'])){
?>      
            <a href="./index.php">
<?php
    echo $_SESSION['fname']." ".$_SESSION['lname'];
?>
            </a>
            <a href="./models/logout_user.php">Logout</a>
                
<?php   
    }
    else{
       
?>
            <a href="./login.php">Login</a>
            <a href="./registration.php">Register</a>
    <?php }       

?>
        <ul class="navbar-nav">                                               
            <li class="nav-item">
                <a class="nav-link" href="./playlist.php">Paminawa Here</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./upgrade.php">Upgrade to Premium</a>
            </li>
            
        </ul>
    </div>
</nav>
