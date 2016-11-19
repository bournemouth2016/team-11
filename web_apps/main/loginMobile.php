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
	echo "true";
}
else {
	echo "false";
}
?>
