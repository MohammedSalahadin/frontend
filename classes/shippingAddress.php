<?php
class shippingAddress
{
  public $addressId;
  public $streetNumber;
  public $streetName;
  public $streetType;
  public $addressLine2;
  public $city;
  public $state;
  public $zip;
  public $country;
  public $buildingNumber;
  public $addressType;

  function __construct()
  {
  }

  public function insert()
  {
    $global = new _global;

    $global->insert('shippingAddresses',$this);
    if ($global->success == true)
return true;
else 
return $global->error; 
  }

  public function update($filter)
  {
    $global = new _global;
// $exclude = array('streetNumber','streetName','streetType','city','state','zip','buildingNumber');
    $global->update('shippingAddresses',$this,$filter,$exclude);
    if ($global->success == true)
return true;
else 
return $global->error; 
  }
  
}
?>