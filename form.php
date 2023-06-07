<?php
// Підключення до бази даних
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "music";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Помилка з'єднання з базою даних: " . $conn->connect_error);
}

// Обробка відправлених даних з форми
if (isset($_POST['song']) && isset($_POST['album']) && isset($_POST['singer']) && isset($_FILES['cover']) && isset($_FILES['file'])) {
    $song = $_POST['song'];
    $album = $_POST['album'];
    $singer = $_POST['singer'];
    $cover_file = $_FILES['cover']['tmp_name'];
    $file = $_FILES['file']['tmp_name'];
    $cover_filename = basename($_FILES['cover']['name']);
    $file_filename = basename($_FILES['file']['name']);

    // Збереження файлів на сервері
    $cover_upload_dir = 'img/albums/';
    $file_upload_dir = 'audio/';
    move_uploaded_file($cover_file, $cover_upload_dir . $cover_filename);
    move_uploaded_file($file, $file_upload_dir . $file_filename);

    // Додавання даних до бази даних
    $sql = "INSERT INTO songs (song, album, singer) VALUES ('$song', '$album', '$singer')";
    if ($conn->query($sql) === TRUE) {
        echo "Пісня успішно додана до бази даних";
    } else {
        echo "Помилка: " . $sql . "<br>" . $conn->error;
    }
}

?>