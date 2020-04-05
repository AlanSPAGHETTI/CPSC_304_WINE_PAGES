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
    </div>
    <h1 class="FormTitle">Customer Favourites!</h1>
    </body>
    </html>

<?php

include_once 'includes/connect.php';
$connection = OpenCon();
$resultCheck = null;

$wineName = $_POST['wineFavToDelete'];
$wineYear = $_POST['yearFavToDelete'];
$custId = $_POST['custIdFavToDelete'];

// get wineID
$wineIdSql = mysqli_query($connection,"SELECT WineID FROM wine WHERE WineName LIKE '%$wineName%' AND WineYear LIKE '%$wineYear%';");
$wineId = mysqli_fetch_array($wineIdSql)['WineID'];

// delete favorite
$deleteSql = "DELETE FROM favorite WHERE CustomerID = '$custId' AND WineID = '$wineId';";
mysqli_query($connection, $deleteSql);
$sql_verify = "SELECT * FROM favorite WHERE CustomerID = '$custId' AND WineID = '$wineId';";
$result = mysqli_query($connection, $sql_verify);
$resultCheck = mysqli_num_rows($result);
?>

<?php
if ($resultCheck <= 0) {
    ?>
    <h2>Favorite deletion was successful!</h2>
    <?php
    header( "refresh:2; url=uiFavourite.php" );
    exit;
    ?>
    <?php
} elseif ($resultCheck > 0) {
    ?>
    <h2>Favorite deletion failed. Please try again.</h2>
    <?php
    header( "refresh:2; url=uiFavourite.php" );
    exit;
    ?>
    <?php
}
?>
