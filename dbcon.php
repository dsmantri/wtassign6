<?php

$server = "localhost";
$user ="root";
$password="";
$db="carrental";
$conn = mysqli_connect($server, $user, $password, $db);

if($conn){
  ?>
  <script>
  

  </script>
  <?php
}else {
  ?>
  <script>
  alert('connection  not successful')

  </script>
  <?php
}
?>
