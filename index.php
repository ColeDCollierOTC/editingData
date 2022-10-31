<?php
    include "model/database.php";
    
    $del = filter_input(INPUT_GET, 'del');
    if ($del)
    {
        // $qry = "delete from products where prodId = $del";
        $qry = "update products set active = 0  where prodId = $del";
        $sql = $db->query($qry);

        // echo($qry);
    }

    $prodID = filter_input(INPUT_POST, 'pID');
    if ($prodID)
    {
        $pName = filter_input(INPUT_POST, "pName");
        $pInvnetory = filter_input(INPUT_POST, "pInvnetory");

        $qry = "update products set productName = '$pName', inventory = $pInvnetory  where prodId = $prodID";
        // $sql = $db->query($qry);
        echo($qry);

        
    }

?>
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
        // get all the products from the database
        $products = getProducts();
        //loop through the products array and display the name of the product    
        foreach($products as $product)
        {
            $prodID = $product['prodId'];        
            echo ("<a href='./?del=$prodID'>del</a> | <a href='edit.php/?id=$prodID'>Edit</a> $product[productName] >> $product[inventory]</br>");
        }


    ?>
    
</body>
</html>