<?php
include_once 'db.php';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mobile = '9874561230';
$pod = 'Phnom Penh';
$age = 20;
$dob = '200-12-30';
$salary = 500.00;
$isDeleted = 0;
$description = "sfdsfds";


$sql = "INSERT INTO users
    ( first_name, last_name, tel,pob, age,dob, salary, 
     is_deleted, `description`) VALUES 
    ('$firstname','$lastname','$mobile','$pod',$age,'$dob',
     $salary,$isDeleted,'$description')";

//echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "New record has been added successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
mysqli_close($conn);
