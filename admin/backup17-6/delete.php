<?php
    include_once('../config.php');
    $id=$_GET["ProID"];
    $query="DELETE FROM `tbl_product` WHERE `pro_id`= '$id' ";
    $result=mysqli_query($conn,$query);
    if(!$result){
        echo"can not delete".mysqli_errno($conn);
    }
    include_once('index.php');
  
    ?>
