<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>BOOK YOUR CAR</title>
    <link rel="stylesheet" href="master.css">
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
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACT US</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container my-4">
  <h1 class="text-centre bg-dark text-white">RENT A CAR</h1>
  <form action="" method="POST">
    <?php
    include 'dbcon.php';
    $id=$_GET['id'];
    $selectquery= "select * from car where id=$id";
    $query=mysqli_query($conn,$selectquery);
    $result=mysqli_fetch_assoc($query);
    if(isset($_POST['update'])){
      $name=mysqli_real_escape_string($conn, $_POST['name']);
      $email=mysqli_real_escape_string( $conn,$_POST['email']);
      $pickup=mysqli_real_escape_string( $conn,$_POST['pickup']);
      $droplo=mysqli_real_escape_string( $conn,$_POST['droplo']);
      $start=mysqli_real_escape_string( $conn,$_POST['start']);
      $endI=mysqli_real_escape_string( $conn,$_POST['endI']);

      $updatequery= "update car set id='$id',name='$name',email='$email',pickup='$pickup',droplo='$droplo',start='$start',endI='$endI' where id=$id";
      $query=mysqli_query($conn,$updatequery);

      if($query){
      ?>
      <script>
      alert('updated successful')
      header('location:select.php');
      </script>

        <?php


       }
       else{
        ?>
        <script>
        alert('updated  not successful')
        </script>
        <?php
      }

    }
    ?>

   <div class="form-group">
     <label for="exampleInputEmail1">Name</label>
     <input type="text" name="name" value="<?php echo $result['name']; ?>" class="form-control">

   </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" value="<?php echo $result['email']; ?>"required/>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Pickup Location</label>
    <input type="text" name="pickup" value="<?php echo $result['pickup']; ?>" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">DROP Location</label>
    <input type="text" name="droplo" value="<?php echo $result['droplo'];?>" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Start date</label>
    <input type="date" name="start" value="<?php echo $result['start']; ?>" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">End date</label>
    <input type="date" name="endI" value="<?php echo $result['endI']; ?>" class="form-control">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>



  <button type="submit" name="update" class="btn btn-primary">Update quote</button>

</form>
   <a href="select.php">Check Form </a>


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
