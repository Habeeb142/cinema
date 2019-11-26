
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

    <?php require_once ('nav.php'); if(isset($_SESSION['email'])) { require_once ('new_movie.php') ;}?>
</body>
</html>
