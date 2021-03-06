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
                        <form role="form" class="form-validation">
                            <div class="form-group m-b">
                                <label>Required | minimum length 5 characters</label><input type="text" class="form-control" name="name" placeholder="Required | minimum length 5 characters" required minlength="5" />
                            </div>
                            <div class="form-group m-b"><label>Required | valid email format</label><input type="email" class="form-control" name="email" placeholder="Required | valid email format" required /></div>
                            <div class="form-group m-b"><label>Required | valid url format</label><input type="url" class="form-control" name="url" placeholder="Required | valid url format" required /></div>
                            <div class="form-group m-b"><label>Required | number</label><input type="number" class="form-control" name="number" placeholder="Required | number" required /></div>
                            <div class="form-group m-b"><label>Required | number | min 10</label><input type="number" min="10" class="form-control" name="number-min" placeholder="Required | number | min 10" required /></div>
                            <div class="form-group m-b"><label>Required | number | max 10</label><input type="number" max="10" class="form-control" name="number-min" placeholder="Required | number | max 10" required /></div>
                            <div class="form-group">
                                <label>Required | number | min 0 | max 100</label><input type="number" min="0" max="100" class="form-control" name="number-min" placeholder="Required | number | min 0 | max 100" required />
                            </div>
                            <div class="form-group"><button class="btn btn-primary m-r">Submit</button> <button class="btn btn-default">Reset</button></div>
                        </form>
                    </div>
                    <?php include("footer.php"); ?>
        <script src="scripts/app.min.js"></script>
        <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
        <script type="text/javascript">
            $(".form-validation").validate();
        </script>
    </body>
</html>
