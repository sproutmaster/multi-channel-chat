<?php
include("config.php");
error_reporting(0);

$db = new PDO('sqlite:'.$db_dir);

$message = $_POST['message'];

if (!isset($message)) {
    die("not_set");
}

$sql="SELECT * FROM bad_words";
if ($message) {
    $message = ' ' . $_POST['message'];
    foreach($db->query($sql) as $row) {
        if(strpos($message,$row["word"]))
            die("invalid");
    }
    die("valid");
}
die("invalid");