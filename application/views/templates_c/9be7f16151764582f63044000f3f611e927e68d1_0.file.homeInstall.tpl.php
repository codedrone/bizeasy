<?php
/* Smarty version 3.1.30, created on 2018-10-25 16:36:27
  from "H:\ShopifyApp\bizeazy-web-master\application\views\templates\web\homeInstall.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bd1d4eb659ad5_49024247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9be7f16151764582f63044000f3f611e927e68d1' => 
    array (
      0 => 'H:\\ShopifyApp\\bizeazy-web-master\\application\\views\\templates\\web\\homeInstall.tpl',
      1 => 1532053666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd1d4eb659ad5_49024247 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shopify App — Installation</title>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/theme/admin/js/jquery.min.js"><?php echo '</script'; ?>
>

  <style>
    html, body { padding: 0; margin: 0; }

    body {
      font-family: "ProximaNovaLight", "Helvetica Neue", Helvetica, Arial, sans-serif;
      background-color: #f2f7fa;
    }

    h1 {
      font-weight: 300;
      font-size: 40px;
      margin-bottom: 10px;
    }

    .subhead {
      font-size: 17px;
      line-height: 32px;
      font-weight: 300;
      color: #969A9C;
    }

    input {
      width: 300px;
      height: 50px;
      padding: 10px;
      border: 1px solid #479CCf;
      color: #575757;
      background-color: #ffffff;
      box-sizing: border-box;
      border-radius: 4px 0 0 4px;
      font-size: 18px;
      float: left;
    }

    button {
      color: #ffffff;
      background-color: #3793cb;
      width: 100px;
      height: 50px;
      padding: 10px 20px 10px 20px;
      box-sizing: border-box;
      border: none;
      text-shadow: 0 1px 0 #3188bc;
      font-size: 18px;
      cursor: pointer;
      border-radius: 0 4px 4px 0;
      float: right;
    }

    button:hover {
      background-color: #479CCf;
    }

    form {
      display: block;
    }

    .container {
      text-align: center;
      margin-top: 100px;
      padding: 20px;
    }

    .container__form {
      width: 400px;
      margin: auto;
    }
    .help-block
    {
        float: left;
        color: red;
        margin-top: -1px;
        font-size: 28px;

    }
  </style>
</head>
<body>

  <main class="container" role="main">
    <header>
      <h1>Bizeazy - The 5 minute Mobile App maker </h1>
      <p class="subhead">
        <label for="shop">Enter your shop domain to log in or install this app.</label>
      </p>
    </header>

    <div class="container__form">
      <form id ="install" name="install" method="GET" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Authentication/access">
        <input type="text" name="shop" id="shop" placeholder="example.myshopify.com"/>
        <button type="button" onclick="installShopApp()">Install</button>
        <p class="help-block" id="err_install_app"><sub><span class="errvalidationtext" id="lblinstallerrmsg"></span></sub></p>
      </form>
    </div>
  </main>
  <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
function installShopApp()
{ 
    var shop = $('#shop').val();
    var base_url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
";
    var patt = new RegExp(".myshopify.com");
    var res = patt.test(shop);
    if($.trim(shop) == ''){

        $('#err_install_app').show();
        $('#lblinstallerrmsg').html('Please Enter Shop Domain.');
        return false;
    }
    else if (res==true) {
      $('#install').submit();  
    }
    
    
}

<?php echo '</script'; ?>
>
<?php }
}
