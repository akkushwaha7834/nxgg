<section class="black-friday-banner graident_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="head">
                    <h2>Black Friday Extra Bonus </h2>
                    <h5>Celebrate Black Friday with a 29% Bonus You Can Withdraw!</h5>
                    <p>This Black Friday, we’re giving you more reasons to celebrate! Get a 29% Deposit Bonus that’s not
                        just for trading—it’s withdrawable once you meet the trading requirements.
                    </p>
                    <a  class="theme-btn" data-bs-toggle="modal" data-bs-target="#FormModal" ><i class="fas fa-chart-line" aria-hidden="true"></i>Participate</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-right">
                    <img src="images/bf-bonus-banner.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="black-firday-details bg-light">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 text-center">
                <h2 class="fw-bold mb-5 text-black">
                    Black Friday <span class="pink-text">
                        Promotion Details
                    </span>
                </h2>

            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="details-box">
                    <div class="logo">
                        <img src="images/black-friday-discount.svg" alt="">
                    </div>
                    <h3>Bonus Amount</h3>
                    <p>29% on every deposit made during the promotion period.</p>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="details-box bg-pink">
                    <div class="logo">
                        <img src="images/black-friday-promotion-period.svg" alt="">
                    </div>
                    <h3>Promotion Period</h3>
                    <p> November 25th - 31st.</p>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="details-box">
                    <div class="logo">
                        <img src="images/black-friday-eligibility.svg" alt="">
                    </div>
                    <h3>Eligibility</h3>
                    <p>Available to all traders (new and existing).
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- how to join start -->
<section class="how-to-join bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="fw-800 text-black">
                    How to Join The IB Contest?
                </h2>
                <p class="text-black">
                    Joining is easy just follow these simple steps:
                </p>
            </div>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="join-image-box one text-center">
                    <img src="images/edit-2.png" class="img-fluid w-25">
                    <h4 class=" fw-800 mt-3">
                        Register
                    </h4>
                    <p class="text-black">
                        Register with NXG Markets and set up your IB account.
                    </p>
                    <img src="images/step-arrow.png" class="img-fluid step_arrow" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="join-image-box one text-center">
                    <img src="images/refer-2.png" class="img-fluid w-25">
                    <h4 class=" fw-800 mt-3">
                        Refer Clients
                    </h4>
                    <p class="text-black">
                        Get clients to register and make deposits in the account.
                    </p>
                    <img src="images/step-arrow.png" class="img-fluid step_arrow" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="join-image-box text-center">
                    <img src="images/earning-2.png" class="img-fluid w-25">
                    <h4 class=" fw-800 mt-3">
                        Start Earning
                    </h4>
                    <p class="text-black">
                        Clear the minimum criteria and start earning as an NXG Markets IB.

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- how to join end -->

<!-- term and condition start -->
<section class="start-referring-two" style="background-image: url(images/termandcondition.png), linear-gradient(#94204c, rgb(0, 0, 0));">
    <div class="container  ">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="fw-800">
                    Terms &amp; Conditions
                </h2>
                <button class="terms_condition" id="tm" data-bs-toggle="modal" data-bs-target="#exampleModal">Terms &amp; Conditions</button>
            </div>
        </div>

    </div>
</section>
<!-- term and condition end-->
 <!-- Form  Modal -->
<div class="modal ib-contest-m fade" id="FormModal" tabindex="-1" aria-labelledby="FormModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-body p-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="side-form-wraper mt-0 ib-contest-frm border-radius-0">
                          <form action="" method="post">
                          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <!--<input type="hidden" name="csrf_test_name" value="818b494def16b5e678ceceda28027b53">-->
                            <div class="mb-3">
                                <input type="text" class="form-control" name="full_name" id="full_name" aria-describedby="helpId" placeholder="Full Name">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="contact_no" id="contact_no" aria-describedby="helpId" placeholder="Number">
                            </div>
                            <div class="mb-3">
                                <select class="form-select form-select-lg form-control" name="location" id="location">
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
                                <button type="submit" name="submit" id="submit" class="frm-submit">
                                    Submit
                                </button>
                            </div>
                        
                        </form>
                    </div>
            </div>

        </div>
    </div>
</div>
<!-- terms and conditions Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Terms & Conditions</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ol class="p-4 ol-list">
                    <li>The contest runs from November 1st, 2024 to December 20th, 2024.</li>
                    <li>Rewards will be distributed on 25th December, following verification of eligibility criteria.</li>
                    <li>Rewards are determined by Net Deposits and the number of Lots traded during the contest period.</li>
                    <li>Deposits must be made within the contest period to be eligible.</li>
                    <li>The promotion is not available for ECN and Raw account types.</li>
                    <li>Sub-accounts are not considered for the "new open account" requirement.</li>
                    <li>Internal transfers between accounts are not eligible and do not count towards the deposit requirement.</li>
                    <li>Participants must comply with NXG Markets' standard trading conditions on all referred accounts. Any trades that violate these conditions will be excluded from the reward calculation.</li>
                    <li>Rewards will only be given to clients with verified and active accounts.</li>
                    <li>NXG Markets reserves the right to modify or cancel the contest, its rewards, or its terms at any time without prior notice.</li>
                    <li>NXG Markets may exclude participants found to be engaging in fraudulent activities or manipulative trading practices from the contest.</li>
                    <li>Any account that becomes inactive or is closed during the contest period will be disqualified from reward eligibility.</li>
                    <li>The contest is subject to all applicable NXG Markets’ rules and regulations.</li>

                </ol>
            </div>

        </div>
    </div>
</div>


<style>
    section {
        padding: 100px 30px;
    }

    .black-friday-banner {
        padding: 100px 0px;
    }

    .graident_bg {
        background-image: radial-gradient(#94204c, rgb(0, 0, 0));

    }

    .black-friday-banner .head h2 {
        font-size: 55px;
        color: white !important;
    }

    .black-friday-banner .head h5 {
        color: white !important;
    }

    .black-friday-banner .head p {
        padding: 20px 0px;
        color: white;
    }

    .pink-text {
        color: var(--purple)
    }

    .theme-btn {
        position: relative;
        display: inline-block;
        overflow: hidden;
        font-size: 17px;
        padding: 12px 60px 11px 30px;
        background: #fff;
        line-height: 25px;
        color: var(--purple);
        border: 2px solid var(--purple);
        font-weight: 500;
        border-radius: 30px;
        text-transform: capitalize;
        transition: all 500ms ease;
        cursor: pointer;
        z-index: 1;
        text-decoration: none;
    }

    .details-box {
        /* border: 2px solid black; */
        height: 100%;
        padding: 20px;
        border-radius: 5px;

        box-shadow: 0px 0px 5px 5px rgba(181, 44, 97, 0.15);
    }

    .bg-pink {
        color: white;
        background-color: var(--purple);
        transform: scale(1.15);
    }

    .details-box h3 {
        margin: 10px 0px;
    }

    .black_friday_trem_contidion {
        position: relative;
    }

 
</style>