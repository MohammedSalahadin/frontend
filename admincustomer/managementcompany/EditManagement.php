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
      autoOpen: false, width:'auto',
       height: 450
    });
    $( "#Add" ).on( "click", function() {
      $( "#ِaddDialog" ).dialog( "open" );
    });
    $( "#ِeditDialog" ).dialog({
      autoOpen: false, width:'auto',
       height: 450
    });
    $( "#Edit" ).on( "click", function() {
      $( "#ِeditDialog" ).dialog( "open" );
      var selected = $('#slcShippingAddress').find('option:selected');
       var shippingAddress = selected.data('shippingaddress'); 
       alert(JSON.stringify(shippingAddress));
    $("#editAddressType").val(shippingAddress.addressType).change();
      $( "#editBuildingNumber").val(shippingAddress.buildingNumber);
      $( "#editCountry").val(shippingAddress.country);
      $( "#editZip").val(shippingAddress.zip)
      $( "#editState").val(shippingAddress.state).change();
      $( "#editCity").val(shippingAddress.city);
      $( "#editAddressLine2").val(shippingAddress.addressLine2);
      $( "#editStreetType").val(shippingAddress.streetType).change();
      $( "#editStreetName").val(shippingAddress.streetName);
      $( "#editStreetNumber").val(shippingAddress.streetNumber);
    });
    
    $('#slcCompany').on('change', function() {
      if (this.value == "Choose")
      window.location.href = window.location.origin+"/Frontend/admincustomer/managementcompany/EditManagement.php";
      else
      window.location.href = window.location.origin+"/Frontend/admincustomer/managementcompany/EditManagement.php?companyId="+this.value;
});
$('#slcShippingAddress').on('change', function() {
 
     $('#billingAddress').val($('#slcShippingAddress option:selected').html());
    
});
  } );
  </script>
<div class="bg-light p-5 rounded shadow d-flex justify-content-center">
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