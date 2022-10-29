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
   <div class="admin-menu-title">Upload new song</div>
   <form enctype="multipart/form-data" action="form.php" class="admin-upload-form" method="POST">
      <label for="song">Введіть назву пісні</label>
      <input require type="text" name="song">

      <label for="album">Введіть назву альбому</label>
      <input require type="text" name="album">

      <label for="singer">Введіть виконавця</label>
      <input require type="text" name="singer">

      <label for="cover">Оберіть обложку</label>
      <input class="file" type="file" name="cover" accept="image/jpg">

      <label for="file">Оберіть файл з потрібною пісенькою</label>
      <input class="file" type="file" name="file" accept="audio/mp3" >

      <button type="submit">Submit</button>
   </form>
</div>
<?php
// phpinfo();
require "footer.php"?>