<?php
    $connection = mysqli_connect("localhost","root","","cinema_db");
    $_word =  mysqli_query($connection, "SELECT * from user_tb");
    $word = mysqli_fetch_all($_word, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>List | Minaret</title>
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

    <div class="row offset-md-2" style="margin-top: 100px">
    <?php foreach($word as $word) { ?>

        <div style="border-left: 10px solid white; border-radius: 10px; padding: 10px" class="col-5 mb-4">
            <div class="form-group col-12" style="border: 1px solid grey">
                <label for="Name" class="control-label" style="color: white; font-size: 20px">Full Name:</label>
                <span class="ml-4" style=" color: aqua; font-size: 20px; font-weight: bold"><?php echo $word['fullname'] ?></span>
            </div>
            <div class="form-group col-12" style="border: 1px solid grey">
                <label for="Email" class="control-label" style="color: white; font-size: 20px">Email:</label>
                <span class="ml-4" style=" color: aqua; font-size: 20px; font-weight: bold"><?php echo $word['email'] ?></span>
            </div>
        </div>

    <?php } ?>
    </div>
</body>
</html>