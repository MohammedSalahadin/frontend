<?php
class user
{
  public $loggedIn = false;
  public $userName = "";
  public $password="";
  public $userId="";
  
  function __construct()
  {
  }

   
    
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