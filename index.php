<?php

require("config/connect.php");
/**
 * @var  $connect
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>

<style>
    th, td {
        padding: 15px;
        font-size: x-large;
    }

    th {
        background: #3b3939;
        color: white;
    }

    td {
        background: #ffd165;
    }
</style>
<body>
<h1>Table from Database</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
    </tr>
    <?php
    $products = mysqli_query($connect, "SELECT * FROM `products`");
    $products = mysqli_fetch_all($products);

    foreach ($products as $item) {
        ?>
        <tr>
            <td><?= $item[0] ?></td>
            <td><?= $item[1] ?></td>
            <td><?= $item[3] ?></td>
            <td><?= $item[2] ?></td>
            <td><a href="update.php?id=<?= $item[0] ?>">Update</td>
            <td><a style = "color: #830303;" href="vendor/delete.php?id=<?= $item[0] ?>">Delete</td>
        </tr>

        <?php
    }

    ?>

</table>

<h1>Add new product form</h1>

<form action="vendor/create.php" method="post">
    <p>Title</p>
    <input type="text" name="title">
    <p>Description</p>
    <textarea name="description"></textarea>
    <p>Price</p>
    <input type="number" name="price"><br>
    <br>
    <button type="submit">

        Add new product
    </button>
</form>
</body>
</html>