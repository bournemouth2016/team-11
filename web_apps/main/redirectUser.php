<?php
session_start();
if($_SESSION['type'] == "normal"){
	header('Location:panel.php');
}
?>
