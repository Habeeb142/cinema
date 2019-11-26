<?php session_start();
$id = $_POST['email'];
$password = $_POST['password'];

$connection = mysqli_connect("localhost","root","","cinema_db");
$pass_word =  mysqli_query($connection, "SELECT * from user_tb where email = '$id'");
$passCheck = mysqli_fetch_array($pass_word);
$pass = $passCheck['password'];

if ($password == "" && $id == "") {
    $err = "fill in the text boxes correctly";
    include 'sign-in.php';
}

elseif ($password == "") {
    $err = "fill in the password box";
    include 'sign-in.php';
}

elseif ($id == "") {
    $err = "fill in the username/userId box";
    include 'sign-in.php';
}

elseif($pass == $password) {

    $query = mysqli_query($connection, "SELECT * from user_tb where email = '$id' and password = '$password'");
    $q = mysqli_fetch_array($query);

    $_SESSION['email'] = $q['email'];
    $_SESSION['fullname'] = $q['fullname'];
    
    echo "<script>window.open('dashboard.php','_self')</script>";
   
}


else {
    $err = "Invalid Username or Password";
    include 'sign-in.php';
}

mysqli_close($connection)

?>
