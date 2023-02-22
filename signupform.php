<?php 
require "includes/db.php";

$name = htmlentities($_POST["username"]);
$password = htmlentities($_POST["password"]);
$confirm = htmlentities($_POST["confirm_password"]);

if($password != $confirm){
   echo "Паролі не збігаються";
}