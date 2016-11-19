<?php
  session_start();
  require "../main/database.php";
  $db = new Database();
  
  $db->query("UPDATE users SET utype='".$_POST['type']."'".
                       " WHERE userid=".$_POST['userid']);
  header('Location:manage_users.php');
?>
