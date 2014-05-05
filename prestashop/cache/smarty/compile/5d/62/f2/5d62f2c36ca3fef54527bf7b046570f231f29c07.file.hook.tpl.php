<?php /* Smarty version Smarty-3.1.14, created on 2014-02-28 04:07:29
         compiled from "/Applications/MAMP/htdocs/prestashop/modules/themeconfigurator/views/templates/hook/hook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:614302105530ffd7175f1b6-80708243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d62f2c36ca3fef54527bf7b046570f231f29c07' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/themeconfigurator/views/templates/hook/hook.tpl',
      1 => 1391446186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '614302105530ffd7175f1b6-80708243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'htmlitems' => 0,
    'hook' => 0,
    'hItem' => 0,
    'module_dir' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530ffd7183bef7_64647388',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ffd7183bef7_64647388')) {function content_530ffd7183bef7_64647388($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/prestashop/tools/smarty/plugins/modifier.escape.php';
?>

<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'){?>
<?php if (isset($_smarty_tpl->tpl_vars['htmlitems']->value)&&$_smarty_tpl->tpl_vars['htmlitems']->value){?>
<div id="htmlcontent_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['hook']->value, 'htmlall', 'UTF-8');?>
">
	<ul class="htmlcontent-home clearfix row">
		<?php  $_smarty_tpl->tpl_vars['hItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['hItem']->key => $_smarty_tpl->tpl_vars['hItem']->value){
$_smarty_tpl->tpl_vars['hItem']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']++;
?>
			<li class="htmlcontent-item-<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('smarty')->value['foreach']['items']['iteration'], 'htmlall', 'UTF-8');?>
 col-xs-4">
				<?php if ($_smarty_tpl->tpl_vars['hItem']->value['url']){?>
					<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['hItem']->value['url'], 'htmlall', 'UTF-8');?>
" class="item-link"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['target']==1){?> onclick="return !window.open(this.href);"<?php }?> title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['hItem']->value['title'], 'htmlall', 'UTF-8');?>
">
				<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image']){?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/".((string)$_smarty_tpl->tpl_vars['hItem']->value['image']));?>
" class="item-img" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['hItem']->value['title'], 'htmlall', 'UTF-8');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['hItem']->value['title'], 'htmlall', 'UTF-8');?>
" width="<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image_w']){?><?php echo intval($_smarty_tpl->tpl_vars['hItem']->value['image_w']);?>
<?php }else{ ?>100%<?php }?>" height="100%" />
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['hItem']->value['title']&&$_smarty_tpl->tpl_vars['hItem']->value['title_use']==1){?>
						<h3 class="item-title"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['hItem']->value['title'], 'htmlall', 'UTF-8');?>
</h3>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['hItem']->value['html']){?>
						<div class="item-html">
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['hItem']->value['html'], 'htmlall', 'UTF-8');?>
 <i class="icon-double-angle-right"></i>
						</div>
					<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['hItem']->value['url']){?>
					</a>
				<?php }?>
			</li>
		<?php } ?>
	</ul>
</div>
<?php }?>
<?php }?><?php }} ?>