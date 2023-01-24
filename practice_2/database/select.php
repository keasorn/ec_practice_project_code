
<a href="user.php">Create New <Br></a>
<?php
include_once 'db.php';

$sql = "SELECT * FROM users";

$query = mysqli_query($conn,$sql);

if(!$query)
{
    echo "Query does not work.".mysqli_error($conn);die;
}

while($data = mysqli_fetch_array($query)){
    echo "Id = ".$data['id']."<br>";
    echo "Firstname = ".$data['first_name']."<br>";
    echo "Lastname = ".$data['last_name']."<br>";
    echo "Mobile = ".$data['tel']."<br>";
    echo "<a href='delete.php?id=".$data['id']."'>Delete Now</a> | <a href='edit-user.php?id=".$data['id']."'>Edit</a><br><hr>";
}


