
<!-- Banner -->
<!-- <section class="inner-banner" style="background-image: url(<?php echo base_url();?>images/about-banner.png);">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="banner_content ">
               
               <h2 class="text-white fw-800">
               	
					<?php echo $Blog_detail[0]['blog_title']; ?>
               </h2>
            </div>
         </div>
      </div>
   </div>
</section> -->
<!-- Banner -->

<!-- Blog Detail Content -->
<section class="blog-detail-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="blog-content-2">
					<img src="<?php echo base_url($Blog_detail[0]['blogimage']);?>" class="img-fluid"></br>
						<div class="container">
						<div class="published_date"></br>
						<h2 class="fw-800"><?php echo $Blog_detail[0]['blog_title']; ?></h2>

							</br>
							<i class="fa fa-lg fa-calendar" aria-hidden="true"></i><?php echo '&nbsp;&nbsp;&nbsp;';
							$d=strtotime($Blog_detail[0]['date']);
							echo date("M d, Y", $d);
							echo '&nbsp;&nbsp;&nbsp;';
							echo '<i class="far fa-lg fa-clock" aria-hidden="true"></i>';
							echo '&nbsp;&nbsp;&nbsp;';
							$d=strtotime($Blog_detail[0]['date']);
							echo date("h:i a", $d);
						?>
						</div></div></br>
          					<?php echo $Blog_detail[0]['longdiscr']; ?>
				</div>
			</div>

			<div class="col-md-4">
				<div class="sidebar-sticky">
					<div class="container">
            			<h1>Most Popular</h1>
						<div class="row gy-4">
						<?php
							foreach($mostpopular as $mostpopular){?>
							<div class="col-md-12">
								<div class="card blog-card">
									<a href="<?php echo base_url(str_replace(' ', '-', $mostpopular['slugs']));?>">
										<img src="<?php echo base_url($mostpopular['blogimage']);?>" class="card-img-top" alt="...">
									</a>
									<div class="card-body blog-content">
										<a href="<?php echo base_url(str_replace(' ', '-', $mostpopular['slugs']));?>">
										<h5 class="card-title">
											<!-- Crypto and Forex Trading with NXG Markets: Get Powerful Tools & Expert Support -->
											<?php echo $mostpopular['blog_title'];?>
										</h5>
									</a>
									<hr style="border: 1px solid #ccc;">
										<div class="meta_blog">
											<span>
												<i class="fa fa-calendar" aria-hidden="true"></i> 
												<!-- 16-01-2024 -->
												<?php 
												$d=strtotime($mostpopular['date']);
												echo date("M d, Y", $d);
												?>
											</span>
										</div>
									</div>
								</div>
							</div>
						<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Blog Detail Content -->

<!-- More Blog  -->
<section class="explore_blogs">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<a href="<?php echo base_url();?>blog">
					<h4 class="expolore_arrow">
						Explore all of our content
					</h4>
					<i class="fa fa-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</div>
</section>
