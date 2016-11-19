<?php
require "database.php";
$db = new Database();
$name = $_POST['username'];
$result = $db->query("SELECT * FROM users WHERE uname = '".$name."'");
$row = $result->fetch_assoc();
if(sha1($_POST['password'].$row['salt']) == $row['phash']) {
	session_start();
	$_SESSION['id'] = $row['userid'];
	$_SESSION['type'] = $row['utype'];
	//echo $_SESSION['id'];
	//echo $row['userid'];
	header('Location:redirectUser.php');
}
else {
	header('Location:index.php?fail=true');
}
?>
