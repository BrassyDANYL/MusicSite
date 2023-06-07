<?php
   require 'includes/db.php';

   $offset = $_POST['offset'];

   $result = mysqli_query($connection, "SELECT * FROM songs ORDER BY rand() LIMIT 3 OFFSET $offset");

   while($cat = mysqli_fetch_assoc($result)) {
      require 'music-elem.php';
   }
?>