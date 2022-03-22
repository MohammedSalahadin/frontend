<?php
class _global
{
    public  const DB=null;
    public  const SITE_URL =null;
    function __construct()
    {
       $this->DB =new PDO("mysql:host=192.168.64.2;dbname=admincustomer", "root", "");
       $this->SITE_URL=isset($_SERVER['HTTPS']) ? 'https://'.$_SERVER['HTTP_HOST'].'/Frontend' : 
       'http://'.$_SERVER['HTTP_HOST'].'/Frontend';
    }
}
?>