   <?php require 'header.php' ?> 
   <div class="container">
   <div class="content">
      <h2 class="title">All Songs</h2>
      <div class="flex-container">

         
   <?php 

      $result = mysqli_query($connection, "SELECT * FROM songs");

      while(($cat = mysqli_fetch_assoc($result))){?>
         <div class="flex-elem">
            <img class="album-cover" src="../img/albums/<?php echo $cat['album']?>.jpg" alt="">
            <h3 class="name"><?php echo $cat['song']?></h3>
            <h3 class="album"><?php echo $cat['album']?></h3>
            <h3 class="author"><?php echo $cat['singer']?></h3>
         </div>
         

         <?php
      }

   ?>
        

      </div>
   </div>
</div>





<!-- player -->
<div class="container ">
   <audio class="audio" src=""></audio>
   <div class="player player-hidden">
      <div class="info">
      <div class="cover"><img src="" alt="album" class="cover__img"></div>
      <div class="info-right">
      <div class="song"></div>
      <div class="player-album"></div>
      </div>
      </div>
      <div class="progress__container">
         <div class="progress"></div>
      </div>
      <div class="buttons">
         <div class="btn prev"><i class="fas fa-backward"></i></div>
         <div class="btn play"><i class="img__src fas fa-play"></i></div>
         <div class="btn next"><i class="fas fa-forward"></i></div>         
      </div>
   </div>
</div>
<?php require 'footer.php' ?> 
