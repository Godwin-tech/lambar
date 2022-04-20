<?php 

// TODD:: add this section below to all authentication page
include('config.php');
if(!isLoggedin()){
    login_error_redirect();
}
// TODD:: add this section above to all authentication page
  
include("header.php");

$que = mysqli_query($link,"select * from users ");

?>
<div class="main-content">
    <div class="content-view">
        <div class="card">
            <div class="card-header no-bg b-a-0">Users List</div>
            <div class="card-block">
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th>Staff ID</th>
                            <th>Role</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($que)){ ?>
                        <tr>
                            <td><?=$row['staff_id'];?></td>

                            <?php 
                            $parent_id = $row['role_id'];
                            $child_sql = $link->query("SELECT * FROM roles WHERE id = '$parent_id'");
                            while($child_row = mysqli_fetch_assoc($child_sql)){ 
                        ?>
                            <td><?=$child_row['role_name'];?></td>
                            <?php }?>
                            <td>
                                <a href="" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
<!--  <script src="scripts/app.min.js"></script>
        <script src="vendor/datatables/media/js/jquery.dataTables.js"></script>
        <script src="vendor/datatables/media/js/dataTables.bootstrap4.js"></script>
        <script type="text/javascript">
            $(".datatable").DataTable({
                ajax: "data/datatables-arrays.json",
            });
        </script> -->
</body>

</html>