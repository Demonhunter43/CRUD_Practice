<?php
require_once '../config/connect.php';

/**
 * @var  $connect
 */

$productID = $_POST["id"];
$title = $_POST["title"];
$description = $_POST['description'];
$price = $_POST['price'];
mysqli_query($connect, "UPDATE `products` SET `title` = '$title', `description` = '$description', `price` = '$price' WHERE `products` . `id` = '$productID'");
header ('Location: ../index.php');