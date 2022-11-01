<?php

// take all data
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$exp_date = $_POST['expire_date'];

//creating connection
$conn = mysqli_connect("localhost", "root", "", "crud-app");
$sql = "INSERT INTO `product`( `name`, `description`, `quantity`, `price`, `date`) VALUES ('{$name}','{$description}','{$quantity}','{$price}','{$exp_date}')";


if(mysqli_query($conn, $sql)){
    header("Location:../index.php");
}else{
    die("Query failed");
}