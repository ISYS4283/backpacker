<?php
    include 'sessions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">
    <meta name="viewport" content="width = device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="signup.css">
    
    <title>BackPacker</title>
</head>
<body>
    <header>
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-bar-target">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand" id="logo">BackPacker</a>
                </div>
                <div class="navbar-collapse collapse" id="nav-bar-target">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="about"><a href="about.php">About</a></li>
                        <li class="login"><a href="login.php">Log In</a></li>
                        <li class="about"><a href="logout.php">Log-out</a></li>
                    </ul>
                </div>
            </div>
        </div>    
    </header>
    
<form action="signupprocess.php" method="post">
  <div class="container" >
    
    <label class="signup">Sign-Up</label>
    <input type="text" placeholder="Name" name="name" >    
    <input type="text" placeholder="Username" name="uid" >
    <input type="password" placeholder="Password" name="pwd" >
    <input type="text" placeholder="Email" name="email" >
      
    <button type="submit">Sign-Up</button>
    <input  type="checkbox" checked="checked">
    <label class="remember"><b>Remember me</b></label><br>
  </div>

  <div class="container" style="background-color:#2c2c2c">
    <button type="button" class="cancelbtn">Cancel</button>
  </div>
</form>
    
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.js"></script>
</body>
<div class="navbar-fixed-bottom" id="footer">
    <footer>
        <span class="copyright">&copy Copyright 2016</span>
    </footer>
</div>
</html>
