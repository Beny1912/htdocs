<?php /* Smarty version Smarty-3.1.14, created on 2014-02-28 04:08:01
         compiled from "/Applications/MAMP/htdocs/prestashop/beny/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:582344535530ffd91ef4814-92327297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9be8273b55cd3495e175ad6c2e92fc36cb18f551' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/beny/themes/default/template/content.tpl',
      1 => 1391446184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '582344535530ffd91ef4814-92327297',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530ffd91f032a6_92252243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ffd91f032a6_92252243')) {function content_530ffd91f032a6_92252243($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>