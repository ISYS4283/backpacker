<?php
    session_start();
    $str = "You are not logged in";
    if(isset($_SESSION['id'])) {
       echo $_SESSION['id'];
}   else {
    echo addslashes($str);
}

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
    <link rel="stylesheet" href="dashboard.css">
    <title>BackPacker</title>
	<link href="js/jquery.bootgrid.css" rel="stylesheet">
	
</head>
<body>
    <header>
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand" id="logo">BackPacker</a>
                </div>
				<!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Sidebar
                    </a>
                </li>
				<li class ="sidebar-border">
				</li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
        </div>
        <!-- /#sidebar-wrapper -->
                <div class="navbar-collapse collapse" id="nav-bar-target">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="login"><a href="login.html">Log In</a></li>
                    </ul>
				</div>
            </div>
			
        </div>    
    </header>
	
	<table id ="geargrid" class="table table-condensed table-hover table-striped" data-toggle="bootgrid" data-ajax="true" data-url="localhost" style="margin-left:212px;">
	<thead>
	<tr>
		<th data-column-id="gearID" data type="numeric" style="color: white;">ID</th>
		<th data-column-id="gearName" style="color: white;">Gear Name</th>
		<th data-column-id="gearType" style="color: white;">Gear Type</th>
		<th data-column-id="gearCost" data type="numeric" style="color: white;">Gear Cost</th>
		<th data-column-id="gearRating" data type="numeric" style="color: white;">Gear Rating</th>
	</tr>
	</thead>
	<tbody>
	...
	</tbody>
	</table>

<!-- textboxes that allow a user to post data to their gear lits

Feel free to prettify this if you want

gearID, gearName, gearType, gearCost, gearRating

-->
<form action="insert.php" method="post">

Gear&nbsp;Name: <input type="text" name="gearNameformbox" />

Gear&nbsp;Type: <input type="text" name="gearTypeformbox" />

Gear&nbsp;Cost: <input type="text" name="gearCostformbox" />

Gear&nbsp;Rating: <input type="text" name="gearRatingformbox" />



 

<input type="submit" />

</form>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<!-- Include bootgrid plugin (below), -->
    <script src="js/jquery.bootgrid.min.js"></script>

<!--- bootgrid js. Will add to this.

For documentation see: http://www.jquery-bootgrid.com/documentation

-->

<script langauge="javascript">

$("geargrid").bootgrid();
	

</script>

</body>
</html>
