<?php /* Smarty version Smarty-3.1.14, created on 2014-02-28 03:48:25
         compiled from "/Applications/MAMP/htdocs/prestashop/admin/themes/default/template/controllers/products/associations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1092593823530ff8f9546be4-96976032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f79cddf4377e46f92725504fca1baa97b7a02a1' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin/themes/default/template/controllers/products/associations.tpl',
      1 => 1391446184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1092593823530ff8f9546be4-96976032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category_tree' => 0,
    'link' => 0,
    'selected_cat' => 0,
    'cat' => 0,
    'id_category_default' => 0,
    'accessories' => 0,
    'accessory' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530ff8f95f5595_52453853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ff8f95f5595_52453853')) {function content_530ff8f95f5595_52453853($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/prestashop/tools/smarty/plugins/modifier.escape.php';
?>
<div id="product-associations" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="Associations" />
	<h3><?php echo smartyTranslate(array('s'=>'Associations'),$_smarty_tpl);?>
</h3>
	<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/check_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('product_tab'=>"Associations"), 0);?>

	<div id="no_default_category" class="alert alert-info">
		<?php echo smartyTranslate(array('s'=>'Please select a default category.'),$_smarty_tpl);?>

	</div>
	<div class="form-group">
		<label class="control-label col-lg-3" for="category_block">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>"associated-categories-tree",'type'=>"category_box"), 0);?>

			<?php echo smartyTranslate(array('s'=>'Associated categories:'),$_smarty_tpl);?>

		</label>
		<div class="col-lg-9">
			<div id="category_block">
				<?php echo $_smarty_tpl->tpl_vars['category_tree']->value;?>

			</div>
			<a class="btn btn-link bt-icon confirm_leave" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCategories'), 'html', 'UTF-8');?>
&addcategory">
				<i class="icon-plus-sign"></i> <?php echo smartyTranslate(array('s'=>'Create new category'),$_smarty_tpl);?>
 <i class="icon-external-link-sign"></i>
			</a>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-lg-3" for="id_category_default">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>"id_category_default",'type'=>"default"), 0);?>

			<span class="label-tooltip" data-toggle="tooltip"
			title="<?php echo smartyTranslate(array('s'=>'The default category is the category displayed by default.'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Default category:'),$_smarty_tpl);?>

			</span>
		</label>
		<div class="col-lg-5">
			<select id="id_category_default" name="id_category_default">
				<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['selected_cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id_category'];?>
" <?php if ($_smarty_tpl->tpl_vars['id_category_default']->value==$_smarty_tpl->tpl_vars['cat']->value['id_category']){?>selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</option>
				<?php } ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-lg-3" for="product_autocomplete_input">
			<span class="label-tooltip" data-toggle="tooltip"
			title="<?php echo smartyTranslate(array('s'=>'Begin typing the first letters of the product name, then select the product from the drop-down list.'),$_smarty_tpl);?>
<?php echo smartyTranslate(array('s'=>'(Do not forget to save the product afterward)'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Accessories:'),$_smarty_tpl);?>

			</span>
		</label>
		<div class="col-lg-5">
			<input type="hidden" name="inputAccessories" id="inputAccessories" value="<?php  $_smarty_tpl->tpl_vars['accessory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accessory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accessories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->key => $_smarty_tpl->tpl_vars['accessory']->value){
$_smarty_tpl->tpl_vars['accessory']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['accessory']->value['id_product'];?>
-<?php } ?>" />
			<input type="hidden" name="nameAccessories" id="nameAccessories" value="<?php  $_smarty_tpl->tpl_vars['accessory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accessory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accessories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->key => $_smarty_tpl->tpl_vars['accessory']->value){
$_smarty_tpl->tpl_vars['accessory']->_loop = true;
?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['accessory']->value['name'], 'html', 'UTF-8');?>
¤<?php } ?>" />
			<div id="ajax_choose_product">
				<div class="input-group">
					<input type="text" value="" id="product_autocomplete_input" />
					<span class="input-group-addon"><i class="icon-search"></i></span>
				</div>
			</div>

			<div id="divAccessories">
			<?php  $_smarty_tpl->tpl_vars['accessory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accessory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accessories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->key => $_smarty_tpl->tpl_vars['accessory']->value){
$_smarty_tpl->tpl_vars['accessory']->_loop = true;
?>
			<div class="form-control-static">
				<button type="button" class="btn btn-default delAccessory" name="<?php echo $_smarty_tpl->tpl_vars['accessory']->value['id_product'];?>
">
					<i class="icon-remove text-danger"></i>
				</button>
				<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['accessory']->value['name'], 'html', 'UTF-8');?>
<?php if (!empty($_smarty_tpl->tpl_vars['accessory']->value['reference'])){?><?php echo $_smarty_tpl->tpl_vars['accessory']->value['reference'];?>
<?php }?>
			</div>
			<?php } ?>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-lg-3" for="id_manufacturer"><?php echo smartyTranslate(array('s'=>'Manufacturer:'),$_smarty_tpl);?>
</label>
		<div class="col-lg-5">
			<select name="id_manufacturer" id="id_manufacturer">
				<option value="0">- <?php echo smartyTranslate(array('s'=>'Choose (optional)'),$_smarty_tpl);?>
 -</option>
				<?php if ($_smarty_tpl->tpl_vars['product']->value->id_manufacturer){?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id_manufacturer;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['product']->value->manufacturer_name;?>
</option>
				<?php }?>
				<option disabled="disabled">-</option>
			</select>
		</div>
		<div class="col-lg-4">
			<a class="btn btn-link bt-icon confirm_leave" style="margin-bottom:0" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminManufacturers'), 'html', 'UTF-8');?>
&addmanufacturer">
				<i class="icon-plus-sign"></i> <?php echo smartyTranslate(array('s'=>'Create new manufacturer'),$_smarty_tpl);?>
 <i class="icon-external-link-sign"></i>
			</a>
		</div>
	</div>
	<div class="panel-footer">
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts');?>
" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>
</a>
		<button type="submit" name="submitAddproduct" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
</button>
		<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save and stay'),$_smarty_tpl);?>
</button>
	</div>
</div><?php }} ?>