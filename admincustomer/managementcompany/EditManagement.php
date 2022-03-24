<?php
  require('../../header.php');
  require('../../classes/company.php');
  require('../../classes/shippingAddress.php');

  $companies = $global->select('companies',null);
 
  if (isset($_GET["companyId"]))
  $companyId=$_GET["companyId"];
if (isset($_POST["slcCompany"]))
{
  $company = new company;
  $companyId= trim($_POST['slcCompany']);
  $company->companyName = trim($_POST['companyName']);
  $company->webAddress =trim($_POST['webAddress']);
  $company->note =trim($_POST['note']);
  $company->mainPhone =trim($_POST['mainPhone']);
  $company->fax =trim($_POST['fax']);
  $result = $company->update("companyId = $companyId");
  if ($result==true)
  {
  echo '<script>alert("Company has been edited successfully");</script>';
  echo '<script>window.location.href = window.location.href;</script>';
  }
  else
  echo '<script>alert("error");console.log("'.$result.'");</script>';
  
}
$company = new company;
if (count($companies)>0)
{
  $company= $companies[0];
}
if (isset($_GET["companyId"]))
{
  
  $result = $global->select('companies',null,"companyId =$companyId");
 
  $company = $result[0];
  
}

$shippingAddresses = $global->select('shippingAddresses',null);
 
if (isset($_POST['streetNumber']))
{
$shippingAddress = new shippingAddress;

$shippingAddress->streetNumber = trim($_POST['streetNumber']);
$shippingAddress->streetName =trim($_POST['streetName']);
$shippingAddress->streetType =trim($_POST['streetType']);
$shippingAddress->addressLine2 =trim($_POST['addressLine2']);
$shippingAddress->city =trim($_POST['city']);
$shippingAddress->state = trim($_POST['state']);
$shippingAddress->zip =trim($_POST['zip']);
$shippingAddress->country =trim($_POST['country']);
$shippingAddress->buildingNumber =trim($_POST['buildingNumber']);
$shippingAddress->addressType =trim($_POST['addressType']);
//$shippingAddress->companyId = $companyId;

$result = $shippingAddress->insert();
  if ($result==true)
  echo '<script>alert("Shipping address has been added successfully")</script>';
  else
  echo '<script>alert("error");console.log("'.$result.'");</script>';
}
?>
<script>
  $( function() {
    $( "#ِaddDialog" ).dialog({
      autoOpen: false,
      width: "30%", height: 450
    });
    $( "#Add" ).on( "click", function() {
      $( "#ِaddDialog" ).dialog( "open" );
    });
    $('#slcCompany').on('change', function() {
      window.location.href = window.location.origin+"/Frontend/admincustomer/managementcompany/EditManagement.php?companyId="+this.value;
});
  } );
  </script>
<div class="d-flex justify-content-center">
<div class="col-lg-6">
  <div class=" p-1 rounded text-center mt-3 bg--primary">
    <h3 class="" style="color: gray;">EDIT MANAGEMENT COMPANY</h3>
  </div>

  <?php
  require('../../components/manage-company/editmanagement.php')
  ?>
</div>
</div>

 <?php
  require('../../footer.php')
  ?>