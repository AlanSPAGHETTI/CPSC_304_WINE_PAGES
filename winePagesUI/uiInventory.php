<?php
include_once 'includes/connect.php';
$conn = OpenCon();

// here we have code for non-grouped summary stats
$sql    = "SELECT MIN(WineCost), MAX(WineCost), AVG(WineCost) FROM WINE;";
$result = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($result);

// here we have code for grouped summary stats
$sql_group    = "SELECT QUALITY.QualityName, MIN(WINE.WineCost), MAX(Wine.WineCost), AVG(Wine.WineCost) FROM WINE, WINE_HAS_QUALITY, QUALITY WHERE WINE.WineID = WINE_HAS_QUALITY.WineID AND WINE_HAS_QUALITY.QualityID = QUALITY.QualityID GROUP BY QUALITY.QualityName";
$result_group = mysqli_query($conn, $sql_group);
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

	<h1>Summary statistics for each type</h1>

    <table class="searchboxtable" align="center">
        <tr>
            <th>Type name</th>
            <th>Minimum price</th>
            <th>Maximum price</th>
            <th>Average price</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($result_group))
        {
            ?>
            <tr>
                <td><?php echo $row['QualityName'];                          ?></td>
                <td><?php echo number_format($row['MIN(WINE.WineCost)'], 2); ?></td>
                <td><?php echo number_format($row['MAX(Wine.WineCost)'], 2); ?></td>
                <td><?php echo number_format($row['AVG(Wine.WineCost)'], 2); ?></td>
            </tr>
            <?php
        }
        ?>
    </table>

</body>
</html>