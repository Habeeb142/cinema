<!DOCTYPE html>
<html>
<head>
    <title>Home | Minaret</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
  <link rel="shortcut icon" href="img/icon.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
</head>


<body>

    <?php require_once ('nav.php') ?>
    
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