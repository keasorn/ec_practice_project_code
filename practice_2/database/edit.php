<?php
include_once 'db.php';
$sql = "SELECT * FROM users where id=".$_GET['id'];

$conn = isset($conn) ? $conn : null;
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($query);
$fName = $data['first_name'];
$lName = $data['last_name'];
$tel = $data['tel'];
$age = $data['age'];
$pob = $data['pob'];
$salary = $data['salary'];
$dob = $data['dob'];
$description = $data['description'];
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
    <a href="select.php">View All User</a>
    <h2>EDIT USER FORM</h2>
    <form class="form-horizontal" action="update.php" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">First Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?=$fName?>" id="first_name" placeholder="Enter First Name" name="first_name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2"   for="email">Last Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?=$lName?>" id="last_name" placeholder="Enter Last Name" name="last_name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Phone Number:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?=$tel?>" id="tel"  name="tel">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Age:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" value="<?=$age?>" id="age"  name="age">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Date of Birth:</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="dob"  value="<?=$dob?>"  name="dob">
            </div>
        </div>
        <?php $provinces = array("Phnom Penh","Kandal","Prey Veng");?>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Place of Birth:</label>
            <div class="col-sm-10">
                <select  class="form-control" id="pob" name="pob">
                    <?php foreach ($provinces as $value){ ?>
                        <option value="<?php echo $value;?>" <?=$pob==$value?"selected":""?>><?php echo $value;?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Salary:</label>
            <div class="col-sm-10">
                <input type="number"  min="0" step="any" class="form-control" id="salary"  value="<?=$salary?>"  name="salary">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Description:</label>
            <div class="col-sm-10">
                <textarea name="description" id="description" class="form-control"><?=$description?></textarea>
            </div>
        </div>
        <div class="form-group">
            <input type="text" value="<?=$_GET['id']?>" name="id">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-info btn-warning">UPDATE</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>


