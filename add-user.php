<?php

require('menus/navbar.php'); 


?> 
<!--End Add user -->



<body>
 <form autocomplete="off" action="" method="POST"
 style="background-color:#edf2ef">
     
     <div class="form-group">
    <input type="text" class="form-control" id="exampleInputFirstname" name="firstname" placeholder="First Name .." autocomplete="false" required>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputLastname" name="lastname" placeholder="Last Name .." autocomplete="false" required>
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" autocomplete="false" placeholder="Email .." required>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputUsername" name="username" placeholder="Username .." autocomplete="false" required>
    <small>(12 Character Max)</small>
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password .." autocomplete="false" required>
    <small>(6 Character Min)</small>
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword2" name="confirmpassword" placeholder="Password confirmation .." autocomplete="false" required>
  </div>
  <div class="form-group" style="display:none" id="managementCompanyGroup">
    <input type="text" class="form-control" id="managementCompany" name="mcompany" value="Management Company" placeholder="Management Company .." autocomplete="false" required>
  </div>
    <div class="form-group">
    <label for="role">User Role</label>
    <select class="form-control" id="role" name="role">
      <option selected="false" >Choose Permission</option>
      <option>Customer - Management Company User</option>
      <option>Customer - Maintenance Supervisor</option>
      <option>Employee - Guard</option>
      <option>Employee - Dispatcher</option>
      <option>Employee - Maintenance Worker</option>
      <option>Employee - Supervisor</option>
    </select>

  </div>
  <button type="submit" class="btn btn-primary" name="registernow">Add New User</button>
  
</form>

</body>



<script>
    
    
        jQuery('select[name="role"]').on('change', function () {
        var role = $(this).val();
       if ( role.indexOf('Customer') >= 0 ){
        $("#managementCompanyGroup").slideDown();
        } else {
            $("#managementCompanyGroup").slideUp();
        }
    });
    
    
</script>

