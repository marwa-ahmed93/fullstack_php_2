<?php


// class Car{


// public $model ;
// public $speed ;
// public $color ;


// public function __construct($model='toyota' , $speed , $color)
// {
// //    echo "hello";
//  echo $this->model = $model ; 
//  echo $this->speed = $speed ; 
//  echo $this->color = $color ; 
// }

// public function drive(){
//   echo "strat";
// } 

// }
//  $car =  new Car('BMW' , 120 , 'red');
//  $car->drive();




// class BMW 
// {

// // public function __construct()
// // {
// //     //return parent::__construct($model, $speed, $color);
// // }
// }
 
  // $bm =   new BMW();



// abstract  class Dog{
// public $name ;
// // public function engine(){

// // }
// abstract public function start();
//   }
//   class Max extends Dog{
//     public function start(){

//     }
  // }





//   class Calc{

// private $result;

// public function sum($a,$b){

//   $this->result =  $a+$b;
//   return $this;
// }

// public function sub($a){
  
//   $this->result -=  $a;
//   return $this;
// }

// public function div($a){
  
//   $this->result /= $a;
//   return $this;
// }

// public function m($a){
  
//   $this->result *=  $a;
//   return $this;
// }
// public function resl(){
// echo  $this->result;
// }


//   }

//   $calc = new Calc;
//   $calc->sum(5,10)->div(50)->sub(80)->m(10)->resl();
  // $calc->div(5,10);
  // $calc->sub(5,10);





//   require_once "Customer/test.php";
//     require_once "Admin/User.php";
//       use Admin\User ;
//       use Customer\User  as customer;

//    $user = new User;
//    $user->isAdmin(); 
// echo "<br>";
//       $user = new customer;
//    $user->isCustomer(); 



//////////////////////////////////////////////////////////////////////



// $connection = mysqli_connect('localhost','root','','nti_session_9');
// $query = "SELECT * FROM `customers`";

//    $result =  mysqli_query($connection ,$query);

//  $customers =   mysqli_fetch_all($result  ,MYSQLI_ASSOC);
// echo "<pre>";
//  print_r($customers);



// $connection = new mysqli('localhost','root','','nti_session_9');
// $query = "SELECT * FROM `customers`";

//    $result =  $connection->query($query);

//  $customers =   $result->fetch_all(MYSQLI_ASSOC);
// echo "<pre>";
//  print_r($customers);



// $dsn = new PDO("mysql:host=localhost;dbname=nti_session_9",'root','');
// $query = "SELECT * FROM `customers`";

//    $result =  $dsn->query($query);

//  $customers =   $result->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
//  print_r($customers);




// // $insertedQuery = "INSERT INTO employees(name) VALUES('eslam')";
// // $result = $pod->query($insertedQuery);
// // $result->execute();

// /*Bind param */
// $insertedQuery = "INSERT INTO employees(name) VALUES(:name)";
// $result = $pod->prepare($insertedQuery);
// $name="malik";
// // $result->bindParam(":name",$name);
// // $result->execute();
//  $result->execute(['name' => "mohamed"]);


// $dsn = new PDO("mysql:host=localhost;dbname=nti_session_9",'root','');
// $query = "INSERT INTO employees(name)VALUES(:name)";
// $result =  $dsn->prepare($query) ;
// $name = "amr" ;
// // $result->bindParam(":name",$name  );
// // $result = $dsn->query($query);
// $result->execute(['name' => 'ahmed']);


//ploy

// class Animal{
//     public function makeSound(){
//         echo "Generic";
//     }
// }

// class Dog extends Animal{
//       public function makeSound(){
//         echo "Generic";
//     }
// }


// over load
//  class Calculator{
//     public function sum($a=5 , $b=8){
//         echo $a+$b;
//     }
//     //   public function sum($a,$b,$c){
//     //     echo $a+$b+$c;
//     // }
// }
// $calc = new Calculator();
// $calc->sum(10,20);
// sum(2,30,5);




/**SESSION */

// class Session{
//     public function __construct()
//     {
//         session_start();
//     }

//     public function setSession($key , $value){
//        $_SESSION[$key] = $value;
//     }
//     public function getSession($key){
//       return  $_SESSION[$key];
//     }

//     public function removeSession($key){
//         unset($_SESSION[$key]);
//     }

//     public function destroySession(){
//         session_destroy();
//     }
// }
// $session = new Session;
// $session->setSession();
// $session->getSession()


// $username = $_POST['user_name'];

// session_start();
// $_SESSION['username'] = $username;
// echo $_SESSION['username'] ;