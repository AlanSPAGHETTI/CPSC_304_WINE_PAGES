<?php

include_once 'includes/connect.php';
$connection = OpenCon();

$customerId = $_POST['CustId'];
$customerExistsSQL = "SELECT * FROM customer WHERE CustomerID=?;";
$customerExists = checkIfExists($connection, "customer", $customerId, $customerExistsSQL);
// if the customer exists, check that the wine exists
if (!$customerExists) {
    echo "This customer does not exist";
    return;
} else {
    $wineId = $_POST['WineName'];
    $wineExistsSQL = "SELECT * FROM wine WHERE WineID=?;";
    $wineExists = checkIfExists($connection, "wine", $wineId, $wineExistsSQL);
    // if the wine exists, add a new entry to the favorites table
    if (!$wineExists) {
        echo "This wine does not exist";
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
            echo "Table {$tableName} does not contain {$data}";
            return false;
        } else {
            echo "Table {$tableName} contains {$data}";
            return true;
        }
    }
}
