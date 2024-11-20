<?php include_once('./include/header.php') ?>
<section class="refer-and-earn new-promotion" style="background-image: url('images/new-promos2.png');">
    <div class="container position-relative z-1">
        <div class="row g-4 align-items-center">
            <div class="col-lg-8 col-md-8">
                <h1 class="refer-heading text-white fw-800">
                    Revolutionize Your Trading Experience with NXG Markets
                </h1>
                <h3 class="text-white subtitle fw-800">
                    Your Gateway to Global Markets
                </h3>
            </div>
            <div class="col-md-4 text-center">
                <div class="form-wraper">
                    <form action="<?= base_url('welcome/submit_revolutionize_your_trading_experience')?>" method="POST">
                  <input type='hidden' name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                        <div class="row g-4">
                            <div class="col-lg-12 fromgroup">
                                <input type="text" name="name" id="name" placeholder="Your Name">
                            </div>
                            <div class="col-lg-12 fromgroup">
                                <input type="email" name="email" id="email" placeholder="Your Email">
                            </div>
                            <div class="col-lg-12 fromgroup">
                                <input type="tel" name="contact_no" id="contact_no" placeholder="Your Mobile Number">
                            </div>
                            <div class="col-lg-12">
                                <select class="form-select" name="location" aria-label="Default select example">
                                    <option selected>Select Location</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Ladakh">Ladakh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                </select>
                            </div>
                            <div class=" col-lg-12 fromgroup">
                                <input type="submit" value="Submit" name="submit" class="submit-input">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="why-choose-promo">
    <div class="container z-1 position-relative">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="text-primary fw-800">
                    Why Choose NXG Markets?
                </h2>
            </div>
        </div>
        <div class="row mt-4 g-4">
            <div class="col-md-6 col-lg-3">
                <div class="why-choose-promo-box text-center">
                    <img src="images/Global-Market-Access-01.png" alt="">
                    <h4 class="fw-800 mt-3">
                        Innovative Technology
                    </h4>
                    <p>
                        Highlight the cutting-edge trading platform and tools offered by
                        NXG Markets.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="why-choose-promo-box  text-center">
                    <img src="images/nnovative-Technology-01.png" alt="">
                    <h4 class="fw-800 mt-3">
                        Global Market Access
                    </h4>
                    <p>
                        Emphasize the ability to trade a wide range of assets, including
                        stocks, forex, commodities, and cryptocurrencies.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="why-choose-promo-box  text-center">

                    <img src="images/Competitive-Pricing-01.png" alt="">
                    <h4 class="fw-800 mt-3">
                        Competitive Pricing
                    </h4>
                    <p>
                        Showcase the competitive fees and spreads offered by NXG
                        Markets.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="why-choose-promo-box  text-center">
                    <img src="images/Security-and-Reliability-01.png" alt="">
                    <h4 class="fw-800 mt-3">
                        Security and Reliability
                    </h4>
                    <p>
                        Assure clients of the platform&#39;s security measures and
                        commitment to reliability.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ourFeatures">
    <div class="container z-1 position-relative">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="text-white fw-800 ">Our Features</h2>
                <ul class="our-features mt-5">
                    <li class="">
                        <img src="images/AdvancedTradingTools-01.png" alt="">

                        <div>
                            <h5 class="fw-800  text-white mb-0"> Advanced Trading Tools:</h5>
                            <p class="text-white mb-0">Describe the advanced charting tools, technical indicators,
                                and order types available.</p>
                        </div>
                    </li>
                    <li class="">
                        <img src="images/Real-Time-Quotes-01.png" alt="">

                        <div>
                            <div>
                                <h5 class="fw-800  text-white mb-0"> Real-Time Quotes:</h5>
                                <p class="text-white mb-0">Highlight the provision of real-time market data and news.</p>
                            </div>
                    </li>
                    <li class="">
                        <img src="images/Educationalesources-01.png" alt="">

                        <div>
                            <div>
                                <h5 class="fw-800  text-white mb-0"> Educational Resources:</h5>
                                <p class="text-white mb-0">Mention the availability of educational materials, webinars,
                                    and tutorials.</p>
                            </div>
                    </li>
                    <li class="">
                        <img src="images/DedicatedCustomer-support-01.png" alt="">

                        <div>
                            <div>
                                <h5 class="fw-800 text-white mb-0"> Dedicated Customer Support:</h5>
                                <p class="text-white mb-0">Emphasize the commitment to providing exceptional
                                    customer service.</p>
                            </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 align-self-center text-center">
                <img src="images/features.png" alt="" class="w-75">
            </div>
        </div>

    </div>
</section>

<?php include_once('./include/footer.php') ?>