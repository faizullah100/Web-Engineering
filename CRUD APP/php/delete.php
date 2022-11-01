<?php

//Recieving all data
$id = $_GET['id'];



//creatinng connection
$conn = mysqli_connect("localhost", "root", "", "crud-app");
$sql = "DELETE FROM `product` WHERE id = $id";


if(mysqli_query($conn, $sql)){
    header("Location:../index.php");
}else{
    die("Query failed");
}
