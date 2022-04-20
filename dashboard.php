
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
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-2">
                                <div class="card card-block">
                                    <h5 class="m-b-0 v-align-middle text-overflow">
                                        <span class="small pull-xs-right"><i class="material-icons text-success" style="width: 16px;">arrow_drop_up</i> <span style="line-height: 24px;">+76%</span> </span><span>804</span>
                                    </h5>
                                    <div class="small text-overflow text-muted">Memory usage</div>
                                    <div class="small text-overflow">Updated:&nbsp;<span>05:35 AM</span></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2">
                                <div class="card card-block">
                                    <h5 class="m-b-0 v-align-middle text-overflow">
                                        <span class="small pull-xs-right tag bg-success p-y-0 p-x-xs" style="line-height: 24px;"><span>+20K</span> </span><span>403</span>
                                    </h5>
                                    <div class="small text-overflow text-muted">Disk usage</div>
                                    <div class="small text-overflow">Updated:&nbsp;<span>12:42 PM</span></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2">
                                <div class="card card-block">
                                    <h5 class="m-b-0 v-align-middle text-overflow">
                                        <span class="small pull-xs-right"><i class="material-icons text-danger" style="width: 16px;">arrow_drop_down</i> <span style="line-height: 24px;">+40%</span> </span><span>976</span>
                                    </h5>
                                    <div class="small text-overflow text-muted">GPU compute</div>
                                    <div class="small text-overflow">Updated:&nbsp;<span>09:26 AM</span></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2">
                                <div class="card card-block">
                                    <h5 class="m-b-0 v-align-middle text-overflow">
                                        <span class="small pull-xs-right"><i class="material-icons text-success" style="width: 16px;">arrow_drop_up</i> <span style="line-height: 24px;">+94%</span> </span><span>457</span>
                                    </h5>
                                    <div class="small text-overflow text-muted">CPU usage</div>
                                    <div class="small text-overflow">Updated:&nbsp;<span>06:45 AM</span></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2">
                                <div class="card card-block">
                                    <h5 class="m-b-0 v-align-middle text-overflow">
                                        <span class="small pull-xs-right"><i class="material-icons text-danger" style="width: 16px;">arrow_drop_down</i> <span style="line-height: 24px;">+04%</span> </span><span>239</span>
                                    </h5>
                                    <div class="small text-overflow text-muted">Ram usage</div>
                                    <div class="small text-overflow">Updated:&nbsp;<span>11:23 PM</span></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2">
                                <div class="card card-block">
                                    <h5 class="m-b-0 v-align-middle text-overflow">
                                        <span class="small pull-xs-right"><i class="material-icons text-success" style="width: 16px;">arrow_drop_up</i> <span style="line-height: 24px;">+67%</span> </span><span>392</span>
                                    </h5>
                                    <div class="small text-overflow text-muted">RAM test</div>
                                    <div class="small text-overflow">Updated:&nbsp;<span>08:52 AM</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-block">
                                <div class="m-b-1">
                                    <div class="dropdown pull-right">
                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><span>Period</span></a>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                            <a class="dropdown-item" href="index.html#">Today </a><a class="dropdown-item" href="index.html#">This week </a><a class="dropdown-item" href="index.html#">This month </a>
                                            <a class="dropdown-item" href="index.html#">This year</a>
                                        </div>
                                    </div>
                                    <h6>Activity</h6>
                                </div>
                                <div class="dashboard-line chart" style="height: 300px;"></div>
                                <div class="row text-xs-center m-t-1">
                                    <div class="col-sm-3 col-xs-6 p-t-1 p-b-1">
                                        <h6 class="m-t-0 m-b-0">$ 89.34</h6>
                                        <small class="text-muted bold block">Daily Sales</small>
                                    </div>
                                    <div class="col-sm-3 col-xs-6 p-t-1 p-b-1">
                                        <h6 class="m-t-0 m-b-0">$ 498.00</h6>
                                        <small class="text-muted bold block">Weekly Sales</small>
                                    </div>
                                    <div class="col-sm-3 col-xs-6 p-t-1 p-b-1">
                                        <h6 class="m-t-0 m-b-0">$ 34,903</h6>
                                        <small class="text-muted bold block">Monthly Sales</small>
                                    </div>
                                    <div class="col-sm-3 col-xs-6 p-t-1 p-b-1">
                                        <h6 class="m-t-0 m-b-0">$ 98,343.49</h6>
                                        <small class="text-muted bold block">Yearly Sales</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
        <?php include("footer.php"); ?>

