<?php
$name = $_POST['name'];

if (!isset($name)) {
    die("not_set");
}
if (strlen($name) >= 5 && ctype_alnum($name)) {
    die("valid");
}
print "invalid";

?>