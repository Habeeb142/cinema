<?php 
if($_SERVER["REQUEST_METHOD"]=="POST") {

    // $file = "uploads/".$_FILES["pix"]["name"];
    // $fileType = $_FILES["pix"]["type"];
    // $fileSize = $_FILES["pix"]["size"];
    // $temp=$_FILES["pix"]["tmp_name"];

    $fn = $_POST['fullname'];
    $pwd = $_POST['password'];
    $cp = $_POST['confirmpassword'];
    $em = $_POST['email'];
    

    $connection = mysqli_connect("localhost","root","root","cinema_db");

    if($cp == $pwd) {
        $insert = mysqli_query($connection, "INSERT into user_tb(fullname, password, email) 
        values ('$fn', '$pwd', '$em')");

        $sql = "SELECT * from user_tb WHERE email='$em' ";

        $result = $connection->query($sql);
        $q = mysqli_fetch_array($result);

        if ($result->num_rows > 0) {
            
            echo "<script>window.open('dashboard.php','_self')</script>";
        }
    
        else {
            include('sign-up.php');
        }
    }
    
    else {
        $err = 'Confirm password not equal to password';
    }


    
        
    mysqli_close($connection);

}else echo "<script>window.open('sign-up.php','_self')</script>";

?>