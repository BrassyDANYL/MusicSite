<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">   
   <title>Admin menu</title>
   <?php require "includes/db.php";?>
</head>
<header>
 <div class="container header-container">
   <a href="/" class="logo">bESTMusic</a>  
   <nav class="header-menu">
   <a class="menu-item" href='/admin.php'>Add new song</a>
   <a class="menu-item" href='/list.php'>All songs</a>
   </nav>
</div>

   </header>
   <div class="container adminka">
      <div class="content-adminka">
   <?php 

      $result = mysqli_query($connection, "SELECT * FROM songs");

      while(($cat = mysqli_fetch_assoc($result))){?>
         <a href="/single.php?id=<?php echo $cat['id'];?>" class="flex-elem-admin">
            <div>
            <img class="album-cover" src="../img/albums/<?php echo $cat['album']?>.jpg" alt="">
            </div>
            <div class="flex-elem-admin-info">
            <h3 class="name">Назва пісні: <?php echo $cat['song']?></h3>
            <h3 class="album">Альбом: <?php echo $cat['album']?></h3>
            <h3 class="author">Виконавець: <?php echo $cat['singer']?></h3>
            </div>
         </a>
         

         <?php
      }

   ?>
   </div>
</div>
<?php
// phpinfo();
require "footer.php"?>