<?php
include_once 'db.php';

$sql = "DELETE FROM users WHERE id='" . $_GET["id"] . "'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}



mysqli_close($conn);
$newURL = "select.php";
header('Location: '.$newURL);
?>
