<?php
session_start();
if($_SESSION['type'] == "normal"){
	header('Location:panel.php');
}
else if($_SESSION['type'] == "admin"){
	header('Location:../rnli/index.php');
}
else if($_SESSION['type'] == "rnli_staff"){
	header('Location:../rnli/index.php');
}
?>
