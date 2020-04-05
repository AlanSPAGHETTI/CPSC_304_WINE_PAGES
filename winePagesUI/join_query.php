<?php
	include_once 'includes/connect.php';
	$conn = OpenCon();
	$compareField1 = $_POST['FieldOne'];
	$compareField2 = $_POST['FieldTwo'];
	$operator = $_POST['Operator'];
	$sql = "SELECT * FROM grape, quality WHERE $compareField1 $operator $compareField2;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = null;
	if ($result == false) {
	    $resultCheck = 0;
    } else {
        $resultCheck = mysqli_num_rows($result);
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>The Wine Pages: Join Query Results</title>
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
	 <h3>Sorry, we could not find anything matching your query. :(</h3>
<?php
	} 
?>
    <h1>Join Query Result:</h1>
	<table class="searchboxtable" align="left">
		<tr>
            <th>GrapeID</th>
            <th>GrapeName</th>
            <th>GrapeSize</th>
            <th>GrapeColor</th>
            <th>QualityID</th>
            <th>QualityName</th>
            <th>QualityAroma</th>
            <th>QualityColor</th>
            <th>QualityFlavor</th>
		</tr>
	<?php
		while($rows=mysqli_fetch_assoc($result))
		{
	?>
			<tr>
                <td><?php echo $rows["GrapeID"]; ?></td>
                <td><?php echo $rows["GrapeName"]; ?></td>
                <td><?php echo $rows["GrapeSize"]; ?></td>
                <td><?php echo $rows["GrapeColor"]; ?></td>
                <td><?php echo $rows["QualityID"]; ?></td>
                <td><?php echo $rows["QualityName"]; ?></td>
                <td><?php echo $rows["QualityAroma"]; ?></td>
                <td><?php echo $rows["QualityColor"]; ?></td>
                <td><?php echo $rows["QualityFlavor"]; ?></td>
			</tr>
	<?php
		}
	?>
	
	</table>
</body>
</html>
