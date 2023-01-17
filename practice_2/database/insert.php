<?php
include_once 'db.php';
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$tel = $_POST['tel'];
$pob = $_POST['pob'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$isDeleted = 0;
$salary = $_POST['salary'];
$description = $_POST['description'];

$sql = "INSERT INTO users
    (first_name, last_name,tel, pob, age, 
     dob, salary, is_deleted, description) 
VALUES ('$firstName','$lastName','$tel'
,'$pob',$age,'$dob','$salary',
        '$isDeleted','$description')";

if (mysqli_query($conn, $sql)) {
    echo "New record has been added successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
mysqli_close($conn);
$newURL = "select.php";
header('Location: '.$newURL);
?>

