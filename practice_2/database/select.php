<?php
include_once 'db.php';

$sql = "SELECT * FROM users";

$conn = isset($conn)?$conn:null;
$query = mysqli_query($conn,$sql);

if(!$query)
{
    echo "Query does not work.".mysqli_error($conn);die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>USER LIST</h2>
    <a href="user.php" class="text-right btn btn-sm btn-primary" style="text-align: right;float: right;">Create New <Br></a>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Phone</th>
            <th>Place of Birth</th>
            <th>Salary</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
while($data = mysqli_fetch_array($query)){?>
        <tr>
            <td><?php echo $data['first_name'];?></td>
            <td><?php echo $data['last_name'];?></td>
            <td><?php echo $data['tel'];?></td>
            <td><?php echo $data['pob'];?></td>
            <td><?php echo $data['salary'];?></td>
            <td><a href="edit.php?id=<?php echo $data['id'];?>" class="btn btn-sm btn-info">EDIT</a> | <a href="delete.php?id=<?php echo $data['id'];?>" class="btn btn-sm btn-danger">Delete</a></td>
        </tr>
        <?php }?>
        </tbody>
    </table>
</div>

</body>
</html>


<?php
/**
 *  @property $conn
 */
?>
