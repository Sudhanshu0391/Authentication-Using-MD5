<!DOCTYPE html>
<html lang="en">
<head>
<title>| ENCRYPTION |</title>
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
<a class="navbar-brand" href="index.php">
<span style="color: white;font-weight: bolder">
ENCRYPTION</span>
</a>

</nav>
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="panel panel-info">
<div class="panel-heading"><h4>Login Form</h4></div>
<div class="panel-body">
<?php
if(isset($_GET['run']) && $_GET['run']=="failed")
{
echo "<mark>Your Email or Password is wrong.</mark>";
}
?>
<form action="login_sub.php" method="post">
<div class="form-group">
<label for="email">Email:</label>
<input type="email" class="form-control" id="email" placeholder="Enter email" name="e" required>
</div>
<div class="form-group">
<label for="pwd">Password:</label>
<input type="password" class="formcontrol" id="pwd" placeholder="Enter password" name="p" required>
</div>
<button type="submit" class="btn btn-success">Submit <i class="fas fa-sign-in-alt"></i></button>
</form>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="panel panel-info">
<div class="panel-heading"><h4>SignUp Form</h4>
</div>
<div class="panel-body">
<?php
if(isset($_GET['run']) && $_GET['run']=="success")
{
echo "<mark>You have successfully registered. Now Log In.</mark>";
}
?>
<form method="post" enctype="multipart/form-data" action="sign_sub.php">
<div class="form-group">
<label for="name">Name:</label>
<input type="text" class="form-control" name="n" id="name" placeholder="Enter name" required>
</div>
<div class="form-group">
<label for="email">Email:</label>
<input type="email" class="form-control" name="e" id="email" placeholder="Enter email" required>
</div>
<div class="form-group">
<label for="pwd">Password:</label>
<input type="password" class="formcontrol" name="p" id="pwd" placeholder="Enter password" required>
</div>

<button type="submit" class="btn btn-success">Submit <i class="fas fa-sign-in-alt"></i></button>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="footer">
<span style="font-weight: bolder;color: white;padding-left:430px;">Made with <span style="color: red"><i class="far fa-heart"></i></span> for VIT</span>
<span style="font-weight: bolder;color: white;padding-left:300px;">&copy 2020 Rishabh Kansal</span>
</div>
</body>
</html>