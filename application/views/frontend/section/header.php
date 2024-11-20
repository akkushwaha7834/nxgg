<?php
$this->load->helper('url');

$current_uri = uri_string();
$segments = explode('/', $current_uri);
$page_name = end($segments);
$canonical = base_url() . $page_name;
if ($page_name) {
} else {
   $page_name = "home";
}

$meta_description = '';
$keywords = '';

   $seo_data = $this->db->get_where('blogdata', array('slugs' => $page_name))->result_array();
if (!$seo_data){
   $seo_data = $this->db->get_where('seodata', array('pagename' => $page_name))->result_array();
}
if ($seo_data) {
   // $row = reset($seo_data);
   $seo_title = $seo_data[0]['seotitle'];
   $keywords = $seo_data[0]['seokeyword'];
   $meta_description = $seo_data[0]['seodiscr'];
}


?>
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <title>Start Your Own Forex Brokerage | Forex Broker Services</title> -->
   <title><?= $seo_title ?></title>
   <meta name="description" content="<?= $meta_description ?>" />
   <meta name="keywords" content="<?= $keywords ?>" />
   <link rel="canonical" href="<?= $canonical ?>">
    <meta property="og:url" content="https://www.nxgmarkets.com/">
<meta property="og:type" content="website">
<meta property="og:title" content="Most Popular Forex Trading Broker - NXGMarkets">
<meta property="og:description" content="Explore NXGMarkets, the most popular forex trading broker offering high leverage options Maximize your profits with our cutting edge tools and technology">
<meta property="og:image" content="https://www.nxgmarkets.com/images/nxg-feature.jpg">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="nxgmarkets.com">
<meta property="twitter:url" content="https://www.nxgmarkets.com/">
<meta name="twitter:title" content="Most Popular Forex Trading Broker - NXGMarkets">
<meta name="twitter:description" content="Explore NXGMarkets, the most popular forex trading broker offering high leverage options Maximize your profits with our cutting edge tools and technology">
<meta name="twitter:image" content="https://www.nxgmarkets.com/images/nxg-feature.jpg">
   <meta name="twitter:app:id:googleplay" content="">
   <meta name="twitter:app:country" content="India">
   <link rel="icon" href="<?php echo base_url(); ?>images/favicon.webp" type="image/x-icon">
   <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.webp" type="image/x-icon">
   <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/style.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/responsive.css">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <link rel="stylesheet" href="<?php echo base_url(); ?>/vendor/font-awesome/css/all.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
   <!-- bootstrap icon -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
   <meta name="google-site-verification" content="CXIWdGNFSYLJhJvT1nXKgFoPNSBAqcvPii8phOID704" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CSF9EKHCLV"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-CSF9EKHCLV');
    </script>
</head>

<body>
   <?php include_once('trading-view-widget.php') ?>
   <header class="header navbar-dark" id="StickyHeader">
      <nav class="navbar navbar-expand-lg p-0">
         <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">
               <img src="<?php echo base_url(); ?>images/nxg-logo.png" class="header-logo" alt="Logo" title="nxg Logo">
            </a>
            <button class="mobile-menu-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
               aria-controls="offcanvasRight">
               <span class="toggler-icon fa-solid fa-bars text-white"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Trading
                        <svg class="ms-1" width="12" height="6" viewBox="0 0 12 6" fill="black"
                           xmlns="http://www.w3.org/2000/svg">
                           <path d="M11 1L5.99999 5L1 1" stroke="white" stroke-width="1.2" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </a>
                     <div class="dropdown-menu">
                        <div class="container">
                           <button class="border-0 bg-transparent text-white mb-3 d-block d-lg-none">
                              <i class="fa-solid fa-chevron-left"></i>
                              <span>Back</span>
                           </button>
                           <div class="h-vh-80 overflow-y-auto overflow-x-hidden">
                              <ul class="list-unstyled row gx-5 gy-4">
                                 <div class="col-lg-3">
                                    <div class="h6 text-uppercase mb-4">Accounts</div>
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-lg-12 px-0">
                                             <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>account-type">Account Types</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>deposit-withdrawal">Deposit &
                                                      Withdrawal</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>safety-of-funds">Safety of
                                                      Funds</a>
                                                </li>
                                             </ol>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3">
                                    <div class="h6 text-uppercase mb-4">Instruments</div>
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-lg-12 px-0">
                                             <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>forex">Forex</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>commodities">Commodities</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>indices">Indices</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>stocks">Shares</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>cryptocurrencies">Cryptos</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>trading-conditions">Trading
                                                      Conditions</a>
                                                </li>
                                             </ol>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3">
                                    <div class="h6 text-uppercase mb-4">Trading Platforms</div>
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-lg-12 px-0">
                                             <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>mt5">Meta Trader 5</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>ctrader">cTrader</a>
                                                </li>
                                                <!-- <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>copytrading">CopyTrading</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="https://leaderboard.nxgmarkets.com/" target="_blank">Leaderboard</a>
                                                </li> -->
                                             </ol>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3">
                                    <div class="h6 text-uppercase mb-4">Trade With a Multi-Body Regulated Broker</div>
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-lg-12 px-0">
                                             <p>
                                                Access Institutional liquidity with precise execution and low
                                                commissions.
                                             </p>
                                             <a href="https://my.nxgmarkets.com/" class="btttn-secondary">Login</a><br>
                                             <p>
                                                <small>Trading involves a high level of risk</small>
                                             </p>
                                             <p>
                                                <a href="https://my.nxgmarkets.com/auth/register"
                                                   class="btttn-primary">Try Free Demo</a>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tools
                        <svg class="ms-1" width="12" height="6" viewBox="0 0 12 6" fill="black"
                           xmlns="http://www.w3.org/2000/svg">
                           <path d="M11 1L5.99999 5L1 1" stroke="white" stroke-width="1.2" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </a>
                     <div class="dropdown-menu">
                        <div class="container">
                           <button class="border-0 bg-transparent text-white mb-3 d-block d-lg-none">
                              <i class="fa-solid fa-chevron-left"></i>
                              <span>Back</span>
                           </button>
                           <div class="h-vh-80 overflow-y-auto overflow-x-hidden">
                              <ul class="list-unstyled row gx-5 gy-4">
                                 <div class="col-lg-3">
                                    <div class="h6 text-uppercase mb-4">Accounts</div>
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-lg-12 px-0">
                                             <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>trading-calculator">Trading
                                                      Calculators</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>trading-signals">Trading
                                                      Signals</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>autochartist">Autochartist</a>
                                                </li>
                                             </ol>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3">
                                    <div class="h6 text-uppercase mb-4">Education</div>
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-lg-12 px-0">
                                             <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>videos">Videos</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>webinars">Webinars</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>seminars">Seminars</a>
                                                </li>
                                             </ol>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3">
                                 </div>
                                 <div class="col-lg-3">
                                    <div class="h6 text-uppercase mb-4">ENHANCE YOUR TRADING WITH SOPHISTICATED TOOLS
                                    </div>
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-lg-12 px-0">
                                             <p>
                                                Join a multi-body regulated broker that prioritizes your trading needs.
                                                Discover our commitment to transparency, innovative technology, and
                                                outstanding service.
                                             </p>
                                             <a href="https://my.nxgmarkets.com/auth/register"
                                                class="btttn-secondary">Start Trading</a><br>
                                             <p>
                                                <small>Trading involves a high level of risk</small>
                                             </p>
                                             <p>
                                                <a href="https://my.nxgmarkets.com/auth/register"
                                                   class="btttn-primary">Try Free Demo</a>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Partners
                        <svg class="ms-1" width="12" height="6" viewBox="0 0 12 6" fill="black"
                           xmlns="http://www.w3.org/2000/svg">
                           <path d="M11 1L5.99999 5L1 1" stroke="white" stroke-width="1.2" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </a>
                     <div class="dropdown-menu">
                        <div class="container">
                           <button class="border-0 bg-transparent text-white mb-3 d-block d-lg-none">
                              <i class="fa-solid fa-chevron-left"></i>
                              <span>Back</span>
                           </button>
                           <div class="h-vh-80 overflow-y-auto overflow-x-hidden">
                              <ul class="list-unstyled row gx-5 gy-4">
                                 <div class="col-lg-3">
                                    <div class="h6 text-uppercase mb-4">Partners</div>
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-lg-12 px-0">
                                             <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>nxgmarketsaffiliates">Affiliate
                                                      Program</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>nxgmarkets-ibs">Introducing Broker
                                                      (IB)</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>advantages">Advantages</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>marketing-tools">Marketing
                                                      Tools</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>commission-structure">Commission
                                                      structure</a>
                                                </li>
                                             </ol>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3">
                                 </div>
                                 <div class="col-lg-3">
                                 </div>
                                 <div class="col-lg-3">
                                    <div class="h6 text-uppercase mb-4">JOIN A REWARDING PARTNERSHIP WITH NXG MARKETS
                                    </div>
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-lg-12 px-0">
                                             <p>
                                                Become a part of our extensive partner network. Enjoy competitive
                                                commission structures and exceptional support as an Affiliate or
                                                Introducing Broker.
                                             </p>
                                             <a href="https://my.nxgmarkets.com/auth/register"
                                                class="btttn-secondary">Start Trading</a><br>
                                             <p>
                                                <small>Trading involves a high level of risk</small>
                                             </p>
                                             <p>
                                                <a href="https://my.nxgmarkets.com/auth/register"
                                                   class="btttn-primary">Try Free Demo</a>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Promotions
                        <svg class="ms-1" width="12" height="6" viewBox="0 0 12 6" fill="black"
                           xmlns="http://www.w3.org/2000/svg">
                           <path d="M11 1L5.99999 5L1 1" stroke="white" stroke-width="1.2" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </a>
                     <div class="dropdown-menu">
                        <div class="container">
                           <button class="border-0 bg-transparent text-white mb-3 d-block d-lg-none">
                              <i class="fa-solid fa-chevron-left"></i>
                              <span>Back</span>
                           </button>
                           <div class="h-vh-80 overflow-y-auto overflow-x-hidden">
                              <ul class="list-unstyled row gx-5 gy-4">
                                 <div class="col-lg-3">
                                    <div class="h6 text-uppercase mb-4">Our Promotions</div>
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-lg-12 px-0">
                                             <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">
                                                <!--<li class="col-12 mb-2">-->
                                                <!--   <a href="<?php echo base_url(); ?>apple-month-ib-contest-2">APPLE MONTH IB CONTEST 2</a>-->
                                                <!--</li>-->
                                                <!--<li class="col-12 mb-2">-->
                                                <!--   <a href="<?php echo base_url(); ?>festival-fair-ib-contest">FESTIVAL FAIR IB CONTEST</a>-->
                                                <!--</li>-->
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>annual-interest">ANNUAL INTEREST</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>christmas-ib-contest">CHRISTMAS IB CONTEST</a>
                                                </li>
                                             </ol>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3">
                                 </div>
                                 <div class="col-lg-3">
                                 </div>
                                 <div class="col-lg-3">
                                    <div class="h6 text-uppercase mb-4">BOOST YOUR TRADING WITH EXCLUSIVE PROMOTIONS
                                    </div>
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-lg-12 px-0">
                                             <p>
                                                Explore our latest offers and promotions to elevate your trading
                                                experience. Enjoy special bonuses, rebates, and much more.
                                             </p>
                                             <a href="https://my.nxgmarkets.com/auth/register"
                                                class="btttn-secondary">Start Trading</a><br>
                                             <p>
                                                <small>Trading involves a high level of risk</small>
                                             </p>
                                             <p>
                                                <a href="https://my.nxgmarkets.com/auth/register"
                                                   class="btttn-primary">Try Free Demo</a>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About
                        <svg class="ms-1" width="12" height="6" viewBox="0 0 12 6" fill="black"
                           xmlns="http://www.w3.org/2000/svg">
                           <path d="M11 1L5.99999 5L1 1" stroke="white" stroke-width="1.2" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </a>
                     <div class="dropdown-menu">
                        <div class="container">
                           <button class="border-0 bg-transparent text-white mb-3 d-block d-lg-none">
                              <i class="fa-solid fa-chevron-left"></i>
                              <span>Back</span>
                           </button>
                           <div class="h-vh-80 overflow-y-auto overflow-x-hidden">
                              <ul class="list-unstyled row gx-5 gy-4">
                                 <div class="col-lg-3">
                                    <div class="h6 text-uppercase mb-4">Who We Are</div>
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-lg-12 px-0">
                                             <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>about">About Us</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="#">Mission, Vision & Values</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>careers">Careers</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>contact-us">Contact Us</a>
                                                </li>
                                             </ol>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3">
                                    <div class="h6 text-uppercase mb-4">Why Forex</div>
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-lg-12 px-0">
                                             <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>why-trade-forex">Why Trade
                                                      Forex</a>
                                                </li>
                                             </ol>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3">
                                    <div class="h6 text-uppercase mb-4">Regulations</div>
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-lg-12 px-0">
                                             <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>regulations-licenses">Regulations &
                                                      Licenses</a>
                                                </li>
                                             </ol>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3">
                                    <div class="h6 text-uppercase mb-4">EXPERIENCE THE NXG MARKETS DIFFERENCE</div>
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-lg-12 px-0">
                                             <p>
                                                Join a multi-body regulated broker that prioritizes your trading needs.
                                                Discover our commitment to transparency, innovative technology, and
                                                outstanding service.
                                             </p>
                                             <a href="https://my.nxgmarkets.com/" class="btttn-secondary">Login</a><br>
                                             <p>
                                                <small>Trading involves a high level of risk</small>
                                             </p>
                                             <p>
                                                <a href="https://my.nxgmarkets.com/auth/register"
                                                   class="btttn-primary">Try Free Demo</a>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Copy Trading
                        <svg class="ms-1" width="12" height="6" viewBox="0 0 12 6" fill="black"
                           xmlns="http://www.w3.org/2000/svg">
                           <path d="M11 1L5.99999 5L1 1" stroke="white" stroke-width="1.2" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </a>
                     <div class="dropdown-menu">
                        <div class="container">
                           <button class="border-0 bg-transparent text-white mb-3 d-block d-lg-none">
                              <i class="fa-solid fa-chevron-left"></i>
                              <span>Back</span>
                           </button>
                           <div class="h-vh-80 overflow-y-auto overflow-x-hidden">
                              <ul class="list-unstyled row gx-5 gy-4">
                                 <div class="col-lg-9">
                                    <div class="h6 text-uppercase mb-4">Trading Platforms</div>
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-lg-12 px-0">
                                             <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">
                                                <li class="col-12 mb-2">
                                                <a href="https://leaderboard.nxgmarkets.com/" target="_blank">Leaderboard</a>
                                                </li>
                                                <li class="col-12 mb-2">
                                                   <a href="<?php echo base_url(); ?>copytrading">Copy Trading</a>
                                                </li>
                                             </ol>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="col-lg-3">
                                    <div class="h6 text-uppercase mb-4">EXPERIENCE THE NXG MARKETS DIFFERENCE</div>
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-lg-12 px-0">
                                             <p>
                                                Join a multi-body regulated broker that prioritizes your trading needs.
                                                Discover our commitment to transparency, innovative technology, and
                                                outstanding service.
                                             </p>
                                             <a href="https://my.nxgmarkets.com/" class="btttn-secondary">Login</a><br>
                                             <p>
                                                <small>Trading involves a high level of risk</small>
                                             </p>
                                             <p>
                                                <a href="https://my.nxgmarkets.com/auth/register"
                                                   class="btttn-primary">Try Free Demo</a>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a href="https://education.nxgmarkets.com/" class="nav-link" role="button" aria-expanded="false">
                        Education
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?php echo base_url(); ?>blog" class="nav-link" role="button" aria-expanded="false">
                        Blog
                     </a>
                  </li>
               </ul>
            </div>
            <div class="request-quote">
               <a href="https://my.nxgmarkets.com/" class="theme-btn theme-btn2">Login</a>
               <a href="https://my.nxgmarkets.com/auth/register" class="theme-btn theme-btn2">Signup</a>
               <!-- <a href="<?php echo base_url(); ?>admin" class="theme-btn theme-btn2"
                  title="<?php echo "(Logged-in as: " . $this->session->userdata['login_email']; ?>">
                  <?php if ($this->session->userdata['login_role']) {
                     echo "Dashboard";
                  } else {
                     echo "Login";
                  }
                  ?>
               </a>
               <a href="<?php echo base_url(); ?>admin/paneluser/add" class="theme-btn theme-btn2">Signup</a> -->
            </div>
         </div>
      </nav>
      <div class="offcanvas offcanvas-end mobile-menu bg-dark" tabindex="-1" id="offcanvasRight"
         aria-labelledby="offcanvasRightLabel">
         <div class="offcanvas-header justify-content-end">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body p-0">
            <div class="mobile-menu-wrap">
               <ul class="mobile-menu-list">
                  <li>
                     <a href="" class="menu-link moblie-dropdwon">Trading <i class="fa-solid fa-chevron-down"></i></a>
                     <div class="dropdown-mb-menu">
                        <ul>
                           <li>
                              <a href="<?php echo base_url(); ?>account-type">Account Types</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>deposit-withdrawal">Deposit & Withdrawal</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>safety-of-funds">Safety of Funds</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>forex">Forex</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>commodities">Commodities</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>indices">Indices</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>stocks">Shares</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>cryptocurrencies">Cryptos</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>trading-conditions">Trading Conditions</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>mt5">Meta Trader 5</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>ctrader">cTrader</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>copytrading">CopyTrading</a>
                           </li>
                           <li>
                              <a href="https://leaderboard.nxgmarkets.com/" target="_blank">Leaderboard</a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li>
                     <a href="" class="menu-link moblie-dropdwon">Tools <i class="fa-solid fa-chevron-down"></i></a>
                     <div class="dropdown-mb-menu">
                        <ul>
                           <li>
                              <a href="<?php echo base_url(); ?>trading-calculator">Trading Calculators</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>trading-signals">Trading Signals</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>autochartist">Autochartist</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>videos">Videos</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>webinars">Webinars</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>seminars">Seminars</a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li>
                     <a href="" class="menu-link moblie-dropdwon">Partners <i class="fa-solid fa-chevron-down"></i></a>
                     <div class="dropdown-mb-menu">
                        <ul>
                           <li>
                              <a href="<?php echo base_url(); ?>nxgmarketsaffiliates">Affiliate Program</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>nxgmarkets-ibs">Introducing Broker (IB)</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>advantages">Advantages</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>marketing-tools">Marketing Tools</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>commission-structure">Commission structure</a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li>
                     <a href="" class="menu-link moblie-dropdwon">Promotions <i class="fa-solid fa-chevron-down"></i></a>
                     <div class="dropdown-mb-menu">
                        <ul>
                           <!-- <li>
                              <a href="<?php echo base_url(); ?>festival-fair-ib-contest">Festival Fair IB Contest</a>
                           </li> -->
                           <li>
                              <a href="<?php echo base_url(); ?>annual-interest">Annual Interest</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>christmas-ib-contest">CHRISTMAS IB CONTEST</a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li>
                     <a href="" class="menu-link moblie-dropdwon">About <i class="fa-solid fa-chevron-down"></i></a>
                     <div class="dropdown-mb-menu">
                        <ul>
                           <li>
                              <a href="<?php echo base_url(); ?>about">About Us</a>
                           </li>
                           <li>
                              <a href="#">Mission, Vision & Values</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>careers">Careers</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>contact-us">Contact Us</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>why-trade-forex">Why Trade Forex</a>
                           </li>
                           <li>
                              <a href="<?php echo base_url(); ?>regulations-licenses">Regulations & Licenses</a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li>
                     <a href="" class="menu-link moblie-dropdwon">Copy Trading <i class="fa-solid fa-chevron-down"></i></a>
                     <div class="dropdown-mb-menu">
                        <ul>
                        <li>
                              <a href="<?php echo base_url(); ?>copytrading">CopyTrading</a>
                           </li>
                           <li>
                              <a href="https://leaderboard.nxgmarkets.com/" target="_blank">Leaderboard</a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li>
                     <a href="https://education.nxgmarkets.com/" class="menu-link">Education</a>
                  </li>
                  <li>
                     <a href="<?php echo base_url(); ?>blog" class="menu-link">Blog</a>
                  </li>
                  <li class="ps-2 mt-4">
                     <a href="https://my.nxgmarkets.com/" class=" bttn-primary">Login</a>
                     <!-- <a href="<?php echo base_url(); ?>admin" class=" bttn-primary">Login</a> -->
                     <a href="#" class=" bttn-secondary">Signup</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </header>