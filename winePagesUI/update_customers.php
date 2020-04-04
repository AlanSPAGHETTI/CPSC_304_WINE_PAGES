<?php
	include_once 'includes/connect.php';
	$conn = OpenCon();
	$customerID = $_POST['CustomerID'];
	$attribute = $_POST['Attribute'];
	$value = $_POST['Value'];
	$type = gettype($value);
	$sql = "";
	if (($type == 'integer') or ($type == 'double')) 
	{
		$sql = "UPDATE CUSTOMER SET $attribute=$value WHERE CustomerID=$customerID;";
	} else {
		$sql = "UPDATE CUSTOMER SET $attribute='$value' WHERE CustomerID=$customerID;";
	}
	mysqli_query($conn, $sql);	
	$sql_verify = "SELECT * FROM CUSTOMER WHERE CustomerID=$customerID;";
	$resultCheck = 1;
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
  <a href="uiQuickAccess.php">Quick Access Panel</a>
</div>
<?php 

?>
<?php 
if ($resultCheck > 0) {
?>
<h2>User information was successfully updated!</h2>
<?php 
header( "refresh:2; url=uiRegistration.php" ); 
exit; 
?>
<?php	
} elseif ($resultCheck == 0) {
?>
<h2>User information update failed. Please try again.</h2>
<?php 
header( "refresh:2; url=uiRegistration.php" ); 
exit; 
?>
<?php	
}
?>
</body>
</html>