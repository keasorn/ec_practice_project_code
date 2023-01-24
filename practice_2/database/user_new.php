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
    <h2>USER FORM</h2>
    <form class="form-horizontal" action="insert.php" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">First Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Last Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Phone Number:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="tel"  name="tel">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Age:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="age"  name="age">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Date of Birth:</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="dob"  name="dob">
            </div>
        </div>
        <?php $provinces = array("Phnom Penh","Kandal","Prey Veng");?>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Place of Birth:</label>
            <div class="col-sm-10">
                <select  class="form-control" id="pob" name="pob">
                    <?php foreach ($provinces as $value){ ?>
                        <option value="<?php echo $value;?>"><?php echo $value;?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Salary:</label>
            <div class="col-sm-10">
                <input type="number"  min="0" value="0" step="any" class="form-control" id="salary"  name="salary">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Description:</label>
            <div class="col-sm-10">
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-info btn-warning">SUBMIT</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
