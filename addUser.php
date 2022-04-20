 <?php 

// TODD:: add this section below to all authentication page
// include('config.php');
// if(!isLoggedin()){
//     login_error_redirect();
// }
// TODD:: add this section above to all authentication page
  
include("header.php");
@include('config.php');
  
$que = mysqli_query($link,"select * from roles where 1");

$successMsg = "";
if (isset($_POST['addUser'])){
  $staff_id=$_POST['staff_id'];
  
    $role_id=$_POST['role_id'];

    $insert = $link->query("INSERT INTO users (staff_id,role_id) VALUES($staff_id,$role_id)");
    if($insert){
      $successMsg = "User Has been added successfully.";
    }
}

?> 
 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'>Add New User</h3>
        </div>
        <div class="cad-body">
        <div style="width:600px; margin:0px auto">
        <?php if ($successMsg){ ?>
          <div class="alert alert-success" style="margin-top: 10px;"><?=$successMsg;?></div>
        <?php } ?>
            <form class="" action="" method="post">
                <div class="form-group pt-3">
                  <label for="name">Enter Staff ID</label>
                  <input type="text" name="staff_id"  class="form-control" required>
                </div>
                
                <div class="form-group">
                  <div class="form-group">
                    <label for="sel1">Select User Role</label> <br>
                    <select class="form-control" name="role_id" id="role_id" required>
                    <?php while($row = mysqli_fetch_assoc($que)){ ?>
                        <option value="<?=$row['id'] ?>"><?=$row['role_name']; ?></option>;  
               <?php }?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" name="addUser" class="btn btn-success">Add User</button>
                </div>


            </form>
          </div>
        </div>
      </div>

 <?php include("footer.php"); ?>

