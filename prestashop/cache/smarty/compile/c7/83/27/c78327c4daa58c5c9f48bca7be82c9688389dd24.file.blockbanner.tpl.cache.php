<?php /* Smarty version Smarty-3.1.14, created on 2014-02-28 04:07:30
         compiled from "/Applications/MAMP/htdocs/prestashop/modules/blockbanner/blockbanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1689996027530ffd72512df3-19699943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c78327c4daa58c5c9f48bca7be82c9688389dd24' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/blockbanner/blockbanner.tpl',
      1 => 1391446186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1689996027530ffd72512df3-19699943',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_link' => 0,
    'banner_desc' => 0,
    'banner_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530ffd72535f29_61206318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ffd72535f29_61206318')) {function content_530ffd72535f29_61206318($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['banner_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner_desc']->value;?>
">
<?php if (isset($_smarty_tpl->tpl_vars['banner_img']->value)){?>
	<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['banner_img']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner_desc']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner_desc']->value;?>
" width="1170" height="65" />
<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['banner_desc']->value;?>

<?php }?>
</a><?php }} ?>