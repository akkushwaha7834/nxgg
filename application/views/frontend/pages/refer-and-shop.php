
<!-- 
<section class="refer-and-earn">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="refer-heading text-white fw-800">
                    Refer and Shop
                </h1>
                <h3 class="text-white fw-800">
                    Get Amazon Vouchers upto $1000
                </h3>
                <p class="text-white">
                    Refer new clients to NXG Markets, meet deposit & volume targets and get rewarded BIG with up to $1000 in Amazon vouchers. Bring Big to Win Big!
                </p>
                <div class="start-trading-button">
                    <a href="https://my.nxgmarkets.com/auth/register" class="theme-btn"><i class="fas fa-chart-line" aria-hidden="true"></i>Register Now</a>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="images/refer-and-shop-image.png" class="img-fluid" width="40%">
            </div>
        </div>
    </div>
</section> -->

<section class="why-join-ib pt-0">   
    <div class="container">
        
        <div class="row mt-5">
            
            <div class="col-md-8">
                <div class="banner">
                <img src="images/trade_earn.jpg" class="img-fluid"  alt="Trade Earn">
                </div>
                <h3 class="fw-800">
                Earn Passive Income with Annual Interest on Free Margin!
                </h3>
                <p>Discover how our exclusive Annual Interest on Free Margin feature allows you to earn 20% annual interest on unused funds in your trading account. Start growing your wealth effortlessly while boosting your trading potential with NXG Markets today!</p>
                <h3 class="fw-800">NXG Markets Annual Interest on Free Margin</h3>
                <ul class="list-inline">
                    <li class="fw-bold"><i class="bi bi-chevron-double-right fw-800 me-2    "></i>Earn Interest on Unused Funds</li>
                    <li class="fw-bold"><i class="bi bi-chevron-double-right fw-800 me-2    "></i>Enjoy Attractive Interest Rates</li>
                    <li class="fw-bold"><i class="bi bi-chevron-double-right fw-800 me-2    "></i>Daily Accrual, Monthly Crediting</li>
                    <li class="fw-bold"><i class="bi bi-chevron-double-right fw-800 me-2    "></i>Transparent Process</li>
                </ul>
                <h3 class="fw-800">How Much Could You Earn?</h3>
                <p>Example calculation of your interest:</p>
                <ol class="ms-5">
                    <li>Average Free Margin: $10,000 annually.</li>
                    <li>Interest Earned: 20% on $10,000 = $2,000 annually.</li>
                </ol>
                <p>With an annual interest rate of 20%, you would earn $2000 in interest, credited directly to your trading account.</p>
                <h3 class="fw-800">Why Choose Us?</h3>
                <ul class="list-inline">

                    <li class="fw-bold"><i class="bi bi-chevron-double-right fw-800 me-2"></i>Earn on idle funds & increase profitability.</li>
                    <li class="fw-bold"><i class="bi bi-chevron-double-right fw-800 me-2"></i>Get Financial Flexibility</li>
                    <li class="fw-bold"><i class="bi bi-chevron-double-right fw-800 me-2"></i>Supports your trading activities and strategies.</li>
                    <li class="fw-bold"><i class="bi bi-chevron-double-right fw-800 me-2"></i>Highly Rewarding</li>
                    <li class="fw-bold"><i class="bi bi-chevron-double-right fw-800 me-2"></i>Incentives for maintaining a healthy account balance.</li>
                </ul>
                <div class="ib-table mt-4">
                    <table>
                        
                        <tbody>
                            <tr>
                                <td class="text-center fw-bold">
                                    Trading Orders	
                                </td>
                                <td class="text-center fw-bold">
                                Annual interest rate
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="images/graph-bar.png" class="img-fluid" width="10%" alt="graph-bar">Below 5	0%
                                </td>
                                <td>
                                0%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="images/voucher.png" class="img-fluid" width="10%" alt="voucher">Above 5	
                                </td>
                                <td>
                                20%
                                </td>
                            </tr>
                        </tbody>
                    </table>
                  
                </div>
                <h3 class="fw-800">Terms and Conditions:</h3>
                <ol class="ms-5" >

                    <li class="fw-bold"></i>Annual interest withdrawal is contingent upon the trading account remaining active for at least one year.</li>  
                    <li class="fw-bold"></i>An active account is defined as one where a minimum of 5 closed orders occur every month consecutively over a 12-month period to qualify for the Annual Interest rate.</li>  
                    <li class="fw-bold"></i>If any trading account fails to meet the above conditions, or if the deposit is withdrawn before one year, all accrued interests will be automatically forfeited at the time of withdrawal.</li>  
                    <li class="fw-bold"></i>The annual interest offer is only valid for the Trade and Earn Account type. You must open a Trade & Earn type account to avail the Annual Interest.</li>  
                    
                </ol>
                <div class="start_earning_today_wraper">
                   <h2 >Start Earning Today!</h2>
                   <p>Open an account to maximise your trading potential with our Annual Interest on Free Margin feature. Let your trading capital work for you, even when not actively traded, and grow your wealth steadily and securely.</p>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="sidebar-sticky">
                <div class="side-form-wraper">
						<?php
							if ($message){
								echo '<h5 class="form-control">'.$message.'</h5>';
							}
						?>
                         <form   action="" method="post">
						 	<input type='hidden' name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
		                    <div class="mb-3">
		                    	<input type="text" class="form-control" name="full_name" id="full_name" aria-describedby="helpId" placeholder="Full Name" />
		                    </div>
		                    <div class="mb-3">
		                    	<input type="email" class="form-control" name="email_id" id="email_id" aria-describedby="emailHelpId" placeholder="Email" />
		                    </div>
		                    <div class="mb-3">
		                    	<input type="text" class="form-control" name="contact_no" id="contact_no" aria-describedby="helpId" placeholder="Number" />
		                    </div>
		                    <div class="mb-3">
		    	                <select class="form-select form-select-lg form-control"  name="location" id="location">
				                    <option value="" selected="selected" disabled="true">Select Your Location</option>
				                    <option value="AF">Afghanistan</option>
				                    <option value="AL">Albania</option>
				                    <option value="DZ">Algeria</option>
				                    <option value="AS">American Samoa</option>
				                    <option value="AD">Andorra</option>
				                    <option value="AO">Angola</option>
				                    <option value="AI">Anguilla</option>
				                    <option value="AQ">Antarctica</option>
				                    <option value="AG">Antigua and Barbuda</option>
				                    <option value="AR">Argentina</option>
				                    <option value="AM">Armenia</option>
				                    <option value="AW">Aruba</option>
				                    <option value="AU">Australia</option>
				                    <option value="AT">Austria</option>
				                    <option value="AZ">Azerbaijan</option>
				                    <option value="BS">Bahamas</option>
				                    <option value="BH">Bahrain</option>
				                    <option value="BD">Bangladesh</option>
				                    <option value="BB">Barbados</option>
				                    <option value="BY">Belarus</option>
				                    <option value="BE">Belgium</option>
				                    <option value="BZ">Belize</option>
				                    <option value="BJ">Benin</option>
				                    <option value="BM">Bermuda</option>
				                    <option value="BT">Bhutan</option>
				                    <option value="BO">Bolivia</option>
				                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
				                    <option value="BA">Bosnia and Herzegovina</option>
				                    <option value="BW">Botswana</option>
				                    <option value="BR">Brazil</option>
				                    <option value="IO">British Indian Ocean Territory</option>
				                    <option value="BN">Brunei Darussalam</option>
				                    <option value="BG">Bulgaria</option>
				                    <option value="BF">Burkina Faso</option>
				                    <option value="BI">Burundi</option>
				                    <option value="CV">Cabo Verde</option>
				                    <option value="KH">Cambodia</option>
				                    <option value="CM">Cameroon</option>
				                    <option value="CA">Canada</option>
				                    <option value="KY">Cayman Islands</option>
				                    <option value="CF">Central African Republic</option>
				                    <option value="TD">Chad</option>
				                    <option value="CL">Chile</option>
				                    <option value="CN">China</option>
				                    <option value="CX">Christmas Island</option>
				                    <option value="CC">Cocos (Keeling) Islands</option>
				                    <option value="CO">Colombia</option>
				                    <option value="KM">Comoros</option>
				                    <option value="CD">Congo (Democratic Republic of the)</option>
				                    <option value="CG">Congo (Republic of the)</option>
				                    <option value="CK">Cook Islands</option>
				                    <option value="CR">Costa Rica</option>
				                    <option value="HR">Croatia</option>
				                    <option value="CU">Cuba</option>
				                    <option value="CW">Curaçao</option>
				                    <option value="CY">Cyprus</option>
				                    <option value="CZ">Czech Republic</option>
				                    <option value="DK">Denmark</option>
				                    <option value="DJ">Djibouti</option>
				                    <option value="DM">Dominica</option>
				                    <option value="DO">Dominican Republic</option>
				                    <option value="EC">Ecuador</option>
				                    <option value="EG">Egypt</option>
				                    <option value="SV">El Salvador</option>
				                    <option value="GQ">Equatorial Guinea</option>
				                    <option value="ER">Eritrea</option>
				                    <option value="EE">Estonia</option>
				                    <option value="SZ">Eswatini</option>
				                    <option value="ET">Ethiopia</option>
				                    <option value="FK">Falkland Islands</option>
				                    <option value="FO">Faroe Islands</option>
				                    <option value="FJ">Fiji</option>
				                    <option value="FI">Finland</option>
				                    <option value="FR">France</option>
				                    <option value="GF">French Guiana</option>
				                    <option value="PF">French Polynesia</option>
				                    <option value="TF">French Southern Territories</option>
				                    <option value="GA">Gabon</option>
				                    <option value="GM">Gambia</option>
				                    <option value="GE">Georgia</option>
				                    <option value="DE">Germany</option>
				                    <option value="GH">Ghana</option>
				                    <option value="GI">Gibraltar</option>
				                    <option value="GR">Greece</option>
				                    <option value="GL">Greenland</option>
				                    <option value="GD">Grenada</option>
				                    <option value="GP">Guadeloupe</option>
				                    <option value="GU">Guam</option>
				                    <option value="GT">Guatemala</option>
				                    <option value="GG">Guernsey</option>
				                    <option value="GN">Guinea</option>
				                    <option value="GW">Guinea-Bissau</option>
				                    <option value="GY">Guyana</option>
				                    <option value="HT">Haiti</option>
				                    <option value="HM">Heard Island and McDonald Islands</option>
				                    <option value="VA">Holy See</option>
				                    <option value="HN">Honduras</option>
				                    <option value="HK">Hong Kong</option>
				                    <option value="HU">Hungary</option>
				                    <option value="IS">Iceland</option>
				                    <option value="IN">India</option>
				                    <option value="ID">Indonesia</option>
				                    <option value="IR">Iran</option>
				                    <option value="IQ">Iraq</option>
				                    <option value="IE">Ireland</option>
				                    <option value="IM">Isle of Man</option>
				                    <option value="IL">Israel</option>
				                    <option value="IT">Italy</option>
				                    <option value="JM">Jamaica</option>
				                    <option value="JP">Japan</option>
				                    <option value="JE">Jersey</option>
				                    <option value="JO">Jordan</option>
				                    <option value="KZ">Kazakhstan</option>
				                    <option value="KE">Kenya</option>
				                    <option value="KI">Kiribati</option>
				                    <option value="KP">Korea (Democratic People’s Republic of)</option>
				                    <option value="KR">Korea (Republic of)</option>
				                    <option value="KW">Kuwait</option>
				                    <option value="KG">Kyrgyzstan</option>
				                    <option value="LA">Lao People’s Democratic Republic</option>
				                    <option value="LV">Latvia</option>
				                    <option value="LB">Lebanon</option>
				                    <option value="LS">Lesotho</option>
				                    <option value="LR">Liberia</option>
				                    <option value="LY">Libya</option>
				                    <option value="LI">Liechtenstein</option>
				                    <option value="LT">Lithuania</option>
				                    <option value="LU">Luxembourg</option>
				                    <option value="MO">Macao</option>
				                    <option value="MG">Madagascar</option>
				                    <option value="MW">Malawi</option>
				                    <option value="MY">Malaysia</option>
				                    <option value="MV">Maldives</option>
				                    <option value="ML">Mali</option>
				                    <option value="MT">Malta</option>
				                    <option value="MH">Marshall Islands</option>
				                    <option value="MQ">Martinique</option>
				                    <option value="MR">Mauritania</option>
				                    <option value="MU">Mauritius</option>
				                    <option value="YT">Mayotte</option>
				                    <option value="MX">Mexico</option>
				                    <option value="FM">Micronesia (Federated States of)</option>
				                    <option value="MD">Moldova</option>
				                    <option value="MC">Monaco</option>
				                    <option value="MN">Mongolia</option>
				                    <option value="ME">Montenegro</option>
				                    <option value="MS">Montserrat</option>
				                    <option value="MA">Morocco</option>
				                    <option value="MZ">Mozambique</option>
				                    <option value="MM">Myanmar</option>
				                    <option value="NA">Namibia</option>
				                    <option value="NR">Nauru</option>
				                    <option value="NP">Nepal</option>
				                    <option value="NL">Netherlands</option>
				                    <option value="NC">New Caledonia</option>
				                    <option value="NZ">New Zealand</option>
				                    <option value="NI">Nicaragua</option>
				                    <option value="NE">Niger</option>
				                    <option value="NG">Nigeria</option>
				                    <option value="NU">Niue</option>
				                    <option value="NF">Norfolk Island</option>
				                    <option value="MP">Northern Mariana Islands</option>
				                    <option value="NO">Norway</option>
				                    <option value="OM">Oman</option>
				                    <option value="PK">Pakistan</option>
				                    <option value="PW">Palau</option>
				                    <option value="PS">Palestine, State of</option>
				                    <option value="PA">Panama</option>
				                    <option value="PG">Papua New Guinea</option>
				                    <option value="PY">Paraguay</option>
				                    <option value="PE">Peru</option>
				                    <option value="PH">Philippines</option>
				                    <option value="PN">Pitcairn</option>
				                    <option value="PL">Poland</option>
				                    <option value="PT">Portugal</option>
				                    <option value="PR">Puerto Rico</option>
				                    <option value="QA">Qatar</option>
				                    <option value="RE">Réunion</option>
				                    <option value="RO">Romania</option>
				                    <option value="RU">Russian Federation</option>
				                    <option value="RW">Rwanda</option>
				                    <option value="BL">Saint Barthélemy</option>
				                    <option value="KN">Saint Kitts and Nevis</option>
				                    <option value="LC">Saint Lucia</option>
				                    <option value="MF">Saint Martin (French part)</option>
				                    <option value="SX">Saint Martin (Dutch part)</option>
				                    <option value="PM">Saint Pierre and Miquelon</option>
				                    <option value="VC">Saint Vincent and the Grenadines</option>
				                    <option value="WS">Samoa</option>
				                    <option value="SM">San Marino</option>
				                    <option value="ST">Sao Tome and Principe</option>
				                    <option value="SA">Saudi Arabia</option>
				                    <option value="SN">Senegal</option>
				                    <option value="RS">Serbia</option>
				                    <option value="SC">Seychelles</option>
				                    <option value="SL">Sierra Leone</option>
				                    <option value="SG">Singapore</option>
				                    <option value="SX">Sint Maarten (Dutch part)</option>
				                    <option value="SK">Slovakia</option>
				                    <option value="SI">Slovenia</option>
				                    <option value="SB">Solomon Islands</option>
				                    <option value="SO">Somalia</option>
				                    <option value="ZA">South Africa</option>
				                    <option value="GS">South Georgia and the South Sandwich Islands</option>
				                    <option value="SS">South Sudan</option>
				                    <option value="ES">Spain</option>
				                    <option value="LK">Sri Lanka</option>
				                    <option value="SD">Sudan</option>
				                    <option value="SR">Suriname</option>
				                    <option value="SJ">Svalbard and Jan Mayen</option>
				                    <option value="SE">Sweden</option>
				                    <option value="CH">Switzerland</option>
				                    <option value="SY">Syrian Arab Republic</option>
				                    <option value="TW">Taiwan</option>
				                    <option value="TJ">Tajikistan</option>
				                    <option value="TZ">Tanzania, United Republic of</option>
				                    <option value="TH">Thailand</option>
				                    <option value="TG">Togo</option>
				                    <option value="TK">Tokelau</option>
				                    <option value="TO">Tonga</option>
				                    <option value="TT">Trinidad and Tobago</option>
				                    <option value="TN">Tunisia</option>
				                    <option value="TR">Turkey</option>
				                    <option value="TM">Turkmenistan</option>
				                    <option value="TC">Turks and Caicos Islands</option>
				                    <option value="TV">Tuvalu</option>
				                    <option value="UG">Uganda</option>
				                    <option value="UA">Ukraine</option>
				                    <option value="AE">United Arab Emirates</option>
				                    <option value="GB">United Kingdom</option>
				                    <option value="US">United States of America</option>
				                    <option value="UM">United States Minor Outlying Islands</option>
				                    <option value="UY">Uruguay</option>
				                    <option value="UZ">Uzbekistan</option>
				                    <option value="VU">Vanuatu</option>
				                    <option value="VE">Venezuela</option>
				                    <option value="VN">Viet Nam</option>
				                    <option value="VG">Virgin Islands (British)</option>
				                    <option value="VI">Virgin Islands (U.S.)</option>
				                    <option value="WF">Wallis and Futuna</option>
				                    <option value="EH">Western Sahara</option>
				                    <option value="YE">Yemen</option>
				                    <option value="ZM">Zambia</option>
				                    <option value="ZW">Zimbabwe</option>
		    	                </select>
		                    </div>
                            <div class="mb-3">
                                <button type="submit" name="submit" id="submit" class="">
                                    Submit
                                </button>
                            </div>
                        
	                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- <section class="how-to-join">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="fw-800 text-white">
                    Easy Steps to Get Started
                </h2>
                <p class="text-white">
                    Join the Contest & Start Earning: Easy Steps to Refer & Shop!
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="join-image-box one text-center">
                    <img src="images/edit-1.png" class="img-fluid" width="30%">
                    <h4 class="text-primary fw-800 mt-3">
                        Register
                    </h4>
                    <p class="text-white">
                        Register with NXG Markets and set up your IB account.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="join-image-box one text-center">
                    <img src="images/refer-1.png" class="img-fluid" width="30%">
                    <h4 class="text-primary fw-800 mt-3">
                        Refer Clients
                    </h4>
                    <p class="text-white">
                        Get clients to register and make deposits in the account.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="join-image-box one text-center">
                    <img src="images/earning.png" class="img-fluid" width="30%">
                    <h4 class="text-primary fw-800 mt-3">
                        Start Earning
                    </h4>
                    <p class="text-white">
                        Clear the minimum criteria and start earning as an NXG Markets IB.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="join-image-box text-center">
                    <img src="images/Shop-Enjoy.png" class="img-fluid" width="30%">
                    <h4 class="text-primary fw-800 mt-3">
                        Shop & Enjoy
                    </h4>
                    <p class="text-white">
                        Win Amazon voucher & spend on anything you desire.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="start-referring">
    <div class="container z-1 position-relative">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="text-primary fw-800">
                    Start Referring & Start Earning
                </h2>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="start-refer-image-box text-center">
                    <img src="images/high-commision-icon.png" class="img-fluid">
                    <h3 class="fw-800 mt-3">
                        High Commissions
                    </h3>
                    <p>
                        Get high commissions for every client you refer.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="start-refer-image-box text-center">
                    <img src="images/unlimited-growth-icon.png" class="img-fluid">
                    <h3 class="fw-800 mt-3">
                        Unlimited Growth
                    </h3>
                    <p>
                        Grow your client base and earn with every client.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="start-refer-image-box text-center">
                    <img src="images/01_Account-Set-Up.png" class="img-fluid">
                    <h3 class="fw-800 mt-3">
                        Backend Support
                    </h3>
                    <p>
                        Get all the help in setting up your IB setup.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="terms-conditions">
    <div class="container">
        <div class="row tnc-box">
            <div class="col-md-12 text-center">
                <h2 class="text-primary fw-800">
                    Terms & Conditions
                </h2>
            </div>
            <div class="col-md-12 mt-3">
                <ol>
                    <li>
                        This Refer & Shop program is valid from June 1st, 2024 to June 30th, 2024.
                    </li>
                    <li>
                        A new active trader is defined as a new registered individual, not having any account with NXG Markets to date.
                    </li>
                    <li>
                        After withdrawal, the total remaining deposit must be at least 50% of the gross deposit amount.
                    </li>
                    <li>
                        To be eligible for a prize, an affiliate must have a minimum of 5 accounts in a month.
                    </li>
                    <li>
                        Reward will be calculated on 1st of June 2024.
                    </li>
                    <li>
                        Reward will be credit on 5th-10th of June 2024.
                    </li>
                    <li>
                        Sub-accounts do not count for “new open account” requirement.
                    </li>
                    <li>
                        Internal transfers between accounts are not eligible for meeting the required “deposit” criteria.
                    </li>
                    <li>
                        NXG Markets reserves the right to change the terms and conditions or cancel the competition at any time without any prior notice.
                    </li>
                    <li>
                        NXG Markets trading conditions apply on all trading accounts referred by the contestants.
                    </li>
                    <li>
                        NXG Markets has the right to discard any trades that are not compliant with the trading conditions from the volume calculation.
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section> -->

