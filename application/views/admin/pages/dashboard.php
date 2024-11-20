<section class="content home">
	<div class="container-fluid">
        <div class="card widget_2">
            <ul class="row clearfix list-unstyled m-b-0">
                <li class="col-lg-3 col-md-6 col-sm-12">
                    <div class="body">
                        <div class="row">
                            <div class="col-7">
                                <h5 class="m-t-0">Total Blogs</h5>
                                <p class="text-small">Last Week</p>
                            </div>
                            <div class="col-5 text-right">
                                <h2 class=""><?php 
											echo sprintf('%02d',$this->db->count_all_results('blogdata'));
											?></h2>
                                <small class="info"><?php 
											$sDate = date('Y-m-d');
											$sdate=date('Y-m-d', strtotime($Date. ' -7 days'));
											$this->db->where('date>',date($sdate));
											$this->db->from("blogdata");
											$total= $this->db->count_all_results();
											echo sprintf('%02d',$total);
                                        ?></small>
                            </div>
                            <div class="col-12">
                                <div class="progress m-t-20">
                                <div class="progress-bar l-amber" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 col-sm-12">
                    <div class="body">
                        <div class="row">
                            <div class="col-7">
                                <h5 class="m-t-0">Total Visitors</h5>
                                <p class="text-small">Last Week</p>
                            </div>
                            <div class="col-5 text-right">
                                <h2 class=""><?php 
											echo sprintf('%02d',$this->db->count_all_results('visitor_count'));
											?></h2>
                                <small class="info"><?php 
											$sDate = date('Y-m-d');
											$sdate=date('Y-m-d', strtotime($Date. ' -7 days'));
											$this->db->where('visit_date>',date($sdate));
											$this->db->from("visitor_count");
											$total= $this->db->count_all_results();
											echo sprintf('%02d',$total);
                                        ?></small>
                            </div>
                            <div class="col-12">
                                <div class="progress m-t-20">
                                <div class="progress-bar l-blue" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 col-sm-12">
                    <div class="body">
                        <div class="row">
                            <div class="col-7">
                                <h5 class="m-t-0">SEO Pages Added</h5>
                                <!-- <p class="text-small">--</p> -->
                            </div>
                            <div class="col-5 text-right">
                                <h2 class=""><?php 
											echo sprintf('%02d',$this->db->count_all_results('seodata'));
											?></h2></h2>
                                <!-- <small class="info">--</small> -->
                            </div>
                            <div class="col-12">
                                <!-- <div class="progress m-t-20">
                                <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 col-sm-12">
                    <div class="body">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="m-t-0">Registered Users</h5>
                                <p class="text-small">Last Week</p>
                            </div>
                            <div class="col-4 text-right">
                                <h2 class=""><?php 
										echo sprintf('%02d',$this->db->where('role',"User")->from("registered_data")->count_all_results());
										?></h2>
                                	<small class="info"><?php 
										$sDate = date('Y-m-d');
										$sdate=date('Y-m-d', strtotime($Date. ' -7 days'));
										$this->db->where('timestamp>',date($sdate));
										$this->db->where('role',"User");
										$this->db->from("registered_data");
										$total= $this->db->count_all_results();
										echo sprintf('%02d',$total);
									?>
									</small>
                            </div>
                            <div class="col-12">
                                <div class="progress m-t-20">
                                <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
	</div>
	<div class="container-fluid">
        <div class="row clearfix">
            <!--<div class="col-md-12 col-lg-8">
                 <div class="card visitors-map">
                    <div class="header">
                        <h2><strong>Visitors</strong> Statistics</h2>
                        <ul class="header-dropdown">
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>                        
                    </div>
                    <div class="body">
                        <div id="world-map-markers" class="jvector-map m-b-5"></div>
                        <div class="row clearfix">
                            <div class="col-lg-4 col-sm-6">
                                <div class="progress-container m-b-20">
                                    <span class="progress-badge">visitor from america</span>
                                    <div class="progress">
                                        <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="progress-container m-b-20">
                                    <span class="progress-badge">visitor from Canada</span>
                                    <div class="progress">
                                        <div class="progress-bar l-coral" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="progress-container m-b-20">
                                    <span class="progress-badge">visitor from asia</span>
                                    <div class="progress">
                                        <div class="progress-bar l-blue" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="progress-container m-b-20">
                                    <span class="progress-badge">visitor from america</span>
                                    <div class="progress">
                                        <div class="progress-bar l-salmon" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="progress-container m-b-20">
                                    <span class="progress-badge">visitor from Canada</span>
                                    <div class="progress">
                                        <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="progress-container m-b-20">
                                    <span class="progress-badge">visitor from asia</span>
                                    <div class="progress">
                                        <div class="progress-bar l-amber" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>-->
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Browser</strong> Usage</h2>
                        <ul class="header-dropdown">
                            
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <!-- <div id="donut_chart" class="dashboard-donut-chart"></div> -->
                        <table class="table m-t-15 m-b-0">
                            <tbody>
                                <?php foreach ($visit_data as $visit_data){ ?>
                                    <tr> 
                                        <td> <?php 
                                                if ($visit_data['browser']){
                                                    echo $visit_data['browser'];
                                                }else{
                                                    echo "Others";
                                                }
                                             ?> </td>
                                        <td> <?php echo $visit_data['ip'];?> </td> 
                                    </tr>       
                                <?php }?>
                                <!-- <tr>
                                    <td>Chrome</td>
                                    <td>6985</td>
                                    <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                </tr>
                                <tr>
                                    <td>Other</td>
                                    <td>2697</td>
                                    <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                </tr>
                                <tr>
                                    <td>Safari</td>
                                    <td>3597</td>
                                    <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                                </tr>
                                <tr>
                                    <td>Firefox</td>
                                    <td>2145</td>
                                    <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                </tr>
                                <tr>
                                    <td>Opera</td>
                                    <td>1854</td>
                                    <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                                </tr>                                -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</section>
<!--start page wrapper -->
<!-- <div class="page-wrapper">
			<div class="page-content">
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-5">
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
                                    <h6 class="mb-0 text-secondary">Total Blogs</h6>
										<h4 class="my-1">
                                            <?php 
											echo sprintf('%02d',$this->db->count_all_results('blogdata'));
											?>
                                        </h4>
										<p class="mb-0 font-13 text-primary"><i class="bx bxs-up-arrow align-middle"></i>
                                        <?php 
											$sDate = date('Y-m-d');
											$sdate=date('Y-m-d', strtotime($Date. ' -7 days'));
											$this->db->where('date>',date($sdate));
											$this->db->from("blogdata");
											$total= $this->db->count_all_results();
											echo sprintf('%02d',$total);
                                        ?>
                                         - last week</p>
									</div>
									<div class="widgets-icons rounded-circle text-white ms-auto bg-gradient-voilet"><i class="bx bxs-file"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h6 class="mb-0 text-secondary">--</h6>
										<h4 class="my-1"><?php 
											// echo sprintf('%02d',$this->db->where('status',"Approved")->from("report_request")->count_all_results());
										?></h4>
										<p class="mb-0 font-13 text-success"><i class="bx bxs-up-arrow align-middle"></i>
                                        <?php 
                                            // $sDate = date('Y-m-d');
                                            // $sdate=date('Y-m-d', strtotime($Date. ' -7 days'));
                                            // $this->db->where('req_date>',date($sdate));
                                            // $this->db->where('status',"Approved");
                                            // $this->db->from("report_request");
                                            // $total= $this->db->count_all_results();
                                            // echo sprintf('%02d',$total);
                                        ?>
                                         - last week</p>
									</div>
									<div class="widgets-icons rounded-circle text-white ms-auto bg-gradient-branding"><i class="bx bxs-file"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
                                        <h6 class="mb-0 text-secondary">--</h6>
										<h4 class="my-1"><?php 
											// echo sprintf('%02d',$this->db->where('status',"Request Pending")->from("report_request")->count_all_results());
										?></h4>
										<p class="mb-0 font-13 text-warning"><i class="bx bxs-right-arrow align-middle"></i>
                                        <?php 
                                            // $sDate = date('Y-m-d');
                                            // $sdate=date('Y-m-d', strtotime($Date. ' -7 days'));
                                            // $this->db->where('req_date>',date($sdate));
                                            // $this->db->where('status',"Request Pending");
                                            // $this->db->from("report_request");
                                            // $total= $this->db->count_all_results();
                                            // echo sprintf('%02d',$total);
                                        ?>
                                         - last week</p>
									</div>
									<div class="widgets-icons rounded-circle text-white ms-auto bg-gradient-kyoto"><i class="bx bxs-binoculars"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
                                        <h6 class="mb-0 text-secondary">--</h6>
										<h4 class="my-1"><?php 
											// echo sprintf('%02d',$this->db->where('status',"Rejected")->from("report_request")->count_all_results());
											?></h4>
										<p class="mb-0 font-13 text-danger"><i class="bx bxs-down-arrow align-middle"></i>
                                        <?php 
                                            // $sDate = date('Y-m-d');
                                            // $sdate=date('Y-m-d', strtotime($Date. ' -7 days'));
                                            // $this->db->where('req_date>',date($sdate));
                                            // $this->db->where('status',"Rejected");
                                            // $this->db->from("report_request");
                                            // $total= $this->db->count_all_results();
                                            // echo sprintf('%02d',$total);
                                        ?>
                                         - last week</p>
									</div>
									<div class="widgets-icons rounded-circle text-white ms-auto bg-gradient-burning"><i class="bx bxs-info-square"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
                                        <h6 class="mb-0 text-secondary">Registered Users</h6>
										<h4 class="my-1"><?php 
											echo sprintf('%02d',$this->db->where('role',"User")->from("registered_data")->count_all_results());
										?></h4>
										<h6 class="mb-0 font-13 text-dark"><i class="bx bxs-up-arrow align-middle"></i>
                                        <?php 
											$sDate = date('Y-m-d');
											$sdate=date('Y-m-d', strtotime($Date. ' -7 days'));
											$this->db->where('timestamp>',date($sdate));
											$this->db->where('role',"User");
											$this->db->from("registered_data");
											$total= $this->db->count_all_results();
											echo sprintf('%02d',$total);
                                        ?>
                                         - last week</h6>
									</div>
									<div class="widgets-icons rounded-circle text-white ms-auto bg-gradient-kyoto"><i class="bx bxs-group"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

                 -->
<script src="<?php echo base_url();?>admintheme/assets/plugins/chartjs/js/chart.js"></script>
<script src="assets/plugins/chartjs/js/chartjs-custom.js"></script>