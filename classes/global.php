<?php
class _global
{
    public  const DB=null;
    public  const SITE_URL =null;
    public $success = false;
    public $error;
    function __construct()
    {
       $this->DB =new PDO("mysql:host=192.168.64.2;dbname=admincustomer", "root", "");
       $this->SITE_URL=isset($_SERVER['HTTPS']) ? 'https://'.$_SERVER['HTTP_HOST'].'/Frontend' : 
       'http://'.$_SERVER['HTTP_HOST'].'/Frontend';
       $this->error = null;
    }

    public function insert($table,$obj){
        
        $fields = get_object_vars($obj);
        try{
        $field_names = array_keys($fields);
        $placeholders = array_map(function($field) { return ":$field"; }, $field_names );
        $insert = "";                     
        $insert .= "INSERT INTO " . $table;
        $insert .= " (" . implode(",", $field_names) . ") VALUES ";
        $insert .= "(" . implode(",", $placeholders) . ")";
        $stmt = $this->DB->prepare($insert);
        $stmt->execute($fields);
        if ($stmt->errorInfo()[0]=="00000")
        {
            $this->success=true;
            $this->error = $stmt->errorInfo()[2];
        }
        
        }
        catch(Exception $ex)
        {
            $this->error = $ex->getMessage();
            
        }
    }

    public function select($table,$fields){
        try{
        $field_names = array_keys($fields);
        $placeholders = array_map(function($field) { return ":$field"; }, $field_names );
        $insert = "";                     
        $insert .= "INSERT INTO " . $table;
        $insert .= " (" . implode(",", $field_names) . ") VALUES ";
        $insert .= "('" . implode(",", $placholders) . ")";
        $stmt = $this->pdo-> prepare($insert);
        $stmt->execute($fields);
        $this->success=true;
        }
        catch(Exception $ex)
        {
            $this->error = $ex->getMessage();
            
        }
    }
}
?>