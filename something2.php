<!DOCTYPE html>
<html lang="en">
    <head>
    <?php
         include_once "head.php";
    ?>
    </head>
<body style="background-color: <?php echo isset($_GET[" color "]) ? $_GET[" color "] : "white" ?>">
<div class="grid-container">
<div>
 
    <?php
        include_once "navbar.php";
    ?>
</div>
   

 
<div>
    <?php
        include_once "footer.php";
    ?>
</div>
</div>
    <?php
        include_once "scripts.php";
    ?>
</body>
</html>