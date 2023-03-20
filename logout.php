<?php
if(isset($_COOKIE["PHPSESSID"])) {
    session_start();
    setcookie(session_name(),'', time()-3600,'/');
    session_unset();
    session_destroy();
    header('Location:index.html');
}