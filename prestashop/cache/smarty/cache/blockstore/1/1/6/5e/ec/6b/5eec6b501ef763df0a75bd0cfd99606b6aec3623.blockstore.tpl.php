<?php /*%%SmartyHeaderCode:52954721153744ba9ce2b77-74642988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eec6b501ef763df0a75bd0cfd99606b6aec3623' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/blockstore/blockstore.tpl',
      1 => 1391446186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52954721153744ba9ce2b77-74642988',
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53744ba9d31169_76192546',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53744ba9d31169_76192546')) {function content_53744ba9d31169_76192546($_smarty_tpl) {?>
<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<p class="title_block">
		<a href="http://localhost:8888/prestashop/es/tiendas" title="Nuestras tiendas">
			Nuestras tiendas
		</a>
	</p>
	<div class="block_content blockstore">
		<p class="store_image">
			<a href="http://localhost:8888/prestashop/es/tiendas" title="Nuestras tiendas">
				<img class="img-responsive" src="http://localhost:8888/prestashop/modules/blockstore/store.jpg" alt="Nuestras tiendas" />
			</a>
		</p>
        <p class="store-description">
        	Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn.
        </p>
		<div>
			<a 
			class="btn btn-default button button-small" 
			href="http://localhost:8888/prestashop/es/tiendas" 
			title="Nuestras tiendas">
				<span>Descubra nuestras tiendas<i class="icon-chevron-right right"></i></span>
			</a>
		</div>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>