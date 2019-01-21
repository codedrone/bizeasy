<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Bizeazy - 1 click shopify e-commerce app</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'> -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/587e1c948416045a868070cb/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
        <!-- Place favicon.ico in the root directory -->
        {include file="./shared/commonHome_css.tpl" title="Common CSS"}
        {include file="./shared/common_top_js.tpl" title="Common Top JS"}
    </head>
    <style type="text/css">
        .demodownload
        {
            color: #b5e61d !important;
            font-weight: 700;
        }
        .btn-app-store {
            display: inline-block;
            /*margin-right: 16px;*/
        }
        .btn-google-play {
            display: inline-block;
        }
        .full-width-row-play-btn {
            float: left;
            width: 100%;
            text-align: center;
            margin-bottom: 45px;
        }
        .help-block
            {
                float: left;
                color: red;
                margin-top: -1px;
                font-size: 28px;

            }
    </style>
    <body data-spy="scroll" data-target="#main-navbar">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class='preloader'>
            <div class='loaded'>&nbsp;</div>
        </div>
        <div id="page" class="page">
            <div class="mainnav">
                <nav class="navbar fixed-nav navbar-default navbar-fixed-top" id="main-navbar">
                    <div class="container">
                        <div class="row">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href="#" class="navbar-brand top-logo add-logo">Biz<span>eazy</span><!--<img src="images/header-logo.png" alt="logo">--></a>
                            </div>  <!--end navbar-header -->
                            <div class="collapse navbar-collapse" id="navbar-collapse">
                                <ul class="nav navbar-nav navbar-left">
                                    <li class="propClone"><a href="#home">Home</a></li>
                                    <li class="propClone"><a href="#about">About</a></li>
                                    <li class="propClone"><a href="#features">Features</a></li>
                                    <li class="propClone"><a href="#price">Pricing</a></li>
                                    <li class="propClone"><a href="#faq">FAQ</a></li>
                                    <li class="propClone"><a href="#termsOfService">Terms Of Service</a></li>
                                    <li class="propClone"><a href="#contact">Contact</a></li>
                                    <!-- <li class="propClone"><a href="#blog">Blog</a></li> -->
                                </ul>
                                <ul class="social-menu nav navbar-nav navbar-right">
                                    <li class="propClone"><a href="https://www.facebook.com/bizeazyapps/"><i class="icon icon-facebook"></i></a></li>
                                    <li class="propClone"><a href="https://twitter.com/bizeazyapps"><i class="icon icon-twitter"></i></a></li>
                                    <!-- <li class="propClone"><a href="#"><i class="icon icon-google-plus"></i></a></li> -->
                                </ul>
                            </div>  <!--end collapse -->
                        </div>
                    </div>  <!--end container -->
                </nav>
            </div>
           
            <section id="home" class="home-wrap home-default-btn" style="background-position: 30% -180px;">
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="home-intro">
                                    <div class="intro-wrap">
                                        <!--Header text -->
                                        <!--<div><img src="images/new-logo.png" alt=""/></div>-->
                                        <h1>
                                            <span class="ban-logo">Biz<span class="ban-logo-eazy">eazy</span></span>
                                            <span class="ban-logo-addtxt">The five minute Mobile App maker</span>
                                        </h1>
                                        
                                        <div class="home-video-btn"> 
                                            <a href="https://www.youtube.com/watch?v=KXPw3NXVclk" class="home-video ">
                                            <i class="icon-vplay"></i>
                                            </a> 
                                        </div>
                                        <!--BUTTON -->
                                        <h5>Launch your e-commerce Mobile App today!</h5>
                                        <div class="home-button">
                                        {if $HTTP_HOST eq 'www.bizeazy.net'}
                                            <a href="https://apps.shopify.com/bizeazy-the-5-minute-mobile-app-maker" class="btn btn-primary btnxs btn-lg"> Get started <i class="icon icon-chevron-right"></i></a>
                                        {else if $HTTP_HOST eq 'bizeazy.coderspreview.com'}
                                            <a href="https://apps.shopify.com/bizeazy-the-5-minute-mobile-app-maker" class="btn btn-primary btnxs btn-lg"> Get started <i class="icon icon-chevron-right"></i></a>
                                        {else}
                                            <a href="{$base_url}Authentication/access" class="btn btn-primary btnxs btn-lg"> Get started <i class="icon icon-chevron-right"></i></a>
                                        {/if}                                           
                                            <!-- <a  href="#price" class="btn btn-default btnxs btn-lg"><i class="icon icon-magic-wand"></i> Free trial</a> -->
                                        </div>
                                        <h4 class="demodownload">Download Our Demo App</h4>
                                        <div class="full-width-row-play-btn">
                                            <a href="https://itunes.apple.com/us/app/bizeazy-5-minute-mobile-app/id1185412960?ls=1&amp;mt=8" class="btn-app-store" target="_blank">
                                                <img src="{$base_url}assets/theme/web/images/btn-app-store-a4b85b3da4bb0b5e8d86e79b147b0188d26f691b51eabb2dfb02046edc7b67bb.png" alt="Btn app store">
                                            </a>
                                            <a href="https://play.google.com/store/apps/details?id=com.bizeazy.appmaker&amp;hl=en" class="btn-google-play" target="_blank">
                                                <img src="{$base_url}assets/theme/web/images/btn-google-play-69eb14be62856ac367d7764148d74e21fdff91e8728764e5ef66563e410a1e73.png" alt="Btn google play">
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="about" class="sections"> <!-- About Section-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <!--  Heading-->
                            <div class="heading-left margin-top-40  wow fadeIn" data-wow-offset="120" data-wow-duration="1.5s">
                                <div class="title-half"><h2>About</h2></div>
                                <div class="separator_wrap-left"> 
                                    <div class="separator2"></div>
                                </div>
                            </div>
                            <div class="describe-details wow fadeInLeft" data-wow-offset="10" data-wow-duration="1.5s">
                                <p class="margin-bottom-60">
                                    <!--No longer do you need to hire developers for thousands of dollars.--> Bizeazy provides 5 minute Mobile App creation for your existing shopfiy e-commerce store.                                 
                                </p>                            
                                <h3 class="here-hd-main-row">Here's how to create your mobile app today:</h3>
                                <div class="describe-list">
                                    <div class="describe-list-icon">
                                        <i class="fa fa-group"></i>
                                    </div>
                                    <div class="describe-list-content">
                                        <h5>Subscribe for membership</h5>
                                        <p>No need for AppStore or Google play developer accounts. We'll look after all App submissions and updates based on your membership level.</p>
                                    </div>
                                </div>
                                <div class="describe-list">
                                    <div class="describe-list-icon">
                                        <i class="fa fa-file-text-o"></i>
                                    </div>
                                    <div class="describe-list-content">
                                        <h5>Provide your store details</h5>
                                        <p>Enter your Shopify Store URL for seemless integration to your App.</p>
                                    </div>
                                </div>
                                <div class="describe-list">
                                    <div class="describe-list-icon">
                                        <i class="fa fa-cogs"></i>
                                    </div>
                                    <div class="describe-list-content">
                                        <h5>Customize the Look &amp; Feel</h5>
                                        <p>Pick your theme, and give your customers a great shopping experience.</p>
                                    </div>
                                </div>
                                <div class="describe-list">
                                    <div class="describe-list-icon">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                    <div class="describe-list-content">
                                        <h5>Launch your App!</h5>
                                        <p>Just 5 minute and we'll get your Shopify store on iTunes and Google Play</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center describe-images wow fadeInRight" data-wow-offset="10" data-wow-duration="1.5s">
                                <img src="{$base_url}assets/theme/web/images/describe-man.jpg" alt="">
                            </div>
                        </div>
                    </div><!--end row-->
                </div><!--end container-->
            </section>
            <section id="features" class="sections"><!-- Features Section-->
                <div class="container">
                    <div class="row coloricon">
                        <!--  Heading-->
                        <div class="heading wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                            <div class="title text-center">
                                <h1>Our exclusive features</h1>
                            </div>
                            <div class="subtitle text-center ">
                                <h5>See our exclusive features for 5 minute setup</h5>
                            </div>
                            <div class="separator_wrap"> 
                                <div class="separator2"></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="features text-center wow fadeInLeft" data-wow-offset="120" data-wow-duration="1.5s">
                                <img src="{$base_url}assets/theme/web/images/service1.jpg" alt="">
                                <h4>1-Click setup</h4>
                                <p>
                                    Easy setup will take 5 minutes. just enter your Shopify URL, pick a theme, and we'll handle the rest!
                                </p>
                            </div>
                        </div><!--end 4 col-->
                        <div class="col-sm-4">
                            <div class="features text-center wow fadeIn" data-wow-offset="120" data-wow-duration="1.5s">
                                <img class="margin-top-20" src="{$base_url}assets/theme/web/images/service2.jpg" alt="">
                                <h4>No Developers needed</h4>
                                <p>
                                    We've looked after the heavy lifting so you don't have to This means no coding, and more savings for you!
                                </p>
                            </div>
                        </div><!--end 4 col-->
                        <div class="col-sm-4">
                            <div class="features text-center wow fadeInRight" data-wow-offset="120" data-wow-duration="1.5s">
                                <img src="{$base_url}assets/theme/web/images/service3.jpg" alt="">
                                <h4>Native code</h4>
                                <p>
                                    Our Apps are created using native code, so your customers will get the best shopping experience through seemless integration to your Shopify Store.
                                </p>
                            </div>
                        </div>
                    </div><!--end row-->
                    <div class="row coloricon">
                        <div class="col-sm-4">
                            <div class="features text-center wow fadeInLeft" data-wow-offset="120" data-wow-duration="1.5s">
                                <img src="{$base_url}assets/theme/web/images/user-experience.jpg" alt="">
                                <h4>Rich user experience</h4>
                                <p>
                                    Best in class, intuitive shopping experience for your valued customers.
                                </p>
                            </div>
                        </div><!--end 4 col-->
                        <div class="col-sm-4">
                            <div class="features text-center wow fadeIn" data-wow-offset="120" data-wow-duration="1.5s">
                                <img class="margin-top-20" src="{$base_url}assets/theme/web/images/push-notification.jpg" alt="">
                                <h4>Push notification enabled</h4>
                                <p>
                                    Engage with your customers with Push Notifications; even when they're not using your app!
                                </p>
                            </div>
                        </div><!--end 4 col-->
                        <div class="col-sm-4">
                            <div class="features text-center wow fadeInRight" data-wow-offset="120" data-wow-duration="1.5s">
                                <img src="{$base_url}assets/theme/web/images/submissions.jpg" alt="">
                                <h4>Hassle free submissions</h4>
                                <p>
                                    We look after the hard stuff, so you don't have to.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row coloricon">
                        <div class="col-sm-4">
                            <div class="features text-center wow fadeInLeft" data-wow-offset="120" data-wow-duration="1.5s">
                                <img src="{$base_url}assets/theme/web/images/update.jpg" alt="">
                                <h4>Free updates</h4>
                                <p>
                                    Included with your membership
                                </p>
                            </div>
                        </div><!--end 4 col-->
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <div id="count" class="">
                    <div class="container">
                        <div class="row">
                            <div class="row coloricon">
                            </div>
                            <div class="col-sm-12 text-center">
                                <!-- Counter Heading-->
                                <h1 class="Counter-title">Over <span class="statistic-counter">1000</span>+ happy  customers </h1>
                                <div class="app-block wow fadeInUpBig" data-wow-duration="1s">
                                    <img src="images/ipad-count.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="testmonial" class="testimonial">
                <div class="overlay-img">
                    <div class="container">
                        <div class="row">
                            <!--  Heading-->
                            <div class="heading wow fadeIn" data-wow-offset="120" data-wow-duration="1.5s">
                                <div class="title text-center testimonialquote"><h1>Our testimonials</h1></div>

                                <div class="separator_wrap"> <div class="separator2"></div></div>
                            </div>
                            <div class="testimonialslide">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                       </ol>
                                        <!-- Testimonial slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <div class="carousel-item">
                                                    <div class="testimonialitem">
                                                        <p>Lorem ipsum dolor sit amet, sint movet patrioque sit noLorem ipso ius, ei veniam persius scriptorem eum. Vix ad utamur deterruisset,  similique eum et, brute illud persius vel ne. Quiwisi quodsi tium dolor sit amet, sint movet patrioque sit no, ut quas . </p>
                                                        <h3>- John Doe - <span>Famous Company</span></h3>
                                                        <div class="rating">
                                                            <i class="icon icon-star"></i>
                                                            <i class="icon icon-star"></i>
                                                            <i class="icon icon-star"></i>
                                                            <i class="icon icon-star"></i>
                                                            <i class="icon icon-star-o"></i>
                                                        </div>
                                                    </div><!-- end testimonialitem -->
                                                </div>
                                            </div><!--ITEM END-->
                                            <div class="item">
                                                <div class="carousel-item">
                                                    <div class="testimonialitem">
                                                        <p>Lorem ipsum dolor sit amet, sint movet patrioque sit noLorem ipso ius, ei veniam persius scriptorem eum. Vix ad utamur deterruisset,  similique eum et, brute illud persius vel ne. Quiwisi quodsi tium dolor sit amet, sint movet patrioque sit no, ut quas . </p>
                                                        <h3>- John Smith - <span>Famous Company</span></h3>
                                                        <div class="rating">
                                                            <i class="icon icon-star"></i>
                                                            <i class="icon icon-star"></i>
                                                            <i class="icon icon-star"></i>
                                                            <i class="icon icon-star"></i>
                                                            <i class="icon icon-star-o"></i>
                                                        </div>
                                                    </div><!-- end testimonialitem -->

                                                </div><!-- end carousel caption -->
                                            </div><!--ITEM END-->
                                            <div class="item">
                                                <div class="carousel-item">
                                                    <div class="testimonialitem">
                                                        <p>Lorem ipsum dolor sit amet, sint movet patrioque sit noLorem ipso ius, ei veniam persius scriptorem eum. Vix ad utamur deterruisset,  similique eum et, brute illud persius vel ne. Quiwisi quodsi tium dolor sit amet, sint movet patrioque sit no, ut quas . </p>
                                                        <h3>- Adworad Smith - <span>Famous Company</span></h3>
                                                        <div class="rating">
                                                            <i class="icon icon-star"></i>
                                                            <i class="icon icon-star"></i>
                                                            <i class="icon icon-star"></i>
                                                            <i class="icon icon-star"></i>
                                                            <i class="icon icon-star-o"></i>
                                                        </div>
                                                    </div><!-- end testimonialitem -->
                                                </div><!-- end carousel caption -->
                                            </div><!--ITEM END-->
                                        </div>
                                    </div>
                                </div><!-- end col-sm- -->
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div>
            </section>
            <section id="price" class="price-1 sections"><!-- Pricing Section-->
                <div class="container">
                    <div class="row">
                        <!--  Heading-->
                        <div class="heading wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                            <div class="title text-center"><h1>Pricing &amp; Plans</h1></div>
                            <!--<div class="subtitle text-center "><h5>This is subtile. lorem ipsum dolar shit amet</h5></div>-->
                            <div class="separator_wrap"> <div class="separator2"></div></div>
                        </div><!-- / Heading END-->
                        <div class="col-xs-12 col-sm-4"><!-- / Table START-->
                            <div class="pricing-table">
                                <div class="pricing-heading">
                                    <h2>Standard</h2> 
                                    <div class="price">$29.99/m</div>
                                </div>
                                <div class="pricing-button">
                                    <a href="https://apps.shopify.com/bizeazy-the-5-minute-mobile-app-maker" class="btn btn-primary btnxs btn-md">Buy Now <i class="fa icon-cart"></i></a>
                                </div>
                                <ul>
                                    <li>Android only</li>
                                    <li>Store integration</li>
                                    <li>Push Notifications</li>
                                    <li>App updates</li>
                                    <li>&nbsp;</li>
                                </ul>
                            </div>
                        </div><!-- / Table END-->
                        <div class="col-xs-12 col-sm-4"><!-- / Table START-->
                            <div class="pricing-table active">
                                <div class="pricing-heading">
                                    <h2>Business</h2> 
                                    <div class="price">$49.99/m</div>
                                </div>
                                <div class="pricing-button">
                                    <a href="https://apps.shopify.com/bizeazy-the-5-minute-mobile-app-maker" class="btn btn-default btnxs btn-md">Buy Now <i class="fa icon-cart"></i></a>
                                </div>
                                <ul>
                                    <li>iOS and Android</li>
                                    <li>Store integration</li>
                                    <li>Push Notifications</li>
                                    <li>App updates</li>
                                    <li>&nbsp;</li>
                                </ul>
                            </div>
                        </div><!-- / Table END-->
                        <div class="col-xs-12 col-sm-4"><!-- / Table START-->
                            <div class="pricing-table">
                                <div class="pricing-heading">
                                    <h2>Advanced</h2> 
                                    <div class="price">$499.99/m</div>
                                </div>
                                <div class="pricing-button">
                                    <a href="https://apps.shopify.com/bizeazy-the-5-minute-mobile-app-maker" class="btn btn-primary btnxs btn-md">Buy Now <i class="fa icon-cart"></i></a>
                                </div>
                                <ul>
                                    <li>iOS and Android</li>
                                    <li>Store integration</li>
                                    <li>Push Notifications</li>
                                    <li>App updates</li>
                                    <li><strong>Custom features</strong></li>
                                </ul>
                            </div>
                        </div><!-- / Table END-->
                    </div>
                </div>
                <!--/.container-->
            </section> 
            <!-- funfact Section End-->
            <section id="faq" class="sections"> <!-- Faq Section-->
                <div class="container">
                    <div class="row">
                        <div class="heading wow fadeIn" data-wow-offset="120" data-wow-duration="1.5s">
                            <div class="title text-center"><h1>Frequently asked questions</h1></div>
                            <!--<div class="subtitle text-center "><h5>Need more information? Here are some FAQ's</h5></div>-->
                            <div class="separator_wrap"> <div class="separator2"></div></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="faq-details">
                                <h4>Will my Shopify Store and Mobile App show the items for sale?</h4>
                                <p> 
                                     Yes. Your Mobile App is a mirror of your Shopify Store. Anything you change in the store, will relect in the App

                                </p>
                                <i class="accordion-icon icon icon-layers"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="faq-details">
                                <h4>If I purchase the Basic Plan, can I upgrade in the future?</h4>
                                <p> Yes you sure can.<br/> &nbsp;
                                </p>
                                <i class="accordion-icon icon icon-arrow-left-circle"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="faq-details">
                                <h4>What payment methods do you accept?</h4>
                                <p> We accept PayPal, Visa and Mastercard
                                </p>
                                <i class="accordion-icon icon icon-earth"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="faq-details">
                                <h4>Will the App in the Appstore be mine or yours?</h4>
                                <p> As long as your membership is active, the App is all yours!
                                </p>
                                <i class="accordion-icon icon icon-gift"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="faq-details">
                                <h4>How long before my App is available on the AppStore?</h4>
                                <p> 1 day for Google Play. Up to 5 days for the AppStore.
                                </p>
                                <i class="accordion-icon icon icon-database"></i>
                            </div>
                        </div>
                    </div><!--end row-->
                </div><!--end container-->
            </section><!--end section-->
            <section id="termsOfService" class="sections">
                 <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!--  Heading-->
                            <div class="heading-left margin-top-40  wow fadeIn" data-wow-offset="120" data-wow-duration="1.5s">
                                <div class="title-half"><h2>Terms Of Service</h2></div>
                                <div class="separator_wrap-left"> 
                                    <div class="separator2"></div>
                                </div>
                            </div>
                            <div class="describe-details wow fadeInLeft" data-wow-offset="10" data-wow-duration="1.5s">
                                
                                <h3 class="here-hd-main-row">Account Terms</h3>
                                <div class="describe-list">
                                    <div class="describe-list-content">
                                        <p>1. You must be 13 years or older to use the service and open an account.</p>
                                    </div>
                                </div>
                                <div class="describe-list">
                                    <div class="describe-list-content">
                                       <p> 2. You must be human. Accounts registered by “bots” are not permitted.</p>
                                    </div>
                                </div>
                                <div class="describe-list">
                                    <div class="describe-list-content">
                                       <p> 3. You are responsible for maintaining the security of your Account and password. Bizeazyapps cannot and will not be liable for any loss or damage from your failure to comply with the security obligation.</p>
                                    </div>
                                </div>
                                <div class="describe-list">
                                    <div class="describe-list-content">
                                       <p> 4. Bizeazyapps will compile and make your application. The Android application can be published on your or our Google Play account. We will not ask for your Google Play account password. Regarding iOS apps, they should be published on your iTunes account. Any revenue made from the app will belong to you.</p>
                                    </div>
                                </div>
                                <div class="describe-list">
                                    <div class="describe-list-content">
                                       <p> 5. You are responsible for all text, data and graphics, videos and other media posted in the app.</p>
                                    </div>
                                </div>
                                <div class="describe-list">
                                    <div class="describe-list-content">
                                       <p> 6. You may not use the service for any illegal or unauthorized purpose.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <div><!--end row-->
                </div><!--end container-->
            </section>
            <section id="subscribes" class="sections"><!-- Describe Section-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 text-right">
                            <div class="newsletter-icon">
                                <i class="icon icon-newsletter"></i>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <!--Subscription form--> 
                            <div class="subscribe-wrap body-subscribe">
                                <h1>Subscribe to our newsletter</h1>
                                <p>Your email address is safe with us.</p>
                                <form id="mailchimp" class="mailchimp form-inline">
                                    <!-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES -->
                                    <h6 class="subscription-success"></h6>
                                    <h6 class="subscription-error"></h6>
                                    <div class="btn-group">
                                        <input  name="vName" id="vName" type="text" placeholder="Your name" class="form-control subscribe-input subscribe-name input-lg" required="">
                                       
                                        <input type="text" name="vEmail"  id="vEmail" placeholder="Your email" class="form-control subscribe-input input-lg">

                                        <!-- SUBSCRIBE BUTTON -->
                                        <button type="button" id="subscribe-button" class="btn btn-primary btnxs btn-lg" onclick="subscribe()">Subscribe <i class="fa fa-envelope-o hidden-xs"></i></button>
                                    </div>
                                    <p class="help-block" id="err_sub_email"><sub><span class="errvalidationtext" id="lblsub_emailerrmsg"></span></sub></p>
                                     <p class="help-block" id="err_sub_name"><sub><span class="errvalidationtext" id="lblsub_nameerrmsg"></span></sub></p>
                                    <!--<div class="message editContent">
                                        Do not worry we will never share your email address to others.
                                    </div>-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--Tweet section-->
            <section id="tweets" class="tweets">
                <div class="overlay-img">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1 text-center">
                                <div class="twitter-icon"><i class="icon icon-twitter"></i></div>
                                <div id="tweet"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact" class="sections">
                <!--Contact form-->
                <div class="container">
                    <div class="row ">
                        <!--CONTACT FORM--> 
                        <div id="fancy-inputs">
                            <div class="col-sm-4">
                                <div class="address">
                                    <a class="add-logo foot-new-logo address-logo" href="#">Biz<span>eazy</span></a>
                                    <div class="address-details">
                                       <!-- <h4>Bizeazy</h4>-->
                                    <p class="slide-bottom">Sherwood park,</p>
                                    <p>Alberta</p>
                                    <p>T6H 5K5 Canada</p>
                                    <p><abbr title="Phone">P: </abbr> 1-780-932-6381</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <!--Heading-->
                                <div class=" contact-title wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                                    <div class="title"><h1>Contact us</h1></div>
                                    <div class="subtitle"><h5>Please get in touch; we're here to help!</h5></div>
                                    <div class="separator_wrap-left"> <div class="separator2"></div></div>
                                </div>
                                <div id="error-message" class="text-center"></div>
                                <form method="post" action="scripts/contact.php" class="contact-form" id="contactform">
                                    <div class="col-sm-6">
                                        <label class="input">
                                            <input type="text" name="name" id="name" class="name">
                                            <span><span>Name</span></span>
                                        </label>
                                         <p class="help-block" id="err_con_name"><sub><span class="errvalidationtext" id="lbl_con_name_errmsg"></span></sub></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="input">
                                            <input type="email" name="email" id="email">
                                            <span><span>Email</span></span>
                                        </label>
                                        <p class="help-block" id="err_con_email"><sub><span class="errvalidationtext" id="lbl_con_email_errmsg"></span></sub></p>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="input">
                                            <input type="text" name="subject" id="subject">
                                            <span><span>Subject</span></span>
                                        </label>
                                        <p class="help-block" id="err_con_subject"><sub><span class="errvalidationtext" id="lbl_con_subject_errmsg"></span></sub></p>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="textarea">
                                            <textarea name="message" id="message_status" cols="30" rows="10"></textarea>
                                            <span><span>Message</span></span>
                                        </label>
                                        <p class="help-block" id="err_con_message"><sub><span class="errvalidationtext" id="lbl_con_message_errmsg"></span></sub></p>
                                        <div class="submit-button">
                                            <button class="btn btn-primary btnxs btnbdr btn-lg" type="button" id="submit" name="submit" data-loading-text="Loading..." onclick="contactform()"><i class="icon icon-rocket"></i> Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer id="footer" class="footer-default"> 
                <div class="container">
                    <div class="row">
                        <div class="footer-wrap">
                            <div class="col-md-12 text-center">
                                <div class="footer-logo"><a class="add-logo foot-new-logo" href="#">Biz<span>eazy</span></a><!--<img src="images/new-logo.png">--></div>
                            </div>
                            <div class="col-md-12 footer-bottom">
                                <div class="col-md-4">
                                    <ul class="list-inline footer-link-default">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Privacy</a></li>
                                        <li><a href="#">Terms</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <p class="copyright text-center">© 2018 - bizeazy All Rights Reserved</p>
                                </div>
                                <div class="col-md-4">
                                    <div class="social-link">
                                        <a href="#"><span class="icon icon-facebook"></span></a>
                                        <a href="#"><span class="icon icon-twitter"></span></a>
                                        <a href="#"><span class="icon icon-linkedin"></span></a>
                                        <a href="#"><span class="icon icon-google-plus"></span></a>
                                        <a href="#"><span class="icon icon-pinterest"></span></a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div> 
                </div>
            </footer>
        </div>
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
        {include file="./shared/commonHome_bottom_js.tpl" title="Common Bottom JS"}
        <script type="text/javascript">
            setTimeout(function(){ 
                    var userall = document.querySelectorAll('.user');
                var first_user = userall[0];
                var second_user = userall[1];
                var third_user = userall[2];

                $(first_user).text('What is Lorem Ipsum?');
                $(second_user).text('Why do we use it?');
                $(third_user).text('Where does it come from?');

                var tweetall = document.querySelectorAll('.tweet');
                var first_tweet = tweetall[0];
                var second_tweet = tweetall[1];
                var third_tweet = tweetall[2];

                $(first_tweet).text('Lorem Ipsum is simply dummy text of the printing and typesetting industry.');
                $(second_tweet).text('It is a long established fact that a reader will be distracted by the readable content of a page when looking');
                $(third_tweet).text('Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.');

                var timeall = document.querySelectorAll('.timePosted');
                var first_time = timeall[0];
                var second_time = timeall[1];
                var third_time = timeall[2];

                $(first_time).text('Posted on 11th October 2016 1:22PM');
                $(second_time).text('Posted on 15th October 2016 2:22PM');
                $(third_time).text('Posted on 17th October 2016 10:12PM');

                
            }, 3000);
            
            function contactform()
            {
                
                var base_url='{$base_url}';
                var vName = $('#name').val();
                var vEmail = $('#email').val();
                // var subject = $('#subject').val();
                var message = $('#message').val();
                var vName_status= 0;
                var name_status =  email_id_status = message_status = 0;
                if($.trim(vName) == ''){
                    $('#err_con_name').show();
                    $('#lbl_con_name_errmsg').html('Please Enter Name. ');
                     name_status=1;
                    
                }
                else
                {
                    $('#err_con_name').hide();   
                }
                
                if($.trim(vEmail) != ''){
                    var pattern = new RegExp(/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/i);
                    var validpattern = pattern.test(vEmail);
                    if(!validpattern)
                    {
                        $('#err_con_email').show();
                        $('#lbl_con_email_errmsg').html('Please enter your correct email id.');
                        email_id_status=1;

                    }
                    else 
                    {
                        $('#err_con_email').hide();
                        
                    }
                }
                else
                {
                    $('#err_con_email').show();
                    $('#lbl_con_email_errmsg').html('Please Enter Email. ');
                    email_id_status=1;
                }
               
                if($.trim(message) == ''){
                    $('#err_con_message').show();
                    $('#lbl_con_message_errmsg').html('Please Enter Message. ');
                    message_status=1;
                    
                } 
                 else
                {
                    $('#err_con_message').hide();   
                }

                if(name_status==1 || email_id_status== 1 ||  message_status==1){
                    return false;
                }
                else
                {                      
                    var url = base_url+"Home/postContact";
                    $.ajax({
                            url:url,
                            type:"POST",
                            data:{ "vName": vName, "vEmail": vEmail, "tMessage": message,},
                            success:function(data){
                             location.reload();
                            }
                        });  
                }   
            }
        </script>

        <script type="text/javascript">
            $(window).load(function () {
                $(".loaded").fadeOut();
                $(".preloader").delay(500).fadeOut("slow");
            });
        </script>
</body>
</html>