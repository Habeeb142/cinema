<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
$name = $q['fullname'];
$tittle = $q['tittle']
    ?>

<div>
Succesfully Booked: Print Your Receipt</ br>
</div> 

Name: <?php echo $name; ?><br />
Movie Tittle: <?php echo $tittle ?> <br />
    
<div><a href="dashboard.php">Bach To Dashboard</a></div>
</body>
<script>
    window.print();
</script>
</html>