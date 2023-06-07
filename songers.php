<?php
require 'header.php';
?>
<div class="container">
   <div class="content">
      <div class="flex-container">
<?php

$result = mysqli_query($connection, "SELECT DISTINCT singer FROM songs;");

      while(($cat = mysqli_fetch_assoc($result))){
         ?>
         <div class="flex-elem">
            <a class="author-link" href="/songer-item.php?singer=<?php echo $cat['singer']?>"><h3 class="author"><?php echo $cat['singer']?></h3></a>
         </div>

<?php
      }


?>
</div>
</div>
</div>