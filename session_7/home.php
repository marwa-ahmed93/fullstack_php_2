
<?php 
session_start();

// if(isset($_SESSION['errors'])){

//   foreach($_SESSION['errors'] as $error){
//     echo $error ."<br>";
//   }
// }



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


    <!-- <form class="container" method="post" action="index.php"> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" name="name" value="<?php  if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" value="<?php  if(isset($_COOKIE['password']))  echo $_COOKIE['password'] ;?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input name="Check" type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> -->




   <!-- <form class="container" method="post" action="index.php"> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="number" name="num1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="number" name="num2" class="form-control" id="exampleInputPassword1">
  </div>

<div class="mb-3">
      <select name="operators" id="">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>
</div>


  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> -->




   <form class="container" method="post" action="index.php" enctype="multipart/form-data"> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="file" name="iamge" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>



  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>







    
</body>
</html>