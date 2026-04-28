<?php

// print_r($_GET);
// echo $_GET['name'] ;
// echo "<br>";
// echo $_GET['password'] ;



// $user_name =  $_GET['name'] ;
// echo "<br>";
// $user_password =  $_GET['password'] ;

// echo "welcome ".$user_name ;






//  if(isset($_POST['submit'])){

//     echo "Enter";

//       $user_name =  $_POST['name'];
// $user_password= $_POST['password'];

//  echo "welcome ".$user_name ; 


//  }
//  else{
//     echo "not valid";
//  }





// if(isset($_POST['submit'])){
//     $num1 = $_POST['num1'];
//     $num2 = $_POST['num2'];
//     $operators = $_POST['operators'];

//     switch($operators){
//         case '+':
//             echo $num1 + $num2;
//             break;

//              case '-':
//             echo $num1 - $num2;
//             break;

//              case '*':
//             echo $num1 * $num2;
//             break;

//              case '/':
//             echo $num1 / $num2;
//             break;

//             default :
//            echo "not valid";
//     }
// }

// session_start();
// if(isset($_POST['submit'])){

//   $user_name = $_POST['name'];
// $password = $_POST['password'];

// // if(isset($_POST['Check']) && $_POST['Check'] ==true){
// //     setcookie('username',$user_name ,time()*60);
// // setcookie('password',$password);

// // }

// // echo $_COOKIE['username'];

// $_SESSION['name'] = $user_name;
// $_SESSION['password'] = $password;


// header('location:welcome.php');
// }



// $arr = ['ahmed' , 'mohamed' ,'tariq'];




// echo "<pre>";
// print_r($_SERVER);
session_start();

// if($_SERVER['REQUEST_METHOD'] == 'POST'){

//   $user_name = $_POST['name'];
// $password = $_POST['password'];  


// $_SESSION['password'] = $password;
// $errors= [];

// if(strlen($user_name) <5 || strlen($user_name) >12){
//     $errors[] = "the name between 6 to 12";
// }

// if(strlen($password) <3 || strlen($password) >9){
//     $errors[] = "the password between 3 to 9";
// }

// if($errors){
//     $_SESSION['errors'] = $errors;
//     header('location:home.php');
//     exit();
// }

// $_SESSION['name'] = $user_name;
// header('location:welcome.php');
// exit();



// }
echo "<pre>";
// print_r($_FILES['iamge']);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
 
$img = $_FILES['iamge'];
$img_name = $img['name'];
$tmp_name = $img['tmp_name'];

$ext = pathinfo($img_name ,PATHINFO_EXTENSION);
$new_img = uniqid().".".$ext;
move_uploaded_file($tmp_name ,$new_img);

echo "<img src='$new_img' >";

}