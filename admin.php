
<!DOCTYPE html>
<html>
<head>
    <title>Admin | Cinema</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
  <link rel="shortcut icon" href="img/icon.jpg" type="image/x-icon">
</head>

<body>

    <?php require_once ('nav.php') ?>
    <div class="whole mt-5 animated slideInLeft">
    </div>
    <div class="card col-md-4 offset-md-2 p-2" style="background-color: transparent; border: 1px solid grey; margin-top: 120px"> 
    
      <div class="card-header bg-dark text-center col-12 text-light mb-2 mt-3">Admin Sign In</div>
      <form class="card-body bg-light animated fadeIn" autocomplete="off">
        <div class="form-group">
          <input type="text" id="user" name="username" class="form-control mb-4" placeholder="Username Here" onkeyup='chkAdmin()'> 
          <input type="password" id="pwd"  onkeyup='chkAdmin()' name="password" class="form-control" placeholder="password"> 
          <button type="button" onclick="navigate()" disabled class="col-5 offset-4 mt-5" style="border-radius:5px; color: black">Login</button>
        </div>
      </form>
    
    </div>

</body>
<script>
    function chkAdmin(){
        if(user.value == 'admin' && pwd.value == 'admin') {
            $('button').removeAttr('disabled');
            $('button').css({'background-color':'red', 'border':'1px solid white','color':'white'})
        }
    }

    function navigate() {
        window.open('admin-page.php',' _self');
        <?php
$_SESSION['admin'] = 'admin';
        ?>
    }
</script>
</html>


