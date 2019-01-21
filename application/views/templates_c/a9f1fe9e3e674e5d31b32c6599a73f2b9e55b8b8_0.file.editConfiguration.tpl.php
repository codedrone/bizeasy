<?php
/* Smarty version 3.1.30, created on 2018-06-15 18:40:13
  from "/var/www/html/projects/bizeazy/application/views/templates/admin/configurations/editConfiguration.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b23bab54fe630_52371820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9f1fe9e3e674e5d31b32c6599a73f2b9e55b8b8' => 
    array (
      0 => '/var/www/html/projects/bizeazy/application/views/templates/admin/configurations/editConfiguration.tpl',
      1 => 1523547510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b23bab54fe630_52371820 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1 class="page-heading">Configuration</h1>

<ol class="breadcrumb default square rsaquo sm">
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Dashboard"><i class="fa fa-home"> Dashboard</i></a>
    </li>
    <li class="active">Edit Configuration</li>
</ol>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="row">
                    <div class="tab-struct custom-tab-1 mt-40">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="pill" href="#home">General</a></li>
                        <li><a data-toggle="pill" href="#menu1">Email</a></li>
                        <li><a data-toggle="pill" href="#menu2">Appearance</a></li>
                        <li><a data-toggle="pill" href="#menu3">Payment</a></li>
                        <li><a data-toggle="pill" href="#menu4">Social Media</a></li>
                        <li><a data-toggle="pill" href="#menu5">App Settings</a></li>
                    </ul>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Configurations" method="POST" name="update_configuration_frm" id="update_configuration_frm" enctype="multipart/form-data">
                        <div class="tab-content">
                             <div id="home" class="tab-pane fade in active">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_configurations']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['value']->value['eSection'] == 'General') {?>
                                        <div class="col-md-6" >
                                            <div class="form-group" >
                                                <label class="control-label mb-10" for="tTitle"><?php echo $_smarty_tpl->tpl_vars['value']->value['tTitle'];?>
</label>
                                                <?php if ($_smarty_tpl->tpl_vars['value']->value['eType'] == 'Textbox') {?>
                                                    <input type="text" class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['vValue'];?>
">
                                                <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['eType'] == 'Array') {?>
                                                    <select class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
">
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['data_array'], 'value1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value1']->value) {
?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value1']->value == $_smarty_tpl->tpl_vars['value']->value['vValue']) {?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['value1']->value;?>
</option>
                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                    </select>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['eType'] == 'Image') {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['value']->value['vValue'] == '') {?>
                                                      <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="no">
                                                        <div class="input-group">
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-danger btn-file btnfile">
                                                                Browse&hellip; <input type="file" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" class='txtboxheight'  onchange="return checkValidPhoto(this.id)">
                                                                </span>
                                                            </span>
                                                            <input type="text" class="form-control txtboxheight" readonly>
                                                        </div><!-- /.input-group -->
                                                        <span class="msgformat1" style="color: red;">[Image extension Must Be Png, Jpg and JPEG allowed.]</span>
                                                        <p class="help-block1 errcolor" id="err_photo_area"> <span class="errvalidationtext" id="lblphotoerrmsg" ></span>
                                                        </p>
                                                    <?php } else { ?>
                                                        <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="yes">
                                                        <div class="input-group">
                                                            <span id="filebtnupload" class="form-control" style="height: auto; width: auto;"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['vValue'];?>
" style="width: 150px; " ></span><br>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Configurations/remove_image/<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value['iConfigurationId'];?>
"><button type="button" class="btn btn-danger btn-perspective dngrbtn" style="width:150px; margin-top: 2px;">Remove</button></a>
                                                        </div>
                                                    <?php }?>
                                                <?php }?>
                                            </div>
                                        </div>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_configurations']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['value']->value['eSection'] == 'Email') {?>
                                        <div class="col-md-6" >
                                            <div class="form-group" >
                                                <label class="control-label mb-10" for="tTitle"><?php echo $_smarty_tpl->tpl_vars['value']->value['tTitle'];?>
</label>
                                                <?php if ($_smarty_tpl->tpl_vars['value']->value['eType'] == 'Textbox') {?>
                                                    <input type="text" class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['vValue'];?>
">
                                                <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['eType'] == 'Array') {?>
                                                    <select class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
">
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['data_array'], 'value1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value1']->value) {
?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value1']->value == $_smarty_tpl->tpl_vars['value']->value['vValue']) {?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['value1']->value;?>
</option>
                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                    </select>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['eType'] == 'Image') {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['value']->value['vValue'] == '') {?>
                                                         <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="no">
                                                        <div class="input-group">
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-danger btn-file btnfile">
                                                                Browse&hellip; <input type="file" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" class='txtboxheight'  onchange="return checkValidPhoto(this.id)">
                                                                </span>
                                                            </span>
                                                            <input type="text" class="form-control txtboxheight" readonly>
                                                        </div><!-- /.input-group -->
                                                        <span class="msgformat1" style="color: red;">[Image extension Must Be Png, Jpg and JPEG allowed.]</span>
                                                        <p class="help-block1 errcolor" id="err_photo_area"> <span class="errvalidationtext" id="lblphotoerrmsg" ></span>
                                                        </p>
                                                    <?php } else { ?>
                                                        <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="yes">
                                                        <div class="input-group">
                                                            <span id="filebtnupload"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['vValue'];?>
" style="width: 150px;"></span><br>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Configurations/remove_image/<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value['iConfigurationId'];?>
"><button type="button" class="btn btn-danger btn-perspective dngrbtn" style="width:150px; margin-top: 2px;" >Remove</button></a>
                                                        </div>
                                                    <?php }?>
                                                <?php }?>
                                            </div>
                                        </div>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_configurations']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['value']->value['eSection'] == 'Appearance') {?>
                                        <div class="col-md-6" >
                                            <div class="form-group" >
                                                <label class="control-label mb-10" for="tTitle"><?php echo $_smarty_tpl->tpl_vars['value']->value['tTitle'];?>
</label>
                                                <?php if ($_smarty_tpl->tpl_vars['value']->value['eType'] == 'Textbox') {?>
                                                    <input type="text" class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['vValue'];?>
">
                                                <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['eType'] == 'Array') {?>
                                                    <select class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
">
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['data_array'], 'value1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value1']->value) {
?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value1']->value == $_smarty_tpl->tpl_vars['value']->value['vValue']) {?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['value1']->value;?>
</option>
                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                    </select>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['eType'] == 'Image') {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['value']->value['vValue'] == '') {?>
                                                        <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="no">
                                                        <div class="input-group">
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-danger btn-file btnfile">
                                                                Browse&hellip; <input type="file" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" class='txtboxheight'  onchange="return checkValidPhoto(this.id)">
                                                                </span>
                                                            </span>
                                                            <input type="text" class="form-control txtboxheight" readonly>
                                                        </div><!-- /.input-group -->
                                                        <span class="msgformat1" style="color: red;">[Image extension Must Be Png, Jpg and JPEG allowed.]</span>
                                                        <p class="help-block1 errcolor" id="err_photo_area"> <span class="errvalidationtext" id="lblphotoerrmsg" ></span>
                                                        </p>
                                                    <?php } else { ?>
                                                        <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="yes">
                                                        <div class="input-group">
                                                            <span id="filebtnupload"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['vValue'];?>
" style="width: 150px;"></span><br>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Configurations/remove_image/<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value['iConfigurationId'];?>
"><button type="button" class="btn btn-danger btn-perspective dngrbtn" style="width:150px; margin-top: 2px;" >Remove</button></a>
                                                        </div>
                                                    <?php }?>
                                                <?php }?>
                                            </div>
                                        </div>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_configurations']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['value']->value['eSection'] == 'Payment') {?>
                                        <div class="col-md-6" >
                                            <div class="form-group" >
                                                <label class="control-label mb-10" for="tTitle"><?php echo $_smarty_tpl->tpl_vars['value']->value['tTitle'];?>
</label>
                                                 <?php if ($_smarty_tpl->tpl_vars['value']->value['eType'] == 'Textbox') {?>
                                                    <input type="text" class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['vValue'];?>
">
                                                <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['eType'] == 'Array') {?>
                                                    <select class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
">
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['data_array'], 'value1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value1']->value) {
?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value1']->value == $_smarty_tpl->tpl_vars['value']->value['vValue']) {?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['value1']->value;?>
</option>
                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                    </select>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['eType'] == 'Image') {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['value']->value['vValue'] == '') {?>
                                                         <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="no">
                                                        <div class="input-group">
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-danger btn-file btnfile">
                                                                Browse&hellip; <input type="file" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" class='txtboxheight'  onchange="return checkValidPhoto(this.id)">
                                                                </span>
                                                            </span>
                                                            <input type="text" class="form-control txtboxheight" readonly>
                                                        </div><!-- /.input-group -->
                                                        <span class="msgformat1" style="color: red;">[Image extension Must Be Png, Jpg and JPEG allowed.]</span>
                                                        <p class="help-block1 errcolor" id="err_photo_area"> <span class="errvalidationtext" id="lblphotoerrmsg" ></span>
                                                        </p>
                                                    <?php } else { ?>
                                                        <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="yes">
                                                        <div class="input-group">
                                                            <span id="filebtnupload"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['vValue'];?>
" style="width: 150px;"></span><br>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Configurations/remove_image/<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value['iConfigurationId'];?>
"><button type="button" class="btn btn-danger btn-perspective dngrbtn" style="width:150px; margin-top: 2px;" >Remove</button></a>
                                                        </div>
                                                    <?php }?>
                                                <?php }?>
                                            </div>
                                        </div>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
                            </div>
                            <div id="menu4" class="tab-pane fade">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_configurations']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['value']->value['eSection'] == 'Social Media') {?>
                                        <div class="col-md-6" >
                                            <div class="form-group" >
                                                <label class="control-label mb-10" for="tTitle"><?php echo $_smarty_tpl->tpl_vars['value']->value['tTitle'];?>
</label>
                                                 <?php if ($_smarty_tpl->tpl_vars['value']->value['eType'] == 'Textbox') {?>
                                                    <input type="text" class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['vValue'];?>
">
                                                <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['eType'] == 'Array') {?>
                                                    <select class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
">
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['data_array'], 'value1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value1']->value) {
?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value1']->value == $_smarty_tpl->tpl_vars['value']->value['vValue']) {?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['value1']->value;?>
</option>
                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                    </select>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['eType'] == 'Image') {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['value']->value['vValue'] == '') {?>
                                                         <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="no">
                                                        <div class="input-group">
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-danger btn-file btnfile">
                                                                Browse&hellip; <input type="file" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" class='txtboxheight'  onchange="return checkValidPhoto(this.id)">
                                                                </span>
                                                            </span>
                                                            <input type="text" class="form-control txtboxheight" readonly>
                                                        </div><!-- /.input-group -->
                                                        <span class="msgformat1" style="color: red;">[Image extension Must Be Png, Jpg and JPEG allowed.]</span>
                                                        <p class="help-block1 errcolor" id="err_photo_area"> <span class="errvalidationtext" id="lblphotoerrmsg" ></span>
                                                        </p>
                                                    <?php } else { ?>  
                                                        <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="yes">
                                                        <div class="input-group">
                                                            <span id="filebtnupload"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['vValue'];?>
" style="width: 150px;"></span><br>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Configurations/remove_image/<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value['iConfigurationId'];?>
"><button type="button" class="btn btn-danger btn-perspective dngrbtn" style="width:150px; margin-top: 2px;" >Remove</button></a>
                                                        </div>
                                                    <?php }?>
                                                <?php }?>
                                            </div>
                                        </div>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
                            </div>
                            <div id="menu5" class="tab-pane fade">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_configurations']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['value']->value['eSection'] == 'App Settings') {?>
                                        <div class="col-md-6" >
                                            <div class="form-group" >
                                                <label class="control-label mb-10" for="tTitle"><?php echo $_smarty_tpl->tpl_vars['value']->value['tTitle'];?>
</label>
                                                 <?php if ($_smarty_tpl->tpl_vars['value']->value['eType'] == 'Textbox') {?>
                                                    <input type="text" class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['vValue'];?>
">
                                                <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['eType'] == 'Array') {?>
                                                    <select class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
">
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['data_array'], 'value1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value1']->value) {
?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value1']->value == $_smarty_tpl->tpl_vars['value']->value['vValue']) {?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['value1']->value;?>
</option>
                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                    </select>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['eType'] == 'Image') {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['value']->value['vValue'] == '') {?>
                                                        < <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="no">
                                                        <div class="input-group">
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-danger btn-file btnfile">
                                                                Browse&hellip; <input type="file" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
" class='txtboxheight'  onchange="return checkValidPhoto(this.id)">
                                                                </span>
                                                            </span>
                                                            <input type="text" class="form-control txtboxheight" readonly>
                                                        </div><!-- /.input-group -->
                                                        <span class="msgformat1" style="color: red;">[Image extension Must Be Png, Jpg and JPEG allowed.]</span>
                                                        <p class="help-block1 errcolor" id="err_photo_area"> <span class="errvalidationtext" id="lblphotoerrmsg" ></span>
                                                        </p>
                                                    <?php } else { ?>
                                                        <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="yes">
                                                        <div class="input-group">
                                                            <span id="filebtnupload"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['vValue'];?>
" style="width: 150px;"></span><br>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Configurations/remove_image/<?php echo $_smarty_tpl->tpl_vars['value']->value['vName'];?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value['iConfigurationId'];?>
"><button type="button" class="btn btn-danger btn-perspective dngrbtn" style="width:150px; margin-top: 2px;" >Remove</button></a>
                                                        </div>
                                                    <?php }?>
                                                <?php }?>
                                            </div>
                                        </div>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </div>
                            <div class="col-md-12">
                                <div class="pull-right spcRight">
                                    <button type="button" class="btn btn-success mr-10 btnFrmTopSpc" onclick="return form_validate();">Save</button>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/Configurations">
                                    <button type="button" class="btn btn-danger 
                                btnFrmTopSpc" >Cancel</button>  </a>     
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


<?php echo '<script'; ?>
 type="text/javascript">
    setInterval(function() {
        $('#err_message_area').fadeOut("slow");
    }, 5000);

    function form_validate() {
        var photo_status = $('#photo_status').val();
         $('#update_configuration_frm').submit(); 
    }
 <?php echo '</script'; ?>
><?php }
}
