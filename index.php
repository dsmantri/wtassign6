<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="master.css">
    <title>BOOK YOUR CAR</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CAR RENTAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="select.php">View Form</a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cars</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          OFFERS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"></a>
          <a class="dropdown-item" href="#">Avail ur offer</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">BOOK NOW</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACT US</a>
      </li>
    </ul>

  </div>
</nav>
<br>
<div class="container my-4">
  <h1 class="text-centre bg-dark text-white" style="text-align:center;padding-top:5px;padding-bottom:5px;">RENT A CAR</h1>

  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
   <div class="form-group">
     <label for="exampleInputEmail1">Name</label>
     <input type="text" name="name" value="" class="form-control">
     <small id="emailHelp" class="form-text text-muted"></small>
   </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" value="" class="form-control">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Pickup Location</label>
    <input type="text" name="pickup" value="" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">DROP Location</label>
    <input type="text" name="droplo" value="" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Start date</label>
    <input type="date" name="start" value="" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">End date</label>
    <input type="date" name="endI" value="" class="form-control">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>



  <button type="submit" name="submit" class="btn btn-primary">Get A Quote</button>

</form>
<br>
<button type="button" name="button" class="btn btn-primary"> <a class="navlink"href="select.php" style="color:white;">Check Form</a></button>



</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->


  </body>
</html>
<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
  $name=mysqli_real_escape_string($conn, $_POST['name']);
  $email=mysqli_real_escape_string( $conn,$_POST['email']);
  $pickup=mysqli_real_escape_string( $conn,$_POST['pickup']);
  $droplo=mysqli_real_escape_string( $conn,$_POST['droplo']);
  $start=mysqli_real_escape_string( $conn,$_POST['start']);
  $endI=mysqli_real_escape_string( $conn,$_POST['endI']);

  $insertquery= "INSERT INTO car (name,email,pickup,droplo,start,endI) VALUES ('$name','$email','$pickup','$droplo','$start','$endI')";
  $query=mysqli_query($conn,$insertquery);

  if($query){
  ?>
  <script>
  alert('inserted  successful')
  </script>
    <?php
   }
   else{
    ?>
    <script>
    alert('inserted  not successful')
    </script>
    <?php
  }

}
?>
