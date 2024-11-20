<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
<!-- Banner -->
<section class="inner-banner" style="background-image: url(<?php echo base_url();?>images/about-banner.png);">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="banner_content ">
               <h2 class="text-white">
                  Blog
               </h2>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Banner -->

<!-- Blog List -->
<section class="blog-listing">
	<div class="container">
		<div class="row gy-4">

		<?php
        foreach($blogs as $blogs){
         
            $descr= $blogs['seodiscr'];
            $blogname= $blogs['blog_title'];
            $readmore="Read More";
		?>
			<div class="col-md-4">
				<div class="blog_list">
						<a href="<?php echo base_url(str_replace(' ', '-', $blogs['slugs'])); ?>">
						<img src="<?php echo base_url($blogs['blogimage']);?>" class="img-fluid">
					</a>
					<div class="blog-content">
						<a href="<?php echo base_url(str_replace(' ', '-', $blogs['slugs']));?>">
							<h5 class="text-black fw-600">
								<?php echo $blogs['blog_title'];?>
							</h5>
						</a>
						<hr>
						<div class="published_date"><h5>
							<span class="mdi mdi-calendar-clock-outline" style="font-size: 30px"></span> <?php 
							echo '&nbsp;&nbsp;&nbsp;';
							$d=strtotime($blogs['date']);
							echo date("M d, Y", $d);
							echo '&nbsp;&nbsp;&nbsp;';
							
							?></h5>
						</div>
					</div>
				</div>
			</div>
		<?php }?>
		</div>
	</div>
</section>