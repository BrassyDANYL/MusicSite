<?php require 'header.php';
   
   $singer = $_GET['singer'];

   $result = mysqli_query($connection, "SELECT * FROM songs WHERE singer='$singer'");
   $result2 = mysqli_query($connection, "SELECT DISTINCT album FROM songs WHERE singer='$singer'");

?>
<body>
   <div class="container">
      <div class="content">
         <h2 class="title">Albums</h2>
         <div class="flex-container">
            <?php
               while(($cat = mysqli_fetch_assoc($result2))){
                  require 'album-item.php';
               }
            ?>
         </div>
         <h2 class="title"><?php echo $singer?></h2>
         <div class="flex-container">
            <?php 
               while(($cat = mysqli_fetch_assoc($result))){
                  require 'music-elem.php';
               }
            ?>
         </div>
      </div>
   </div>
<?php 
require 'player.php';
require 'footer.php';?>
</body>