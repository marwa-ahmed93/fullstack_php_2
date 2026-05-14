<?php

namespace Session;
class Session{

public function __construct()
{
    session_start();
}

public function setSession($key,$value){
 
$_SESSION[$key] = $value ;

}

public function getSession($key){
 
return $_SESSION[$key]  ;

}

public function removeSession($key){
  unset($_SESSION[$key]);
}
public function destorySession(){
    session_destroy();
}


}