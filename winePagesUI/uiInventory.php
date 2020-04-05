<?php
include_once 'includes/connect.php';
$conn = OpenCon();
$sql = "SELECT MIN(WineCost), MAX(WineCost), AVG(WineCost) FROM WINE;";
$result = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Wine Pages: Admin</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="winePagesUI.css">
	<link rel="icon" type="image/ico" href="logo.png" />
</head>
<body>
	<div class="header">
	<p><span>Wine / Pages <span>| Admin Page</span><span><img src="logo.png"></p>
    </div>

   <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <form class="searchbox" id="searchbox" action="searchbox_results.php" method="post">
  	<input name="search_keyword" type="text" placeholder="Browse inventory...">
  	<button type="submit"><i class="fa fa-search"></i></button>
  </form>
  <a href="uiRegistration.php">Manage Users</a>
  <a href="uiFavourite.php">Manage Favorites</a>
  <a href="uiInventory.php">Inventory Stats</a>
  <a href="uiQuickAccess.php">Quick Access Panel</a>
	</div>

	<h1>Summary statistics for all wines</h1>
	<p>Least expensive wine: $<?php echo number_format($result["MIN(WineCost)"], 2); ?></p>
	<p>Most expensive wine:  $<?php echo number_format($result["MAX(WineCost)"], 2); ?></p>
	<p>Average cost of wine: $<?php echo number_format($result["AVG(WineCost)"], 2); ?></p>
</body>
</html>