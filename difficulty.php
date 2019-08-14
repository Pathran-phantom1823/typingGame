<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>




<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="difficulty.css">
  <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); echo $_SESSION['avatar'] ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
  <div class="container">
  <div class="option"><br>
    <center><h1>Choose Your Type of Game</h1></center><br><br>
    <center>
                <a href="TypingEasy.html"><button type="button" class="btn btn-outline-warning btn-lg">Easy</button></a>
                <a href="TypingHard.html"><button type="button" class="btn btn-outline-primary btn-lg">Hard</button></a>
                <a href="TypingTest.html"><button type="button" class="btn btn-outline-danger btn-lg">Game</button></a><br><br><br>

                <a href="index.html"><button type="button" class="btn btn-info"><i class="fa fa-home">&nbsp;&nbsp;Go Back To HomePage</i></button></a>
  </center><br>
</div>
</div>
</body>
</html>