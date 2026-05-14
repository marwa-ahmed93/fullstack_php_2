<?php
// class Database{

// private static $dsn = "mysql:host=localhost; dbname=nti_session_9";

// public static  function connection(){
//     return new PDO( self::$dsn , 'root' ,'');
// }

// }
// Database::connection();


// namespace Crud;

interface Crud{
public function selsectAll($column,$table);
public function selsect($column ,$table ,$condation ,$column_value,$operator,$value);
public function insert($table,$column_name,$column_value);
public function update();
public function delete();



}