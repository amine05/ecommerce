<?php
include 'connect.php';
$tpl='includes/templates/';
echo $tpl;
$css='layout/css/';
$js='layout/js/';
$lang='includes/languages/';
$func='includes/functions/';

include $lang.'english.php';
include $tpl.'header.php';
include $tpl.'navbar.php';
include $func.'functions.php';
?>