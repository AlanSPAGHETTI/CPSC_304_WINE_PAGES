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
	<title>The Wine Pages</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="winePagesUI.css">
	<link rel="icon" type="image/ico" href="logo.png" />
</head>
<body>
	<div class="header">
	<p><span>Wine / Pages <span>| CPSC 304</span><span><img src="logo.png"></p>
    </div>
  <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <form class="searchbox" id="searchbox" action="searchbox_results.php" method="post">
  	<input name="search_keyword" type="text" placeholder="Search our local wines...">
  	<button type="submit"><i class="fa fa-search"></i></button>
  </form>
  <a href="uiRegistration.php">Customer Registration</a>
  <a href="uiFavourite.php">Favourites</a>
  <a href="uiAdmin.php">Administrator's Page</a>
</div>
	<h1>Your Search Results For: <?php echo "'" . "$keyword" . "'"; ?></h1>

	<table class="searchboxtable" align="left">
		<tr>
			<th>Name</th>
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