<?php

// use Crud\Crud;

require_once "Database.php";

class Mysql implements Crud{

private  $dsn;

public function __construct($dsn , $root , $password)
{
    $this->dsn =  new PDO($dsn ,$root , $password );
}

public function selsectAll($column,$table){
    $query = "SELECT $column FROM $table";
   $result =  $this->dsn->query($query);
       $data =    $result->fetchAll(PDO::FETCH_ASSOC);
       echo "<pre>";
       print_r($data);
}
public function selsect($column ,$table ,$condation ,$column_value,$operator,$value){
      $query = "SELECT $column FROM $table $condation $column_value $operator $value";
   $result =  $this->dsn->query($query);
       $data =    $result->fetchAll(PDO::FETCH_ASSOC);
       echo "<pre>";
       print_r($data);
}
public function insert($table,$column_name,$column_value){
    $query = "INSERT INTO $table($column_name)VALUES('$column_value') ";
    $result = $this->dsn->query($query);
    $result->execute();
}
public function update(){}
public function delete(){}



}
$mysql = new Mysql("mysql:host=localhost;dbname=nti_session_9",'root','');
// $mysql->selsectAll('*','customers');
// $mysql->selsect('first_name' ,'customers','WHERE' , 'id' , '=' , '5' );
$mysql->insert('employees','name','mohamed');