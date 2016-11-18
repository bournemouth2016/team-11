<?php
require("../includes/config.php");
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
	$long=$_POST["longitude"];
    $lat=$_POST["latitude"];
    $id=$_POST["id"];
    mysqli_query($connection, "INSERT INTO `ip` (`address` ,`timestamp`)VALUES ('$ip',CURRENT_TIMESTAMP)");
$result = mysqli_query($connection,"SELECT COUNT(*) FROM `ip` WHERE `address` LIKE '$ip' AND `timestamp` > (now() - interval 10 minute)");
$count = mysqli_fetch_array($result, MYSQLI_NUM);

if($count[0] > 3){
    echo "You are allowed 3 attempts in 10 minutes";
}
        else if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($stmt = mysqli_prepare($connection, "SELECT * FROM `users` WHERE id = ?")) {
                mysqli_stmt_bind_param($stmt, "i", $id);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if($result!=0) {
                    if ($stmt2 = mysqli_prepare($connection, "INSERT INTO `geo` * VALUES ?, ? , ? ")) {
                    mysqli_stmt_bind_param($stmt2,"iff",$id, $long, $lat);
                        mysqli_stmt_execute($stmt2);
                    }
                }

            }
        }
