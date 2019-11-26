<!DOCTYPE html>
<html>
<head>
    <title>Home | Minaret</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="externals/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
	<script src="externals/jquery 3.3.1.js"></script>
    <script src="external/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="img/icon.jpg" type="image/x-icon">
    
</head>


<body>

    <?php require_once ('nav.php') ?>
    
    <?php 
    $connection = mysqli_connect("localhost","root","","cinema_db");
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
                
                <div class="tittle">
                    Tittle: <?php echo $check['name'] ?>
                </div>
                <div class="tittle">
                    Duration: <?php echo $check['duration'] ?>
                </div>
                
            </div>

       <?php } ?>
    
</div>

</body>
</html>