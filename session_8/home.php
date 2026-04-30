<?php
session_start();
if(isset($_SESSION['error'])){
  foreach($_SESSION['error'] as $error){
    echo $error."<br>";
  }
  unset($_SESSION['error']);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
<form class="w-75 m-auto my-5" action="index.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">USER NAME</label>
    <input type="name" name="user_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">age</label>
    <input type="number" name="age" class="form-control" id="exampleInputPassword1">
  </div>

  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>