<?php
/**
 * Created by PhpStorm.
 * User: Tammo
 * Date: 19.11.2016
 * Time: 07:13
 */
$host = "127.0.0.1";
$password="dr0@tN38";
$username="user1";
$db="keno_budde_rlmi";
$port = 3306;
$connection = mysqli_connect($host, $username, $password, $db, $port);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
$id=3;
    if ($stmt = mysqli_prepare($connection, "SELECT (`token`) FROM `users` WHERE userid = ?")) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

            # Our new data
            curl_setopt_array($ch = curl_init(), array(
            CURLOPT_URL => "https://api.pushover.net/1/messages.json",
            CURLOPT_POSTFIELDS => array(
        "token" => "a553gmea7ij3cg3ak4odtfvr7h7shy",
        "user" => "u4z3i7ekyovzskd5ozsxd3h63pzpyj",
        "message" => "hello world",
    ),
    CURLOPT_SAFE_UPLOAD => true,
));
curl_exec($ch);
curl_close($ch);
?>
