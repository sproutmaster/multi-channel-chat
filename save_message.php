<?php

include("config.php");
$db = new SQLite3($db_dir);

$name=$_POST["name"];
$message=$_POST["message"];
$room_id=intval($_POST["room"]);

if ($message)
{
    $message = $db->escapeString(addslashes(htmlspecialchars($message)));

    $sql = "INSERT INTO chats (name, message, room_id) VALUES ('$name', '$message', $room_id)";
    print $sql;
    $db->query($sql);
    die("success");
}
print "fail";

?>