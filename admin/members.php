<?php
session_start (); 
$pageTitle='Members';
if(isset( $_SESSION['Username'])){
 
    include 'init.php';
$do=isset($_GET['do'])?$GET['do']:'Mange';
    
    if($do=='Manage'){
        
        
    }elseif($do=='Edit'){    ?>

    <h1 class="text-center">Edit Member</h1>  
<div class="container">

<form class="form-horizontal">
   <div class="form-group">
    <label class="col-sm-2 control-label">
       
       Username
       </label>
       <div class="col-sm-10">
       <input type="text" name="username" class="form-control" autocomplete="off">
       </div>
    </div>
    //////////////////////////
    <div class="form-group">
    <label class="col-sm-2 control-label">
       
       Password
       </label>
       <div class="col-sm-10">
       <input type="Password" name="Password" class="form-control" autocomplete="new-password">
       </div>
    </div>
    /////////////////////:::::
    /////////////////////:::::
     //////////////////////////
    <div class="form-group">
    <label class="col-sm-2 control-label">
       
       Email
       </label>
       <div class="col-sm-10">
       <input type="email" name="email" class="form-control">
       </div>
    </div>
    /////////////////////:::::
     //////////////////////////
    <div class="form-group">
    <label class="col-sm-2 control-label">
       
       Full Name
       </label>
       <div class="col-sm-10">
       <input type="text" name="full" class="form-control">
       </div>
    </div>
    /////////////////////:::::
    <div class="form-group">
       <div class="col-sm-offset-2 col-sm-10">
       <input type="sumit" value="Save" class="btn btn-primary">
       </div>
    </div>
    ////////////////////////////////
    </form>
</div>
  <?php  }
    
    include $tpl.'footer.php';
}
else{
    header('Location : index.php');
    exit();
}