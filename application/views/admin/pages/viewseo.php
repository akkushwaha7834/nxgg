<!DOCTYPE html>
<html lang="en" class="semi-dark">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    
    <link rel="stylesheet" href="<?php echo base_url();?>/admintheme/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
	
    <title><?php echo $page_title;?></title>
    <link href="<?php echo base_url();?>admintheme/package/dist/css/style.min.css" rel="stylesheet" />
    
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
                <h2>Manage SEO for Defferent Pages
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url();?>"style="color: #B92D64;"><i class="zmdi zmdi-home"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin"style="color: #B92D64;">Admin Panel</a></li>
                  <li class="breadcrumb-item active">SEO</li>
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
                      <a style="color: #B92D64;" href="" name="button_export_excel" id="button_export_excel"><i class="far fa-lg fa-file-excel"></i></a>
                      <a style="color: #B92D64;" href="<?php echo base_url(); ?>admin/createCSV"><i class="fas fa-lg fa-file-csv"></i></a>
                        <strong><a href='<?php echo base_url('admin/manageseo/add');?>' class="theme-btn theme-btn2 float-right">Add SEO</a></strong>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                          <table class="table table-bordered table-striped table-hover dataTable js-exportable text-wrap" id="example" name="example">
                            <thead>
                      <tr>
                        <th>Page Name</th>
                        <th>SEO Title</th>
                        <th>SEO Discription</th>
                        <th>SEO Keyword</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <?php
                    foreach($manageseos as $manageseo){
                    ?>
                      <tr>
                        <td> <?php echo $manageseo['pagename'];?></td>
                        <td> <?php echo $manageseo['seotitle'];?></td>
                        <td> <?php echo $manageseo['seodiscr'];?></td>
                        <td> <?php echo $manageseo['seokeyword'];?></td>
                        <td>  
                          <a href='<?php echo base_url('admin/manageseo/edit/'.$manageseo['id']);?>' style="color: #B92D64;"><i class="material-icons">mode_edit</i></a>
                          <a href='<?php echo base_url('admin/manageseo/delete/'.$manageseo['id']);?>' style="color: #B92D64;" data-toggle="modal" data-target="#largemodal<?php echo $manageseo['id'];?>"><i class="material-icons">delete_forever</i></a> 
                        </td>
                      </tr>
                       <!-- Card for For Confirmation -->
                       <div class="modal fade"  id="largemodal<?php echo $manageseo['id'];?>" tabindex="-1" role="dialog" >
                        <div class="modal-dialog modal-sm" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="title" id="<?php echo $manageseo['id'];?>Label"><i class="material-icons">warning</i> <span> Confirmation</span></h4>
                            </div>
                            <div class="modal-body"> Are you sure you want to delete record[Y/N]? </div>
                            <div class="modal-footer">
                                <a href='<?php echo base_url('admin/manageseo/delete/'.$manageseo['id']);?>'class="theme-btn theme-btn2">Yes</a>
                                <button type="button" class="theme-btn theme-btn2" data-dismiss="modal">No</button>
                            </div>
                          </div>
                        </div>
                    </div>

                    <?php
                    }
                  ?>                  
                </table>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- End Container fluid  -->
    </div>
    <!-- End Page wrapper  -->
    </div>
<!-- End Wrapper -->
<script src="<?php echo base_url();?>admintheme/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>admintheme/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	
<script>
 
$('.button_export_excel').click(() => {
    $('#example').DataTable().buttons(0,0).trigger()
})
</script>
  </body>
</html>