<?php
class company
{
  public $companyName;
  public $webAddress;
  public $note;
  public $streetNumber;
  public $streetName;
  public $streetType;
  public $city;
  public $state;
  public $zip;
  public $buildingNumber;
  public $mainPhone;
  public $fax;

  function __construct()
  {
  }

  public function insert()
  {
    $global = new _global;

    $global->insert('companies',$this);
    if ($global->success == true)
return true;
else 
return $global->error; 
  }

  public function update($filter)
  {
    $global = new _global;
$exclude = array('streetNumber','streetName','streetType','city','state','zip','buildingNumber');
    $global->update('companies',$this,$filter,$exclude);
    if ($global->success == true)
return true;
else 
return $global->error; 
  }
  
}
?>