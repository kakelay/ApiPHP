<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
    <script language="Javascript" src="jquery-3.5.1.js"></script>
    <script language="Javascript" src="js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</head>

<body>

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Menu Naae</th>
                <th>Photo</th>
                <th>Size</th>
                <th>Price</th>
                <th>Point</th>
                <th>Settings</th>
            </tr>
        </thead>
        <tbody>
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
                        <td>
                            <a href="edit.php?ProID=<?php echo $row['pro_id']; ?>">Edit</a>
                            <a href="delete.php?ProID=<?php echo $row['pro_id']; ?>">Delete</a>
                        </td>
                    </tr>

            <?php
                }
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Menu Naae</th>
                <th>Photo</th>
                <th>Price</th>
                <th>Size</th>
                <th>Point</th>
                <th>Settings</th>
            </tr>
        </tfoot>
    </table>
</body>

</html>