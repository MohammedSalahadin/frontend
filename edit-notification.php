<?php

require('menus/navbar.php'); 
?>




<body>
 <form autocomplete="off" action="" method="POST" enctype="multipart/form-data" data-ajax="false" class="mobile"
 style="background-color:#e0e0e0;padding:50px">

  <div class="row">
      
      <div class="col-md-8">
          <div style="height: 500px; overflow: auto;">
          <table class="table" name="myList">
              <thead>
                <tr>
                  <th scope="col">Issue Type (All Properties)</th>
                  <th scope="col">Never</th>
                  <th scope="col">Only Urgent</th>
                  <th scope="col">Anytime</th>
                </tr>
              </thead>
              
              <tbody>
              </tbody>
            </table>
            </div>
      </div>
            <div class="col-md-4">
                
          <div class="form-group">
            <h6 class="text-center" style="color:#262322;background-color:#ede7e1;font-weight:bold;padding:15px">Alert Quick Select</h6>
          </div><br>
          
          <div class="form-group">
    <h6 class="text-center">Security Issues (ALL)</h6>
    <form action="/action_page.php">
      <input type="checkbox" class="text-center" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1" class="text-center"> ONLY Urgent (0 / 99)</label><br>
      
      <input type="checkbox" class="text-center" id="vehicle2" name="vehicle2" value="Car">
      <label for="vehicle2" class="text-center"> Level 1 (0 / 22)</label><br>
      
      <input type="checkbox" class="text-center" id="vehicle3" name="vehicle3" value="Boat">
      <label for="vehicle3" class="text-center"> Level 2 (0 / 22)</label><br>
      
      <input type="checkbox" class="text-center" id="vehicle4" name="vehicle3" value="Boat">
      <label for="vehicle4" class="text-center"> Level 3 (0 / 55)</label><br>
      
    </form>
  </div><br>
          
          <div class="form-group">
    <h6 class="text-center">Security Issues (ALL)</h6>
    <form action="/action_page.php">
      <input type="checkbox" class="text-center" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1" class="text-center"> ONLY Urgent (0 / 99)</label><br>
      
      <input type="checkbox" class="text-center" id="vehicle2" name="vehicle2" value="Car">
      <label for="vehicle2" class="text-center"> Level 1 (0 / 22)</label><br>
      
      <input type="checkbox" class="text-center" id="vehicle3" name="vehicle3" value="Boat">
      <label for="vehicle3" class="text-center"> Level 2 (0 / 22)</label><br>
      
      <input type="checkbox" class="text-center" id="vehicle4" name="vehicle3" value="Boat">
      <label for="vehicle4" class="text-center"> Level 3 (0 / 55)</label><br>
      
    </form>
  </div><br>
          
          <div class="form-group">
    <h6 class="text-center">Security Issues (ALL)</h6>
    <form action="/action_page.php">
      <input type="checkbox" class="text-center" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1" class="text-center"> ONLY Urgent (0 / 99)</label><br>
      
      <input type="checkbox" class="text-center" id="vehicle2" name="vehicle2" value="Car">
      <label for="vehicle2" class="text-center"> Level 1 (0 / 22)</label><br>
      
      <input type="checkbox" class="text-center" id="vehicle3" name="vehicle3" value="Boat">
      <label for="vehicle3" class="text-center"> Level 2 (0 / 22)</label><br>
      
      <input type="checkbox" class="text-center" id="vehicle4" name="vehicle3" value="Boat">
      <label for="vehicle4" class="text-center"> Level 3 (0 / 55)</label><br>
      
    </form>
  </div>
  
          
      </div>
          <div class="form-group">
     <button type="submit" class="btn btn-danger" name="updateme">Save Notificaion</button>
    </div>
  
  </div>

</form>

 


</body>







