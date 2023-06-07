<?php 
require 'header.php';

   $album = $_GET['album'];
   $result = mysqli_query($connection, "SELECT * FROM songs WHERE album='$album'");

?>

<body>
   <div class="container">
      <div class="content">
         <div class="title"><?php echo $album; ?></div>
         <div class="flex-container">
            <?php
               while(($cat = mysqli_fetch_assoc($result))){
                  require 'music-elem.php';
               }
?>
         </div>
      </div>
   </div>
<?php require 'player.php';?>
<?php require 'footer.php';?>

</body>
