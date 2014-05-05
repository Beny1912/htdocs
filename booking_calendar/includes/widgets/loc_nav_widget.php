<?php
// day_nav_widget.php
// Displays the Day Navigation

  // Additional Style Features
  $highlight_style = ' style="color : #000000; font-size : 11px; font-weight : bold; text-decoration : none;"';
?>

<table cellspacing="1" cellpadding="1" width="100%" border="0">
  <tr>
      <td nowrap="nowrap" align="center" valign="middle" class="BgcolorDull2">
	  <img src="<?php echo DIR_WS_IMAGES; ?>/spacer.gif" width="15" height="15" />
      Select Location: &nbsp;&nbsp;
	  <img src="<?php echo DIR_WS_IMAGES; ?>/spacer.gif" width="15" height="15" />
      </td>
  </tr>
</table>

<table cellspacing="1" cellpadding="1" width="100%" border="0">
  <tr>
	<td nowrap="nowrap" align="center" valign="middle" class="BgcolorNormal"><span class="FontSoftSmall">
<?php reset($location_display);
   while (list ($location_id, $location_display_name)= each($location_display)) { ?>
		<a href="<?php echo href_link(NAV_SCRIPT_NAME, 'loc='.$location_id.'&'.make_hidden_fields_workstring(array('date', 'view')), 'NONSSL'); ?>" 
		<?php echo ($_REQUEST['loc'] == $location_id) ? $highlight_style : ''; ?>><b><?php echo $location_display[$location_id]; ?></b></a><br />
<?php } ?>
	</span></td>
  </tr>
</table>

