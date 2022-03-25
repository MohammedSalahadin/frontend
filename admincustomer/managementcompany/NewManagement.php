<?php
  require('../../header.php');
  require('../../classes/company.php');
if (isset($_POST["companyName"]))
{
  $company = new company;

  $company->companyName = trim($_POST['companyName']);
  $company->webAddress =trim($_POST['webAddress']);
  $company->note =trim($_POST['note']);
  $company->streetNumber =trim($_POST['streetNumber']);
  $company->streetName =trim($_POST['streetName']);
  $company->streetType =trim($_POST['streetType']);
  $company->city =trim($_POST['city']);
  $company->state =trim($_POST['state']);
  $company->zip =trim($_POST['zip']);
  $company->buildingNumber =trim($_POST['buildingNumber']);
  $company->mainPhone =trim($_POST['mainPhone']);
  $company->fax =trim($_POST['fax']);
  $result = $company->insert();
  if ($result==true)
  echo '<script>alert("Company has been added successfully")</script>';
  else
  echo '<script>alert("'.var_dump($result).'");alert("error");</script>';
  
}
  
?>
<div class="bg-light p-5 rounded shadow d-flex justify-content-center">
<div class="col-lg-6">

  <div class=" p-1 rounded text-center mt-3 bg--primary">
    <h4 class="" style="color: gray;">ADD NEW MANAGEMENT COMPANY</h4>
  </div>

  <?php
  require('../../components/manage-company/addnewmanagement.php')
  ?>
</div>
</div>

 <?php
  require('../../footer.php')
  ?>