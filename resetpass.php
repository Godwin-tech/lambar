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
          <h3 class='text-center'>Reset Staff Password</h3>
        </div>
        <div class="cad-body">
        <div style="width:600px; margin:0px auto">

            <form class="" action="" method="post">
                <div class="form-group pt-3">
                  <label for="name">Enter Staff ID</label>
                  <input type="text" name="staff_id"  class="form-control">
                </div>
                <div class="form-group">
                  <button type="submit" name="addUser" class="btn btn-success">Submit</button>
                </div>


            </form>
          </div>
        </div>
      </div>

 <?php include("footer.php"); ?>

