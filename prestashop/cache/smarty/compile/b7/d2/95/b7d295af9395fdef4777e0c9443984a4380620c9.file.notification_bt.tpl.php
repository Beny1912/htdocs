<?php /* Smarty version Smarty-3.1.14, created on 2014-02-28 03:57:35
         compiled from "/Applications/MAMP/htdocs/prestashop/modules/gamification/views/templates/hook/notification_bt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1471518616530ffb1f0bf568-85717440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7d295af9395fdef4777e0c9443984a4380620c9' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/gamification/views/templates/hook/notification_bt.tpl',
      1 => 1393556200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1471518616530ffb1f0bf568-85717440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current_id_tab' => 0,
    'current_level_percent' => 0,
    'current_level' => 0,
    'advice_hide_url' => 0,
    'notification' => 0,
    'badges_to_display' => 0,
    'unlock_badges' => 0,
    'badge' => 0,
    'next_badges' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530ffb1f1bca15_75806527',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ffb1f1bca15_75806527')) {function content_530ffb1f1bca15_75806527($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/prestashop/tools/smarty/plugins/modifier.escape.php';
?><script>
	var current_id_tab = <?php echo intval($_smarty_tpl->tpl_vars['current_id_tab']->value);?>
;
	var current_level_percent = <?php echo intval($_smarty_tpl->tpl_vars['current_level_percent']->value);?>
;
	var current_level = <?php echo intval($_smarty_tpl->tpl_vars['current_level']->value);?>
;
	var gamification_level = '<?php echo smartyTranslate(array('s'=>'Level','js'=>1),$_smarty_tpl);?>
';
	var advice_hide_url = '<?php echo $_smarty_tpl->tpl_vars['advice_hide_url']->value;?>
';
	var hide_advice = '<?php echo smartyTranslate(array('s'=>'Do you really want to hide this advice?','js'=>1),$_smarty_tpl);?>
';

	$('#dropdown_gamification').click(function () {
		return false;
	});
	
	function gamificationDisplayTab(elt)
	{
		$('#gamification_tab li, .tab-pane').removeClass('active');
		$(elt).parent('li').addClass('active');
		$('#'+$(elt).data('target')).addClass('active');
	}
	
</script>
<li id="gamification_notif" style="background:none" class="dropdown">
	<a href="javascript:void(0);" class="dropdown-toggle gamification_notif" data-toggle="dropdown">
		<i class="icon-trophy"></i>
		<span id="gamification_notif_number_wrapper" class="notifs_badge">
			<span id="gamification_notif_value"><?php echo intval($_smarty_tpl->tpl_vars['notification']->value);?>
</span>
		</span>
	</a>
	<div class="dropdown-menu notifs_dropdown" id="dropdown_gamification">
		<section id="gamification_notif_wrapper" class="notifs_panel" style="width:325px">
			<header class="notifs_panel_header">
				<h3><?php echo smartyTranslate(array('s'=>'Your Merchant Expertise','mod'=>'gamification'),$_smarty_tpl);?>

					<span class="label label-default" style="float:right"><?php echo smartyTranslate(array('s'=>'Level','mod'=>'gamification'),$_smarty_tpl);?>
 <?php echo intval($_smarty_tpl->tpl_vars['current_level']->value);?>
 : <?php echo intval($_smarty_tpl->tpl_vars['current_level_percent']->value);?>
 %</span>
				</h3>
			</header>
			<div class="progress" style="margin: 10px">
				<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo intval($_smarty_tpl->tpl_vars['current_level_percent']->value);?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo intval($_smarty_tpl->tpl_vars['current_level_percent']->value);?>
%;">
				<span style="color:#FFF"><?php echo smartyTranslate(array('s'=>'Level','mod'=>'gamification'),$_smarty_tpl);?>
 <?php echo intval($_smarty_tpl->tpl_vars['current_level']->value);?>
 : <?php echo intval($_smarty_tpl->tpl_vars['current_level_percent']->value);?>
 %</span>
				</div>
			</div>
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" id="gamification_tab" style="margin-left:10px">
				<li class="active">
					<a href="#home" data-toggle="tab" data-target="gamification_1" onclick="gamificationDisplayTab(this); return false;"><?php echo smartyTranslate(array('s'=>'Last badge :','mod'=>'gamification'),$_smarty_tpl);?>
</a>
				</li>
				<li>
					<a href="#profile" data-toggle="tab" data-target="gamification_2" onclick="gamificationDisplayTab(this); return false;"><?php echo smartyTranslate(array('s'=>'Next badge :','mod'=>'gamification'),$_smarty_tpl);?>
</a>
				</li>
			</ul>
			
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="gamification_1">
					<ul id="gamification_badges_list" style="<?php if (count($_smarty_tpl->tpl_vars['badges_to_display']->value)<=2){?> height:155px;<?php }?> padding-left:0">
					<?php  $_smarty_tpl->tpl_vars['badge'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['badge']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unlock_badges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['badge']->key => $_smarty_tpl->tpl_vars['badge']->value){
$_smarty_tpl->tpl_vars['badge']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['badge']->value->id){?>
							<li class="<?php if ($_smarty_tpl->tpl_vars['badge']->value->validated){?> unlocked <?php }else{ ?> locked <?php }?>" style="float:left;">
								<span class="<?php if ($_smarty_tpl->tpl_vars['badge']->value->validated){?> unlocked_img <?php }else{ ?> locked_img <?php }?>" style="left: 12px;"></span>
								<div class="gamification_badges_title"><span><?php if ($_smarty_tpl->tpl_vars['badge']->value->validated){?> <?php echo smartyTranslate(array('s'=>'Last badge :','mod'=>'gamification'),$_smarty_tpl);?>
 <?php }else{ ?> <?php echo smartyTranslate(array('s'=>'Next badge :','mod'=>'gamification'),$_smarty_tpl);?>
 <?php }?></span></div>
								<div class="gamification_badges_img"><img src="<?php echo $_smarty_tpl->tpl_vars['badge']->value->getBadgeImgUrl();?>
"></div>
								<div class="gamification_badges_name"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['badge']->value->name, 'html', 'UTF-8');?>
</div>
							</li>
						<?php }?>
					<?php } ?>
					</ul>
				</div>
				<div class="tab-pane" id="gamification_2">
					<ul id="gamification_badges_list" style="<?php if (count($_smarty_tpl->tpl_vars['badges_to_display']->value)<=2){?> height:155px;<?php }?> padding-left:0">
					<?php  $_smarty_tpl->tpl_vars['badge'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['badge']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['next_badges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['badge']->key => $_smarty_tpl->tpl_vars['badge']->value){
$_smarty_tpl->tpl_vars['badge']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['badge']->value->id){?>
							<li class="<?php if ($_smarty_tpl->tpl_vars['badge']->value->validated){?> unlocked <?php }else{ ?> locked <?php }?>" style="float:left;">
								<span class="<?php if ($_smarty_tpl->tpl_vars['badge']->value->validated){?> unlocked_img <?php }else{ ?> locked_img <?php }?>" style="left: 12px;"></span>
								<div class="gamification_badges_title"><span><?php if ($_smarty_tpl->tpl_vars['badge']->value->validated){?> <?php echo smartyTranslate(array('s'=>'Last badge :','mod'=>'gamification'),$_smarty_tpl);?>
 <?php }else{ ?> <?php echo smartyTranslate(array('s'=>'Next badge :','mod'=>'gamification'),$_smarty_tpl);?>
 <?php }?></span></div>
								<div class="gamification_badges_img"><img src="<?php echo $_smarty_tpl->tpl_vars['badge']->value->getBadgeImgUrl();?>
"></div>
								<div class="gamification_badges_name"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['badge']->value->name, 'html', 'UTF-8');?>
</div>
							</li>
						<?php }?>
					<?php } ?>
					</ul>
				</div>
			</div>

			<footer class="panel-footer">
				<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminGamification');?>
"><?php echo smartyTranslate(array('s'=>'View my complete profile','mod'=>'gamification'),$_smarty_tpl);?>
</a>
			</footer>
		</section>
	</div>
</li>
<?php }} ?>