<?php

include("config.php");
$room_id=intval($_POST["room"]);
$db = new SQLite3($db_dir);

$sql = "SELECT * FROM chats WHERE room_id = $room_id";

$results = $db->query($sql);
$return_array = array();

while ($row = $results->fetchArray()) {
    $result_array = array();
    $result_array['id'] = $row['id'];
    $result_array['name'] = $row['name'];
    $result_array['message'] = html_entity_decode(stripslashes($row['message']));
    $return_array[] = $result_array;
}

print json_encode($return_array);
?>