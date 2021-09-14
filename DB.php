<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$Database = 'college';

$db = new mysqli($host,$user,$pass,$Database);

if($db->connect_errno){
    die('Mysql connection error');
    exit();
}

?>