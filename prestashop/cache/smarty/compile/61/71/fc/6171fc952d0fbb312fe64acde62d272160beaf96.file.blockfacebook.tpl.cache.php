<?php /* Smarty version Smarty-3.1.14, created on 2014-02-28 04:07:29
         compiled from "/Applications/MAMP/htdocs/prestashop/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:326115003530ffd7187e623-94817250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6171fc952d0fbb312fe64acde62d272160beaf96' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/blockfacebook/blockfacebook.tpl',
      1 => 1391446186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326115003530ffd7187e623-94817250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530ffd7189afe0_35957301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ffd7189afe0_35957301')) {function content_530ffd7189afe0_35957301($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/prestashop/tools/smarty/plugins/modifier.escape.php';
?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!=''){?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div
			class="fb-like-box"
			data-href="http://www.facebook.com/<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['facebookurl']->value, 'html', 'UTF-8');?>
"
			data-colorscheme="light"
			data-show-faces="true"
			data-header="false"
			data-stream="false"
			data-show-border="false">
		</div>
	</div>
</div>
<?php }?><?php }} ?>