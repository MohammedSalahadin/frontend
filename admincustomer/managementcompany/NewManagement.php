<?php
  require('../../header.php');
if (isset($_POST["companyName"]))
{
  htmlspecialchars(trim($_POST['companyName']));
  htmlspecialchars(trim($_POST['webAddress']));
  htmlspecialchars(trim($_POST['note']));
  htmlspecialchars(trim($_POST['streetNumber']));
  htmlspecialchars(trim($_POST['streetName']));
  htmlspecialchars(trim($_POST['streetType']));
  htmlspecialchars(trim($_POST['city']));
  htmlspecialchars(trim($_POST['state']));
  htmlspecialchars(trim($_POST['zip']));
  htmlspecialchars(trim($_POST['buildingNumber']));
  htmlspecialchars(trim($_POST['mainPhone']));
  htmlspecialchars(trim($_POST['fax']));
  //'companies'
}
  
?>
<div class="container d-flex justify-content-center">
<div class="col-lg-6">

<?php
//require('../../components/manage-company/addnewmanagement.php')
?>


  <div class=" p-1 rounded text-center mt-3 bg--primary">
    <h3 class="" style="color: gray;">ADD NEW MANAGEMENT COMPANY</h3>
  </div>

  <?php
  require('../../components/manage-company/addnewmanagement.php')
  ?>
</div>
</div>

 <?php
  require('../../footer.php')
  ?>
