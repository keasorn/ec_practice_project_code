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
<?php
 $myProjectTitle ="Web Application EC Group A ABCD";
$array = array("Pineapple", "Grapefruit", "Banana", "AAAA", "BBBB");
?>
?>

<div class="jumbotron text-center">
    <h1><?php echo  $myProjectTitle;?></h1>
    <p>Resize this responsive page to see the effect!</p>
</div>

<div class="container">
    <div class="row">
        <?php foreach ($array as $key=>$value){?>
        <div class="col-sm-4">
            <h3><?php echo $value;?> </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <?php }?>
    </div>
</div>

</body>
</html>
