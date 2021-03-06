<?php
include_once 'includes/connect.php';
$conn = OpenCon();
$sql = "SELECT * FROM favorite, wine, customer WHERE favorite.WineID = wine.WineID AND customer.CustomerID = favorite.CustomerID;";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Wine Pages: Favourites</title>
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
    <h1 class="FormTitle">Favorites Management Control Panel</h1>
    <form class="Search3" id="Registration" action="insert_favorites_landing.php" method="post">
        <button>Add Favorite</button>
    </form>

<h1 class="FormTitle">Customer Favourites!</h1>

    <table class="searchboxtable" align="center">
        <tr>
            <th>Customer Name</th>
            <th>Customer ID</th>
            <th>Wine Name</th>
            <th>Wine Year</th>
            <th>Wine Cost</th>
            <th>Delete</th>
        </tr>
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <td><?php echo $rows['CustomerName']; ?></td>
                <td><?php echo $rows['CustomerID']?></td>
                <td><?php echo $rows['WineName']; ?></td>
                <td><?php echo $rows['WineYear']; ?></td>
                <td><?php echo $rows['WineCost']; ?></td>
                <td><form id="favDelete" action="delete_favorite.php" method="post">
                        <div hidden>
                            <input type="text" name="custIdFavToDelete" value=<?php echo $rows['CustomerID']; ?>>
                            <input type="text" name="wineFavToDelete" value=<?php echo $rows['WineName']; ?>>
                            <input type="text" name="yearFavToDelete" value=<?php echo $rows['WineYear']; ?>>
                        </div>
                        <button>X</button>
                    </form></td>
            </tr>
            <?php
        }
        ?>

    </table>

</body>
</html>
