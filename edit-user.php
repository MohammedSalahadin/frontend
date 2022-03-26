<?php

require('menus/navbar.php'); 


?>


<body>
 <form autocomplete="off" action="" method="POST" enctype="multipart/form-data" data-ajax="false" class="mobile"
 style="background-color:#e0e0e0;padding:50px">
     
     <div class="row">
         <div class="col-md-12 float-left">
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Choose User</button>
         </div>
         
     </div>
     <hr>
  <div class="row">
      
      <div class="col-md-4">
          
          <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" class="form-control" id="username" name="username" value="">
          </div>
          <div class="form-group">
            <label for="lastLogin">Last Login Date</label>
            <input type="text" class="form-control" id="lastLogin" name="lastLogin" value="" disabled>
          </div>
          <div class="form-group">
            <label for="mCompany">Management Company Name</label>
            <input type="text" class="form-control" id="mCompany" name="mCompany" value="">
          </div>
          <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="">
          </div>
          <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="">
          </div>
          <div class="form-group">
            <label for="mail">Email Address</label>
            <input type="text" class="form-control" id="mail" name="mail" value="">
          </div>
          <div class="form-group">
            <label for="mMail">Maintenance Email</label>
            <input type="text" class="form-control" id="mMail" name="mMail" value="">
          </div>
          <div class="form-group">
            <label for="cardID">Time Card ID</label>
            <input type="text" class="form-control" id="cardID" name="cardID" value="">
          </div>
      </div>
            <div class="col-md-4">
                
          <div class="form-group">
            <label for="lastLogin">Security Role</label>
            <select class="form-control" name="role">
                <option selected="false"><?echo $role; ?></option>
                 <?php 
                   $result = $mysqli->query("SELECT DISTINCT role FROM users");
                 ?>
                    <?php while($theRole = $result->fetch_assoc()) { ?>
                  <option> <?php echo $theRole['role']; ?></option>
                    <?php } ?>
                </select>
          </div>
          
          <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" value="<?echo $address; ?>">
  </div>
  
  <div class="form-group">
    <label for="phone">Phone Number</label>
    <input type="number" class="form-control" id="phone" name="phone" value="<?echo $phone; ?>">
  </div>
  
  <div class="form-group">
    <label for="cell">Cell Number</label>
    <input type="number" class="form-control" id="cell" name="cell" value="<?echo $cell; ?>">
  </div>
          
      </div>
            <div class="col-md-4">
          <div class="text-center">
          <img src="<?php echo $image; ?>" with="10" height="170"><br><br>
          <input type="file" name="img">
          </div>
            </div>
      
  </div>
  
    <div class="form-group">
    <button type="submit" class="btn btn-danger" name="updateme">Update User</button>
  </div>
  
</form>

 
<!-- Pobup Box -->
<div class="modal fade modal-fullscreen" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Choose User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="gaurds">
            <label class="form-check-label" for="gaurds">Gaurds</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" class="form-check-input" id="admins">
            <label class="form-check-label" for="admins">Sub/Admins</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" class="form-check-input" id="dispatchers">
            <label class="form-check-label" for="dispatchers">Dispatchers</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" class="form-check-input" id="customers">
            <label class="form-check-label" for="customers">Customers</label>
        </div><br>
        
     
        <?php 
           $result = $mysqli->query("SELECT * FROM users");
         ?>
        <ul class="list-group" id="menu" name="myList" style="overflow-y: scroll;overflow-x: hidden;max-height:300px">
        <?php while($user = $result->fetch_assoc()) { ?>
        <a href="https://test.rocketsweb.net/edit-user.php?uid=<?php echo $user['id']; ?>">
        <li class="list-group-item">
          <?php echo $user['firstname']. " ".$user['lastname']." - ".$user['username']; ?>
        </li>
        </a>
        <?php } ?>
        </ul>
        
        <hr>
        <label>Management Company</label>
        <?php 
           $company_result = $mysqli->query("SELECT DISTINCT companymanagement FROM users");
         ?>
        <select class="form-control" id="managementCo" name="managementCo">
          <option selected="false" >Choose</option>
            <?php while($company_user = $company_result->fetch_assoc()) { ?>
          <option> <?php echo $company_user['companymanagement']; ?></option>
            <?php } ?>
        </select>
        <br>
        <label>Search First/Last/User Name</label>
        <input type="text" class="form-control" id="customSearch" name="customSearch"/>
        
      </div>
    </div>
  </div>
</div>


</body>



<!-- Management Company controller -->
<script>
    
    
        jQuery('select[name="role"]').on('change', function () {
        var role = $(this).val();
       if ( role.indexOf('Customer') >= 0 ){
        document.getElementById("managementCompanyGroup").style.display = "block";
        } else {
            document.getElementById("managementCompanyGroup").style.display = "none";
        }
    });
    
    
</script>
<!-- Management Company controller -->


<!-- Checkbox Filtration -->

<script>
	$(document).ready(function(){
        $('input[id="gaurds"]').click(function(){
            if($(this).prop("checked") == true){
                $('#admins').prop('checked', false);
                $('#dispatchers').prop('checked', false);
                $('#customers').prop('checked', false);
                	$.ajax({
					type: "POST",
					url: "ajax/gaurd.php",
					data: {
						'role': '4'
					},
					cache: false,
					success: function(data) {
					   $('ul[name="myList"] li').remove();
                       $('ul[name="myList"]').append(data);
					},
					error: function(xhr, status, error) {
						console.error(xhr);
					}
				});
            }
        });
        
        $('input[id="admins"]').click(function(){
            if($(this).prop("checked") == true){
                $('#gaurds').prop('checked', false);
                $('#dispatchers').prop('checked', false);
                $('#customers').prop('checked', false);
                $.ajax({
					type: "POST",
					url: "ajax/admins.php",
					data: {
						'role1': '1',
						'role7': '7',
						'role5': '5',
						'role6': '6'
					},
					cache: false,
					success: function(data) {
					   $('ul[name="myList"] li').remove();
                       $('ul[name="myList"]').append(data);
					},
					error: function(xhr, status, error) {
						console.error(xhr);
					}
				});
            }
        });
        
        $('input[id="dispatchers"]').click(function(){
            if($(this).prop("checked") == true){
                $('#gaurds').prop('checked', false);
                $('#customers').prop('checked', false);
                $('#admins').prop('checked', false);
                $.ajax({
					type: "POST",
					url: "ajax/dispatchers.php",
					data: {
						'role3': '3'
					},
					cache: false,
					success: function(data) {
					   $('ul[name="myList"] li').remove();
                       $('ul[name="myList"]').append(data);
					},
					error: function(xhr, status, error) {
						console.error(xhr);
					}
				});
            }
        });
        
        $('input[id="customers"]').click(function(){
            if($(this).prop("checked") == true){
                $('#admins').prop('checked', false);
                $('#gaurds').prop('checked', false);
                $('#dispatchers').prop('checked', false);
                $.ajax({
					type: "POST",
					url: "ajax/customers.php",
					data: {
						'role7': '7',
						'role6': '6',
						'role5': '5',
					},
					cache: false,
					success: function(data) {
					   $('ul[name="myList"] li').remove();
                       $('ul[name="myList"]').append(data);
					},
					error: function(xhr, status, error) {
						console.error(xhr);
					}
				});
            }
        });
    });
</script>

<!-- Checkbox Filtration -->



<!-- Company Management Filtration-->

<script>

    jQuery('select[name="managementCo"]').on('change', function () {
        var co = jQuery(this).val();
        if($("#customers").prop("checked") == true){
            $.ajax({
                url: "ajax/companyManagement.php",
                type: "POST",
                data: {
                        'role7': '7',
						'role6': '6',
						'role5': '5',
						'co': co,
						'sign': 'customers'
					},
                cache: false,
					success: function(data) {
					   $('ul[name="myList"] li').remove();
                       $('ul[name="myList"]').append(data);
					},
					error: function(xhr, status, error) {
						console.error(xhr);
					}
				});
        }else if($("#dispatchers").prop("checked") == true){
            $.ajax({
                url: "ajax/companyManagement.php",
                type: "POST",
                data: {
						'co': co,
						'role3':'3',
						'sign': 'dispatchers'
					},
                cache: false,
					success: function(data) {
					   $('ul[name="myList"] li').remove();
                       $('ul[name="myList"]').append(data);
					},
					error: function(xhr, status, error) {
						console.error(xhr);
					}
				});
        }else if($("#admins").prop("checked") == true){
            $.ajax({
                url: "ajax/companyManagement.php",
                type: "POST",
                data: {
                        'role1': '1',
						'role7': '7',
						'role5': '5',
						'role6': '6',
						'co': co,
						'sign': 'admins'
					},
                cache: false,
					success: function(data) {
					   $('ul[name="myList"] li').remove();
                       $('ul[name="myList"]').append(data);
					},
					error: function(xhr, status, error) {
						console.error(xhr);
					}
				});
        }else if($("#gaurds").prop("checked") == true){
            $.ajax({
                url: "ajax/companyManagement.php",
                type: "POST",
                data: {
						'co': co,
						'role4': '4',
						'sign': 'gaurds'
					},
                cache: false,
					success: function(data) {
					   $('ul[name="myList"] li').remove();
                       $('ul[name="myList"]').append(data);
					},
					error: function(xhr, status, error) {
						console.error(xhr);
					}
				});
        }else{
            $.ajax({
                url: "ajax/companyManagement.php",
                type: "POST",
                data: {
						'co': co,
						'sign': 'nothing'
					},
                cache: false,
					success: function(data) {
					   $('ul[name="myList"] li').remove();
                       $('ul[name="myList"]').append(data);
					},
					error: function(xhr, status, error) {
						console.error(xhr);
					}
				});
        }
    });
    
</script>

<!-- Company Management Filtration-->




<!-- custom search -->
<script>
var xhr;
    $(document).ready(function () {

        $('#customSearch').keyup(function () {
            var query = $(this).val();

                $.ajax({
                url: "ajax/customsearch.php",
                type: "POST",
                data: {
                        'user': query
					},
                cache: false,
					success: function(data) {
					   $('ul[name="myList"] li').remove();
                       $('ul[name="myList"]').append(data);
					},
					error: function(xhr, status, error) {
						console.error(xhr);
					}
				});
        });
        
    });
</script>
<!-- custom search -->




