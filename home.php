<?php
    include("users.php");
    $email=$_SESSION['email'];
    $profile=new users;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>| ENCRPTION|</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="icon" type="image/png" href="https://www.identrust.com/sites/default/files/inline-images/secure-authentication%20%281%29_0.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
        <style>
            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: black;
                padding: 15px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse" style="background-color: black">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="home.php">
                        <span style="color: white;font-weight: bolder">ENCRPTION</span>
                    </a>
                </div>
                <p class="navbar-text navbar-right" style="padding-right: 15px"><?php echo $email?>
                    &nbsp;&nbsp;&nbsp;
                    <a href="logout.php" class="navbar-link btn btn-info" style="text-decoration: none;font-weight: bold;color: white">LogOut</a>
                </p>
            </div>
        </nav>
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                
            </ul>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3>HOME</h3>
                    <center style="font-size:30px"><b>YOU ARE AUTHENTIC PERSON</b></center>
                    <br>
         
                </div>                
            </div>
        </div>
      
    </body>
</html>