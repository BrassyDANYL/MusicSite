<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">   
   <title>Music</title>
   <?php require "includes/db.php";?>
</head>
<body>
   <header class="header">
      <div class="container header-container">
         <a href="/" class="logo">bESTMusic</a> 
         <div class="burger">
            <div class="burger-content"></div>
         </div>
         <nav class="header-menu">
            <a href="songers.php" class="menu-item">Songers</a>
            <a href="/randomsongs.php" class="menu-item">Random</a>
            <a href="#" class="menu-item">Menu</a>
            <a href="/admin.php" class="menu-item">Admin</a>
            <a href="/signup.php" class="menu-item">Sign Up</a>
         </nav>
      </div>
   </header>