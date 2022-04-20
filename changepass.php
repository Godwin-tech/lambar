<?php 

// TODD:: add this section below to all authentication page
// include('config.php');
// if(!isLoggedin()){
//     login_error_redirect();
// }
// TODD:: add this section above to all authentication page
  
include("header.php");
?>
 <div class="card ">
   <div class="card-header">
          <h3>Change Staff Password <span class="float-right"> 
        </div>
        <div class="card-body">



          <div style="width:600px; margin:0px auto">

          <form class="" action="" method="POST">
              <div class="form-group">
                <label for="old_password">Enter New Password</label>
                <input type="password" name="old_password"  class="form-control">
              </div>
              <div class="form-group">
                <label for="new_password">Confirm New Password</label>
                <input type="password" name="new_password"  class="form-control">
              </div>


              <div class="form-group">
                <button type="submit" name="changepass" class="btn btn-success">Change password</button>
              </div>


          </form>
        </div>


      </div>
    </div>


   <?php include("footer.php"); ?>
