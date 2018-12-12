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
    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <h1>Signup</h1>
                <form action="signup.inc.php" method="post">
                    <input class="form-control mr-sm-2" type="text" name="uid" placeholder="Username">
                    <br>
                    <input class="form-control mr-sm-2" type="text" name="mail" placeholder="E-mail">
                    <br>
                    <input class="form-control mr-sm-2" type="password" name="pdw" placeholder="Password">
                    <br>
                    <input class="form-control mr-sm-2" type="password" name="pdw-repeat" placeholder="Repeat password">
                    <br>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="signup-submit">Signup</button>
                </form>
            </section>
        </div>
    </main>
    
 
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