  
<!DOCTYPE html>
<html lang="en" class="semi-dark">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>/admintheme/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css"> -->
	<!-- loader-->
  <!-- <link rel="stylesheet" href="<?php echo base_url();?>/admintheme/assets/plugins/bootstrap/css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="<?php echo base_url();?>/admintheme/assets/plugins/bootstrap/css/bootstrap.min.css"> -->
	<!-- Bootstrap CSS -->
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
                <h2>Manage Blogs</h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>"style="color: #B92D64;"><i class="zmdi zmdi-home"></i> Home</a></li>
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin"style="color: #B92D64;">Admin Panel</a></li>
                  <li class="breadcrumb-item active">Blog</li>
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
                      <strong><a href='<?php echo base_url('admin/blog/add');?>' class="theme-btn theme-btn2 float-right">Add Blog</a></strong>
                      </div>
                    <div class="body">
                        <div class="table-responsive">
                          <table id="blogtable" class="table table-bordered table-striped table-hover js-basic-example dataTable text-wrap">
                            <thead>
                              <tr>
                                <th>SEO Discription</th>
                                <th>SEO Title</th>
                                <th>SEO Keywords</th>
                                <th>Blog Title</th>
                                <!-- <th>Blog Detail</th> -->
                                <th>Blog Image</th>
                                <!-- <th>Blog Name</th> -->
                                <th>Auther</th>
                                <th>Date</th>
                                <th>Content</th>
                                <th>Slugs</th>
                                  <?php 
                                  // if ($this->session->userdata['login_role']){ 
                                    ?>
                                  <th>Action</th>
                                <?php //} ?>
                            </tr>
                            </thead>
                            <?php
                              foreach($blogs as $blogs){
                                  ?>
                                  <tr>
                                    <td> <?php echo $blogs['seodiscr'];?></td>
                                    <td> <?php echo $blogs['seotitle'];?></td>
                                    <td> <?php echo $blogs['seokeyword'];?></td>
                                    <td> <?php echo $blogs['blog_title'];?></td>
                                    <!-- <td> <?php echo $blogs['blog_detail'];?></td> -->
                                    <td><img class="Logo" width="220" src="<?php echo base_url($blogs['blogimage']);?>" /></td>
                                    <!-- <td> <?php echo $blogs['blogname'];?></td> -->
                                    <td> <?php echo $blogs['author'];?></td>
                                    <td> <?php echo $blogs['date'];?></td>
                                    <td> <button class="theme-btn theme-btn2" data-toggle="modal" data-target="#largemodal<?php echo $blogs['id'];?>">
                                          View
                                          </button></td>
                                    <td> <?php echo $blogs['slugs'];?></td>
                                    <?php 
                                      // if ($this->session->userdata['login_role']){ 
                                        ?>
                                    <td>
                                        <a href='<?php echo base_url('admin/blog/edit/'.$blogs['id']);?>' style="color: #B92D64;"><i class="material-icons">mode_edit</i></a>
                                        <a href='<?php echo base_url('admin/blog/delete/'.$blogs['id']);?>' style="color: #B92D64;" data-toggle="modal" data-target="#confirm<?php echo $blogs['id'];?>"><i class="material-icons">delete_forever</i></a> 
                                        <!-- <a href='<?php echo base_url('admin/blog/delete/'.$blogs['id']);?>' onclick="return confirm('Are you sure to delete record?')"><i class="material-icons">delete_forever</i></a>  -->
                                    </td>
                                    <?php 
                                      // } 
                                    ?>
                                  </tr>

                                  <!-- Card for English -->
                                  <div class="modal fade" id="largemodal<?php echo $blogs['id'];?>" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-lg" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="title" id="<?php echo $blogs['id'];?>Label">Content</h4>
                                        </div>
                                        <div class="modal-body"> <?php echo $blogs['longdiscr'];?> </div>
                                        <div class="modal-footer">
                                            <button type="button" class="theme-btn theme-btn2" data-dismiss="modal">CLOSE</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                

                                 <!-- Card for For Confirmation -->
                                  <div class="modal fade" id="confirm<?php echo $blogs['id'];?>" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-sm" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="title" id="<?php echo $blogs['id'];?>Label"><i class="material-icons">warning</i> <span> Confirmation</span></h4>
                                        </div>
                                        <div class="modal-body"> Are you sure you want to delete record[Y/N]? </div>
                                        <div class="modal-footer">
                                            <a href='<?php echo base_url('admin/blog/delete/'.$blogs['id']);?>'class="theme-btn theme-btn2">Yes</a>
                                            <button type="button" class="theme-btn theme-btn2" data-dismiss="modal">No</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                          <?php } ?>
                          </table>
  </div></div></div></div></div></div></div>
<script>
  $(document).ready(function() {
    // Check if DataTable is already initialized and destroy it
    if ($.fn.DataTable.isDataTable('#blogtable')) {
        $('#blogtable').DataTable().destroy();
    }

    // Initialize DataTable
    $('#blogtable').DataTable({
      "order": [[7, 'asc']]
        // "ordering": false, // Disable automatic sorting
        // "columnDefs": [
        //     { "orderable": false, "targets": [0, 1] } // Disable sorting on specific columns (if needed)
        // ]
    });
});
</script>
</body>
</html>