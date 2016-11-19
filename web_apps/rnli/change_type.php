<?php
  session_start();
  require "database.php";
  $db = new Database();
  $result = $db->query("UPDATE users SET utype=".$_POST['type'].
                       " WHERE userid='".$_POST['userId']."'");
?>
