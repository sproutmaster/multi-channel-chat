<?php
if(isset($_COOKIE["PHPSESSID"])){
    session_start();
    die($_SESSION["username"]);
}
die("error");