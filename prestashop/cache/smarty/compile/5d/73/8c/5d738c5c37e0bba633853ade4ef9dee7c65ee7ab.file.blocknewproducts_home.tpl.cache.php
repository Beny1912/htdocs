<?php /* Smarty version Smarty-3.1.14, created on 2014-02-28 04:07:29
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/blocknewproducts/blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1217583657530ffd71a564e2-47730191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d738c5c37e0bba633853ade4ef9dee7c65ee7ab' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/blocknewproducts/blocknewproducts_home.tpl',
      1 => 1391446186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1217583657530ffd71a564e2-47730191',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
    'active_ul' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530ffd71a67cc3_55007571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ffd71a67cc3_55007571')) {function content_530ffd71a67cc3_55007571($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/Applications/MAMP/htdocs/prestashop/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_ul','assign'=>'active_ul'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts','active'=>$_smarty_tpl->tpl_vars['active_ul']->value), 0);?>
<?php }} ?>