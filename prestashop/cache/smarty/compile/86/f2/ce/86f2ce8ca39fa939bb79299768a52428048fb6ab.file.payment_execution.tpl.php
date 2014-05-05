<?php /* Smarty version Smarty-3.1.14, created on 2014-02-28 03:48:11
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/bankwire/views/templates/front/payment_execution.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1679401872530ff8ebdec340-87476750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86f2ce8ca39fa939bb79299768a52428048fb6ab' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/bankwire/views/templates/front/payment_execution.tpl',
      1 => 1391446186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1679401872530ff8ebdec340-87476750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbProducts' => 0,
    'link' => 0,
    'total' => 0,
    'use_taxes' => 0,
    'currencies' => 0,
    'currency' => 0,
    'cust_currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530ff8ebe873d0_88229429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ff8ebe873d0_88229429')) {function content_530ff8ebe873d0_88229429($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/prestashop/tools/smarty/plugins/modifier.escape.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
    <?php echo smartyTranslate(array('s'=>'Bank-wire payment.','mod'=>'bankwire'),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading">
    <?php echo smartyTranslate(array('s'=>'Order summary','mod'=>'bankwire'),$_smarty_tpl);?>

</h1>

<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['nbProducts']->value<=0){?>
	<p class="alert alert-warning">
        <?php echo smartyTranslate(array('s'=>'Your shopping cart is empty.','mod'=>'bankwire'),$_smarty_tpl);?>

    </p>
<?php }else{ ?>
    <form action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','validation',array(),true), 'html', 'UTF-8');?>
" method="post">
        <div class="box cheque-box">
            <h3 class="page-subheading">
                <?php echo smartyTranslate(array('s'=>'Bank-wire payment.','mod'=>'bankwire'),$_smarty_tpl);?>

            </h3>
            <p class="cheque-indent">
                <strong class="dark">
                    <?php echo smartyTranslate(array('s'=>'You have chosen to pay by bank wire.','mod'=>'bankwire'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'Here is a short summary of your order:','mod'=>'bankwire'),$_smarty_tpl);?>

                </strong>
            </p>
            <p>
                - <?php echo smartyTranslate(array('s'=>'The total amount of your order is','mod'=>'bankwire'),$_smarty_tpl);?>

                <span id="amount" class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total']->value),$_smarty_tpl);?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value==1){?>
                    <?php echo smartyTranslate(array('s'=>'(tax incl.)','mod'=>'bankwire'),$_smarty_tpl);?>

                <?php }?>
            </p>
            <p>
                -
                <?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1){?>
                    <?php echo smartyTranslate(array('s'=>'We allow several currencies to be sent via bank wire.','mod'=>'bankwire'),$_smarty_tpl);?>

                    <div class="form-group">
                        <label><?php echo smartyTranslate(array('s'=>'Choose one of the following:','mod'=>'bankwire'),$_smarty_tpl);?>
</label>
                        <select 
                        id="currency_payement" 
                        class="form-control" 
                        name="currency_payement" 
                        onchange="setCurrency($('#currency_payement').val());">
                            <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value){
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['id_currency'];?>
" <?php if ($_smarty_tpl->tpl_vars['currency']->value['id_currency']==$_smarty_tpl->tpl_vars['cust_currency']->value){?>selected="selected"<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['currency']->value['name'];?>

                                </option>
                            <?php } ?>
                        </select>
                    </div>
                <?php }else{ ?>
                    <?php echo smartyTranslate(array('s'=>'We allow the following currency to be sent via bank wire:','mod'=>'bankwire'),$_smarty_tpl);?>
&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['currencies']->value[0]['name'];?>
</b>
                    <input type="hidden" name="currency_payement" value="<?php echo $_smarty_tpl->tpl_vars['currencies']->value[0]['id_currency'];?>
" />
                <?php }?>
            </p>
            <p>
                - <?php echo smartyTranslate(array('s'=>'Bank wire account information will be displayed on the next page.','mod'=>'bankwire'),$_smarty_tpl);?>

                <br />
                - <?php echo smartyTranslate(array('s'=>'Please confirm your order by clicking "I confirm my order."','mod'=>'bankwire'),$_smarty_tpl);?>
.
            </p>
        </div><!-- .cheque-box -->

        <p class="cart_navigation clearfix" id="cart_navigation">
        	<a 
            class="button-exclusive btn btn-default" 
            href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"step=3"), 'html', 'UTF-8');?>
">
                <i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Other payment methods','mod'=>'bankwire'),$_smarty_tpl);?>

            </a>
            <button 
            class="button btn btn-default button-medium" 
            type="submit">
                <span><?php echo smartyTranslate(array('s'=>'I confirm my order','mod'=>'bankwire'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span>
            </button>
        </p>
    </form>
<?php }?>
<?php }} ?>