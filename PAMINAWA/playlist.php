<?php include 'views/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAMINAWA DRI</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="./res/style.css" rel="stylesheet" type="text/css"/>
    <style>
        body {
            background-color: #121212;  
            color: #ffffff;             
        }
        .album-cover {
            width: 100%;
            height: 200px; 
            object-fit: cover;
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;
}
        .message-container {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
        }
        .message {
            background-color: #1e1e1e;
            padding: 10px;
            border-radius: 5px;
            margin: 5px 0;
        }
        .message input {
            width: 85%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">PAMINAWA HERE</h1>
        
        <div class="row mt-4">
            <div class="col-md-12">
                <h5>Discover picks for you</h5>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card bg-dark text-white">
                            <img src="../res/jennie.png" class="card-img-top album-cover" alt="Artist">
                            <div class="card-body">
                                <h5 class="card-title">Mantra</h5>
                                <p class="card-text">JENNIE</p>
                                <button class="btn btn-primary">Share</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-dark text-white">
                            <img src="../res/ariana.png" class="card-img-top album-cover" alt="Artist">
                            <div class="card-body">
                                <h5 class="card-title">Positions</h5>
                                <p class="card-text">Ariana Grande</p>
                                <button class="btn btn-primary">Share</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-dark text-white">
                            <img src="../res/olivia.png" class="card-img-top album-cover" alt="Artist">
                            <div class="card-body">
                                <h5 class="card-title">Good 4 U</h5>
                                <p class="card-text">Olivia Rodrigo</p>
                                <button class="btn btn-primary">Share</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-dark text-white">
                            <img src="../res/butterflies.jfif" class="card-img-top album-cover" alt="Artist">
                            <div class="card-body">
                                <h5 class="card-title">Butterfly</h5>
                                <p class="card-text">JAY PARK</p>
                                <button class="btn btn-primary">Share</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h5 class="mt-4">Recently Played</h5>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card bg-dark text-white">
                            <img src="../res/jisoo.png" class="card-img-top album-cover" alt="Track">
                            <div class="card-body">
                                <h5 class="card-title">AMORTAGE - JISOO</h5>
                                <button class="btn btn-primary">Comment</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-dark text-white">
                            <img src="../res/dynamite.jfif" class="card-img-top album-cover" alt="Track">
                            <div class="card-body">
                                <h5 class="card-title">Dynamite - BTS</h5>
                                <button class="btn btn-primary">Comment</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-dark text-white">
                            <img src="../res/sta.png" class="card-img-top album-cover" alt="Track">
                            <div class="card-body">
                                <h5 class="card-title">Stay - The Kid LAROI</h5>
                                <button class="btn btn-primary">Comment</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-dark text-white">
                            <img src="../res/blinding.png" class="card-img-top album-cover" alt="Track">
                            <div class="card-body">
                                <h5 class="card-title">Blinding Lights - The Weeknd</h5>
                                <button class="btn btn-primary">Comment</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h5 class="mt-4">Message Other Artists</h5>
                <div class="message-container">
                    <div class="message">
                        <strong>Jayfford Gang</strong>: <span>Hey, I loved your new paminawa track!</span>
                    </div>
                    <div class="message">
                        <form>
                            <input type="text" placeholder="Message..." />
                            <button type="submit" class="btn btn-secondary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>