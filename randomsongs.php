<?php require "header.php" ?> 
<body>
<?php
   $result = mysqli_query($connection, "SELECT * from songs order by rand()");
?>
   <div class="carousel">
<?php
   while($cat = mysqli_fetch_array($result)){
     
      require 'music-elem.php';
}
?>
   </div>
<?php require "player.php"?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="/script/script.js"></script>

</body>