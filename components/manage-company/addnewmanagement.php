<div class="col-lg-12 mt-2">
<form action="<?=$actual_link?>" method="post">
  <div class="form-group row">
    <label for="companyName" class="col-sm-3 col-form-label text-end">Company Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control required" required name="companyName" id="companyName" placeholder="Company Name">
    </div>
  </div> 
  <div class="form-group row">
    <label for="webAddress" class="col-sm-3 col-form-label text-end">Web Address</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="webAddress" placeholder="Web Address">
    </div>
  </div>
  <div class="form-group row">
    <label for="webAddress" class="col-sm-3 col-form-label text-end">Note</label>
    <div class="col-sm-9">
      <textarea size=2 class="form-control col-sm-12" id="note" name="note"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="streetNumber" class="col-sm-3 col-form-label text-end">Street Number</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="streetNumber" id="streetNumber" placeholder="Street Number">
    </div>
  </div>
  <div class="form-group row">
    <label for="streetName" class="col-sm-3 col-form-label text-end">Street Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="streetName" id="streetName" placeholder="Street Name">
    </div>
  </div> 
  <div class="form-group row">
    <label for="streetType" class="col-sm-3 col-form-label text-end">Street type</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="streetType" id="streetType" placeholder="Street Type">
    </div>
  </div>
  <div class="form-group row">
    <label for="streetType" class="col-sm-3 col-form-label text-end">City, State, Zip</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="city" id="city" placeholder="City">
    </div>
    <div class="col-sm-2">
        <select class="form-control" name="state" id="state">
            <option>CA</option>
        </select>
    </div>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="Zip" id="Zip" placeholder="Zip">
    </div>
  </div>
  <div class="form-group row">
    <label for="buildingNumber" class="col-sm-3 col-form-label text-end">Building Number</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="buildingNumber" id="buildingNumber" placeholder="Building Number">
    </div>
  </div>
  <div class="form-group row">
    <label for="mainPhone" class="col-sm-3 col-form-label text-end">Main Phone</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="mainPhone" id="mainPhone" placeholder="Main Phone">
    </div>
  </div>
  <div class="form-group row">
    <label for="fax" class="col-sm-3 col-form-label text-end">fax</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="fax" id="fax" placeholder="fax">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12 d-flex justify-content-center">
      <button type="submit" class="btn btn-primary">Add New Management Company</button>
    </div>
  </div>
</form>
</div>