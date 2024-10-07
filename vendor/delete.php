<?php
require_once '../config/connect.php';

/**
 * @var  $connect
 */
$productID = $_GET['id'];
$product = mysqli_query($connect,"DELETE FROM `products` WHERE `id` = '$productID'");

header ('Location: ../index.php');
?>