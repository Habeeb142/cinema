<?php session_start();

if(isset($_SESSION['email'])){

    $movieTittle = $_GET['q'];
    $fn = $_SESSION['fullname'];
    

    $connection = mysqli_connect("localhost","root","","cinema_db");

        $insert = mysqli_query($connection, "INSERT into book_ticket_tb(fullname, tittle) 
        values ('$fn','$movieTittle')");

        $sql = "SELECT * from book_ticket_tb WHERE fullname='$fn' ";

        $result = $connection->query($sql);
        $q = mysqli_fetch_array($result);

        if ($result->num_rows > 0) {
            
            require_once ('printer.php');
        }
    
        else {
            include('sign-up.php');
        }
    
        mysqli_close($connection);

}else echo "<script>window.open('sign-in.php','_self')</script>";

?>
