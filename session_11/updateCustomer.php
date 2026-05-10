<?php
require "dbc.php";
$id = $_GET['id'];

$query = "SELECT * FROM `customers` WHERE id  = $id  " ;
$result =  mysqli_query($connection,$query);
if(mysqli_num_rows($result) == 0){
  header('location:index.php');
  exit();
}
$customer =  mysqli_fetch_assoc($result);
// print_r($customer);
// die();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<form class="w-75 m-auto" action="handelUpdateCustomer.php?id=<?= $customer['id'] ?>" method="post">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">first_name</label>
    <input type="text" name="first_name" value="<?= $customer['first_name']    ?> " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">last_name</label>
    <input type="text" name="last_name" value="<?= $customer['last_name']    ?> " class="form-control" id="exampleInputPassword1">
  </div>

 

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input type="email" name="email" value="<?= $customer['email']    ?> " class="form-control" id="exampleInputPassword1">
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">gender</label>
    <input type="text" name="gender" value="<?= $customer['gender']    ?> " class="form-control" id="exampleInputPassword1">
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">money</label>
    <input type="number" name="money" value="<?= $customer['money']    ?> " class="form-control" id="exampleInputPassword1">
  </div>

     <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">city</label>
    <input type="text" name="city" value="<?= $customer['city']    ?> " class="form-control" id="exampleInputPassword1">
  </div>

     <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">country</label>
    <input type="text" name="country" value="<?= $customer['country']    ?> " class="form-control" id="exampleInputPassword1">
  </div>

     <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">country_code</label>
    <input type="text" name="country_code"  value="<?= $customer['country_code']    ?> " class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>


</body>
</html>