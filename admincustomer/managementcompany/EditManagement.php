<?php
  require('../../header.php');
  require('../../classes/company.php');
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
  // $company->streetNumber =trim($_POST['streetNumber']);
  // $company->streetName =trim($_POST['streetName']);
  // $company->streetType =trim($_POST['streetType']);
  // $company->city =trim($_POST['city']);
  // $company->state =trim($_POST['state']);
  // $company->zip =trim($_POST['zip']);
  // $company->buildingNumber =trim($_POST['buildingNumber']);
  $company->mainPhone =trim($_POST['mainPhone']);
  $company->fax =trim($_POST['fax']);
  $result = $company->update("companyId = $companyId");
  if ($result==true)
  {
  echo '<script>alert("Company has been edited successfully");</script>';
 // echo '<script>window.location.href = window.location.href;</script>';
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

?>
<script>
  $( function() {
    $( "#ِaddDialog" ).dialog({
      autoOpen: false,
      width: "30%", height: 600
    });
    $( "#Add" ).on( "click", function() {
      $( "#ِaddDialog" ).dialog( "open" );
    });
    $('#slcCompany').on('change', function() {
      window.location.href = window.location.origin+"/Frontend/admincustomer/managementcompany/EditManagement.php?companyId="+this.value;
});
  } );
  </script>
<div class="container d-flex justify-content-center">
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