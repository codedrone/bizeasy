<?php
/* Smarty version 3.1.30, created on 2018-07-17 14:20:41
  from "/var/www/html/projects/bizeazy/application/views/templates/web/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b4dfb395904e1_61783307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11ef95206e004f9aaa5b88d4fbeca94402addc57' => 
    array (
      0 => '/var/www/html/projects/bizeazy/application/views/templates/web/home.tpl',
      1 => 1531837238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4dfb395904e1_61783307 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/html/projects/bizeazy/application/third_party/smarty/libs/plugins/modifier.truncate.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>::: Bizeazy Home Page :::</title>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/js/jquery-1.9.1.js"><?php echo '</script'; ?>
>
        <link href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/css/style.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/css/font-family.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/css/fontawesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/css/flexslider.css">
        <link rel="icon" href="https://s3.amazonaws.com/bizeazy.net/Configuration/DEFAULT_LOGO/3071486.png" type="image/x-icon">

         <?php echo '<script'; ?>
 type="text/javascript">
                var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/587e1c948416045a868070cb/default';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
                })();
        <?php echo '</script'; ?>
>
</head> 
<body>
    <header>
        <div class="bizeasy-container">
            <div class="main-logo">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/images/logo.png" alt="" title="Logo">
                </a>
            </div>
            <a id="mobi-menu" href="javascript:void(0);" style="font-size:15px;" class="icon fa fa-bars" onclick="myFunction()"></a>
            <div class="topnav" id="myTopnav">
                <a href="#home" class="active">Home</a>
                <a href="#about">About</a>
                <a href="#features">Features</a>
                <a href="#pricing">Pricing</a>
                <a href="#faq">FAQ</a>
                <a href="#blog">Blog</a>
                <a href="#contact">Contact</a>
                <a class="mobi-social mr-minus" href="https://www.facebook.com/bizeazyapps/" target="_blank"><span class="fa fa-facebook"></span></a>
                <a class="mobi-social" href="https://twitter.com/bizeazyapps" target="_blank"><span class="fa fa-twitter"></span></a>
                <a class="mobi-social" href="#" target="_blank"><span class="fa fa-linkedin-in"></span></a>
            </div>
            <?php echo '<script'; ?>
>
                function myFunction() {
                    var x = document.getElementById("myTopnav");
                    if (x.className === "topnav") {
                        x.className += " responsive";
                    } else {
                        x.className = "topnav";
                    }
                }
            <?php echo '</script'; ?>
>
        </div>
    </header>
<!--  -->

    <!-- New banner section start from here -->    
        <div class="main-banner" id="home">
                <div class="banner-img">
                    <div class="banner-container">
                        <div class="banner-content">
                            <!-- video  -->
                            <div id="video-container">
                                <center>
                                    <button class="player-icon" id="playme" onclick="revealVideo('video','youtube')"><a href="#"><i class="fa fa-play"></i></a></button>
                                </center>
                            </div>
                            <!-- video -->
                            <!-- <div class="player-icon"><a href="#"><i class="fa fa-play"></i></a></div> -->
                            <h1><a href="#" target="_blank"> <span class="ban-logo">Biz<span class="ban-logo-eazy">eazy</span></span> <br/><h1 class="home-title">The Five Minute Shopify &amp; eCommerce Mobile App maker</h1></a></h1>
                            <p>Looking to boost your online sales, increase customer retention, and strengthen your brand?</p>
                            <p>Achieve this and more by creating a mobile app for Shopify store or ecommerce store. Our team of talented developers have spent countless hours building Bizeazy’s online ecommerce mobile app maker giving Shopify or ecommerce store owners the ability to easily create eCommerce mobile app.</p>
                            <p>Easily create ecommerce mobile app with Bizeazy at a fraction of the cost (and time) it would take for any developer to do the same.</p>
                            <div>
                                    <a href="https://apps.shopify.com/bizeazy-the-5-minute-mobile-app-maker" class="theme-btn"> Get started <i class="icon icon-chevron-right"></i></a>
                              
                            </div>
                        </div>
                        <div class="banner-slider">
                            <section class="slider">
                                    <div class="flexslider">
                                      <ul class="slides">
                                        <li>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/images/banner-mobile-1.png">
                                            </li>
                                            <li>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/images/mobile_6.png">
                                            </li>
                                            <li>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/images/mobile_5.png">
                                            </li>
                                            <li>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/images/blog-details.png">
                                            </li>
                                      </ul>
                                    </div>
                                  </section>
                    </div>
                </div>
                <!-- <div class="banner-overlay"></div> -->
        </div>
       
    <!-- New banner section end from here -->



    <div class="wrapper">
        
        <!-- video section start -->
        <div id="video" class="lightbox" onclick="hideVideo('video','youtube')">
            <div class="lightbox-container">  
                <div class="lightbox-content">
                    <button onclick="hideVideo('video','youtube')" class="lightbox-close">
            ✕
                    </button>
                        <div class="video-container">
                            <iframe width="560" height="215" src="https://www.youtube.com/embed/KXPw3NXVclk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen id="youtube"></iframe>
                        </div>      
                        

                </div>
            </div>
        </div>
        <!-- video section end -->

        <div class="full-width-row about-main" id="about">
            <div class="bizeasy-container">
                <div class="full-width-row">
                    <div class="bizeasy-col-3">
                        <h2 class="ourwork_title">6 Steps to Create An App for your Shopify Store</h2>
                        <p>Take advantage of Bizeazy’s online Shopify mobile app maker to create app for your Shopify store as well eCommerce store.</p>
                    </div>
                    <div class="bizeasy-col-3">
                        <ul class="feature-row">
                            <li class="feature-blog">
                                <div class="home-section">
                                    <span>1</span>
                                </div>
                                <!-- <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/images/feature_1.png" alt=""></a> -->
                                <div class="feature-detail-row">
                                    <h3>Install The App</h3>
                                    <p>Our online ecommerce mobile app maker is a best in class Shopify app that provides Shopify store owners an easy to use app for creating ecommerce mobile apps. Create mobile app for Shopify store in minutes!</p>        
                                </div>
                            </li>
                            <li class="feature-blog">
                                <div class="home-section">
                                    <span>3</span>
                                </div>
                                
                                <div class="feature-detail-row">
                                    <h3>Install the Bizeazy Demo App to Your Mobile Device</h3>
                                    <p>Download the Bizeazy demo mobile app to your Android or iOS mobile device. You can find it on Google Play as well as on the App Store.</p>
                                </div>
                            </li>
                            <li class="feature-blog">
                                <div class="home-section">
                                    <span>5</span>
                                </div>
                                <div class="feature-detail-row">
                                    <h3>Subscribe To A Bizeazy Plan</h3>
                                    <p>Bizeazy’s online ecommerce mobile app maker provides several affordable plans.</p>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="bizeasy-col-3">
                        <ul class="feature-row mobi-mr-top">
                            <li class="feature-blog">
                                <div class="home-section">
                                    <span>2</span>
                                </div>
                                <div class="feature-detail-row">
                                    <h3>Customize Your App Using Bizeazy's Extraordinary Options</h3>
                                    <p>Build and customize your Shopify mobile app using our online Shopify mobile app builder’s user interface. Create app for Shopify store in minutes!</p>        
                                </div>
                            </li>
                            <li class="feature-blog">
                                <div class="home-section">
                                    <span>4</span>
                                </div>
                                <div class="feature-detail-row">
                                    <h3>Preview Your Shopify or eCommerce Mobile App</h3>
                                    <p>Launch the Bizeazy mobile app and enter your ecommerce store’s URL. Your mobile app is completely integrated to your Shopify or ecommerce store.</p>
                                </div>
                            </li>
                             <li class="feature-blog">
                                <div class="home-section">
                                    <span>6</span>
                                </div>
                                <div class="feature-detail-row">
                                    <h3>Publish to the App Stores</h3>
                                    <p>After completed building your Shopify mobile app and have subscribed to our plan. We will begin the app submission process as well work with the App Store’s on your behalf &amp; have your Shopify or ecommerce mobile apps published.</p>
                                </div>
                            </li>
                           
                        </ul>
                    </div>
                    <div class="full-width-row add-ft-btn">
                             <a href="https://apps.shopify.com/bizeazy-the-5-minute-mobile-app-maker" class="theme-btn"> Get started <i class="icon icon-chevron-right"></i></a>
                    </div>
                </div>      
            </div>
        </div>

        <!-- Feature option section start from here -->
        <!--div class="full-width-row feature-option-main" >
          <div class="bizeasy-container">
                <div class="feature-option-row">
                      <a href="https://itunes.apple.com/us/app/bizeazy-5-minute-mobile-app/id1185412960?ls=1&amp;mt=8" class="btn-app-store" target="_blank"><i class="fa fa-apple"></i><span>ios</span></a>
                     <a href="https://play.google.com/store/apps/details?id=com.bizeazy.appmaker&amp;hl=en" class="btn-google-play" target="_blank"><i class="fa fa-android"></i><span>android</span></a-->
                    <!-- <a href="#"><i class="fa fa-mobile"></i><span>mobile app</span></a> -->
                <!--/div>
          </div>
        </div-->
        <!-- Feature option section end from here --> 

        <!-- Different Feature section start from here --> 
         <div class="full-width-row diff-feature-main" id="features">
            <div class="bizeasy-container">
                <div class="full-width-row feature-main-title">
                    <h2 class="mobile-app-title">Features</h2>
                </div>
                <div class="full-width-row">
                   <div class="bizeasy-col-3">

                        <ul class="feature-row">
                        <li class="feature-blog">
                            <span><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/images/easy-setup.png" alt=""></span>
                            <div class="feature-detail-row">
                                <h3>Easy Setup &amp; Customization</h3>
                                <p>We walk you through the mobile app creation process using our best in class, online Shopify mobile app maker. It will take you minutes to create your eCommerce mobile app as well create app for Shopify store.</p>        
                            </div>
                        </li>
                        <li class="feature-blog">
                            <span><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/images/notification.png" alt=""></span>
                            <div class="feature-detail-row">
                                <h3>Native code</h3>
                                <p>Your Shopify app is created using native code, so your customers will get the best shopping experience through seamless integration to your ecommerce store.</p>
                            </div>
                        </li>
                        <li class="feature-blog">
                            <span><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/images/free-update.png" alt=""></span>
                            <div class="feature-detail-row">
                                <h3>Free Updates</h3>
                                <p>Bizeazy will look after updating your ecommerce store’s mobile app free of charge as new software releases come out.</p>        
                            </div>
                        </li>
                        </ul>
                    </div>
                    <div class="bizeasy-col-3 diff-feature-img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/images/blog-details.png" alt="" style="margin-top: 30px;">
                    </div>
                    <div class="bizeasy-col-3">
                        <ul class="feature-row">
                        <li class="feature-blog">
                            <span><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/images/native-code.png" alt=""></span>
                            <div class="feature-detail-row">
                                <h3>Hassle Free Submissions</h3>
                                <p>Once you have finished creating a mobile app for Shopify store or ecommerce store using Bizeazy’s ecommerce mobile app builder, we will ensure your mobile apps get published to the App Store’s. We deal with the App Stores.</p>        
                            </div>
                        </li>
                        <li class="feature-blog">
                            <span><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/images/hassel-free.png" alt=""></span>
                            <div class="feature-detail-row">
                                <h3>Push Notification</h3>
                                <p>Use push notifications to communicate with your customers. Notify them about sales and special offers or let them know when items they want come back in stock.</p>
                            </div>
                        </li>
                        <li class="feature-blog">
                            <span><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/images/easy-custom.png" alt=""></span>
                            <div class="feature-detail-row">
                                <h3>24X7 Free Support</h3>
                                <p>At any time, you can call, email or live chat with someone on the Bizeazy team. We’re always available to help!</p>        
                            </div>
                        </li>
                        </ul>
                    </div>
                </div>        
            </div>
        </div>
        <!-- Different Feature section start from here -->

        <!-- iphone app section start from here -->
        <div class="full-width-row iphone-app-main" >
            <div class="bizeasy-container">
                <div class="full-width-row">
                    <div class="bizeasy-col-2">
                        <h2 class="mobile-app-title"><span>Create an iPhone App for Shopify Store</span></h2>
                        <p>We are living in smart technology world where all people are using smartphone especially iPhone that means demand for iPhone is raising and because of this an iPhone app development market is booming right now, and you can rule it with your right and quality Shopify or eCommerce store app. Use Bizeazy’s online Shopify mobile app builder to create and customize your mobile app. Once you have subscribed to a Bizeazy plan, we will have your ecommerce or Shopify store mobile app published to Apple’s App Store.</p>
                        <div class="full-width-row">
                            <a href="https://apps.shopify.com/bizeazy-the-5-minute-mobile-app-maker" class="theme-btn">Make Your an iOS App Now!</a>
                        </div>
                    </div>
                    <div class="bizeasy-col-2 app-mobile-img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/images/mobile_1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- iphone app section end from here -->

        <!-- Android app section start from here -->
        <div class="full-width-row android-app-main">
            <div class="bizeasy-container">
                <div class="full-width-row">
                    <div class="bizeasy-col-2">
                        <div class="bizeasy-col-2 ios-img">
                        <div class="align-center">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/images/android-mobile.png" alt="">
                        </div>
                            
                        </div>
                    </div>
                    <div class="bizeasy-col-2">
                        <h2 class="mobile-app-title">Create an Android Mobile App for Shopify Store</h2>
                        <p>As we know that Android platform is on trending right now. The users of Android smartphones are constantly growing, and you can take a benefit of growing market through creating an android app for your Shopify or eCommerce store to obtain more customers for your business. Build an android mobile app for Shopify store or ecommerce store using our ecommerce mobile app builder. One you subscribe to a Bizeazy plan, we will create and submit your mobile app for Shopify store or ecommerce store.</p>
                        <div class="full-width-row">
                            <a href="https://apps.shopify.com/bizeazy-the-5-minute-mobile-app-maker" class="theme-btn">Make Your an Android App Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-width-row iphone-app-main" >
            <div class="bizeasy-container">
                <div class="full-width-row">
                    <div class="bizeasy-col-2">
                        <h2 class="mobile-app-title"><span>Why Bizeazy for Creating App for Shopify Store</span></h2>
                        <p>Bizeazy provides best in class ecommerce mobile app development services at a fraction of the standard software development costs. Our valued customers create and customize their mobile apps in minutes, as opposed to the several months it would take for a development firm to do the same.</p>
                        <p>By logging into the Bizeazy’s ecommerce mobile app builder, our customers create and customize their Shopify or ecommerce mobile app, and our team of talented developers work with the App Store’s to publish the mobile apps. The Bizeazy team is always available when our customers have questions or concerns, and can be reached via email, web chat or phone. </p>
                        <div class="full-width-row">
                            <a href="https://apps.shopify.com/bizeazy-the-5-minute-mobile-app-maker" class="theme-btn">Create Your App Now!!</a>
                        </div>
                    </div>
                    <div class="bizeasy-col-2 app-mobile-img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/images/feature-step.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Android app section end from here -->

        <!-- Pricing tag section end from here -->
         <div class="full-width-row price-tag-main" id="pricing">
            <div class="bizeasy-container">
                <div class="full-width-row">
                    <div class="bizeasy-col-3">
                    </div>
                    <div class="price-columns">
                        <ul class="price standard">
                            <li class="header dark-orange">Standard</li>
                            <li class="orange"><span class="price-tag">$29.99<br/><small>Per Month</small></span></li>
                            <li class="full-width-row"><a href="https://apps.shopify.com/bizeazy-the-5-minute-mobile-app-maker" class="buy-button orange-btn">Buy Now</a></li>
                            <li><i class="fa fa-check"></i>Online Shopify Mobile App Builder Access</li>
                            <li><i class="fa fa-check"></i>Android App Creation</li>
                            <li><i class="fa fa-check"></i>Monthly Subscription</li>
                            <li><i class="fa fa-check"></i>Storage Integration</li>
                            <li><i class="fa fa-check"></i>Push Notifications</li>
                            <li><i class="fa fa-check"></i>App Update</li>
                        </ul>
                    </div>

                    <div class="price-columns">
                        <ul class="price business">
                            <li class="header dark-sky">Business</li>
                            <li class="sky"><span class="price-tag">$ 49.99 <br/><small>Per Month</small></span></li>
                            <li class="full-width-row"><a href="https://apps.shopify.com/bizeazy-the-5-minute-mobile-app-maker" class="buy-button sky-btn">Buy Now</a></li>
                            <li><i class="fa fa-check"></i>Online Shopify Mobile App Builder Access</li>
                            <li><i class="fa fa-check"></i>iOS &amp; Android App Creation</li>
                            <li><i class="fa fa-check"></i>Monthly Subscription</li>
                            <li><i class="fa fa-check"></i>Storage Integration</li>
                            <li><i class="fa fa-check"></i>Push Notifications</li>
                            <li><i class="fa fa-check"></i>App Update</li>
                        </ul>
                        </div>

                    <div class="price-columns">
                        <ul class="price purchase">
                            <li class="header dark-green">Purchase</li>
                            <li class="green"><span class="price-tag">$ 499 <br/><small>One Time</small></span></li>
                            <li class="full-width-row"><a href="https://apps.shopify.com/bizeazy-the-5-minute-mobile-app-maker" class="buy-button green-btn">Buy Now</a></li>
                            <li><i class="fa fa-check"></i>Online Shopify Mobile App Builder Access</li>
                            <li><i class="fa fa-check"></i>iOS &amp; Android App Creation</li>
                            <li><i class="fa fa-check"></i>Onetime Feature</li>
                            <li><i class="fa fa-check"></i>All Source Code</li>
                            <li><i class="fa fa-check"></i>Storage Integration</li>
                            <li><i class="fa fa-check"></i>Push Notifications</li>
                            <li><i class="fa fa-check"></i>App Update</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing tag section end from here -->

        <!-- Faq section start from here -->
       <div class="full-width-row android-app-main faq-main" id="faq">
        <div class="bizeasy-container">
            <div class="full-width-row">
                <div class="mobile-app-title">Frequently Asked Questions</div>  
            </div>
            <!--  -->
           
            <div class="faq-accordion_container">
               
             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['faqs']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                <div class="accordion_head"><?php echo $_smarty_tpl->tpl_vars['value']->value['tQuestion'];?>
<span class="plusminus">+</span>

                </div>
                <div class="accordion_body" style="display: none;">
                    <p><?php echo $_smarty_tpl->tpl_vars['value']->value['tAnswer'];?>
.</p>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
            <!--  -->
        </div>
    </div>
        <!-- Faq section end from here -->

        <!-- Faq section start from here -->
        <div class="full-width-row android-app-main blog-main" id="blog">
            <div class="bizeasy-container">
                <div class="full-width-row">
                    <div class="mobile-app-title">Bizeazy Blog</div>
                    <p> &nbsp;</p>    
                </div>
                <div class="full-width-row">
                    <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['blog_data']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <div class="bizeasy-col-3">
                        <img class="blog-img" src="<?php echo $_smarty_tpl->tpl_vars['blog_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
" alt="">
                        <div class="biz-blog-cont">
                            <h2><?php echo $_smarty_tpl->tpl_vars['blog_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['date'];?>
</h2>
                            <h3><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['blog_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'],65,'...');?>
</h3>
                            <p><?php echo $_smarty_tpl->tpl_vars['blog_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['content'];?>
</p>
                            <div class="full-width-row"><a class="theme-btn" href="<?php echo $_smarty_tpl->tpl_vars['blog_data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['url'];?>
">Read More</a></div>
                        </div>
                    </div>
                    <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>     

                </div>
            </div>
        </div>

        <!-- Footer section start from here -->
        <div class="full-width-row footer-main" id="contact">
            <div class="bizeasy-container">
                <div class="bizeasy-col-2">
                    <h2 class="ourwork_title">Interested in <br/>working with<br/> us?.</h2>
                </div>
                <div class="bizeasy-col-2">
                    <div class="footer-form">
                        <form>
                                <div class="full-width-row form-input">
                                    <div class="position">
                                        <input type='text' placeholder='Name' name="name" id="name"></input>
                                        <span class="form-user"></span>
                                        <p class="help-block" id="err_con_name"><sub><span class="errvalidationtext" id="lbl_con_name_errmsg"></span></sub></p>
                                    </div>

                                    <div class="position">
                                        <input type='email' placeholder='Email' name="email" id="email"></input>
                                        <span class="form-mail"></span>
                                        <p class="help-block" id="err_con_email"><sub><span class="errvalidationtext" id="lbl_con_email_errmsg"></span></sub></p>
                                    </div>
                                </div>

                                <div class="full-width-row form-input">
                                    <div class="position">
                                        <input type='text' placeholder='Contact' name="vContact" id="vContact"></input>
                                        <span class="form-contact"></span>
                                        <p class="help-block" id="err_con_contact"><sub><span class="errvalidationtext" id="lbl_con_contact_errmsg"></span></sub></p>
                                    </div>
                                    
                                    <div class="position">
                                        <input type='email' placeholder='Subject' name="vSubject" id="vSubject"></input>
                                        <span class="form-subject"></span>
                                        <p class="help-block" id="err_con_sub"><sub><span class="errvalidationtext" id="lbl_con_sub_errmsg"></span></sub></p>
                                    </div>
                                    
                                
                            </div>
                            <div class="full-width-row form-input">
                                <div class="position">
                                    <textarea placeholder='Message' name="message" id="message"></textarea>
                                    <span class="form-edit"></span>
                                    <p class="help-block" id="err_con_message"><sub><span class="errvalidationtext" id="lbl_con_message_errmsg"></span></sub></p>
                                </div>
                                

                            </div>

                            <!--div class="full-width-row add-file">
                                <a href="#" class="fa fa-plus-circle"><input type='file' id="file" name="file"><span class="add-file">Add file</span></input></a>
                            </div>

                            <div class="full-width-row recaptcha">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/images/recaptcha.png" alt="">
                            </div-->
                            <div class="full-width-row">
                                <a class="theme-btn send-msg"  onclick="contactform()">Send Message</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer class="full-width-row footer-bg">
            <div class="bizeasy-container">
                <div class="bizeasy-col-2">
                    <ul class="biz-address">
                        <li><i class="fa fa-envelope"></i><span> Support@bizeazy.net</span></li>
                        <li><i class="fa fa-building"></i><span> Sherwood Park,    <br/>Alberta, T6H 5k5 <br/>Canada</span></li>
                        <li><i class="fa fa-phone"></i><span> 780-231-9561</span></li>
                    </ul>
                    <ul class="social-row">
                        <li class="ftr-social"><a href="https://www.facebook.com/bizeazyapps/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="ftr-social"><a href="https://twitter.com/bizeazyapps" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li class="ftr-social"><a href="#"><i class="fa fa-linkedin-in"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li> -->
                    </ul>
                    <ul class="footer-link-row">
                        <li><a href="#home" class="active">Home | </a></li>
                        <li><a href="#about">About | </a></li>
                        <li><a href="#features">Features | </a></li>
                        <li><a href="#pricing">Pricing | </a></li>
                        <li><a href="#faq">FAQ | </a></li>
                        <li><a href="#blog">Blog | </a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                 <div class="full-width-row">
                    <div class="footer-copyright">© 2018 bizesay all right reserved</div>
                </div>    
            </div>
        </footer>
 <!-- Video js start from here -->
 
    <?php echo '<script'; ?>
 type="text/javascript">
        // Function to reveal lightbox and adding YouTube autoplay
        function revealVideo(div,video_id) {
        var video = document.getElementById(video_id).src;
        var abc =document.getElementById(video_id).src = video+'?autoplay=1'; // adding autoplay to the 
        document.getElementById(div).style.display = 'block';
        }

        // Hiding the lightbox and removing YouTube autoplay
        function hideVideo(div,video_id) {
        var video = document.getElementById(video_id).src;
        var cleaned = video.replace('?autoplay=1',''); // removing autoplay form url
        document.getElementById(video_id).src = cleaned;
         document.getElementById(div).style.display = 'none';
        }
    <?php echo '</script'; ?>
>


    <!-- smooth scrolling effect start -->
    <?php echo '<script'; ?>
>
        $(document).ready(function(){
           var path = window.location.href; 
           var curpage = path.substr(path.lastIndexOf('/') + 1);
           $("#myTopnav  a[href*='"+curpage+"']").addClass('active').siblings().removeClass('active');        
           $("#myTopnav a").on('click', function(event) {
                if (this.hash !== "") {
                    $(this).addClass('active').siblings().removeClass('active');        
                    event.preventDefault();
                    /*var hash = this.hash;
                    $('html, body').animate({
                           scrollTop: $(hash).offset().top - 20
                        }, 800, function(){
                       window.location.hash = hash;
                    });*/
                    var target = $(this.hash);
                    if (target.length == 0) target = $('#myTopnav a');
                    if (target.length == 0) target = $('html');
                    $('html, body').animate({ scrollTop: target.offset().top-80 }, 1000);
                }
           });
        });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        
            function contactform()
            {
                var base_url='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
';
                var vName = $('#name').val();
                var vEmail = $('#email').val();
                var message = $('#message').val();
                var vSubject = $('#vSubject').val();
                var vContact = $('#vContact').val();
                var vName_status= 0;

                var name_status =  email_id_status = message_status = sub_status= contact_status =0;
                if($.trim(vSubject) == ''){
                    $('#err_con_sub').show();
                    $(".position").addClass("cont11");
                    $('#lbl_con_sub_errmsg').html('Please Enter Subject. ');
                     sub_status=1;
                    
                }
                else
                {
                    // $('#err_con_sub').css('visibility':'hidden');
                    $('#err_con_sub').hide();   
                }

                if($.trim(vContact) == ''){
                    $('#err_con_contact').show();
                    $('#lbl_con_contact_errmsg').html('Please Enter Contact. ');
                    contact_status=1;
                }
                else
                {
                    $('#err_con_contact').hide();   
                }

                if($.trim(vName) == ''){
                    $('#err_con_name').show();
                    $('#lbl_con_name_errmsg').html('Please Enter Name. ');
                     name_status=1;
                    
                }
                else
                {
                    $('#err_con_name').hide();   
                }

                if($.trim(vEmail) == ''){
                    $('#err_con_email').show();
                    $('#lbl_con_email_errmsg').html('Please Enter Email. ');
                    email_id_status=1;
                }
                else
                {
                    $('#err_con_email').hide();   
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

                if(name_status==1 || email_id_status== 1  || message_status==1){
                    return false;
                }
                else
                {        
              
                    var url = base_url+"Home/postContact";
                    $.ajax({
                            url:url,
                            type:"POST",
                            data:{ "vName": vName, "vEmail": vEmail, "tMessage": message, "vSubject": vSubject, "vContact": vContact },
                            success:function(data){
                                
                             location.reload();
                            }
                        });  
                }   

            }
    <?php echo '</script'; ?>
>

  </div>
<!-- Accordian start from here -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/js/accordion.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $('.accordion_head').on('click', function() {
    $(this).addClass('active').siblings().removeClass('active');
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $('.accordion_head').addClass('active1');
    $('.accordion_head').on('click', function() {
    $(this).addClass('current').siblings().removeClass('current');
    });
<?php echo '</script'; ?>
>

<!-- FlexSlider -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/home/js/jquery.flexslider.js" type="text/javascript"><?php echo '</script'; ?>
>
  

  <?php echo '<script'; ?>
 type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
       start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  <?php echo '</script'; ?>
>
  <!-- Flexslider end -->

    </body>
</html>
<?php }
}
