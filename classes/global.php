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

    public function select($table,$fields,$filter = null){
       try{
        $select="";
           if ($fields == null)
           $select .= "select * from  " . $table;
           else
           {
        $field_names = array_keys($fields);
        $placeholders = array_map(function($field) { return ":$field"; }, $field_names );                  
        $select .= "select " . implode(",", $fields) . " from  " . $table;
           }
        if ($filter != null)
        $select .= " where $filter";
       $stmt = $this->DB-> prepare($select);
       $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        $this->success=true;
        return $result;
        }
        catch(Exception $ex)
        {
            $this->error = $ex->getMessage();
            
        }
    }
    function array_except($array, $keys) {
        return array_diff_key($array, array_flip((array) $keys));   
      }
    public function update($table,$obj,$filter,$exclude=array()){
        
        $fields = get_object_vars($obj);
        $fields = $this->array_except($fields,$exclude);
        var_dump($fields);
        try{
            $field_names = array();
            $field_names = array_keys($fields);
            if (count($exclude)>0)
            $field_names =array_diff($field_names,$exclude);
            
        

        $placeholders = array_map(function($field) { return "$field=:$field"; }, $field_names );
        $update = "";                     
        $update .= "update " . $table;
        $update .= " set " . implode(",", $placeholders);
        $update .=" where $filter";
        $stmt = $this->DB->prepare($update);
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
}
?>