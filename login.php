<?php
include("config.php");

$db = new SQLite3($db_dir);

$name=$_POST["name"];
$password=$_POST["password"];

if(!$password)
    die("Password is empty");

$password=md5($_POST["password"]);

$sql = "SELECT * FROM accounts WHERE username = '$name' AND password = '$password'";
$results = $db->query($sql);

while ($row = $results->fetchArray()) {

    session_start();
    $_SESSION["username"]=$name;

    die("success");
}

die("Invalid Credentials");