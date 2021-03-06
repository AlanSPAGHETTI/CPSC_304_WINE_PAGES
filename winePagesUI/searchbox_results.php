<?php
	include_once 'includes/connect.php';
	$conn = OpenCon();
	$keyword = $_POST['search_keyword'];
	$sql = "";
	$sql = "SELECT * FROM wine where WineABV like '%$keyword%' OR WineCost like '%$keyword%' OR WineYear like '%$keyword%' OR WineName like '%$keyword%';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Wine Pages: Search Results</title>
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
	<h1>Your Search Results For: <?php echo "'" . "$keyword" . "'"; ?></h1>
<?php if ($resultCheck == 0) 
	{
?>	
	 <h3>Sorry, we could not find anything matching your query. :(</h3>
<?php
	} 
?>
	<table class="searchboxtable" align="left">
		<tr>
			<th>Name</th>
			<th>Wine ID</th>
			<th>Vintage</th>
			<th>Cost</th>
			<th>Alcohol Content (%)</th>
		</tr>
	<?php 
		while($rows=mysqli_fetch_assoc($result))
		{
	?>
			<tr>
				<td><?php echo $rows['WineName']; ?></td>
				<td><?php echo $rows['WineID']; ?></td>
				<td><?php echo $rows['WineYear']; ?></td>
				<td><?php echo $rows['WineCost']; ?></td>
				<td><?php echo $rows['WineABV']; ?></td>
			</tr>
	<?php 		
		}
	?>
	
	</table>
</body>
</html>