<?php 
    $connection = mysqli_connect("localhost","root","root","cinema_db");
    $word =  mysqli_query($connection, "SELECT * from movie_tb");
    $check = mysqli_fetch_all($word, MYSQLI_ASSOC);

?>

<div class="container row offset-md-1">
<?php 
        foreach($check as $check)  { ?>
            <div class="col-6 mt-5">
                <video class="col-12" controls autoplay="autoplay">
                    <source src="<?php echo $check['content'] ?>" type="">
                </video>
                <div class="comin">
                    Showing soon.... 
                </div>
                <div class="tittle">
                    Tittle: <?php echo $check['name'] ?>
                </div>
                <div class="tittle">
                    Duration: <?php echo $check['duration'] ?>
                </div>
                <div class="brief">
                    You can't afford to miss it...
                </div>
                <div class="col-12">
                    <a href="book-ticket.php?q=<?php echo $check['name'] ?>" class="btn btn-info">Book Ticket</a>
                </div>
            </div>

       <?php } ?>
    
</div>