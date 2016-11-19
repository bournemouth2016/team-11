<?php
/**
 * Created by PhpStorm.
 * User: Tammo
 * Date: 19.11.2016
 * Time: 01:41
 */

	//enables sql connection
	$host = "127.0.0.1";
	$password="dr0@tN38";
	$username="user1";
	$db="keno_budde_rlmi";
	$port = 3306;
	$connection = mysqli_connect($host, $username, $password, $db, $port);
		if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
	$error=$_POST["error"];
    $id=$_POST["username"];
    $longitude =$_POST["longitude"];
    $latitude = $_POST["latitude"];
/*
    mysqli_query($connection, "INSERT INTO `ip` (`address` ,`timestamp`)VALUES ('$ip',CURRENT_TIMESTAMP)");
$result = mysqli_query($connection,"SELECT COUNT(*) FROM `ip` WHERE `address` LIKE '$ip' AND `timestamp` > (now() - interval 10 minute)");
$count = mysqli_fetch_array($result, MYSQLI_NUM);

if($count[0] > 3){
    echo "You are allowed 3 attempts in 10 minutes";
}
else
    */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($stmt = mysqli_prepare($connection, "SELECT * FROM `users` WHERE userid = ?")) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $rowno = mysqli_num_rows($result);
        if($rowno!=0) {
            /*
            if ($stmt4 = mysqli_prepare($connection, "SELECT (`latitude`) FROM `geo` WHERE user_id = ? ORDER BY time DESC LIMIT 1")) {
                mysqli_stmt_bind_param($stmt4,"i",$id);
                mysqli_stmt_execute($stmt4);
                $latitude = mysqli_stmt_get_result($stmt4);
            }
            if ($stmt5 = mysqli_prepare($connection, "SELECT (`longitude`) FROM `geo` WHERE user_id = ? ORDER BY time DESC LIMIT 1")) {
                mysqli_stmt_bind_param($stmt5,"i",$id);
                mysqli_stmt_execute($stmt5);
                $longitude = mysqli_stmt_get_result($stmt5);
            }
            */
            if ($stmt2 = mysqli_prepare($connection, "INSERT INTO `incidents` (`user_id`, `type`,`longitude`, `latitude`) VALUES (?, ?, ?, ?) ")) {
                mysqli_stmt_bind_param($stmt2,"iiff",$id, $error, $longitude, $latitude);
                mysqli_stmt_execute($stmt2);
            }
        }

    }
}