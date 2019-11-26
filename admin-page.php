<!DOCTYPE html>
<html>
<head>
    <title>Admin | Cinema</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="externals/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
	<script src="externals/jquery 3.3.1.js"></script>
    <script src="external/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="img/icon.jpg" type="image/x-icon">
    
</head>

<body>

    <?php require_once ('nav.php'); if(isset($_SESSION['admin'])){ ?>


    <div class="whole mt-5 animated slideInLeft">
    </div>
    <div class="card col-md-4 offset-md-5 p-2" style="background-color: transparent; border: 1px solid grey; margin-top: 70px"> 

    <div class="card-header bg-dark text-center col-12 text-light mb-1">Welcome Admin</div>
    <form class="card-body animated fadeIn bg-light" autocomplete="off" action="submit_movie.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <label for="Full name" class="control-label text-dark">Movie name: <span style="color: red;">*</span></label>
    <input type="text" name="movie_name" onkeyup="chk()" id="mn" class="form-control mb-3" placeholder="Movie Tittle Here" required> 

    <label for="Full name" class="control-label text-dark">Duration: <span style="color: red;">*</span></label>
    <input type="text" name="duration" class="form-control mb-3" placeholder="Email Here" required> 

    <label for="Content" class="control-label text-dark">Upload movie: <span style="color: red;">*</span></label>

    <input type="file" class="form-control mb-3" id="content" name="file">

    <label for="little" class="control-label text-dark">Summary: <span style="color: red;">*</span></label>
    <input type="text" name="little_about_the_movie" class="form-control mb-3" onkeyup="chk()" placeholder="Little Summary" required>


    <button type="submit" disabled class="col-5 offset-4 mt-4" style="border-radius:5px">Submit</button>
    </div>
    </form>
    <div class="row">
    <div class="col-6 text-light" style="font-size: 13px;">
        View List of Customers? <a href="view.php">Click here</a>
    </div>
    <div class="col-6 text-light" style="font-size: 13px;">
        View Uploaded Movies? <a href="uploaded-files.php">Click here</a>
    </div>
    <div class="col-12 text-light text-center" style="font-size: 13px;">
        Ticket so far? <a href="ticketview.php">Click here</a>
    </div>
    </div>

    </div>

    <?php }; ?>
</body>
<script>
    function chk() {
        if(mn.value!='' && content.value!=''){
            $('button').removeAttr('disabled');
            $('button').css({'background-color':'red', 'border':'1px solid white', 'color':'white'})
        }
    }
</script>
</html>
