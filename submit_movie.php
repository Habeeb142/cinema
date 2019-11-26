<?php
    if($_SERVER["REQUEST_METHOD"]=="POST") {

    $file = "uploads/".$_FILES["file"]["name"];
    $fileType = $_FILES["file"]["type"];
    $fileSize = $_FILES["file"]["size"];
    $temp=$_FILES["file"]["tmp_name"];


    $mn = $_POST['movie_name'];
    $dn = $_POST['duration'];
    $ln = $_POST['little_about_the_movie'];
    

    $connection = mysqli_connect("localhost","root","root","cinema_db");

    if(move_uploaded_file($temp, $file)) {
        $insert = mysqli_query($connection, "INSERT into movie_tb ( name, duration, little, content) 
        values ( '$mn', '$dn', '$ln', '$file' )");
    }

}

else {
    echo "<script>window.open('admin.php', '_self')";
}

?>