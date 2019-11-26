<?php session_start()  ?>
<nav class="navbar navbar-expand-md bg-light navbar-light shadow-sm fixed-top" style="padding-bottom: 0px">
  <div class="container">
    <a class="navbar-brand font-weight-bold" href="#"><img src="img/icon.jpg" width="70px" alt="cinemaApp">Minaret Cinema</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="bar" >
        <ul class="navbar-nav">
            <li class="nav-item mr-3">
              <a href="index.php" class="nav-link" style="font-size: 15pt"> Home</a>
            </li>
            <li class="nav-item mr-3">
              <a href="admin.php" class="nav-link" style="font-size: 15pt"><i class="mr-1 fa fa-user"></i>Admin</a>
            </li>
            <li class="nav-item mr-3">
                <a href="<?php if(isset($_SESSION['email']) || isset($_SESSION['admin']) ){ echo 'sign-out.php';} else{ echo 'sign-in.php';};?>" class="nav-link" style="font-size: 15pt"><i class="mr-1 fa fa-sign-in"></i>
                <?php if(isset($_SESSION['email'])  || isset($_SESSION['admin'])){
                  echo 'Logout';
                } else {
                  echo 'Sign In';
                }?>
                </a>
            </li>
            <li class="nav-item mr-3">
                <a href="sign-up.php" class="nav-link" style="font-size: 15pt"><i class="mr-1 fa fa-sign-in"></i>Sign up</a>
            </li>
            <li class="nav-item mr-3">
              <a href="" class="nav-link" style="font-size: 15pt"><i class="mr-1 fa fa-address-card"></i>Contact Us</a>
            </li>
        </ul>
    </div>
  </div>
</nav>