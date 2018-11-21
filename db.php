<?php

$server="localhost";
$user="root";
$pass="root";
$db="wichat";
$conexion = new mysqli($server,$user,$pass,$db);

function formatearFecha($fecha){

   return date ('g:i a',strtotime($fecha));
}
?>