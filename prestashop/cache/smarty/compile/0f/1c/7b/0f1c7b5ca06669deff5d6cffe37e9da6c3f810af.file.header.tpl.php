<?php /* Smarty version Smarty-3.1.14, created on 2014-02-28 03:57:32
         compiled from "/Applications/MAMP/htdocs/prestashop/admin3746/themes/default/template/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:895698297530ffb1cd6a280-96401460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f1c7b5ca06669deff5d6cffe37e9da6c3f810af' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin3746/themes/default/template/header.tpl',
      1 => 1391446184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '895698297530ffb1cd6a280-96401460',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iso' => 0,
    'shop_name' => 0,
    'meta_title' => 0,
    'navigationPipe' => 0,
    'display_header' => 0,
    'controller_name' => 0,
    'iso_user' => 0,
    'country_iso_code' => 0,
    'round_mode' => 0,
    'shop_context' => 0,
    'autorefresh_notifications' => 0,
    'token' => 0,
    'currentIndex' => 0,
    'default_language' => 0,
    'link' => 0,
    'tab_modules_list' => 0,
    'css_files' => 0,
    'css_uri' => 0,
    'media' => 0,
    'js_files' => 0,
    'js_uri' => 0,
    'img_dir' => 0,
    'displayBackOfficeHeader' => 0,
    'brightness' => 0,
    'employee' => 0,
    'collapse_menu' => 0,
    'default_tab_link' => 0,
    'show_new_orders' => 0,
    'show_new_customers' => 0,
    'show_new_messages' => 0,
    'bo_query' => 0,
    'search_type' => 0,
    'quick_access' => 0,
    'quick' => 0,
    'base_url' => 0,
    'employee_avatar' => 0,
    'first_name' => 0,
    'last_name' => 0,
    'displayBackOfficeTop' => 0,
    'bootstrap' => 0,
    'page_header_toolbar' => 0,
    'modal_module_list' => 0,
    'install_dir_exists' => 0,
    'is_multishop' => 0,
    'shop_list' => 0,
    'multishop_context' => 0,
    'lite_display' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530ffb1d047f53_74952299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ffb1d047f53_74952299')) {function content_530ffb1d047f53_74952299($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/prestashop/tools/smarty/plugins/modifier.escape.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 lt-ie6 " lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]> <html lang="fr" class="no-js ie9" lang="en"> <![endif]-->
<html lang="<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="NOFOLLOW, NOINDEX">
	<title><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['meta_title']->value!=''){?><?php if (isset($_smarty_tpl->tpl_vars['navigationPipe']->value)){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['navigationPipe']->value, 'html', 'UTF-8');?>
<?php }else{ ?>&gt;<?php }?> <?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
<?php }?></title>
	<?php if ($_smarty_tpl->tpl_vars['display_header']->value){?>
	<script type="text/javascript">
		var help_class_name = '<?php echo addcslashes($_smarty_tpl->tpl_vars['controller_name']->value,'\'');?>
';
		var iso_user = '<?php echo addcslashes($_smarty_tpl->tpl_vars['iso_user']->value,'\'');?>
';
		var country_iso_code = '<?php echo addcslashes($_smarty_tpl->tpl_vars['country_iso_code']->value,'\'');?>
';
		var _PS_VERSION_ = '<?php echo addcslashes(@constant('_PS_VERSION_'),'\'');?>
';
		var roundMode = <?php echo intval($_smarty_tpl->tpl_vars['round_mode']->value);?>
;
<?php if (isset($_smarty_tpl->tpl_vars['shop_context']->value)){?>
	<?php if ($_smarty_tpl->tpl_vars['shop_context']->value==Shop::CONTEXT_ALL){?>
		var youEditFieldFor = '<?php echo smartyTranslate(array('s'=>'A modification of this field will be applied for all shops','js'=>1),$_smarty_tpl);?>
';
	<?php }elseif($_smarty_tpl->tpl_vars['shop_context']->value==Shop::CONTEXT_GROUP){?>
		var youEditFieldFor = '<?php echo smartyTranslate(array('s'=>'A modification of this field will be applied for all shops of group','js'=>1),$_smarty_tpl);?>
 <b><?php echo addcslashes($_smarty_tpl->tpl_vars['shop_name']->value,'\'');?>
</b>';
	<?php }else{ ?>
		var youEditFieldFor = '<?php echo smartyTranslate(array('s'=>'A modification of this field will be applied for the shop','js'=>1),$_smarty_tpl);?>
 <b><?php echo addcslashes($_smarty_tpl->tpl_vars['shop_name']->value,'\'');?>
</b>';
	<?php }?>
<?php }else{ ?>
		var youEditFieldFor = '';
<?php }?>
		var autorefresh_notifications = '<?php echo addcslashes($_smarty_tpl->tpl_vars['autorefresh_notifications']->value,'\'');?>
';
		var new_order_msg = '<?php echo smartyTranslate(array('s'=>'A new order has been placed on your shop.','js'=>1),$_smarty_tpl);?>
';
		var order_number_msg = '<?php echo smartyTranslate(array('s'=>'Order number:','js'=>1),$_smarty_tpl);?>
 ';
		var total_msg = '<?php echo smartyTranslate(array('s'=>'Total:','js'=>1),$_smarty_tpl);?>
 ';
		var from_msg = '<?php echo smartyTranslate(array('s'=>'From:','js'=>1),$_smarty_tpl);?>
 ';
		var see_order_msg = '<?php echo smartyTranslate(array('s'=>'View this order','js'=>1),$_smarty_tpl);?>
';
		var new_customer_msg = '<?php echo smartyTranslate(array('s'=>'A new customer registered on your shop.','js'=>1),$_smarty_tpl);?>
';
		var customer_name_msg = '<?php echo smartyTranslate(array('s'=>'Customer name:','js'=>1),$_smarty_tpl);?>
 ';
		var new_msg = '<?php echo smartyTranslate(array('s'=>'A new message posted on your shop.','js'=>1),$_smarty_tpl);?>
';
		var see_msg = '<?php echo smartyTranslate(array('s'=>'Read this message','js'=>1),$_smarty_tpl);?>
';
		var token = '<?php echo addslashes($_smarty_tpl->tpl_vars['token']->value);?>
';
		var token_admin_orders = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminOrders'),$_smarty_tpl);?>
';
		var token_admin_customers = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminCustomers'),$_smarty_tpl);?>
';
		var token_admin_customer_threads = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminCustomerThreads'),$_smarty_tpl);?>
';
		var currentIndex = '<?php echo addcslashes($_smarty_tpl->tpl_vars['currentIndex']->value,'\'');?>
';
		var employee_token = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminEmployees'),$_smarty_tpl);?>
';
		var choose_language_translate = '<?php echo smartyTranslate(array('s'=>'Choose language','js'=>1),$_smarty_tpl);?>
';
		var default_language = '<?php echo intval($_smarty_tpl->tpl_vars['default_language']->value);?>
';
		var admin_modules_link = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink("AdminModules"));?>
';
		var tab_modules_list = '<?php if (isset($_smarty_tpl->tpl_vars['tab_modules_list']->value)&&$_smarty_tpl->tpl_vars['tab_modules_list']->value){?><?php echo addslashes($_smarty_tpl->tpl_vars['tab_modules_list']->value);?>
<?php }?>';
	</script>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)){?>
<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value){
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
	<link href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
<?php } ?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['js_files']->value)){?>
<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value){
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"></script>
<?php } ?>
<?php }?>

	<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
favicon.ico" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
favicon.ico" />
	<?php if (isset($_smarty_tpl->tpl_vars['displayBackOfficeHeader']->value)){?>
		<?php echo $_smarty_tpl->tpl_vars['displayBackOfficeHeader']->value;?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['brightness']->value)){?>
	<!--
		/// todo multishop
		<style type="text/css">
			div#header_infos, div#header_infos a#header_shopname, div#header_infos a#header_logout, div#header_infos a#header_foaccess {color:<?php echo $_smarty_tpl->tpl_vars['brightness']->value;?>
}
		</style>
	-->
	<?php }?>
</head>

<?php if ($_smarty_tpl->tpl_vars['display_header']->value){?>
	<body class="<?php if ($_smarty_tpl->tpl_vars['employee']->value->bo_menu){?>page-sidebar <?php if ($_smarty_tpl->tpl_vars['collapse_menu']->value){?>page-sidebar-closed<?php }?><?php }else{ ?>page-topbar<?php }?> <?php echo strtolower(htmlspecialchars($_GET['controller'], ENT_QUOTES, 'UTF-8', true));?>
">
	
	<header id="header" class="bootstrap">
		<nav id="header_infos" role="navigation">
			<div class="navbar-header">
			<button id="header_nav_toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-primary">
				<i class="icon-reorder"></i>
			</button>

			<a id="header_shopname" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['default_tab_link']->value, 'html', 'UTF-8');?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
prestashop-avatar.png" height="15" width="15" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'html', 'UTF-8');?>
" />
				<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>

			</a>

			<ul id="header_notifs_icon_wrapper">
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['show_new_orders']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1){?>
				<li id="orders_notif" class="dropdown" data-type="order">
					<a href="javascript:void(0);" class="dropdown-toggle notifs" data-toggle="dropdown">
						<i class="icon-shopping-cart"></i>
						<span id="orders_notif_number_wrapper" class="notifs_badge">
							<span id="orders_notif_value">0</span>
						</span>
					</a>
					<div class="dropdown-menu notifs_dropdown">
						<section id="orders_notif_wrapper" class="notifs_panel">
							<div class="notifs_panel_header">
								<h3><?php echo smartyTranslate(array('s'=>'Latest Orders'),$_smarty_tpl);?>
</h3>
							</div>
							<div id="list_orders_notif" class="list_notif">
								<span class="no_notifs">
									<?php echo smartyTranslate(array('s'=>'No new orders has been placed on your shop'),$_smarty_tpl);?>

								</span>
							</div>
							<div class="notifs_panel_footer">
								<a href="index.php?controller=AdminOrders&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminOrders'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Show all orders'),$_smarty_tpl);?>
</a>
							</div>
						</section>
					</div>
				</li>
<?php }?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['show_new_customers']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==1){?>
				<li id="customers_notif" class="dropdown" data-type="customer">
					<a href="javascript:void(0);" class="dropdown-toggle notifs" data-toggle="dropdown">
						<i class="icon-user"></i>
						<span id="customers_notif_number_wrapper" class="notifs_badge">
							<span id="customers_notif_value">0</span>
						</span>
					</a>
					<div class="dropdown-menu notifs_dropdown">
						<section id="customers_notif_wrapper" class="notifs_panel">
							<div class="notifs_panel_header">
								<h3><?php echo smartyTranslate(array('s'=>'Latest Registrations'),$_smarty_tpl);?>
</h3>
							</div>
							<div id="list_customers_notif" class="list_notif">
								<span class="no_notifs">
									<?php echo smartyTranslate(array('s'=>'No new customers registered on your shop'),$_smarty_tpl);?>

								</span>
							</div>
							<div class="notifs_panel_footer">
								<a href="index.php?controller=AdminCustomers&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminCustomers'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Show all customers'),$_smarty_tpl);?>
</a>
							</div>
						</section>
					</div>
				</li>
<?php }?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['show_new_messages']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3==1){?>
				<li id="customer_messages_notif" class="dropdown" data-type="customer_message">
					<a href="javascript:void(0);" class="dropdown-toggle notifs" data-toggle="dropdown">
						<i class="icon-envelope"></i>
						<span id="customer_messages_notif_number_wrapper" class="notifs_badge">
							<span id="customer_messages_notif_value" >0</span>
						</span>
					</a>
					<div class="dropdown-menu notifs_dropdown">
						<section id="customer_messages_notif_wrapper" class="notifs_panel">
							<div class="notifs_panel_header">
								<h3><?php echo smartyTranslate(array('s'=>'Latest Messages'),$_smarty_tpl);?>
</h3>
							</div>
							<div id="list_customer_messages_notif" class="list_notif">
								<span class="no_notifs">
									<?php echo smartyTranslate(array('s'=>'No new messages posted on your shop'),$_smarty_tpl);?>

								</span>
							</div>
							<div class="notifs_panel_footer">
								<a href="index.php?controller=AdminCustomerThreads&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminCustomerThreads'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Show all messages'),$_smarty_tpl);?>
</a>
							</div>
						</section>
					</div>
				</li>
<?php }?>
			</ul>
		</div>
		<div class="collapse navbar-collapse navbar-collapse-primary">
			<form id="header_search" method="post" action="index.php?controller=AdminSearch&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminSearch'),$_smarty_tpl);?>
" role="search">
				<div class="form-group">
					<input type="hidden" name="bo_search_type" id="bo_search_type" />
					<div class="input-group">
						<div class="input-group-btn">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								<i id="search_type_icon" class="icon-reorder"></i>
								<i class="icon-caret-down"></i>
							</button>
							<ul id="header_search_options" class="dropdown-menu">
								<li class="search-all search-option active">
									<a href="#" data-value="0" data-placeholder="<?php echo smartyTranslate(array('s'=>'What are you looking for?'),$_smarty_tpl);?>
" data-icon="icon-reorder">
										<i class="icon-search"></i> <?php echo smartyTranslate(array('s'=>'Everywhere'),$_smarty_tpl);?>
</a>
								</li>
								<li class="divider"></li>
								<li class="search-book search-option">
									<a href="#" data-value="1" data-placeholder="<?php echo smartyTranslate(array('s'=>'Product name, SKU, reference...'),$_smarty_tpl);?>
" data-icon="icon-book">
										<i class="icon-book"></i> <?php echo smartyTranslate(array('s'=>'Catalog'),$_smarty_tpl);?>

									</a>
								</li>
								<li class="search-customers-name search-option">
									<a href="#" data-value="2" data-placeholder="<?php echo smartyTranslate(array('s'=>'Email, name...'),$_smarty_tpl);?>
" data-icon="icon-group">
										<i class="icon-group"></i> <?php echo smartyTranslate(array('s'=>'Customers'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'by name'),$_smarty_tpl);?>

									</a>
								</li>
								<li class="search-customers-addresses search-option">
									<a href="#" data-value="6" data-placeholder="<?php echo smartyTranslate(array('s'=>'123.45.67.89'),$_smarty_tpl);?>
" data-icon="icon-desktop">
										<i class="icon-desktop"></i> <?php echo smartyTranslate(array('s'=>'Customers'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'by ip address'),$_smarty_tpl);?>
</a>
								</li>
								<li class="search-orders search-option">
									<a href="#" data-value="3" data-placeholder="<?php echo smartyTranslate(array('s'=>'Order ID'),$_smarty_tpl);?>
" data-icon="icon-credit-card">
										<i class="icon-credit-card"></i> <?php echo smartyTranslate(array('s'=>'Orders'),$_smarty_tpl);?>

									</a>
								</li>
								<li class="search-invoices search-option">
									<a href="#" data-value="4" data-placeholder="<?php echo smartyTranslate(array('s'=>'Invoice Number'),$_smarty_tpl);?>
" data-icon="icon-book">
										<i class="icon-book"></i> <?php echo smartyTranslate(array('s'=>'Invoices'),$_smarty_tpl);?>

									</a>
								</li>
								<li class="search-carts search-option">
									<a href="#" data-value="5" data-placeholder="<?php echo smartyTranslate(array('s'=>'Cart ID'),$_smarty_tpl);?>
" data-icon="icon-shopping-cart">
										<i class="icon-shopping-cart"></i> <?php echo smartyTranslate(array('s'=>'Carts'),$_smarty_tpl);?>

									</a>
								</li>
								<li class="search-modules search-option">
									<a href="#" data-value="7" data-placeholder="<?php echo smartyTranslate(array('s'=>'Module name'),$_smarty_tpl);?>
" data-icon="icon-puzzle-piece">
										<i class="icon-puzzle-piece"></i> <?php echo smartyTranslate(array('s'=>'Modules'),$_smarty_tpl);?>

									</a>
								</li>
							</ul>
						</div>
						<input id="bo_query" name="bo_query" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['bo_query']->value;?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Search'),$_smarty_tpl);?>
" />
						<a href="javascript:void(0);" class="clear_search hide"><i class="icon-remove"></i></a>
						<span class="input-group-btn">
							<button type="submit" id="bo_search_submit" class="btn btn-primary">
								<i class="icon-search"></i>
							</button>
						</span>
					</div>
				</div>

				<script>
					$('#bo_query').on('blur', function(){ $('#header_search .form-group').removeClass('focus-search'); });
					$('#header_search *').on('focus', function(){ $('#header_search .form-group').addClass('focus-search'); });
					$('#header_search_options').on('click','li a', function(e){
						e.preventDefault();
						$('#header_search_options .search-option').removeClass('active');
						$(this).closest('li').addClass('active');
						$('#bo_search_type').val($(this).data('value'));
						$('#search_type_icon').removeAttr("class").addClass($(this).data('icon'));
						$('#bo_query').attr("placeholder",$(this).data('placeholder'));
						$('#bo_query').focus();
					});
					<?php if (isset($_smarty_tpl->tpl_vars['search_type']->value)&&$_smarty_tpl->tpl_vars['search_type']->value){?>
						$(document).ready(function() {
							$('.search-option a[data-value='+<?php echo intval($_smarty_tpl->tpl_vars['search_type']->value);?>
+']').click();
						});
					<?php }?>
				</script>
			</form>

<?php if (count($_smarty_tpl->tpl_vars['quick_access']->value)>0){?>
			<ul id="header_quick">
				<li class="dropdown">
					<a href="#" id="quick_select" class="dropdown-toggle" data-toggle="dropdown"><?php echo smartyTranslate(array('s'=>'Quick Access'),$_smarty_tpl);?>
 <b class="caret"></b></a>
					<ul class="dropdown-menu">
					<?php  $_smarty_tpl->tpl_vars['quick'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['quick']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quick_access']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['quick']->key => $_smarty_tpl->tpl_vars['quick']->value){
$_smarty_tpl->tpl_vars['quick']->_loop = true;
?>
						<li><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['quick']->value['link'], 'html', 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['quick']->value['new_window']){?> onclick="return !window.open(this.href);"<?php }?>><i class="icon-chevron-right"></i> <?php echo $_smarty_tpl->tpl_vars['quick']->value['name'];?>
</a></li>
					<?php } ?>
					</ul>
				</li>
			</ul>
<?php }?>

			<ul id="header_employee_box">
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4){?>
				<li>
					<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" id="header_foaccess" target="_blank" title="<?php echo smartyTranslate(array('s'=>'View my shop'),$_smarty_tpl);?>
">
						<i class="icon-star"></i> <?php echo smartyTranslate(array('s'=>'View my shop'),$_smarty_tpl);?>

					</a>
				</li>
<?php }?>
				<li id="employee_infos" class="dropdown">
					<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminEmployees'), 'html', 'UTF-8');?>
&id_employee=<?php echo $_smarty_tpl->tpl_vars['employee']->value->id;?>
&amp;updateemployee" class="employee_name dropdown-toggle" data-toggle="dropdown">
						<span class="employee_avatar_small"><?php echo $_smarty_tpl->tpl_vars['employee_avatar']->value;?>
</span>
						<?php echo smartyTranslate(array('s'=>"Me"),$_smarty_tpl);?>

						<i class="caret"></i>
					</a>
					<ul id="employee_links" class="dropdown-menu">
						<li><span class="employee_avatar"><?php echo $_smarty_tpl->tpl_vars['employee_avatar']->value;?>
</span></li>
						<li class="text-center"><?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>
</li>
						<li class="divider"></li>
						<li><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminEmployees'), 'html', 'UTF-8');?>
&id_employee=<?php echo $_smarty_tpl->tpl_vars['employee']->value->id;?>
&amp;updateemployee"><i class="icon-wrench"></i> <?php echo smartyTranslate(array('s'=>'My preferences'),$_smarty_tpl);?>
</a></li>
						<li class="divider"></li>
						<li><a id="header_logout" href="<?php echo $_smarty_tpl->tpl_vars['default_tab_link']->value;?>
&amp;logout"><i class="icon-signout"></i> <?php echo smartyTranslate(array('s'=>'Log out'),$_smarty_tpl);?>
</a></li>
					</ul>
				</li>
			</ul>

			<span id="ajax_running" class="navbar-text">
				<i class="icon-refresh icon-spin"></i> <?php echo smartyTranslate(array('s'=>'Loading...'),$_smarty_tpl);?>

			</span>
		</div>
<?php if (isset($_smarty_tpl->tpl_vars['displayBackOfficeTop']->value)){?><?php echo $_smarty_tpl->tpl_vars['displayBackOfficeTop']->value;?>
<?php }?>
		</nav>
	</header>


	<div id="main">
		<?php echo $_smarty_tpl->getSubTemplate ('nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<div id="content" class="<?php if (!$_smarty_tpl->tpl_vars['bootstrap']->value){?>nobootstrap<?php }else{ ?>bootstrap<?php }?>">
			<?php if (isset($_smarty_tpl->tpl_vars['page_header_toolbar']->value)){?><?php echo $_smarty_tpl->tpl_vars['page_header_toolbar']->value;?>
<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['modal_module_list']->value)){?><?php echo $_smarty_tpl->tpl_vars['modal_module_list']->value;?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['install_dir_exists']->value){?>
			<div class="alert alert-warning">
				<?php echo smartyTranslate(array('s'=>'For security reasons, you must also:'),$_smarty_tpl);?>
&nbsp;<?php echo smartyTranslate(array('s'=>'delete the /install folder'),$_smarty_tpl);?>

			</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['is_multishop']->value&&$_smarty_tpl->tpl_vars['shop_list']->value&&($_smarty_tpl->tpl_vars['multishop_context']->value&Shop::CONTEXT_GROUP||$_smarty_tpl->tpl_vars['multishop_context']->value&Shop::CONTEXT_SHOP)){?>
			<div class="panel multishop_toolbar clearfix">
				<div class="col-lg-12 form-horizontal">
					<label class="control-label col-lg-3"><i class="icon-sitemap"></i> <?php echo smartyTranslate(array('s'=>'Multistore configuration for'),$_smarty_tpl);?>
</label>
					<div class="col-lg-4"><?php echo $_smarty_tpl->tpl_vars['shop_list']->value;?>
</div>
				</div>
			</div>
<?php }?>


<?php }else{ ?>
	<body<?php if (isset($_smarty_tpl->tpl_vars['lite_display']->value)&&$_smarty_tpl->tpl_vars['lite_display']->value){?> class="display-modal"<?php }?>>
		<div id="main">
			<div id="content" class="<?php if (!$_smarty_tpl->tpl_vars['bootstrap']->value){?>nobootstrap<?php }else{ ?>bootstrap<?php }?>">
<?php }?>
<?php }} ?>