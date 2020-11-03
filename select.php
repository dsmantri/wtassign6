<?php
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="master.css">
   </head>
   <body style="background-color: lavender;" >
     <div class="main-div">
       <h1 style="text-align:center;background-color: black;color:white;padding-top:10px;padding-bottom:10px;">LIST OF CAR RENT QUOTES </h1>
       <br><br>
       <div class="centre-div">
         <div class="table-responsive">
           <table cellpadding = "5" cellspacing = "5" style="border-collapse: separate;border-spacing:0px 40px; width:90%;margin-left: auto; margin-right: auto;background-color:lightblue;border-radius:10px;">
             <thead style="background-color: white;text-align:left;">
               <th style="padding-left:10px;" scope="col">ID</th>
               <th scope="col">NAME</th>
               <th scope="col">EMAILID</th>
               <th scope="col">PICKUP</th>
               <th scope="col">DROP</th>
               <th scope="col">START</th>
               <th scope="col">END</th>
               <th colspan="2">Operation</th>
             </thead>
             <tbody style="background-color:wheat;" >
               <?php
               include 'link.php';
               include 'dbcon.php';
               $selectquery= "select * from car";
               $query=mysqli_query($conn,$selectquery);
               while($result=mysqli_fetch_assoc($query)){
                 ?>
                 <tr>
                   <td style="padding-left:10px;"><?php echo $result['id']; ?></td>
                   <td><?php echo $result['name']; ?></td>
                   <td><?php echo $result['email']; ?></td>
                   <td><?php echo $result['pickup']; ?></td>
                   <td><?php echo $result['droplo']; ?></td>
                   <td><?php echo $result['start']; ?></td>
                   <td><?php echo $result['endI']; ?></td>
                   <td style="background-color:green;"><a style="color:white;" href="update.php?id=<?php echo $result['id'];?>">UPDATE </a> </td>
                   <td style="background-color:red;"><a style="color:white;" href="delete.php?id=<?php echo $result['id'];?>">DELETE</a></td>
                 </tr>
                 <?php
               }
                ?>

             </tbody>
           </table>

         </div>

       </div>

     </div>

   </body>
 </html>
