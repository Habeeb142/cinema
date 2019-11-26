<!DOCTYPE html>
<html>
<head>
    <title>Sign Up | Cinema</title>
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
    <div class="card col-md-4 offset-md-5 p-2" style="background-color: transparent; border: 1px solid grey; margin-top: 120px"> 

    <div class="card-header bg-dark text-center col-12 text-light mb-1">Sign Up</div>
    <form class="card-body animated fadeIn bg-light" autocomplete="off" action="sign_up_process.php" method="POST">
    <div class="form-group">
    <label for="Full name" class="control-label text-dark">Full Name: <span style="color: red; !important">*</span></label>
    <input type="text" name="fullname" class="form-control mb-3" placeholder="Full Name Here" required> 

    <label for="Full name" class="control-label text-dark">Email: <span style="color: red;">*</span></label>
    <input type="email" name="email" class="form-control mb-3" placeholder="Email Here" required> 

    <label for="password" class="control-label text-dark">Password: <span style="color: red;">*</span></label>
    <input type="password" name="password" id="password" class="form-control mb-3" onkeyup="chk()" placeholder="Password" required>

    <label for="password" class="control-label text-dark">Confirm Password: <span style="color: red;">*</span></label>
    <input type="password" id="confirmpass" name="confirmpassword" class="form-control" onkeyup="chk()" placeholder="Confirm Password">

    <button type="submit" disabled class="col-5 offset-4 mt-4" style="border-radius:5px">Sign Up</button>
    </div>
    </form>
    <div class="col-11 text-light offset-1" style="font-size: 13px;">
    Already have an account? <a href="sign-in.php">Login here</a>
    </div>

    </div>
</body>
<script>
    function chk() {
        if(confirmpass.value == password.value && confirmpass.value!=''){
            $('button').removeAttr('disabled');
            $('button').css({'background-color':'red', 'border':'1px solid white', 'color':'white'})
        }
    }
</script>
</html>