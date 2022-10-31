<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "model/database.php";
        $id = filter_input(INPUT_GET, "id");
        $prop = getProduct($id);
    ?>
    <h1>Edit a product</h1>
    
    <form action="index.php" method="post">
        <input type="text" name = "pName" value = <?= $prop['productName']?>>
        <input type="text" name = "pInventory" value = <?= $prop['inventory']?>>

        <input type="hidden" name = "pID" value = <?= $prop['prodId']?>>
        <input type="submit" value="Saves Changes">



    </form>
</body>
</html>