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
    <?php require_once ('new_movie.php') ?>

    <?php
    if(isset($notFound)){?>
        <div class="alert alert-danger alert-dismissible" align="center">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Oops!</strong> <?php echo $notFound ?>
        </div> 
    <?php } ?>
   

</body>
</html>