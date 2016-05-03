<?php
session_start (); 
if(isset( $_SESSION['Username'])){
     header('Location: dasboard.php');
}
print_r($_SESSION);
include 'init.php';
 include $tpl.'header.php';
 include 'includes/languages/english.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    
   $username=$_POST['user']; 
     $password=$_POST['pass']; 
    $hashedPass=sha1($password);
    echo $hashedPass;
    $stmt=$con->prepare("SELECT Username, Password FROM shop.users WHERE Username=? AND Password=? AND GroupID=1");
    $stmt->execute(array($username, $hashedPass));
   $count=$stmt->rowCount(); 
    echo "</br>".$count; 
    if ($count>0){
       // echo'welcome'. $username;
        $_SESSION['Username']=$username;
        header('Location: dasboard.php');
    }
}
 ?>
///////////////////////////////////////////////////
welcom to index<i class="fa fa-home fa-5x"></i>
<!--<div class="btn btn-danger btn-block">test bootstrap-->
<?php
echo lang('Message').' '.lang('Admin');
?>
<form class="login" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<h4 class="text_center">Admin Login</h4>
<input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off"/>
    
<input class="form-control" type="password" name="pass" placeholder="Password" autocomplete="new-password"/>
<input class="btn btn-lg btn-primary btn-block" type="submit" value="Login"/>

</form>
<?php include $tpl.'footer.php';?>