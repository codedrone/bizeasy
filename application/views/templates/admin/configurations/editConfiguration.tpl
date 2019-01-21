<h1 class="page-heading">Configuration</h1>

<ol class="breadcrumb default square rsaquo sm">
    <li><a href="{$base_url}admin/Dashboard"><i class="fa fa-home"> Dashboard</i></a>
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
                    <form action="{$base_url}admin/Configurations" method="POST" name="update_configuration_frm" id="update_configuration_frm" enctype="multipart/form-data">
                        <div class="tab-content">
                             <div id="home" class="tab-pane fade in active">
                                {foreach from=$all_configurations item=$value}
                                    {if $value.eSection eq 'General'}
                                        <div class="col-md-6" >
                                            <div class="form-group" >
                                                <label class="control-label mb-10" for="tTitle">{$value.tTitle}</label>
                                                {if $value.eType eq 'Textbox'}
                                                    <input type="text" class="form-control" id="{$value.vName}" name="{$value.vName}" placeholder="" value="{$value.vValue}">
                                                {elseif $value.eType eq 'Array'}
                                                    <select class="form-control" name="{$value.vName}" id="{$value.vName}">
                                                            {foreach from=$value.data_array item=$value1}
                                                                <option value="{$value}" {if $value1 eq $value.vValue} selected {/if} >{$value1}</option>
                                                                {/foreach}
                                                    </select>
                                                {elseif $value.eType eq 'Image'}
                                                    {if $value.vValue eq ''}
                                                      <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="no">
                                                        <div class="input-group">
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-danger btn-file btnfile">
                                                                Browse&hellip; <input type="file" name="{$value.vName}" id="{$value.vName}" class='txtboxheight'  onchange="return checkValidPhoto(this.id)">
                                                                </span>
                                                            </span>
                                                            <input type="text" class="form-control txtboxheight" readonly>
                                                        </div><!-- /.input-group -->
                                                        <span class="msgformat1" style="color: red;">[Image extension Must Be Png, Jpg and JPEG allowed.]</span>
                                                        <p class="help-block1 errcolor" id="err_photo_area"> <span class="errvalidationtext" id="lblphotoerrmsg" ></span>
                                                        </p>
                                                    {else}
                                                        <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="yes">
                                                        <div class="input-group">
                                                            <span id="filebtnupload" class="form-control" style="height: auto; width: auto;"><img src="{$value.vValue}" style="width: 150px; " ></span><br>
                                                            <a href="{$base_url}admin/Configurations/remove_image/{$value.vName}/{$value.iConfigurationId}"><button type="button" class="btn btn-danger btn-perspective dngrbtn" style="width:150px; margin-top: 2px;">Remove</button></a>
                                                        </div>
                                                    {/if}
                                                {/if}
                                            </div>
                                        </div>
                                    {/if}
                                {/foreach}
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                {foreach from=$all_configurations item=$value}
                                    {if $value.eSection eq 'Email'}
                                        <div class="col-md-6" >
                                            <div class="form-group" >
                                                <label class="control-label mb-10" for="tTitle">{$value.tTitle}</label>
                                                {if $value.eType eq 'Textbox'}
                                                    <input type="text" class="form-control" id="{$value.vName}" name="{$value.vName}" placeholder="" value="{$value.vValue}">
                                                {elseif $value.eType eq 'Array'}
                                                    <select class="form-control" name="{$value.vName}" id="{$value.vName}">
                                                            {foreach from=$value.data_array item=$value1}
                                                                <option value="{$value}" {if $value1 eq $value.vValue} selected {/if} >{$value1}</option>
                                                                {/foreach}
                                                    </select>
                                                {elseif $value.eType eq 'Image'}
                                                    {if $value.vValue eq ''}
                                                         <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="no">
                                                        <div class="input-group">
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-danger btn-file btnfile">
                                                                Browse&hellip; <input type="file" name="{$value.vName}" id="{$value.vName}" class='txtboxheight'  onchange="return checkValidPhoto(this.id)">
                                                                </span>
                                                            </span>
                                                            <input type="text" class="form-control txtboxheight" readonly>
                                                        </div><!-- /.input-group -->
                                                        <span class="msgformat1" style="color: red;">[Image extension Must Be Png, Jpg and JPEG allowed.]</span>
                                                        <p class="help-block1 errcolor" id="err_photo_area"> <span class="errvalidationtext" id="lblphotoerrmsg" ></span>
                                                        </p>
                                                    {else}
                                                        <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="yes">
                                                        <div class="input-group">
                                                            <span id="filebtnupload"><img src="{$value.vValue}" style="width: 150px;"></span><br>
                                                            <a href="{$base_url}admin/Configurations/remove_image/{$value.vName}/{$value.iConfigurationId}"><button type="button" class="btn btn-danger btn-perspective dngrbtn" style="width:150px; margin-top: 2px;" >Remove</button></a>
                                                        </div>
                                                    {/if}
                                                {/if}
                                            </div>
                                        </div>
                                    {/if}
                                {/foreach}
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                {foreach from=$all_configurations item=$value}
                                    {if $value.eSection eq 'Appearance'}
                                        <div class="col-md-6" >
                                            <div class="form-group" >
                                                <label class="control-label mb-10" for="tTitle">{$value.tTitle}</label>
                                                {if $value.eType eq 'Textbox'}
                                                    <input type="text" class="form-control" id="{$value.vName}" name="{$value.vName}" placeholder="" value="{$value.vValue}">
                                                {elseif $value.eType eq 'Array'}
                                                    <select class="form-control" name="{$value.vName}" id="{$value.vName}">
                                                            {foreach from=$value.data_array item=$value1}
                                                                <option value="{$value}" {if $value1 eq $value.vValue} selected {/if} >{$value1}</option>
                                                                {/foreach}
                                                    </select>
                                                {elseif $value.eType eq 'Image'}
                                                    {if $value.vValue eq ''}
                                                        <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="no">
                                                        <div class="input-group">
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-danger btn-file btnfile">
                                                                Browse&hellip; <input type="file" name="{$value.vName}" id="{$value.vName}" class='txtboxheight'  onchange="return checkValidPhoto(this.id)">
                                                                </span>
                                                            </span>
                                                            <input type="text" class="form-control txtboxheight" readonly>
                                                        </div><!-- /.input-group -->
                                                        <span class="msgformat1" style="color: red;">[Image extension Must Be Png, Jpg and JPEG allowed.]</span>
                                                        <p class="help-block1 errcolor" id="err_photo_area"> <span class="errvalidationtext" id="lblphotoerrmsg" ></span>
                                                        </p>
                                                    {else}
                                                        <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="yes">
                                                        <div class="input-group">
                                                            <span id="filebtnupload"><img src="{$value.vValue}" style="width: 150px;"></span><br>
                                                            <a href="{$base_url}admin/Configurations/remove_image/{$value.vName}/{$value.iConfigurationId}"><button type="button" class="btn btn-danger btn-perspective dngrbtn" style="width:150px; margin-top: 2px;" >Remove</button></a>
                                                        </div>
                                                    {/if}
                                                {/if}
                                            </div>
                                        </div>
                                    {/if}
                                {/foreach} 
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                {foreach from=$all_configurations item=$value}
                                    {if $value.eSection eq 'Payment'}
                                        <div class="col-md-6" >
                                            <div class="form-group" >
                                                <label class="control-label mb-10" for="tTitle">{$value.tTitle}</label>
                                                 {if $value.eType eq 'Textbox'}
                                                    <input type="text" class="form-control" id="{$value.vName}" name="{$value.vName}" placeholder="" value="{$value.vValue}">
                                                {elseif $value.eType eq 'Array'}
                                                    <select class="form-control" name="{$value.vName}" id="{$value.vName}">
                                                            {foreach from=$value.data_array item=$value1}
                                                                <option value="{$value}" {if $value1 eq $value.vValue} selected {/if} >{$value1}</option>
                                                                {/foreach}
                                                    </select>
                                                {elseif $value.eType eq 'Image'}
                                                    {if $value.vValue eq ''}
                                                         <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="no">
                                                        <div class="input-group">
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-danger btn-file btnfile">
                                                                Browse&hellip; <input type="file" name="{$value.vName}" id="{$value.vName}" class='txtboxheight'  onchange="return checkValidPhoto(this.id)">
                                                                </span>
                                                            </span>
                                                            <input type="text" class="form-control txtboxheight" readonly>
                                                        </div><!-- /.input-group -->
                                                        <span class="msgformat1" style="color: red;">[Image extension Must Be Png, Jpg and JPEG allowed.]</span>
                                                        <p class="help-block1 errcolor" id="err_photo_area"> <span class="errvalidationtext" id="lblphotoerrmsg" ></span>
                                                        </p>
                                                    {else}
                                                        <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="yes">
                                                        <div class="input-group">
                                                            <span id="filebtnupload"><img src="{$value.vValue}" style="width: 150px;"></span><br>
                                                            <a href="{$base_url}admin/Configurations/remove_image/{$value.vName}/{$value.iConfigurationId}"><button type="button" class="btn btn-danger btn-perspective dngrbtn" style="width:150px; margin-top: 2px;" >Remove</button></a>
                                                        </div>
                                                    {/if}
                                                {/if}
                                            </div>
                                        </div>
                                    {/if}
                                {/foreach} 
                            </div>
                            <div id="menu4" class="tab-pane fade">
                                {foreach from=$all_configurations item=$value}
                                    {if $value.eSection eq 'Social Media'}
                                        <div class="col-md-6" >
                                            <div class="form-group" >
                                                <label class="control-label mb-10" for="tTitle">{$value.tTitle}</label>
                                                 {if $value.eType eq 'Textbox'}
                                                    <input type="text" class="form-control" id="{$value.vName}" name="{$value.vName}" placeholder="" value="{$value.vValue}">
                                                {elseif $value.eType eq 'Array'}
                                                    <select class="form-control" name="{$value.vName}" id="{$value.vName}">
                                                            {foreach from=$value.data_array item=$value1}
                                                                <option value="{$value}" {if $value1 eq $value.vValue} selected {/if} >{$value1}</option>
                                                                {/foreach}
                                                    </select>
                                                {elseif $value.eType eq 'Image'}
                                                    {if $value.vValue eq ''}
                                                         <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="no">
                                                        <div class="input-group">
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-danger btn-file btnfile">
                                                                Browse&hellip; <input type="file" name="{$value.vName}" id="{$value.vName}" class='txtboxheight'  onchange="return checkValidPhoto(this.id)">
                                                                </span>
                                                            </span>
                                                            <input type="text" class="form-control txtboxheight" readonly>
                                                        </div><!-- /.input-group -->
                                                        <span class="msgformat1" style="color: red;">[Image extension Must Be Png, Jpg and JPEG allowed.]</span>
                                                        <p class="help-block1 errcolor" id="err_photo_area"> <span class="errvalidationtext" id="lblphotoerrmsg" ></span>
                                                        </p>
                                                    {else}  
                                                        <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="yes">
                                                        <div class="input-group">
                                                            <span id="filebtnupload"><img src="{$value.vValue}" style="width: 150px;"></span><br>
                                                            <a href="{$base_url}admin/Configurations/remove_image/{$value.vName}/{$value.iConfigurationId}"><button type="button" class="btn btn-danger btn-perspective dngrbtn" style="width:150px; margin-top: 2px;" >Remove</button></a>
                                                        </div>
                                                    {/if}
                                                {/if}
                                            </div>
                                        </div>
                                    {/if}
                                {/foreach} 
                            </div>
                            <div id="menu5" class="tab-pane fade">
                                {foreach from=$all_configurations item=$value}
                                    {if $value.eSection eq 'App Settings'}
                                        <div class="col-md-6" >
                                            <div class="form-group" >
                                                <label class="control-label mb-10" for="tTitle">{$value.tTitle}</label>
                                                 {if $value.eType eq 'Textbox'}
                                                    <input type="text" class="form-control" id="{$value.vName}" name="{$value.vName}" placeholder="" value="{$value.vValue}">
                                                {elseif $value.eType eq 'Array'}
                                                    <select class="form-control" name="{$value.vName}" id="{$value.vName}">
                                                            {foreach from=$value.data_array item=$value1}
                                                                <option value="{$value}" {if $value1 eq $value.vValue} selected {/if} >{$value1}</option>
                                                                {/foreach}
                                                    </select>
                                                {elseif $value.eType eq 'Image'}
                                                    {if $value.vValue eq ''}
                                                        < <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="no">
                                                        <div class="input-group">
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-danger btn-file btnfile">
                                                                Browse&hellip; <input type="file" name="{$value.vName}" id="{$value.vName}" class='txtboxheight'  onchange="return checkValidPhoto(this.id)">
                                                                </span>
                                                            </span>
                                                            <input type="text" class="form-control txtboxheight" readonly>
                                                        </div><!-- /.input-group -->
                                                        <span class="msgformat1" style="color: red;">[Image extension Must Be Png, Jpg and JPEG allowed.]</span>
                                                        <p class="help-block1 errcolor" id="err_photo_area"> <span class="errvalidationtext" id="lblphotoerrmsg" ></span>
                                                        </p>
                                                    {else}
                                                        <input type="hidden" class="form-control" name="photo_status" id="photo_status" value="yes">
                                                        <div class="input-group">
                                                            <span id="filebtnupload"><img src="{$value.vValue}" style="width: 150px;"></span><br>
                                                            <a href="{$base_url}admin/Configurations/remove_image/{$value.vName}/{$value.iConfigurationId}"><button type="button" class="btn btn-danger btn-perspective dngrbtn" style="width:150px; margin-top: 2px;" >Remove</button></a>
                                                        </div>
                                                    {/if}
                                                {/if}
                                            </div>
                                        </div>
                                    {/if}
                                {/foreach}
                            </div>
                            <div class="col-md-12">
                                <div class="pull-right spcRight">
                                    <button type="button" class="btn btn-success mr-10 btnFrmTopSpc" onclick="return form_validate();">Save</button>
                                    <a href="{$base_url}admin/Configurations">
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


<script type="text/javascript">
    setInterval(function() {
        $('#err_message_area').fadeOut("slow");
    }, 5000);

    function form_validate() {
        var photo_status = $('#photo_status').val();
         $('#update_configuration_frm').submit(); 
    }
 </script>