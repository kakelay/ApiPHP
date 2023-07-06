<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="added_product.php" enctype="multipart/form-data">
        Name:<input type="text" name="txtname"><br><br>
        Photo:<input type="file" name="files"><br><br>
        Size:<select name="txtsize">
            <option>large</option>
            <option>Medium</option>
            <option>Small</option>
        </select><br><br>
        Price:<input type="text" name="txtprice"><br><br>
        point:<input type="text" name="txtpoint"><br><br>
        <input type="submit" value="Add Menu" name="bntadd"><br>


    </form>
</body>

</html>