    <!DOCTYPE html>
    <html>
    <head>
        <title>The Wine Pages: Delete Browse Data</title>
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
    <h1 class="FormTitle">Customer Favourites!</h1>
    </body>
    </html>

<?php

include_once 'includes/connect.php';
$conn = OpenCon();
$wineBrowseID = $_POST['WineBrowsedByID'];
$sql = "DELETE FROM wine_browsed_by WHERE WineBrowsedByID=$wineBrowseID;";
// Delete wineBrowsedBy entry
$result = mysqli_query($conn, $sql);

// check for succesful deletion
$sqlCheck = "SELECT * FROM wine_browsed_by WHERE WineBrowsedByID=$wineBrowseID;";
$resultVerify = mysqli_query($conn, $sqlCheck);
$resultCheck = mysqli_num_rows($resultVerify);

?>

<?php
if ($resultCheck <= 0) {
    ?>
    <h2>Browsing history entry deletion was successful!</h2>
    <?php
    header( "refresh:2; url=uiQuickAccess.php" );
    exit;
    ?>
    <?php
} elseif ($resultCheck > 0) {
    ?>
    <h2>Browsing history deletion failed. Please try again.</h2>
    <?php
    header( "refresh:2; url=uiQuickAccess.php" );
    exit;
    ?>
    <?php
}
?>
