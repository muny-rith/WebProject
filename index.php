<?php
// include 'config.php';
// $conn = mysqli_connect(HOST,USER,PASSWORD,DB) or die("Couldn't connect to database");
// include ("libraries/img.php");

$page = "home.php";
$pageid = 0;
if(isset($_GET['p'])){
	$p = $_GET['p'];
	switch($p){
		case "shop":
			$page = "shop.php";
			break;
		case "contact":
			$page = "contact.php";
			$pageid = 1;	
			break;
		case "about":
			$page = "about.php";
			$pageid = 2;
			break;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"?>


<body class="homepage">

  <?php include "include/nav.php"; ?>
  <?php include $page; ?>
  <?php include "include/footer.php"; ?>

</body>


</html>