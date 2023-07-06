 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>

 <body>
     <table border="1">
         <tr>
             <th>ID</th>
             <th>Menu Name</th>
             <th>Photo</th>
             <th>Size</th>
             <th>Price</th>

             <th>Point</th>
         </tr>

         <?php
            include_once('../config.php');
            $query = "SELECT * FROM `tbl_product` order by`pro_id`";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
                 <tr>
                     <td><?php echo $row['pro_id']; ?></td>
                     <td><?php echo $row['pro_name']; ?></td>
                     <td> <img src="../images/<?php echo $row['img']; ?>" width=100></td>
                     <td><?php echo $row['size']; ?></td>
                     <td><?php echo $row['price']; ?></td>
                     <td><?php echo $row['point']; ?></td>
                 </tr>

         <?php
                }
            }
            ?>

     </table>
 </body>

 </html>