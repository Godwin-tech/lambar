<?php 

// TODD:: add this section below to all authentication page
include('config.php');
if(!isLoggedin()){
    login_error_redirect();
}
// TODD:: add this section above to all authentication page
  
include("header.php");
?>
                <div class="main-content">
                    <div class="content-view">
                        <div class="card">
                            <div class="card-header no-bg b-a-0">Datatables</div>
                            <div class="card-block">
                                <table class="table table-bordered datatable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start Date</th>
                                        </tr>
                                    </thead>
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
