<?php
require 'dbc.php';

// header('content-type:application/json');
header('content-type:application/json');

 $query =   "SELECT * FROM `customers`" ; 
$result =  mysqli_query($connection ,$query );
$customers = mysqli_fetch_all($result , MYSQLI_ASSOC);
// echo "<pre>";
// var_dump($data);

 $data= json_encode($customers );
  echo($data);