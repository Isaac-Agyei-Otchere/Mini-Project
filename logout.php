<?php


include_once'connectdb.php';
session_start();





session_destroy();

header('location:lock.php');


?>