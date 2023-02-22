<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
   $connection = mysqli_connect('127.0.0.1', 'root', 'root', 'music');
   
   if( $connection == false )
   {
      echo "Не вдалося встановити з'єднання з базою данних";
      echo mysqli_connect_error();
      exit();
   }
   ?>