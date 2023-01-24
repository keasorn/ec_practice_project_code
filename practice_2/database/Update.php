<?php

include_once 'db.php';
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$mobile = '9874561230';
$pod = 'Phnom Penh';
$age = 20;
$dob = '200-12-30';
$salary = 500.00;
$isDeleted = 0;
$description = "sfdsfds";
$id = $_POST['id'];

$sql = "UPDATE users SET 
                 first_name= '$firstname',
                 last_name = '$lastname',
                tel = '$mobile',
                pob = '$pod',
                age = $age,
                dob = '$dob',
                salary = $salary,
                is_deleted = $isDeleted,
                description = '$description'
             WHERE id=$id ";

$query = mysqli_query($conn,$sql);
if(!$query)
{
    echo "Query does not work.".mysqli_error($conn);die;
}
else
{
    echo "Data successfully updated";
}

mysqli_close($conn);
$newURL = "select.php";
header('Location: '.$newURL);
?>
