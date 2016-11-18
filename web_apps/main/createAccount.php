<?php
require 'database.php';

//user schema uid, uname, passwd, salt, email, type

/*$db = new Database();

$usr = $db->query("SELECT * FROM users WHERE username = ".$_POST['username'].";");
$usr = $usr->fetchArray();

$eml = $db->query("SELECT * FROM users WHERE email = ".$_POST['email'].";");
$eml = $eml->fetchArray();

if($usr['user_id']!=NULL){
	header("Location: register.php?fail=taken");
}
else if($eml['entry_id']!=NULL){
	header("Location: register.php?fail=takenmail");
}
else if($_POST['password']!=$_POST['passwordVerify']){
	header('Location: register.php?fail=mismatch');
}
else if($_POST['password']==NULL || $_POST['password']==''){
	header('Location: register.php?fail=nopass');
}
else if($_POST['username']==NULL || $_POST['username']==''){
	header('Location: register.php?fail=nouser');
}
else if($_POST['email']==NULL || $_POST['email']==''){
	header('Location: register.php?fail=noemail');
}
else{
	$salt=sha1(time());
	$phash=sha1($_POST['password'].$salt);
	$db->query("INSERT INTO users VALUES(NULL, '".$_POST['username']."', '".$phash."', '".$salt."', '".$_POST['email']."', 'normal');");
	$id=$db->lastId();
	//login the user
	session_start();
	$_SESSION['id'] = $id;
	header('Location:panel.php');
}*/
echo "1";
?>
