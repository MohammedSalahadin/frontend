<?php
include_once('global.php');
class user
{
    function __construct()
  {
  }

    public $loggedIn = false;
    public $userName = "",$password="",$userId="";
    function login($userName,$password)
    {
      $global = new _global;
      $pdos = $global->DB->prepare('select * from users where username = :userName and password = :password');

      $pdos->bindParam(':userName', $userName);
      $pdos->bindParam(':password', $password);
      $pdos->execute();
    $result = $pdos->fetchObject('user');  
        
if ($result!=false)
{  
    $this->loggedIn=true;
    $this->userId= $result->userId;
    $this->userName= $result->userName;
    return $this;
    }
    return false;
}
}