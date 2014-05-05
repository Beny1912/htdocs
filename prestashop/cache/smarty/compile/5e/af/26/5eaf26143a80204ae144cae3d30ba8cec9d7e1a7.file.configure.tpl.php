<?php /* Smarty version Smarty-3.1.14, created on 2014-02-28 03:48:23
         compiled from "/Applications/MAMP/htdocs/prestashop/admin/themes/default/template/controllers/modules/configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:852292511530ff8f7c2dbd4-92278879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eaf26143a80204ae144cae3d30ba8cec9d7e1a7' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin/themes/default/template/controllers/modules/configure.tpl',
      1 => 1391446184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '852292511530ff8f7c2dbd4-92278879',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_display_name' => 0,
    'breadcrumbs2' => 0,
    'module_name' => 0,
    'module_disable_link' => 0,
    'module_uninstall_link' => 0,
    'module_reset_link' => 0,
    'module_update_link' => 0,
    'module_hook_link' => 0,
    'back_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530ff8f7c952b6_01265995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ff8f7c952b6_01265995')) {function content_530ff8f7c952b6_01265995($_smarty_tpl) {?>
<div class="bootstrap">
	<div class="page-head">
		<h2 class="page-title">
			<?php echo smartyTranslate(array('s'=>'Configure module %s','sprintf'=>$_smarty_tpl->tpl_vars['module_display_name']->value),$_smarty_tpl);?>

		</h2>
		<ul class="breadcrumb page-breadcrumb">
			<?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['name']!=''){?>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['href']!=''){?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['href'], ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['icon']!=''){?><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['icon'], ENT_QUOTES, 'UTF-8', true);?>
"></i><?php }?>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['name'], ENT_QUOTES, 'UTF-8', true);?>

					<?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['href']!=''){?></a><?php }?>
				</li>
			<?php }?>
			<li><?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
</li>
			<li>
				<i class="icon-wrench"></i>
				<?php echo smartyTranslate(array('s'=>'Configure'),$_smarty_tpl);?>

			</li>
		</ul>
		<div class="page-bar toolbarBox">
			<div class="btn-toolbar">
				<ul class="nav nav-pills pull-right">
					<li>
						<a id="desc-module-hook" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_disable_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Disable'),$_smarty_tpl);?>
">
							<i class="process-icon-off"></i>
							<div><?php echo smartyTranslate(array('s'=>'Disable'),$_smarty_tpl);?>
</div>
						</a>
					</li>
					<li>
						<a id="desc-module-hook" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_uninstall_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Uninstall'),$_smarty_tpl);?>
">
							<i class="process-icon-uninstall"></i>
							<div><?php echo smartyTranslate(array('s'=>'Uninstall'),$_smarty_tpl);?>
</div>
						</a>
					</li>
					<li>
						<a id="desc-module-hook" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_reset_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Reset'),$_smarty_tpl);?>
">
							<i class="process-icon-reset"></i>
							<div><?php echo smartyTranslate(array('s'=>'Reset'),$_smarty_tpl);?>
</div>
						</a>
					</li>
					<?php if (isset($_smarty_tpl->tpl_vars['module_update_link']->value)){?>
					<li>
						<a id="desc-module-hook" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_update_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Update'),$_smarty_tpl);?>
">
							<i class="process-icon-refresh"></i>
							<div><?php echo smartyTranslate(array('s'=>'Check and update'),$_smarty_tpl);?>
</div>
						</a>
					</li>
					<?php }?>
					<li>
						<a id="desc-module-hook" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_hook_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Manage hooks'),$_smarty_tpl);?>
">
							<i class="process-icon-anchor"></i>
							<div><?php echo smartyTranslate(array('s'=>'Manage hooks'),$_smarty_tpl);?>
</div>
						</a>
					</li>
					<li>
						<a id="desc-module-back" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['back_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
">
							<i class="process-icon-back" ></i>
							<div><?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div><?php }} ?>