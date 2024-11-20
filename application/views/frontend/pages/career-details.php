
<!-- Banner -->

<section class="inner-banner" style="background-image: url(<?php echo base_url();?>images/advantages-banner.png);">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="banner_content ">
               <h2 class="text-white">
                  Careers Details
               </h2>
               <p class="text-white">
                  Become a part of NXG Markets: Revolutionize Forex, Transform Your Career.
               </p>
               <!-- <a href="https://my.nxgmarkets.com/auth/register" class="theme-bttn"><i class="fa fa-user" aria-hidden="true"></i>Register</a> -->
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Banner -->

<!-- Careers Detail -->
<section class="careers-details">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="opening-details">
               <h2 class="text-primary fw-800">
                  Senior Analyst
               </h2>
               <h3 class="fw-800">
                  Job Summary
               </h3>
               <ul class="career_details_list">
                  <li>
                     <b>Location</b>: Chennai
                  </li>
                  <li>
                     <b>Project role</b>: Senior analyst
                  </li>
                  <li>
                     <b>Qualification</b>: B-Tech
                  </li>
                  <li>
                     <b>Experience</b>: 4.5-8 Years
                  </li>
                  <li>
                     <b>Skills</b>: FEA Analysis
                  </li>
                  <li>
                     <b>No. of positions</b>: 25
                  </li>
               </ul>
               <h4 class="text-primary fw-800">
                  Job Description:
               </h4>
               <p>
                  To understand the design specifications| conduct analysis| deliver the results of analysis done on it as per the defined quality and time standards and suggest design modification in case of structural failure.
               </p>
               <ul class="career_details_list">
                  <li>
                     To gather information and to prepare the methodology for the analysis
                  </li>
                  <li>
                     To perform analysis and resolve the issues encountered
                  </li>
                  <li>
                     To perform the quality checks throughout the process
                  </li>
                  <li>
                     To prepare the model for the analysis and build technical model
                  </li>
                  <li>
                     To validate the results and prepare the reports
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-md-6">
            <div class="careers_sticky_sidebar">
               <lottie-player src="<?php echo base_url();?>images/lottie-json/careers.json" style="width: 80%; height: 100%" background="transparent" speed="1" direction="1" mode="normal" loop="" autoplay=""></lottie-player>
               <button type="button" class="theme-bttn" data-bs-toggle="modal" data-bs-target="#apply_pop">Apply Now <i class="fa-solid fa-pen"></i></button>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Careers Detail -->

<div class="modal fade" id="apply_pop" tabindex="-1" aria-labelledby="apply_pop" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="apply_pop">Apply Now </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body apply_now_popup">
        <div class="container">
          <div class="row">
            <div class="col-md-12 pop_up_form_class">
              <form>
                <div class="row form-group mb-3">
                  <div class="col-md-6">
                    <label for="FullName">Full Name</label>
                    <input type="text" class="form-control" id="full_name" placeholder="Full Name" required="" name="full_name" data-gtm-form-interact-field-id="1">
                  </div>
                  <div class="col-md-6">
                    <label for="email_id">Email Address</label>
                    <input type="text" class="form-control" id="email_id" placeholder="Email Address" required="" name="email_id" data-gtm-form-interact-field-id="2">
                  </div>
                </div>
                <div class="row form-group mb-3">
                  <div class="col-md-6">
                    <label for="inputState">Enter Contact Number</label>
                    <input type="text" placeholder="Enter Contact Number" name="contact_number" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label for="inputState">Upload Resume</label>
                    <input type="file" class="form-control" id="customFile">
                  </div>
                </div>
                <div class="form-group mb-3">
                  <label for="exampleFormControlTextarea1">Give me a brief about your requirement</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" cols="50" placeholder="Message" name="message"></textarea>
                </div>
                <button type="submit" class="theme-bttn">Apply Now <i class="fa-solid fa-pen"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>