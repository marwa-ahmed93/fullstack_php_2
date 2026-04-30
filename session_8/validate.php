<?php

$validates =[

'user_name' =>
 [
   'filter' => FILTER_VALIDATE_REGEXP ,
   'error'=> "invalid user_name",
   'my_option' => 
   [
'options' => ['regexp' => '/[a-z]{3,9}$/']
   ]
],

'password' =>
 [
   'filter' => FILTER_VALIDATE_REGEXP ,
   'error'=> "invalid password",
   'my_option' => 
   [
'options' => ['regexp' => '/[a-z0-9]{3,9}$/']
   ]
],

'age' =>
 [
   'filter' => FILTER_VALIDATE_INT ,
   'error'=> "invalid age",
   'my_option' => 
   [
'options' => ['min_range' => 16 , 'max_range'=>60]
   ]
],


'email' =>
 [
   'filter' => FILTER_VALIDATE_EMAIL ,
   'error'=> "invalid email",
 ],

];