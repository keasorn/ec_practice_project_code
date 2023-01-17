<?php
include_once 'db.php';
$firstName = 'Hello';
$lastName = 'Test';
$tel = '9874561230';
$pob = 'Phnom Penh';
$age = 20;
$dob = '2020-01-15';
$isDeleted = 0;
$salary = 300.50;
$description = 'HELLO KDSFDSF';

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

?>
