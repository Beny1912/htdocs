<?php include_once("./includes/application_top.php"); ?>
<?php
$page_title = 'Booking Calendar - Day View';
if (PAGE_REFRESH > 29) { $page_meta_refresh = true; }
include_once("header.php");
?>


<?php include('day_widget.php') ?>


<?php

include_once("footer.php");

include_once("application_bottom.php");
?>