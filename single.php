<!DOCTYPE html>
<html lang="en">
<head>
   <?php require "includes/db.php";
   $idSingle = mysqli_query($connection, "SELECT * FROM songs WHERE id = " . (int) $_GET['id']);

   $art = mysqli_fetch_assoc($idSingle);
   ?>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">   
   <title><?php echo $art['song']?></title>
</head>
<body>
<div class="container single">

   <div class="single-image">
      <img src="../img/albums/<?php echo $art['album']?>" alt="">
   </div>

   <form action="updateform.php"  class="single-info" method="POST">

      <input hidden name="id" value="<?php echo $_GET['id']?>">
      <label for="song">Назва пісні:</label>
      <input name="song" class="single-item" value="<?php echo $art['song']?>"> 

      <label for="album">Альбом: </label>
      <input name="album" class="single-item" value="<?php echo $art['album']?>">

      <label for="singer">Виконавець: </label>
      <input name="singer" class="single-item" value="<?php echo $art['singer']?>">

      <input type="submit">
   </form>

</div>

</body>