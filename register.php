<?php
include("config.php");

$db = new SQLite3($db_dir);

$name=$_POST["name"];
$password=$_POST["password"];

if(!$password)
    die("Password is empty");

$password=md5($_POST["password"]);

$sql = "SELECT * FROM accounts WHERE username = '$name'";
$results = $db->query($sql);

while ($row = $results->fetchArray()) {
    die("Username already exists");
}

$sql = "INSERT INTO accounts (username, password) VALUES ('$name', '$password')";
$db->query($sql);
die("success");