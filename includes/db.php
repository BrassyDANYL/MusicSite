<?php 
   $connection = mysqli_connect('127.0.0.1', 'root', 'root', 'test');
   
   if( $connection == false )
   {
      echo "Не вдалося встановити з'єднання з базою данних";
      echo mysqli_connect_error();
      exit();
   }
   ?>