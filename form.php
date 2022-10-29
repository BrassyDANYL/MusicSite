<a href="/admin.php">Back</a>
<?php 
require "includes/db.php";
//Upload Image
$image_dir = "./img/albums/";
$image_file = $image_dir . basename($_FILES["cover"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($image_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["cover"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($image_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["cover"]["size"] > 500000) {
  echo "Вибач, але твій файл завеликий =)";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Можна завантажити файли тільки у наступних форматах JPG, JPEG, PNG і GIF";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Файлик не загрузився :(";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["cover"]["tmp_name"], $image_file)) {
    echo "Файл ". htmlspecialchars( basename( $_FILES["cover"]["name"])). " був завантажений :)";
  } else {
    echo "Під час завантаження файлу сталася помилка";
  }
}

//Upload songs
//Upload songs
//Upload songs
$audio_dir = "./audio/";
$audio_file = $audio_dir . basename($_FILES["file"]["name"]);
$uploadOk2 = 1;
$imageAudioType = strtolower(pathinfo($audio_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["file"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk2 = 1;
  } else {
    echo "File is not an image.";
    $uploadOk2 = 0;
  }
}

// Check if file already exists
if (file_exists($audio_file)) {
  echo "Sorry, file already exists.";
  $uploadOk2 = 0;
}

// Check file size
if ($_FILES["file"]["size"] > 50000000) {
  echo "Вибач, але твій файл завеликий =)";
  $uploadOk2 = 0;
}

// Allow certain file formats
if($imageAudioType != "mp3") {
  echo "Можна завантажити файли тільки у наступних форматах JPG, JPEG, PNG і GIF";
  $uploadOk2 = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk2 == 0) {
  echo "Файлик не загрузився :(";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["file"]["tmp_name"], $audio_file)) {
    echo "Файл ". htmlspecialchars( basename( $_FILES["file"]["name"])). " був завантажений :)";
  } else {
    echo "Під час завантаження файлу сталася помилка";
  }
}

$song = htmlentities($_POST["song"]);

$album = htmlentities($_POST["album"]);
echo $album;

$singer = htmlentities($_POST["singer"]);

$sql = mysqli_query($connection, "INSERT INTO songs (song, album, singer) VALUES('{$_POST['song']}', '{$_POST['album']}', '{$_POST['singer']}')");



