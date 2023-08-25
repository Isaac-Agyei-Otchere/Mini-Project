<?php

try{
$PDO = New PDO('mysql:host=localhost;dbname=canopy','root','');

//echo'connection successful';

}catch(PDOException $f){

echo $f->getmessage();

}

?>