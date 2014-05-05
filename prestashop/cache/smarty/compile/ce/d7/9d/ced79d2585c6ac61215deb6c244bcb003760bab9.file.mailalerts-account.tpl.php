<?php /* Smarty version Smarty-3.1.14, created on 2014-02-28 03:48:14
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/mailalerts/views/templates/front/mailalerts-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1899967485530ff8eeaf8732-11576936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ced79d2585c6ac61215deb6c244bcb003760bab9' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/mailalerts/views/templates/front/mailalerts-account.tpl',
      1 => 1391446186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1899967485530ff8eeaf8732-11576936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'mailAlerts' => 0,
    'mailAlert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530ff8eebc7421_11613687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ff8eebc7421_11613687')) {function content_530ff8eebc7421_11613687($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/prestashop/tools/smarty/plugins/modifier.escape.php';
?>

<script type="text/javascript">
$('document').ready(function()
{
	$('i[rel^=ajax_id_mailalert_]').click(function()
	{
		var ids =  $(this).attr('rel').replace('ajax_id_mailalert_', '');
		ids = ids.split('_');
		var id_product_mail_alert = ids[0];
		var id_product_attribute_mail_alert = ids[1];
		var parent = $(this).parents('li');

		$.ajax({
			url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','actions',array('process'=>'remove')));?>
",
			type: "POST",
			data: {
				'id_product': id_product_mail_alert,
				'id_product_attribute': id_product_attribute_mail_alert
			},
			success: function(result)
			{
				if (result == '0')
				{
					parent.fadeOut("normal", function()
					{
						parent.remove();
					});
				}
 		 	}
		});
	});
});
</script>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Manage my account','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'mailalerts'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><span class="navigation_page"><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div id="mailalerts_block_account" class="block">
	<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</h1>
	<?php if ($_smarty_tpl->tpl_vars['mailAlerts']->value){?>
		<ul class="products-block">
			<?php  $_smarty_tpl->tpl_vars['mailAlert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mailAlert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mailAlerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mailAlert']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['mailAlert']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['mailAlert']->key => $_smarty_tpl->tpl_vars['mailAlert']->value){
$_smarty_tpl->tpl_vars['mailAlert']->_loop = true;
 $_smarty_tpl->tpl_vars['mailAlert']->iteration++;
 $_smarty_tpl->tpl_vars['mailAlert']->last = $_smarty_tpl->tpl_vars['mailAlert']->iteration === $_smarty_tpl->tpl_vars['mailAlert']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['mailAlert']->last;
?>
			<li class="clearfix<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']){?> last_item<?php }?>">
				<a class="products-block-image" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['mailAlert']->value['id_product'],null,null,null,null,$_smarty_tpl->tpl_vars['mailAlert']->value['id_shop']);?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mailAlert']->value['name'], 'html', 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['mailAlert']->value['link_rewrite'],$_smarty_tpl->tpl_vars['mailAlert']->value['cover'],'small_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt=""/></a>
                <div class="product-content">
                	<span class="remove">
                        <i class="icon-remove" rel="ajax_id_mailalert_<?php echo $_smarty_tpl->tpl_vars['mailAlert']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['mailAlert']->value['id_product_attribute'];?>
"></i>
                    </span>
                    <h5><a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['mailAlert']->value['id_product'],null,null,null,null,$_smarty_tpl->tpl_vars['mailAlert']->value['id_shop']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mailAlert']->value['name'], 'html', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mailAlert']->value['name'], 'html', 'UTF-8');?>
</a></h5>
                    <div class="product-description"><small><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mailAlert']->value['attributes_small'], 'html', 'UTF-8');?>
</small></div>
                </div>
			</li>
			<?php } ?>
		</ul>
	<?php }else{ ?>
		<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No mail alerts yet.','mod'=>'mailalerts'),$_smarty_tpl);?>
</p>
	<?php }?>

	<ul class="footer_links clearfix">
		<li><a class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Back to Your Account','mod'=>'mailalerts'),$_smarty_tpl);?>
"><span><i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Back to Your Account','mod'=>'mailalerts'),$_smarty_tpl);?>
</span></a></li>
	</ul>
</div><?php }} ?>