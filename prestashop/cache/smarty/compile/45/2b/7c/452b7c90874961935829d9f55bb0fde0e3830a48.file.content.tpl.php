<?php /* Smarty version Smarty-3.1.14, created on 2014-02-28 03:48:27
         compiled from "/Applications/MAMP/htdocs/prestashop/admin/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:819820415530ff8fb1d07a2-11498999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '452b7c90874961935829d9f55bb0fde0e3830a48' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1391446184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '819820415530ff8fb1d07a2-11498999',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530ff8fb1dd720_50740137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ff8fb1dd720_50740137')) {function content_530ff8fb1dd720_50740137($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>