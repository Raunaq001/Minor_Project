<?php

require('./DB.php');

if(isset($_POST)){

    $fName = $_POST['firstname'];
    $lName = $_POST['lastname'];
    $loc = $_POST['country'];
    $sub = $_POST['subject'];

    $result = $db->query("INSERT INTO `contact`(`firstName`, `lastName`, `loc`, `Sub`) VALUES ('". $fName ."','". $lName ."','". $loc ."','". $sub ."')");
}

header('Location: ../');
die();

?>