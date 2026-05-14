<?php

// class Car{
//     public $name;
//     public $color;
//     public $speed ;

//     public function engine(){
//         echo "your car $this->name  and color $this->color and speed $this->speed";
//     }

//     public function __construct($name , $color ,$speed)
//     {
//         $this->name = $name ;
//         $this->color = $color ;
//         $this->speed = $speed ;

//     }
// }
// $car = new Car('tyota','Black',120);
// echo $car->name ="BMW";
// echo "<br>";

// echo $car->color ="RED";

// echo "<br>";
// echo $car->speed =120;

// echo "<br>";
// echo $car->engine();












//abstract

// abstract class Animal{
// public $name ;

// public function eat(){

// }

// abstract public function makeSound();

// }

// class Dog extends Animal{
//  public function makeSound(){

//  }
// }

// class Cat extends Animal{
//      public function makeSound(){
    
//  }
// }


// abstract  class Engine{

//   abstract public function startEngine();
// }
// class Coffee extends Engine{
  
//  public function startEngine(){
//     echo "make coffee";
//  }

// }


// abstract class payGateWay{
//    abstract public function pay($amount);
// }

// class payPal extends payGateWay{
//     public function pay($amount){
//         echo "with paypal $amount";
//     }
// }

// class stripe extends payGateWay{
//     public function pay($amount){
//         echo "with stripe $amount";
//     }
// }

//  function proccessPayment($getway , $amount){
 
//  echo $getway->pay($amount);
// }

// proccessPayment(new payPal ,1000);
// proccessPayment(new stripe ,2000);







////////////////////////////////////////////////////////////////////////
//const

// class User{
//     const ROLE = "user";

//     public function getRole(){
//     //   return User::ROLE;
//         return self::ROLE;
//     }
// }
// class Admin extends User{

// const ROLE ="admin";
// }
// $admin = new Admin;
// echo $admin::ROLE;




//////////////////////////////////////////////////////////////////
//encapsulation

/* access modifier 
1-public
2-private
3-protected

*/



//  class Animal{

//   private $name  = 'max';

//  public function eat(){
//     echo "eat";

// }

//  public function makeSound(){
//     // echo "generic";
//     echo $this->name;
//  }


// }

// class Dog extends Animal{
//  public function makeSound(){

//  }
//  public function sayName(){
//     // echo $this->name;
//  }
// }

// class Cat extends Animal{
//      public function makeSound(){
    
//  }
// }

// $animal = new Animal ;
// // echo $animal->name = "lion";
// echo $animal->makeSound();


// $dog = new Dog ;
// echo $dog->sayName() ;


/*
geter && seter
*/

// class BanckAccount{
//     private $balance;

//     public function setBalance($balance){
//       $this->balance = $balance;
//     }

//       public function getBalance(){
//      return $this->balance;
//     }
// }

// $account = new BanckAccount;
// echo $account->getBalance();
// echo "<br>";
// $account->setBalance(2000);
// echo $account->getBalance();


///////////////////////////
//final


// final class Animal{

// public function makeSound(){

// }
// }
// class Dog extends Animal{
//     public function makeSound(){
//    echo "how how";
// }
// }
// $animal = new Animal ;



//////////////////////////////////////
//interface

// interface paymentMethod{
//     public function paypal();
//     public function stripe();
// }

// interface Animal{
//     public function eat();
// }
// class paypal implements paymentMethod ,Animal{
//   public function Paypal(){

//   }
//     public function stripe(){

//     }
//     public function eat(){
// echo "eating";
//     }
// }
// $paypal= new Paypal;
// $paypal->eat();



////////////////////////////////////////////////////////
//method chaining


// class Calculator{

// private $result =0;

// public function sum($num1,$num2){
//     $this->result=  $num1+$num2;
//     // echo $result;
//     return $this;
// }

// public function sub($num1){
//     // $result =  $num1-$num2;
//  $this->result -=$num1;
//     return $this;
// }


// public function multi($num1){
//      $this->result *=$num1;

 
//     return $this;
// }


// public function div($num1){
//     $this->result /=$num1;
 
//     return $this;
// }

// public function result(){
//     // $result =  $this->result;
 
//     echo $this->result;
// }

// }

// // $calc = new Calculator;
// // echo $calc->sub(50,60);
// // echo "<br>";
// // echo $calc->sum(50,60);
// // echo "<br>";
// // echo $calc->multi(50,60);
// // echo "<br>";
// // echo $calc->div(50,60);
// // echo "<br>";


// $calc = new Calculator;
//  $calc->sum(50,60)->sub(50)->multi(5)->div(2)->result();
// echo "<br>";
// echo $calc->sum(50,60);
// echo "<br>";
// echo $calc->multi(50,60);
// echo "<br>";
// echo $calc->div(50,60);
// echo "<br>";


////////////////////////////////////////////////////////


                        //namespace


///////////////////////////////////////////////////////



/*
PDO  => php data object
*/

//1
// $connection = new mysqli('localhost','root','','nti11');
// $query ="SELECT * FROM `customers`";
// $result = $connection->query($query);
// $data = $result->fetch_all(MYSQLI_ASSOC);

// echo "<pre>";
// print_r($data);


///2
// $connection2 = mysqli_connect('localhost','root','','nti11');
// $query2 ="SELECT * FROM `customers`";
// $result = mysqli_query($connection2  ,$query2);
// $data = mysqli_fetch_all($result ,MYSQLI_ASSOC);

// echo "<pre>";
// print_r($data);



//pdo
// $pod = new PDO("mysql:host=localhost;dbname=nti11",'root','');
// $query ="SELECT * FROM `customers`";
// $result = $pod->query($query);
// $data = $result->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($data);

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






////////////////////////////////////////////////////////////////

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


//over load
// class Calculator{
//     public function sum($a,$b){
//         echo $a+$b;
//     }
//       public function sum($a,$b,$c){
//         echo $a+$b+$c;
//     }
// }
// sum(2,30);
// sum(2,30,5);



//////////////////////////////////////////////////////////////////
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



///////////////////////////////////////////
/**
 * REQUEST
 */

// class Request{
//     public function getData($key){
//        return $_GET[$key];
//     }
//     public function postData($key , $value){
//         $_POST[$key] = $value;
//     }

// }


//////////////////////////////////////////////////////

// class Database{
//     private static $dsn = "mysql:host=localhost;dbname=nti11";
//     public static function getConnection(){
//         return new PDO(self::$dsn,'root','');
//     }
// }



///////////////////////////////////////////////////////////////

/** 
 * STATIC
 */

// class Calc{
//     static $count=0;
//     // public function counter(){
//     //     // $this->count++;
//     //     self::$count++;
//     //     echo self::$count;
//     // }

//        public static function counter(){
//         // $this->count++;
//         self::$count++;
//         echo self::$count;
//     }
// }
// // $calc = new Calc;
// // // $calc->counter();
// // $calc::counter();
// Calc::counter();



//////////////////////////////////////////////////////////////////////////

/**
 * Data Base system
 */

interface Database{
   
public function select($columns,$table,$condation,$operator,$value);
public function selectAll($columns,$table);
public function insert($table,$columns,$value);
public function update($table,$columns,$columnsValue,$condation ,$operator,$value);
public function delete($table ,$condation,$operator,$value);

}
// interface work{

// }
