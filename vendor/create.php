<?php
require_once '../config/connect.php';

/**
 * @var  $connect
 */

$title = $_POST["title"];
$description = $_POST['description'];
$price = $_POST['price'];
mysqli_query($connect, "INSERT INTO `products` (`id`, `title`, `price`, `description`) VALUES (NULL, '$title', '$price', '$description')");