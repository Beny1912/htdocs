<?php /* Smarty version Smarty-3.1.14, created on 2014-02-28 03:48:14
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/carriercompare/template/carriercompare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1989576087530ff8ee25abd2-93424870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '272468fc9f83ce94ee32b2a24e9d111a05f046ac' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/carriercompare/template/carriercompare.tpl',
      1 => 1391446186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1989576087530ff8ee25abd2-93424870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'opc' => 0,
    'use_taxes' => 0,
    'priceDisplay' => 0,
    'currencySign' => 0,
    'currencyRate' => 0,
    'currencyFormat' => 0,
    'currencyBlank' => 0,
    'id_carrier' => 0,
    'id_state' => 0,
    'refresh_method' => 0,
    'countries' => 0,
    'country' => 0,
    'id_country' => 0,
    'zipcode' => 0,
    'new_base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530ff8ee304d66_09088955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ff8ee304d66_09088955')) {function content_530ff8ee304d66_09088955($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/prestashop/tools/smarty/plugins/modifier.escape.php';
?>

<?php if (!$_smarty_tpl->tpl_vars['opc']->value){?>
<script type="text/javascript">
// <![CDATA[
var taxEnabled = "<?php echo $_smarty_tpl->tpl_vars['use_taxes']->value;?>
";
var displayPrice = "<?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
";
var currencySign = '<?php echo html_entity_decode($_smarty_tpl->tpl_vars['currencySign']->value,2,"UTF-8");?>
';
var currencyRate = '<?php echo floatval($_smarty_tpl->tpl_vars['currencyRate']->value);?>
';
var currencyFormat = '<?php echo intval($_smarty_tpl->tpl_vars['currencyFormat']->value);?>
';
var currencyBlank = '<?php echo intval($_smarty_tpl->tpl_vars['currencyBlank']->value);?>
';
var id_carrier = '<?php echo intval($_smarty_tpl->tpl_vars['id_carrier']->value);?>
';
var id_state = '<?php echo intval($_smarty_tpl->tpl_vars['id_state']->value);?>
';
var SE_RedirectTS = "<?php echo smartyTranslate(array('s'=>'Refreshing the page and updating your cart...','mod'=>'carriercompare'),$_smarty_tpl);?>
";
var SE_RefreshStateTS = "<?php echo smartyTranslate(array('s'=>'Checking available states...','mod'=>'carriercompare'),$_smarty_tpl);?>
";
var SE_RetrievingInfoTS = "<?php echo smartyTranslate(array('s'=>'Retrieving information...','mod'=>'carriercompare'),$_smarty_tpl);?>
";
var SE_RefreshMethod = <?php echo $_smarty_tpl->tpl_vars['refresh_method']->value;?>
;
var txtFree = "<?php echo smartyTranslate(array('s'=>'Free!','mod'=>'carriercompare'),$_smarty_tpl);?>
";
PS_SE_HandleEvent();
//]]>
</script>
<form class="box" id="compare_shipping_form" method="post" action="#" >
	<fieldset id="compare_shipping">
		<h1 class="page-heading bottom-indent"><?php echo smartyTranslate(array('s'=>'Estimate the cost of shipping & taxes.','mod'=>'carriercompare'),$_smarty_tpl);?>
</h1>
		<div class="form-group">
			<label for="id_country"><?php echo smartyTranslate(array('s'=>'Country','mod'=>'carriercompare'),$_smarty_tpl);?>
</label>
			<select name="id_country" id="id_country" class="form-control">
				<?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['id_country'];?>
" <?php if ($_smarty_tpl->tpl_vars['id_country']->value==$_smarty_tpl->tpl_vars['country']->value['id_country']){?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['country']->value['name'], 'html', 'UTF-8');?>
</option>
				<?php } ?>
			</select>
		</div>
		<div id="states" class="form-group" style="display: none;">
			<label for="id_state"><?php echo smartyTranslate(array('s'=>'State','mod'=>'carriercompare'),$_smarty_tpl);?>
</label>
			<select name="id_state" id="id_state" class="form-control">
				<option></option>
			</select>
		</div>
		<div class="form-group last">
			<label for="zipcode"><?php echo smartyTranslate(array('s'=>'Zip Code','mod'=>'carriercompare'),$_smarty_tpl);?>
</label>
			<input class="form-control" type="text" name="zipcode" id="zipcode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['zipcode']->value, 'html', 'UTF-8');?>
"/> (<?php echo smartyTranslate(array('s'=>'Needed for certain carriers.','mod'=>'carriercompare'),$_smarty_tpl);?>
)
		</div>
		<div id="carriercompare_errors" style="display: none;">
			<ul id="carriercompare_errors_list"></ul><br />
		</div>		
		<div id="SE_AjaxDisplay">
			<img src="<?php echo $_smarty_tpl->tpl_vars['new_base_dir']->value;?>
loader.gif" alt="Loading data" /><br />
			<p></p>
		</div>
		<div id="availableCarriers" style="display: none;">
			<table cellspacing="0" cellpadding="0" id="availableCarriers_table" class="table table-bordered">
				<thead>
					<tr>
						<th class="carrier_action first_item"></th>
						<th class="carrier_name item"><?php echo smartyTranslate(array('s'=>'Carrier','mod'=>'carriercompare'),$_smarty_tpl);?>
</th>
						<th class="carrier_infos item"><?php echo smartyTranslate(array('s'=>'Information','mod'=>'carriercompare'),$_smarty_tpl);?>
</th>
						<th class="carrier_price last_item"><?php echo smartyTranslate(array('s'=>'Price','mod'=>'carriercompare'),$_smarty_tpl);?>
</th>
					</tr>
				</thead>
				<tbody id="carriers_list">
					
				</tbody>
			</table>
		</div>
		<p class="alert alert-warning text-center" id="noCarrier" style="display: none;">
			<?php echo smartyTranslate(array('s'=>'No carrier has been made available for this selection.','mod'=>'carriercompare'),$_smarty_tpl);?>

		</p>
		<p class="SE_SubmitRefreshCard">
            <button class="btn btn-default button button-small" id="carriercompare_submit" type="submit" name="carriercompare_submit">
            	<span><?php echo smartyTranslate(array('s'=>'Update cart','mod'=>'carriercompare'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span>
            </button>
            <button id="update_carriers_list" type="button" class="btn btn-default button button-small">
            	<span><?php echo smartyTranslate(array('s'=>'Update carrier list','mod'=>'carriercompare'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span>
            </button>
		</p>
	</fieldset>
</form>
<?php }?>
<?php }} ?>