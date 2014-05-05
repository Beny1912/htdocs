<?php /* Smarty version Smarty-3.1.14, created on 2014-04-21 20:34:00
         compiled from "/Applications/MAMP/htdocs/prestashopPrueba/admin/themes/default/template/controllers/customer_threads/helpers/view/message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60771598853556498d69b90-51987522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ff7b41797b1650629696d1f3355057ea67a9ab6' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashopPrueba/admin/themes/default/template/controllers/customer_threads/helpers/view/message.tpl',
      1 => 1397146152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60771598853556498d69b90-51987522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'initial' => 0,
    'type' => 0,
    'current_employee' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53556498dc5bb5_24908671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53556498dc5bb5_24908671')) {function content_53556498dc5bb5_24908671($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['message']->value['id_employee']){?>
	<?php $_smarty_tpl->tpl_vars["type"] = new Smarty_variable("customer", null, 0);?>
<?php }else{ ?>
	<?php $_smarty_tpl->tpl_vars["type"] = new Smarty_variable("employee", null, 0);?>
<?php }?>	

<div class="message-item<?php if ($_smarty_tpl->tpl_vars['initial']->value){?>-initial-body<?php }?>">
<?php if (!$_smarty_tpl->tpl_vars['initial']->value){?>
	<div class="message-avatar">
		<div class="avatar-md">
			<?php if ($_smarty_tpl->tpl_vars['type']->value=='customer'){?>
				<i class="icon-user icon-3x"></i>
			<?php }else{ ?>
				<?php if (isset($_smarty_tpl->tpl_vars['current_employee']->value->firstname)){?><img src="<?php echo $_smarty_tpl->tpl_vars['current_employee']->value->getImage();?>
"><?php }?>
			<?php }?>
		</div>
	</div>
<?php }?>
	<div class="message-body">
		<?php if (!$_smarty_tpl->tpl_vars['initial']->value){?>
			<h4 class="message-item-heading">
				<i class="icon-mail-reply text-muted"></i> 
					<?php if ($_smarty_tpl->tpl_vars['type']->value=='customer'){?>
						<?php echo $_smarty_tpl->tpl_vars['message']->value['customer_name'];?>

					<?php }else{ ?>
						<?php echo $_smarty_tpl->tpl_vars['message']->value['employee_name'];?>

					<?php }?>
			</h4>
		<?php }?>
		<span class="message-date">&nbsp;<i class="icon-calendar"></i> - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['message']->value['date_add'],'full'=>0),$_smarty_tpl);?>
 - <i class="icon-time"></i> <?php echo substr($_smarty_tpl->tpl_vars['message']->value['date_add'],11,5);?>
</span>
		<?php if (isset($_smarty_tpl->tpl_vars['message']->value['file_name'])){?> <span class="message-attachment">&nbsp;<i class="icon-link"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['message']->value['file_name'];?>
" target="_blank"><?php echo smartyTranslate(array('s'=>"Attachment"),$_smarty_tpl);?>
</a><?php }?>
		<p class="message-item-text"><?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>
</p>
	</div>
</div><?php }} ?>