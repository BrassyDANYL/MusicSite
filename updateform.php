<a href="/admin.php">Back</a>
<?php
require "includes/db.php";

$id = ($_POST["id"]);

$song = htmlentities($_POST["song"]);

$album = htmlentities($_POST["album"]);

$singer = htmlentities($_POST["singer"]);

$sql = mysqli_query($connection, "UPDATE songs SET song = '$song', album = '$album', singer='$singer' WHERE id ='$id'");
?>