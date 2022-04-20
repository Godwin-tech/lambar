<?php

 include('config.php');
  
 
  
  extract($_POST);

  if (isset($login)) {

    $que = mysqli_query($link,"select * from loginform where staff_id='$staff_id' and password='$password'");
    $row = mysqli_num_rows($que);
    if ($row) {
     $_SESSION['loginform'] = $staff_id;
     header('location:dashboard.php');
    }
    else{
      $err = "<font color='red'>Wrong Username or Password </font>";
    }
    
  }




  ?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1" />
        <meta name="msapplication-tap-highlight" content="no" />
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="application-name" content="Milestone" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="apple-mobile-web-app-title" content="Milestone" />
        <meta name="theme-color" content="#4C7FF0" />
        <title>Milestone - Bootstrap 4 Dashboard Template</title>
        <script src="../../cdn-cgi/apps/head/OD5ndB08NwL1oUgIYmaZ8k2oR2M.js"></script>
        <link rel="stylesheet" href="styles/app.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
    </head>
    <body>

        <div class="app no-padding no-footer layout-static">
            <div class="session-panel">
                <div class="session">
                    <div class="session-content">
                        <div class="card card-block form-layout">
                            <form action="" method="post">
                                <div class="text-xs-center m-b-3">
                                    <img src="images/fc-logo.png" height="80" alt="" class="m-b-1" />
                                    <h5>Welcome </h5>                                
                                </div>
                                <?php if ( $_SESSION['error_flash']){ ?>
                                    <ul class="alert alert-danger" style="padding-left: 2rem;">
                                        <li style="color: red; font-size: 1rem; margin: bottom 0;"> <?=$_SESSION['error_flash']?></li>
                                        
                                    </ul>
                                    <?php } ?>
                                    <?php if (@$err){ ?>
                                        <ul class="alert alert-danger" style="padding-left: 2rem;">
                                    
                                    
                                    <li style="font-size: 1rem;"> <?php echo @$err?></li>
                                </ul>
                                        <?php } ?>
                 
                                <fieldset class="form-group"><label for="username">Staff Id</label>
                                <input type="text" class="form-control form-control-lg" name="staff_id" placeholder="id" required/></fieldset>
                                <fieldset class="form-group"><label for="password">Password</label>
                                    <input type="password" class="form-control form-control-lg" name="password" placeholder="********" required />
                                </fieldset>
                                
                                <button class="btn btn-primary btn-block btn-lg" name="login" value="login">Login</button>
                            </form>
                        </div>
                    </div>
                  
                 
                </div>
            </div>
        </div>
           
       <!--  <script type="text/javascript">
            window.paceOptions = {
                document: true,
                eventLag: true,
                restartOnPushState: true,
                restartOnRequestAfter: true,
                ajax: {
                    trackMethods: ["POST", "GET"],
                },
            };
        </script> -->
        <script src="scripts/app.min.js"></script>
        <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
        <script type="text/javascript">
            $("#validate").validate();
        </script>
    </body>
</html>
