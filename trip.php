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
    <link rel="stylesheet" href="dashboard.css">
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
                        <li class="about"><a href="logout.php">Log-out</a></li>
                    </ul>
                </div>
            </div>
        </div>    
				<!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Dashboard
                    </a>
                </li>
				<li class ="sidebar-border">
				</li>
                <li>
                    <a href="dashboard.php">Gear-Lists</a>
                </li>
                <li>
                    <a href="trip.php">Trips</a>
                </li>
                <li>
                    <a href="#">Help</a>
                </li>
        </div>
        <!-- /#sidebar-wrapper -->
   
    </header>
<br>
<form action="tripprocess1.php" class="form1" method="post">
    <div class="container" >
        <label class="label">Trip Details</label><br>
        <input type="text" placeholder="Trip name" name="name">
        <input type="text" placeholder="Description" name="description">
        <input type="text" placeholder="Start Date (YYYY-MM-DD)" name="start">
        <input type="text" placeholder="End Date (YYYY-MM-DD)" name="end">
        <button type="submit">Submit</button>
    </div>
</form>
<br>  
<br>      
<form action="tripprocess2.php" class="form2" method="post">
    <div class="container" >
        <label class="label">Location Details</label><br>
        <input type="text" placeholder="City" name="description">
        <input type="text" placeholder="State" name="start">
        <input type="text" placeholder="Country" name="end">
        <button type="submit">Submit</button>
    </div>
</form>
        
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>


