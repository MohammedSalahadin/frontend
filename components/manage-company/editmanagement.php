<div class="col-lg-12 mt-2">
<form action="" method="post">
  <div class="form-group row mt-2 mb-2">
    <label for="companyName" class="col-sm-4 col-form-label text-end">Management Company</label>
    <div class="col-sm-8">
      <select class="form-control" name="slcCompany" id="slcCompany">
      <option>Choose</option>
          <?php 
          foreach($companies as $slcCompany)
          {
?>
<option <?php  if (isset($_GET["companyId"])) if ($companyId==$slcCompany->companyId) echo "selected"?> value="<?=$slcCompany->companyId?>">
<?=$slcCompany->companyName?>
</option>
<?php
          }
          ?>
      </select>
    </div>
  </div>
  <div class="form-group row mt-2 mb-2">
    <label for="companyName" class="col-sm-4 col-form-label text-end">Management Company Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control required" value="<?=$company->companyName?>" required name="companyName" id="companyName" placeholder="Company Name">
    </div>
  </div> 
  <div class="form-group row mt-2 mb-2">
    <label for="shippingAddress" class="col-sm-4 col-form-label text-end">Shipping Address</label>
    <div class="col-sm-5">
      <select class="form-control"  name="shippingAddress" id="shippingAddress">
      <?php
      foreach($shippingAddresses as $slcShippingAddress)
          {
?>
<option <?php  //if (isset($_GET["addressId"])) if ($companyId==$slcShippingAddress->addressId) echo "selected"?> 
value="<?=$slcShippingAddress->addressId?>">
<?=$slcShippingAddress->$streetNumber." ".$slcShippingAddress->$streetName." ".$slcShippingAddress->$streetType." Building".$slcShippingAddress->buildingNumber?>
</option>
<?php
          }
          ?>
      </select>
    </div>
    <div class="col-sm-3">
      <input type="button" value="Add" id="Add" class="btn btn-primary">
      <input type="button" value="Edit" id="Edit" class="btn btn-primary">
    </div>
    </div>
  </div> 
  <div class="form-group row mt-2 mb-2">
    <label for="billingAddress" class="col-sm-4 col-form-label text-end">Billing Address</label>
    <div class="col-sm-5">
      <select class="form-control"  name="billingAddress" id="billingAddress">
      <?=$slcShippingAddress->$streetNumber." ".$slcShippingAddress->$streetName." ".$slcShippingAddress->$streetType." Building".$slcShippingAddress->buildingNumber?>
      </select>
    </div>
  </div>
  <div class="form-group row  mb-2">
    <label for="mainPhone" class="col-sm-4 col-form-label text-end">Main Phone</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" value="<?=$company->mainPhone?>" name="mainPhone" id="mainPhone" placeholder="Main Phone">
    </div>
  </div>
  <div class="form-group row  mb-2">
    <label for="fax" class="col-sm-4 col-form-label text-end">Fax</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" value="<?=$company->fax?>" name="fax" id="fax" placeholder="fax">
    </div>
  </div> 
  <div class="form-group row  mb-2">
    <label for="webAddress" class="col-sm-4 col-form-label text-end">Web Address</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" value="<?=$company->webAddress?>" name="webAddress" id="webAddress" placeholder="Web Address">
    </div>
  </div>
  <div class="form-group row  mb-2">
    <label for="webAddress" class="col-sm-4 col-form-label text-end">Note</label>
    <div class="col-sm-8">
      <textarea size=2 class="form-control col-sm-12" id="note" name="note"><?=$company->note?></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12 d-flex justify-content-center">
      <button type="submit" class="btn btn-primary">Save Company Details</button>
    </div>
  </div>
</form>
</div>
<!-- Add shipping address dialog -->
<div id="ِaddDialog" title="Add Shipping Address">
  <form action="" method="post">
<div class="form-group row  mb-2">
    <label for="streetNumber" class="col-sm-4 col-form-label text-end">Street Number</label>
    <div class="col-sm-8">
      <input type="text" class="form-control required" required name="streetNumber" id="streetNumber" placeholder="Street Number">
    </div>
  </div>
  <div class="form-group row  mb-2">
    <label for="streetName" class="col-sm-4 col-form-label text-end">Street Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control required" required name="streetName" id="streetName" placeholder="Street Name">
    </div>
  </div> 
  <div class="form-group row  mb-2">
    <label for="streetType" class="col-sm-4 col-form-label text-end">Street type</label>
    <div class="col-sm-8">
    <select name="streetType" class="form-control" id="streetType">
      <option></option>
      <option>Alley</option>
      <option>Street</option>
      <option>Avenue</option>
      <option>B road</option>
      <option>Brick Road</option>
      <option>Boulevard</option>
      <option>Bundesstraße</option>
      <option>Byway</option>
      <option>Causeway</option>
      <option>Circle</option>
      <option>Collector road</option>
      <option>Corniche</option>
      <option>Close</option>
      <option>Crescent</option>
      <option>Court</option>
      <option>Dead end</option>
      <option>Drive</option>
      <option>Frontage road</option>
      <option>Gemeindestraße</option>
      <option>Highway</option>
      <option>Kreisstraße</option>
      <option>Lane</option>
      <option>Landesstraße</option>
      <option>Living street</option>
      <option>Loop</option>
      <option>One-way street</option>
      <option>Path</option>
      <option>Place</option>
      <option>Plaza</option>
      <option>Road</option>
      <option>Roundabout (Also see intersecting roadways)</option>
      <option>Route</option>
      <option>Side road</option>
      <option>Single carriageway</option>
      <option>Stravenue</option>
      <option>Terrace</option>
      <option>Way</option>
      <option>Tree tunnel</option>
      <option>Woonerf</option>
</select>
      </div>
  </div>
  <div class="form-group row mt-2 mb-2">
    <label for="addressLine2" class="col-sm-4 col-form-label text-end">Address Line 2</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" name="addressLine2" id="addressLine2" placeholder="Address Line 2">
    </div>
  </div>
  <div class="form-group row  mb-2">
    <label for="city" class="col-sm-4 col-form-label text-end">City, State, Zip</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="city" id="city" placeholder="City">
    </div>
    <div class="col-sm-3">
        <select class="form-control" name="state" id="state">
            <option>CA</option>
            <option>Ala</option>
            <option>AK</option>
            <option>AZ</option>
            <option>AR</option>
            <option>CO</option>
            <option>CT</option>
            <option>DE</option>
            <option>FL</option>
            <option>GA</option>
            <option>HI</option>
            <option>ID</option>
            <option>IL</option>
            <option>IN</option>
            <option>IA</option>
            <option>KS</option>
            <option>KY</option>
            <option>LA</option>
            <option>ME</option>
            <option>MD</option>
            <option>MA</option>
            <option>MI</option>
            <option>MN</option>
            <option>MS</option>
            <option>MO</option>
            <option>MT</option>
            <option>NE</option>
            <option>NV</option>
            <option>NH</option>
            <option>NJ</option>
            <option>NM</option>
            <option>NY</option>
            <option>NC</option>
            <option>ND</option>
            <option>OH</option>
            <option>OK</option>
            <option>OR</option>
            <option>PA</option>
            <option>RI</option>
            <option>SC</option>
            <option>SD</option>
            <option>TN</option>
            <option>TX</option>
            <option>UT</option>
            <option>VT</option>
            <option>VA</option>
            <option>WA</option>
            <option>WV</option>
            <option>WI</option>
            <option>WY</option>
        </select>
    </div>
    <div class="col-sm-2">
      <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip">
    </div>
  </div>
  <div class="form-group row mt-2 mb-2">
    <label for="country" class="col-sm-4 col-form-label text-end">Country</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" name="country" id="country" placeholder="Country">
    </div>
  </div>
  <div class="form-group row  mb-2">
    <label for="buildingNumber" class="col-sm-4 col-form-label text-end">Building Number</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="buildingNumber" id="buildingNumber" placeholder="Building Number">
    </div>
  </div>
  <div class="form-group row  mb-2">
  <label for="addressType" class="col-sm-4 col-form-label text-end">Address Type</label>
    <div class="col-sm-8">
        <select class="form-control" name="addressType" id="addressType">
        <option></option>
        <option>APARTMENT COMPLEX</option>
          <option>BUSINESS PARK</option>
          <option>CITY</option>
          <option>COLLEGE</option>
          <option>COUNTY</option>
          <option>COURT</option>
          <option>EDUCATIONAL CAMPUS</option>
          <option>FACTORY COMPLEX</option>
          <option>FLAT COMPLEX</option>
          <option>GROUP OF DETACHED HOUSES</option>
          <option>HALTING SITE</option>
          <option>HERITAGE AND HISTORICAL</option>
          <option>HOLIDAY HOMES</option>
          <option>HOSPITAL</option>
          <option>HOTEL COMPLEX</option>
          <option>HOUSING ESTATE</option>
          <option>INDUSTRIAL ESTATE</option>
          <option>MIXED ADDRESS POINT</option>
          <option>MIXED BUILDING GROUP</option>
          <option>MIXED DEVELOPMENT</option>
          <option>MOBILE HOME PARK</option>
          <option>MULTI OCCUPANCY MIXED BUILDING</option>
          <option>MULTI OCCUPANCY NON-RESIDENTIAL BUILDING</option>
          <option>MULTI OCCUPANCY RESIDENTIAL BUILDING</option>
          <option>NON-RESIDENTIAL ADDRESS POINT</option>
          <option>NON-RESIDENTIAL BUILDING GROUP</option>
          <option>NURSING HOME</option>
          <option>ORGANISATION</option>
          <option>POST TOWN</option>
          <option>POSTAL DISTRICT</option>
          <option>POWER GENERATION PLANT</option>
          <option>PRIVATE ESTATE</option>
          <option>RELIGIOUS ORGANISATION</option>
          <option>RESIDENTIAL ADDRESS POINT</option>
          <option>RESIDENTIAL BUILDING GROUP</option>
          <option>RESIDENTIAL ESTATE</option>
          <option>RESIDENTIAL/COMMERCIAL NAMED PREMISES</option>
          <option>RURAL LOCALITY</option>
          <option>SCHOOL</option>
          <option>SECONDARY LOCALITY</option>
          <option>SHELTERED HOUSING</option>
          <option>SHOPPING CENTRE</option>
          <option>SINGLE OCCUPANCY NON-RESIDENTIAL BUILDING</option>
          <option>SINGLE OCCUPANCY RESIDENTIAL BUILDING</option>
          <option>SPORTS COMPLEX</option>
          <option>SUB ADDRESS POINT</option>
          <option>SUBURBAN LOCALITY</option>
          <option>TERRACE</option>
          <option>THOROUGHFARE</option>
          <option>TOWN</option>
          <option>TOWNHOUSES</option>
          <option>TOWNLAND</option>
          <option>URBAN AREA</option>
          <option>VILLAGE</option>
          <option>VOCATIONAL TRAINING & EMPLOYMENT</option>
        </select>
    </div>
  
</div>
<div class="form-group">
    <div class="col-sm-12 d-flex justify-content-center">
      <button type="submit" class="btn btn-primary">Save Company Details</button>
    </div>
  </div>
</form>
</div>

<!-- End add shipping address dialog -->