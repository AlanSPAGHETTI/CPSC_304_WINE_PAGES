<?php
	include_once 'includes/connect.php';
	$conn = OpenCon();
	$name = $_POST['FullName'];
	$address = $_POST['Address'];
	$age = $_POST['Age'];
	$sql = "INSERT INTO CUSTOMER (CustomerName, CustomerAddress, CustomerAge) VALUES ('$name', '$address', $age);";
	mysqli_query($conn, $sql);	
	$sql_verify = "SELECT * FROM CUSTOMER WHERE CustomerName = '$name' AND CustomerAddress = '$address' AND CustomerAge = $age;";
	$result = mysqli_query($conn, $sql_verify);
	$resultCheck = mysqli_num_rows($result);	
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Wine Pages</title>
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
<?php 
if ($resultCheck > 0) {
?>
<h3>New customer registration was successful!</h3>
<?php	
} elseif ($resultCheck == 0) {
?>
<h3>New customer registration failed. Please try again.</h3>
<?php	
}
?>
</body>
</html>