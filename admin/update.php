<?php 
include_once('../config.php');
$ID=isset($_REQUEST['ProID'])?$_REQUEST['ProID']:'';


$folder="../images/";
$name1=isset($_POST['txtname'])? $_POST['txtname']:'';
$img1=isset($_FILES['files']['name'])?$_FILES['files']['name']:'';
$size1=isset($_POST['txtsize'])? $_POST['txtsize']:'';
$price1=isset($_POST['txtprice'])? $_POST['txtprice']:'';
$point1=isset($_POST['txtpoint'])? $_POST['txtpoint']:'';

move_uploaded_file($_FILES['files']['tmp_name'],$folder.$img1);
$query="UPDATE tbl_product SET Pro_name='$name1',
img='$img1',
Size='$size1',
Price='$price1',
Point='$point1'
 WHERE Pro_id='$ID'" ;

$result=mysqli_query($conn,$query);
if(!$result)
{
    echo "success".mysqli_error($conn);
    }
  include_once('index.php');
?>