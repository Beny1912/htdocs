<?php /* Smarty version Smarty-3.1.14, created on 2014-02-28 03:57:32
         compiled from "/Applications/MAMP/htdocs/prestashop/admin3746/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12695110530ffb1cd4d5d1-13545984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bd99be35aad769ab5741254c792cf21cba8ef32' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin3746/themes/default/template/content.tpl',
      1 => 1391446184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12695110530ffb1cd4d5d1-13545984',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530ffb1cd5d0b0_39946466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ffb1cd5d0b0_39946466')) {function content_530ffb1cd5d0b0_39946466($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>