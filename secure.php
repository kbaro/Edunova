
<style>
table{
    border-collapse: collapse;
}
td, th {
  width: 4rem;
  height: 2rem;
  border: 1px solid white;
  text-align: center;
}
tr {
  background: green;
  border-color: white;
}
body {
  padding: 1rem;
}
</style>

<?php
include_once "session.php";
if(!isset($_SESSION["user"])){
    header("location: login2.php?g=4");
    exit;
}
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "head.php" ?>
  </head>
  <body>

  <div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div id="content">
					<h1><?php echo $naslov ?></h1>
            <div class="col-lg-3">
             <a class="btn btn-outline-success my-2 my-sm-0" href="logout.php">Logout</a>
</div>
         
        </div>
      </div>
    </div>   
  </div>

  <div class="container">
		<div class="row">
			<div class="col-lg-12" style="display: flex; justify-content: center; padding-top:2rem">
				<div id="content1">
                <?php include_once "form.php"; ?>
                <?php include_once "spiral.php"; ?>
 </div>
      </div>
    </div>   
  </div>
    
  


    <?php include_once "scripts.php" ?>
  </body>
</html>