<?php /* Smarty version Smarty-3.1.14, created on 2014-02-28 04:08:10
         compiled from "/Applications/MAMP/htdocs/prestashop/beny/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1691352853530ffd9aefdf98-63526158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9ed9a13ef72794e6d04dbdc0b7eb54db49e9ac3' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/beny/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1391446184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1691352853530ffd9aefdf98-63526158',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530ffd9af0b742_54273907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ffd9af0b742_54273907')) {function content_530ffd9af0b742_54273907($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>