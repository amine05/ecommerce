<?php
include 'init.php';
 include $tpl.'header.php';


 include 'includes/languages/english.php';
 ?>
welcom to index<i class="fa fa-home fa-5x"></i>
<!--<div class="btn btn-danger btn-block">test bootstrap-->
<?php
echo lang('Message').' '.lang('Admin');
?>
<form class="login">
<h4 class="text_center">Admin Login</h4>
<input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off"/>
    
<input class="form-control" type="password" name="pass" placeholder="Password" autocomplete="new-password"/>
<input class="btn btn-lg btn-primary btn-block" type="submit" value="Login"/>

</form>
<?php include $tpl.'footer.php';?>