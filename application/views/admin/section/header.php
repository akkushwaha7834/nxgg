<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title><?php echo $page_title ?></title>
    <link rel="icon" href="<?php echo base_url(); ?>images/nxg-logo.png" type="image/x-icon"> <!-- Logo icon-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>admintheme/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>admintheme/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css" />
    <link rel="stylesheet" href="a<?php echo base_url(); ?>admintheme/ssets/plugins/morrisjs/morris.min.css" />
    <!-- for table design -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>admintheme/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>admintheme/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>admintheme/assets/css/color_skins.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <script src="https://kit.fontawesome.com/1947905107.js" crossorigin="anonymous"></script>
    <style>
        .theme-btn:hover {
            color: #fff;
            background-color: #B92D64;
        }
    </style>
    <style>
        .theme-cyan .sidebar .menu .list li.active>:first-child i,
        .theme-cyan .sidebar .menu .list li.active>:first-child span {
            color: #B92D64;
        }
    </style>
</head>

<body class="theme-cyan">
    <!-- Page Loader -->

    <!-- Top Bar -->
    <nav class="navbar" style="background:#B92D64">
        <div class="col-12">
            <div class="navbar-header">
                <!-- <a href="javascript:void(0);" class="bars"></a> -->
                <a class="navbar-brand" href="<?php echo base_url('admin'); ?>"><img
                        src="<?php echo base_url(); ?>images/nxgmarkets.webp" width="180" alt="Compass"></a>
            </div>
            <ul class="nav navbar-nav navbar-left">
                <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i
                            class="zmdi zmdi-swap"></i></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo base_url(); ?>" class="mega-menu" data-close="true"><i
                            class="zmdi zmdi-home"></i><span>&nbsp;Home</span></a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="fullscreen hidden-sm-down" data-provide="fullscreen"
                        data-close="true"><i class="zmdi zmdi-fullscreen"></i></a>
                </li>
                <li><a href="<?php echo base_url('admin/logout'); ?>" class="mega-menu" data-close="true"
                        data-toggle="modal" data-target="#confirmlogout"><i class="zmdi zmdi-power"></i></a></li>
            </ul>
        </div>
    </nav>

    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar" style="color: #B92D64;">
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="user-info ">
                        <!-- <div class="image"><a href="<?php echo base_url('admin/'); ?>"><img src="assets/images/profile_av.jpg" alt="User"></a></div> -->
                        <div class="detail">
                            <h4><?php echo $this->session->userdata['login_first_name'] . ' ' . $this->session->userdata['login_last_name']; ?>
                            </h4>
                            <small><?php echo $this->session->userdata['login_email']; ?></small>
                        </div>
                        <a href="<?php echo base_url('admin/userprofile'); ?>" style="color: #B92D64;"
                            title="Profile"><i class="material-icons">account_box</i></a>
                        <a href="<?php echo base_url('admin/emailsetting'); ?>" style="color: #B92D64;"
                            title="Setting"><i class="material-icons">settings</i></i></a>
                        <a href="<?php echo base_url('admin/logout'); ?>" style="color: #B92D64;" title="Sign out"
                            data-toggle="modal" data-target="#confirmlogout"><i class="zmdi zmdi-power"></i></a>
                    </div>
                </li>
                <li class="active open"> <a href="<?php echo base_url(); ?>admin"><i
                            class="zmdi zmdi-home"></i><span>Dashboard</span></a>
                <li class="active open"><a href="<?php echo base_url('admin/blog/view'); ?>"><i
                            class="material-icons">assignment</i><span>Blog</span></a> </li>
                <li class="active open"><a href="<?php echo base_url('admin/manageseo/view'); ?>"><i
                            class="material-icons">language</i><span>SEO</span></a></li>
                <li class="active open"><a href="<?php echo base_url('admin/manageras/view'); ?>"> <i
                            class="material-icons">reorder</i><span>Annual Interest Data</span></a></li>
                <li class="active open"><a href="<?php echo base_url('admin/paneluser/view'); ?>"> <i
                            class="material-icons">people</i><span>Users</span></a></li>
                <!-- <li class="active open"><a href="<?php echo base_url('admin/logout'); ?>" data-close="true" onclick="return confirm('Are you sure you want to Logout?')"><i class="material-icons">power_settings_new</i><span>Logout</span></a></li> -->
                </li>
            </ul>
        </div>
    </aside>

    <!-- Card for For Confirmation -->
    <div class="modal fade" id="confirmlogout" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="confirmlogoutLabel"><i class="material-icons">warning</i> <span>
                            Confirmation</span></h4>
                </div>
                <div class="modal-body"> Are you sure you want to logged out[Y/N]? </div>
                <div class="modal-footer">
                    <a href='<?php echo base_url('admin/logout'); ?>' class="theme-btn theme-btn2">Yes</a>
                    <button type="button" class="theme-btn theme-btn2" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url(); ?>admintheme/assets/bundles/libscripts.bundle.js"></script>
    <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
    <script src="<?php echo base_url(); ?>admintheme/assets/bundles/vendorscripts.bundle.js"></script>
    <!-- slimscroll, waves Scripts Plugin Js -->

    <script src="<?php echo base_url(); ?>admintheme/assets/bundles/morrisscripts.bundle.js"></script>
    <!-- Morris Plugin Js -->
    <script src="<?php echo base_url(); ?>admintheme/assets/bundles/jvectormap.bundle.js"></script>
    <!-- JVectorMap Plugin Js -->
    <script src="<?php echo base_url(); ?>admintheme/assets/bundles/knob.bundle.js"></script>
    <!-- Jquery Knob Plugin Js -->
    <script src="<?php echo base_url(); ?>admintheme/assets/bundles/sparkline.bundle.js"></script>
    <!-- Sparkline Plugin Js -->

    <!-- <script src="<?php echo base_url(); ?>admintheme/assets/bundles/mainscripts.bundle.js"></script> -->
    <script src="<?php echo base_url(); ?>admintheme/assets/js/pages/index.js"></script>

    <!-- JS for Data Table -->
    <script src="<?php echo base_url(); ?>/admintheme/assets/bundles/datatablescripts.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/admintheme/assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
    <script
        src="<?php echo base_url(); ?>/admintheme/assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
    <script
        src="<?php echo base_url(); ?>/admintheme/assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
    <script
        src="<?php echo base_url(); ?>/admintheme/assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"></script>
    <script
        src="<?php echo base_url(); ?>/admintheme/assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
    <script
        src="<?php echo base_url(); ?>/admintheme/assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>

    <script src="<?php echo base_url(); ?>/admintheme/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
    <script src="<?php echo base_url(); ?>/admintheme/assets/js/pages/tables/jquery-datatable.js"></script>
</body>

</html>