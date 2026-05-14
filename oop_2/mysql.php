<?php

use Dom\Mysql as DomMysql;

require_once 'index.php';

class mysql implements Database{
private $connection;
public function __construct($connection , $username , $password)
{
    $this->connection = new PDO($connection, $username,$password);
    // $dsn  = new PDO("mysql:host=localhost;dbname=nti11",'root','');
}

    public function select($columns,$table,$condation,$operator,$value){
       $query = "SELECT $columns FROM $table WHERE $condation $operator $value";
//  $query  = "SELECT first_name FROM customers WHERE id = 2";
        $result = $this->connection->query($query);
        $data= $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
public function selectAll($columns,$table){
  $query = "SELECT $columns FROM $table";
        $result = $this->connection->query($query);
        $data= $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
}
public function insert($table,$columns,$value){
    $query = "INSERT INTO $table($columns) VALUES('$value') ";
    $result= $this->connection->query($query);
    return $result;

}
public function update($table,$columns,$columnsValue,$condation ,$operator,$value){
  $query = "UPDATE $table SET $columns = '$columnsValue' WHERE $condation $operator $value"  ;
  $result= $this->connection->query($query);
  return $result;
}
public function delete($table ,$condation,$operator,$value){
    $query ="DELETE FROM $table WHERE $condation $operator $value";
     $result= $this->connection->query($query);
  return $result;
}
}

$mysql = new Mysql("mysql:host=localhost;dbname=nti11",'root','');
// print_r($mysql->selectAll("*",'customers'));
echo "<pre>";
// print_r($mysql->select("first_name",'customers' , 'id','=',5));

// print_r($mysql->insert("employees",'name' , 'zoza'));

// print_r($mysql->update("employees",'name' , 'noah','id','=',13));

print_r($mysql->delete("employees" ,'id','=',13));