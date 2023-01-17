<?php
$arrMenu = array(
        "Home"=>"home.php",
        "Product" => "product.php",
        "Service" => "service .php",
        "About" => "about.php",
        );
?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
            <?php foreach ($arrMenu as $key=>$value){?>
            <li><a href="<?php echo $value;?>">
                    <?php echo $key;?>
                </a>
            </li>
            <?php }?>
        </ul>
    </div>
</nav>
