<?php
include 'views/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to PAMINAWA</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="./res/style.css" rel="stylesheet" type="text/css"/>
    <style>
    .carousel {
        height: 50vh;
    }
    .carousel-item img {
        width:  100%;
        height: 60vh; 
        object-fit: cover; 
    }
    .mt-4 {
        margin-top: 2rem; 
    }
    </style>
</head>
<body>

<h1 class="text-center mt-5">Hey, There Mga Ka-PAMINAWA</h1>
<p class="lead text-center">
    Join us today and dive into a world of music that matches your vibe and lifestyle. PAMINAWA offers personalized playlists for every mood—whether you're studying, relaxing, or working out.
</p>
<p class="text-center">
    We care about students, so enjoy our premium features for free with a special student plan. 
    Create playlists, listen offline, and connect with the community—all at no cost!
</p>

<div class="text-center mt-4">
    <a href="./registration.php" class="btn btn-primary btn-register">Register</a>
</div>

<div id="carouselExampleIndicators" class="carousel slide mt-4" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../res/image1.jpg" class="d-block" alt="Image 1">
        </div>
        <div class="carousel-item">
            <img src="../res/image2.jpg" class="d-block" alt="Image 2">
        </div>
        <div class="carousel-item">
            <img src="../res/image3.jpg" class="d-block" alt="Image 3">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php
include 'views/footer.php';
?>
</body>
</html>