<?php
	include_once 'includes/connect.php';
	$conn = OpenCon();
	$sql = "SELECT * FROM customer;";
	$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Wine Pages: Update User Info</title>
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
</div>
<h1 class="FormTitle">Update User Information</h1>
	<form class="Search2" id="Registration" action="update_customers.php" method="post">
		<div>
		<label for="CustomerID">Customer ID:</label>
		<input type="number" name="CustomerID" placeholder="type CustomerID" size="1" required>
		</div>
		<div>
			<label for="Attribute">Field to update:</label>
			<select name="Attribute" required>
				<option value="" disabled selected>Attribute</option>
				<option value="CustomerName">Customer Name</option>
				<option value="CustomerAddress">Customer Address</option>
				<option value="CustomerAge">Customer Age</option>
			</select>
		</div>
        <div>
		<label for="Value">Updated Value:</label>
		<input type="text" name="Value" size="30" required>
		</div>
		<button>Submit</button>
</form>

</body>
</html>