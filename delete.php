<?php
include "dbcon.php";
$id=$_GET['id'];
$deletequery="delete from car where id=$id";
$query=mysqli_query($conn,$deletequery);

if($query){
   ?>
   <script>
   alert('deleted   successful')
   </script>
  <?php
  header('location:select.php');
    }
   else
   {
    ?>
   <script>
    alert('deleted  not successful')
   </script>
   <?php
   }
?>
