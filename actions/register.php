<?php
include "../classes/User.php";

//Create an obj
$user = new User;

//Callthe method
$user->store($_POST);

?>