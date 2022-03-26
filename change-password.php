<?php
require('menus/navbar.php'); 


?>

<!--End Add user -->



<body>
 <form autocomplete="off" action="" method="POST"
 style="background-color:#e0e0e0;padding:50px">
     
     <div class="form-group">
    <input type="password" class="form-control" name="oldpass" placeholder="Old Password .." autocomplete="false" required>
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="newpass" placeholder="New Password .." autocomplete="false" required>
    <small>(6 Character Min)</small>
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="newpassConfirmation" placeholder="Confirm New Password .." autocomplete="false" required>
  </div>
  <button type="submit" class="btn btn-primary" name="changenow">Change Password</button>
  
</form>

</body>


