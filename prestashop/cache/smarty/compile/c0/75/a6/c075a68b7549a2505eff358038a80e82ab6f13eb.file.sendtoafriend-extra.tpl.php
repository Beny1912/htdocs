<?php /* Smarty version Smarty-3.1.14, created on 2014-02-28 03:48:15
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/sendtoafriend/sendtoafriend-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2050709605530ff8ef600c24-69540568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c075a68b7549a2505eff358038a80e82ab6f13eb' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/sendtoafriend/sendtoafriend-extra.tpl',
      1 => 1391446186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2050709605530ff8ef600c24-69540568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stf_product' => 0,
    'stf_product_cover' => 0,
    'link' => 0,
    'homeSize' => 0,
    'stf_secure_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530ff8ef684d38_41942259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ff8ef684d38_41942259')) {function content_530ff8ef684d38_41942259($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/prestashop/tools/smarty/plugins/modifier.escape.php';
?>
<li class="sendtofriend">
	<a id="send_friend_button" href="#send_friend_form">
		<?php echo smartyTranslate(array('s'=>'Send to a friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>

	</a>
	<div style="display: none;">
		<div id="send_friend_form">
			<h2  class="page-subheading">
				<?php echo smartyTranslate(array('s'=>'Send to a friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>

			</h2>
			<div class="row">
				<div class="product clearfix col-xs-12 col-sm-6">
					<img src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['stf_product']->value->link_rewrite,$_smarty_tpl->tpl_vars['stf_product_cover']->value,'home_default'), 'html', 'UTF-8');?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['stf_product']->value->name, 'html', 'UTF-8');?>
" />
					<div class="product_desc">
						<p class="product_name">
							<strong><?php echo $_smarty_tpl->tpl_vars['stf_product']->value->name;?>
</strong>
						</p>
						<?php echo $_smarty_tpl->tpl_vars['stf_product']->value->description_short;?>

					</div>
				</div><!-- .product -->
				<div class="send_friend_form_content col-xs-12 col-sm-6" id="send_friend_form_content">
					<div id="send_friend_form_error"></div>
					<div id="send_friend_form_success"></div>
					<div class="form_container">
						<p class="intro_form">
							<?php echo smartyTranslate(array('s'=>'Recipient','mod'=>'sendtoafriend'),$_smarty_tpl);?>
 :
						</p>
						<p class="text">
							<label for="friend_name">
								<?php echo smartyTranslate(array('s'=>'Name of your friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>
 <sup class="required">*</sup> :
							</label>
							<input id="friend_name" name="friend_name" type="text" value=""/>
						</p>
						<p class="text">
							<label for="friend_email">
								<?php echo smartyTranslate(array('s'=>'E-mail address of your friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>
 <sup class="required">*</sup> :
							</label>
							<input id="friend_email" name="friend_email" type="text" value=""/>
						</p>
						<p class="txt_required">
							<sup class="required">*</sup> <?php echo smartyTranslate(array('s'=>'Required fields','mod'=>'sendtoafriend'),$_smarty_tpl);?>

						</p>
					</div>
					<p class="submit">
						<a class="closefb" href="#">
							<?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'sendtoafriend'),$_smarty_tpl);?>

						</a>
						&nbsp;<?php echo smartyTranslate(array('s'=>'or','mod'=>'sendtoafriend'),$_smarty_tpl);?>
&nbsp;					
						<button id="sendEmail" class="btn button button-small" name="sendEmail" type="submit">
							<span><?php echo smartyTranslate(array('s'=>'Send','mod'=>'sendtoafriend'),$_smarty_tpl);?>
</span>
						</button>
					</p>
				</div> <!-- .send_friend_form_content -->
			</div>
		</div>
	</div>
</li>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('stf_secure_key'=>$_smarty_tpl->tpl_vars['stf_secure_key']->value),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'stf_msg_success')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'stf_msg_success'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Your e-mail has been sent successfully','mod'=>'sendtoafriend','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'stf_msg_success'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'stf_msg_error')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'stf_msg_error'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Your e-mail could not be sent. Please check the e-mail address and try again.','mod'=>'sendtoafriend','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'stf_msg_error'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'stf_msg_title')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'stf_msg_title'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Send to a friend','mod'=>'sendtoafriend','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'stf_msg_title'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'stf_msg_required')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'stf_msg_required'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You did not fill required fields','mod'=>'sendtoafriend','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'stf_msg_required'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>