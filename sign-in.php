<!DOCTYPE html>
<html>
<head>
    <title>Sign In | Cinema</title>
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
    <div class="whole mt-5 animated slideInLeft">
    </div>
    <div class="card col-md-4 offset-md-2 p-2" style="background-color: transparent; border: 1px solid grey; margin-top: 120px"> 
    
      <div class="card-header bg-dark text-center col-12 text-light mb-2 mt-3">Sign In</div>
        
    <?php if(isset($err)){?>
        <div class="alert alert-danger alert-dismissible" align="center" >
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Please</strong> <?php echo $err ?>
        </div>  
    <?php } ?>


      <form class="card-body bg-light animated fadeIn" autocomplete="off" action="request.php" method="POST">
        <div class="form-group">
          <input type="email" name="email" class="form-control mb-4" placeholder="Email Here"> 
          <input type="password" name="password" class="form-control" placeholder="password"> 
          <input type="submit" value="Login" class="col-5 text-danger offset-4 mt-5">
        </div>
      </form>
    
      <div class="col-11 text-light offset-1" style="font-size: 13px;">
        No account yet? <a href="sign-up.php">Sign Up here</a>
      </div>
    </div>

</body>
</html>


