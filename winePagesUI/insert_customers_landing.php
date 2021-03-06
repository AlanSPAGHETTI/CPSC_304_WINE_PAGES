<?php
	include_once 'includes/connect.php';
	$conn = OpenCon();
	$sql = "SELECT * FROM customer;";
	$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Wine Pages: Insert Users</title>
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
<h1 class="FormTitle">Add New User</h1>
	<form class="Search2" id="Registration" action="insert_customers.php" method="post">
		<div>
		<label for="FullName">Full Name:</label>
		<input type="text" name="FullName" placeholder="John P Smith" size="30" required>
		</div>

		<div>
		<label for="Address">Address:</label>
		<input type="text" name="Address" placeholder="2222 Adelaide St, Toronto" size="30" required>
		</div>

		<div>
		<label for="Age">Age:</label>
		<input type="number" name="Age" placeholder="21" size="1" min="1" max="130" required>
		</div>

		<button>Submit</button>
	</form>

</body>
</html>