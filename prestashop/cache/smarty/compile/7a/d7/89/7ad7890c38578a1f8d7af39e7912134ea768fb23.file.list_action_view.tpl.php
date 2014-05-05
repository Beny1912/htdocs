<?php /* Smarty version Smarty-3.1.14, created on 2014-02-28 04:08:10
         compiled from "/Applications/MAMP/htdocs/prestashop/beny/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1459692025530ffd9af11243-48493092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ad7890c38578a1f8d7af39e7912134ea768fb23' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/beny/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1391446184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1459692025530ffd9af11243-48493092',
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
  'unifunc' => 'content_530ffd9af1eb75_16675446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ffd9af1eb75_16675446')) {function content_530ffd9af1eb75_16675446($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-eye-open"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>