<!DOCTYPE html>
<html lang="en">
<head>
   <?php require "includes/db.php";?>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">   
   <title>Random</title>
</head>
<?php
   $songsArray  = mysqli_query($connection, "SELECT id FROM songs");
   $art = mysqli_fetch_assoc($songsArray);
   echo $art['id'];
   $input = array($art);
   $rand_keys = array_rand($input, 2);
   echo $input[$rand_keys[0]] . "\n";
   echo $input[$rand_keys[1]] . "\n";
?>