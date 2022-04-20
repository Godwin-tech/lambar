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
        <link rel="stylesheet" href="vendor/bower-jvectormap/jquery-jvectormap-1.2.2.css"><link/>
        <link rel="stylesheet" href="styles/app.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
       <link rel="stylesheet" href="styles/auth-form.css" />
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    </head>
    <body>
        <div class="app">
            <div class="off-canvas-overlay" data-toggle="sidebar"></div>
            <?php include("menu.php"); ?>
            <div class="main-panel">
                <nav class="header navbar">
                    <div class="header-inner">
                        <div class="navbar-item navbar-spacer-right brand hidden-lg-up">
                            <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen"><i class="material-icons">menu</i> </a> <a class="brand-logo hidden-xs-down"><img src="images/fc-logo.png" width="100" height="300" alt="logo" /> </a>
                        </div>
                        <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="dashboard.php"><span>Dashboard</span></a>
                        <div class="navbar-item nav navbar-nav">
                            <div class="nav-item nav-link dropdown">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons">notifications</i> <span class="tag tag-danger">4</span></a>
                                <div class="dropdown-menu dropdown-menu-right notifications">
                                    <div class="dropdown-item">
                                        <div class="notifications-wrapper">
                                            <ul class="notifications-list">
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="notification-icon">
                                                            <div class="circle-icon bg-success text-white"><i class="material-icons">arrow_upward</i></div>
                                                        </div>
                                                        <div class="notification-message"><b>Sean</b> launched a new application <span class="time">2 seconds ago</span></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="notification-icon">
                                                            <div class="circle-icon bg-danger text-white"><i class="material-icons">check</i></div>
                                                        </div>
                                                        <div class="notification-message"><b>Removed calendar</b> from app list <span class="time">4 hours ago</span></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="notification-icon"><span class="circle-icon bg-info text-white">J</span></span>
                                                        <div class="notification-message"><b>Jack Hunt</b> has <b>joined</b> mailing list <span class="time">9 days ago</span></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="notification-icon"><span class="circle-icon bg-primary text-white">C</span></span>
                                                        <div class="notification-message"><b>Conan Johns</b> created a new list <span class="time">9 days ago</span></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="notification-footer">Notifications</div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </nav>
