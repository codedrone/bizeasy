<?php
/* Smarty version 3.1.30, created on 2018-10-26 20:42:34
  from "H:\ShopifyApp\bizeazy-web-master\application\views\templates\web\shopsDashbord\publishApp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bd3601a6452e7_52860087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc25d008ab869b77a0c5f2de07f69c008ba6aeb5' => 
    array (
      0 => 'H:\\ShopifyApp\\bizeazy-web-master\\application\\views\\templates\\web\\shopsDashbord\\publishApp.tpl',
      1 => 1532053666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd3601a6452e7_52860087 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/css/vendor.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/css/flat-admin.css">
<style type="text/css">
    header{
        height: 61px ! important;
    }
    header h1{
        margin-top: -4px !important;
        margin-bottom: -5px !important;
        font-size: 17px !important;
    }
    .phone-outer-wrap
    {
        top:-13px !important;
    }
    .info-text-prg {
    font-size: 16px !important;
    }

</style>
<div class="bizeazy-full-row">
    <div class="bizeazy-app-info-sec" style="width: 100%; padding-bottom: 29px;">
        <h2 class="bizeazy-app-infohd"><span>4</span>  Choose Your Membership</h2>
            <p>Please Note : All membership plans , whether you purchase or subscribe, require you to have a developer account with Apple and /or Google. For your convenience , you can find step-by- step instructions here: <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
ShopifyApp/instructionsApple">Apple</a> and <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
ShopifyApp/instructionsGoogle">Google</a> </p>
            <?php if ($_smarty_tpl->tpl_vars['membershipsData']->value) {?>
            <p>Your current membership is 
                <?php if ($_smarty_tpl->tpl_vars['membershipsData']->value['eMembershipType'] == 'Monthly') {?>
                     <?php echo $_smarty_tpl->tpl_vars['membershipsData']->value['eMembershipName'];?>
 <?php echo $_smarty_tpl->tpl_vars['membershipsData']->value['eMembershipType'];?>

                <?php } else { ?> 
                    <?php echo $_smarty_tpl->tpl_vars['membershipsData']->value['eMembershipName'];?>
 
                <?php }?><a onclick="askReason();" href="#">Click here</a> to cancel membership .</p>
            <?php } else { ?>
                <p>Please Select Memebership</p>
            <?php }?>
    </div>
    <form data-shopify-app-submit="bar_save" class="new_membership" id="new_membership" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
ShopifyApp/memberShip" accept-charset="UTF-8" method="post">
    <input type="hidden" name="iShopId" id="iShopId" value="<?php echo $_smarty_tpl->tpl_vars['singleRecord']->value['iShopId'];?>
">
    <input type="hidden" name="iMemberShipId" id="iMemberShipId" value="<?php echo $_smarty_tpl->tpl_vars['membershipsData']->value['iMemberShipId'];?>
">
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-body no-padding">
                    <div class="row no-gap">
                        <div class="col-md-4 col-sm-6">
                            <div class="pricing-table <?php if ($_smarty_tpl->tpl_vars['membershipsData']->value['eMembershipName'] == 'One Time Purchase') {?> highlight <?php }?>">
                                <div class="pricing-heading">
                                    <div class="title"> PURCHASE ( ONE TIME ) </div>
                                        <?php if ($_smarty_tpl->tpl_vars['membershipsData']->value) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['membershipsData']->value['eMembershipName'] == 'One Time Purchase') {?>
                                                <p class="memeberShipActive">Your current membership is 
                                                
                                                    <?php echo $_smarty_tpl->tpl_vars['membershipsData']->value['eMembershipName'];?>
 .</p>
                                            <?php } else { ?>
                                                 <p class="memeberShipInActive">
                                            <?php }?>
                                        <?php }?>
                                    <div class="price">
                                        <div class="title">$499.00</div>
                                        <div class="subtitle info-text-prg">A one time charge allowing you to purchase your app outright.This means no recurring monthly rental fees, and that the app is all yours at a fraction of the cost it would take a hire a developer to create it for you!. </div>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                    <ul class="description">
                                        <li><i class="icon ion-ios-lightbulb"></i> IOS and Android </li>
                                        <li><i class="icon ion-person-stalker"></i> Store integration </li>
                                        <li><i class="icon ion-ios-chatboxes-outline"></i> Push Notifications </li>
                                        <li><i class="icon ion-ios-chatboxes-outline"></i> App updates </li>
                                        <li><i class="icon ion-ios-chatboxes-outline"></i> &nbsp; </li>
                                    </ul>
                                </div>
                                <div class="pricing-footer">
                                    <button type="button" class="btn btn-default <?php if ($_smarty_tpl->tpl_vars['membershipsData']->value['eMembershipName'] != 'One Time Purchase') {?> btn-success <?php }?>" value="One Time Purchase" id="eMembershipName" name="eMembershipName"  onclick="checkMemebership(this.value)">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="pricing-table no-border-left <?php if ($_smarty_tpl->tpl_vars['membershipsData']->value['eMembershipName'] == 'Standard') {?> highlight <?php }?>">
                                <div class="pricing-heading">
                                    <div class="title">MONTHLY MEMBERSHIP ( STANDARD ) </div>
                                        <?php if ($_smarty_tpl->tpl_vars['membershipsData']->value) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['membershipsData']->value['eMembershipName'] == 'Standard') {?>
                                                <p class="memeberShipActive">
                                                Your current membership is 
                                                         <?php echo $_smarty_tpl->tpl_vars['membershipsData']->value['eMembershipName'];?>
 <?php echo $_smarty_tpl->tpl_vars['membershipsData']->value['eMembershipType'];?>
 .</p>
                                            <?php } else { ?>
                                                <p class="memeberShipInActive"></p>
                                            <?php }?>
                                        <?php }?>
                                    <div class="price">
                                        <div class="title">$29.99</div>
                                          <div class="subtitle info-text-prg">A monthly subscription to a "Live App" licence.This means that your app will remain live on the AppStores as long as your subcription to Bizeazy is in good standing.You can purchase your App outright at anytime. </div>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                    <ul class="description">
                                        <li><i class="icon ion-ios-lightbulb"></i> Android only </li>
                                        <li><i class="icon ion-person-stalker"></i> Store integration </li>
                                        <li><i class="icon ion-ios-chatboxes-outline"></i> Push Notifications </li>
                                        <li><i class="icon ion-ios-chatboxes-outline"></i> App updates </li>
                                        <li><i class="icon ion-ios-chatboxes-outline"></i> &nbsp; </li>
                                    </ul>
                                </div>
                                <div class="pricing-footer">
                                    <button type="button" class="btn btn-default <?php if ($_smarty_tpl->tpl_vars['membershipsData']->value['eMembershipName'] != 'Standard') {?> btn-success <?php }?>" value="Standard" id="eMembershipName" name="eMembershipName"  onclick="checkMemebership(this.value)">SUBSCRIBE</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="pricing-table <?php if ($_smarty_tpl->tpl_vars['membershipsData']->value['eMembershipName'] == 'Business') {?> highlight <?php }?>">
                                <div class="pricing-heading">
                                    <div class="title"> MONTHLY MEMBERSHIP ( BUSINESS ) </div>
                                        <?php if ($_smarty_tpl->tpl_vars['membershipsData']->value) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['membershipsData']->value['eMembershipName'] == 'Business') {?>
                                                <p class="memeberShipActive">
                                                Your current membership is 
                                                     <?php echo $_smarty_tpl->tpl_vars['membershipsData']->value['eMembershipName'];?>
 <?php echo $_smarty_tpl->tpl_vars['membershipsData']->value['eMembershipType'];?>
 .</p>
                                            <?php } else { ?>
                                                <p class="memeberShipInActive"></p>
                                            <?php }?>
                                        <?php }?>
                                    <div class="price">
                                        <div class="title">$49.99</div>
                                            <div class="subtitle info-text-prg">A monthly subscription to a "Live App" licence.This means that your app will remain live on the AppStores as long as your subcription to Bizeazy is in good standing.You can purchase your App outright at anytime.</div>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                    <ul class="description">
                                        <li><i class="icon ion-ios-lightbulb"></i> IOS and Android </li>
                                        <li><i class="icon ion-person-stalker"></i> Store integration </li>
                                        <li><i class="icon ion-ios-chatboxes-outline"></i> Push Notifications </li>
                                        <li><i class="icon ion-ios-chatboxes-outline"></i> App updates </li>
                                        <li><i class="icon ion-ios-chatboxes-outline"></i> &nbsp; </li>
                                    </ul>
                                </div>
                                <div class="pricing-footer">
                                    <button  type="button" class="btn btn-default <?php if ($_smarty_tpl->tpl_vars['membershipsData']->value['eMembershipName'] != 'Business') {?> btn-success <?php }?>" value="Business" id="eMembershipName" name="eMembershipName" onclick="checkMemebership(this.value)">SUBSCRIBE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
    <div aria-hidden="false" role="dialog" tabindex="-1" id="DisplayMemebershipInfo" class="modal fade in" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content modal-no-shadow modal-no-border modalcontentrad">
                <div class="modal-body">
                    <p>Thank you for Subscribe ! </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="close-modal" onclick="return disable()">Close</button>
                </div><!-- /.modal-footer -->
            </div><!-- /.modal-content .modal-no-shadow .modal-no-border .the-box .danger .full -->
        </div><!-- /.modal-dialog -->
    </div>
        <div aria-hidden="false" role="dialog" tabindex="-1" id="thanksMeassage" class="modal fade in" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content modal-no-shadow modal-no-border modalcontentrad">
                <div class="modal-body">
                    <p>Thank you for FeedBack ! </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="close-modal" onclick="return disableMenu()">Close</button>
                </div><!-- /.modal-footer -->
            </div><!-- /.modal-content .modal-no-shadow .modal-no-border .the-box .danger .full -->
        </div><!-- /.modal-dialog -->
    </div>
    <div aria-hidden="false" role="dialog" tabindex="-1" id="askReason" class="modal fade in" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-right: -50px;margin-left: 50px;">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Feedback</h3>
                </div>
                <div class="modal-body">
                    <form name="updateAskReasonMemebership" id="updateAskReasonMemebership" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
ShopifyApp/publishApp" method="post" >
                        <input type="hidden" name="iShopId" id="iShopId" value="<?php echo $_smarty_tpl->tpl_vars['singleRecord']->value['iShopId'];?>
">
                        <input value="I dont like app"  name="tAskReason" id="tAskReason" type="radio"> I don't  like app.<br>
                        <input value="App is not functioning any more"  name="tAskReason" id="tAskReason" type="radio"> App is not functioning any more.<br>
                        <input value="I would like to build my own custom app"  name="tAskReason" id="tAskReason" type="radio">  I would like to build my own custom app.<br>
                        <input value="I am no longer using shopify store"   name="tAskReason" id="tAskReason" type="radio"> I am no longer using shopify store.<br>
                        <input value="Support is not good"   name="tAskReason" id="tAskReason" type="radio" checked="">  Support is not good.<br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="close-modal" onclick="return disableMenu()">Close</button>
                    <button type="button" class="btn btn-primary" onclick="return UpdateMemberShip()">Submit</button>
                </div>
            </div>
        </div>
    </div>
    
<style type="text/css">
    .modal-body{
        padding-top: 15px;
        padding-bottom: 0px;
    }
    .modal-footer
    {
        padding-top: 15px;
        padding-bottom: 15px;
    }
    .memeberShipActive{
        margin: 11px;
        font-size: 19px;
        background-color: white;
        color: black;

    }
    .memeberShipInActive
    {
        margin-bottom: 71px;
    }
</style>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/js/vendor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/js/js/app.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/js/jquery-latest.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/web/js/jquery.headshrinker.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
>
jQuery(document).ready(function () {
    jQuery('header').headshrinker({ fontSize: "13px", mobileMenu: true });
});
 function checkMemebership(eMembershipName)
 {      
            var iShopId = $('#iShopId').val();
            var iMemberShipId = $('#iMemberShipId').val();
            var base_url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
";
            var url = base_url+"ShopifyApp/memberShip";
            $.ajax({
                    url:url,
                    type:"POST",
                    data: { "iShopId": iShopId, "eMembershipName" : eMembershipName, "iMemberShipId" : iMemberShipId },
                    success:function(data){
                    $('#DisplayMemebershipInfo').css({ "opacity":"1","background": "rgba(0, 0, 0, 0.5)"});
                    $('#DisplayMemebershipInfo').show();        
                     location.reload();   
                    }
                });
       
         // $('#new_membership').submit();
    
 }
     function disableMenu()    {
          $("#DisplayMemebershipInfo").css("display", "none");    
          $("#askReason").css("display", "none"); 
          $("#thanksMeassage").css("display", "none"); 
            
    }
    function disable()    {
          $("#DisplayMemebershipInfo").css("display", "none");    
           location.reload();   
            
    }
    function askReason()
    {
        $('#askReason').css({ "opacity":"1","background": "rgba(0, 0, 0, 0.5)"});
        $("#DisplayMemebershipInfo").css("display", "none");    
        $('#askReason').show();
    }
    function UpdateMemberShip()
    {

        $("#askReason").css("display", "none");
        $("#DisplayMemebershipInfo").css("display", "none"); 
            var tAskReason = $("input[name='tAskReason']:checked").val();
            var iShopId = $('#iShopId').val();
            var iMemberShipId = $('#iMemberShipId').val();
            var base_url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
";
            var url = base_url+"ShopifyApp/publishApp";
            $.ajax({
                    url:url,
                    type:"POST",
                    data: { "iShopId": iShopId, "tAskReason" : tAskReason ,"iMemberShipId" :iMemberShipId },
                    success:function(data){
                        
                        $('#thanksMeassage').css({ "opacity":"1","background": "rgba(0, 0, 0, 0.5)"});
                        $('#thanksMeassage').show();
                        location.reload();   
                    }
                });
          
        // $('#updateAskReasonMemebership').submit();
    }
<?php echo '</script'; ?>
>
<?php }
}
