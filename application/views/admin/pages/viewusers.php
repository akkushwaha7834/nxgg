<!DOCTYPE html>
<html class="no-js " lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="<?php echo base_url();?>/admintheme/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
	<!-- loader-->
  <!-- <link rel="stylesheet" href="<?php echo base_url();?>/admintheme/assets/plugins/bootstrap/css/bootstrap.min.css"> -->
<!-- Custom Css -->
<!-- <link  rel="stylesheet" href="<?php echo base_url();?>/admintheme/assets/css/main.css"> -->
<!-- <link rel="stylesheet" href="<?php echo base_url();?>/admintheme/assets/css/color_skins.css"> -->
    <title><?php echo $page_title;?></title>

  <style>
    .modal {
        background: rgba(255, 255, 255, 0.8);
        position: absolute;
      float: left;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
    }
    .modal-backdrop {
        display: none;
    }1200;
  </style>

  </head>

  <body>
  <section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>User Detail
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url();?>"style="color: #B92D64;"><i class="zmdi zmdi-home"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin"style="color: #B92D64;">Admin Panel</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                      <a style="color: #B92D64;" href="<?php echo base_url(); ?>admin/createExcel"><i class="far fa-lg fa-copy"></i></a>
                      <a style="color: #B92D64;" href="<?php echo base_url(); ?>admin/createExcel"><i class="far fa-lg fa-file-excel"></i></a>
                      <a style="color: #B92D64;" href="<?php echo base_url(); ?>admin/createCSV"><i class="fas fa-lg fa-file-csv"></i></a>
                        <strong><a href='<?php echo base_url('admin/paneluser/adminadd');?>' class="theme-btn theme-btn2 float-right">Add User</a></strong>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                          <table class="table table-bordered table-striped table-hover js-basic-example dataTable text-wrap">
                            <thead>
                              <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>User_id</th>
                                <th>Mobile</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                  <?php
                    foreach($users as $user){
                      ?>
                      <tr>
                        <td> <?php echo $user['first_name'];?></td>
                        <td> <?php echo $user['last_name'];?></td>
                        <td> <?php echo $user['email_id'];?></td>
                        <td> <?php echo $user['mobile'];?></td>
                        <td> <div class="d-grid">
                        <?php if($user['role']=="User"){ ?>
                            <span class="badge bg-info text-dark"><?php echo $user['role'];?></spam></td>
                        <?php }else{ ?>
                            <span class="badge bg-success"><?php echo $user['role'];?></spam></td>
                        <?php } ?>
                            </div>
                        <td>
                            <a href="<?php echo base_url('admin/paneluser/edit/'.$user['id']);?>" style="color: #B92D64;"><i class="material-icons">mode_edit</i></a>
                            <a href="<?php echo base_url('admin/paneluser/delete/'.$user['id']);?>" style="color: #B92D64;" onclick="return confirm('Are you sure to delete record?')"><i class="material-icons">delete_forever</i></a>
                        </td>  
                      </tr>
                      <?php
                    }
                  ?>
                </tfoot>
					    </table>
            </div>
          </div>
        </div>   
      </div>
    </div>

  </body>
</html>
