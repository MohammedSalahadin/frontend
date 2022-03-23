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

  public function insert()
  {
    $global = new _global;
    $global->insert('companies',$this);
    if ($global->success == true)
return true;
else 
return $global->error; 
  }
  
}
?>