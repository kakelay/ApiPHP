<!DOCTYPE html>
<html lang="en">
<?php
include_once('../config.php');
$ID = isset($_REQUEST['ProID']) ? $_REQUEST['ProID'] : '';
$query = "SELECT * FROM tbl_product WHERE  pro_id='$ID'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if (isset($_POST['btndelete'])) {
    include_once('delete.php');
} else if (isset($_POST['btnupdate'])) {
    include_once('update.php');
} else {


?>

    <body>
        <form method="post"   enctype="multipart/form-data">
            Name : <input type="text" name="txtname" value="<?php echo $row['pro_name']; ?>"><br />
            Photo : <img src="../images/<?php echo $row['img']; ?>" width=100>
            <input type="file" name="files"><br>
            Size :<?php echo $row['size']; ?>
            <select name="txtsize">
                <option value="Large">large</option>
                <option value="Medium">Medium</option>
                <option value="small">small</option>
            </select><br>
            Price : <input type="text" name="txtprice" value="<?php echo $row['price'];?>">$<br/>
            Point : <input type="text" name="txtpoint" value="<?php echo $row['point'];?>"><br/>
            <input type="submit" value="Delete" name="btndelete">
            <input type="submit" value="update" name="btnupdate">
        </form>
    <?php
}
    ?>
    </body>

</html>