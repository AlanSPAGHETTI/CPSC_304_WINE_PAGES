<?php
	include_once 'includes/connect.php';
	$conn = OpenCon();
	$sql = "Select c.CustomerName, c.CustomerID
			FROM customer c
			WHERE NOT EXISTS
					(Select *
     				FROM wine w
     				WHERE NOT EXISTS
     						(Select b.CustomerID
         					FROM wine_browsed_by b
         					WHERE c.CustomerID=b.CustomerID AND
         					w.WineID=b.WineID)
     				);";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	$sql_table = "SELECT * FROM wine_browsed_by;";
    $resultTable = mysqli_query($conn, $sql_table);
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Wine Pages: Division Query Result</title>
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
<?php if ($resultCheck == 0) 
	{
?>	
	 <h3>Sorry, we could not find any customers that have browsed all wines. :(</h3>
<?php
	} 
?>  <div>
    <h1>Division Query Result: (& Wine_Browsed_By Table below)</h1>
	<table class="searchboxtable" align="left">
		<tr>
			<th><?php echo "Customer Name"; ?></th>
			<th><?php echo "Customer ID"; ?></th>
		</tr>
	<?php 
		while($rows=mysqli_fetch_assoc($result))
		{
	?>
			<tr>
				<td><?php echo $rows['CustomerName']; ?></td>
				<td><?php echo $rows['CustomerID']; ?></td>
			</tr>
	<?php 		
		}
	?>	
	</table>
    </div>

	<div>
	<table class="searchboxtable" align="left">
		<tr>
			<th>WineBrowsedByID</th>
			<th>WineID</th>
			<th>CustomerID</th>
			<th>LastVisited</th>
			<th>Delete</th>
		</tr>
	<?php 
		while($rowsTable=mysqli_fetch_assoc($resultTable))
		{
	?>
			<tr>
				<td><?php echo $rowsTable['WineBrowsedByID']; ?></td>
				<td><?php echo $rowsTable['WineID']; ?></td>
				<td><?php echo $rowsTable['CustomerID']; ?></td>
				<td><?php echo $rowsTable['LastVisited']; ?></td>
				<td><form id="browsDelete" action="delete_browsed.php" method="post">
                        <div hidden>
                            <input type="text" name="WineBrowsedByID" value=<?php echo $rowsTable['WineBrowsedByID']; ?>>
                        </div>
                        <button>X</button>
                    </form></td>
			</tr>
	<?php 		
		}
	?>
	
	</table>
</div>
</body>
</html>