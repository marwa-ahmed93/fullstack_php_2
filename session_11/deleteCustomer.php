<?php
// echo "hello";
$id = $_GET['id'];
require "dbc.php";

$query = "DELETE FROM customers WHERE id = $id";
$result = mysqli_query($connection , $query);

if($result){
    header('location:index.php');
}