<?php
	include_once 'includes/connect.php';
	$conn = OpenCon();
	$sql = "SELECT * FROM customer;";
	$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Wine Pages: User Management</title>
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
<h1 class="FormTitle">User Management Control Panel</h1>
	<form class="Search3" id="Registration" action="insert_customers_landing.php" method="post">
		<button>Add User</button>
	</form>
	<form class="Search3" id="Registration" action="delete_customers_landing.php" method="post">
		<button>Remove User</button>
	</form>	
	<form class="Search3" id="Registration" action="update_customers_landing.php" method="post">
		<button>Update User Information</button>
</form>	
<h1 class="FormTitle">User Database:</h1>
<table class="databasetable" align="left">
		<tr>
			<th>Customer ID</th>
			<th>Customer Name</th>
			<th>Customer Address</th>
			<th>Customer Age</th>
		</tr>
	<?php 
		while($rows=mysqli_fetch_assoc($result))
		{
	?>
			<tr>
				<td><?php echo $rows['CustomerID']; ?></td>
				<td><?php echo $rows['CustomerName']; ?></td>
				<td><?php echo $rows['CustomerAddress']; ?></td>
				<td><?php echo $rows['CustomerAge']; ?></td>
			</tr>
	<?php 		
		}
	?>
	
	</table>

</body>
</html>