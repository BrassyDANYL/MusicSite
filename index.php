   <?php require 'header.php'?> 
   <body>
      
   
   <div class="container">
   <div class="content">
      <h2 class="title">All Songs</h2>
      <div class="flex-container">

         
   <?php 
   $result = mysqli_query($connection, "SELECT * FROM songs order by rand()");

      while(($cat = mysqli_fetch_assoc($result))){

      require 'music-elem.php';
      
      }

   ?>
        

      </div>
   </div>
</div>

<div  class="load-more-container">
   <button class="load-more-btn">Load More</button>
</div>





<?php 
require 'player.php';
require 'footer.php' ?> 
</body>
