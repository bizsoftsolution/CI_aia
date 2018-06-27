 <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">AIA</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
					<?php 
						$mainmember = $this->db->get_where("tbl_aia_reg_form", array("id"=>$this->session->userdata('user_id')));
						$num_of_rows_mainmember = $mainmember->num_rows();
						$res_mainmember = $mainmember->row();
					?>
                    <div class="col-md-6 col-xl-3">
                        <div class="mini-stat clearfix bg-white">
                            <span class="mini-stat-icon bg-light"><i class="dripicons-user text-danger"></i></span>
                            <div class="mini-stat-info text-right text-muted">
                                <span class="counter text-danger"><?php echo $num_of_rows_mainmember; ?></span>
                                Profile
                            </div>
                            <p class="mb-0 m-t-20 text-muted"><?php echo $this->session->userdata('name'); ?><span class="pull-right"><?php echo date("d/m/Y", strtotime($res_mainmember->dob)); ?></span></p>
                        </div>
                    </div>
					<?php 
						$spouse = $this->db->get_where("tbl_aia_reg_form", array("masteric"=>$this->session->userdata('ic')));
						$num_of_rows_spouse = $spouse->num_rows();
						$res_spouse = $spouse->row();
					?>
                    <div class="col-md-6 col-xl-3">
                        <div class="mini-stat clearfix bg-success">
                            <span class="mini-stat-icon bg-light"><i class="dripicons-user text-success"></i></span>
                            <div class="mini-stat-info text-right text-white">
                                <span class="counter text-white"><?php echo $num_of_rows_spouse; ?></span>
                                Spouse
                            </div>
                            <p class="mb-0 m-t-20 text-light"><?php echo $res_spouse->membername; ?><span class="pull-right"><?php echo date("d/m/Y", strtotime($res_spouse->dob)); ?></span></p>
                        </div>
                    </div>
					<?php 
						$children = $this->db->get_where("tbl_aia_reg_form", array("masteric"=>$this->session->userdata('ic')));
						$num_of_rows_children = $children->num_rows();
						$res_children = $children->row();
					?>
                    <div class="col-md-6 col-xl-3">
                        <div class="mini-stat clearfix bg-white">
                            <span class="mini-stat-icon bg-light"><i class="dripicons-user text-warning"></i></span>
                            <div class="mini-stat-info text-right text-muted">
                                <span class="counter text-warning"><?php echo $num_of_rows_children; ?></span>
                                Children
                            </div>
                            <p class="mb-0 m-t-20 text-muted"><?php echo $res_children->membername; ?><span class="pull-right"><?php echo date("d/m/Y", strtotime($res_children->dob)); ?></span></p>
                        </div>
                    </div>
					
                </div>

                <!--div class="row">
                    <div class="col-md-6">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Email Sent</h4>

                                <ul class="list-inline widget-chart m-t-20 text-center">
                                    <li>
                                        <h4 class=""><b>3652</b></h4>
                                        <p class="text-muted m-b-0">Marketplace</p>
                                    </li>
                                    <li>
                                        <h4 class=""><b>5421</b></h4>
                                        <p class="text-muted m-b-0">Last week</p>
                                    </li>
                                    <li>
                                        <h4 class=""><b>9652</b></h4>
                                        <p class="text-muted m-b-0">Last Month</p>
                                    </li>
                                </ul>

                                <div id="morris-area-example" style="height: 300px"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Revenue</h4>

                                <ul class="list-inline widget-chart m-t-20 text-center">
                                    <li>
                                        <h4 class=""><b>5248</b></h4>
                                        <p class="text-muted m-b-0">Marketplace</p>
                                    </li>
                                    <li>
                                        <h4 class=""><b>321</b></h4>
                                        <p class="text-muted m-b-0">Last week</p>
                                    </li>
                                    <li>
                                        <h4 class=""><b>964</b></h4>
                                        <p class="text-muted m-b-0">Last Month</p>
                                    </li>
                                </ul>

                                <div id="morris-bar-example" style="height: 300px"></div>
                            </div>
                        </div>
                    </div>
                </div-->

                <!--div class="row">

                    <div class="col-xl-8">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-0 m-b-15 header-title">Recent Candidates</h4>

                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Status</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td><span class="badge badge-info">Active</span></td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td><span class="badge badge-info">Active</span></td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td><span class="badge badge-info">Active</span></td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td><span class="badge badge-default">Deactive</span></td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td><span class="badge badge-info">Active</span></td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td><span class="badge badge-info">Active</span></td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Monthly Earnings</h4>

                                <ul class="list-inline widget-chart m-t-20 text-center">
                                    <li>
                                        <h4 class=""><b>3654</b></h4>
                                        <p class="text-muted m-b-0">Marketplace</p>
                                    </li>
                                    <li>
                                        <h4 class=""><b>954</b></h4>
                                        <p class="text-muted m-b-0">Last week</p>
                                    </li>
                                    <li>
                                        <h4 class=""><b>8462</b></h4>
                                        <p class="text-muted m-b-0">Last Month</p>
                                    </li>
                                </ul>

                                <div id="morris-donut-example" style="height: 265px"></div>
                            </div>
                        </div>
                    </div>

                </div-->
                <!-- end row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->