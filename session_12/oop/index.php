<?php

// class Car{
//   public  $model ;
//   public  $color ;
//   public  $speed ;

//   public function drive(){
//     // echo "start";
//     // echo $model = "mm";
//     echo "the model is ".$this->model. " and color ".$this->color." and speed is ".$this->speed ;
//   }

// }

// $car = new Car;
// echo $car->model = "BMW";
// echo "<br>";
// echo $car->color = "red";
// echo "<br>";
// echo $car->speed = 120;
// echo "<br>";
// $car->drive();
// echo "<br>";


// $car2 = new Car;
// echo $car2->model = "toyota";
// echo "<br>";
// echo $car2->color = "black";
// echo "<br>";
// echo $car2->speed = 120;
// echo "<br>";
// $car2->drive();
// echo "<br>";


// trait Animal{

//    public $eat ;
//     public $color ;

//     public function makeSound(){
//         echo "how how";
//     }
// }

// trait Dog{
//  public function eat(){
//     echo "start eating";
//  }
//     //  public function makeSound(){
//     //     echo "how how";
//     // }
// }

// // $dog = new Dog;
// // $dog->makeSound();

// class German{
// use Animal ;
// use Dog;
// }
// $german = new German;
// $german->makeSound();
// $german->eat();


// class Cat{
 

//     public function makeSound(){
//         echo "meow meow";
//     }
// }
// $cat = new Cat ;
// // echo $cat->color= "white";
// $cat->makeSound();






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
//    public function startEngine(){
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



// abstract class PayGatWay{
// abstract public function pay($amount);
// }
// class payPal extends PayGatWay{
// public function pay($amount){
//   echo "pay with paypal $amount";
// }
// }
// class stripe extends PayGatWay{
// public function pay($amount){
//   echo "pay with stripe $amount";
// }
// }

// function paymentProccess($getway,$amount ){
//    echo $getway->pay($amount);
// }
// paymentProccess( new payPal , 5000);
// paymentProccess( new stripe , 12000);



////////////////////////////////////////////////////////////////////////
//const

// class User{
//     const ROLE = "user";
// public $isadmin;
//     public function getRole(){
//          $this->isadmin;
//          self::ROLE;
//         //  User::ROLE;
//     }
// }
// class Admin extends User{

// const ROLE ="admin";
// }
// $admin = new Admin;
// $admin->isadmin;
// echo $admin::ROLE;




//////////////////////////////////////////////////////////////////
//encapsulation

/* access modifier 
1-public
2-private
3-protected

*/



//  class Animal{

//   protected $name  = 'max';

//  public function eat(){
//     echo "eat";

// }

//  public function makeSound(){
// echo "generic";
//     echo $this->name;
//  }


// }
// // $animal = new Animal;
// // $animal->makeSound();
// // echo $animal->name;

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
// // echo $animal->makeSound();


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




//interface

// interface paymentMethod{
//   // public $name;
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
