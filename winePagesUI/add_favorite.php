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
<h1 class="FormTitle">Customer Favourites!</h1>

</body>
</html>

<?php

include_once 'includes/connect.php';
$connection = OpenCon();
$resultCheck = null;

$customerId = $_POST['CustId'];
$customerExistsSQL = "SELECT * FROM customer WHERE CustomerID=?;";
$customerExists = checkIfExists($connection, "customer", $customerId, $customerExistsSQL);
// if the customer exists, check that the wine exists
if (!$customerExists) {
    echo '<p style="color: red;">
      Customer ID does not exist
      </p>';
    return;
} else {
    $wineId = $_POST['WineName'];
    $wineExistsSQL = "SELECT * FROM wine WHERE WineID=?;";
    $wineExists = checkIfExists($connection, "wine", $wineId, $wineExistsSQL);
    // if the wine exists, add a new entry to the favorites table
    if (!$wineExists) {
        echo '<p style="color: red;">
        Wine ID does not exist
        </p>';
        return;
    } else {
        // add a favorite
        $addFavSql = "INSERT INTO favorite (CustomerID, WineID, DateAdded) VALUES ($customerId, $wineId, CURRENT_DATE);";
        mysqli_query($connection, $addFavSql);
        $sql_verify = "SELECT * FROM favorite WHERE CustomerID = '$customerId' AND WineID = '$wineId';";
        $result = mysqli_query($connection, $sql_verify);
        $resultCheck = mysqli_num_rows($result);
    }
}

function checkIfExists($conn, $tableName, $data, $sqlToExecute) {
    $sql = $sqlToExecute;
    // create prepared statement
    $stmt = mysqli_stmt_init($conn);
    // prepare statement
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed";
    } else {
        // bind parameter
        mysqli_stmt_bind_param($stmt, "s", $data);
        // run
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        // check if customer exists
        if (mysqli_num_rows($result) <= 0) {
            return false;
        } else {
            return true;
        }
    }
}
?>

<?php
if ($resultCheck > 0) {
    ?>
    <h2>New favorite registration was successful!</h2>
    <?php
    header( "refresh:2; url=uiFavourite.php" );
    exit;
    ?>
    <?php
} elseif ($resultCheck == 0) {
    ?>
    <h2>New favorite registration failed. Please try again.</h2>
    <?php
    header( "refresh:2; url=uiFavourite.php" );
    exit;
    ?>
    <?php
}
?>
