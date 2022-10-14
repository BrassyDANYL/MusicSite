   <?php require 'header.php' ?> 
   <div class="container">
   <div class="content">
      <h2 class="title">Top Songs</h2>
      <div class="flex-container">

          <div class="flex-elem">
            <img class="album-cover" src="../img/Minutes to Midnight.jpg" alt="">
            <h3 class="name">What I've Done</h3>
            <h3 class="album">Minutes to Midnight</h3>
            <h3 class="author">Linkin Park</h3>
         </div>

         <div class="flex-elem">
            <img class="album-cover" src="../img/Всё что вокруг.jpg" alt="">
            <h3 class="name">Нервы</h3>
            <h3 class="album">Всё что вокруг</h3>
            <h3 class="author">Нервы</h3>
         </div>

        

      </div>
   </div>
</div>





<!-- player -->
<div class="container">
   <audio class="audio" src=""></audio>
   <div class="player">
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
