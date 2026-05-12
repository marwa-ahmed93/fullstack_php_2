<?php
require 'dbc.php';

// header('content-type:application/json');
header('content-type:application/json');


if(!isset($_GET['id'])){
    echo json_encode(['message'=>'you must send id']);
}

else{


  $id = $_GET['id'];

  $query =  " SELECT * FROM `customers`
  WHERE id = $id " ; 
   $result =  mysqli_query($connection ,$query );
  if(mysqli_num_rows($result ) == 0){
   echo json_encode(['message'=>'there is no data']);
    }
  else{
   $customer = mysqli_fetch_assoc($result);
// echo "<pre>";
// var_dump($data);

   $data= json_encode($customer );
   echo($data);
}


}
