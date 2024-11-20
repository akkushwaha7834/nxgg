<style>
.ck-editor__editable[role="textbox"] {
  /* Editing area */
  min-height: 200px;
}
</style>

<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, material admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="MaterialPro is powerful and clean admin dashboard template, inpired from Google's Material Design"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title><?php echo $page_title;?></title>
    <!-- Custom CSS -->
    <!-- <link href="<?php echo base_url();?>admintheme/package/dist/css/style.min.css" rel="stylesheet" /> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <section class="content">
  <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Add Blog
                <small class="text-muted">Blog added here will show at blog page</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url();?>" style="color:#B92D64"><i class="zmdi zmdi-home"></i> NXGMarkets</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin"style="color:#B92D64">Admin</a></li>
                    <li class="breadcrumb-item active">Add Blog</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Container fluid  -->
    <div class="container-fluid">
      <!-- Color Pickers -->
      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="body"> 
                <?php if ($message){ echo $message; } ?>
                <form action="" method="post" enctype="multipart/form-data">
                  <input type='hidden' value="<?php echo $team_data[0]['id']; ?>" name='id' />
                  <input type='hidden' name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                  <div class="row">
                  <div class="col-md-4"> <b> SEO Discription </b>
                  <div class="input-group"> 
                      <input type='text' name='seodiscr' id='seodiscr' value="<?php echo $team_data[0]['seodiscr']; ?>" placeholder ='SEO Discription' class='form-control'/>
                  </div></div>
                  <div class="col-md-4">
                  <div class='form-group'>
                      <label> SEO Title* </Label>
                      <input type='text' name='seotitle' id='seotitle' value="<?php echo $team_data[0]['seotitle']; ?>" placeholder ='Meta Tags' class='form-control'/>
                  </div>
                  </div>
                  <div class="col-md-4">
                  <div class='form-group'>
                      <label> SEO Keywords </Label>
                      <input type='text' name='seokeyword' id='seokeyword' value="<?php echo $team_data[0]['seokeyword']; ?>" placeholder ='Meta Tags' class='form-control'/>
                  </div>
                  </div></div></br>
                  <div class="row">
                  <div class="col-md-4">
                  <div class='form-group'>
                      <label> Blog Title </Label>
                      <input type='text' name='blog_title' id='blog_title' value="<?php echo $team_data[0]['blog_title']; ?>" placeholder ='Blog Title' class='form-control'/>
                  </div>
                  </div>
                  <!-- <div class="col-md-4">
                  <div class='form-group'>
                      <label> Blog Detail </Label>
                      <input type='text' name='blog_detail' id='blog_detail' value="<?php echo $team_data[0]['blog_detail']; ?>" placeholder ='Blog Detail' class='form-control'/>
                  </div>
                  </div> -->
                  <div class="col-md-4">
                  <div class='form-group'>
                      <label> Blog Image </Label>
                      <input type='file' name='blogimage' id='blogimage' class='form-control'/>
                      <input type='hidden' name='blogimageexisting' id='blogimageexisting'value="<?php echo $team_data[0]['blogimage']; ?>" class='form-control'/>
                      <?php
                        if ($team_data[0]['blogimage']){
                          echo "<img src='".base_url($team_data[0]['blogimage'])."' />";
                        }
                      ?>
                  </div>
                  </div>
                  <!-- <div class="col-md-4">
                  <div class='form-group'>
                    <label> Blog Name </Label>
                    <input type='text' name='blogname' id='blogname' value="<?php echo $team_data[0]['blogname']; ?>"placeholder ='Blog Name' class='form-control'/>
                  </div></div> -->
                  <div class="col-md-4">
                  <div class='form-group'>
                    <label> Author </Label>
                    <input type='text' name='author' id='author' value="<?php echo $team_data[0]['author']; ?>"placeholder ='Author' class='form-control'/>
                  </div>
                  </div>
                  </div></br>
                  <div class="row">
                  <div class="col-md-3">
                  <div class='form-group'>
                    <label> Date and Time </Label>
                    <input type="date" name='date' id='date' value="<?php 
                      if ($team_data[0]['date']){echo $team_data[0]['date']; 
                      }else{ echo date('Y-m-d');}
                    ?>" placeholder=''  class='form-control'/>
                  </div>
                  </div>
                  <div class="col-md-4">
                  <div class='form-group'>
                    <label> Slugs </Label>
                    <input type='text' name='slugs' id='slugs' value="<?php echo $team_data[0]['slugs']; ?>"placeholder ='Slugs' class='form-control'/>
                  </div>
                  </div></div></br>
                  <div class="row">
                  <div class="col-md-12">
                  <div class='form-group'>
                      <label> Long Discription </Label>
                      <textarea name='longdiscr' id='longdiscr' placeholder ='Blog' class='form-control'><?php echo $team_data[0]['longdiscr']; ?></textarea>
                    </div>
                  </div></div></br>
                  <input type='submit' name='submit' class='theme-btn theme-btn2' value='  Save  ' />
                  <a href='<?php echo base_url('admin/blog/view/');?>'> <input type='button' name='cancel' class='theme-btn theme-btn2' value=' Cancel ' /></a>
            </form>
          </div> 
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>

<script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#longdiscr' ) )
        .catch( error => {
            console.error( error );
        } );
</script>