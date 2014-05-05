<?php /* Smarty version Smarty-3.1.14, created on 2014-02-28 03:48:23
         compiled from "/Applications/MAMP/htdocs/prestashop/admin/themes/default/template/controllers/home/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25407337530ff8f76e2560-99726881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04128ac67fe4a6fbd3e77ee82d2686992d4e44da' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin/themes/default/template/controllers/home/content.tpl',
      1 => 1391446184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25407337530ff8f76e2560-99726881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'upgrade' => 0,
    'isoUser' => 0,
    'quick_links' => 0,
    'k' => 0,
    'link' => 0,
    'tips_optimization' => 0,
    'monthly_statistics' => 0,
    'customers_service' => 0,
    'stats_sales' => 0,
    'last_orders' => 0,
    'refresh_check_version' => 0,
    'token' => 0,
    'employee' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530ff8f777c8f0_46568849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ff8f777c8f0_46568849')) {function content_530ff8f777c8f0_46568849($_smarty_tpl) {?>

<div class="pageTitleHome">
	<span><h3><?php echo smartyTranslate(array('s'=>'Dashboard'),$_smarty_tpl);?>
</h3></span>
</div>
<div id="dashboard">
<div id="homepage">

<div id="column_left">
<?php if ($_smarty_tpl->tpl_vars['upgrade']->value){?>
	<div id="blockNewVersionCheck">
	<?php if ($_smarty_tpl->tpl_vars['upgrade']->value->need_upgrade){?>
		<div class="warning warn" style="margin-bottom:10px;"><h3><?php echo smartyTranslate(array('s'=>'A new version of PrestaShop is available.'),$_smarty_tpl);?>
 : <a style="text-decoration: underline;" href="<?php echo $_smarty_tpl->tpl_vars['upgrade']->value->link;?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'Download'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['upgrade']->value->version_name;?>
</a> !</h3></div>
	<?php }?>
	</div>
<?php }else{ ?>
	<p><?php echo smartyTranslate(array('s'=>'Update notifications are unavailable'),$_smarty_tpl);?>
</p>
	<p>&nbsp;</p>
	<p><?php echo smartyTranslate(array('s'=>'To receive PrestaShop update warnings, you need to activate you account. '),$_smarty_tpl);?>
 <b>allow_url_fopen</b> [<a href="http://www.php.net/manual/<?php echo $_smarty_tpl->tpl_vars['isoUser']->value;?>
/ref.filesystem.php"><?php echo smartyTranslate(array('s'=>'more info on php.net'),$_smarty_tpl);?>
</a>]</p>
	<p><?php echo smartyTranslate(array('s'=>'If you don\'t know how to do this, please contact your hosting provider!'),$_smarty_tpl);?>
</p><br />
<?php }?>

	<h2><?php echo smartyTranslate(array('s'=>'Quick links'),$_smarty_tpl);?>
</h2>
	<ul class="F_list clearfix">
	<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['quick_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['link']->key;
?>
		<li id="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_block">
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['href'];?>
">
				<h4><?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
</h4>
				<p><?php echo $_smarty_tpl->tpl_vars['link']->value['description'];?>
</p>
			</a>
		</li>
	<?php } ?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayAdminHomeQuickLinks"),$_smarty_tpl);?>

	</ul>
	<div id="partner_preactivation">
		<p class="center"><img src="../img/loader.gif" alt="" /> <?php echo smartyTranslate(array('s'=>'Loading...'),$_smarty_tpl);?>
</p>
	</div>
	<div class="separation"></div>
	<?php echo $_smarty_tpl->tpl_vars['tips_optimization']->value;?>

	<div id="discover_prestashop"><p class="center"><img src="../img/loader.gif" alt="" />&nbsp;<?php echo smartyTranslate(array('s'=>'Loading...'),$_smarty_tpl);?>
</p></div>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayAdminHomeInfos"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayBackOfficeHome"),$_smarty_tpl);?>
 
</div>


	<div id="column_right">
		<h2><?php echo smartyTranslate(array('s'=>'Your Information'),$_smarty_tpl);?>
</h2>
		<?php echo $_smarty_tpl->tpl_vars['monthly_statistics']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['customers_service']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['stats_sales']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['last_orders']->value;?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayAdminHomeStatistics"),$_smarty_tpl);?>

	</div>

</div>
	<div class="clear">&nbsp;</div>

</div>

<script type="text/javascript">
$(document).ready(function() {
	if (<?php echo $_smarty_tpl->tpl_vars['refresh_check_version']->value;?>
)
	{
		$('#blockNewVersionCheck').hide();
		$.ajax({
			type : 'POST',
			data : {
				ajax : '1',
				controller : 'AdminHome',
				token : '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
',
				id_employee : '<?php echo $_smarty_tpl->tpl_vars['employee']->value->id;?>
',
				action : 'refreshCheckVersion'
			},
			url: 'ajax-tab.php',
			dataType : 'json',
			success: function(data) {
				if (!data)
					jAlert("TECHNICAL ERROR - no return status found");
				else if (data.status != "ok")
					jAlert("TECHNICAL ERROR: "+data.msg);
				if(data.upgrade.need_upgrade)
				{
					$('#blockNewVersionCheck').children("a").attr('href',data.upgrade.link);
					$('#blockNewVersionCheck').children("a").html(data.upgrade.link+"pouet");
					$('#blockNewVersionCheck').fadeIn('slow');
				}

				
			},
			error: function(data, textStatus, errorThrown)
			{
				jAlert("TECHNICAL ERROR: "+data);
			}
		});
	}
	$.ajax({
		url: "ajax-tab.php",
		type: "POST",
		data:{
			token: "<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
",
			ajax: "1",
			controller : "AdminHome",
			action: "getAdminHomeElement"
		},
		dataType: "json",
		success: function(json) {
		<?php if ($_smarty_tpl->tpl_vars['employee']->value->bo_show_screencast){?>
			if (json.screencast != 'NOK')
				$('#adminpresentation').fadeIn('slow');
			else
				$('#adminpresentation').fadeOut('slow');
		<?php }?>
			$('#partner_preactivation').fadeOut('slow', function() {
				if (json.partner_preactivation != 'NOK')
					$('#partner_preactivation').html(json.partner_preactivation);
				else
					$('#partner_preactivation').html('');
				$('#partner_preactivation').fadeIn('slow');
			});

			$('#discover_prestashop').fadeOut('slow', function() {
				if (json.discover_prestashop != 'NOK')
					$('#discover_prestashop').replaceWith(json.discover_prestashop);
				else
					$('#discover_prestashop').html('');
				$('#discover_prestashop').fadeIn('slow');
			});
		},
		error: function(XMLHttpRequest, textStatus, errorThrown)
		{
			// don't show/hide screencast if it's deactivated
			<?php if ($_smarty_tpl->tpl_vars['employee']->value->bo_show_screencast){?>
				$('#adminpresentation').fadeOut('slow');
			<?php }?>
			$('#partner_preactivation').fadeOut('slow');
			$('#discover_prestashop').fadeOut('slow');
		}
	});
<<<<<<< HEAD
=======
	$('#screencast_fancybox').bind('click', function(event)
	{
		$.fancybox(
			this.href,
			{
				'width'				: 	920,
				'height'			: 	384,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type' 				: 'iframe',
				'scrolling'			: 'no',
				'onComplete'		: function()
					{
						// Rewrite some css properties of Fancybox
						$('#fancybox-wrap').css('width', '');
						$('#fancybox-content').css('background-color', '');
						$('#fancybox-content').css( 'border', '');
					}
			});

		event.preventDefault();
	});
>>>>>>> db4b69d10c20e6fe6bbdfe5f08556cb57eeb2415
});
</script>
<?php }} ?>