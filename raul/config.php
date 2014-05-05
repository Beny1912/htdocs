// connect to db
<?php
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

if (! mysql_select_db('park') ) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>