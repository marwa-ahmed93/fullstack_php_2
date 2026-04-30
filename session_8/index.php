<?php

// print_r($_REQUEST);
// setcookie('test','welcome');






/**
 * /^[A-Z]{2}/
 * /ab/
 * /a/
 * /[ab]/
 * /[abcdef]/
 * /[a-z]/
 * /[3a-z#]/
 * /[0-9a-z_]/
 * /web[design development]/
 * /web\s?(design | development)/   
 * ? zero ar one
 * /[A-Z][a-z][a-z][a-z][A-Z]/
 * /[A-Z][a-z]{3}[A-Z]/
 * /[a-z]{5}/
 * /[a-z]{3,8}/
 * /^01[0125][0-9]{8}$/
 * /^(002)?01[0125][0-9]{8}$/
 * /^(\+2|002)?01[0125][0-9]{8}$/
 * 
 * ?   zero ar one
 * + one or more
 *  * zero or more
 * 10 =>80  
 * 
 * 
 * ^([1-7][0-9]|80)
 * 
 * /./
 * /.{6}/
 * /\s/
 * / /
 * /\S/
 * / \s/
 * /\d /
 * /\D/
 * /\w/
 * /\W/  [0-9a-z_]
 * /\s/
 * /\d/ [0-9]
 */




// /ab/    manb  => false   m ba o     => false  mmmmabopiu 



// $email = 'marwa@gmail.com';

// echo filter_var($email,FILTER_SANITIZE_EMAIL);

//  $number = 18;
 
//  echo filter_var(
//     $number ,
//      FILTER_VALIDATE_INT,
//     [
//         'options'=> ['min_range'=> 12 , 'max_range'=>25 ]
//         ]
 
//  );



// $URL = "https://getbootstrap.com/docs/5.0/forms/overview/";

// echo filter_var($URL , FILTER_VALIDATE_URL);






////////////////////////////////////////////////////////////////////
session_start();
include('validate.php');



if($_SERVER['REQUEST_METHOD']== 'POST'){

$errors = [];

foreach($validates as $validate_name => $validate_value){
  


   
$value = filter_input(INPUT_POST ,$validate_name , $validate_value['filter'] , $validate_value['my_option']) ;

if(empty($validate_name )){
   $errors[]  = "you must full ".$validate_name;
}

   elseif($value == false){
      $errors[] = $validate_value['error'];
   }




}

if($errors){
   $_SESSION['error'] = $errors;
   header('location:home.php');
   exit();
}

header('location:welcome.php');


}